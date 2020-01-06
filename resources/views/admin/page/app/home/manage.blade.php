@extends('admin.layout.admin')

@section('content-header')
    Manage Home Page
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">3 Featured Question Section</h3>
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
            <h3 class="box-title">5 Featured Testimony Section</h3>
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
    
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Diagram Section</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" id="diagram-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($diagrams as $diagram)
                        <tr id="diagram-id-{{$diagram->id}}">
                            <td class="diagram diagram-text">{{$diagram->text_image}}</td>
                            <td class="diagram diagram-title">{{$diagram->title}}</td>
                            <td class="diagram diagram-description">{{$diagram->description}}</td>
                            <td>
                                <button class="btn btn-info update-diagram-button" data-id="{{$diagram->id}}" data-toggle="modal" data-target="#update-diagram-modal" data-link="{{route('admin-diagram-update', ['id' => $diagram->id])}}">Edit Diagram</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="update-diagram-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Update Diagram </h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="text_image" class="form-control">
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" placeholder="Description" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Update Diagram</button>
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
                "order": [[ 0, "desc" ]]
            });
            $('#testimony-table').DataTable({
                'paging'      : true,
                'searching'   : true,
                "order": [[ 0, "desc" ]]
            });
            $('#diagram-table').DataTable({
                'paging'      : true,
                'searching'   : true,
                "order": [[ 0, "desc" ]]
            });
            $('.update-diagram-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                var id = $(this).data('id');
                $row = $('#diagram-id-' + id);
                $modal = $('#update-diagram-modal');
                $modal.find("input[name=text_image]").val($row.find(".diagram-text").html())
                $modal.find("input[name=title]").val($row.find(".diagram-title").html())
                $modal.find("input[name=description]").val($row.find(".diagram-description").html())
                $modal.find('.name').html(name);
                $modal.find('form').attr('action', link);
            });
            
        })
        
    </script>
@endsection