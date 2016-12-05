@extends('dashboard.theme')
@push('title')
Add New Allergy
@endpush
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach

<br/>
<center>
<div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">

{{ Form::open(array('action' => 'AllergiesController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
<table width="621" height="300" border="0">
<tr>
<td width="272" height="55"><label>Allergy Name*</label> </td>
<td width="333">
{{ Form::input('text', 'allergy_name', null, array('required' => 'true')) }}
</td>
<tr>
<td width="272"><label>Allergy Note:</label></td>
<td width="333" height="200">{{ Form::textarea('allergy_note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
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
<br><br>
@endsection