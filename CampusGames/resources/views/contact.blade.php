<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div>
        @include("templates.header")
    </div>
    <div class="contact_hero"> 
        <form method="Post" class="contact_form">
            @csrf
                <h1>Contacteer ons</h1>
                <label for="name">Naam:</label>
                <input type="text" name="name">

                <label for="email">Email:</label>
                <input type="text" name="email" required>

                <label for="message">Bericht:</label>
                <textarea  name="message" rows="15"cols="50" required></textarea>

                <button type="submit" onclick="alertMail()" class="button">Verstuur</button>
        </form>

    </div>

    <script>     
        function alertMail(){
            alert("Email succesvol verzonden!");
        }
    </script>
    <div>
            @include("templates.footer")    
    </div>
    

</body>
</html>
