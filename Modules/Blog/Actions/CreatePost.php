<?php

namespace Modules\Blog\Actions;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Entities\Post;

class CreatePost
{
    // public static function create($request)
    // {
    //     $post = Post::create($request->except(['image']));

    //     $image = $request->image;
    //     if ($image) {
    //         $url = uploadImage($image, 'post');
    //         $post->update(['image' => $url]);
    //     }

    //     return $post;
    // }
    public static function create($request)
    {
     // dd($request->except(['image', 'author_id']));
    // $post = Post::create($request->except(['image', 'author_id']));
    if (Auth::guard('admin')->check()) {
        $user = Auth::guard('admin')->user(); // Utiliser l'admin connecté
    } else {
        $user = Auth::user(); // Utiliser l'utilisateur connecté
    }
  
    $post= new Post();
   
        $post->title = $request->title;
        $post->locale = $request->locale;
        $post->category_id = $request->category_id;
        $post->short_description = $request->short_description;
        $post->description = $request->description;

        $post->author()->associate($user);
        $post->save();

        $image = $request->image;
        if ($image) {

            $path = 'uploads/images/post';
            $url = uploadImage($image, $path, [800, 500]);

            $post->update(['image' => $url]);
        }

        return $post;
    }
}
