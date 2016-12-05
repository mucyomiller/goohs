@extends('dashboard.theme')
@push('title')
Doctor Home
@endpush
@section("current_doc_home")
class="current"
@stop

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
$('#example').dataTable({
    "lengthMenu": [[5], [5]]
});
} );
</script>
@endpush

@section('content')	
<section id="content">

<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Doctor Home
</div>
</div>
<br><br>
<div>
<div class="menu" style="margin-left: 10%; margin-right: 10%">

<a class="purple" href="search_pmr">View Medical Record</a>
<a class="blue" href="app_vitals">View Vital Signs</a>
<a class="orange" href="appointments">View Appointments</a>


</div>
</div>	
<div class="slideout">
<input id="dashboard" type="button" value="Dashboard" />
<div class="emptyDiv">
<center><b style="font-weight: 800; color: #129894; font-size: 1.5em"> Today Appointments!</b></center><br/>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th>Patient Name</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

@foreach($appointments as $appointment)
<tr>
<td>{{{ $appointment->patient->name }}}</td>
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
{{ link_to_route('appointments.edit', 'Edit', [$appointment->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
</div> 
</div>
@endsection
