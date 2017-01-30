@extends('dashboard.theme')
@push('title')
Add New Medicine
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Add New Medicine
</div>
</div>
@endpush
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach
<br/>
<center>
<div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">

{{ Form::open(array('action' => 'MedicinesController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
@include('dashboard.medicines._form')
{{ Form::close() }}
</div>
</center>
<br><br>
@endsection