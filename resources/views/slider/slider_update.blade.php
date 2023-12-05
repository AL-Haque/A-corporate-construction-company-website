@extends('layouts.adminLayout')
@section('content')
    <!-- partial -->
    @include('errors')
    @include('massage')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Slider Information</h4>

                        <form class="forms-sample" method="POST" action=" {{ route('slider.update',$slide->id) }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p> Title</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="title"  value={{$slide->title}} class="form-control"
                                        style="padding: .500rem" id="exampleInputUsername1"
                                        placeholder="Enter Service Name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width:40%; padding-top:.6rem">
                                    <p> Short Details</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="details" value={{$slide->details}}  class="form-control"
                                        style="padding: .500rem" id="exampleInputUsername1"
                                        placeholder="Enter Service Name">
                                </div>
                            </div>

                            <button style="margin-top: 1rem" type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button  style="margin-top: 1rem" class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-3" style="max-width:40%;">
                                <p>Slider Image</p>
                            </div>
                            <div class="col-sm-7">
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                            </div>
                            <img id="img-preview" src="{{ asset('images/' . $slide->image) }}" width="220px"
                            height="150px"  style="padding-top:1rem;padding-left:1rem" />
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Slider List</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Title</th>
                                        <th>Short Details</th>
                                        <th>Image</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($slider as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->details }}</td>
                                            <td><img src="{{ asset('images/' . $item->image) }}" alt="Image"></td>

                                            <td>{{ $item->created_at }}</td>
                                            <td> <a href="{{ route('slider.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('slider.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                class="fa-solid fa-trash"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$slider->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
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
                reader.onload = function (e) {
                $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
            }
    </script>
@endpush
