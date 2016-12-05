@extends('dashboard.theme')
@push('title')
Manage Drug Usage
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Drug Usage
</div>
</div>
<center style="margin-top: 7%;">
@if(Auth::user()->role != 'Doctor') 
<center>{{ link_to_route('drugusages.create', 'Add Drug Usage', ['id' => $patient->id], ['class' => 'btn_1'])}}</center>
<br>
@endif
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Drug Name</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@if(($drugusages) != null)
@foreach($drugusages as $drugusage)
<tr>
<td>{{{ $drugusage->drug_name }}}</td>
<td>
{{ link_to_route('drugusages.show', 'View', [$drugusage->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@if(Auth::user()->role != 'Doctor') 
{{ link_to_route('drugusages.edit', 'Edit', [$drugusage->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
{{ $drugusages->appends(['id' => $patient->id])->links('partials.pagination') }}
</center>
@endsection

