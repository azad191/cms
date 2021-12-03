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
                                <p class="text-danger" class="error">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="form-group w-50">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                <p class="text-danger" class="error">{{ $errors->first('email') }}</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
