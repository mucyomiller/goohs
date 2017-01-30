@extends('dashboard.theme')
@push('title')
    Manage Patients
@endpush

@push('styles')
<style>
.form__daterange {
    font-size: 16px;
    padding: 8px;
    width: 20em;
}
.ui-datepicker-range > .ui-state-default {
    background: lightsalmon;
}
</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
        $("#cnic").mask("99999-9999999-9");
        $("#phone").mask("(9999) 999-9999999");
    } );

    function back () {
        window.history.back();
    }

    function getAge(){
        var dob = new Date($('#dob').val());
        var today = new Date();
        var age = today.getFullYear() - dob.getFullYear();
        $('#age').val(age);
    }
</script>
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Patients
</div>
</div>
<center style="margin-top: 7%;">
<center>{{ link_to_route('patients.create', 'Register Patient', '', ['class' => 'btn_1'])}}</center>
<br>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Patient Name</th>
<th>Patient ID</th>
<th>Age</th>
<th>Gender</th>
<th>Phone</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@foreach($patients as $patient)
<tr>
<td>{{{ $patient->name }}}</td>
<td>{{{ $patient->patient_id }}}</td>
<td>{{{ $patient->age }}} - Years</td>
<td>{{{ $patient->gender }}}</td>
<td>{{{ $patient->phone }}}</td>
<td>
{{ link_to_route('patients.show', 'View', [$patient->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
{{ link_to_route('patients.edit', 'Edit', [$patient->id], ['class' => 'data_table_btn'])}}
</td>
</tr>
@endforeach
</tbody>
</table>
{{--pagination goes here--}}
</center>
@endsection