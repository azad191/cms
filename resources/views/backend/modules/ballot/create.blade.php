@extends('backend.components.app');
@section('content')
        <div class="container bg-white">
            <div class="d-flex justify-content-between mt-2" style="background-color: rgb(241, 233, 233); padding:10px">
                <h3>board Presidant</h3>
                <button class="btn btn-warning"><i class="fas fa-plus"></i> Candidate</button>
            </div>
            <div class="row">
                <div class="col-md-6 " style="margin: auto">
                    <form action="{{route('admin.election.position.store', getElection()->id)}}" method="post" class="p-5">
                        @csrf
                        <div class="d-flex">
                            <div class="form-group w-50">
                                <label for="id">Minimum Vote</label>
                                <input type="number" class="form-control" id="id" name="employee_id" aria-describedby="emailHelp">
                                <p class="text-danger" class="error">{{ $errors->first('employee_id') }}</p>
                            </div>
                            <div class="form-group w-50">
                                <label for="id">Maximum Vote</label>
                                <input type="number" class="form-control" id="id" name="employee_id" aria-describedby="emailHelp">
                                <p class="text-danger" class="error">{{ $errors->first('employee_id') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Position Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <p class="text-danger" class="error">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Sort Description</label>
                            <textarea name="present_address" id="present_address" class="form-control" cols="30" rows="5"></textarea>
                            <p class="text-danger" class="error">{{ $errors->first('email') }}</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
