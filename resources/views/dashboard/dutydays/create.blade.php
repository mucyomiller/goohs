@extends('dashboard.theme')
@push('title')
Create Schedule
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Create Doctor Schedule
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

{{ Form::open(array('action' => 'DutydaysController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
<table width="621" height="720" border="0">
<tr>
<td width="272" height="55"><label>Select Doctor:</label> </td>
<td width="333">

{{--Employee id will be stored in workingdays table as FK--}}
{{ Form::select('employee_id', $doctors->pluck('name', 'id'), null, ['required' => 'true', 'id' => 'employee_id'] ) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Sunday:</label> </td>
<td width="333">
{{ Form::checkbox('Sunday', 'Sunday', null, ['id' => 'sunday']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
{{ Form::input('text', 'sun_start_time', null, ['class' => 'timepicker', 'id' => 'sun_start_time']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
{{ Form::input('text', 'sun_end_time', null, ['class' => 'timepicker', 'id' => 'sun_end_time']) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Monday:</label> </td>
<td width="333">
{{ Form::checkbox('Monday', 'Monday', null, ['id' => 'monday']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
{{ Form::input('text', 'mon_start_time', null, ['class' => 'timepicker', 'id' => 'mon_start_time']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
{{ Form::input('text', 'mon_end_time', null, ['class' => 'timepicker', 'id' => 'mon_end_time']) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Tuesday:</label> </td>
<td width="333">
{{ Form::checkbox('Tuesday', 'Tuesday', null, ['id' => 'tuesday']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
{{ Form::input('text', 'tue_start_time', null, ['class' => 'timepicker', 'id' => 'tue_start_time']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
{{ Form::input('text', 'tue_end_time', null, ['class' => 'timepicker', 'id' => 'tue_end_time']) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Wednesday:</label> </td>
<td width="333">
{{ Form::checkbox('Wednesday', 'Wednesday', null, ['id' => 'wednesday']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
{{ Form::input('text', 'wed_start_time', null, ['class' => 'timepicker', 'id' => 'wed_start_time']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
{{ Form::input('text', 'wed_end_time', null, ['class' => 'timepicker', 'id' => 'wed_end_time']) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Thursday:</label> </td>
<td width="333">
{{ Form::checkbox('Thursday', 'Thursday', null, ['id' => 'thursday']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
{{ Form::input('text', 'thu_start_time', null, ['class' => 'timepicker', 'id' => 'thu_start_time']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
{{ Form::input('text', 'thu_end_time', null, ['class' => 'timepicker', 'id' => 'thu_end_time']) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Friday:</label> </td>
<td width="333">
{{ Form::checkbox('Friday', 'Friday', null, ['id' => 'friday']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
{{ Form::input('text', 'fri_start_time', null, ['class' => 'timepicker', 'id' => 'fri_start_time']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
{{ Form::input('text', 'fri_end_time', null, ['class' => 'timepicker', 'id' => 'fri_end_time']) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Saturday:</label> </td>
<td width="333">
{{ Form::checkbox('Saturday', 'Saturday', null, ['id' => 'saturday']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
{{ Form::input('text', 'sat_start_time', null, ['class' => 'timepicker', 'id' => 'sat_start_time']) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
{{ Form::input('text', 'sat_end_time', null, ['class' => 'timepicker', 'id' => 'sat_end_time']) }}
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td colspan="2">
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