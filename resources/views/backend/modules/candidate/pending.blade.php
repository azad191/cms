@extends('backend.components.app');
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">Canidate pending regisrter List</h3>
                <button class="btn btn-info" data-toggle="modal"  data-target="#modal-lg" id="ok">Add New User</button>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Employee Id-no</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i=>$item)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->employee_id_no}}</td>
                            <td><span class="badge badge-danger">{{$item->status}}</span></td>
                            <td><button class="btn btn-success   btn-sm text-white" data-toggle="modal" id="ok" data-target="#modal-lg" >View</button></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

