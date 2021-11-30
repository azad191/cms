<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Election | Register </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>

<body class="hold-transition">
    <div class="container">
        <div class="login-logo">
            <a href="../../index2.html">Nomination Register Voter or Candidate</a>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                    <a href="{{route('logins')}}" class="text-warning">login</a>
            </div>
            @endif
        </div>

        <div class="col-md-6" style="margin: auto">
            <form action="{{route('nomination.register', [$id, $slug])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name">
                    <p class="text-danger" class="error">{{ $errors->first('name') }}</p>
                </div>
                <div class="form-group">
                    <label for="email">Email address<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <p class="text-danger" class="error">{{ $errors->first('email') }}</p>
                </div>
                <div class="form-group">
                    <label for="org">Employee Id No<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="org" name="employee_id_no" aria-describedby="emailHelp">
                    <p class="text-danger" class="error">{{ $errors->first('employee_id_no') }}</p>
                </div>
                <div class="form-group">
                    <label for="password">Choose One<span class="text-danger">*</span></label><br>
                    <input type="radio" name="type" value="voter" id="voter">Voter
                    <input type="radio" name="type" value="candidate" id="candidate">Candidate
                    <p class="text-danger" class="error">{{ $errors->first('type') }}</p>
                </div>
                <div class="form-group w-100" id="position" style="display: none">
                    <label for="inputState">Select for position</label>
                    <select id="inputState" name="position_id" class="form-control">
                        <option value="">Choose...</option>
                        @foreach ($allPosition as $item)
                            <option value="{{$item->id}}">{{$item->position_name}}</option>
                        @endforeach


                    </select>
                    <p class="text-danger" class="error">{{ $errors->first('election_per_voter') }}</p>
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control" id="password">
                    <p class="text-danger" class="error">{{ $errors->first('password') }}</p>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                    <p class="text-danger" class="error">{{ $errors->first('confirm_password') }}</p>
                </div>

                <div class="text-center ">
                    <button type="submit" class="btn btn-primary text-center m-2">Submit Register</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
    {{-- Toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        var candidate = document.getElementById("candidate");
        var voter = document.getElementById("voter");
        var position = document.getElementById("position");
        candidate.addEventListener('click', function (e){
            position.style.display= 'block'
        })
        voter.addEventListener('click', function (e){
            position.style.display= 'none'
        })
    </script>
</body>

</html>
