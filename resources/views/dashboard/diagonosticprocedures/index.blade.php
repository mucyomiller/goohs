@extends('dashboard.theme')
@push('title')
Manage Diagonostic Procedure
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Diagonostic Procedure
</div>
</div>
<center style="margin-top: 7%;">
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Diagonostic Procedure</th>
<th style="width: 10%">Manage</th>
</tr>
</thead>
<tbody>
@foreach($appointments as $appointment)
<tr>
<td> {{ substr($appointment->diagonosticprocedure->procedure_note, 0, 40) . '...' }} </td>
<td>
{{ link_to_route('diagonosticprocedures.show', 'View', [$appointment->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
{{ link_to_route('diagonosticprocedures.edit', 'Edit', [$appointment->id], ['class' => 'data_table_btn'])}}
</td>
</tr>
@endforeach
</tbody>
</table>
</center>
@endsection

