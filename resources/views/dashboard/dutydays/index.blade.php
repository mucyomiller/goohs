@extends('dashboard.theme')
@push('title')
    Doctors' Schedules
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Doctors' Schedules
</div>
</div>
<center style="margin-top: 7%;">
<center>{{ link_to_route('dutydays.create', 'Create Schedule', '', ['class' => 'btn_1'])}}</center>
<br>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Doctor Name</th>
<th style="width: 25%">Action</th>
</tr>
</thead>
<tbody>
@if(isset($dutydays))
@foreach($dutydays as $dutyday)
<tr>
<td>{{{ $dutyday->employee->name}}}</td>
<td>
{{ link_to_route('dutydays.show', 'View', [$dutyday->employee->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
{{ link_to_route('dutydays.edit', 'Edit', [$dutyday->employee->id], ['class' => 'data_table_btn'])}}
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
{{--pagination here--}}
</center>
@endsection