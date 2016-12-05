@extends('dashboard.theme')
@push('title')
    Search PMR
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Search Patient Medical Record
</div>
</div>
<center style="margin-top: 7%;">

<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Patient Name</th>
<th>Patient ID</th>
<th>Age</th>
<th>Gender</th>
<th>Phone</th>
<th style="width: 25%">View Record</th>
</tr>
</thead>
<tbody>
@foreach($patients as $patient)
<tr>
<td>{{{ $patient->name }}}</td>
<td>{{{ $patient->patient_id }}}</td>
<td>{{{ $patient->age }}}</td>
<td>{{{ $patient->gender }}}</td>
<td>{{{ $patient->phone }}}</td>
<td>
{{ link_to_action('HomeController@showViewPMR', 'View', ['id' => $patient->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px']) }}
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $patients->links('partials.pagination') }}
</center>
@endsection

