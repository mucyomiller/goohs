@extends('dashboard.theme')
@push('title')
Appointment Details
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Appointment Details
</div>
</div>
<br><br><br>
@endpush
@section('content')
<center>
<div id="regForm" style="border-radius: 10px; border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" margin: 5%;" width="621" height="720">
<tr>
<td width="272" height="55"><label>Doctor Name:</label> </td>
<td width="333"><label>{{{ $appointment->employee->name }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>     Appointment Date:</label></td>
<td width="333"><label>{{{ date('j F, Y', strtotime($appointment->date)) }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Appointment Time:</label></td>
<td width="333"><label>{{{ $appointment->timeslot->slot }}}</label> </td>
</tr>
<tr>
<td width="272" height="55"><label>      Patient Name:</label></td>
<td width="333"><label>{{{ $appointment->patient->name }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Status:</label></td>
<td width="333"><label>
@if($appointment->status == 0)
Reserved
@elseif($appointment->status == 1)
Waiting
@elseif($appointment->status == 2)
Check-in
@elseif($appointment->status == 3)
No Show
@elseif($appointment->status == 4)
Cancelled
@elseif($appointment->status == 5)
Closed
@endif
</label></td>
</tr>
<tr>
<td width="272"><label>Checkup Reason:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $appointment->checkup_reason }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
<input type="submit" onclick="back()" value="Back" class="submit" />
</section>
</center>
</div>
</center>
<br><br>
@endsection