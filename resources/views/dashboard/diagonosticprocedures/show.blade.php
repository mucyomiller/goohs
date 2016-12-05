@extends('dashboard.theme')
@push('title')
Diagonostic Procedure Detail
@endpush
@push('sub_title')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
Diagonostic Procedure Detail
</div>
</div>
<br><br><br>
@endpush
@section('content')

<center>
<div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
<table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="150">

<tr>
<td width="272"><label>Diagonostic Procedure:</label></td>
<td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $diagonosticprocedure->procedure_note }}}</div></label></td>
</tr>

</table>
<center>
<section style="margin-bottom: 10%">
{{ link_to_route('diagonosticprocedures.index', 'Back', ['id' => $diagonosticprocedure->patient_id], ['class' => 'btn_3']) }}
</section>
</center>
</div>
</center>
@endsection