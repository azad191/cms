@extends('backend.components.app');
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">All User List</h3>
                <button class="btn btn-info" data-toggle="modal"  data-target="#modal-lg" id="ok">Add New User</button>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <button id="test">
        test
    </button>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" >Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <from id="addSub">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Name</label>
                                    <input type="text" class="form-control" id="names" name="names" placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Role</label>
                                    <select name="user_id" id="roles" class="form-control">

{{--                                        @foreach($data as $item)--}}
{{--                                            <option value="{{$item->id}}" class="text-capitalize">{{$item->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status<span class="text-secondary font-italic">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="confirm password">
                                </div>
                            </div>
                        </div>


{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">Slider Image<span class="text-secondary font-italic">(jpg, png, jpeg)</span></label>--}}
{{--                            <input type="file" class="form-control" name="slider_name" id="sliderImg" >--}}

{{--                        </div>--}}
{{--                        <img class="img-fluid mt-3" id="blah" src="#" alt="your image" style="display: none" />--}}

                            <input type="submit" id="oksss"  class="btn btn-primary">Save changes</input>


                    </from>
                </div>


            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.card -->
<script>
    let add = document.getElementById('ok');
    let role = document.getElementById('roles');
    let submits = document.getElementById('oksss');

//user role select in modal

    add.addEventListener('click', function () {
        axios.get('/user/test')
            .then(function (response) {
                //console.log(response.data.result);
                var data = response.data.result;
                console.log(data.name)
               for( var i=0; i<data.length;i++){
                   var option = document.createElement("option");
                   option.value = data[i].id;
                   option.text = data[i].name;
                   role.appendChild(option);
               }
             //  role.innerHTML = op;

            })
            .catch(function (error) {
                console.log(error);
            });
    })
    var forms =   document.getElementById('addSub');
    var names = document.getElementById('names').value;
    var email = document.getElementById('email').value;
    submits.addEventListener('click', function (e) {
        console.log(e.target.value)
        const formData = new FormData()
        e.preventDefault();
        // axios.post('/user/store', {
        //     name: names.value,
        //    // email: email.value
        // })
        axios({
            method: 'post',
            url: '/user/store',
            data: {names, email},

    })
            .then(function (response) {
                console.log(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
    })


    // axios({
    //     method: "post",
    //     url: "user/store",
    //     data: bodyFormData,
    //     headers: { "Content-Type": "multipart/form-data" },
    // })
    //     .then(function (response) {
    //         //handle success
    //         console.log(response);
    //     })
    //     .catch(function (response) {
    //         //handle error
    //         console.log(response);
    //     });

</script>
    <script>
        let hasFile = document.getElementById('blah');
        sliderImg.onchange = evt => {
            const [file] = sliderImg.files

            if (file) {
                blah.src = URL.createObjectURL(file)
                hasFile.style.display = 'block'

            }
        }
    </script>

@endsection

