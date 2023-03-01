@extends('admin.layout.app')
@section('content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">All Brands</h3>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
                      <div style="float:right">
                         <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Add Brand</button>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background:#0d6efd;">
                              <h5 class="modal-title" id="exampleModalLabel">  </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>


                            <div class="modal-body">
                              <form action="{{ route('save_brand') }}"  method="post"   enctype="multipart/form-data"  >
                                @csrf

                                <div class="form-group">
                                    <label class="form-label" for="customFile">Image Brand </label>
                                    <input type="file" class="form-control" id="customFile"  name="img" required  />
                                  </div>



                                <div class="form-group">
                               <select class="form-select" aria-label="Default select example" required name="type">

  <option value="1">winter</option>
  <option value="2">sommer</option>
</select>
                                </div>
                                <button type="submit" class="btn btn-primary">save </button>

                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- /.card-header -->
                    <div class="card-body">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>image</th>
                    <th>type</th>

                    <th>action </th>
                </tr>
            </thead>
            <tbody>
@foreach ($BrandWinter as  $BrandWinte)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('uploads/'.$BrandWinte->img)}}"  width="106px" height="70px" ></td>
                    <td>@if($BrandWinte->type==1)winter @else sommer @endif</td>

                   <td style="margin-top:60px;"> <button data-toggle="modal" data-target="#exampleModaledelte{{ $BrandWinte->id }}" >Delete</button></td>

                </tr>

                  <div class="modal fade" id="exampleModaledelte{{ $BrandWinte->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background:#0d6efd;">
                          <h5 class="modal-title" id="exampleModalLabel">  </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ url('admin/Delete_brand/'.$BrandWinte->id) }}"  method="post">
 @csrf




                            <h1>Delete Product</h1>
                            <p>Are you sure you want to delete your brand?</p>

                            <button type="submit" class="btn btn-danger">Delete </button>

                          </form>
                        </div>

                      </div>
                    </div>
                  </div>






                  @endforeach

            </tbody>

        </table>
                    </div>
                  </div>
                </div></div>
            </div></section>

      </div>
    </div><!-- /.container-fluid -->
  </section>


@stop
