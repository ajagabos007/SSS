@section('username')
    <small><i>{{ Auth::user()->surname  }}  {{Auth::user()->first_name}} {{Auth::user()->last_name}}</i></small>
    @auth('administrator')
        {{('(admin)')}}
    @endauth('administrator')
@endsection

@section('homelink')
    @auth('web')
         <li><a href="{{route('/home')}}"><span class="glyphicon glyphicon-home"></span>{{__('Home')}}</a></li>
    @endauth('web')
@endsection

@section('topBar_dropdown')
    @auth('web')
        <li><a href="{{route('profile',Auth::user()->id)}}">{{__('Profile')}}</a></li>
        <li><a href="">{{__('Notifications')}}</a></li> 
        <li><a href="{{route('')}}">{{__('Dashboard')}}</a></li>  
        <li>
            <a class="dropdown-item" href="{{ route('student.logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('StudentLogout-form').submit();">
                {{ __('Logout') }}
                
            </a>
            <form id="StudentLogout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </li>
    @endauth('web')
@endsection