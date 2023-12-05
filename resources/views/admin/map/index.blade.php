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
                        <h4 class="card-title">Map Information</h4>

                        <form class="forms-sample" method="POST" action="{{ route('map.store') }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-sm-3" style="padding-top:.4rem">
                                    <p>Map Url</p>
                                </div>
                                <div class="col-sm-8">
                                    <input type="url" name="map_url" class="form-control" style="padding:.400rem"
                                        placeholder="Enter map Url">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">map List</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>map</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($maps as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="card-img-top d-none d-md-block" style="height: 150%;">
                                                    <iframe width="100%" height="100%" src="{{ $item->map_url }}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td> <a href="{{ route('map.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen"></i> </a></td>
                                            <td><a href="{{ route('map.delete', $item->id) }}" onclick=" return confirm('Are You Sure!') "><i
                                                class="fa-solid fa-trash"></i></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {!! $videos->withQueryString()->links('pagination::bootstrap-5') !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
