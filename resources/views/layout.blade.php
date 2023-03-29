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


@if(session()->has('success'))
    <div class="flash" id="flash">
        {{session('success')}}
    </div>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function(){
        status();
    });

    async function status() {

        if(document.getElementById("flash") !== null){
            await delay(3000);
            document.getElementById("flash").classList.toggle("flashed");
        }
    }
    const delay = ms => new Promise(res => setTimeout(res, ms));
</script>
