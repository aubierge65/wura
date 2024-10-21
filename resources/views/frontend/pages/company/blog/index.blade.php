@extends('frontend.layouts.app')

@section('title')
{{ __('post_list') }}
@endsection

@section('main')
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <x-website.company.sidebar />
                <div class="col-md-9">
                    <div class="dashboard-right">
                        <div class="dashboard-right-header">
                            <div class="left-text m-0 tw-w-full">
                                <h3 class="f-size-18 lh-1 mb-0 tw-inline-flex">
                                    {{ __('post_list') }}
                                    <span class="text-gray-400">({{ $blogs->total() }})</span>
                                </h3>
                            </div>
                            <div>
                                <a href="{{route('company.blog.create')}}" class="btn btn-success my-2 my-sm-0">Créer un article</a>
                            </div>
                        </div>
                    </div>
                    <div class="db-job-card-table">
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <th>{{ __('image') }}</th>
                                    <th>{{ __('title') }}</th>
                                    <th>{{ __('category') }}</th>
                                    <th>{{ __('comments') }}</th>

                                    <th>{{ __('status') }}</th>
                                    <th width="12%">
                                        {{ __('action') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($blogs->count() > 0)
                                    @foreach ($blogs as $post)
                                        <tr>
                                            <td class="text-center">
                                                <img width="50px" height="50px" class="rounded"
                                                    src="{{ asset($post->image) }}"
                                                    alt="Blog: {{ $post->category->name }}">
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('website.post', $post->slug) }}">{{ $post->title }}</a>
                                            </td>
                                            <td class="text-center">
                                                {{ $post->category->name }}
                                            </td>
                                            <td class="text-center">{{ $post->comments_count }}</td>
                                            {{-- <td class="text-center">{{ $post->author->name }}</td> --}}
                                            <td class="text-center">
                                                <span
                                                    class="{{ $post->status == 'draft' ? 'text-danger bg-danger' : 'text-primary bg-primary' }} text-capitalize py-1 px-2 rounded">
                                                    {{ $post->status }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                {{-- <a href="{{ route('website.post', $post->slug) }}#comments"
                                                    class="btn bg-success">
                                                    <i class="fas fa-comments"></i>
                                                </a> --}}

                                                <a title="{{ __('edit') }}"
                                                    href="{{ route('company.blog.edit', $post) }}"
                                                    class="f-size-25 cursor-pointer text-primary p-1">
                                                    <i class="ph-pencil-simple"></i>
                                                </a>

                                                <form action="{{ route('company.blog.destroy', $post) }}" method="POST"
                                                    class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button
                                                        title="{{ __('delete') }}"
                                                        onclick="return confirm('{{ __('are_you_sure_you_want_to_delete_this_item') }}');"
                                                        class="border border-0 f-size-25 cursor-pointer text-danger-500 p-1 bg-white">
                                                        <i class="ph-trash-simple"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-website.not-found />
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
