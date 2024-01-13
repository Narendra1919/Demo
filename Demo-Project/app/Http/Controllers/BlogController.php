<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogAddRequest;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Blog::all();
        return view('blog.index',['user'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogAddRequest $request)
    {
        // dd($request);
        $file = $request->file('image'); 
        //Move Uploaded File
        $destinationPath = 'assets/media/photos';
        $ext = $file->getClientOriginalExtension() !== "" ? $file->getClientOriginalExtension() : $file->extension();
        $file_name=time().".".$ext;
        $file->move($destinationPath,$file_name);

        

    
    // $photoPath = $request->file('photo')->store('img', 'public');
    $inputs=[
        'auther_name' => $request->auther_name,
        'title' => $request->title,
        'description' => $request->description,
        'image' => $file_name,
        'status'=>'1'
        
    ];
    $blog=Blog::create($inputs);

    return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Blog::where('id',$id)->first();
        return view('blog.detail',['show'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Blog::where('id',$id)->first();
        return view('blog.edit',['edit'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Blog::where('id',$id)->update([
            'title' => $request->title,
            'auther_name' => $request->auther_name,
            'description' => $request->description,
        ]);

        $user = Blog::where('id',$id)->first();
        return view('blog.edit',['edit'=>$user]);
       
        
    }

    public function admin()
    {
        return view('blog.admin');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
