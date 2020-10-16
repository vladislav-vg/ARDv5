<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\AboutDetails;
use App\Models\AboutFeedbacks;
use App\Models\AboutWorks;
use App\Models\Services;
use Carbon\Carbon;

class FrontController extends Controller
{
    

    //
    public function showNews(){
    	$newnews = Post::orderBy('created_at', 'desc')->Paginate(2);
        $blogPage = Page::where('title', '=', 'Blog')->firstOrFail();
    	
    	return view('news', compact('newnews', 'blogPage'));
    }

    public function newsDetails($slug){
    	$new = Post::where('slug', '=', $slug)->firstOrFail();
    	
    	return view('news-details', compact('new'));
    }

    public function slidersMain(){
		$mainSlides = Slider::orderBy('created_at', 'desc')->get();
        $homePage = Page::where('title', '=', 'Home')->firstOrFail();
		
    	return view('home', compact('mainSlides','homePage'));
    }
    public function contacts(){
        $contacts = Page::where('title', '=', 'Contacts')->firstOrFail();
        
        return view('contacts', compact('contacts'));
    }

    public function postsPortfolio(){
		$portfolioPost = Portfolio::orderBy('created_at', 'desc')->Paginate(9);
        $portfolioPage = Page::where('title', '=', 'Portfolio')->firstOrFail();

    	return view('portfolio', compact('portfolioPost','portfolioPage'));
    }


    public function portfolioDetail($slug){
    	$onepost = Portfolio::where('slug', '=', $slug)->firstOrFail();
    	
    	return view('portfolio-details', compact('onepost'));
    }

    public function about(){
		$aboutDetail = AboutDetails::orderBy('created_at', 'desc')->first();
		$aboutWork = AboutWorks::orderBy('created_at', 'asc')->get();
		$aboutFeedback = AboutFeedbacks::orderBy('created_at', 'desc')->get();
        $aboutPage = Page::where('title', '=', 'About')->firstOrFail();

    	return view('about', compact('aboutDetail','aboutWork','aboutFeedback','aboutPage'));
    }

    public function showServices(){
        $newservices = Services::orderBy('created_at', 'desc')->get();
        $servicesPage = Page::where('title', '=', 'Services')->firstOrFail();
        
        return view('services', compact('newservices','servicesPage'));
    }

    public function servicesDetails($slug){
        $oneService = Services::where('slug', '=', $slug)->firstOrFail();
        
        return view('services-details', compact('oneService'));
    }
    
}
