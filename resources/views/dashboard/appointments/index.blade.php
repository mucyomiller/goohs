@extends('dashboard.theme')
@push('title')
Manage Appointments
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Appointments
</div>
</div>
<center style="margin-top: 7%;">
@if(Auth::user()->role == 'Administrator' || Auth::user()->role == 'Receptionist')
<center>{{ link_to_route('appointments.create', 'Create Appointment', '', ['class' => 'btn_1'])}}</center>
@endif
<br>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th>Patient Name</th>
<th>Doctor Name</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
<th style="width: 25%">Action</th>
</tr>
</thead>

<tbody>

@foreach($appointments as $appointment)
<tr>
<td>{{{ $appointment->patient->name }}}</td>
<td>{{{ $appointment->employee->name }}}</td>
<td>{{{ date('j F, Y', strtotime($appointment->date)) }}}</td>
<td>{{{ $appointment->timeslot->slot }}}</td>
<td>
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
</td>
<td>
{{ link_to_route('appointments.show', 'View', [$appointment->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

@if(Auth::user()->role != 'Doctor')
@if($appointment->status == 0 || $appointment->status == 1 || $appointment->status == 2)
{{ link_to_route('appointments.edit', 'Edit', [$appointment->id], ['class' => 'data_table_btn'])}}
@endif
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $appointments->links('partials.pagination') }}
</center>
@endsection

