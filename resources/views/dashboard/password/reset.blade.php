@extends('dashboard.theme')
@push('title')
Reset Password
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Reset Password
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
{{ Form::open(array('action' => 'RemindersController@postReset', 'method' => 'POST')) }}
<input type="hidden" name="token" value="{{ $token }}">
<input type="email" required="true" id = "email" name="email" placeholder="Email" required="true">
<input type="password" required="true" name="password" id="password" placeholder="Password">
<input type="password" required="true" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
<input style="width:100%" type="submit" name="login" class="login login-submit" value="Reset Password">
{{ Form::close() }}
</div>
</div>
@endsection