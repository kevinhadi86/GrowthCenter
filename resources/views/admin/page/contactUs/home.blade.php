@extends('admin.layout.admin')

@section('content-header')
    Manage Contact Us Result
@endsection

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Contact Us Result</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" id="message-table">
                <thead>
                <tr>
                    <th>Created At</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->created_at}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
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