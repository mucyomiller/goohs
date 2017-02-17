@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>New Treatment Plan</h3>(PatientID: {{$record->patient->patientID}} &nbsp;&nbsp; Patient Name: {{ $record->patient->user->names}}) <br>
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
	<textarea name="treatments_plan" rows="4" class="form-control " placeholder="Enter Treatment plan here"></textarea>
</div>
</div><!--.row-->
<br>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="add this plan"/>
</form>
</div><!--.row-->

@if(!empty($treatments_plans) && $treatments_plans->count() > 0)
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
<th>Treatments</th>
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
@foreach($treatments_plans as $treatment_plan)
<tr>
<td>{{ $treatment_plan->id }}</td>
<td>{{ $treatment_plan->treatments_plan }}</td>
<td class="table-date">{{ $treatment_plan->updated_at->diffForHumans() }}</td>
<td class="table-date">{{ $treatment_plan->created_at->diffForHumans() }}</td>
<td><a href="#">edit</a></td>
<td><a href="delete?treatment_plan=true&id={{$treatment_plan->id}}">remove</a></td>
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