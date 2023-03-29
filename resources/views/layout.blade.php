<link rel="stylesheet" type="text/css" href="{{ asset('app.css')}}">

<div class="header">
    <h1>Organisatierator 9000</h1>
    <a href="/new-event">
        <img src="https://icon-library.com/images/plus-5-512.gif" alt="new icon" class="header-img">
    </a>
    <a href="/events">
        <img src="https://assets.stickpng.com/images/588a64e0d06f6719692a2d10.png" alt="list icon" class="header-img">
    </a>
</div>
<div class="content">
@yield('content')
</div>
