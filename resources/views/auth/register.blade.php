<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>e-vuze - register</title>
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
<form class="sign-box" method="POST" action="{{url('/register')}}">
{{ csrf_field() }}
<div class="sign-avatar no-photo">&plus;</div>
<header class="sign-title">Sign Up</header>
<div class="form-group {{ $errors->has('names') ? ' has-error' : '' }}">
<input type="text" class="form-control" placeholder="Your Names"  name="names"
value="{{ old('names') }}" />
@if ($errors->has('names'))
<span class="help-block">
<strong>{{ $errors->first('names') }}</strong>
</span>
@endif
</div>
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="E-mail"  />
</div>
<div class="form-group {{ $errors->has('idnumber') ? ' has-error' : '' }}">
<input type="text" class="form-control" placeholder="Idnumber or passport"  name="idnumber"
value="{{ old('idnumber') }}" />
@if ($errors->has('idnumber'))
<span class="help-block">
<strong>{{ $errors->first('idnumber') }}</strong>
</span>
@endif
</div>
<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
<input type="text" class="form-control" name="phone" placeholder="Phone Number" 
value="{{ old('phone') }}" />
@if ($errors->has('phone'))
<span class="help-block">
<strong>{{ $errors->first('phone') }}</strong>
</span>
@endif
</div>
<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
<input type="password" class="form-control" name="password" placeholder="Password"/>
@if ($errors->has('password'))
<span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
<div class="form-group">
<input type="password" class="form-control" name="password_confirmation" placeholder="Repeat password"/>
</div>
<button type="submit" class="btn btn-rounded btn-success sign-up">register</button>
<p class="sign-note">Already have an account? <a href="{{url('login')}}">login</a></p>
<!--<button type="button" class="close">
<span aria-hidden="true">&times;</span>
</button>-->
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