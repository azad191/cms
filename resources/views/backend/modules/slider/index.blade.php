@extends('backend.components.app');
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">All Slider List</h3>
                <button class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Add New Slider</button>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
        Launch Large Modal
    </button>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Slider</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <from>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Title<span class="text-secondary font-italic">(optional)</span></label>
                                    <input type="text" class="form-control" name="external_link" placeholder="Enter external link">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ext">Sub-Title<span class="text-secondary font-italic">(optional)</span></label>
                                    <input type="text" class="form-control" name="external_link" placeholder="Enter external link">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ext">Sort Description<span class="text-secondary font-italic">(optional)</span></label>
                            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="status">Status<span class="text-secondary font-italic">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sequence<span class="text-secondary font-italic">(optional)</span></label>
                                    <select name="" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider Image<span class="text-secondary font-italic">(jpg, png, jpeg)</span></label>
                            <input type="file" class="form-control" name="slider_name" id="sliderImg">

                        </div>
                        <img class="img-fluid mt-3" id="blah" src="#" alt="your image" />
                    </from>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.card -->
    <script>
        sliderImg.onchange = evt => {
            const [file] = sliderImg.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
