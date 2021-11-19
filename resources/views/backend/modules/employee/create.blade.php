@extends('backend.components.app');
@section('content')
        <div class="container">
            <div class="header bg-white p-3 d-flex justify-content-between border-bottom border-dark">
                <div><h3>Create Menu</h3></div>
                <div><a href="" class="btn btn-info btn-sm">Go Back</a></div>
            </div>

            <div class="row pt-2">
                <div class="col-md-12 p-3 bg-white" style="margin: auto">
                    <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Employee Name">
                            </div>
                            <div class="form-group w-50">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                    <label for="dept">Department</label>
                                    <select id="dept" name="department_id" class="form-control">
                                        <option value="">Choose...</option>
                                        <option value="1">Marketing</option>
                                        <option value="2">HR</option>
                                        <option value="3">Software Development</option>
                                    </select>

                            </div>
                            <div class="form-group w-50">
                                <label for="desg">Designation</label>
                                <select id="desg" name="designation_id" class="form-control">
                                    <option value="">Choose...</option>
                                    <option value="50-100">Managing Director</option>
                                    <option value="100-250">Marketing Manager</option>
                                    <option value="150-200">Team Leader</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                <label for="fname">Father's Name</label>
                                <input type="text" class="form-control" id="fname" name="father_name">
                            </div>
                            <div class="form-group w-50">
                                <label for="mName">Mother's Name</label>
                                <input type="text" class="form-control" id="mName" name="mother_name">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="form-group w-50">
                                <label for="district">District</label>
                                <input type="text" class="form-control" id="district" name="district">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                <label for="zip_code">Zip-Code</label>
                                <input type="number" class="form-control" id="zip_code" name="zip_code">
                            </div>
                            <div class="form-group w-50">
                                <label for="nid_no">Nid-No</label>
                                <input type="number" class="form-control" id="nid_no" name="nid_no">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="present_address">Address</label>
                            <textarea name="present_address" id="present_address" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                <label for="employee_image">Employee Image</label>
                                <input type="file" class="form-control" id="employee_image" name="employee_image">
                            </div>
                            <div class="form-group w-50">
                                <label for="nid_image">NID-Image</label>
                                <input type="file" class="form-control" id="nid_image" name="nid_image">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
