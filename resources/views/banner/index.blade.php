@extends('layouts.adminLayout')

@section('content')
    @include('admin.Alert')
    <!-- partial -->
    @include('errors')
    @include('massage')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Banner Information</h4>
                        <form class="forms-sample" method="POST" action=" {{ route('banner.update') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{-- <div class="form-group row">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>Home silder-Banner-1</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="banner1" accept="{{ asset('images/' . $banner->banner1) }}" onchange="readURL(this)" />
                                </div>
                            </div>
                            <img id="img-preview" src="{{ asset('images/' . $banner->banner1) }}" width="220rem"
                                height="150rem" style="margin-left: 13.5rem" />



                                <div class="form-group row" style="margin-top:2rem">
                                    <div class="col-sm-3" style="max-width: 20%;">
                                        <p>Home silder-Banner-2</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="file" name="banner2" accept="image/*" onchange="readURL2(this)" />
                                    </div>
                                </div>
                                <img id="img-preview2"  src="{{ asset('images/'. $banner->banner2) }}"   width="220rem"
                                    height="150rem" style="margin-left: 13.5rem" />



                                    <div class="form-group row" style="margin-top:2rem">
                                        <div class="col-sm-3" style="max-width: 20%;">
                                            <p>Home silder-Banner-3</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="file" name="banner3" accept="image/*" onchange="readURL3(this)" />
                                        </div>
                                    </div>
                                    <img id="img-preview3" src="{{asset('images/'.$banner->banner3) }}"   width="220rem"
                                        height="150rem" style="margin-left: 13.5rem" /> --}}



                            <div class="form-group row" style="margin-top:2rem">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>Home background image-1</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="background1" accept="image/*" onchange="readURL(this)" />
                                </div>
                            </div>
                            <img id="img-preview" src="{{ asset('images/' . $banner->background1) }}" width="600rem"
                            height="400rem" style="margin-left: 13.5rem" />



                            <div class="form-group row" style="margin-top:2rem">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>Home background image-2</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="background2" accept="image/*" onchange="readURL2(this)" />
                                </div>
                            </div>
                            <img id="img-preview2" src="{{ asset('images/' . $banner->background2) }}" width="600rem"
                            height="400rem" style="margin-left: 13.5rem" />

                            <div class="form-group row" style="margin-top:2rem">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>About-us Banner</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="about" accept="image/*" onchange="readURL3(this)" />
                                </div>
                            </div>
                            <img id="img-preview3" src="{{ asset('images/' . $banner->about) }}" width="600rem"
                            height="400rem" style="margin-left: 13.5rem" />



                            <div class="form-group row" style="margin-top:2rem">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>Service Banner</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="service" accept="image/*" onchange="readURL4(this)" />
                                </div>
                            </div>
                            <img id="img-preview4" src="{{ asset('images/'.$banner->service) }}" width="600rem"
                            height="400rem" style="margin-left: 13.5rem" />



                            <div class="form-group row" style="margin-top:2rem">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>Our Team Banner</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="team" accept="image/*" onchange="readURL5(this)" />
                                </div>
                            </div>
                            <img id="img-preview5" src="{{ asset('images/' . $banner->team) }}" width="600rem"
                            height="400rem" style="margin-left: 13.5rem" />




                            <div class="form-group row" style="margin-top:2rem">
                                <div class="col-sm-3" style="max-width: 20%;">
                                    <p>Contact-Banner</p>
                                </div>
                                <div class="col-sm-7">
                                    <input type="file" name="contact" accept="image/*" onchange="readURL6(this)" />
                                </div>
                            </div>
                            <img id="img-preview6" src="{{ asset('images/' . $banner->contact) }}"width="600rem"
                            height="400rem" style="margin-left: 13.5rem" />



                            <div class="form-group row" style="margin-top:2rem">
                                <button type="submit" class="btn btn-primary mr-2" style="margin-top:2rem">Submit</button>
                                <button class="btn btn-light" style="margin-top:2rem">Cancel</button>
                            </div>


                        </form>


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

        function readURL3(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview3").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview3").attr("src", noimage);
            }
        }


        function readURL4(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview4").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview4").attr("src", noimage);
            }
        }


        function readURL5(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview5").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview5").attr("src", noimage);
            }
        }

        function readURL6(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview6").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview6").attr("src", noimage);
            }
        }



        // function readURL7(input) {
        //     console.log(input.files);
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $("#img-preview7").attr("src", e.target.result);
        //         };

        //         reader.readAsDataURL(input.files[0]);
        //     } else {
        //         $("#img-preview7").attr("src", noimage);
        //     }
        // }

        // function readURL8(input) {
        //     console.log(input.files);
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $("#img-preview8").attr("src", e.target.result);
        //         };

        //         reader.readAsDataURL(input.files[0]);
        //     } else {
        //         $("#img-preview8").attr("src", noimage);
        //     }
        // }

        // function readURL9(input) {
        //     console.log(input.files);
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $("#img-preview9").attr("src", e.target.result);
        //         };

        //         reader.readAsDataURL(input.files[0]);
        //     } else {
        //         $("#img-preview9").attr("src", noimage);
        //     }
        // }
    </script>
@endpush
