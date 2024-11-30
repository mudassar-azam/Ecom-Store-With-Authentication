<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="{{asset('assets/user/css/bootstrap.css')}}" />
      <link href="{{asset('assets/user/css/font-awesome.min.css')}}" rel="stylesheet" />
      <link href="{{asset('assets/user/css/style.css')}}" rel="stylesheet" />
      <link href="{{asset('assets/user/css/responsive.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   </head>
   <body>
      <div>
        @include('layouts.user.header2')
      </div>
        @yield('content')
        @include('layouts.user.footer')
      <script src="{{asset('assets/user/js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{asset('assets/user/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/user/js/bootstrap.js')}}"></script>
      <script src="{{asset('assets/user/js/custom.js')}}"></script>
   </body>
</html>