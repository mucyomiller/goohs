@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
<div class="tbl-cell">
	<h3>Your Patient Informations</h3>
	<ol class="breadcrumb breadcrumb-simple">
		<li><a href="#">Dashboard</a></li>
		<li><a href="#">Patient</a></li>
		<li class="active">Information</li>
	</ol>
</div>
</div>
</div>
</header>

<div class="box-typical box-typical-padding">
<h5 class="m-t-lg with-border">Complete Your Patient Information Form</h5>

<form>
<div class="form-group row">
<label class="col-sm-2 form-control-label">Text</label>
<div class="col-sm-10">
	<p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
</div>
</div>
<div class="form-group row">
<label for="inputPassword" class="col-sm-2 form-control-label">Password</label>
<div class="col-sm-10">
	<input type="password" class="form-control" id="inputPassword" placeholder="Password">
</div>
</div>
<div class="form-group row">
<label for="exampleSelect" class="col-sm-2 form-control-label">Select</label>
<div class="col-sm-10">
	<select id="exampleSelect" class="form-control">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
	</select>
</div>
</div>
<div class="form-group">
<button type="submit" class="btn btn-success form-control" />
</div>
</form>

<h5 class="m-t-lg with-border">Vertical Inputs</h5>

<div class="row">
<div class="col-lg-4">
<fieldset class="form-group">
	<label class="form-label semibold" for="exampleInput">First Name</label>
	<input type="text" class="form-control" id="exampleInput" placeholder="First Name">
	<small class="text-muted">We'll never share your email with anyone else.</small>
</fieldset>
</div>
<div class="col-lg-4">
<fieldset class="form-group">
	<label class="form-label" for="exampleInputEmail1">Email address</label>
	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="mail@mail.com">
</fieldset>
</div>
<div class="col-lg-4">
<fieldset class="form-group">
	<label class="form-label" for="exampleInputPassword1">Password</label>
	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</fieldset>
</div>
</div><!--.row-->
<div class="row">
<div class="col-md-4 col-sm-6">
<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon">$</div>
		<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
		<div class="input-group-addon">.00</div>
	</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon">http://example.com/users/</div>
		<input type="text" class="form-control">
	</div>
</div>
</div>
</div><!--.row-->

<div class="row">
<div class="col-md-4 col-sm-6">
<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</div>
		<input type="text" class="form-control" placeholder="Amount">
		<div class="input-group-addon">
			<span class="glyphicon glyphicon-text-color" aria-hidden="true"></span>
		</div>
	</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="form-group">
	<div class="input-group">
		<div class="input-group-addon">
			<span class="glyphicon glyphicon-earphone"></span>
		</div>
		<input type="text" class="form-control" placeholder="Amount">
	</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control">
		<div class="input-group-addon">
			<span class="glyphicon glyphicon-send"></span>
		</div>
	</div>
</div>
</div>
</div><!--.row-->
<div class="row">
<div class="col-xs-12">
<textarea rows="4" class="form-control" placeholder="Textarea"></textarea>
</div>
</div><!--.row-->
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@push('scripts')
<script src="js/lib/select2/select2.full.min.js"></script>
<script src="js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script>
$(document).ready(function() {
	$("input[name='demo1']").TouchSpin({
		min: 0,
		max: 100,
		step: 0.1,
		decimals: 2,
		boostat: 5,
		maxboostedstep: 10,
		postfix: '%'
	});
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo2']").TouchSpin({
		min: -1000000000,
		max: 1000000000,
		stepinterval: 50,
		maxboostedstep: 10000000,
		prefix: '$'
	});
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo_vertical']").TouchSpin({
		verticalbuttons: true
	});
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo_vertical2']").TouchSpin({
		verticalbuttons: true,
		verticalupclass: 'glyphicon glyphicon-plus',
		verticaldownclass: 'glyphicon glyphicon-minus'
	});
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo3']").TouchSpin();
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo4']").TouchSpin({
		postfix: "a button",
		postfix_extraclass: "btn btn-default"
	});
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo4_2']").TouchSpin({
		postfix: "a button",
		postfix_extraclass: "btn btn-default"
	});
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo6']").TouchSpin({
		buttondown_class: "btn btn-default-outline",
		buttonup_class: "btn btn-default-outline"
	});
});
</script>
<script>
$(document).ready(function(){
	$("input[name='demo5']").TouchSpin({
		prefix: "pre",
		postfix: "post"
	});
});
</script>
@endpush