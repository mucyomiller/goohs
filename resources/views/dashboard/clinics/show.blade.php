@extends('dashboard.theme')
@push('title')
Clinic Details
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Clinic Details
</div>
</div>
<br><br><br>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">
<tr>
<td width="272" height="55"><label>Clinic Name:</label> </td>
<td width="333"><label>{{{ $clinic->name }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Clinic Address:</label> </td>
<td width="333"><label>{{{ $clinic->address }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Admin Name:</label> </td>
<td width="333"><label>{{{ $admin->name }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>     Email:</label></td>
<td width="333"><label>{{{ $admin->email }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Gender:</label></td>
<td width="333"><label>{{{ $admin->gender }}}</label> </td>
</tr>
<tr>
<td width="272" height="55"><label>      Age:</label></td>
<td width="333"><label>{{{ $admin->age }}}</label></td>
</tr><tr>
<td width="272" height="55"><label>     Admin City:</label></td>
<td width="333"><label>{{{ $admin->city }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>     Admin Country:</label></td>
<td width="333"><label>{{{ $admin->country }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>     Admin Address:</label></td>
<td width="333"><label>{{{ $admin->address }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Phone:</label></td>
<td width="333"><label>{{{ $admin->phone }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      CNIC:</label></td>
<td width="333"><label>{{{ $admin->cnic }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label> Role:</label></td>
<td width="333"><label>{{{ $admin->role }}}</label></td></tr>
<tr>
<td width="272" height="55"><label> Branch Name:</label></td>
<td width="333"><label>{{{ $admin->branch }}}</label></td></tr>
<tr>
<td width="272" height="55"><label> Status:</label></td>
<td width="333"><label>{{{ $admin->status }}}</label></td>
</tr>
<tr>
<td width="272"><label>Additional Info:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $admin->note }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
{{ link_to_route('clinics.index', 'Back', '', ['class' => 'btn_3']) }}
</section>
</center>
</div>
</center>
@endsection