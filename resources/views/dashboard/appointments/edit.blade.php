@extends('dashboard.theme')
@push('title')
Edit Appointment
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Edit Appointment
</div>
</div>
@stop
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach
<br/>
<center>
<div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">
{{ Form::model($appointment, ['route' => ['appointments.update', $appointment->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}
<table width="621" height="500" border="0">
<tr>
<td width="272" height="55"><label>Select Doctor*</label> </td>
<td width="333">
{{ Form::select('employee_id', $doctors->lists('name', 'id'), null, ['required' => 'true', 'id' => 'employee_id', 'style' => "width: 100%; height: 38px"] ); }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Select Date:</label> </td>
<td width="333">
{{ Form::input('date', 'date', null, array('placeholder' => 'mm/dd/yyyy', 'id' => 'date', 'style' => "width: 98%; height: 38px")) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Select Time Slot*</label> </td>
<td width="333">
{{ Form::select('timeslot_id', $timeslot, Input::old('timeslot_id') , ['required' => 'true', 'id' => 'time_slot_id', 'style' => "width: 100%; height: 38px"] ); }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Select Patient*</label> </td>
<td width="333">
{{ Form::select('patient_id', $patients->lists('name', 'id'), null, ['required' => 'true', 'id' => 'patient_id', 'style' => "width: 100%; height: 38px"] ); }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Status*</label> </td>
<td width="333">
{{ Form::select('status', ['0' => 'Reserved', '1' => 'Waiting',
'2' => 'Check-in', '3' => 'No Show', '4' => 'Cancelled', '5' => 'Closed'], null, ['required' => 'true', 'id' => 'patient_id', 'style' => "width: 100%; height: 38px"] ); }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Checkup Reason:</label> </td>
<td width="333" height="200">{{ Form::textarea('checkup_reason', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'Enter Reason', "style" => "font-size: 1.2em; margin-top: 2px; resize: none; width: 98%") ) }}</td>
</tr>
<tr>
<td colspan="2">
<center>
<div class="btn-wrap">
<a class="btn_3" href="../" >Back</a>&nbsp&nbsp&nbsp
<input type="submit" value="Update" class="submit" />
</div>
</center>
</td>
</tr>
</table>
{{ Form::close() }}
</div>
</center>
<br><br>
@endsection