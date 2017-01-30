@extends('dashboard.theme')
@push('script')
<script type="text/javascript">
$(document).ready(function() {
$('#example').dataTable();
} );
function back () {
window.history.back();
}
</script>
@endpush
@push('title')
    Select Appointment
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Select Appointment
</div>
</div>
<center style="margin-top: 7%;">
<br>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th>Patient Name</th>
<th>Doctor Name</th>
<th>Date</th>
<th>Time</th>
<th>Checkup Fee</th>
<th style="width: 25%">Action</th>
</tr>
</thead>
<tbody>
@foreach($appointments as $appointment)
<tr>
<td>{{{ $appointment->patient->name }}}</td>
<td>{{{ $appointment->employee->name }}}</td>
<td>{{{ date('j F, Y', strtotime($appointment->date)) }}}</td>
<td>{{{ $appointment->timeslot->slot }}} </td>
<td>
@if(($appointment->checkupfee) != null)
{{ $appointment->checkupfee->checkup_fee . '-/Rs'}} 
@else
Unpaid
@endif
</td>
<td>
@if($flag == 'vitals')
@if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('receptionist'))
{{ link_to_route('vitalsigns.create', 'Add', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
@elseif(Auth::user()->role == 'Doctor')
{{ link_to_route('vitalsigns.show', 'View', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
@endif
@elseif($flag == 'prescription')
{{ link_to_route('prescriptions.create', 'Add', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}  
@elseif($flag == 'test')
{{ link_to_route('labtests.index', 'Select', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
@elseif($flag == 'proc')
{{ link_to_route('diagonosticprocedures.create', 'Add', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
@elseif($flag == 'check_fee')
@if(Auth::user()->role == "Accountant")
@if(($appointment->checkupfee) != null)
{{ link_to_route('checkupfees.show', 'View', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
{{ link_to_route('checkupfees.edit', 'Edit', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
@else
{{ link_to_route('checkupfees.create', 'Add', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
@endif
@else
{{ link_to_route('checkupfees.create', 'Add', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
@endif
@elseif($flag == 'test_fee')
{{ link_to_route('labtests.index', 'Select', ['id' => $appointment->id, 'flag' => 'test_fee'], ['class' => 'data_table_btn'])}}
@elseif($flag == 'pres_print')
{{ link_to_route('prescriptions.show', 'Select', ['id' => $appointment->id, 'flag' => 'print'], ['class' => 'data_table_btn'])}}
@elseif($flag == 'test_print')
{{ link_to_route('labtests.index', 'Select', ['id' => $appointment->id, 'flag' => 'print'], ['class' => 'data_table_btn'])}}
@elseif($flag == 'checkup_invoice')
{{ link_to_route('checkupfees.show', 'View', ['id' => $appointment->id, 'flag' => 'checkup_invoice'], ['class' => 'data_table_btn'])}}
@elseif($flag == 'test_invoice')
{{ link_to('test_invoice_print?id='.$appointment->id, 'Print', ['class' => 'data_table_btn'])}}
@elseif($flag == 'pdf_record')
{{ link_to('pdf?id='.$appointment->id, 'Save PDF', ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
@if($flag == 'pdf_record')
{{-- $appointments->appends(['id' => $patient->id])->links('partials.pagination') --}}
@else
{{-- $appointments->links('partials.pagination') --}}
@endif
</center>
@endsection