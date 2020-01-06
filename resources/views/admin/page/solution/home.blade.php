@extends('admin.layout.admin')

@section('content-header')
    Manage Solutions
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Users</h3>
        </div>
        <div class="box-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#insert-solution-modal">Insert</button>
            <hr>
            <table class="table table-bordered table-striped" id="solution-table">
                <thead>
                <tr>
                    <th>Solution</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Question</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($solutions as $solution)
                        <tr id="solution-id-{{$solution->id}}">
                            <td class="solution solution-solution">{{$solution->solution}}</td>
                            <td class="solution solution-name">{{$solution->name}}</td>
                            <td class="solution solution-position">{{$solution->position}}</td>
                            <td class="solution solution-question" data-id="{{$solution->question->id}}">{{$solution->question->question}}</td>
                            <td class="solution solution-image"><img src="{{asset('/img/'.$solution->image)}}" style="width: 100px;"></td>
                            <td>
                                <button class="btn btn-info update-solution-button" data-toggle="modal" data-target="#update-solution-modal" data-link="{{route('admin-solution-update', ['id' => $solution->id])}}" data-id="{{$solution->id}}">Edit Solution</button>
                                <button class="btn btn-danger delete-solution-button" data-toggle="modal" data-target="#delete-solution-modal" data-link="{{route('admin-solution-destroy', ['id' => $solution->id])}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="insert-solution-modal">
        <div class="modal-dialog">
            <form role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Insert Solution</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Solution</label>
                            <input type="text" name="solution" placeholder="Solution" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" placeholder="Position" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Question</label>
                            <select name="question"> 
                                <option>Select Question</option>
                                @foreach($questions as $question)
                                <option value="{{$question->id}}" name="question">{{$question->question}}</option>
                                @endforeach
                            </select>
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
    <div class="modal fade" id="update-solution-modal">
        <div class="modal-dialog">
            <form role="form" method="post" enctype="multipart/form-data">
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
                            <label>Solution</label>
                            <input type="text" name="solution" placeholder="Solution" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" placeholder="Position" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Question</label>
                            <select name="question"> 
                                <option>Select Question</option>
                                @foreach($questions as $question)
                                <option value="{{$question->id}}" name="question">{{$question->question}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" placeholder="Image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Update Solution</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="delete-solution-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Delete Solution</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete solution <span class="name"></span>?
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
            $('#solution-table').DataTable({
                'paging'      : true,
                'searching'   : true,
            });
            $('.delete-solution-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                $modal = $('#delete-solution-modal');
                $modal.find('.name').html(name);
                $modal.find('form').attr('action', link);
            });
            $('.update-solution-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                var id = $(this).data('id');
                $row = $('#solution-id-' + id);
                $modal = $('#update-solution-modal');
                $modal.find("input[name=solution]").val($row.find(".solution-solution").html())
                $modal.find("input[name=name]").val($row.find(".solution-name").html())
                $modal.find("input[name=position]").val($row.find(".solution-position").html())
                $modal.find("select[name=question]").val($row.find(".solution-question").data('id'))
                $modal.find('.name').val($row.find(".solution-name").html())
                $modal.find('form').attr('action', link);
            });
        })
    </script>
@endsection