@extends('dashboard.theme')
@push('styles')
<link rel="stylesheet" href="{{asset('dashboard/css/separate/vendor/pnotify.min.css')}}">
@endpush
@section('content')
<div class="page-content">
<div class="container-fluid">
{{-- records informations --}}
@if(!empty($hospitals) && $hospitals->count())
<section class="card">
<header class="card-header card-header-lg">
All Registered Hospitals <span class="label label-pill label-info">{{$hospitals->count()}}</span>
<a href="{{ route('hospitals.create')}} " class="btn btn-rounded  btn-success-outline pull-right">Add new Hospital</a>
</header>
<div class="card-block">
<p class="card-text">
<div class="row">
<table id="table-edit" class="table table-bordered table-hover">
<thead>
<tr>
<th width="1">#</th>
<th>Name</th>
<th>Location</th>
<th>Quota Per Day</th>
<th>Active</th>
<th>Registered At</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-edit"></i>
</th>
</tr>
</thead>
<tbody>
@foreach($hospitals as $hospital)
<tr>
<td>{{ $loop->index+1 }}</td>
<td>{{ $hospital->name }}</td>
<td>{{ $hospital->location}}</td>
<td>{{$hospital->quota_per_day}}</td>
<td @if($hospital->is_activated) style="color:green;" @else style="red;" @endif>{{$hospital->is_activated?'operation':'no operation'}}</td>
<td class="table-date">{{ $hospital->created_at->diffForHumans()}}</td>
<td class="table-date"><a href="{{ route('hospitals.edit',$hospital->id)}}">update</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</p>
</div>
</section>
@else
<h2>notify that there is no hospitals registered yet</h2>
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