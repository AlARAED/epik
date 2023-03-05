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
@foreach ($Gallery as  $Gallery)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('uploads/'.$Gallery->img)}}"  width="180px" height="100px" ></td>
                    <td>@if($Gallery->type==1)winter @else sommer @endif</td>



                   <td style="margin-top:60px;">
                    <button data-toggle="modal" data-target="#exampleModaledit{{ $Gallery->id }}">Edit</button>

                </tr>
                <div class="modal fade" id="exampleModaledit{{ $Gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background:#0d6efd;">
                          <h5 class="modal-title" id="exampleModalLabel">  </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>


                        <div class="modal-body">
                          <form action="{{ url('admin/save_galley/'.$Gallery->id) }}"  method="post"   enctype="multipart/form-data"  >
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="customFile">Image  </label>
                                <input type="file" class="form-control" id="customFile"  name="img" required  />
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
