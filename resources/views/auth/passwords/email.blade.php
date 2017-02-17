<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>e-vuze reset</title>
<link href="{{asset('images/favicon.png')}}" rel="icon" type="image/png">
<link href="{{asset('images/favicon.ico')}}" rel="shortcut icon">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="{{asset('dashboard/css/separate/pages/login.min.css') }}">
<link rel="stylesheet" href="{{asset('dashboard/css/lib/font-awesome/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/css/lib/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard/css/main.css') }}">
</head>
<body>
<div class="page-center">
<div class="page-center-in">
<div class="container-fluid">
<form class="sign-box reset-password-box" method="POST" action="{{ url('/password/email') }}">
 {{ csrf_field() }}
<header class="sign-title">Reset Password</header>
<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
<input type="text" class="form-control" placeholder="E-Mail or Phone" name="email"
value="{{ old('email') }}"/>
@if ($errors->has('email'))
<span class="help-block">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
<center><button type="submit" class="btn btn-rounded ">Send Password Reset Link</button></center>
</form>
</div>
</div>
</div><!--.page-center-->

<script src="{{ asset('dashboard/js/lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('dashboard/js/lib/tether/tether.min.js')}}"></script>
<script src="{{ asset('dashboard/js/lib/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ asset('dashboard/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{ asset('dashboard/js/lib/match-height/jquery.matchHeight.min.js')}}"></script>
<script>
$(function() {
$('.page-center').matchHeight({
target: $('html')
});
$(window).resize(function(){
setTimeout(function(){
$('.page-center').matchHeight({ remove: true });
$('.page-center').matchHeight({
target: $('html')
});
},100);
});
});
</script>
<script src="{{ asset('dashboard/js/app.js')}}"></script>
</body>
</html>