@extends('admin.layout.admin')

@section('content-header')
    Manage Subscribed User
@endsection

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Subscribed User</h3>
        </div>
        <div class="box-body">
            <a href="subscribedUser/export"><button class="btn btn-primary">Export</button></a>
            <hr>
            <table class="table table-bordered table-striped" id="message-table">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
            $('#message-table').DataTable({
                'paging'      : true,
                "order": [[ 0, "desc" ]]
            });
        })
    </script>
@endsection