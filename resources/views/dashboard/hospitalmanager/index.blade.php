@extends('dashboard.theme')
@push('styles')
<link rel="stylesheet" href="{{asset('dashboard/css/separate/vendor/pnotify.min.css')}}">
@endpush
@section('content')
<div class="page-content">
<div class="container-fluid">
{{-- records informations --}}
@if(!empty($managers) && $managers->count())
<section class="card">
<header class="card-header card-header-lg">
All Registered Hospital Managers <span class="label label-pill label-info">{{$managers->count()}}</span>
<a href="{{ route('manager.create')}} " class="btn btn-rounded  btn-success-outline pull-right">Add new Manager</a>
</header>
<div class="card-block">
<p class="card-text">
<div class="row">
<table id="table-edit" class="table table-bordered table-hover">
<thead>
<tr>
<th width="1">#</th>
<th>Hospital Name</th>
<th>Hospital Manager</th>
<th>Registered At</th>
<th class="table-icon-cell">
<i class="font-icon font-icon-edit"></i>
</th>
</tr>
</thead>
<tbody>
@foreach($managers as $manager)
<tr>
<td>{{ $loop->index+1 }}</td>
<td>{{ $manager->employee->hospital->name }}</td>
<td>{{ $manager->names}}</td>
<td class="table-date">{{ $manager->created_at->diffForHumans()}}</td>
<td class="table-date"><a href="{{ route('manager.edit',$manager->employee->id)}}">update</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</p>
</div>
</section>
@else
<section class="card">
<header class="card-header card-header-lg">
<a href="{{ route('manager.create')}} " class="btn btn-rounded  btn-success-outline pull-right">Add new Manager</a>
</header>
</section>
<h2>notify that there is no Manager registered yet</h2>
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