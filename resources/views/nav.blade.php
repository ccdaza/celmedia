<header>
   <div class="content">
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <img src="http://www.celmedia.com/static/img/logoblanco.png" alt="logo">
           </div>

            <div class="row">
                <div class="col-xs-2 col-xs-offset-1 col-md-1 col-md-offset-0"> <a href="{{ url('/') }}">Home</a> </div>
                <div class="col-xs-2 col-md-1"> <a href="{{ url('/services') }}">Servicios</a> </div>
                <div class="col-xs-2 col-md-1"> 
                    @if(!Auth::check())
                        <a href="{{ url('/login') }}">Login</a> 
                    @else
                        <a  href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                        </form>
                    @endif
                </div>
                
                @if(Auth::check())
                    <div class="col-xs-2 col-md-3">
                        Bienvenido {{Auth::user()->name}}
                    </div>
                @endif
            </div>
       </div>
   </div>
</header>