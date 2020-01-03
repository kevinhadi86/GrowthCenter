@extends('admin.layout.admin')

@section('content-header')
    Manage Home Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Article for Category: {{$category->name}}</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin-insert-blog-featured-article')}}">
                {{csrf_field()}}
                <input type="hidden" value="{{$category->id}}" name="category">
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
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr id="article-id-{{$article->id}}">
                                @if(in_array($article->id,$categoryConfig))
                                    <td><input type="checkbox" name="selectedArticle[]" value="{{$article->id}}" checked="checked"/></td>
                                @else
                                    <td><input type="checkbox" name="selectedArticle[]" value="{{$article->id}}" /></td>
                                @endif
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->category->name}}</td>
                                    <td>{{$article->author}}</td>
                                    <td class="article-content" data-id="{{$article->content}}"><a data-id="{{$article->id}}" class="btn btn-success preview-content" data-toggle="modal" data-target="#preview-content-modal" >Preview</a></td>
                                    <td><img src="{{asset('/img/'.$article->image)}}" style="width: 100px;"></td>
                                    <td>{{$article->created_at}}</td>
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

    <div class="modal fade" id="preview-content-modal">
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
    </div>

@endsection

@section('add-style')
<link rel="stylesheet" href="{asset('/lib/admin/data-table/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('add-script')
<script src="{{asset('/lib/admin/data-table/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/lib/admin/data-table/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function(){
            $('#article-table').DataTable({
                'paging'      : true,
                'searching'   : true,
                "order": [[ 0, "desc" ]]
            });
            $('.preview-content').click(function() {
                $modal = $('#preview-content-modal');
                var id = $(this).data('id');
                $row = $('#article-id-' + id);
                $modal.find("div[class=modal-body]").html($row.find(".article-content").data('id'));
            });
        })
    </script>
@endsection