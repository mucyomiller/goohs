<html>
<body onload="window.print()">
<img src='./images/logo_new1.jpg'/>
<center>
<h1><u> Lab Test Report </u></h1>
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
<td><label>{{ $date }}</label></td>
</tr>
<tr>
<td height='20'><label>Visit Time:</label></td>
<td><label>{{ $time }}</label></td>
</tr>
<tr>
<td height='20'><label>Doctor Name:</label></td>
<td><label>{{ $doctor_name }}</label></td>
</tr>
<tr>
<td height='20'><label>Test Name:</label></td>
<td><label>{{ $test->test_name }}</label></td>
</tr>
<tr>
<td height='20'><label>Description:</label></td>
<td><label>{{ $test->test_description }}</label></td>
</tr>
<tr>
<td height='20'> <label>Test Results:</label></td>
<td><label>{{ $test->test_results }}</label></td>
</tr>
</table>
</body>
</html>