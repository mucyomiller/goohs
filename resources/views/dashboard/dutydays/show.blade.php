@extends('dashbaord.theme')
@push('title')
View Schedule
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
View Doctor Schedule
</div>
</div>
@endpush
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach

<br/>
<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">
<tr>
<td width="272" height="55"><label>Doctor Name:</label> </td>
<td width="333">
<label>{{$doctor->name}}</label>
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Sunday:</label> </td>
<td width="333">
@if($dutydays[0]->day != "")
<label>Available</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
@if($dutydays[0]->day != "")
<label>{{$dutydays[0]->start}}</label>
@else
<label>Not Available</label>
@endif
</td>
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
@if($dutydays[0]->day != "")
<label>{{$dutydays[0]->end}}</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr><td><br></td><td></td></tr>
<tr>
<td width="272" height="55"><label>Monday:</label> </td>
<td width="333">
@if($dutydays[1]->day != "")
<label>Available</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
@if($dutydays[1]->day != "")
<label>{{$dutydays[1]->start}}</label>
@else
<label>Not Available</label>
@endif
</td>
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
@if($dutydays[1]->day != "")
<label>{{$dutydays[1]->end}}</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr><td><br></td><td></td></tr><tr>
<tr>
<td width="272" height="55"><label>Tuesday:</label> </td>
<td width="333">
@if($dutydays[2]->day != "")
<label>Available</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
@if($dutydays[2]->day != "")
<label>{{$dutydays[2]->start}}</label>
@else
<label>Not Available</label>
@endif
</td>
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
@if($dutydays[2]->day != "")
<label>{{$dutydays[2]->end}}</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr><td><br></td><td></td></tr><tr>
<tr>
<td width="272" height="55"><label>Wednseday:</label> </td>
<td width="333">
@if($dutydays[3]->day != "")
<label>Available</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
@if($dutydays[3]->day != "")
<label>{{$dutydays[3]->start}}</label>
@else
<label>Not Available</label>
@endif
</td>
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
@if($dutydays[3]->day != "")
<label>{{$dutydays[3]->end}}</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr><td><br></td><td></td></tr><tr>
<tr>
<td width="272" height="55"><label>Thursday:</label> </td>
<td width="333">
@if($dutydays[4]->day != "")
<label>Available</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
@if($dutydays[4]->day != "")
<label>{{$dutydays[4]->start}}</label>
@else
<label>Not Available</label>
@endif
</td>
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
@if($dutydays[4]->day != "")
<label>{{$dutydays[4]->end}}</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr><td><br></td><td></td></tr><tr>
<tr>
<td width="272" height="55"><label>Friday:</label> </td>
<td width="333">
@if($dutydays[5]->day != "")
<label>Available</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
@if($dutydays[5]->day != "")
<label>{{$dutydays[5]->start}}</label>
@else
<label>Not Available</label>
@endif
</td>
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
@if($dutydays[5]->day != "")
<label>{{$dutydays[5]->end}}</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr><td><br></td><td></td></tr><tr>
<tr>
<td width="272" height="55"><label>Saturday:</label> </td>
<td width="333">
@if($dutydays[6]->day != "")
<label>Available</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr>
<td width="272" height="55"><label>Start Time:</label> </td>
<td width="333">
@if($dutydays[6]->day != "")
<label>{{$dutydays[6]->start}}</label>
@else
<label>Not Available</label>
@endif
</td>
</td>
</tr>
<tr>
<td width="272" height="55"><label>End Time:</label> </td>
<td width="333">
@if($dutydays[6]->day != "")
<label>{{$dutydays[6]->end}}</label>
@else
<label>Not Available</label>
@endif
</td>
</tr>
<tr><td><br></td><td></td></tr><tr>

</table>
<center>
<section style="margin-bottom: 10%">
{{ link_to_route('dutydays.index', 'Back', '', ['class' => 'btn_3']) }}
</section>
</center>

</div>
</center>
@endsection