@extends('dashboard.theme')
@push('title')
    Manage Family History
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Family History
</div>
</div>
<center style="margin-top: 7%;">
@if(Auth::user()->role != 'Doctor') 
<center>{{ link_to_route('familyhistories.create', 'Create Family History', ['id' => $patient->id], ['class' => 'btn_1'])}}</center>
<br>
@endif
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Member Name</th>
<th>Relation</th>
<th>Age</th>
<th>Gender</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@if(($familyhistories) != null)
@foreach($familyhistories as $familyhistory)
<tr>
<td>{{{ $familyhistory->f_member_name }}}</td>
<td>{{{ $familyhistory->patient_relation }}}</td>
<td>{{{ $familyhistory->age }}}</td>
<td>{{{ $familyhistory->gender }}}</td>
<td>
{{ link_to_route('familyhistories.show', 'View', [$familyhistory->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@if(Auth::user()->role != 'Doctor') 
{{ link_to_route('familyhistories.edit', 'Edit', [$familyhistory->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
{{ $familyhistories->appends(['id' => $patient->id])->links('partials.pagination') }}
</center>
@endsection

