@extends('backend.components.app');
@section('content')
    <form>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">Create Multi Level Menu</h3>
                <button class="btn btn-info">Go Back</button>
            </div>
        </div>
        <!-- /.card-header -->

            <div class="card-body">
               <div class="row">
                   <!--start half menu -->
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="exampleInputEmail1">Primary Menu</label>
                           <div class="d-flex">
                               <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter primary menu name">
                               <button class="btn btn-danger btn-sm">send</button>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="exampleInputEmail1">Select 2nd Level Menu<span class="text-secondary font-italic">(optional)</span></label>
                           <select name="" id="" class="form-control">
                               <option value="" >one</option>
                               <option value="">one</option>
                               <option value="">one</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label for="exampleInputEmail1">Select 3rd Level Menu<span class="text-secondary font-italic">(optional)</span></label>
                           <select name="" id="" class="form-control">
                               <option value="" >one</option>
                               <option value="">two</option>
                               <option value="">three</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label for="exampleInputEmail1">Menu Type<span class="text-danger font-italic">*</span></label>
                           <select name="" id="" class="form-control">
                               <option value="" >one</option>
                               <option value="">two</option>
                               <option value="">three</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label for="exampleInputEmail1">Target<span class="text-danger font-italic">(optional)</span></label>
                           <select name="" id="" class="form-control">
                               <option value="" >Current Page</option>
                               <option value="">New Tab</option>
                           </select>
                       </div>


                   </div><!--end half menu -->
                   <!--start half menu -->
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="ext">External Link<span class="text-secondary font-italic">(optional)</span></label>
                           <input type="text" class="form-control" name="external_link" placeholder="Enter external link">
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



                   </div> <!--end half menu -->
               </div>
            </div>
            <!-- /.card-body -->


        <!-- /.card-body -->
    </div>
        <button type="submit" class="btn btn-info float-right">Submit</button>
    </form>
    <!-- /.card -->
@endsection
