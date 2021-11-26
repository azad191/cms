@extends('backend.components.app');
@section('content')
        <div class="container bg-white">
            <div class="d-flex justify-content-between mt-2" style="background-color: rgb(241, 233, 233); padding:10px">
                <h3>Create Ballot</h3>
                <button class="btn btn-warning"><i class="fas fa-plus"></i> Candidate</button>
            </div>
            <div class="row">
                <div class="col-md-6 " style="margin: auto">
                    <form action="{{route('admin.election.ballot.store', getElection()->id)}}" method="post" enctype="multipart/form-data" class="p-5">
                        @csrf

                        {{-- <div class="form-group">
                            <label for="name">Position Name</label>
                            <input type="text" class="form-control" id="name" name="position_name">
                            <p class="text-danger" class="error">{{ $errors->first('position_name') }}</p>
                        </div> --}}
                       <div class="d-flex">
                        <div class="form-group w-50">
                            <label for="desg">Select Candidate position</label>
                            <select id="desg" name="position_id" class="form-control">
                                <option value="">Choose...</option>
                                @foreach ($position as $item)
                                    <option value="{{$item->id}}">{{$item->position_name}}</option>
                                @endforeach
                            </select>
                            <p class="text-danger" class="error">{{ $errors->first('position_id') }}</p>
                        </div>
                        <div class="form-group w-50">
                            <label for="desg">Select Candidate</label>
                            <select id="desg" name="candidate_nomination_id" class="form-control">
                                <option value="">Choose...</option>
                                @foreach ($candidate as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <p class="text-danger" class="error">{{ $errors->first('candidate_nomination_id') }}</p>
                        </div>
                       </div>
                       <div class="form-group">
                            <label for="symbol">Sysmbol</label>
                            <input type="file" class="form-control" id="symbol" name="symbol" aria-describedby="emailHelp">
                            <p class="text-danger" class="error">{{ $errors->first('symbol') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="description">Sort Description</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
                            <p class="text-danger" class="error">{{ $errors->first('description') }}</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
