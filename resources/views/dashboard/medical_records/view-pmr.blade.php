@extends('dashboard.theme')
@push('title')
View PMR
@endpush
@section('content')
<section id="content">
<div class = "user_logo">
<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
{{ $patient->name }} Medical Record
</div>
</div>
<div>
<div class="menu" style="margin-left: 10%; margin-right: 10%">
<a class="ferozi" href="{{ URL::route('patients.show', $patient_id) }}">Demographics</a>
<a class="green" href="prescriptions?id={{$patient_id}}">Prescription</a>
<a class="pink" href="vitalsigns?id={{$patient_id}}">Vital Signs</a>
<a class="purple" href="familyhistories?id={{$patient_id}}">Family History</a>
<a class="blue" href="surgicalhistories?id={{$patient_id}}">Surgical History</a>
<a class="orange" href="previousdiseases?id={{$patient_id}}">Previous Diseases</a>
<a class="ferozi" href="drugusages?id={{$patient_id}}">Drug Usage</a>
<a class="green" href="allergies?id={{$patient_id}}">Allergies</a>
<!--                     <a class="pink" href="#">Temporary Medication</a>-->
{{--<a class="blue" href="diagonosticprocedures?id={{$patient_id}}">Diagnostic Procedure</a>--}}
<a class="orange" href="app_tests?id={{$patient_id}}">Lab Test Reports</a>
<a class="purple" href="checkupfees?id={{$patient_id}}" >Checkup Fee History </a>
<a class="ferozi" href="pdf_record?id={{$patient_id}}">Medical Record in PDF</a>
</div>
</div>
@endsection

