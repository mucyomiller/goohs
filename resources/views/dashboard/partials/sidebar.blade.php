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
@role('superuser')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Super User</span>
</span>
<ul>
<li>
<a href="{{route('hospitals.index')}}">
<span class="lbl">Manage Hospitals</span>
</a>
</li>
<li>
<a href="{{route('manager.index')}}">
<span class="lbl">Manage Hospitals Manager</span>
</a>
</li>
</ul>
</li>
@endrole
@role('admin')
<li class="grey with-sub">
<span>
<i class="font-icon font-icon-dashboard"></i>
<span class="lbl">Hospital Manager</span>
</span>
<ul>
<li>
<a href="{{route('users.index')}}">
<span class="lbl">Manage Employees</span>
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
<span class="lbl">Add Medical Record</span>
</a>
</li>
<li>
<a href="{{-- {{route('backend.app_vitals')}} --}}">
<span class="lbl">View Vital Signs</span>
</a>
</li>
</ul>
</li>
<li class="magenta opened">
<a href="{{route('schedule.index')}}">
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
<span class="lbl">Messages</span><span class="label label-custom label-pill">0</span>
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