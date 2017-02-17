@extends('dashboard.theme')
@push('styles')
<link rel="stylesheet" href="{{asset('dashboard/css/separate/vendor/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/css/separate/pages/profile.min.css')}}">
@endpush
@section('content')
<div class="page-content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-lg-pull-6 col-md-6 col-sm-6">
<section class="box-typical">
<div class="profile-card">
<div class="profile-card-photo">
<img src="{{asset('dashboard/img/avatar-2-64.png')}}" alt=""/>
</div>
<div class="profile-card-status"><b>{{ ucfirst($user->roles->first()->name)}}</b></div>
<div class="profile-card-name">{{ $user->names }}</div>
<div class="profile-card-location">
@if($user->patient)
Patient ID: {{ $user->patient->patientID }}<br>
District: {{ $user->patient?$user->patient->district->district_name:''}}<br>
Sector: {{$user->patient?$user->patient->sector->sector_name:''}}<br>
<!--temporary setted cell_id as cell_name -->
Cell: {{$user->patient?$user->patient->cell_id:''}}
@endif
</div>
<button type="button" class="btn btn-rounded">Edit</button>
<div class="btn-group">

</div><!--.row-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
@push('scripts')
<script src="{{asset("dashboard/js/lib/slick-carousel/slick.min.js")}}"></script>
<script>
$(function () {
$(".profile-card-slider").slick({
slidesToShow: 1,
adaptiveHeight: true,
prevArrow: '<i class="slick-arrow font-icon-arrow-left"></i>',
nextArrow: '<i class="slick-arrow font-icon-arrow-right"></i>'
});

var postsSlider = $(".posts-slider");

postsSlider.slick({
slidesToShow: 4,
adaptiveHeight: true,
arrows: false,
responsive: [
{
breakpoint: 1700,
settings: {
slidesToShow: 3
}
},
{
breakpoint: 1350,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 992,
settings: {
slidesToShow: 3
}
},
{
breakpoint: 768,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 500,
settings: {
slidesToShow: 1
}
}
]
});

$('.posts-slider-prev').click(function(){
postsSlider.slick('slickPrev');
});

$('.posts-slider-next').click(function(){
postsSlider.slick('slickNext');
});

/* ==========================================================================
Recomendations slider
========================================================================== */

var recomendationsSlider = $(".recomendations-slider");

recomendationsSlider.slick({
slidesToShow: 4,
adaptiveHeight: true,
arrows: false,
responsive: [
{
breakpoint: 1700,
settings: {
slidesToShow: 3
}
},
{
breakpoint: 1350,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 992,
settings: {
slidesToShow: 3
}
},
{
breakpoint: 768,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 500,
settings: {
slidesToShow: 1
}
}
]
});

$('.recomendations-slider-prev').click(function() {
recomendationsSlider.slick('slickPrev');
});

$('.recomendations-slider-next').click(function(){
recomendationsSlider.slick('slickNext');
});
});
</script>
@endpush