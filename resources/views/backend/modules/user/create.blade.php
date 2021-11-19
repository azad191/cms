@extends('backend.components.app');
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin: auto">
                    <form action="{{route('admin.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="org">Organization Name</label>
                            <input type="text" class="form-control" id="org" name="organization" aria-describedby="emailHelp">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group w-50">
                                    <label for="inputState">Election per Year</label>
                                    <select id="inputState" name="election_per_year" class="form-control">
                                        <option value="">Choose...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>

                            </div>
                            <div class="form-group w-50">
                                <label for="inputState">Number of Voters</label>
                                <select id="inputState" name="election_per_voter" class="form-control">
                                    <option value="">Choose...</option>
                                    <option value="50-100">50-100</option>
                                    <option value="100-250">100-150</option>
                                    <option value="150-200">150-200</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
