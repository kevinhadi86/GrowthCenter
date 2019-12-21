@extends('admin.layout.admin')

@section('content-header')
    Manage Success Stories
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <a href="{{route('admin-success-story-create')}}">
                <button class="btn btn-primary">Insert</button>
            </a>
            <hr>
            <table class="table table-bordered table-striped" id="success-story-table">
                <thead>
                <tr>
                    <th class="col-md-2">Title</th>
                    <th class="col-md-2">Question</th>
                    <th class="col-md-1">Author</th>
                    <th class="col-md-3">Content</th>
                    <th class="col-md-2">Image</th>
                    <th class="col-md-1">Created At</th>
                    <th class="col-md-1">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($successStories as $successStory)
                        <tr id="success-story-id-{{$successStory->id}}">
                            <td>{{$successStory->title}}</td>
                            <td>{{$successStory->question->question}}</td>
                            <td>{{$successStory->author}}</td>
                            <td class="success-story-content" data-id="{{$successStory->content}}"><button data-id="{{$successStory->id}}" class="btn btn-success preview-content" data-toggle="modal" data-target="#preview-content-modal" >Preview</button></td>
                            <td><img src="{{asset('/img/'.$successStory->image)}}" style="width: 100px;"></td>
                            <td>{{$successStory->created_at}}</td>
                            <td>
                                <a href="{{route('admin-success-story-edit', ['id' => $successStory->id])}}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <button class="btn btn-danger delete-success-story" data-toggle="modal" data-target="#delete-modal" data-link="{{route('admin-success-story-destroy', ['id' => $successStory->id])}}">Delete</button>
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
                        <h4 class="modal-title">Preview Content for Success Story</h4>
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
                        <h4 class="modal-title">Delete Success Story</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this success story?
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
        $('#success-story-table').DataTable({
            'paging'      : true,
            'searching'   : true,
            "order": [[ 0, "desc" ]]
        });
        $('.delete-success-story').click(function() {
            var link = $(this).data('link');
            $modal = $('#delete-modal');
            $modal.find('form').attr('action', link);
        });
        $('.preview-content').click(function() {
            var link = $(this).data('link');
            $modal = $('#preview-content-modal');
            var id = $(this).data('id');
            $row = $('#success-story-id-' + id);
            $modal.find("div[class=modal-body]").html($row.find(".success-story-content").data('id'));
            console.log(id)
            $modal.find('form').attr('action', link);
        });
    })
        
    </script>
@endsection