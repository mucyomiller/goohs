<html>
<body onload="window.print()">
<img src='./images/logo_new1.jpg'/>
<center>
<h1><u> Test Fee Invoice </u></h1>
</center>
<table style='text-align: left; border-collapse: collapse; width: 70%; margin-left:auto; margin-right:auto' cellpadding='7' border='1'>
<tr>
<th colspan="2">Details</th>
<th>Charges</th>
</tr>
<tr>
<th height='20'><label>Patient Name:</label></th>
<td><label> {{ $patient->name }}</label></td>
<td></td>
</tr>
<tr>
<th height='20'><label>Patient ID:</label></th>
<td><label>{{ $patient->patient_id }}</label></td>
<td></td>
</tr>
<tr>
<th height='20'><label>Visit Date:</label></th>
<td><label> {{ $date }} </label></td>
<td></td>
</tr>
<tr>
<th height='20'><label>Visit Time:</label></th>
<td><label> {{ $time }}</label></td>
<td></td>
</tr>
<tr>
<th height='20'><label>Doctor Name:</label></th>
<td><label>{{ $doctor_name }}</label></td>
<td></td>
</tr>
@foreach($tests as $test)
<tr>
<th height='20'><label>Test Detail:</label></th>
<td><label> {{ $test->test_name }}</label></td>
<td><label> {{ $test->total_fee }}-/Rs</label></td>
</tr>

@endforeach
<tr>
<th height='20' colspan="2"> <label>Total Bill:</label></th>
<th><label> {{ $sum }}-/Rs</label></th>
</tr>
</table>
</body>
</html>