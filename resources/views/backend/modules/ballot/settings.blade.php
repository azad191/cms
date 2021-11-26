@extends('backend.components.app');
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">Canidate pending regisrter List</h3>
               <a href="{{route('admin.election.ballot.position', getElection()->id)}}"><button class="btn btn-info">Add New position</button></a>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            @foreach ($data as $item)
                <div class="d-flex justify-content-between mt-2" style="background-color: rgb(241, 233, 233); padding:10px">
                    <h3>{{$item->position_name}}</h3>
                    <a href="{{route('admin.election.ballot.create', $item->id)}}"><button class="btn btn-warning"><i class="fas fa-plus"></i>Candidate</button></a>
                </div>
                <table class="table mb-5" >
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">symbol</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $getBallot = \App\Models\Ballot::where('election_id', getElection()->id)->where('position_id', $item->id)->get();
                        @endphp
                        @foreach ($getBallot as $BallotItem)
                            @php
                                $candidateName = \App\Models\CandidateNomination::where('id', $BallotItem->candidate_nomination_id	)->where('election_id',getElection()->id)->first();
                            @endphp
                            <tr>
                                <th scope="row">1</th>
                                <td><img style="width: 70px; height: 70px" src="{{asset('backend/uploads/ballot/'.$BallotItem->symbol)}}" alt=""></td>
                                <td>{{$candidateName->name}}</td>
                                <td>edit|delete</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endforeach
        </div>
        <!-- /.card-body -->
    </div>
@endsection

