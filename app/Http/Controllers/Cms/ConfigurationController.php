<?php

namespace App\Http\Controllers\Cms;

use App\Configuration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    // DASHBOARD
    public function index()
    {
        return view('admin.page.dashboard');
    }

    // HOME PAGE
    public function featuredArticle()
    {
        return view('admin.page.app.home.featuredArticle');
    }

    public function homeFeaturedQuestion()
    {
        return view('admin.page.app.home.featuredQuestion');
    }

    public function manageDiagram()
    {
        return view('admin.page.app.home.manageDiagram');
    }

    public function pickedTestimony()
    {
        return view('admin.page.app.home.pickedTestimony');
    }

    //OUR SOLUTION PAGE
    public function ourSolutionFeaturedQuestion()
    {
        return view('admin.page.app.ourSolution.featuredQuestion');
    }

    // ABOUT US PAGE
    public function mainSection()
    {
        return view('admin.page.app.aboutUs.mainSection');
    }

    public function ourBelief()
    {
        return view('admin.page.app.aboutUs.ourBelief');
    }

    public function weBelieve()
    {
        return view('admin.page.app.aboutUs.weBelieve');
    }

    //COMPANY CONTACT
    public function companyContact()
    {
        return view('admin.page.app.companyContact');
    }
}
