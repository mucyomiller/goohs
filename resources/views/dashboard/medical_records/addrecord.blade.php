@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>New Record</h3>
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="{{route('backend.search_pmr')}}">Records</a></li>
			<li class="active">Add</li>
		</ol>
	</div>
</div>
</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Medical Record</h5>
<form action="{{ route('backend.add_pmr') }}" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="patient_id">Patient ID</label>
		<input type="hidden" name="patient_id" value="{{ $patient->id }}" />
		<input type="text" name="patientID" value="{{ $patient->patientID }}" disabled class="form-control" id="patient_id" placeholder="Patient ID">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="hospital_id">Hospital Name</label>
		<input type="hidden" name="hospital_id" value="{{$hospital->id}}" />
		<input type="text" name="hospital_name"  value="{{ $hospital->name }}" class="form-control" id="hospital_id" placeholder="First Name" disabled>
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="employee_id">Employee Name</label>
		<input type="hidden" name="employee_id" value="{{$employee->id}}" />
		<input type="text"  name="employee_name" value="{{ $employee->user->names}}" class="form-control" id="employee_id" placeholder="Employee Name" disabled>
	</fieldset>
</div>
</div><!--.row-->

<div class="row">
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="presenting_complant">Presenting Complant</label>
		<input type="text" name="presenting_complant" class="form-control" id="presenting_complant" placeholder="Enter Presenting Complant">
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label" for="exampleInputEmail1">History Presenting Complant</label>
		<input type="text" name="history_presenting_complant" class="form-control" id="history_presenting_complant" placeholder="Enter History Presenting Complant">
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label" for="past_medical_history">Past Medical History</label>
		<input  type="text" name="past_medical_history" class="form-control" id="past_medical_history" placeholder="Past Medical History">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-xs-12">
	<label class="form-label" for="dietary_habits">Dietary habits</label>
	<textarea name="dietary_habits" rows="4" class="form-control" placeholder="Enter Dietary habits"></textarea>
</div>
<div class="col-xs-12">
	<label class="form-label" for="dietary_habits">Famlily Social History</label>
	<textarea name="family_social_history" rows="4" class="form-control" placeholder="Famlily Social History
"></textarea>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="patient_id">Gastrointestinal</label>
		<input  type="text" name="gastrointestinal" class="form-control" id="gastrointestinal" placeholder="Enter Gastrointestinal">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="genetourinary">Genetourinary</label>
		<input type="text" name="genetourinary" class="form-control" id="genetourinary" placeholder="Enter Genetourinary" >
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="employee_id">Respiratory</label>
		<input type="text"  name="respiratory" class="form-control" id="respiratory" placeholder="Enter Respiratory">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="patient_id">Liver</label>
		<input  type="text" name="liver" class="form-control" id="liver" placeholder="Enter Level Infos">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="hospital_id">Locomotor</label>
		<input  type="text" name="locomotor" class="form-control" id="locomotor" placeholder="Enter Locomotor">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="cardiovascular">Cardiovascular</label>
		<input type="text"  name="cardiovascular" class="form-control" id="cardiovascular" placeholder="Enter Cardiovascular">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="patient_id">Kidneys</label>
		<input  type="text" name="kidneys" class="form-control" id="liver" placeholder="Enter kidneys ">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="hospital_id">Other</label>
		<input  type="text" name="other" class="form-control" id="other" placeholder="Enter other">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="scasp_and_hair'">scasp and hair</label>
		<input type="text"  name="scasp_and_hair'" class="form-control" id="scasp_and_hair'" placeholder="Enter Scasp and hair'">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="patient_id">Ears</label>
		<input name="ears" type="text" class="form-control" id="ears" placeholder="Enter ears info ">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="hospital_id">Pulse Rate</label>
		<input  type="text" name="pulse_rate"  class="form-control" id="other" placeholder="Enter Pulse Rate">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="skin">Skin</label>
		<input type="text"  name="skin" class="form-control" id="skin" placeholder="Enter skin info">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="tms">tms</label>
		<input name="tms" type="text" class="form-control" id="tms" placeholder="Enter tms info ">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="blood_pressure">Blood Pressure</label>
		<input  type="text" name="blood_pressure"  class="form-control" id="other" placeholder="Enter Blood Pressure">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="eyes">Eyes</label>
		<input type="text"  name="eyes" class="form-control" id="eyes" placeholder="Enter eyes info">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="noses">Noses</label>
		<input name="noses" type="text" class="form-control" id="tms" placeholder="Enter noses info ">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="lips">Lips</label>
		<input  type="text" name="lips"  class="form-control" id="lips" placeholder="Enter Lips info">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="tongue">Tongue</label>
		<input type="text"  name="tongue" class="form-control" id="tongue" placeholder="Enter tongue info">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="hard_tissues">Hard Tissues</label>
		<input name="hard_tissues" type="text" class="form-control" id="hard_tissues" placeholder="Enter Hard Tissues info ">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="vestibule">Vestibule</label>
		<input  type="text" name="vestibule"  class="form-control" id="vestibule" placeholder="Enter Vestibule info">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="gingiva">Gingiva</label>
		<input type="text"  name="gingiva" class="form-control" id="gingiva" placeholder="Enter gingiva info">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="occlusion">Occlusion</label>
		<input name="occlusion" type="text" class="form-control" id="occlusion" placeholder="Enter occlusion info ">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="mucoza">Mucoza</label>
		<input  type="text" name="mucoza"  class="form-control" id="mucoza" placeholder="Enter mucoza info">
	</fieldset>
</div>
<div class="col-md-4 col-sm-6">
	<fieldset class="form-group">
		<label class="form-label" for="palate">Palate</label>
		<input type="text"  name="palate" class="form-control" id="palate" placeholder="Enter palate info">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-12 col-sm-12">
	<fieldset class="form-group">
		<label class="form-label" for="oral_hygiene">Oral Hygiene</label>
		<input name="oral_hygiene" type="text" class="form-control" id="oral_hygiene" placeholder="Enter Oral Hygiene info ">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<span>
<input type="checkbox" name="agreement" /> <a href="#">Accept Terms And Conditions</a>
</span>
</div>
</div>
</div>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="save record"/>
</form>
</div><!--.row-->
{{-- end --}}
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection