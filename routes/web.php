<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home')->name('home');
Route::group(['prefix'=>'admin/growth'], function(){

    #Home
    Route::get('/', 'Cms\ConfigurationController@index')->name('adminHome');

    #Team Member
    Route::get('/teamMember', 'Cms\TeamMemberController@index')->name('adminTeamMember');

    #Testimony
    Route::get('/testimony', 'Cms\TestimonyController@index')->name('adminTestimony');

    #Category
    Route::get('/category', 'Cms\CategoryController@index')->name('adminCategory');

    #Question
    Route::get('/question', 'Cms\QuestionController@index')->name('adminQuestion');

    #Solution
    Route::get('/solution', 'Cms\SolutionController@index')->name('adminSolution');

    #SuccessStory
    Route::get('/successStory', 'Cms\SuccessStoryController@index')->name('adminSuccessStory');

    #Article
    Route::get('/article', 'Cms\ArticleController@index')->name('adminArticle');

    #ContactUsResult
    Route::get('/contactUsResult', 'Cms\ContactUsController@index')->name('adminContactUsResult');

    #SubscribedUser
    Route::get('/subscribedUser', 'Cms\SubscribedUserController@index')->name('adminSubscribedUser');

    #homeFeaturedQuestion
    Route::get('/homeFeaturedQuestion', 'Cms\ConfigurationController@homeFeaturedQuestion')->name('adminHomeFeaturedQuestion');

    #HomePickedTestimony
    Route::get('/homePickedTestimony', 'Cms\ConfigurationController@pickedTestimony')->name('adminHomePickedTestimony');

    #HomeFeaturedArticle
    Route::get('/homeFeaturedArticle', 'Cms\ConfigurationController@featuredArticle')->name('adminHomeFeaturedArticle');

    #HomeManageDiagram
    Route::get('/homeManageDiagram', 'Cms\ConfigurationController@manageDiagram')->name('adminHomeManageDiagram');

    #SolutionFeaturedQuestion
    Route::get('/solutionFeaturedQuestion', 'Cms\ConfigurationController@ourSolutionfeaturedQuestion')->name('adminSolutionFeaturedQuestion');

    #AboutManageMainSection
    Route::get('/aboutManageMainSection', 'Cms\ConfigurationController@mainSection')->name('adminAboutManageMainSection');

    #AboutManageOurBelief
    Route::get('/aboutManageOurBelief', 'Cms\ConfigurationController@ourBelief')->name('adminAboutManageOurBelief');

    #AboutManageWeBelieve
    Route::get('/aboutManageWeBelieve', 'Cms\ConfigurationController@weBelieve')->name('adminAboutManageWeBelieve');

    #CompanyContact
    Route::get('/companyContact', 'Cms\ConfigurationController@companyContact')->name('adminCompanyContact');

});
