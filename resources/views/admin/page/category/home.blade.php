@extends('admin.layout.admin')

@section('content-header')
    Manage Categories
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Users</h3>
        </div>
        <div class="box-body">
            <button class="btn btn-primary" data-toggle="modal" data-target="#insert-category-modal">Insert</button>
            <hr>
            <table class="table table-bordered table-striped" id="category-table">
                <thead>
                <tr>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="category">{{$category->name}}</td>
                            <td>
                                <button class="btn btn-info update-category-button" data-toggle="modal" data-target="#update-category-modal" data-link="{{route('admin-category-update', ['id' => $category->id])}}">Edit Category</button>
                                <button class="btn btn-danger delete-category-button" data-toggle="modal" data-target="#delete-category-modal" data-link="{{route('admin-category-destroy', ['id' => $category->id])}}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="insert-category-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Insert User</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Insert</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="update-category-modal">
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
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="delete-category-modal">
        <div class="modal-dialog">
            <form role="form" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Delete Category</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete category <span class="name"></span>?
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
            $('#category-table').DataTable({
                'paging'      : true,
                'searching'   : true,
            });
            $('.delete-category-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                $modal = $('#delete-category-modal');
                $modal.find('.name').html(name);
                $modal.find('form').attr('action', link);
            });
            $('.update-category-button').click(function() {
                var name = $(this).parent().parent().find('.name').html();
                var link = $(this).data('link');
                $modal = $('#update-category-modal');
                $modal.find('.name').html(name);
                $modal.find('form').attr('action', link);
            });
        })
    </script>
@endsection