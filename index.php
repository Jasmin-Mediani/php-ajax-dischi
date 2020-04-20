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
        <!-- --------- provvisori --------
        <div class="card">
          <img
            src="https://www.bonjovimusic.it/upload/album/4/new-jersey-medium.jpg"
            alt="album_copertina"
          />
          <h3>Titolo</h3>
          <span class="nome-autore">autore</span>
          <span class="anno">anno</span>
        </div>
        <div class="card">
          <img
            src="https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._AC_SX522_.jpg"
            alt="album_copertina"
          />
          <h3>Titolo</h3>
          <span class="nome-autore">autore</span> <span class="anno">anno</span>
        </div>
        <div class="card">
          <img
            src="https://m.media-amazon.com/images/I/81r5dWQRBJL._SS500_.jpg"
            alt="album_copertina"
          />
          <h3>Titolo</h3>
          <span class="nome-autore">autore</span> <span class="anno">anno</span>
        </div>
        <div class="card">
          <img
            src="https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg"
            alt="album_copertina"
          />
          <h3>Titolo</h3>
          <span class="nome-autore">autore</span> <span class="anno">anno</span>
        </div>
        <div class="card">
          <img
            src="https://images-na.ssl-images-amazon.com/images/I/81ll31VxLDL._AC_SX466_.jpg"
            alt="album_copertina"
          />
          <h3>Titolo</h3>
          <span class="nome-autore">autore</span> <span class="anno">anno</span>
        </div>
        <div class="card">
          <img
            src="https://images-na.ssl-images-amazon.com/images/I/81lR-Qe4X2L._AC_SX466_.jpg"
            alt="album_copertina"
          />
          <h3>Titolo</h3>
          <span class="nome-autore">autore</span>
          <span class="anno">anno</span>
        </div> -->

        <!-------------------------------->
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
