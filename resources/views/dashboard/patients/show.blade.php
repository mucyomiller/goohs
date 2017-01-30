@extends('dashboard.theme')
@push('title')
Patient Details
@endpush
@push('styles')
<style>
.form__daterange {
    font-size: 16px;
    padding: 8px;
    width: 20em;
}
.ui-datepicker-range > .ui-state-default {
    background: lightsalmon;
}
</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
        $("#cnic").mask("99999-9999999-9");
        $("#phone").mask("(9999) 999-9999999");
    } );

    function back () {
        window.history.back();
    }

    function getAge(){
        var dob = new Date($('#dob').val());
        var today = new Date();
        var age = today.getFullYear() - dob.getFullYear();
        $('#age').val(age);
    }
</script>
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Patient Details
</div>
</div>
@endpush
@section('content')
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">
<tr>
<td width="272" height="55"><label>Patient Name:</label> </td>
<td width="333"><label>{{{ $patient->name }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>Patient ID:</label> </td>
<td width="333"><label>{{{ $patient->patient_id }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>     Date of Birth:</label></td>
<td width="333"><label>{{{ date('j F, Y', strtotime($patient->dob)) }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Gender:</label></td>
<td width="333"><label>{{{ $patient->gender }}}</label> </td>
</tr>
<tr>
<td width="272" height="55"><label>      Age:</label></td>
<td width="333"><label>{{{ $patient->age }}} - Years</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Email:</label></td>
<td width="333"><label>{{{ $patient->email }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      City:</label></td>
<td width="333"><label>{{{ $patient->city }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Country:</label></td>
<td width="333"><label>{{{ $patient->country }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Address:</label></td>
<td width="333"><label>{{{ $patient->address }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      Phone:</label></td>
<td width="333"><label>{{{ $patient->phone }}}</label></td>
</tr>
<tr>
<td width="272" height="55"><label>      CNIC:</label></td>
<td width="333"><label>{{{ $patient->cnic }}}</label></td>
</tr>
<tr>
<td width="272"><label>Additional Info:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $patient->note }}}</div></label></td>
</tr>
</table>
<center>
<section style="margin-bottom: 10%">
<input type="submit" onclick="back()" value="Back" class="submit" />
</section>
</center>
</div>
</center>
<br><br>
@endsection