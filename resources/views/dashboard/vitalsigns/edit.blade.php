@extends('vitalsigns.layouts.master')
@push('title')
Edit Vital Signs
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Edit Vital Signs
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

{{ Form::model($vitalsign, ['route' => ['vitalsigns.update', $vitalsign->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}
@include('vitalsigns.form')
<tr>
<td colspan="3">
<center>
<div class="btn-wrap">
<a class="btn_3" href="" onClick="back()" >Back</a>&nbsp&nbsp&nbsp
<input type="submit" value="Update" class="submit" />
</div>
</center>
</td>
</tr>
</table>
{{ Form::close() }}
</div>
</center>
@endsection