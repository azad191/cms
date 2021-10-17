@extends('backend.components.app');
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">All Logo List</h3>
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
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Logo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <from>
                        <div class="form-group">
                            <label for="ext">Title<span class="text-secondary font-italic">(optional)</span></label>
                            <input type="text" class="form-control" name="external_link" placeholder="Enter external link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Type<span class="text-danger font-italic">*</span></label>
                            <select name="" id="" class="form-control">
                                <option value="">Admin</option>
                                <option value="" >User Side</option>
                            </select>
                        </div>
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slider Image<span class="text-secondary font-italic">(jpg, png, jpeg)</span></label>
                            <input type="file" class="form-control" name="slider_name" id="sliderImg"
                        </div>
                        <img class="img-fluid mt-3" id="preview" style="display: none" src="#" alt="your image" />
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
       let imgId = document.getElementById('preview');
        sliderImg.onchange = evt => {
            const [file] = sliderImg.files
            if (file) {
                preview.src = URL.createObjectURL(file)
                imgId.style.display='block'

            }
        }
    </script>
@endsection
