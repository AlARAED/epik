@extends('admin.layout.app')
@section('content')


   <!-- Content Header (Page header) -->
   <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">

          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Settings </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/saveseettings') }}"  method="post"      enctype="multipart/form-data"  >
                    @csrf


              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label> title:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                  </div>
                  <input type="text" class="form-control" data-inputmask-alias="datetime" name="title" value="{{ $Setting->title }}">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
              <div class="form-group">
                <label> address:</label>

                <div class="input-group">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-address-card"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="address" value=" {{ $Setting->address }}">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label> phone :</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' name="phone"  value="{{ $Setting->phone }}">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label> facebook account:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                  <input type="text" class="form-control"
                       name="fb"  value="{{ $Setting->fb }}">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- IP mask -->
              <div class="form-group">
                <label>instegram:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                  <input type="text" class="form-control" name="inst"   value="{{ $Setting->inst }}">
                </div>
                <!-- /.input group -->
              </div>




                     <!-- IP mask -->

              <div class="form-group">
                <label>watsap link:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                  <input type="text" class="form-control" name="wats" value="{{ $Setting->wats }}">
                </div>
                <!-- /.input group -->
              </div>


              <div class="form-group">
                <label>booking link:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                  <input type="text" class="form-control" name="booking_link"   value="{{ $Setting->booking_link }}">
                </div>
                <!-- /.input group -->
              </div>


              <div class="form-group">
                <label for="exampleInputFile">Logo winter  </label>
                <div class="input-group col-lg-6">

                    <img src="{{ asset('uploads/'.$Setting->logo_winter)}}" class="img-fluid" alt="Responsive image" width="190px">
                </div>
              </div>




              <div class="mb-3">
                <label for="formFile" class="form-label">Logo winter</label>
                <input class="form-control" type="file" id="formFile" name="logo_winter">
              </div>











              <div class="form-group">
                <label for="exampleInputFile">Logo Sommer  </label>
                <div class="input-group col-lg-6">

              <img src="{{ asset('uploads/'.$Setting->logo_sommer)}}" class="img-fluid" alt="Responsive image" width="190px">
                </div>
              </div>









              <div class="mb-3">
                <label for="formFile" class="form-label">Logo sommer</label>
                <input class="form-control" type="file" id="formFile" name="logo_sommer">
              </div>




              <div class="form-group">
                <label> text homesite:</label>

                <div class="input-group col-lg-12" >
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                  </div>
                  <textarea name="texthomesite" id="" cols="160" rows="10">{{ $Setting->texthomesite }}</textarea>
                </div>
                <!-- /.input group -->
              </div>




              <button type="submit" class="btn btn-danger">save </button>

                </form>



              <!-- /.form group -->

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /.card -->

        </div>

      </div>

      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@stop
