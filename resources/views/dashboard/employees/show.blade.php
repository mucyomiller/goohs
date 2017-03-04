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
<tr style="background-color: aqua;">
<td width="20"><b>Employee Role(Access level):</b></td><td width="80"><b>{{ $employee->user->roles->first()->display_name }}</b></td>
</tr>
<tr>
<td width="20"><b>Employee Name:</b></td><td width="80">{{ $employee->user->names }}</td>
</tr>
<tr>
<td><b>Hospital Name:</b></td><td>{{ $employee->hospital->name }}</td>
</tr>
<tr>
<td><b>Country:</b></td><td>{{ $employee->country }}</td>
</tr>
<tr>
<td><b>Address:</b></td><td>{{ $employee->address }}</td>
</tr>
<tr>
<td><b>Branch:</b></td><td>{{ $employee->branch }}</td>
</tr>
<tr>
<td><b>Note:</b></td><td>{{ $employee->note }}</td>
</tr>
<tr>
<td><b>Status:</b></td><td><b>{{ $employee->status == 0 ?"active":"disabled" }}</b></td>
</tr>
</tbody>
</table>
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection