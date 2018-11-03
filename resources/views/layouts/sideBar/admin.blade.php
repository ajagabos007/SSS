@section('left_sidenav')
<nav class="nav" style="margin:0px; background-color:#f8f8f8; text-align:left;" >
  <ul class="nav nav-pills nav-stacked">
    <li class="links">
      <a href="{{route('schools.index')}}"><span class="glyphicon glyphicon-education">Schools</span></a>
    </li>
    <li class="links"><a href="{{route('staffs.index')}}"><span class="glyphicons glyphicons-inbox"></span>Staffs</a></li>
    <li class="links"><a href="{{route('guardians.index')}}"><span class="glyphicons glyphicons-parents"></span>Guardians</a></li>
    <li class="links"><a href="{{route('students')}}">Students</a></li>
    <li class="links dropdown dropdown-hover"> 
        <a class="dropdown-toggle"  data-toggle="dropdown">
        <span class="glyphicon glyphicon-inbox"></span>Notifications
           <span class="caret"></span><span class="badge">5</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="links"><a href="#">Complains</a></li>
          <li class="links"><a href="#">Permit Absentees</a></li>
          <li class="links"><a href="#">Security Suggetions</a></li>
        </ul>
</li>
  </ul>
  </nav>
@endsection
@section('right_sidenav')
   
@endsection