@extends('dashboard.theme')
@section('title')
Medicine Detail
@stop
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Medicine Detail
</div>
</div>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="150">
<tr>
<td width="272" height="55"><label>Medicine Name:</label> </td>
<td width="333"><label>{{{ $medicine->name}}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Remaining Quantity:</label> </td>
<td width="333"><label>{{{ $medicine->quantity}}}</label></td>
</tr>
<tr>
<td width="272"><label>Description:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $medicine->description }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
{{ link_to_route('medicines.index', 'Back', null, ['class' => 'btn_3']) }}
</section>
</center>
</div>
</center>
@endsection