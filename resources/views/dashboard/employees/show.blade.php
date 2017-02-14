@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
<div class="tbl-cell">
	<h3>Employee information</h3>
	<ol class="breadcrumb breadcrumb-simple">
		<li><a href="#">Dashboard</a></li>
		<li><a href="{{ route('users.index')}}">Employees</a></li>
		<li class="active">employee info</li>
	</ol>
</div>
</div>
</div>
</header>
<table id="table-edit" class="table  table-hover">
<tbody>
<tr>
<td width="20">Employee Name:</td><td width="80">{{ $employee->user->names }}</td>
</tr>
<tr>
<td>Hospital Name:</td><td>{{ $employee->hospital->name }}</td>
</tr>
<tr>
<td>Country:</td><td>{{ $employee->country }}</td>
</tr>
<tr>
<td>Address:</td><td>{{ $employee->address }}</td>
</tr>
<tr>
<td>Branch:</td><td>{{ $employee->branch }}</td>
</tr>
<tr>
<td>Note:</td><td>{{ $employee->note }}</td>
</tr>
<tr>
<td>Status:</td><td>{{ $employee->status == 0 ?"enabled":"disabled" }}</td>
</tr>
</tbody>
</table>
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection