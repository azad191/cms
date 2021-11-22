@extends('backend.components.app');
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">All Employee List</h3>
                <a href="{{route('employee.create')}}" class="btn btn-info">Add New Employee</a>

            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Employee Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td><img class="" style="width:50px; height: 50px; border-radius:50%" src="{{asset('backend/uploads/employee/profile/'.$item->employee_image)}}" alt="img"></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->employee_id}}</td>
                        
                            <td><button class="btn btn-info btn-sm">view</button></td>


                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="addSub">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Name</label>
                                    <input type="text" class="form-control" id="fName" name="firstName"
                                        placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Role</label>
                                    <select name="role_id" id="roles" class="form-control">

                                        {{-- @foreach ($data as $item) --}}
                                        {{-- <option value="{{$item->id}}" class="text-capitalize">{{$item->name}}</option> --}}
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status<span class="text-secondary font-italic">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                            value="1">
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                            value="0">
                                        <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password"
                                        id="confirm_password" placeholder="confirm password">
                                </div>
                            </div>
                        </div>


                        {{-- <div class="form-group"> --}}
                        {{-- <label for="exampleInputEmail1">Slider Image<span class="text-secondary font-italic">(jpg, png, jpeg)</span></label> --}}
                        {{-- <input type="file" class="form-control" name="slider_name" id="sliderImg" > --}}

                        {{-- </div> --}}
                        {{-- <img class="img-fluid mt-3" id="blah" src="#" alt="your image" style="display: none" /> --}}

                        <button type="submit" id="oksss" class="btn btn-primary">Save changes</button>


                    </form>
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

        add.addEventListener('click', function() {
            axios.get('/user/test')
                .then(function(response) {
                    //console.log(response.data.result);
                    var data = response.data.result;
                    console.log(data.name)
                    for (var i = 0; i < data.length; i++) {
                        var option = document.createElement("option");
                        option.value = data[i].id;
                        option.text = data[i].name;
                        role.appendChild(option);
                    }
                    //  role.innerHTML = op;

                })
                .catch(function(error) {
                    console.log(error);
                });
        })
        var forms = document.getElementById('addSub');


        forms.addEventListener('submit', function(e) {
            // $("#addSub").submit(function (e){
            e.preventDefault();
            var name = document.getElementById('fName').value
            var email = document.getElementById('email').value;
            var role_id = document.getElementById('roles').value;
            //  var status = (input[type='radio'][name='status'].checked).value;
            var status = document.querySelector('input[name = status]:checked').value

            var password = document.getElementById('password').value
            var confirm_password = document.getElementById('confirm_password').value





            //     const formData = new FormData()

            //     // axios.post('/user/store', {
            //     //     name: names.value,
            //     //    // email: email.value
            //     // })
            axios({
                    method: 'post',
                    url: '/user/store',
                    data: {
                        name,
                        email,
                        role_id,
                        status,
                        password,
                        confirm_password
                    },

                })
                .then(function(response) {
                    console.log(response.data);
                })
                .catch(function(error) {
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
