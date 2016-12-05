@extends('dashboard.theme')
@push('title')
    Manage Allergy
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Allergy
</div>
</div>
<center style="margin-top: 7%;">
@if(Auth::user()->role != 'Doctor')    
<center>{{ link_to_route('allergies.create', 'Add New Allergy', ['id' => $patient->id], ['class' => 'btn_1'])}}</center>
<br>
@endif
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Allergy Name</th>
<th>Allergy Note</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@if(($allergies) != null)
@foreach($allergies as $allergy)
<tr>
<td>{{{ $allergy->allergy_name }}}</td>
<td>{{{ substr($allergy->allergy_note, 0, 50) }}}</td>
<td>
{{ link_to_route('allergies.show', 'View', [$allergy->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@if(Auth::user()->role != 'Doctor') 
{{ link_to_route('allergies.edit', 'Edit', [$allergy->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
{{ $allergies->appends(array('id' => $patient->id))->links('partials.pagination') }}
</center>
@endsection

