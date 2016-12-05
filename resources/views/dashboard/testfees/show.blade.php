@extends('dashboard.theme')
@push('title')
Test Fee Details
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Test Fee Details
</div>
</div>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="220">
<tr>
<td width="272" height="55"><label>Test Fee*</label> </td>
<td width="333"><label>{{{ $testfee->test_fee }}}</label></td>
</tr>
<tr>
<td width="272"><label>Fee Note*</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $testfee->fee_note }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
<input type="submit" onclick="back()" value="Back" class="submit" />
</section>
</center>
</div>
</center>
@endsection