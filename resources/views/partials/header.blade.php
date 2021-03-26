<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a style="margin-left: 15px;" class="navbar-brand" href="/">Pastebin Clone</a>
        <button style="margin-right: 15px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="margin-left: 15px;">
                <a class="nav-item nav-link" href="/bins">Your list</a>
                <a class="nav-item nav-link" href="/new-bin">New bin</a>
                @if( auth()->check() )
                <a class="nav-item nav-link" href="/logout">Log Out</a>
                <a class="nav-item nav-link" style="font-size: 12px;">You're logged as: {{ auth()->user()->username }}</a>
                @else
                <a class="nav-item nav-link" href="/login">Login</a>
                <a class="nav-item nav-link" href="/register">Register</a>
                @endif
            </div>
        </div>
    </nav>
</header>