@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    @include('errors')
    @include('massage')
    <!-- partial -->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Client Information</h4>

                        <form class="forms-sample" method="POST" action="{{ route('client.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 20%; padding-top:.6rem">
                                    <p>Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Company Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 20%; padding-top:.6rem">
                                    <p> Tag Line</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="tag_line" class="form-control" style="padding: .500rem"
                                        id="exampleInputUsername1" placeholder="Enter Tag Line">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 20%; padding-top:20px">
                                    <p> Details</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="details" class="mt-2"></label>
                                        <textarea class="form-control form-control-sm" name="details" style="padding: .500rem" name="description"
                                            id="editor" cols="20" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-4" style="max-width: 20%;">
                                <p>Image</p>
                            </div>
                            <div class="col-sm-7">
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                            </div>
                        </div>
                        <img id="img-preview" src="images/noimage.jpg" width="220rem" height="150rem"  />


                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12" style="padding-top:.5rem;padding-left:2rem">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </div>
            </div>
            </form>

        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Client List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Tag line</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($client as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->tag_line }}</td>
                                            <td>{!! $item->details!!}</td>
                                            <td><img src="{{ asset('images/client/' . $item->image) }}" alt=""></td>
                                            <td> <a href="{{ route('client.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('client.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                class="fa-solid fa-trash"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $client->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
        <!-- content-wrapper ends -->

        <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->

        <!-- container-scroller -->
        <!-- base:js -->

        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>



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
    @endsection
