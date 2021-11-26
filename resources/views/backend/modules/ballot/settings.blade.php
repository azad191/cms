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
            <div class="d-flex justify-content-between mt-2" style="background-color: rgb(241, 233, 233); padding:10px">
                <h3>board Presidant</h3>
                <button class="btn btn-warning"><i class="fas fa-plus"></i> Candidate</button>
            </div>
            <table class="table mb-5" >
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between "  style="background-color: rgb(241, 233, 233); padding:10px">
                <h3>board Presidant</h3>
                <button class="btn btn-warning"><i class="fas fa-plus"></i> Candidate</button>
            </div>
            <table class="table mb-4">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>


        </div>
        <!-- /.card-body -->
    </div>
@endsection

