@extends('dashboard.theme')
@push('title')
Super User
@endpush
@push('menu')
<ul>
<li>
<a href="clinics">
<span class="lbl">Manage Clinics</span><span class="label label-custom label-pill label-danger">new</span></a></li>
</ul>
</li>
<li class="purple with-sub">
<span>
<i class="font-icon font-icon-comments active"></i>
<span class="lbl">Messages</span>
</span>
<ul>
<li>
<a href="#">
<span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span>
</a>
</li>
</ul>
</li>
<li class="red">
<a href="#">
<i class="font-icon glyphicon glyphicon-send"></i>
<span class="lbl">Mail</span>
</a>
</li>
@endpush
@section('content')
Super User Contents
@endsection