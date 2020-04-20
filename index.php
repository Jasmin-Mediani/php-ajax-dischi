<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dischi con PHP e AJAX</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <link rel="stylesheet" href="dist/css/style.css" />
    <script
      src="https://code.jquery.com/jquery-3.5.0.min.js"
      integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div id="logo">
          <img
            src="https://seeklogo.com/images/S/spotify-2015-logo-560E071CB7-seeklogo.com.png"
            alt="spotify_logo"
          />
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <!-------------------------- VERSIONE TEMPLATE CON  PHP ------------------->
        <!-- <?php
          include 'dati.php';
          ?>

        <?php 
        foreach ($cards as $key =>
        $card) { ?>
        <div class="card">
          <img src=
          <?php echo $card["immagine"] ?>
          alt="album_copertina" />

          <h3><?php echo $card["titolo"] ?></h3>
          <span class="nome-autore"> <?php echo $card["autore"] ?> </span>
          <span class="anno"> <?php echo $card["anno"]  ?> </span>
        </div>

        <?php } ?> -->

        <!------------------------- FINE VERSIONE TEMPLATE CON PHP ------------------>
      </div>
    </main>
    <!---------------------------- VERSIONE TEMPLATE CON HANDLEBARS ------------------->
    <script id="template-card" type="text/x-handlebars-template">
      <div class="card">
        <img src="{{immagine}}" alt="" />
        <h3 class="titolo">
          {{titolo}}
        </h3>
        <span class="nome-autore">
          {{autore}}
        </span>
        <span class="anno">
          {{anno}}
        </span>
      </div>
    </script>
    <!------------------- FINE VERSIONE TEMPLATE CON HANDLEBARS ---------->

    <script src="src/js/main.js"></script>
  </body>
</html>
