@extends('dashboard.theme')
@push('title')
Add Vital Signs
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Add Vital Signs
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
{{ Form::open(array('action' => 'VitalsignsController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
@include('vitalsigns.form')
<input name="patient_id" type="hidden" value="{{ $appointment->patient->id }}">
<input name="appointment_id" type="hidden" value="{{ $appointment->id }}">
<tr> 
<td colspan="3"> 
<center>
<div class="btn-wrap">
<a class="btn_3" href="javascript:document.getElementById('regForm').reset();" data-type="reset">Reset</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Save" class="submit" />
</div>
</center>
</td>
</tr>
</table>
{{ Form::close() }}
</div>
</center>
@endsection