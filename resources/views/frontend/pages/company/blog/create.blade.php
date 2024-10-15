@extends('frontend.layouts.app')

@section('title')
    {{ __('post_job') }}
@endsection

@section('main')
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <x-website.company.sidebar />
                <div class="col-md-9">
                    <div class="dashboard-right tw-ps-0 lg:tw-ps-5">
                        <div class="dashboard-right-header">
                            <span class="sidebar-open-nav">
                                <i class="ph-list"></i>
                            </span>
                        </div>
                        <h2 class="tw-text-2xl tw-font-medium tw-text-[#18191C] tw-mb-8">
                            {{ __('create') }} {{ strtolower(__('post'))  }}
                        </h2>
                        <form class="row mt-4" action="{{ route('company.blog.store') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="author_id" value="{{ auth()->id() }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-lebel">
                                            {{ __('title') }}
                                            <small class="text-danger">*</small>
                                        </label>
                                        <input value="{{ old('title') }}" name="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="{{ __('enter') }} {{ __('title') }}">
                                        @error('title')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-lebel">
                                            {{ __('category') }}
                                            <small class="text-danger">*</small>
                                        </label>
                                        <select name="category_id"
                                            class="select2bs4 @error('category_id') is-invalid @enderror ">
                                            <option value="">{{ __('select_one') }}</option>
                                            @foreach ($categories as $category)
                                                <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="invalid-feedback"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class='mt-3'>
                                <div class="form-group">
                                    <label class="form-lebel">
                                        {{ __('language') }}
                                        <small class="text-danger">*</small>
                                    </label>
                                    <div class="row">
                                        @foreach ($languages as $lang)
                                            <div class="col-md-2">
                                                <input class="custom-control-input" type="radio"
                                                    id="lang_code_{{ $lang->id }}" name="locale"
                                                    {{ $lang->code == old('locale', currentLangCode()) ? 'checked' : '' }}
                                                    value="{{ $lang->code }}"> &nbsp;
                                                <label for="lang_code_{{ $lang->id }}"
                                                    class="custom-control-label">{{ $lang->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('locale')
                                        <span class="text-danger font-size-13 d-block"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-group">
                                    <label class="form-lebel">
                                        {{ __('short_description') }}
                                        <small class="text-danger">*</small>
                                    </label>
                                    <textarea rows="5" type="text" class="form-control height-124px" name="short_description"
                                        placeholder="{{ __('enter') }} {{ __('short_description') }}">{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                        <span class="text-danger font-size-13"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-lebel">
                                        {{ __('description') }}
                                        <small class="text-danger">*</small>
                                    </label>
                                    <textarea id="image_ckeditor" type="text" class="form-control" name="description"
                                        placeholder="{{ __('enter') }}  {{ __('description') }}">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger font-size-13"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="form-group" style="position: relative;">
                                    <label class="form-lebel">
                                        {{ __('thumbnail_image') }}
                                        <small class="text-danger">*</small>
                                    </label>
                                    <div class="upload-btn-wrapper">
                                        <input type="file" class="form-control dropify" data-default-file=""
                                            name="image" accept="image/png, image/jpg, image/jpeg, image/gif"
                                            data-allowed-file-extensions='["jpg", "jpeg","png", "gif"]'
                                            data-max-file-size="3M">
                                            <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2 recommended-img-note mb-0">Recommended Image Size: 800x500</p>
                                    </div>
                                    @error('image')
                                        <span class="invalid-feedback d-block"
                                            role="alert"><strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <button type="submit" value="draft" name="status" class="btn btn-secondary my-2 my-sm-0">
                                    <i class="fas fa-archive"></i>&nbsp;{{ __('save_as_draft') }}
                                </button>
                                <button type="submit" class="btn btn-success my-2 my-sm-0">
                                    <i class="fas fa-plus"></i>&nbsp;{{ __('published') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <style>
        input[type=file] {

        }
    </style>
@endsection

@section('script')
    <script src="{{ asset('backend') }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('backend/plugins/dropify/js/dropify.min.js') }}"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2bs4').select2({

        })

        // dropify
        $('.dropify').dropify();
    </script>
@endsection
