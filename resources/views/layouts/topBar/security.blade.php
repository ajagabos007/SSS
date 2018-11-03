@section('username')
    <small><i>{{ Auth::user()->surname  }}  {{Auth::user()->first_name}} {{Auth::user()->last_name}}</i></small>
    @auth('security')
        {{('(admin)')}}
    @endauth('security')
@endsection

@section('homelink')
    @auth('security')
         <li><a href="{{route('security')}}"><span class="glyphicon glyphicon-home"></span>{{__('Home')}}</a></li>
    @endauth('security')
@endsection

@section('topBar_dropdown')
    @auth('security')
        <li><a href="{{route('security.profile',Auth::user()->id)}}">{{__('Profile')}}</a></li>
        <li><a href="">{{__('Notifications')}}</a></li> 
        <li><a href="{{route('security.dashboard')}}">{{__('Dashboard')}}</a></li>  
        <li><a href="{{route('security.manage')}}">{{__('Management')}}</a></li>
        <li>
            <a class="dropdown-item" href="{{ route('security.logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('SecurityLogout-form').submit();">
                {{ __('Logout') }}
                
            </a>
            <form id="SecurityLogout-form" action="{{ route('security.logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </li>
    @endauth('security')
@endsection