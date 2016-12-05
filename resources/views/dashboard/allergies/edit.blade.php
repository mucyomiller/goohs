@extends('dashboard.theme')
@push('title')
Edit Allergy
@endpush
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach
<br/>
<center>
<div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">

{{ Form::model($allergy, ['route' => ['allergies.update', $allergy->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}

<table width="621" height="300" border="0">
<tr>
<td width="272" height="55"><label> Allergy Name*</label> </td>
<td width="333">
{{ Form::input('text', 'allergy_name', null, array('required' => 'true')) }}
</td>
</tr>
<tr>
<td width="272"><label> allergy Note:</label></td>
<td width="333" height="200">{{ Form::textarea('allergy_note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
</tr>
<tr>
<td colspan="2">
<center>
<div class="btn-wrap">
{{ link_to_route('allergies.index', 'Back', ['id' => $allergy->patient_id], ['class' => 'btn_3']) }}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Update" class="submit" />
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