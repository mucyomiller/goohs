@extends('dashboard.theme')
@push('title')
Clinic Registration
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Clinic Registration
</div>
</div>
<br><br><br>
@endpush
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach
<br/>
<center>
<div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">
{{ Form::open(array('action' => 'ClinicsController@store', 'style' => 'padding: 40px', 'id' => 'regForm', 'onsubmit' => 'checkForm()')) }}
@include('clinics._form')
{{ Form::close() }}
</div>
</center>
@endsection