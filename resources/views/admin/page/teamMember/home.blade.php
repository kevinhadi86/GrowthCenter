@extends('admin.layout.admin')

@section('content-header')
    Manage Team Member
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Users</h3>
        </div>
        <div class="box-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#insert-member-modal">Insert</button>
            <hr>
            <table class="table table-bordered table-striped" id="member-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr id="member-id-{{$member->id}}">
                            <td class="member member-name">{{$member->name}}</td>
                            <td class="member member-position">{{$member->position}}</td>
                            <td class="member member-description">{{$member->description}}</td>
                            <td class="member member-image"><img src="{{asset('/img/'.$member->image)}}" style="width: 100px;"></td>
                            <td>
                                <button class="btn btn-info update-member-button" data-toggle="modal" data-target="#update-member-modal" data-link="{{route('admin-team-member-update', ['id' => $member->id])}}" data-id="{{$member->id}}">Edit Testimony</button>
                                <button class="btn btn-danger delete-member-button" data-toggle="modal" data-target="#delete-member-modal" data-link="{{route('admin-team-member-destroy', ['id' => $member->id])}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="insert-member-modal">
        <div class="modal-dialog">
            <form role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Insert Member</h4>
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
    <div class="modal fade" id="update-member-modal">
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
                        <button class="btn btn-primary">Update Member</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="delete-member-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Delete Member</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete member <span class="name"></span>?
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
            $('#member-table').DataTable({
                'paging'      : true,
                'searching'   : true,
            });
            $('.delete-member-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                $modal = $('#delete-member-modal');
                $modal.find('form').attr('action', link);
            });
            $('.update-member-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                //ambil id dari data-id
                var id = $(this).data('id');
                //ambil row dari ngambil 1 tr itu
                $row = $('#member-id-' + id);
                $modal = $('#update-member-modal');
                //cari di modal, input yang punya name position, then di isi pake row yang punya class member-position
                $modal.find("input[name=name]").val($row.find(".member-name").html())
                $modal.find("input[name=position]").val($row.find(".member-position").html())
                $modal.find("input[name=description]").val($row.find(".member-description").html())
                $modal.find('.name').val($row.find(".member-name").html())
                $modal.find('form').attr('action', link);
            });
        })
    </script>
@endsection