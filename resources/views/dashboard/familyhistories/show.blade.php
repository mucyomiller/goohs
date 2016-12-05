@extends('dashboard.theme')
@section('title')
Family History Details
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Family History Details
</div>
</div>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="420">
<tr>
<td width="272" height="55"><label>Family Member Name:</label> </td>
<td width="333"><label>{{{ $familyhistory->f_member_name}}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Relation With Patient:</label></td>
<td width="333"><label>{{{ $familyhistory->patient_relation }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Gender:</label></td>
<td width="333"><label>{{{ $familyhistory->gender }}}</label> </td>
</tr>
<tr>
<td width="272" height="55"><label>Age:</label></td>
<td width="333"><label>{{{ $familyhistory->age }}}</label></td>
</tr>
<tr>
<td width="272"><label>Disease Notes:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $familyhistory->diesease_note }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
{{ link_to_route('familyhistories.index', 'Back', ['id' => $familyhistory->patient_id], ['class' => 'btn_3']) }}
</section>
</center>
</div>
</center>
@endsection