@section('username')
    {{ Auth::user()->name  }} 
    @auth('guardian')
        {{('(guardian)')}}
    @endauth('guardian')
@endsection

@section('homelink')
    @auth('guardian')
         <li><a href="{{route('guardian')}}"><span class="glyphicon glyphicon-home"></span> {{__('Home')}}</a></li>
    @endauth('guardian')
@endsection

@section('topBar_dropdown')
    @auth('guardian')
        <li><a href="{{route('guardian/profile',Auth::user()->id)}}"><span class="glyphicon glyphicon-user"></span> {{__('Profile')}}</a></li>
        <li><a href=""><span class="glyphicon glyphicon-inbox"></span> {{__('Notifications')}}</a></li>   
        <li>
            <a class="dropdown-item" href="{{ route('guardian.logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('Guardianlogout-form').submit();">
                <span class="glyphicon glyphicon-log-out"></span> {{ __('Logout') }}
                
            </a>
            <form id="Guardianlogout-form" action="{{ route('guardian.logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>
        </li> 
    @endauth('guardian')
@endsection