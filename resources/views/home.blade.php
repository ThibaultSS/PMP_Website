<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div>
        @include("templates.header")
    </div>


    <div class="hero">     
        <div class="hero_text">
            <h2>Welkom bij de Campus Games</h2>
            <p>Na een jaar voorbereiding is ons team "Pret met Pet" eindelijk de Campus Games
             kunnen starten! Doe mee aan assortiment van verschillende spellen die bijdragen tot het recycleren
              van de campus. Ons dillema machine is gelegen in de cafetaria van Campus Hoboken. Dus wacht niet langer
               en speel mee! Bent u ook benieuwd naar de statistieken? <br>Zie hier live de scores:</p>
            <a class="statistieken" href="/statistiek">Statistieken</a>
        </div>
        <div>
            <img src="images\Dillema.png" class="dillema" alt="3d model van het dillema machine" />
        </div>

    </div>
    <div class="white_space">

    </div>  
    <div class="about_us"> 
        <div>
            <img src="images\pmp_team.jpg" class="team" alt="foto van het pret met pet team in mooie polo's" />
        </div>
        <div class="about_us_text">
            <h2>Over ons team</h2>
            <p>Wij zijn 4 gedreven studenten in de richting Multimedia & Creatieve technologiën. Onze campus "KdG" is gelegen te hoboken, waar wij
             elkaar hebben leren kennen. Door pure toeval zijn wij op elkaar beland om dit project voor jullie voor te brengen. 
             Samen hebben wij ons hoofd gekraakt over een manier om de school wat properder achter te laten, het is met genoegen en
              veel trots dat wij kunnen zeggen dat we hierin zijn geslaagd. Vier collega's, 1 droom, miljoenen gerecycleerde flesjes!</p>
        </div>

    </div>
    <div class="white_space">
    
    </div>
    <div class="about_us"> 
        
        <div class="plastic_text">
            <h2>Ons doel</h2>
            <p>Overal ter wereld wordt er vervuild. Vooral als je kijkt naar campussen in Antwerpen. Elke namiddag zitten de 
             aula's vol met lege plastice flesjes. Hiervoor wilden wij, Pret met Pet, een oplossing bedenken. Aan de hand van 
             verschillende leuke en interactieve spellen die alleen maar gespeeld kunnen worden met een leeg flesje, proberen wij
              de studenten een initiatief aan te leren om hun plastice flesje niet zomaar achter te laten. Dit is niet alleen een
               fijne activiteit voor de studenten maar ook nog eens een handige manier om zwerfvuil te minimaliseren.</p>
        </div>
        <div>
            <img src="images\plastic.jpg" class="plastic" alt="veel plastice flesjes op het strand" />
        </div>
    </div>
    <div class="white_space">
    
    </div>
         <div class="about_us"> 
            <div>
                <img src="images\competitioon.jpg" class="team" alt="mensen die op een trapje staan" />
            </div>
            <div class="competition_text">
                <h2>De Campus Competitie</h2>
                <p>De Campus Games blijven niet gebonden aan 1 locatie. Deze duurzame en interactieve spellen zullen zich over tijd
                 in verschillende campussen begeven. Alle scores worden dan ook digitaal bijgehouden en verzamelt op deze site.
                  Het is dan ook een gevreesde competitie tussen vele KdG-campussen. Doe dus zeker mee aan de Campus Games en probeer
                   eerste plek te halen! Zonder jou blijven de flesjes op de grond koud!</p>
            </div>
            

        </div>
        <div class="white_space">
    
    </div>
    <div>
            @include("templates.footer")    
    </div>
    

</body>
</html>
