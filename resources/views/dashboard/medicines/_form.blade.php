<table width="621" height="300" border="0">
<tr>
<td width="272" height="55"><label>Medicine Name*</label> </td>
<td width="333">
{{ Form::input('text', 'name', null, array('required' => 'true')) }}
</td>
<tr>
<td width="272" height="55"><label>Quantity:</label> </td>
<td width="333">
{{ Form::input('number', 'quantity', null, array('required' => 'true')) }}
</td>
</tr>
<tr>
<td width="272"><label>Description:</label></td>
<td width="333" height="350">{{ Form::textarea('description', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
</tr>
<tr> 
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