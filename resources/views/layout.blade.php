<link rel="stylesheet" type="text/css" href="{{ asset('app.css')}}">

<div class="header">
    <h1>Organisatierator 9000</h1>
    @auth()
        <a href="/new-event">Neues Event</a>
        <a href="/logout">Logout</a>
    @endauth
    @guest()
        <a href="/register">Registrieren</a>
        <a href="/login">Login</a>
    @endguest
    <a href="/events">Alle Events</a>
</div>
<div class="content">
@yield('content')
</div>

<div class="footer">
    <a href="https://longdogechallenge.com/">Check this out</a>
    <a href="https://github.com/DemianFlury">Check me out 😏</a>
</div>
