<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\str;

class PostContrller extends Controller
{
   
    public function index()
    {
        $posts = Post::get();
        return view('bolg.index',['posts'=>$posts]);
    }

  
    public function create()
    {
        return view('bolg.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $slug = str::slug($request->title, '-');

        $newimage = uniqid() . '-' . $slug . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images') , $newimage);

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $slug,
            'image_path' => $newimage,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog');
    }

    
    public function show(string $slug)
    {
        $slug = Post::where('slug',$slug)->first();
        return view('bolg.show',['slug'=>$slug]);
    }

   
    public function edit(string $slug)
    {
        $slug = Post::where('slug',$slug)->first();
        return view('bolg.edit',['slug'=>$slug]);
    }

    public function update(Request $request, string $slug)
    {
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image_path' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

    //     $slug = str::slug($request->title, '-');

        $newimage = uniqid() . '-' . $slug . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images') , $newimage);

        Post::where('slug', $slug)->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $slug,
            'image_path' => $newimage,
            'user_id' => auth()->user()->id
        ]);
        return redirect('blog/' . $slug)->with('message',"Post Edited");
    }

    public function destroy(string $slug)
    {
        Post::where('slug',$slug)->delete();
        
        return redirect('blog/')->with('message',"Post Deleted");

    }
}
