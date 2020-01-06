@extends('admin.layout.admin')

@section('content-header')
    Manage Questions
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Users</h3>
        </div>
        <div class="box-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#insert-question-modal">Insert</button>
            <hr>
            <table class="table table-bordered table-striped" id="question-table">
                <thead>
                <tr>
                    <th>Question</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($questions as $question)
                        <tr id="question-id-{{$question->id}}">
                            <td class="question question-question">{{$question->question}}</td>
                            <td class="question question-category" data-id="{{$question->category->id}}">{{$question->category->name}}</td>
                            <td class="question question-description">{{$question->description}}</td>
                            <td><img src="{{asset('/img/'.$question->image)}}" style="width: 100px;"></td>
                            <td>
                                <button class="btn btn-info update-question-button" data-toggle="modal" data-target="#update-question-modal" data-link="{{route('admin-question-update', ['id' => $question->id])}}" data-id="{{$question->id}}">Edit Question</button>
                                <button class="btn btn-danger delete-question-button" data-toggle="modal" data-target="#delete-question-modal" data-link="{{route('admin-question-destroy', ['id' => $question->id])}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="insert-question-modal">
        <div class="modal-dialog">
            <form role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Insert Question</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" name="question" placeholder="Question" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category"> 
                                <option>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" name="category">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" placeholder="Description" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" placeholder="Image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Insert</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="update-question-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Update for <span class="name"></span></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" name="question" placeholder="Question" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category"> 
                                <option>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" name="category">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" placeholder="Description" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" placeholder="Image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Update Question</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="delete-question-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Delete Question</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete question <span class="name"></span>?
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
        $(function() {
            $('#question-table').DataTable({
                'paging'      : true,
                'searching'   : true,
            });
            $('.delete-question-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                $modal = $('#delete-question-modal');
                $modal.find('.name').html(name);
                $modal.find('form').attr('action', link);
            });
            $('.update-question-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                //ambil id dari data-id
                var id = $(this).data('id');
                //ambil row dari ngambil 1 tr itu
                $row = $('#question-id-' + id);
                $modal = $('#update-question-modal');
                //cari di modal, input yang punya name question, then di isi pake row yang punya class question-question
                $modal.find("input[name=question]").val($row.find(".question-question").html())
                $modal.find("select[name=category]").val($row.find(".question-category").data('id'))
                $modal.find("input[name=description]").val($row.find(".question-description").html())
                $modal.find('.name').val($row.find(".question-name").html())
                $modal.find('form').attr('action', link);
            });
        })
    </script>
@endsection