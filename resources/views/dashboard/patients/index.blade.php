@extends('dashboard.theme')
@push('styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" /> --}}
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
<form  action="{{route('patients.store')}}" method="post" id="app">
{{ csrf_field() }}
<div class="form-group row">
<label for="inputPassword" class="col-sm-2 form-control-label">Fathername</label>
<div class="col-sm-10">
<input name="fathername" type="text" class="form-control {{ $errors->has('fathername') ? 'form-control-error' : '' }}" id="fathername" placeholder="Enter Your Fathername">
	@if ($errors->has('fathername'))
	<span class="help-block">
	<strong>{{ $errors->first('fathername') }}</strong>
	</span>
	@endif
</div>
</div>
<div class="form-group row">		
<label for="mothername" class="col-sm-2 form-control-label">Mothername</label>
<div class="col-sm-10">
	<input name="mothername" type="text" class="form-control {{ $errors->has('mothername') ? 'form-control-error' : '' }}" id="mothername" placeholder="Enter Your Mothername">
	@if ($errors->has('mothername'))
	<span class="help-block">
	<strong>{{ $errors->first('mothername') }}</strong>
	</span>
	@endif
</div>
</div>
<div class="form-group row">
	<label for="gender" class="col-sm-2 form-control-label">Gender</label>
	<div class="col-sm-2">
		<select name="gender" id="gender" class="form-control {{ $errors->has('gender') ? 'form-control-error' : '' }}">
			<option value="">select</option>
			<option value="female">female</option>
			<option value="male">male</option>
		</select>
			@if ($errors->has('gender'))
			<span class="help-block">
			<strong>{{ $errors->first('gender') }}</strong>
			</span>
			@endif
	</div>
</div>
<div class="form-group row">		
<label for="dob" class="col-sm-2 form-control-label">Date of Birth</label>
<div class="col-sm-10">
	<input name="dob" type="text" class="form-control {{ $errors->has('dob') ? 'form-control-error' : '' }}" id="dob" placeholder="Enter Date of Birth">
		@if ($errors->has('dob'))
		<span class="help-block">
		<strong>{{ $errors->first('dob') }}</strong>
		</span>
		@endif
</div>
</div>
<div class="form-group row">
	<label for="province" class="col-sm-2 form-control-label">Province/City</label>
	<div class="col-sm-3">
		<select name="province_id" id="province" class="form-control {{ $errors->has('province_id') ? 'form-control-error' : '' }}" v-model="province_id" @change="fetchDistrict()">
			<option value="">Select</option>
			<option v-for="province in provinces" v-bind:value="province.id">@{{ province.province_name }}</option>
		</select>
			@if ($errors->has('province_id'))
			<span class="help-block">
			<strong>{{ $errors->first('province_id') }}</strong>
			</span>
			@endif
	</div>
</div>
<div class="form-group row">
	<label for="district" class="col-sm-2 form-control-label">District</label>
	<div class="col-sm-3">
		<select name="district_id" id="district" class="form-control {{ $errors->has('district_id') ? 'form-control-error' : '' }}" v-model="district_id" @change="fetchSector()">
			<option value="">Select</option>
			<option v-for="district in districts" v-bind:value="district.id">@{{district.district_name}}</option>
		</select>
			@if ($errors->has('district_id'))
			<span class="help-block">
			<strong>{{ $errors->first('district_id') }}</strong>
			</span>
			@endif
	</div>
</div>
<div class="form-group row">
	<label for="sector" class="col-sm-2 form-control-label">Sector</label>
	<div class="col-sm-3">
		<select name="sector_id" id="sector" class="form-control {{ $errors->has('sector_id') ? 'form-control-error' : '' }}">
			<option value="">Select</option>
			<option v-for="sector in sectors" v-bind:value="sector.id">@{{sector.sector_name}}</option>
		</select>
			@if ($errors->has('sector_id'))
			<span class="help-block">
			<strong>{{ $errors->first('sector_id') }}</strong>
			</span>
			@endif
	</div>
</div>
<div class="form-group row">
	<label for="cell" class="col-sm-2 form-control-label">Cell</label>
	<div class="col-sm-10">
		<input name="cell" type="text" class="form-control {{ $errors->has('cell') ? 'form-control-error' : '' }}" id="cell" placeholder="Enter Cell name">
			@if ($errors->has('cell'))
			<span class="help-block">
			<strong>{{ $errors->first('cell') }}</strong>
			</span>
			@endif
	</div>
</div>
	<input type="submit" class="btn btn-success"  value="submit" name="submit" />
</form>
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@push('scripts')
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script> --}}
<script src="{{asset("dashboard/js/lib/select2/select2.full.min.js")}}"></script>
<script src="{{asset("dashboard/js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js")}}"></script>
<script>
new Vue({
	el:'#app',
	data:{
		provinces :[],
		province_id:'',
		districts :[],
		district_id:'',
		sectors :[],

	},
	methods:{
		fetchDistrict(){
			axios.get('/api/districts/'+this.province_id).then(response => this.districts = response.data);
		},
		fetchSector(){
			axios.get('/api/sectors/'+this.district_id).then(response => this.sectors = response.data);
		}
	}
	,
	mounted(){
		axios.get('/api/provinces').then(response => this.provinces = response.data);
	}

})
$(document).ready(function() {
	//retrieve province data from internet with axios

	// //initialize niceselect
	// $(document).ready(function() {
 //  	$('select').niceSelect();
	// });
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