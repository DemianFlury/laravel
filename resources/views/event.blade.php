<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/github.min.css">
<style>
    h1 {
        border-bottom: 1px solid #aaa;
        font-size: 40px;
    }
</style>

<h1>{{$event->title}}</h1><br>
<p>{{$event->description}}</p>
<p>Datum: {{$event->date}}</p>
<form action="?" method="post">
    @csrf
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <input type="email" name="email" id="email" placeholder="Email address">
    <input type="text" name="notes" id="notes" placeholder="Notes">

    <input type="radio" value="yes" name="answer" id="yes">
    <label for="yes">dabaii</label>
    <input type="radio" value="no" name="answer" id="no">
    <label for="no">niicht dabaii</label>


    <button type="submit">Bestätigen</button>
</form>

<a href="/event/{{$event->id}}/applications">Anmeldungen ansehen</a>
