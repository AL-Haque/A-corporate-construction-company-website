@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    @include('errors')
    @include('massage')
    <!-- partial -->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Registration</h4>
                        <form class="forms-sample" method="POST" action="{{route('user.store')}}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 20%; padding-top:10px">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="name" value="" class="form-control"
                                        style="padding: .500rem"  placeholder="Enter  Name">
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                    <p> User Name</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="username" value=""
                                        class="form-control" style="padding: .500rem"
                                        placeholder="Enter User name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                    <p>Email</p>
                                </div>
                                <div class="col-sm-6">

                                    <input type="email" name="email" value=""
                                    class="form-control" style="padding: .500rem"
                                    placeholder="Enter email">

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                    <p>Role</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" name="role" value=""
                                    class="form-control" style="padding: .500rem"
                                    placeholder="Enter Role no ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                    <p>Password</p>
                                </div>
                                <div class="col-sm-6">

                                    <input type="password" name="password" value=""
                                    class="form-control" style="padding: .500rem"
                                    placeholder="Enter password">

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12" style="padding-top:1.5rem;">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                         
                    </div>
                </div>
            </div>

            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-3" style="max-width: 20%;padding-bottom:20px">
                            <p>Image</p>
                        </div>
                            <div class="col-sm-2" style="position: relative">
                                {{-- <input type="file" name="image" id="image" style="display: none"> --}}
                                <input type="file" name="image" id="image" accept="image/*" onchange="readURL(this)" style="display: none" />
                                <img src="plus.jpg" alt="" srcset="" height="150px" width="150px" id="img-preview">
                                <a href="javascript:void(0)" onclick="myFunction(event)" style="position:absolute;top:0;left:0:right:0;height:150px;width:150px"></a>
                            </div>
                    </div>
                    </div>
            </form>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> User List</h4>
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($user as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->password }}</td>
                                            <td><img src="{{asset('images/'. $item->image) }}" alt="Image"></td>
                                            <td>{{ $item->created_at }}</td>
                                            <td> <a href="{{ route('user.edit',$item->id) }}"><i
                                                class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('user.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                class="fa-solid fa-trash"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {!! $client->withQueryString()->links('pagination::bootstrap-5') !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        <!-- content-wrapper ends -->

        <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->

        <!-- container-scroller -->
        <!-- base:js -->
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


    function myFunction(event) {
        console.log(event)
        const fileInput = document.getElementById('image');
        fileInput.click();

        fileInput.addEventListener('change', (event) => {
            const selectedFile = event.target.files[0];

            if (selectedFile) {
                console.log('Selected file:', selectedFile);
            }
        });
    }
</script>
@endpush
