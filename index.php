<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dischi con PHP e AJAX</title>
    <link rel="stylesheet" href="dist/css/style.css" />
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
        <?php
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
          <span class="anno"> <?php echo $card["anno"] ?></span>
        </div>

        <?php } ?>
      </div>
    </main>

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

    <script src="src/js/main.js"></script>
  </body>
</html>
