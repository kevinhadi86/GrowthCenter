@extends('admin.layout.admin')

@section('content-header')
    Manage Testimonies
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Users</h3>
        </div>
        <div class="box-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#insert-testimony-modal">Insert</button>
            <hr>
            <table class="table table-bordered table-striped" id="testimony-table">
                <thead>
                <tr>
                    <th>Company</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Quote</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($testimonies as $testimony)
                        <tr id="testimony-id-{{$testimony->id}}">
                            <td class="testimony testimony-company">{{$testimony->company}}</td>
                            <td class="testimony testimony-name">{{$testimony->name}}</td>
                            <td class="testimony testimony-position">{{$testimony->position}}</td>
                            <td class="testimony testimony-quote">{{$testimony->quote}}</td>
                            <td class="testimony testimony-image"><img src="{{asset('/img/'.$testimony->image)}}" style="width: 100px;"></td>
                            <td>
                                <button class="btn btn-info update-testimony-button" data-toggle="modal" data-target="#update-testimony-modal" data-link="{{route('admin-testimony-update', ['id' => $testimony->id])}}" data-id="{{$testimony->id}}">Edit Testimony</button>
                                <button class="btn btn-danger delete-testimony-button" data-toggle="modal" data-target="#delete-testimony-modal" data-link="{{route('admin-testimony-destroy', ['id' => $testimony->id])}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="insert-testimony-modal">
        <div class="modal-dialog">
            <form role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Insert Testimony</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" placeholder="Company" class="form-control">
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
                            <label>Quote</label>
                            <input type="text" name="quote" placeholder="Quote" class="form-control">
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
    <div class="modal fade" id="update-testimony-modal">
        <div class="modal-dialog">
            <form role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Update Testimony</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" placeholder="Company" class="form-control">
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
                            <label>Quote</label>
                            <input type="text" name="quote" placeholder="Quote" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" placeholder="Image" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="delete-testimony-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Delete Testimony</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete testimony <span class="name"></span>?
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
            $('#testimony-table').DataTable({
                'paging'      : true,
                'searching'   : true,
            });
            $('.delete-testimony-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                $modal = $('#delete-testimony-modal');
                $modal.find('.name').html(name);
                $modal.find('form').attr('action', link);
            });
            $('.update-testimony-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                //ambil id dari data-id
                var id = $(this).data('id');
                //ambil row dari ngambil 1 tr itu
                $row = $('#testimony-id-' + id);
                $modal = $('#update-testimony-modal');
                //cari di modal, input yang punya name company, then di isi pake row yang punya class testimony-company
                $modal.find("input[name=company]").val($row.find(".testimony-company").html())
                $modal.find("input[name=name]").val($row.find(".testimony-name").html())
                $modal.find("input[name=position]").val($row.find(".testimony-position").html())
                $modal.find("input[name=quote]").val($row.find(".testimony-quote").html())
                $modal.find('.name').html(name);
                $modal.find('form').attr('action', link);
            });
        })
    </script>
@endsection