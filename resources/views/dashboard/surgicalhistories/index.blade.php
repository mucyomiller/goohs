@extends('dashboard.theme')
@push('title')
    Manage Surgical History
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Surgical History
</div>
</div>
<center style="margin-top: 7%;">
@if(Auth::user()->role != 'Doctor') 
<center>{{ link_to_route('surgicalhistories.create', 'Create Surgical History', ['id' => $patient->id], ['class' => 'btn_1'])}}</center>
<br>
@endif
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Surgery Name</th>
<th>Surgery date</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@if(($surgicalhistories) != null)
@foreach($surgicalhistories as $surgicalhistory)
<tr>
<td>{{{ $surgicalhistory->surgery_name }}}</td>
<td>{{{ date('j F, Y', strtotime($surgicalhistory->surgery_date)) }}}</td>
<td>
{{ link_to_route('surgicalhistories.show', 'View', [$surgicalhistory->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@if(Auth::user()->role != 'Doctor') 
{{ link_to_route('surgicalhistories.edit', 'Edit', [$surgicalhistory->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
{{ $surgicalhistories->appends(['id' => $patient->id])->links('partials.pagination') }}
</center>
@endsection

