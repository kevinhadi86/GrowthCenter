<?php

namespace App\Http\Controllers\Cms;

use App\Configuration;
use App\Question;
use App\Testimony;
use App\Category;
use App\Article;
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
    public function manageHome()
    {
        $configs = Configuration::where('key','like','home%')->get();
        $homeConfigs=array('homeQuestion'=>array(),'homeTestimony'=>array(),'homeArticle'=>array(),'homeDiagram'=>array(),);
        foreach($configs as $config){
            $homeConfigs[$config->key]=unserialize($config->value);
        }
        $questions = Question::all();
        $testimonies = Testimony::all();
        $categories = Category::all();
        $articles = Article::all();
        // dd($homeConfigs);
        return view('admin.page.app.home.manage', compact('questions','testimonies','categories','articles','homeConfigs'));
    }

    public function insertHomeFeaturedQuestion(Request $request)
    {
        $homeQuestionConfig = Configuration::where('key','homeQuestion')->first();
        if($homeTestimonyConfig==null){
            $homeTestimonyConfig = new Configuration;
            $homeTestimonyConfig->key = 'homeTestimony';
        }
        $homeQuestionConfig->value = serialize($request->questionList);
        $homeQuestionConfig->save();
        return redirect()->route('admin-manage-home');
    }

    public function insertHomeFeaturedTestimony(Request $request)
    {
        $homeTestimonyConfig = Configuration::where('key','homeTestimony')->first();
        if($homeTestimonyConfig==null){
            $homeTestimonyConfig = new Configuration;
            $homeTestimonyConfig->key = 'homeTestimony';
        }
        $homeTestimonyConfig->value = serialize($request->testimonyList);
        $homeTestimonyConfig->save();
        return redirect()->route('admin-manage-home');
    }

    public function insertHomeFeaturedArticleEachCategory(Request $request)
    {
        $homeArticleConfig = Configuration::where('key','homeArticle')->first();
        $homeArticleConfig->value[$request->article->category->name] = serialize($request->article->id);
        $homeArticleConfig->save();
        return redirect()->route('admin-manage-home');
    }

    //OUR SOLUTION PAGE
    public function manageSolution()
    {
        $configs = Configuration::where('key','like','solution%')->get();
        $solutionConfig[]=array();
        if($configs == null){
            $solutionConfig = new Configuration;
            $solutionConfig['solutionQuestion']='';
            $solutionConfig->save();
        }else{
            $solutionConfig['solutionQuestion']=unserialize($config->value);
        }
        $questions = Question::all();
        return view('admin.page.app.ourSolution.featuredQuestion',compact('questions','solutionConfig'));
    }

    public function insertSolutionFeaturedQuestion(Request $request)
    {
        $solutionQuestionConfig = Configuration::where('key','solutionQuestion')->first();
        $solutionQuestionConfig->value = serialize($request->questionList);
        $solutionQuestionConfig->save();
        return redirect()->route('admin-manage-solution');
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
