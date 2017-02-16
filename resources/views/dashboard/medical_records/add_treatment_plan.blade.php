@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>New Treatment Plan</h3>(PatientID: {{$record->patient->patientID}}) <br>
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Record</a></li>
			<li class="active">Add</li>
		</ol>
	</div>
</div>
</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Patient Record No# {{ $record->id }}</h5>
<form action="{{ route('backend.pmr_treatment_plan') }}" method="post">
{{csrf_field()}}
<input type="hidden" name="record_id" value="{{ $record->id}}" />
<div class="row">
<div class="col-xs-12">
	<label class="form-label" for="treatments_plan">Write Down Treatment plan</label>
	<textarea name="treatments_plan" rows="4" class="form-control" placeholder="Enter Treatment plan here"></textarea>
</div>
</div><!--.row-->
<br>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="add this plan"/>
</form>
</div><!--.row-->
{{-- end --}}
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection