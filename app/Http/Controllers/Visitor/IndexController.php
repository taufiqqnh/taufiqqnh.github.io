<?php

namespace App\Http\Controllers\Visitor;

use App\Models\Post;
use App\Models\Contact;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4;
use App\Models\Section5;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $section1s = Section1::all();
        $section2s = Section2::all();
        $section3s = Section3::all();
        $section4s = Section4::all();
        $section5s = Section5::all();
        $contacts = Contact::all();
        return view('visitor.index', compact('posts','contacts','section1s','section2s','section3s','section4s','section5s'));
    }

}
