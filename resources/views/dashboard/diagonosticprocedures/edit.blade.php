@extends('dashboard.theme')
@push('title')
Edit Diagonostic Procedure
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Edit Diagonostic Procedure
</div>
</div>
<br><br><br>
@endpush
@section('content')
@foreach($errors->all("<p class='error'>:message</p>") as $message)
{{ $message }}
@endforeach
<br/>
<center>
<div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">
{{ Form::model($diagonosticprocedure, ['route' => ['diagonosticprocedures.update', $diagonosticprocedure->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}
<table width="621" height="200" border="0">
<tr>
<td width="272"><label> Diagonostic Procedure*</label></td>
<td width="333" height="350">{{ Form::textarea('procedure_note', null, array('rows' => '7', 'cols' => '20', 'required' => 'true', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
</tr>
<tr>
<td colspan="2">
<center>
<div class="btn-wrap">
{{ link_to_route('diagonosticprocedures.index', 'Back', ['id' => $diagonosticprocedure->patient_id], ['class' => 'btn_3']) }}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Update" class="submit" />
</div>
</center>
</td>
</tr>
</table>
{{ Form::close() }}
</div>
</center>
@endsection