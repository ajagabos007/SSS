@section('username')
    <small><i>{{ Auth::user()->surname  }}  {{Auth::user()->first_name}} {{Auth::user()->last_name}}</i></small>
    @auth('administrator')
        {{('(admin)')}}
    @endauth('administrator')
@endsection

@section('homelink')
    @auth('staff')
         <li><a href="{{route('staff')}}"><span class="glyphicon glyphicon-home"></span>{{__('Home')}}</a></li>
    @endauth('administrator')
@endsection

@section('topBar_dropdown')
    @auth('staff')
        <li><a href="{{route('staff.profile',Auth::user()->id)}}">{{__('Profile')}}</a></li>
        <li><a href="">{{__('Notifications')}}</a></li> 
        <li><a href="{{route('staff.dashboard')}}">{{__('Dashboard')}}</a></li>  
        <li>
            <a class="dropdown-item" href="{{ route('staff.logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('StaffLogout-form').submit();">
                {{ __('Logout') }}
                
            </a>
            <form id="StaffLogout-form" action="{{ route('staff.logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </li>
    @endauth('staff')
@endsection