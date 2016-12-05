<html>
<body onload="window.print()">
<img src='./images/logo_new1.jpg'/>
<center>
<h1><u> Checkup Fee Invoice </u></h1>
</center>
<table style='border-collapse: collapse; width: 70%; margin-left:auto; margin-right:auto' cellpadding='7' border='1'>

<tr>
<td height='20'><label>Patient Name:</label></td>
<td><label> {{ $patient->name }}</label></td>
</tr>
<tr>
<td height='20'><label>Patient ID:</label></td>
<td><label>{{ $patient->patient_id }}</label></td>
</tr>
<tr>
<td height='20'><label>Visit Date:</label></td>
<td><label> {{ $date }} </label></td>
</tr>
<tr>
<td height='20'><label>Visit Time:</label></td>
<td><label> {{ $time }}</label></td>
</tr>
<tr>
<td height='20'><label>Doctor Name:</label></td>
<td><label>{{ $doctor_name }}</label></td>
</tr>
<tr>
<td height='20'><label>Total Bill:</label></td>
<td><label> {{ $fee->checkup_fee }}-/Rs</label></td>
</tr>
<tr>
<td height='20'> <label>Note:</label></td>
<td><label> {{ $fee->fee_note }}</label></td>
</tr>
</table>
</body>
</html>