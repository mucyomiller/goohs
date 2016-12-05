<table width="650" height="1300" border="0">

<tr>
<td width="272" height="55"><label>Current Visit Date*</label> </td>
<td width="333">
<label> {{ (isset($appointment))?  date('j F, Y', strtotime($appointment->date)) :  date('j F, Y', strtotime($prescription->appointment->date)) }}</label>
</td>
</tr>

<tr>
<td width="272" height="55"><label>Doctor Name*</label> </td>
<td width="333">

<label> {{ (isset($appointment))? $appointment->employee->name : $prescription->appointment->employee->name}}</label>

</td>
</tr>

<tr>
<td width="272" height="55"><label>Prescription Code:</label> </td>
<td width="333" colspan="2">
{{ Form::input('text', 'code', null, array('required' => 'true')) }}
</td>
</tr>

<tr>
<td width="272"><label>Inventory Medicines:</label></td>
<td width="333" height="60">
{{ Form::select('medicine1_id', [null => 'Select first medicine']+$medicine1, null, ['style' => 'width: 95%; height: 38px']) }}
</td>
<td width="150">
{{ Form::input('number', 'med1_qty', null, array('style' => 'width: 83%', 'placeholder' => 'Qty')) }}
</td>
</tr>
<tr>
<td width="272"></td>
<td width="333" height="60">
{{ Form::select('medicine2_id', array(null => 'Select second medicine')+$medicine2, null, ['style' => 'width: 95%; height: 38px']) }}
</td>
<td width="150">
{{ Form::input('number', 'med2_qty', null, array('style' => 'width: 83%', 'placeholder' => 'Qty')) }}
</td>
</tr>
<tr>
<td width="272"></td>
<td width="333" height="60">
{{ Form::select('medicine3_id', array(null => 'Select third medicine')+$medicine3, null, ['style' => 'width: 95%; height: 38px']) }}
</td>
<td width="150">
{{ Form::input('number', 'med3_qty', null, array('style' => 'width: 83%', 'placeholder' => 'Qty')) }}
</td>
</tr>
<tr>
<td width="272"></td>
<td width="333" height="60">
{{ Form::select('medicine4_id', array(null => 'Select fourth medicine')+$medicine4, null, ['style' => 'width: 95%; height: 38px']) }}
</td>
<td width="150">
{{ Form::input('number', 'med4_qty', null, array('style' => 'width: 83%', 'placeholder' => 'Qty')) }}
</td>
</tr>
<tr>
<td width="272"></td>
<td width="333" height="60">
{{ Form::select('medicine5_id', array(null => 'Select fifth medicine')+$medicine5, null, ['style' => 'width: 95%; height: 38px']) }}
</td>
<td width="150">
{{ Form::input('number', 'med5_qty', null, array('style' => 'width: 83%', 'placeholder' => 'Qty')) }}
</td>
</tr>
<tr>
<td width="272"></td>
<td width="333" height="60">
{{ Form::select('medicine6_id', array(null => 'Select sixth medicine')+$medicine6, null, ['style' => 'width: 95%; height: 38px']) }}
</td>
<td width="150">
{{ Form::input('number', 'med6_qty', null, array('style' => 'width: 83%', 'placeholder' => 'Qty')) }}
</td>
</tr>
<tr>
<td width="272" ><label>Other Medicines:</label></td>
<td width="333" colspan="2">{{ Form::textarea('medicines', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'Other medicines...', "style" => "font-size: 1.2em; resize: none; margin-top: 10px") ) }}</td>
</tr>

<tr>
<td width="272"><label>Note:</label></td>
<td width="333" colspan="2">{{ Form::textarea('note', null, array('required' => 'true', 'rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; resize: none; margin-top: 10px") ) }}</td>
</tr>

<tr>
<td width="272"><label>Procedure</label></td>
<td width="333" colspan="2">{{ Form::textarea('procedure', null, array('required' => 'true', 'rows' => '7', 'cols' => '20', 'placeholder' => 'procedure', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
</tr>

<tr>
@if(isset($appointment))
<input name="patient_id" type="hidden" value="{{ $appointment->patient->id }}">
<input name="appointment_id" type="hidden" value="{{ $appointment->id }}">
@endif

<td colspan="3">
<center>
<div class="btn-wrap">
<a class="btn_3" href="javascript:document.getElementById('regForm').reset();" data-type="reset">Reset</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="Save" class="submit" />
</div>
</center>
</td>
</tr>
</table>

