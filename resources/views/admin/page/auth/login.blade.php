@extends('admin.layout.empty')

@section('body-attr')
    class="hold-transition login-page"
@endsection

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <strong>Averin</strong>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    @if(isset($errors) && count($errors) > 0)
                        <div class="col-xs-12" style="text-align: center; color:red">
                            {{$errors->first()}}
                        </div>
                    @endif

                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
@endsection

@section('add-script')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
@endsection