<header>
   <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <img src="http://www.celmedia.com/static/img/logoblanco.png" alt="logo">
           </div>

            <div class="row">
                <ul class='col-xs-8 col-md-9'>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/services') }}">Servicios</a></li>
                    <li>
                        @if(!Auth::check())
                            <a href="{{ url('/login') }}">Login</a> 
                        @else
                            <a  href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                        @endif
                    </li>
                     @if(!Auth::check())
                            <li><a href="{{ url('/register') }}">Register</a> </li>
                    @endif
                    
                </ul>
                @if(Auth::check())
                    <div class="col-xs-4 col-md-3">
                        Bienvenido {{Auth::user()->name}}
                    </div>
                @endif
            </div>
       </div>
   </div>
</header>