@extends('layouts.adminLayout')

@section('content')
    @include('admin.Alert')
    <!-- partial -->
    @include('errors')
    @include('massage')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Video Gallery</h4>

                        <form class="forms-sample" method="POST" action="{{ route('video.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-3" style="padding-top:.4rem">
                                    <p>Video Url</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="url" name="video_url" class="form-control" style="padding:.400rem"
                                        placeholder="Enter Video Url">
                                </div>
                            </div>

                            <div class="form-group row" style="margin-top: 5rem">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>



            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="file">video Image</label></div>
                                <div class="col-sm-9">
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                            </div>
                            <img id="img-preview" src="{{ asset('images/noimage.jpg') }}" width="220px"
                                height="150px" style="margin-top:1rem;margin-left:1rem"/>
                        </div>

                    </div>
                </div>
            </div>

        </div>



        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Video List</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Image</th>
                                        <th>video</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($videos as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('images/video/'.$item->image) }}" alt="Image"></td>
                                            <td>
                                                <div class="card-img-top d-none d-md-block" style="height: 150%;">
                                                    <iframe width="100%" height="100%" src="{{ $item->video_url }}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td> <a href="{{ route('video.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('video.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                class="fa-solid fa-trash"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $videos->withQueryString()->links('pagination::bootstrap-5') !!}
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
