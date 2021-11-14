<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition">
<div class="container">
    <div class="login-logo">
        <a href="../../index2.html">Admin Login</a>
    </div>
    <div class="col-md-6" style="margin: auto">
        <form action="{{route('admin.election.store', base64_encode(1))}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Election Name</label>
                <input type="text" class="form-control" id="name" name="election_name" placeholder="enter election name" >
            </div>
            <div class="form-group">
                <label for="start-date">Start Date</label>
                <input type="datetime-local" class="form-control" id="start-date" name="start_date" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="end-date">End Date</label>
                <input type="datetime-local" class="form-control" id="end-date" name="end_date" aria-describedby="emailHelp">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
