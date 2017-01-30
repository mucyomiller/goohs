@extends('dashboard.theme')
@push('title')
    Manage Clinics
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Clinics
</div>
</div>
<center style="margin-top: 7%;">
<center>{{ link_to_route('clinics.create', 'Register Clinic', '', ['class' => 'btn_1'])}}</center>
<br/>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th>Clinic Name</th>
<th>Address</th>
<th style="width: 30%">Action</th>
</tr>
</thead>
<tbody>
@foreach($clinics as $clinic)
<tr>
<td> {{$clinic->name}} </td>
<td>{{ $clinic->address }}</td>
<td>
{{ link_to_route('clinics.show', 'View', [$clinic->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
{{ link_to_route('clinics.edit', 'Edit', [$clinic->id], ['class' => 'data_table_btn'])}}
{{ Form::model($clinic, ['route' => ['clinics.destroy', $clinic->id], 'method' => 'delete', 'style' => 'display: inline'] )}}
{{ Form::button('Delete', ['type' => 'submit', 'class' => 'data_table_submit_btn']) }}
{{Form::close()}}
</td>
</tr>
@endforeach
</tbody>
</table>
</center>
@endsection
