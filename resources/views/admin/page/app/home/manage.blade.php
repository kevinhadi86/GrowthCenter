@extends('admin.layout.admin')

@section('content-header')
    Manage Home Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Question Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-home-featured-question')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped" id="question-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Question</th>
                                <th>Category</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                @if(in_array($question->id,$homeConfigs['homeQuestion']))
                                    <td><input type="checkbox" name="questionList[]" value="{{$question->id}}" checked/></td>
                                @else
                                    <td><input type="checkbox" name="questionList[]" value="{{$question->id}}" /></td>
                                @endif
                                    <td>{{$question->question}}</td>
                                    <td>{{$question->category->name}}</td>
                                    <td>{{$question->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Testimony Section</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-home-featured-testimony')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped" id="testimony-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Company</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Quote</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonies as $testimony)
                                <tr>
                                @if(in_array($testimony->id,$homeConfigs['homeTestimony']))
                                    <td><input type="checkbox" name="testimonyList[]" value="{{$testimony->id}}" checked/></td>
                                @else
                                    <td><input type="checkbox" name="testimonyList[]" value="{{$testimony->id}}" /></td>
                                @endif
                                    <td>{{$testimony->company}}</td>
                                    <td>{{$testimony->name}}</td>
                                    <td>{{$testimony->position}}</td>
                                    <td>{{$testimony->quote}}</td>
                                    <td><img src="{{asset('/img/'.$testimony->image)}}" style="width: 100px;"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Article for Each Category Section</h3>
        </div>
        <select id="category-select">
            @foreach($categories as $category)
                @if($loop->first)
                    @php
                        $firstCategory = $category->name
                    @endphp    
                @endif
            <option value="{{$category->name}}">{{$category->name}}</option>
            @endforeach
        </select>
        <div class="box-body" id="category-box">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-home-featured-article')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <table class="table table-bordered table-striped" id="article-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Content</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                @if($article->category->name == $firstCategory)
                                    <tr id="article-id-{{$article[0]->id}}">
                                        <td><input type="radio" name="articleList[]" value="{{$article[0]->id}}" checked/></td>
                                        <td>{{$article[0]->title}}</td>
                                        <td>{{$article[0]->category->name}}</td>
                                        <td>{{$article[0]->author}}</td>
                                        <td class="article-content" data-id="{{$article[0]->content}}"><a data-id="{{$article[0]->id}}" class="btn btn-success preview-content" data-toggle="modal" data-target="#preview-content-modal" >Preview</a></td>
                                        <td><img src="{{asset('/img/'.$article[0]->image)}}" style="width: 100px;"></td>
                                    </tr>
                                    @if(in_array($article->id,$homeConfigs['homeArticle'])==0)
                                    <tr id="article-id-{{$article->id}}">
                                        <td><input type="radio" name="articleList[]" value="{{$article->id}}" /></td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->category->name}}</td>
                                        <td>{{$article->author}}</td>
                                        <td class="article-content" data-id="{{$article->content}}"><a data-id="{{$article->id}}" class="btn btn-success preview-content" data-toggle="modal" data-target="#preview-content-modal" >Preview</a></td>
                                        <td><img src="{{asset('/img/'.$article->image)}}" style="width: 100px;"></td>
                                    </tr>
                                    @endif
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div> -->


    <!-- <div class="modal fade" id="preview-content-modal">
        <div class="modal-dialog">
            
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Preview Content for Article</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                </div>
        </div>
    </div> -->
@endsection

@section('add-style')
<link rel="stylesheet" href="{asset('/lib/admin/data-table/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('add-script')
<script src="{{asset('/lib/admin/data-table/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/lib/admin/data-table/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function() {
            $('#question-table').DataTable({
                'paging'      : true,
                'searching'   : true,
                "order": [[ 0, "desc" ]]
            });
            $('#testimony-table').DataTable({
                'paging'      : true,
                'searching'   : true,
                "order": [[ 0, "desc" ]]
            });
            // $('#article-table').DataTable({
            //     'paging'      : true,
            //     'searching'   : true,
            //     "order": [[ 0, "desc" ]]
            // });
            // $('.preview-content').click(function() {
            //     $modal = $('#preview-content-modal');
            //     var id = $(this).data('id');
            //     $row = $('#article-id-' + id);
            //     $modal.find("div[class=modal-body]").html($row.find(".article-content").data('id'));
            //     console.log(id)
            //     $modal.find('form').attr('action', link);
            // });
        })
        
    </script>
@endsection