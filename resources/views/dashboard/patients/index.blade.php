@extends('dashboard.theme')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
@endpush
@section('content')
<div class="page-content">
<div class="container-fluid">
<header class="section-header">
<div class="tbl">
<div class="tbl-row">
<div class="tbl-cell">
	<h3>Complete Your Patient Informations</h3>
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
<form  action="#" method="post">
{{ csrf_field() }}
<div class="form-group row">
<label for="inputPassword" class="col-sm-2 form-control-label">Fathername</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="fathername" placeholder="Enter Your Mothername">
</div>
</div>
<div class="form-group row">		
<label for="mothername" class="col-sm-2 form-control-label">Mothername</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="mothername" placeholder="Enter Your fathername">
</div>
</div>
<div class="form-group row">
	<label for="sex" class="col-sm-2 form-control-label">Sex</label>
	<div class="col-sm-2">
		<select id="sex" class="wide">
			<option data-display="Select"></option>
			<option value="female">female</option>
			<option value="male">male</option>
		</select>
	</div>
</div>
<div class="form-group row">		
<label for="dob" class="col-sm-2 form-control-label">Date of Birth</label>
<div class="col-sm-10">
	<input type="text" class="form-control" id="dob" placeholder="Enter Date of Birth">
</div>
</div>
<div class="form-group row">
	<label for="province" class="col-sm-2 form-control-label">Province/City</label>
	<div class="col-sm-3">
		<select id="province" class="wide">
			<option data-display="Select"></option>
			<option value="">Not Available now</option>
		</select>
	</div>
</div>
<div class="form-group row">
	<label for="district" class="col-sm-2 form-control-label">District</label>
	<div class="col-sm-3">
		<select id="district" class="wide">
			<option data-display="Select"></option>
			<option value="">Not Available now</option>
		</select>
	</div>
</div>
<div class="form-group row">
	<label for="sector" class="col-sm-2 form-control-label">Sector</label>
	<div class="col-sm-3">
		<select id="sector" class="wide">
			<option data-display="Select"></option>
			<option value="">Not Available now</option>
		</select>
	</div>
</div>
<div class="form-group row">
	<label for="cell" class="col-sm-2 form-control-label">Cell</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="cell" placeholder="Enter Cell name">
	</div>
</div>
	<input type="submit" class="btn btn-success"  value="submit" name="submit" />
</form>
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@push('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<script src="{{asset("dashboard/js/lib/select2/select2.full.min.js")}}"></script>
<script src="{{asset("dashboard/js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js")}}"></script>
<script>
$(document).ready(function() {
	//retrieve province data from internet with axios

	//initialize niceselect
	$(document).ready(function() {
  	$('select').niceSelect();
	});
	//initialize datetimepicker
	$("#dob").datetimepicker({
				format: 'DD/MM/YYYY'
    });
	$("input[name='demo1']").TouchSpin({
		min: 0,
		max: 100,
		step: 0.1,
		decimals: 2,
		boostat: 5,
		maxboostedstep: 10,
		postfix: '%'
	});
	$("input[name='demo2']").TouchSpin({
		min: -1000000000,
		max: 1000000000,
		stepinterval: 50,
		maxboostedstep: 10000000,
		prefix: '$'
	});
	$("input[name='demo_vertical']").TouchSpin({
		verticalbuttons: true
	});
	$("input[name='demo_vertical2']").TouchSpin({
		verticalbuttons: true,
		verticalupclass: 'glyphicon glyphicon-plus',
		verticaldownclass: 'glyphicon glyphicon-minus'
	});
	$("input[name='demo3']").TouchSpin();
	$("input[name='demo4']").TouchSpin({
		postfix: "a button",
		postfix_extraclass: "btn btn-default"
	});
	$("input[name='demo4_2']").TouchSpin({
		postfix: "a button",
		postfix_extraclass: "btn btn-default"
	});
	$("input[name='demo6']").TouchSpin({
		buttondown_class: "btn btn-default-outline",
		buttonup_class: "btn btn-default-outline"
	});
	$("input[name='demo5']").TouchSpin({
		prefix: "pre",
		postfix: "post"
	});
});
</script>
@endpush