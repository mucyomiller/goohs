@extends('prescriptions.layouts.master')
@push('title')
Prescription Details
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Prescription Details
</div>
</div>
@endpush
@section('content')
<center>
<div id="regForm" style="border-radius: 10px;border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style="  margin: 5%;" width="621" height="720">
<tr>
<td width="272" height="55"><label>Visit Date:</label></td>
<td width="333"><label>{{{ date('j F, Y', strtotime($prescription->appointment->date)) }}}</label></td>
</tr>
<td width="272" height="55"><label>Visit Time:</label></td>
<td width="333"><label>{{{ date('H:i:s', strtotime($prescription->appointment->time)) }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Doctor Name:</label> </td>
<td width="333"><label>{{{ $prescription->appointment->employee->name }}}</label></td>
</tr>
<tr>
<td width="272"><label>Prescription Code:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $prescription->code }}}</label></td>
</tr>
<tr>
<td width="272"><label>Medicines:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">
@foreach($medicines as $index => $medicine)
{{ $index+1 .' - '.$medicine['name'] }}, Qty: {{ $medicine['qty'] }} <br/>
@endforeach
</div></label></td>
</tr>
<tr>
<td width="272"><label>Other Medicines:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $prescription->medicines }}}</div></label></td>
</tr>
<tr>
<td width="272"><label>Note:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $prescription->note }}}</div></label></td>
</tr>
<tr>
<td width="272"><label>Diagnostic Procedure:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $prescription->procedure }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
<input type="submit" onclick="back()" value="Back" class="submit" />
&nbsp;&nbsp;&nbsp;&nbsp;
@if(isset($flag))
{{ link_to('pres_print?id='.$prescription->id, 'Print', ['class' => 'btn_3'], $secure = null) }}
@else
{{ link_to('print_pres?id='.$prescription->id, 'Save PDF', ['class' => 'btn_3'], $secure = null) }}
@endif
</section>
</center>
</div>
</center>
@endsection