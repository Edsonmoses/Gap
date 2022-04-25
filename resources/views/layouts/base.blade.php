<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Real Estate html5 template">
    <link href="{{asset('assets/user/assets/images/favicon/favicon.png')}}" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="{{asset('assets/user/assets/css/external.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/user/assets/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{asset('assets/user/assets/js/html5shiv.js')}}"></script>
      <script src="{{asset('assets/user/assets/js/respond.min.js')}}"></script>
    <![endif]-->
    @livewireStyles
    <!-- Document Title
    ============================================= -->
    <title>{{ config('app.name', 'Ground & Properties Ltd - Gap') }} | </title>
   
</head>
<script>
    window.livewire.on('imageUploaded',()=>{
            $('#form-upload')[0].reset();
        });
</script>
<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        @livewire('pages.header-component')
        {{$slot}}
        @if(Request::is('/'))
         @livewire('pages.footer-component')
         @else
         @livewire('pages.main-footer-component')
         @endif
@livewireScripts
</body>

</html>
