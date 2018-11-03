@section('username')
    <small><i>{{ Auth::user()->surname  }} </i></small>
    @auth('administrator')
        {{('(admin)')}}
    @endauth('administrator')
@endsection

@section('homelink')
    @auth('administrator')
         <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-home"></span> </a></li>
    @endauth('administrator')
@endsection

@section('topBar_dropdown')
    @auth('administrator')
        <li><a href="{{route('admin.profile',Auth::user()->id)}}">
             <span class="glyphicon glyphicon-user">{{__('Profile')}}
            </a>
        </li>
        <li><a href=""><span class="glyphicon glyphicon-inbox">{{__('Notifications')}}</a></li> 
        <li>
            <a href="{{route('admin.dashboard')}}">
                <span class="glyphicon glyphicon-dashboard">{{__('Dashboard')}}</span>
            </a>
        </li>  
        <li><a href="{{route('admin.manage')}}">{{__('Management')}}</a></li>
        <li>
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('AdminLogout-form').submit();">
               <span class="glyphicon glyphicon-log-out">{{ __('Logout') }}</span>
                
            </a>
            <form id="AdminLogout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </li>
    @endauth('administrator')
@endsection