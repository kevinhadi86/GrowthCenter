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

Route::group(['namespace' => "Client"], function() {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/contact-us', 'ContactUsController@page')->name('contact-us');
    Route::post('/contact-us', 'ContactUsController@submit');
    Route::get('/about-us', "AboutUsController@page")->name("about-us");
    Route::get('/our-team', "OurTeamController@page")->name("our-team");
    Route::get('/our-solutions', "OurSolutionsController@page")->name('our-solutions');
    Route::get('/our-solutions-detail/{id}', "OurSolutionsDetailController@page")->name('our-solutions-detail');
    Route::get('/our-solutions/question/{id}', "OurSolutionsController@getByQuestionId");
    Route::get('/blog', "BlogController@page")->name('blog');
    Route::get('/blog/category/{categoryId}', "BlogController@getByCategory");
    Route::get('/blog-detail/{id}', "BlogDetailController@page")->name('blog-detail');
    Route::get('/success-story/{id}', "BlogDetailController@successStoryPage")->name('success-story');
    Route::post('/subscribe', "SubscribeController@post")->name('subscribe');
});
Route::group(['prefix'=>'admin/growth'], function(){
    #Home
    Route::get('/', 'Cms\ConfigurationController@index')->name('admin-home');

    #Team Member
    Route::get('/teamMember', 'Cms\TeamMemberController@index')->name('admin-team-member');
    Route::post('/teamMember', 'Cms\TeamMemberController@store');
    Route::post('/teamMember/edit/{id}', 'Cms\TeamMemberController@update')->name('admin-team-member-update');
    Route::post('/teamMember/delete/{id}', 'Cms\TeamMemberController@destroy')->name('admin-team-member-destroy');

    #Testimony
    Route::get('/testimony', 'Cms\TestimonyController@index')->name('admin-testimony');
    Route::post('/testimony', 'Cms\TestimonyController@store');
    Route::post('/testimony/edit/{id}', 'Cms\TestimonyController@update')->name('admin-testimony-update');
    Route::post('/testimony/delete/{id}', 'Cms\TestimonyController@destroy')->name('admin-testimony-destroy');

    #Category
    Route::get('/category', 'Cms\CategoryController@index')->name('admin-category');
    Route::post('/category', 'Cms\CategoryController@store');
    Route::post('/category/edit/{id}', 'Cms\CategoryController@update')->name('admin-category-update');
    Route::post('/category/delete/{id}', 'Cms\CategoryController@destroy')->name('admin-category-destroy');

    #Question
    Route::get('/question', 'Cms\QuestionController@index')->name('admin-question');
    Route::post('/question', 'Cms\QuestionController@store');
    Route::post('/question/edit/{id}', 'Cms\QuestionController@update')->name('admin-question-update');
    Route::post('/question/delete/{id}', 'Cms\QuestionController@destroy')->name('admin-question-destroy');

    #Solution
    Route::get('/solution', 'Cms\SolutionController@index')->name('admin-solution');
    Route::post('/solution', 'Cms\SolutionController@store');
    Route::post('/solution/edit/{id}', 'Cms\SolutionController@update')->name('admin-solution-update');
    Route::post('/solution/delete/{id}', 'Cms\SolutionController@destroy')->name('admin-solution-destroy');

    #SuccessStory
    Route::get('/successStory', 'Cms\SuccessStoryController@index')->name('admin-success-story');
    Route::get('/successStory/add', 'Cms\SuccessStoryController@create')->name('admin-success-story-create');
    Route::post('/successStory/add', 'Cms\SuccessStoryController@store')->name('admin-success-story-store');
    Route::get('/successStory/edit/{id}', 'Cms\SuccessStoryController@edit')->name('admin-success-story-edit');
    Route::post('/successStory/edit/{id}', 'Cms\SuccessStoryController@update')->name('admin-success-story-update');
    Route::post('/successStory/delete/{id}', 'Cms\SuccessStoryController@destroy')->name('admin-success-story-destroy');

    #Article
    Route::get('/article', 'Cms\ArticleController@index')->name('admin-article');
    Route::get('/article/add', 'Cms\ArticleController@create')->name('admin-article-create');
    Route::post('/article/add', 'Cms\ArticleController@store')->name('admin-article-store');
    Route::get('/article/edit/{id}', 'Cms\ArticleController@edit')->name('admin-article-edit');
    Route::post('/article/edit/{id}', 'Cms\ArticleController@update')->name('admin-article-update');
    Route::post('/article/delete/{id}', 'Cms\ArticleController@destroy')->name('admin-article-destroy');

    #ContactUsResult
    Route::get('/contactUsResult', 'Cms\ContactUsController@index')->name('admin-contact-us-result');

    #SubscribedUser
    Route::get('/subscribedUser', 'Cms\SubscribedUserController@index')->name('admin-subscribed-user');
    Route::get('/subscribedUser/export', 'Cms\SubscribedUserController@export')->name('admin-subscribed-user-export');

    #manageHomePage
    Route::get('/manageHome', 'Cms\ConfigurationController@manageHome')->name('admin-manage-home');
    Route::post('/manageHome', 'Cms\ConfigurationController@selectCategory')->name('admin-select-category-home');
    Route::get('/selectArticle/{id}', 'Cms\ConfigurationController@selectArticlePage')->name('admin-manage-home-select-article');
    Route::post('/homeFeaturedQuestion', 'Cms\ConfigurationController@insertHomeFeaturedQuestion')->name('admin-insert-home-featured-question');
    Route::post('/homeFeaturedTestimony', 'Cms\ConfigurationController@insertHomeFeaturedTestimony')->name('admin-insert-home-featured-testimony');
    Route::post('/homeFeaturedArticle', 'Cms\ConfigurationController@insertHomeFeaturedArticleEachCategory')->name('admin-insert-home-featured-article');
    Route::post('/updateDiagram/{id}', 'Cms\DiagramController@update')->name('admin-diagram-update');

    #manageOurSolutionPage
    Route::get('/manageSolution', 'Cms\ConfigurationController@manageSolution')->name('admin-manage-solution');
    Route::post('/solutionFeaturedQuestion', 'Cms\ConfigurationController@insertSolutionFeaturedQuestion')->name('admin-insert-solution-featured-question');

    #manageAboutPage
    Route::get('/manageAbout', 'Cms\ConfigurationController@manageAbout')->name('admin-manage-about');
    Route::post('/aboutMainSection', 'Cms\ConfigurationController@insertAboutMainSection')->name('admin-insert-about-main-section');
    Route::post('/aboutOurBelief', 'Cms\ConfigurationController@insertAboutOurBelief')->name('admin-insert-about-our-belief');
    Route::post('/aboutWeBelieve', 'Cms\ConfigurationController@insertAboutWeBelieve')->name('admin-insert-about-we-believe');

    #CompanyContact
    Route::get('/companyContact', 'Cms\CompanyContactController@index')->name('admin-company-contact');
    Route::post('/companyContact', 'Cms\CompanyContactController@store')->name('admin-insert-company-contact');


});
