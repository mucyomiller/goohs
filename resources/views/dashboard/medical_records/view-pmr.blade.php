@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
<div class="tbl-cell">
	<h3>Patient Record informations</h3>
	<ol class="breadcrumb breadcrumb-simple">
		<li><a href="#">Dashboard</a></li>
		<li><a href="#">Patients</a></li>
		<li class="active">records</li>
	</ol>
</div>
</div>
</div>
</header>
<table id="table-edit" class="table  table-hover">
<tbody>
<tr>
<td width="20">Patient ID:</td><td width="80"><b>{{ $record->patient->patientID }}</b></td>
</tr>
<tr>
<td width="20">Patient Name:</td><td width="80"><b>{{ $record->patient->user->names }}</b></td>
</tr>
<tr>
<td>Presenting Complant:</td><td>{{ $record->presenting_complant }}</td>
</tr>
<tr>
<td>History Presenting Complant:</td><td>{{ $record->history_presenting_complant }}</td>
</tr>
<tr>
<td>Past Medical History:</td><td>{{ $record->past_medical_history }}</td>
</tr>
<tr>
<td>Dietary Habits:</td><td>{{ $record->dietary_habits }}</td>
</tr>
<tr>
<td>Family Social History:</td><td>{{ $record->family_social_history }}</td>
</tr>
<tr>
<td>Gastrointestinal:</td><td>{{ $record->gastrointestinal }}</td>
</tr>
<tr>
<td>Genetourinary:</td><td>{{ $record->genetourinary }}</td>
</tr>
<tr>
<td>Respiratory:</td><td>{{ $record->respiratory }}</td>
</tr>
<tr>
<td>Liver:</td><td>{{ $record->liver }}</td>
</tr>
<tr>
<td>Liver:</td><td>{{ $record->liver }}</td>
</tr>
<tr>
<td>Locomotor:</td><td>{{ $record->locomotor }}</td>
</tr>
<tr>
<td>Cardiovascular:</td><td>{{ $record->cardiovascular }}</td>
</tr>
<tr>
<td>Kidneys:</td><td>{{ $record->kidneys }}</td>
</tr>
<tr>
<td>Other:</td><td>{{ $record->other }}</td>
</tr>
<tr>
<td>Scasp And Hair:</td><td>{{ $record->scasp_and_hair }}</td>
</tr>
<tr>
<td>Ears:</td><td>{{ $record->ears }}</td>
</tr>
<tr>
<td>Pulse Rate:</td><td>{{ $record->pulse_rate }}</td>
</tr>
<tr>
<td>Skin:</td><td>{{ $record->skin }}</td>
</tr>
<tr>
<td>Tms:</td><td>{{ $record->tms }}</td>
</tr>
<tr>
<td>Blood Pressure:</td><td>{{ $record->blood_pressure }}</td>
</tr>
<tr>
<td>Eyes:</td><td>{{ $record->eyes }}</td>
</tr>
<tr>
<td>Noses:</td><td>{{ $record->noses }}</td>
</tr>
<tr>
<td>Lips:</td><td>{{ $record->lips }}</td>
</tr>
<tr>
<td>Tongue:</td><td>{{ $record->tongue }}</td>
</tr>
<tr>
<td>Hard Tissues:</td><td>{{ $record->hard_tissues }}</td>
</tr>
<tr>
<td>Vestibule:</td><td>{{ $record->vestibule }}</td>
</tr>
<tr>
<td>Gingiva:</td><td>{{ $record->gingiva }}</td>
</tr>
<tr>
<td>Occlusion:</td><td>{{ $record->occlusion }}</td>
</tr>
<tr>
<td>Mucoza:</td><td>{{ $record->mucoza }}</td>
</tr>
<tr>
<td>Palate:</td><td>{{ $record->palate }}</td>
</tr>
<tr>
<td>Oral Hygiene:</td><td>{{ $record->oral_hygiene }}</td>
</tr>
<tr>
<td>Treatement Consent Agreement status:</td><td>{{ $record->agreement }}</td>
</tr>
</tbody>
</table>
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
