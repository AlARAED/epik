@extends('admin.layout.app')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
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
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Ads<small><em> File Upload</em> </small></h3>
            </div>
            <div class="card-body">
              <div id="actions" class="row">
                <form action="{{ url('admin/update_ads') }}" method="post"   enctype="multipart/form-data"
               >
                    @csrf
                <div class="col-lg-6">



                    <img src="{{ asset('uploads/'.$ads->img1)}}" class="img-fluid" alt="Responsive image" style=" width:550px  ; height:200px; max-width: 100%;">
                    <br>

                    <br>

                  <div class="btn-group w-100">
                      <label class="form-label" for="customFile"></label>
                      <input type="file" class="form-control" id="customFile"  name="img1"/>

                  </div>
                </div>
<br><br>
                <div class="col-lg-6">

                    <img src="{{ asset('uploads/'.$ads->img2)}}" class="img-fluid" alt="Responsive image" style=" width:550px  ; height:200px; max-width: 100%;">
                    <br>

                    <br>

                  <div class="btn-group w-100">
                      <label class="form-label" for="customFile"></label>
                      <input type="file" class="form-control" id="customFile"  name="img2"/>

                  </div>


                  <br><br>
                  <button class="btn btn-primary start">
                    <i class="fas fa-upload"></i>
                    <span>save</span>
                  </button>

                </div>




                </form>

              </div>

            </div>

          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

@stop
