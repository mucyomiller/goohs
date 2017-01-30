@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<div class="box-typical">
<div class="calendar-page">
<div class="calendar-page-content">
<div class="calendar-page-title">Scheduler</div>
<div class="calendar-page-content-in">
<div id="app">
<example></example>
</div>
</div><!--.calendar-page-content-in-->
</div><!--.calendar-page-content-->

<div class="calendar-page-side">
<section class="calendar-page-side-section">
<div class="calendar-page-side-section-in">
<div id="side-datetimepicker"></div>
</div>
</section>

<section class="calendar-page-side-section">
<header class="box-typical-header-sm">Surgery on march 18</header>
<div class="calendar-page-side-section-in">
<ul class="exp-timeline">
<li class="exp-timeline-item">
<div class="dot"></div>
<div>10:00</div>
<div class="color-blue-grey">Name: Miller more Details</div>
</li>
<li class="exp-timeline-item">
<div class="dot"></div>
<div>14:00</div>
<div class="color-blue-grey">Name :Kbson Patient Deases Details</div>
</li>
</ul>
</div>
</section>

<section class="calendar-page-side-section">
<header class="box-typical-header-sm">ColorDetails </header>
<div class="calendar-page-side-section-in">
<ul class="colors-guide-list">
<li>
<div class="color-double green"><div></div></div>
Appointments
</li>
<li>
<div class="color-double"><div></div></div>
Meetings
</li>
<li>
<div class="color-double red"><div></div></div>
Surgey
</li>
</ul>
</div>
</section>
</div><!--.calendar-page-side-->
</div><!--.calendar-page-->
</div><!--.box-typical-->
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection
