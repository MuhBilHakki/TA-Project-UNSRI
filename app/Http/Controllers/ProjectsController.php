<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //

    public function index()
    {
        //get posts
        // $posts = Mahasiswa::latest()->paginate(5);
        
        $first = 'Tes';
        //render view with posts
        // return view( view: 'projects.index', data: compact('posts'));
        return view( view: 'projects.index', data: compact('first'));
    }
    
}
