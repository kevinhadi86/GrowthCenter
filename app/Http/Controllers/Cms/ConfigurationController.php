<?php

namespace App\Http\Controllers\Cms;

use App\Configuration;
use App\Question;
use App\Testimony;
use App\Category;
use App\Article;
use App\Diagram;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    // HOME PAGE
    public function manageHome()
    {
        $configs = Configuration::where('key','like','home%')->get();
        $homeConfigs=array('homeQuestion'=>array(),'homeTestimony'=>array(),'homeDiagram'=>array(),);
        foreach($configs as $config){
            $homeConfigs[$config->key]=unserialize($config->value);
        }
        $questions = Question::all();
        $testimonies = Testimony::all();
        $categories = Category::all();
        $articles = Article::all();
        $diagrams = Diagram::all();
        return view('admin.page.app.home.manage', compact('questions','testimonies','categories','articles','diagrams','homeConfigs'));
    }

    public function insertHomeFeaturedQuestion(Request $request)
    {
        $homeQuestionConfig = Configuration::where('key','homeQuestion')->first();
        if($homeQuestionConfig==null){
            $homeQuestionConfig = new Configuration;
            $homeQuestionConfig->key = 'homeQuestion';
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

    //OUR SOLUTION PAGE
    public function manageSolution()
    {
        $configs = Configuration::where('key','like','solution%')->get();
        $solutionConfigs=array('solutionQuestion'=>array());
        foreach($configs as $config){
            $solutionConfigs[$config->key]=unserialize($config->value);
        }
        $questions = Question::all();
        return view('admin.page.app.ourSolution.manage',compact('questions','solutionConfigs'));
    }

    public function insertSolutionFeaturedQuestion(Request $request)
    {
        $solutionQuestionConfig = Configuration::where('key','solutionQuestion')->first();
        if($solutionQuestionConfig==null){
            $solutionQuestionConfig = new Configuration;
            $solutionQuestionConfig->key = 'solutionQuestion';
        }
        $solutionQuestionConfig->value = serialize($request->questionList);
        $solutionQuestionConfig->save();
        return redirect()->route('admin-manage-solution');
    }

    // ABOUT US PAGE
    public function manageAbout()
    {
        $configs = Configuration::where('key','like','about%')->get();
        $aboutConfigs=array('aboutMain'=>'','aboutOur'=>'','aboutWe'=>'');
        foreach($configs as $config){
            $aboutConfigs[$config->key]=$config->value;
        }
        return view('admin.page.app.aboutUs.manage',compact('aboutConfigs'));
    }

    public function insertAboutMainSection(Request $request)
    {
        $aboutMainConfig = Configuration::where('key','aboutMain')->first();
        if($aboutMainConfig==null){
            $aboutMainConfig = new Configuration;
            $aboutMainConfig->key = 'aboutMain';
        }
        $aboutMainConfig->value = $request->mainSectionText;
        $aboutMainConfig->save();
        return redirect()->route('admin-manage-about');
    }
    public function insertAboutOurBelief(Request $request)
    {
        $aboutMainConfig = Configuration::where('key','aboutOur')->first();
        if($aboutMainConfig==null){
            $aboutMainConfig = new Configuration;
            $aboutMainConfig->key = 'aboutOur';
        }
        $aboutMainConfig->value = $request->ourBeliefText;
        $aboutMainConfig->save();
        return redirect()->route('admin-manage-about');
    }
    public function insertAboutWeBelieve(Request $request)
    {
        $aboutMainConfig = Configuration::where('key','aboutWe')->first();
        if($aboutMainConfig==null){
            $aboutMainConfig = new Configuration;
            $aboutMainConfig->key = 'aboutWe';
        }
        $aboutMainConfig->value = $request->weBelieveText;
        $aboutMainConfig->save();
        return redirect()->route('admin-manage-about');
    }

    public function manageBlog()
    {
        $configs = Configuration::where('key','like','blog%')->get();
        $blogConfigs=array('blogTop'=>array(),'blogFeatured'=>array());
        if($configs!=null){
            foreach($configs as $config){
                if($config->key == 'blogTop'){
                    $blogConfigs[$config->key]=$config->value;
                }else{
                    $blogConfigs[$config->key]=unserialize($config->value);
                }
                
            }
        }
        $articles = Article::all();
        return view('admin.page.app.blog.manage', compact('articles','blogConfigs'));
    }

    public function insertBlogTopArticle(Request $request)
    {
        $blogConfig = Configuration::where('key','blogTop')->first();
        if($blogConfig==null){
            $blogConfig = new Configuration;
            $blogConfig->key = 'blogTop';
        }
        $blogConfig->value = $request->topArticle;
        $blogConfig->save();
        return redirect()->route('admin-manage-blog');
    }

    public function insertBlogFeaturedArticle(Request $request)
    {
        $blogConfig = Configuration::where('key','blogFeatured')->first();
        if($blogConfig==null){
            $blogConfig = new Configuration;
            $blogConfig->key = 'blogFeatured';
        }
        $blogConfig->value = serialize($request->articleList);
        $blogConfig->save();
        return redirect()->route('admin-manage-blog');
    }
}
