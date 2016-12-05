@extends('dashboard.theme')
@push('title')
Surgical History Details
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Surgical History Details
</div>
</div>
<br><br><br>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="320">
<tr>
<td width="272" height="55"><label>Surgery Name:</label> </td>
<td width="333"><label>{{{ $surgicalhistory->surgery_name }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label> Surgery Date:</label></td>
<td width="333"><label>{{{ date('j F, Y', strtotime($surgicalhistory->surgery_date)) }}}</label></td>
</tr>
<tr>
<td width="272"><label>Additional Info:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $surgicalhistory->surgery_notes }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
{{ link_to_route('surgicalhistories.index', 'Back', ['id' => $surgicalhistory->patient_id], ['class' => 'btn_3']) }}
</section>
</center>
</div>
</center>
@endsection