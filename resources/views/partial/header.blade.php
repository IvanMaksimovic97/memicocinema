<header class="header header-horizontal header-view-pannel">
    <div class="container">
        <nav class="navbar">
            <a class="navbar-brand" href="{{url("")}}">
                <span class="logo-element">
                <span class="logo-text text-uppercase">
                    Memico
                </span>
            </a>
            <button class="navbar-toggler" type="button">
                <span class="th-dots-active-close th-dots th-bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    @foreach($menu as $link)
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("").$link->path}}">{{$link->name}}</a>
                    </li>
                    @endforeach
                    @if(!session('user'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("")."/register"}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("")."/login"}}">Log In</a>
                    </li>
                    @endif
                    @if(session('user'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("")."/logout"}}">Log Out</a>
                    </li>
                    @endif
                </ul>
                @if(session('user'))
                <div class="navbar-extra">
                    <span class="nav-item">
                        Logged in: {{session('user')->username}}
                    </span>
                </div>
                @endif
                @if(session('user') && session('user')['role_id'] == 1)
                <div class="navbar-extra">
                    <a class="btn-theme btn" href="{{url("")}}/admin/display">Admin Panel</a>
                </div>
                @endif
            </div>
        </nav>
    </div>
</header>
