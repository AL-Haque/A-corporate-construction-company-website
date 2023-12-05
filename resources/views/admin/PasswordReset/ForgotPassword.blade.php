<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{$info->name}}</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('images/'.$info->logo)}}" alt="logo"> <span style="font-size: 1.2em; font-weight:bold">{{$info->name}}</span>
              </div>
               @include('errors')
               @if (session()->has('error'))
               <div class="alert alert-danger">{{session('error')}} </div>
               @endif
               @if (session()->has('success'))
               <div class="alert alert-success">{{session('success')}} </div>
               @endif
               <p>WE will send a link to your email,Use That link to reset password.</p>
              <form class="pt-3"  method="POST" action="{{route('ForgotPassword')}}" >
               {{csrf_field()}}
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Email ">
                </div>
                <div class="mb-4">
                </div>
                <input class="btn btn-primary btn-user btn-block" type="submit" >

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
