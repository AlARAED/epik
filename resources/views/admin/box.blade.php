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
              <h3 class="card-title">Boxes Sommer </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/saveseettings') }}"  method="post"      enctype="multipart/form-data"  >
                    @csrf


              <!-- Date dd/mm/yyyy -->
              <div class="form-group col-lg-12">
                <label> box1:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                  </div>
                  <textarea name="box1" id="" cols="30" rows="10">{{ $Setting->box1 }}</textarea>
                </div>
                <!-- /.input group -->
              </div>






              <div class="form-group">
                <label> box2:</label>

                <div class="input-group col-lg-12" >
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                  </div>
                  <textarea name="box2" id="" cols="30" rows="10">{{ $Setting->box2 }}</textarea>
                </div>
                <!-- /.input group -->
              </div>



              <div class="form-group">
                <label> box3:</label>

                <div class="input-group col-lg-12">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                  </div>
                  <textarea name="box3" id="" cols="30" rows="10"> {{ $Setting->box3 }}</textarea>
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
