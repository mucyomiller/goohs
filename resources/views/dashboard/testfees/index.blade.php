@extends('dashboard.theme')
@push('title')
    Manage Test Fee
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Manage Test Fee
</div>
</div>
<center style="margin-top: 7%;">
<center>{{ link_to_route('testfees.create', 'Create Test Fee', '', ['class' => 'btn_1'])}}</center>
<br>
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th style="width: 20%">Test Fee</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@foreach($testfees as $testfee)
<tr>
<td>{{{ $testfee->test_fee }}}</td>
<td>
{{ link_to_route('testfees.show', 'View', [$testfee->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
{{ link_to_route('testfees.edit', 'Edit', [$testfee->id], ['class' => 'data_table_btn'])}}
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $testfees->links('partials.pagination') }}
</center>
@endsection