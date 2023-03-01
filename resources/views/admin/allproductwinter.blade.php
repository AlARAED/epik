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
                      <h3 class="card-title">All Product</h3>
                      <div style="float:right">
                         <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">AddProduct</button>
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
                              <form action="{{ route('save_price_product') }}"  method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">title:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="title" required>
                                  </div>

                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">first  day:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="first_day" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">second day:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="second_day" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">third day:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="thirs_day" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">fourth day:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="fourth_day" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">fifth day:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="fifth_day" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">sixth & siventh day:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="sixth_siventh_day" required  >
                                  </div>
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">More day  :</label>
                                    <input type="text" class="form-control" id="recipient-name" name="inventy_day" required>
                                  </div>
{{--
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea class="form-control" id="message-text"></textarea>
                                </div> --}}
                                <button type="submit" class="btn btn-primary">Send message</button>

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
                    <th>title</th>
                    <th>first day</th>
                    <th>second day</th>
                    <th>thirs day</th>
                    <th>fourth day</th>
                    <th>fifth day</th>
                    <th>sixth siventh day</th>
                    <th>inventy day</th>
                    <th>action </th>
                </tr>
            </thead>
            <tbody>
@foreach ($prices as  $price)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $price->title }}</td>
                    <td>{{ $price->first_day }}</td>
                    <td>{{ $price->second_day }}</td>
                    <td>{{ $price->thirs_day }}</td>
                    <td>{{ $price->fourth_day }}</td>
                    <td>{{ $price->fifth_day }}</td>
                    <td>{{ $price->sixth_siventh_day }}</td>
                    <td>{{ $price->inventy_day }}</td>
                    <td><button data-toggle="modal" data-target="#exampleModaledit{{ $price->id }}">Edit</button>
                    <button data-toggle="modal" data-target="#exampleModaledelte{{ $price->id }}" >Delete</button></td>

                </tr>





                <div class="modal fade" id="exampleModaledit{{ $price->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background:#0d6efd;">
                          <h5 class="modal-title" id="exampleModalLabel">  </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ url('admin/update_price_product/'.$price->id) }}"  method="post">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">title:</label>
                                <input type="text" class="form-control" id="recipient-name" name="title"  value="{{ $price->title  }}">
                              </div>

                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">first  day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="first_day" value=" {{ $price->first_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">second day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="second_day" value="{{  $price->second_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">third day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="thirs_day" value="{{ $price->thirs_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">fourth day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="fourth_day" value="{{ $price->fourth_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">fifth day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="fifth_day" value="{{ $price->fifth_day }}" >
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">sixth & siventh day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="sixth_siventh_day" value="{{ $price->sixth_siventh_day }}"  >
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">More day  :</label>
                                <input type="text" class="form-control" id="recipient-name" name="inventy_day" value="{{ $price->inventy_day }}">
                              </div>
                            {{-- <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">update </button>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>










                  <div class="modal fade" id="exampleModaledit{{ $price->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background:#0d6efd;">
                          <h5 class="modal-title" id="exampleModalLabel">  </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ url('admin/update_price_product/'.$price->id) }}"  method="post">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">title:</label>
                                <input type="text" class="form-control" id="recipient-name" name="title"  value="{{ $price->title  }}">
                              </div>

                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">first  day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="first_day" value=" {{ $price->first_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">second day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="second_day" value="{{  $price->second_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">third day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="thirs_day" value="{{ $price->thirs_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">fourth day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="fourth_day" value="{{ $price->fourth_day }}">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">fifth day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="fifth_day" value="{{ $price->fifth_day }}" >
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">sixth & siventh day:</label>
                                <input type="text" class="form-control" id="recipient-name" name="sixth_siventh_day" value="{{ $price->sixth_siventh_day }}"  >
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">More day  :</label>
                                <input type="text" class="form-control" id="recipient-name" name="inventy_day" value="{{ $price->inventy_day }}">
                              </div>
                            {{-- <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">update </button>

                          </form>
                        </div>

                      </div>
                    </div>
                  </div>









                  <div class="modal fade" id="exampleModaledelte{{ $price->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background:#0d6efd;">
                          <h5 class="modal-title" id="exampleModalLabel">  </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ url('admin/Delete_price_product/'.$price->id) }}"  method="post">
 @csrf




                            <h1>Delete Product</h1>
                            <p>Are you sure you want to delete your product?</p>

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
