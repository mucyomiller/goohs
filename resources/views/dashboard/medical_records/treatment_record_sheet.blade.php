@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>Treatment Record Sheet</h3>(PatientID: {{$record->patient->patientID}} &nbsp;&nbsp; Patient Name: {{ $record->patient->user->names}}) <br>
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Record sheet</a></li>
			<li class="active">Add</li>
		</ol>
	</div>
</div>
</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Patient Record No# {{ $record->id }}</h5>
<form action="{{ route('backend.pmr_treatment_record_sheet') }}" method="post">
{{csrf_field()}}
<input type="hidden" name="record_id" value="{{ $record->id}}" />
<div class="row">
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="procedure_code">Procedure Code</label>
		<input type="text" name="procedure_code" class="form-control" id="procedure_code" placeholder="Enter Procedure Code">
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label" for="tooths_no">Tooths No</label>
		<input type="text" name="tooths_no" class="form-control" id="tooths_no" placeholder="Enter Teeth No">
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label" for="sextant_no">Sextant No</label>
		<input  type="text" name="sextant_no" class="form-control" id="sextant_no" placeholder="Sextant No">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-xs-12">
	<label class="form-label" for="treatments_plan">Write Treatment Notes</label>
	<textarea name="treatment_notes" rows="4" class="form-control " placeholder="Enter Treatment Notes here"></textarea>
</div>
</div><!--.row-->
<div class="row">
<div class="col-xs-12">
<fieldset class="form-group">
		<label class="form-label" for="treatments_id">Treatment Id</label>
		<input  type="text" name="treatments_id" class="form-control" id="treatments_id" placeholder="Treatments Id">
</fieldset>
</div>
</div><!--.row-->
<br>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="add record to sheet"/>
</form>
</div><!--.row-->

@if(!empty($treatment_record_sheets) && $treatment_record_sheets->count() > 0)
<section class="card">
<header class="card-header card-header-lg">
Treatment Plans for current record no# {{ $record->id }}
</header>
<div class="card-block">
<p class="card-text">
<div class="row">
<table id="table-edit" class="table table-bordered table-hover">
<thead>
<tr>
<th width="1">#</th>
<th>Treatment Code</th>
<th>Treeth No</th>
<th>Sextant No</th>
<th>Treatment Notes</th>
<th>Treatment Id</th>
<th>Updated</th>
<th width="120">Added</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-pen"></i>
</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-trash"></i>
</th>
</tr>
</thead>
<tbody>
@foreach($treatment_record_sheets as $treatment_record_sheet)
<tr>
<td>{{ $treatment_record_sheet->id }}</td>
<td>{{ $treatment_record_sheet->procedure_code }}</td>
<td>{{ $treatment_record_sheet->tooths_no }}</td>
<td>{{ $treatment_record_sheet->sextant_no }}</td>
<td>{{ $treatment_record_sheet->treatment_notes }}</td>
<td>{{ $treatment_record_sheet->treatments_id }}</td>
<td class="table-date">{{ $treatment_record_sheet->updated_at->diffForHumans() }}</td>
<td class="table-date">{{ $treatment_record_sheet->created_at->diffForHumans() }}</td>
<td><a href="#">edit</a></td>
<td><a href="delete?treatment_record_sheet=true&id={{$treatment_record_sheet->id}}">remove</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</p>
</div>
</section>
@endif
{{-- end --}}
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection