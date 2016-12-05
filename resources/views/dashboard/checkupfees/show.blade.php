@extends('dashboard.theme')
@push('title')
Checkup Fee Details
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Checkup Fee Details
</div>
</div>
<br><br><br>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="220">
<tr>
<td width="272" height="55"><label>Checkup Fee*</label> </td>
<td width="333"><label>{{{ $checkupfee->checkup_fee }}}-/Rs</label></td>
</tr>
<tr>
<td width="272"><label>Checkup Note</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $checkupfee->fee_note }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
<input type="submit" onclick="back()" value="Back" class="submit" />
&nbsp;&nbsp;&nbsp;&nbsp;
@if(isset($flag))
{{ link_to('checkup_invoice_print?id='.$checkupfee->id, 'Print', ['class' => 'btn_3'], $secure = null) }}
@endif
</section>
</center>
</div>
</center>
@endsection