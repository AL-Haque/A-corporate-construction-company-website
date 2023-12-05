@extends('layouts.adminLayout')

@section('content')
    @include('admin.Alert')
    @include('massage')
    <!-- partial -->
    @include('errors')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Photo Gallery</h4>
                        <form class="forms-sample" method="POST" action="{{ route('photo.store', $photo->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width:25%; padding-top:.6rem">
                                    <p> Title</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Service Name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12" style="padding-top:.5rem;">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>

            </div>




            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width:25%; ">
                                <p>Image</p>
                            </div>

                            <div class="col-sm-8">
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                            </div>
                        </div>
                        <img id="img-preview" src="{{ asset('images/noimage.jpg') }}" width="220rem" height="150rem"
                             />

                    </div>
                </div>
            </div>

            {{-- <div class="form-group row" style="padding-left:2rem">
                <button  type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </div> --}}


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Photo List</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($photos as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td><img src="{{ asset('images/' . $item->image) }}" alt="Image"></td>
                                            <td>{{$item->created_at }}</td>
                                            <td> <a href="{{ route('photo.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('photo.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                class="fa-solid fa-trash"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $photos->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    @endsection



    @push('admin-js')
        <script>
            let noimage =
                "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

            function readURL(input) {
                console.log(input.files);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $("#img-preview").attr("src", e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                } else {
                    $("#img-preview").attr("src", noimage);
                }
            }
        </script>
    @endpush
