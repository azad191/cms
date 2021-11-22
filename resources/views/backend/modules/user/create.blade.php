@extends('backend.components.app');
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin: auto">
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <p class="text-danger" class="error">{{ $errors->first('name') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            <p class="text-danger" class="error">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="id">Employee ID-No</label>
                            <input type="number" class="form-control" id="id" name="employee_id" aria-describedby="emailHelp">
                            <p class="text-danger" class="error">{{ $errors->first('employee_id') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            <p class="text-danger" class="error">{{ $errors->first('password') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                            <p class="text-danger" class="error">{{ $errors->first('confirm_password') }}</p>
                        </div>
                       <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="permission[]" value="creator" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              creator
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="permission[]" value="manage" id="defaultCheck2" >
                            <label class="form-check-label" for="defaultCheck2">
                              Manage
                            </label>
                          </div>
                       </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
