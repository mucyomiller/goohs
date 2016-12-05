@extends('dashboard.theme')
@push('title')
Manage Employees
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Employees
</div>
</div>
<center style="margin-top: 7%;">
<center>{{ link_to_route('employees.create', 'Register Employee', '', ['class' => 'btn_1'])}}</center>
<br>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%"> Name</th>
<th>Username</th>
<th>Gender</th>
<th>Role</th>
<th style="width: 20%">Branch</th>
<th>Status</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>


@foreach($employees as $employee)
<tr>
<td>{{{ $employee->name }}}</td>
<td>{{{ $employee->email }}}</td>
<td>{{{ $employee->gender }}}</td>
<td>{{{ $employee->role }}}</td>
<td>{{{ $employee->branch }}}</td>
<td>{{{ $employee->status }}}</td>
<td>
{{ link_to_route('employees.show', 'View', [$employee->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@if($employee->role != 'Administrator' && $employee->role != 'Super User')
{{ link_to_route('employees.edit', 'Edit', [$employee->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $employees->links('partials.pagination') }}
</center>
@endsection

