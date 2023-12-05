@extends('layouts.adminLayout')
@section('content')
    @include('admin.Alert')
    @include('errors')
    @include('massage')
    <div class="content-wrapper">

        <h2 class="card-title">Upload Company Information</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('company.update') }} "
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p> Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" value="{{ $companies->name }}" class="form-control"
                                        style="padding: .500rem" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p> Email</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="email"value="{{ $companies->email }}" class="form-control"
                                        style="padding: .500rem" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:10px">
                                    Address
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="address" value="{{ $companies->address }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p>Phone No</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="tel" name="phone" value="{{ $companies->phone }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Phone No">
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p>Facebook</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="facebook" value="{{ $companies->facebook }}"
                                        class="form-control" style="padding: .500rem" placeholder="Facebook">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p>Instragram</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="instragram" value="{{ $companies->instragram }}"
                                        class="form-control" style="padding: .500rem" placeholder="Instragram">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p> LinkdIn</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="linkdln" class="form-control"
                                        value="{{ $companies->linkdln }}" style="padding: .500rem" placeholder="LinkdIn">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p> Twitter</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="twitter" class="form-control"
                                        value="{{ $companies->twitter }}" style="padding: .500rem" placeholder="Twitter">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p>Slogun</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="slogun" class="form-control"
                                        value="{{ $companies->slogun }}" style="padding: .500rem"
                                        placeholder="Enter Slogun">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p>Description</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group" style="max-width: 100%">
                                        <label for="description" class="mt-12"></label>
                                        <textarea class="form-control form-control-sm" name="about" style="padding: .500rem" name="description"
                                            id="editor" cols="100" rows="100"><div>{!! $companies->about !!}</div> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p>Note</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="note" value="{{ $companies->note }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter Wellcome Note">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%; padding-top:.6rem">
                                    <p>About Video</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="about_video" value="{{ $companies->about_video }}"
                                        class="form-control" style="padding: .500rem" placeholder="Enter video url">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4" style="max-width: 25%;">
                                    <p>Logo</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="file" name="logo" accept="image/*" onchange="readURL2(this)" />
                                </div>
                            </div>
                            <img id="img-preview2" src="{{ asset('images/' . $companies->logo) }}" width="200rem"
                                height="150rem" style="margin-left: 16.5rem"  />


                            <div class="form-group row" style="margin-top: 20px">
                                <div class="col-sm-4" style="max-width: 25%;">
                                    <p>Image</p>
                                </div>

                                <div class="col-sm-8">
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                </div>
                            </div>




                            <img id="img-preview" src="{{ asset('images/' . $companies->image) }}" width="220px"
                                height="150px"  style="margin-left: 16.5rem" />

                            <div class="button" style="padding-top: 40px">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    {{-- <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body"> --}}
    {{-- <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"> </i>
              </span>
            </div> --}}
    {{-- <div class="form-group row">

                            <div class="col-sm-3" style="max-width: 20%; padding-top:10px">
                                <p>About Us</p>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="about" value="{{ $companies->about }}" class="form-control"
                                    style="padding: .500rem" placeholder="Enter About">
                                    <textarea name="about" rows="4" cols="50" placeholder="Enter About"></textarea>
                                <br>
                            </div>
                        </div> --}}
    {{--
                    </div>
                </div>
            </div>
        </div> --}}

    {{-- <div class="form-group">
            <label for="file">Image</label>
            <img   src="{{ asset('images/' . $companies->image) }}" alt="Image">
        </div> --}}
    {{--
        <div class="form-group">
            <label for="file">logo</label>
            <img id="img-preview" src="{{ asset($companies->logo) }}" alt="logo">
        </div> --}}

    <!-- content-wrapper ends -->

    <!-- main-panel ends -->


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


        function readURL2(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview2").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview2").attr("src", noimage);
            }
        }
    </script>


    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
