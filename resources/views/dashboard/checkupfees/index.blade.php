@extends('dashboard.theme')
@push('title')
    Manage Checkup Fee
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Checkup Fee
</div>
</div>
<center style="margin-top: 7%;">
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Checkup Fee</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@foreach($appointments as $appointment)
<tr>
<td>{{{ $appointment->checkupfee->checkup_fee }}}-/Rs</td>

<td>
{{ link_to_route('checkupfees.show', 'View', [$appointment->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

{{ link_to_route('checkupfees.edit', 'Edit', [$appointment->id], ['class' => 'data_table_btn'])}}
</td>
</tr>
@endforeach

</tbody>
</table>
{{ $appointments->appends(['id' => $patient->id])->links('partials.pagination') }}
</center>
@endsection

