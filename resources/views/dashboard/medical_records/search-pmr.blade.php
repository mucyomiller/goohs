@extends('dashboard.theme')
@section('content')
<div class="page-content">
<div class="container-fluid">
<section class="card">
<header class="card-header card-header-lg">
Search Medical Records
</header>
<div class="card-block">
<p class="card-text">
Enter patient information :
<div class="search">
<input type="text" class="form-control form-control-rounded" placeholder="Search"/>
<button type="submit" class="btn-icon"><i class="font-icon font-icon-search"></i></button>
</div>
</p>
</div>
</section>
</div><!--.container-fluid-->
</div><!--.page-content-->
@endsection

