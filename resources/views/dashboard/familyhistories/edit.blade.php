@extends('dashboard.theme')
@push('title')
Edit Family History
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
    Edit Family History
</div>
</div>
@endpush
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach
<br/>
<center>
<div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">

{{ Form::model($familyhistory, ['route' => ['familyhistories.update', $familyhistory->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}

<table width="621" height="720" border="0">
<tr>
<td width="272" height="55"><label> Name of Family Member*</label> </td>
<td width="333">
{{ Form::input('text', 'f_member_name', null, array('required' => 'true')) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label> Relation With Patient*</label> </td>
<td width="333">
{{ Form::input('text', 'patient_relation', null, array('required' => 'true')) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Gender*</label> </td>
<td width="333">
{{ Form::input('text', 'gender', null, array('required' => 'true')) }}
</td>
</tr>
<tr>
<td width="272" height="55"><label>Age*</label> </td>
<td width="333">
{{ Form::input('text', 'age', null, array('required' => 'true')) }}
</td>
</tr>
<tr>
<td width="272"><label> Diesease Notes:</label></td>
<td width="333" height="200">{{ Form::textarea('diesease_note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
</tr>
<tr>
<td colspan="2">
<center>
<div class="btn-wrap">
{{ link_to_route('familyhistories.index', 'Back', ['id' => $familyhistory->patient_id], ['class' => 'btn_3']) }}
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Update" class="submit" />
</div>
</center>
</td>
</tr>
</table>
{{ Form::close() }}
</div>
</center>
@endsection