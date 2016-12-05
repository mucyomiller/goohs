@extends('dashboard.theme')
@section('title')
Lab Test Details
@stop
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Lab Test Details
</div>
</div>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">
<tr>
<td width="272" height="55"><label>Patient Name:</label> </td>
<td width="333"><label>{{{ $labtest->patient->name}}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Test Name:</label></td>
<td width="333"><label>{{{ $labtest->test_name }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label> Test Fee:</label></td>
<td width="333"><label>{{{ $labtest->total_fee}}} -/Rs</label> </td>
</tr>
<tr>
<td width="272"><label>Test Results:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $labtest->test_results }}}</div></label></td>
</tr>
<tr>
<td width="272"><label>Description:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $labtest->test_description }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
<input type="submit" onclick="back()" value="Back" class="submit" />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
@if(isset($flag) && $flag == 'print')
{{ link_to('test_print?id='.$labtest->id, 'Print', ['class' => 'btn_3'], $secure = null) }}
@else
{{ link_to('print_test?id='.$labtest->id, 'Save PDF', ['class' => 'btn_3'], $secure = null) }}
@endif
</section>
</center>
</div>
</center>
@endsection