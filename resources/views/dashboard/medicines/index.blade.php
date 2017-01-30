@extends('dashboard.theme')
@push('title')
    Medicines
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Medicines
</div>
</div>
<center style="margin-top: 7%;">
@if(Auth::user()->role != 'Doctor') 
<center>{{ link_to_route('medicines.create', 'Add Medicine', null, ['class' => 'btn_1'])}}</center>
<br>
@endif
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Medicine Name</th>
<th style="width: 20%">Quantity</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@foreach($medicines as $medicine)
<tr>
<td>{{{ $medicine->name }}}</td>
<td>{{{ $medicine->quantity }}}</td>
<td>
{{ link_to_route('medicines.show', 'View', [$medicine->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@if(Auth::user()->role != 'Doctor') 
{{ link_to_route('medicines.edit', 'Edit', [$medicine->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
{{-- $medicines->links('partials.pagination') --}}
</center>
@endsection

