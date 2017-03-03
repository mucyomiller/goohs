@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>Edit Hospital</h3>(<b>{{ $hospital->name}}</b>)
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="{{route('hospitals.index')}}">Hospital</a></li>
			<li class="active">Edit</li>
		</ol>
	</div>
</div>
</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Hospital Information</h5>
<form action="{{ route('hospitals.store') }}" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="hospital_name">Hospital Name</label>
		<input type="text" name="name" class="form-control" id="hospital_name" value="{{ $hospital->name }}">
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="location">Hospital Location</label>
		<select name="location" class="form-control" id="location">
			<option value="{{ $hospital->location }}">{{ $hospital->location }}</option>
			@foreach($districts as $district)
			<option value="{{$district->district_name}}">{{$district->district_name}}</option>
			@endforeach
		</select>
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="quota">Hospital Quota/day</label>
		<input  type="text" name="quota" class="form-control" id="quota" value="{{ $hospital->quota_per_day}}">
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<span>
<input type="checkbox" name="activate" value="{{ $hospital->actiis_activated }}"/> <span style="color:green">Activate Hospital</span>
</span>
</div>
</div>
</div>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="Update Hospital"/>
</form>
</div><!--.row-->
{{-- end --}}
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection