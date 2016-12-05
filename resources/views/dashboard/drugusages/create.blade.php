@extends('dashboard.theme')
@push('title')
Add New Drug
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Add Drug
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
{{ Form::open(array('action' => 'DrugusagesController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
<table width="621" height="300" border="0">
<tr>
<td width="272" height="55"><label>Drug Name*</label> </td>
<td width="333">
{{ Form::input('text', 'drug_name', null, array('required' => 'true')) }}
</td>
<tr>
<td width="272"><label>Usage Note:</label></td>
<td width="333" height="350">{{ Form::textarea('usage_note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
</tr>
<tr> 
<td colspan="2"> 
<input name="patient_id" type="hidden" value="{{ $patient_id }}">
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