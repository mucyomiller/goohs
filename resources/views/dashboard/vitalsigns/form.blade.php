<table width="700" height="720" border="0">
<tr>
<td width="290" height="55"><label>Weight*</label> </td>
<td width="333">
{{ Form::input('number', 'weight', null, array('required' => 'true', 'min' => '1', 'max' => '500')) }}
</td>
<td width="200">
: kg
</td>
</tr>
<tr>
<td width="272" height="55"><label>Height*</label> </td>
<td width="333">
{{ Form::input('number', 'height', null, array('required' => 'true', 'min' => '1', 'max' => '10')) }}
</td>
<td width="200">
: ft
</td>
</tr>
<tr>
<td width="272" height="55"><label>BP (Low)*</label> </td>
<td width="333">
{{ Form::input('number', 'bp_systolic', null, array('required' => 'true', 'min' => '60', 'max' => '90')) }}
</td>
<td width="200">
: mmHg
</td>
</tr> 
<tr>
<td width="272" height="55"><label>BP (High)*</label> </td>
<td width="333">
{{ Form::input('number', 'bp_diastolic', null, array('required' => 'true', 'min' => '90', 'max' => '140')) }}
</td>
<td width="200">
: mmHg
</td>
</tr>
<tr>
<td width="272" height="55"><label>Pulse Rate*</label> </td>
<td width="333">
{{ Form::input('number', 'pulse_rate', null, array('required' => 'true', 'min' => '50', 'max' => '200')) }}
</td>
<td width="200"> 
: per min
</td>
</tr>
<td width="272" height="55"><label>Respiration Rate*</label> </td>
<td width="333">
{{ Form::input('number', 'respiration_rate', null, array('required' => 'true', 'min' => '5', 'max' => '100')) }}
</td>
<td width="200"> 
: per min
</td>
</tr>

<tr>
<td width="400" height="55"><label>Temprature*</label> </td>
<td width="333">
{{ Form::input('number', 'temprature', null, array('required' => 'true', 'min' => '50', 'max' => '115')) }}
</td>
<td width="200"> 
: F
</td>
</tr>
<tr>
<td width="272" height="55"><label>Blood Group</label> </td>
<td width="333" colspan="2">
<select name="blood_group" style="width: 90%; height: 38px" >
<option selected value="" disabled>Select Group</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "A+") selected="true" @endif
@endif
value="A+">A+</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "B+") selected="true" @endif
@endif
value="B+">B+</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "O+") selected="true" @endif
@endif
value="O+">O+</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "AB+") selected="true" @endif
@endif
value="AB+">AB+</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "AB-") selected="true" @endif
@endif
value="AB-">AB-</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "A-") selected="true" @endif
@endif
value="A-">A-</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "B-") selected="true" @endif
@endif
value="B-">B-</option>
<option
@if(isset($vitalsign))
@if($vitalsign->blood_group == "O-") selected="true" @endif
@endif
value="O-">O-</option>
</select>
</td>
<td width="200">

</td>
</tr>
<tr>
<td width="272"><label>Note:</label></td>
<td colspan="2" width="333" height="200">
{{ Form::textarea('note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; width: 375px; resize: none;") ) }}
</td>
</tr>