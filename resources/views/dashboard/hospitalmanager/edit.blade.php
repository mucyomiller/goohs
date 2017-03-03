@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>Update Manager</h3>
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="{{route('manager.index')}}">Manager</a></li>
			<li class="active">Update</li>
		</ol>
	</div>
</div>
</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Manager Information</h5>
<form action="#" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="manager">Manager Name</label>
		<select name="manager" class="form-control" id="manager">
			<option value="{{ $manager->user->id}}">{{$manager->user->names}}</option>
			@foreach($users as $user)
			<option value="{{$user->id}}">{{$user->names}}</option>
			@endforeach
		</select>
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="hospital">Hospital Name</label>
		<select name="hospital" class="form-control" id="hospital">
			<option value="{{ $manager->hospital->id}}">{{$manager->hospital->name}}</option>
			@foreach($hospitals as $hospital)
			<option value="{{$hospital->id}}">{{$hospital->name}}</option>
			@endforeach
		</select>
	</fieldset>
</div>
<div class="col-lg-4">
		<fieldset class="form-group">
		<label class="form-label semibold" for="country">country</label>
		<select name="country" class="form-control" id="country">
			<option value="{{ $manager->country}}">{{$manager->country}}</option>
			<option value="rwanda">Rwanda</option>
			<option value="kenya">Kenya</option>
			<option value="uganda">Uganda</option>
			<option value="tanzania">Tanzania</option>
			<option value="burundi">Burundi</option>
		</select>
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-lg-6">
	<fieldset class="form-group">
		<label class="form-label semibold" for="address">Address</label>
		<input type="text" name="address" value="{{ $manager->address}}" class="form-control" id="address" placeholder="Enter Address">
	</fieldset>
</div>
<div class="col-lg-6">
	<fieldset class="form-group">
		<label class="form-label" for="branch">Branch</label>
		<input type="text" name="branch"  value="{{$manager->branch}}" class="form-control" id="branch" placeholder="Enter Branch">
	</fieldset>
</div>
<div class="col-xs-12">
	<label class="form-label" for="note">Note</label>
	<textarea name="note" rows="4" class="form-control" placeholder="Enter some Note">{{$manager->note}}</textarea>
</div>
<div class="col-xs-12">
<br>
<input type="checkbox" name="status"  value="{{ $manager->status}}" /> <span style="color:red;">Activate Manager</span>
</div>
</div><!--.row-->
<br>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="add Manager"/>
</form>
</div><!--.row-->
{{-- end --}}
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection