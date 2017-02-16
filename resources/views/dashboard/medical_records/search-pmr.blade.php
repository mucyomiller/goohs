@extends('dashboard.theme')
@push('styles')
<link rel="stylesheet" href="{{asset('dashboard/css/separate/vendor/pnotify.min.css')}}">
@endpush
@section('content')
<div class="page-content">
<div class="container-fluid">
<section class="card">
<header class="card-header card-header-lg">
Search Medical Records
</header>
<div class="card-block">
<p class="card-text">
<div class="row">
<form action="{{ route('backend.search_pmr') }}" method="post">
<div class="col-lg-6">
<fieldset class="form-group">
{{csrf_field()}}
<input type="text" name="patient_info" class="form-control {{ $errors->has('patient_info') ? 'form-control-error' : '' }}" id="patient_info" placeholder="Enter Patient ID" />
		@if ($errors->has('patient_info'))
		<span class="help-block">
		<strong>{{ $errors->first('patient_info') }}</strong>
		</span>
		@endif
<small class="text-muted">Never disclose this informations with anyone else.</small>
</fieldset>
</div>
<div class="col-lg-6">
<input type="submit"  name="search" class="btn btn-rounded  btn-primary-outline" value="search records"></input>
</div>
</form>
</div><!--.row-->
</p>
</div>
</section>
@if(!empty($patient))
<section class="card">
<header class="card-header card-header-lg">
Basic Information <a href="{{ route('backend.add_pmr',['patient_id'=>$patient->id])}} " class="btn btn-rounded  btn-success-outline pull-right">Add new Record</a>
</header>
<div class="card-block">
<p class="card-text">
<div class="row">
<table id="table-edit" class="table table-bordered table-hover">
<thead>
<tr>
<th width="1">#</th>
<th>Names</th>
<th>Patient ID</th>
<th>Birth Date</th>
<th>Fathername</th>
<th>Mothername</th>
<th>Province</th>
<th>District</th>
<th>Sector</th>
<th>Cell</th>
<th>Gender</th>
<th width="120">Created</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{ $patient->id }}</td>
<td>{{ $patient->user->names }}</td>
<td>{{ $patient->patientID}}</td>
<td>{{ $patient->dob }}</td>
<td>{{ $patient->fathername }}</td>
<td>{{ $patient->mothername }}</td>
<td>{{ $patient->district->province->province_name }}</td>
<td>{{ $patient->district->district_name }}</td>
<td>{{ $patient->sector->sector_name }}</td>
<td>{{ $patient->cell_id }}</td>
<td>{{ $patient->gender }}</td>
<td class="table-date">{{ $patient->created_at->diffForHumans() }}</td>
</tr>
</tbody>
</table>
</div>
</p>
</div>
</section>
@endif
{{-- records informations --}}
@if(!empty($records) && $records->count())
<section class="card">
<header class="card-header card-header-lg">
Records Informations <span class="label label-pill label-success">{{$records->count()}}</span>
</header>
<div class="card-block">
<p class="card-text">
<div class="row">
<table id="table-edit" class="table table-bordered table-hover">
<thead>
<tr>
<th width="1">#</th>
<th>Names</th>
<th>Hospital</th>
<th>Created By</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-user"></i>
</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-edit"></i>
</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-edit"></i>
</th>
<th width="120">Date Created</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($records as $record)
<tr>
<td>{{ $loop->index+1 }}</td>
<td>{{ $record->patient->user->names }}</td>
<td>{{ $record->hospital->name}}</td>
<td>{{$record->doctor->user->names}}</td>
<td><a href="{{ route('backend.view_pmr',['record'=>$record->id]) }}">view more</a></td>
<td><a href="{{ route('backend.pmr_treatment_plan',['record'=>$record->id]) }}">add treatment plan</a></td>
<td><a href="{{ route('backend.pmr_treatment_record_sheet',['record'=>$record->id]) }}">treatment record sheet</a></td>
<td class="table-date">{{ $record->created_at->diffForHumans()}}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</p>
</div>
</section>
@endif
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@push('scripts')
<script src="{{asset('dashboard/js/lib/pnotify/pnotify.js')}}"></script>
<script>
PNotify.prototype.options.styling = "bootstrap3";
</script>
@endpush

