@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
	<div class="tbl-cell">
		<h3>New Employee</h3>
		<ol class="breadcrumb breadcrumb-simple">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Manager</a></li>
			<li class="active">Add</li>
		</ol>
	</div>
</div>
</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Employee Information</h5>
<form action="{{ route('users.store') }}" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="manager">User Name</label>
		<select name="user" class="form-control" id="manager">
			<option>Select User</option>
			@foreach($users as $user)
			<option value="{{$user->id}}">{{$user->names}}</option>
			@endforeach
		</select>
	</fieldset>
</div>
<div class="col-lg-4">
	<fieldset class="form-group">
		<label class="form-label semibold" for="hospital">Hospital Name</label>
		<input type="hidden" value="{{$hospital->id}}" name="hospital">
		<input type="text" disabled="true" value="{{$hospital->name}}" class="form-control" id="hospital">
	</fieldset>
</div>
<div class="col-lg-4">
		<fieldset class="form-group">
		<label class="form-label semibold" for="country">country</label>
		<select name="country" class="form-control" id="country">
			<option>Select Country</option>
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
<div class="col-lg-12">
	<fieldset class="form-group">
		<label class="form-label semibold" for="manager">Role in Hospital</label>
		<select name="role" class="form-control" id="manager">
			<option>Select Role</option>
			@foreach($roles as $role)
			<option value="{{$role}}">{{$role}}</option>
			@endforeach
		</select>
	</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-lg-6">
	<fieldset class="form-group">
		<label class="form-label semibold" for="address">Address</label>
		<input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
	</fieldset>
</div>
<div class="col-lg-6">
	<fieldset class="form-group">
		<label class="form-label" for="branch">Branch</label>
		<input type="text" name="branch" class="form-control" id="branch" placeholder="Enter Branch">
	</fieldset>
</div>
<div class="col-xs-12">
	<label class="form-label" for="note">Note</label>
	<textarea name="note" rows="4" class="form-control" placeholder="Enter some Note"></textarea>
</div>
<div class="col-xs-12">
<br>
<input type="checkbox" name="status"  value="1" /> <span style="color:red;">Activate Manager</span>
</div>
</div><!--.row-->
<br>
<input type="submit"  name="save" class="btn btn-rounded  btn-primary-outline" value="add new Employee"/>
</form>
</div><!--.row-->
{{-- end --}}
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection