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
}
