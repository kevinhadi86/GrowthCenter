@extends('admin.layout.admin')

@section('content-header')
    Manage Articles
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <a href="{{route('admin-article-create')}}">
                <button class="btn btn-primary">Insert</button>
            </a>
            <hr>
            <table class="table table-bordered table-striped" id="article-table">
                <thead>
                <tr>
                    <th class="col-md-2">Title</th>
                    <th class="col-md-2">Category</th>
                    <th class="col-md-1">Author</th>
                    <th class="col-md-3">Content</th>
                    <th class="col-md-2">Image</th>
                    <th class="col-md-1">Created At</th>
                    <th class="col-md-1">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr id="article-id-{{$article->id}}">
                            <td>{{$article->title}}</td>
                            <td>{{$article->category->name}}</td>
                            <td>{{$article->author}}</td>
                            <td class="article-content" data-id="{{$article->content}}"><button data-id="{{$article->id}}" class="btn btn-success preview-content" data-toggle="modal" data-target="#preview-content-modal" >Preview</button></td>
                            <td><img src="{{asset('/img/'.$article->image)}}" style="width: 100px;"></td>
                            <td>{{$article->created_at}}</td>
                            <td>
                                <a href="{{route('admin-article-edit', ['id' => $article->id])}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <button class="btn btn-danger delete-article" data-toggle="modal" data-target="#delete-modal" data-link="{{route('admin-article-destroy', ['id' => $article->id])}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Delete Article</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this article?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Yes</button>
                        <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">No</button>
                    </div>
                </div>
            </form>
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
            $('.delete-article').click(function() {
                var link = $(this).data('link');
                $modal = $('#delete-modal');
                $modal.find('form').attr('action', link);
            });
            $('.preview-content').click(function() {
                var link = $(this).data('link');
                $modal = $('#preview-content-modal');
                var id = $(this).data('id');
                $row = $('#article-id-' + id);
                $modal.find("div[class=modal-body]").html($row.find(".article-content").data('id'));
                console.log(id)
                $modal.find('form').attr('action', link);
            });
        })
    </script>
@endsection