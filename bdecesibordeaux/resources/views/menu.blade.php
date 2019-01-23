@yield('head')
 <img class="logo" src="css/logo.jpg">
 @if(! Auth::check())
    <a class="Connexion" href="{{'login'}}">Connexion</a>
    <a class="Inscription" href="{{'register'}}">Inscription</a>
    @elseif(Auth::check())
     <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>
                              <div class="logout">
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
      
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                                </div>
                                </div>
                                @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-black navbar-fixed-top ">
        <div class="barre">
  <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-white"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <div class="itm">
      <li class="nav-item active ">
        <a class="nav-link text-white " href="{{'/'}}">Accueil <span class="sr-only">(current)</span></a>
      </li>
      </div>
      <div class="itm">
      <li class="nav-item">
        <a class="nav-link text-white " href="{{'shop'}}">Boutique</a>
      </li>
      </div>
      <div class="itm">
        <li class="nav-item">
        <a class="nav-link text-white " href="{{'activity'}}">Activités</a>
      </li>
      </div>
      <div class="itm">
        <li class="nav-item">
        <a class="nav-link text-white " href="{{'ideaBox'}}">Boite à idées</a>
      </li>
      </div>
    </ul>
  </div>
  </div>
</nav>