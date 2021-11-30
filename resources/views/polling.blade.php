<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Election | polling </title>

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
            {{-- <form action="{{route('nomination.register', [$id, $slug])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name">
                    <p class="text-danger" class="error">{{ $errors->first('name') }}</p>
                </div>


                <div class="text-center ">
                    <button type="submit" class="btn btn-primary text-center m-2">Submit Register</button>
                </div>
            </form> --}}
<form action="{{route('vote.polling.cast', $id)}}" method="post">
    @csrf
                <div class="polling">
                    @foreach ($position as $key => $item )

                        <div class="heading">
                            <p>{{$item->position_name}}</p>

                            @php
                               $ballot =  \App\Models\Ballot::where('election_id', $item->election_id)->get();
                            @endphp
                            @foreach ($ballot as $ballotItem)
                                @if($item->id == $ballotItem->position_id)
                                    @if ($item->max_vote>1)
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <div onclick="myFun('{{$item->position_name}}', '{{$item->max_vote}}')">
                                                <input type="checkbox" name="{{$item->position_name}}[]" test="{{$item->position_name}}" value="{{$ballotItem->candidate_nomination_id}}" class="{{$item->max_vote}}">
                                                <input type="text" value="{{$item->position_name}}">
                                            </div>
                                            <div><img style="width: 150px; height:100px" src="{{asset('backend/uploads/ballot/'.$ballotItem->symbol)}}" alt="prothik"></div>
                                            <div><p>azad</p></div>
                                        </div>
                                    </li>

                                        @else
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <input type="radio" name="{{$item->position_name}}" value="{{$ballotItem->candidate_nomination_id}}">
                                                </div>
                                                <div><img style="width: 150px; height:100px" src="{{asset('backend/uploads/ballot/'.$ballotItem->symbol)}}" alt="prothik"></div>
                                                <div><p>ak azad</p></div>
                                            </div>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </div>


                    @endforeach

                </div>
                <button class="btn btn-info" type="submit">submit</button>
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
       function myFun(name, id){

            console.log(name);
            // alert(id)
            //    var test = document.getElementsByClassName('ok')
            //     $(".id1").click(function() {
            //        // alert('ok')
            //     var bol = $(".id1:checked").length >= id;
            //     $(".id1:checked").not(":checked").attr("disabled",bol);
            //     });
                    $(`input[test=${name}]`).change(function() {
                    var maxAllowed = id;
                    var cnt = $(`input[test=${name}]:checked`).length;
                    if (cnt > maxAllowed) {
                        $(this).prop("checked", "");
                        alert('Select maximum ' + maxAllowed + ' Levels!');
                    }
                    });

        }


    </script>
    <sc
</body>

</html>
