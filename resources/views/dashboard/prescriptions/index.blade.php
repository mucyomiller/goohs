@extends('dashboard.theme')
@push('title')
    Manage Prescriptions
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Prescriptions
</div>
</div>
<center style="margin-top: 7%;">
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Patient Name</th>
<th>Doctor Name</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th style="width: 25%">Action</th>
</tr>
</thead>
<tbody>
@foreach($appointments as $appointment)
<tr>
<td>{{{ $appointment->patient->name }}}</td>
<td>{{{ $appointment->employee->name }}}</td>
<td>{{{ $appointment->date }}}</td>
<td>{{{ $appointment->time }}}</td>
<td>
{{ link_to_route('prescriptions.show', 'View', [$appointment->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@if(Auth::user()->role != 'Doctor') 
{{ link_to_route('prescriptions.edit', 'Edit', [$appointment->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
{{--$appointments->appends(['id' => $patient_id])->links('partials.pagination')--}}
</center>
@endsection

