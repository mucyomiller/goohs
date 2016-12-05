@extends('dashboard.theme')
@push('title')
Create Family History
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Create Family History
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

{{ Form::open(array('action' => 'FamilyhistoriesController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
<table width="621" height="500" border="0">
<tr>
<td width="272" height="55"><label> Family Member Name*</label> </td>
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
<td width="272" height="55"><label>      Gender*</label></td>
<td width="333"><span>
<label class="radio">
<input style="width: 30px" type="radio" required="true" name="gender" value="Male" id="gender_0">
Male</label>
&nbsp;     &nbsp;     &nbsp;
<label class="radio">
<input style="width: 30px" type="radio" required="true" name="gender" value="Female" id="gender_1">
Female</label>

</span></td>
</tr>
<tr>
<td width="272" height="55"><label>      Age*</label></td>
<td width="333"><input type="number" id="age" required="true" value="{{{ Form::getValueAttribute('age', null) }}}" name="age"></td>
</tr>


<tr>
<td width="272"><label>Disease Notes:</label></td>
<td width="333" height="200">{{ Form::textarea('diesease_note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
</tr>
<tr>
<input name="patient_id" type="hidden" value="{{ $patient_id }}">
<td colspan="2"> 
<center>
<div class="btn-wrap">
<a class="btn_3" href="javascript:document.getElementById('regForm').reset();" data-type="reset">Reset</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Save" class="submit" />
</div>
</center>
</td>
</tr>
</table>
{{ Form::close() }}
</div>
</center>
@endsection