@section('head')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:black; z-index:2;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white " href="{{'/'}}">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{'shop'}}">Boutique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{'activity'}}">Activités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{'ideaBox'}}">Boite à idées</a>
            </li>
            <li class="nav-item">
                @if(! Auth::check())
                    <div class="authentification">
                        <a class="Connexion" href="{{'login'}}">Connexion</a>
                        <a class="Inscription" href="{{'register'}}">Inscription</a>
                    </div>
                @elseif(Auth::check())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color:white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; left: 90%; top: -5rem;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink" style="background-color: rgb(238, 193, 94);">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </li>
            @yield('li')
        </ul>
    </div>
</nav>
@show
