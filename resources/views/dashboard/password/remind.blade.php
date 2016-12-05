@extends('dashboard.theme')
@push('title')
Forgot Password
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Forgot Password
</div>
</div>
@if(Session::has('error'))
<p class='error'> {{Session::get('error')}} </p>
@elseif(Session::has('status'))
<p class='success'> {{Session::get('status')}} </p>
@endif
<br><br><br>
<div class="login">
<div class="login-card">
<h1>Details!</h1><br>
{{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'POST')) }}
<input type="email" required="true" id = "email" name="email" placeholder="Email" required="true">
<input style="width:100%" type="submit" name="login" class="login login-submit" value="Send Reset Link">
{{ Form::close() }}
</div>
</div>
@endsection