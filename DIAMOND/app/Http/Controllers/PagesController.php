<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome to Laravel';
    	//return view('pages.index', compact('title'));
    	//return view('pages.index')->with('title', $title);
    	return view('pages.index', ['title' => $title]);
    }

    public function about(){
    	$title = 'About Us';
    	return view('pages.about')->with('title', $title);
    }

    public function services(){
    	$data = array(
    		'title' => 'Booking',
    		'services' => ['Web Design', 'Programming', 'SEO']
    	);
    	return view('pages.services')->with($data);
    }
    public function contact(){
        $title = 'Contact';
        return view('pages.contact')->with('title', $title);
    }
}
