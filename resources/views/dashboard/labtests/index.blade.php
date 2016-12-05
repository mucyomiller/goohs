@extends('dashboard.theme')
@push('title')
    @if(Auth::user()->role != "Lab Manager")
    Manage Lab Test
    @else
    Manage Test Results
    @endif
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
@if(Auth::user()->role != "Lab Manager")
Manage Lab Test
@else
Manage Test Results
@endif
</div>
</div>
<center style="margin-top: 7%;">
@if(Auth::user()->role != 'Doctor' and Auth::user()->role != "Lab Manager") 
@if(!isset($flag))
<center>{{ link_to_route('labtests.create', 'Create Lab Test', ['id' => $appointment->id], ['class' => 'btn_1'])}}</center>
<br>
@endif
@endif
<table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
<thead>
<tr>
<th>Test Name</th>
<th>Test Fee</th>
<th>Results Added</th>
<th style="width: 25%">Manage</th>
</tr>
</thead>
<tbody>
@if(($labtests) != null)
@foreach($labtests as $labtest)
<tr>
<td>{{{ $labtest->test_name }}}</td>                                                      
<td>{{{ ($labtest->total_fee != 0)? $labtest->total_fee . '-/Rs' : 'Unpaid' }}}</td>
<td>{{{ ($labtest->test_results != null)? 'Yes' : 'No' }}}</td>
<td>
@if(Auth::user()->role != "Lab Manager")    
@if(isset($flag) && $flag == 'print')
{{ link_to_route('labtests.show', 'View', [$labtest->id, 'flag' => 'print'], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@elseif(isset($flag))
{{ link_to_route('labtests.show', 'View', [$labtest->id, 'flag' => 'test_fee'], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
{{ link_to_route('labtests.edit', 'Edit', [$labtest->id, 'flag' => 'test_fee'], ['class' => 'data_table_btn'])}}
@else
{{ link_to_route('labtests.show', 'View', [$labtest->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@endif

@if(Auth::user()->role != 'Doctor' && !isset($flag)) 
{{ link_to_route('labtests.edit', 'Edit', [$labtest->id], ['class' => 'data_table_btn'])}}
@endif
@elseif(isset($flag) && $flag == 'print')
{{ link_to_route('labtests.show', 'View', [$labtest->id, 'flag' => 'print'], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
@else
{{ link_to_route('labtests.show', 'View', [$labtest->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

{{ link_to_route('labtests.edit', (($labtest->test_results != null)? 'Update': 'Add'), [$labtest->id], ['class' => 'data_table_btn'])}}
@endif
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
@if(isset($flag) && $flag == 'print')
{{ $labtests->appends(array('id' => $appointment->id, 'flag' => 'print'))->links('partials.pagination') }}
@elseif(isset($flag) && $flag == 'test_fee')
{{ $labtests->appends(array('id' => $appointment->id, 'flag' => 'test_fee'))->links('partials.pagination') }}
@else
{{ $labtests->appends(array('id' => $appointment->id))->links('partials.pagination') }}
@endif
</center>
@endsection

