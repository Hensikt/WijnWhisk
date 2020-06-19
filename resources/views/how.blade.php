@extends('layouts.header')
@section('title', 'WijnWhisk')

@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="container">
                <h1>Our subscriptions</h1>
                <p>We hebben 4 types of subscripties</p>

                <p>Het test pakket bestaat uit 2 15cl flessen van uw gekozen drank. Het komt ingepakt.</p>
                <p>Het kleine pakket bestaat uit 3 20cl flessen van uw gekozen drank. Het komt ingepakt.</p>
                <p>Het middelgrote pakket bestaat uit 4 25cl flessen van uw gekozen drank. Het komt ingepakt.</p>
                <p>Het Grote pakket bestaat uit 4 30cl flessen van uw gekozen drank. Het komt ingepakt.</p>

                <h2>Retourvoorwaarden</h2>
                <p>De retourvoorwaarden vind je hieronder.</p>
                <p>Waar het op neerkomt, is dat je rustig over je aankoop mag nadenken. Als je artikel geen goede match
                    is, mag
                    je het gratis naar ons terugsturen binnen de zichttermijn. In je account vind je een overzicht van
                    welke
                    artikelen je nog kunt retourneren.
                    Zowel bij artikelen van WijnWhisk.nl als bij artikelen van verkopers via WijnWhisk.nl is er altijd
                    een
                    retourtermijn van minstens 30 dagen. Bij artikelen die je koopt bij een particuliere verkoper geldt
                    een
                    retourtermijn van 14 dagen. De retourtermijn gaat in op de dag dat jij het artikel ontvangt.
                    Meerdere artikelen in 1 bestelling? Dan heb je geluk: het is bij wet vastgelegd dat de termijn pas
                    ingaat
                    als je alles hebt ontvangen. Deze wet geldt per verkopende partij. Dus als je 2 artikelen van
                    WijnWhisk.nl
                    bestelt met 1 artikel van een verkoper via WijnWhisk.nl, start de zichttermijn van de WijnWhisk.nl
                    artikelen
                    mogelijk op een andere dag. Ingewikkeld? Het belangrijkste is dat jij altijd de maximale
                    zichttermijn
                    krijgt.</p>

                <h2>Het bestel process</h2>
                <p>Wij, onze partners en onze bezorgers doen er alles aan om de beloofde levertijd waar te maken. Als
                    dat
                    onverhoopt niet lukt, brengen we je daarvan op de hoogte. Houd je Track&Trace in de gaten voor de
                    meest
                    actuele informatie.</p>

                <h4>Niet (alles) ontvangen?</h4>
                <p>We kunnen niet altijd alle artikelen van één bestelling op hetzelfde moment verzenden. In je account
                    zie je
                    of we alles tegelijkertijd verzonden hebben. Als we wel alles hebben verzonden, kun je het beste
                    even
                    contact opnemen met onze klantenservice.
                    Niets is zo belangrijk als de levertijd. Daarom zie je nog voordat je iets bestelt wanneer we het
                    artikel
                    bezorgen. Artikelen die direct op voorraad zijn, heb je meestal de volgende dag in huis. Artikelen
                    die niet
                    op voorraad liggen, zijn iets langer onderweg.</p>
            </div>
            <div class="container">
                <div class="information__carousel--selector">
                    <span class="text" onclick="currentSlide(1)">Test |</span>
                    <span class="text" onclick="currentSlide(2)">Small |</span>
                    <span class="text" onclick="currentSlide(3)">Medium |</span>
                    <span class="text" onclick="currentSlide(4)">Large</span>
                </div>
                <div class="information__carousel--container">
                    <div class="carousel--slide fade" style="display: block;">
                        <div class="carousel--number">1 / 4</div>
                        <img src="{{ asset('css/Images/test.png') }}" alt="">
                        <div class="carousel--text">Caption Text</div>
                    </div>

                    <div class="carousel--slide fade">
                        <div class="carousel--number">2 / 4</div>
                        <img src="{{ asset('css/Images/small.png') }}" alt="">
                        <div class="carousel--text">Caption Two</div>
                    </div>

                    <div class="carousel--slide fade">
                        <div class="carousel--number">3 / 4</div>
                        <img src="{{ asset('css/Images/medium.png') }}" alt="">
                        <div class="carousel--text">Caption Three</div>
                    </div>

                    <div class="carousel--slide fade">
                        <div class="carousel--number">4 / 4</div>
                        <img src="{{ asset('css/Images/large.png') }}" alt="">
                        <div class="carousel--text">Caption Four</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection