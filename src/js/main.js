$(document).ready(function () {

    var source = $("#template-card").html();
    var templateCard = Handlebars.compile(source); //MEMO: è #template-card svuotato dei campi personalizzabili



    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function (datiInArrivo) {
            var cards = datiInArrivo;
            console.log(datiInArrivo);

            for (var i = 0; i < cards.length; i++) {
                var card = cards[i];
                var infoCard = {
                    immagine: card.immagine,
                    titolo: card.titolo,
                    autore: card.autore,
                    anno: card.anno,
                }

                var cardCompilata = templateCard(infoCard);
                $("main .container").append(cardCompilata);
            }
        },
        error: function (error) {
            alert('errore nel caricamento della pagina');
        }
    });





});
