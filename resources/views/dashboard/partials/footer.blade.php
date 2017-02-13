<script src="{{asset('dashboard/js/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/js/lib/jScrollPane/jquery.jscrollpane.min.js')}}"></script>
<script src="{{asset('dashboard/js/lib/jScrollPane/jquery.mousewheel.js')}}"></script>
<script src="{{asset('dashboard/js/lib/jScrollPane/mwheelIntent.js')}}"></script>
<script src="{{asset('dashboard/js/lib/tether/tether.min.js')}}"></script>
<script src="{{asset('dashboard/js/lib/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/lib/match-height/jquery.matchHeight.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/lib/moment/moment-with-locales.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/lib/eonasdan-bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('dashboard/js/lib/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('dashboard/js/app.js')}}"></script>
@stack('scripts')
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<!--<script src="{{asset('js/app.js')}}"></script>-->
</body>
</html>