<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Komentar;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
      /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $komentars = Komentar::latest()->paginate(5);

        //render view with posts
        return view('komentar.index', compact('komentars'));
    }
}
