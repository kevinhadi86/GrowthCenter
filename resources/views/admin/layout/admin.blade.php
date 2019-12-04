<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Averin Admin</title>
    @include('admin.include.css')
    @yield('script-top')
    <link rel="stylesheet" href="{{asset('/lib/admin/adminlte/css/skins/_all-skins.css')}}">
    <link rel="stylesheet" href="{{asset('/lib/admin/fontawesome/css/all.css')}}">
    @yield('add-style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <div class="logo">
                <strong>Growth Center</strong>
            </div>
            <nav class="navbar navbar-static-top">

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Home',
                        'route' => 'adminHome',
                        'icon' => 'fa fa-home'
                    ])
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Team Member',
                        'route' => 'adminTeamMember',
                        'icon' => 'fa fa-male'
                    ])
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Testimony',
                        'route' => 'adminTestimony',
                        'icon' => 'fa fa-male'
                    ])
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Category',
                        'route' => 'adminCategory',
                        'icon' => 'fa fa-male'
                    ])
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Question',
                        'route' => 'adminQuestion',
                        'icon' => 'fa fa-male'
                    ])
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Solution',
                        'route' => 'adminSolution',
                        'icon' => 'fa fa-male'
                    ])
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-code"></i>
                            <span>Blog</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @include('admin.layout.component.sidebar-item', [
                                'name' => 'Success Story',
                                'route' => 'adminSuccessStory',
                                'icon' => 'fa fa-list'
                            ])
                            @include('admin.layout.component.sidebar-item', [
                                'name' => 'Article',
                                'route' => 'adminArticle',
                                'icon' => 'fa fa-list'
                            ])
                        </ul>
                    </li>
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Contact Us Result',
                        'route' => 'adminContactUsResult',
                        'icon' => 'fa fa-address-book'
                    ])
                    @include('admin.layout.component.sidebar-item', [
                        'name' => 'Subscribed User',
                        'route' => 'adminSubscribedUser',
                        'icon' => 'fa fa-address-book'
                    ])
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-code"></i>
                            <span>Manage App</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-file-code"></i>
                                    <span>Home Page</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => '3 Featured Question',
                                        'route' => 'adminHomeFeaturedQuestion',
                                        'icon' => 'fa fa-list'
                                    ])
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => '5 Picked Testimony',
                                        'route' => 'adminHomePickedTestimony',
                                        'icon' => 'fa fa-list'
                                    ])
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => 'Featured Article',
                                        'route' => 'adminHomeFeaturedArticle',
                                        'icon' => 'fa fa-list'
                                    ])
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => 'Manage Diagram',
                                        'route' => 'adminHomeManageDiagram',
                                        'icon' => 'fa fa-list'
                                    ])
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-file-code"></i>
                                    <span>Our Solution Page</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => '5 Featured Question',
                                        'route' => 'adminSolutionFeaturedQuestion',
                                        'icon' => 'fa fa-list'
                                    ])
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-file-code"></i>
                                    <span>About Us Page</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => 'Manage Main Section',
                                        'route' => 'adminAboutManageMainSection',
                                        'icon' => 'fa fa-list'
                                    ])
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => 'Manage Our Belief',
                                        'route' => 'adminAboutManageOurBelief',
                                        'icon' => 'fa fa-list'
                                    ])
                                    @include('admin.layout.component.sidebar-item', [
                                        'name' => 'Manage We Believe',
                                        'route' => 'adminAboutManageWeBelieve',
                                        'icon' => 'fa fa-list'
                                    ])
                                </ul>
                            </li>
                            @include('admin.layout.component.sidebar-item', [
                                'name' => 'Company Contact',
                                'route' => 'adminCompanyContact',
                                'icon' => 'fa fa-address-book'
                            ])
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                @if(isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Input Error!</h4>
                        {{$errors->first()}}
                    </div>
                @endif
                @if(session('message'))
                    @if(session('message')['type'] == 'success')
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i> Success!</h4>
                            {{session('message')['content']}}
                        </div>
                    @endif
                @endif
                <h1>@yield('content-header')</h1>
            </section>
            <section class="content">
                @yield('content')
            </section>

        </div>
    </div>
</body>
@include('admin.include.js')
@yield('add-script')
</html>