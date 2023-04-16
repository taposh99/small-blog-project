<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(Request $request)
    {
        // dd($request);
     

      
        $blog = new Blog();
        $blog->blog = $request->blog;
     
        $blog->save();
        toastr()->success('Data has been saved successfully!');
        return back();
    
        // return redirect('/all-blog')->with('message', 'Success');
    }

    public function allBlog()
    {
        return view('allBlog', [
            'blogs' => Blog::all(),
          
        ]);
    }
    public function editblog($id)
    {
        return view('edit-blog', [
            'blog' => Blog::find($id)
        ]);
    }
    public function updateBlog(Request $request)
    {

        $blog = Blog::find($request->blog_id);
        $blog->blog = $request->blog;
       
   
        $blog->save();
        toastr()->success('Update successfully!');
        return redirect('/all-blog');
    }
    public function deleteblog(Request $request)
    {
        $blog = Blog::find($request->blog_id);
      
        $blog->delete();
        toastr()->success('Update successfully!');
        return back();
    }
}
