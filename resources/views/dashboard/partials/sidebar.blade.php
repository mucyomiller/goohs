<nav class="side-menu">
<ul class="side-menu-list">
<li class="blue">
<a href="{{route('profile.index')}}">
<i class="font-icon font-icon-user"></i>
<span class="lbl">My Profile</span>
</a>
</li>
<li class="blue">
<a href="{{ route('patients.index') }}">
<i class="font-icon font-icon-heart"></i>
<span class="lbl">My Patient info</span>
</a>
</li>
@role('superUser')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Super User</span>
</span>
<ul>
<li>
<a href="{{route('clinics.index')}}">
<span class="lbl">Manage Clinics</span><span class="label label-custom label-pill label-danger">new</span>
</a>
</li>
</ul>
</li>
@endrole
@role('admin')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Administrator</span>
</span>
<ul>
<li>
<a href="{{route('users.index')}}">
<span class="lbl">Manage Employees</span>
</a>
</li>
<li>
<a href="{{route('appointments.index')}}">
<span class="lbl">Manage Appointments</span>
</a>
</li>
<li>
<a href="{{route('dutydays.index')}}">
<span class="lbl">Doctor Schedules</span>
</a>
</li>
<li>
<a href="{{route('patients.index')}}">
<span class="lbl">Manage Patients</span>
</a>
</li>
<li>
<a href="{{route('backend.search_pmr')}}">
<span class="lbl">Manage Medical Record</span>
</a>
</li>
<li>
<a href="{{route('backend.app_vitals')}}">
<span class="lbl">Add Vital Signs</span>
</a>
</li>
<li>
<a href="{{route('backend.app_prescription')}}">
<span class="lbl">Prepare Prescription</span>
</a>
</li>
<li>
<a href="{{route('backend.app_pres_print')}}">
<span class="lbl">Print Prescription</span>
</a>
</li>
<li>
<a href="{{route('backend.app_tests')}}">
<span class="lbl">Manage Test Reports</span>
</a>
</li>
<li>
<a href="{{route('backend.app_test_print')}}">
<span class="lbl">Print Test Reports</span>
</a>
</li>
<li>
<a href="{{route('backend.app_check_fee')}}">
<span class="lbl">Add Checkup Fee</span>
</a>
</li>
<li>
<a href="{{route('backend.app_checkup_fee_print')}}">
<span class="lbl">Print Checkup Invoice</span>
</a>
</li>
<li>
<a href="{{route('backend.app_test_fee')}}">
<span class="lbl">Add Lab Test Fee</span>
</a>
</li>
<li>
<a href="{{route('backend.app_test_fee_print')}}">
<span class="lbl">Print Test Invoice</span>
</a>
</li>
<li>
<a href="{{route('medicines.index')}}">
<span class="lbl">Manage Medicines</span>
</a>
</li>
<li>
<a href="{{route('backend.patients_reporting')}}">
<span class="lbl">View Checked Patients</span>
</a>
</li>
</ul>
</li>
@endrole
@role('doctor')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Doctor</span>
</span>
<ul>
<li>
<a href="{{route('backend.search_pmr')}}">
<span class="lbl">View Medical Record</span>
</a>
</li>
<li>
<a href="{{route('backend.app_vitals')}}">
<span class="lbl">View Vital Signs</span>
</a>
</li>
<li>
<a href="{{route('appointments.index')}}">
<span class="lbl">View Appointments</span>
</a>
</li>
</ul>
</li>
<li class="magenta opened">
<a href="{{url('#')}}">
<i class="font-icon font-icon-calend"></i>
<span class="lbl">Schedules</span>
</a>
</li>
@endrole
@role('accountant')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Accountant</span>
</span>
<ul>
<li>
<a href="{{route('backend.app_check_fee')}}">
<span class="lbl">Manage Checkup Fee</span>
</a>
</li>
<li>
<a href="{{route('backend.app_checkup_fee_print')}}">
<span class="lbl">Print Checkup Invoice</span>
</a>
</li>
<li>
<a href="{{route('backend.app_test_fee')}}">
<span class="lbl">Manage Test Fee</span>
</a>
</li>
<li>
<a href="{{route('backend.app_test_fee_print')}}">
<span class="lbl">Print Test Invoice</span>
</a>
</li>
</ul>
</li>
@endrole
@role('labmanager')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Lab Manager</span>
</span>
<ul>
<li>
<a href="{{route('backend.app_tests',['flag'=>'results'])}}">
<span class="lbl">Manage Test Results</span>
</a>
</li>
<li>
<a href="{{ route('backend.app_test_print') }}">
<span class="lbl">Print Test Report</span>
</a>
</li>
</ul>
</li>
@endrole
@role('receptionist')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Receptionist</span>
</span>
<ul>
<li>
<a href="{{route('appointments.index')}}">
<span class="lbl">Manage Appointments</span>
</a>
</li>
<li>
<a href="{{ route('dutydays.index') }}">
<span class="lbl">Doctor Schedules</span>
</a>
</li>
<li>
<a href="{{ route('patients.index') }}">
<span class="lbl">Manage Patients</span>
</a>
</li>
<li>
<a href="{{ route('backend.search_pmr') }}">
<span class="lbl">Manage Medical Record</span>
</a>
</li>
<li>
<a href="{{ route('backend.app_vitals') }}">
<span class="lbl">Add Vital Signs</span>
</a>
</li>
<li>
<a href="{{ route('backend.app_prescription') }}">
<span class="lbl">Prepare Prescription</span>
</a>
</li>
<li>
<a href="{{ route('backend.app_pres_print') }}">
<span class="lbl">Print Prescription</span>
</a>
</li>
<li>
<a href="{{ route('backend.app_tests') }}">
<span class="lbl">Manage Test Reports</span>
</a>
</li>
<li>
<a href="{{ route('backend.app_test_print') }}">
<span class="lbl">Print Test Report</span>
</a>
</li>
</ul>
</li>
@endrole
<li class="purple with-sub">
<span>
<i class="font-icon font-icon-comments active"></i>
<span class="lbl">Messages</span>
</span>
<ul>
<li>
<a href="#">
<span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span>
</a>
</li>
</ul>
</li>
<li class="red">
<a href="#">
<i class="font-icon font-icon-alarm"></i>
<span class="lbl">Notifications</span>
</a>
</li>
</ul>
</nav>
<!--.side-menu-->