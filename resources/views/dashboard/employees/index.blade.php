@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
<div class="tbl-cell">
	<h3>Manage Employees</h3>
	<ol class="breadcrumb breadcrumb-simple">
		<li><a href="#">Dashboard</a></li>
		<li><a href="#">Employees</a></li>
		<li class="active">all employee</li>
	</ol>
</div>
</div>
</div>
</header>
<div class="box-typical box-typical-padding">
<h3 class="m-t-lg with-border"><span class="label label-success">{{Auth::user()->employee->hospital->name}}</span> employees <a href="{{ route('users.create')}} " class="btn btn-rounded  btn-success-outline pull-right">Add new Employee</a></h3>
<table id="table-edit" class="table table-bordered table-hover">
<thead>
<tr>
<th width="1">
#
</th>
<th>Names</th>
<th>Hospital</th>
<th>Country</th>
<th>Address</th>
<th>Branch</th>
<th>Note</th>
<th>Status</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-user"></i>
</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-edit"></i>
</th>
<th width="120">Date Created</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($employees as $employee)
<tr>
<td>{{ $loop->index+1 }}</td>
<td>{{ $employee->user->names }}</td>
<td>{{ $employee->hospital->name}}</td>
<td>{{$employee->country}}</td>
<td>{{$employee->address}}</td>
<td>{{$employee->branch}}</td>
<td>{{$employee->note}}</td>
<td>{{$employee->status}}</td>
<td>{{ link_to_route('users.show', 'View', [$employee->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}</td>
<td>{{ link_to_route('users.edit', 'Edit', [$employee->id], ['class' => 'data_table_btn'])}}</td>
<td class="table-date">{{ $employee->created_at->diffForHumans()}}</td>
</tr>
@endforeach
</tbody>
</table>
</div><!-- .box typical -->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection