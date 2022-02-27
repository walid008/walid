<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}">
<div class="container">
    <header>Commandez une course</header>
    <div class="progress-bar">
        <div class="step">
            <p>Trajet</p>
            <div class="bullet">
                <span>1</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>planifier</p>
            <div class="bullet">
                <span>2</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>Contact</p>
            <div class="bullet">
                <span>3</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>

        <div class="step">
            <p>Payement</p>
            <div class="bullet">
                <span>4</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
    </div>
    <div class="form-outer">
        <form action="#">
            <div class="page slide-page">
                <div class="field">
                    <div class="label">Point de départ</div>
                    <input type="text" disabled id="pd" placeholder=''>
                </div>
                <div class="field">
                    <div class="label">Votre destination</div>
                    <input type="text" disabled id="pa" placeholder="">
                </div>
                <div class="field">
                    <div class="label">Prix / KM en €</div>
                    <input type="text" disabled id="prix_km" placeholder="">
                </div>
                <input type="checkbox" name='favoris' id='favoris'>
                <label class="label" for='favoris'>Ajouter ce trajet au favoris</label>


                <div class="field">
                    <button class="firstNext next">Suivant</button>
                </div>
            </div>


            <?php
             $mindate = date("Y-m-d", strtotime("+12 Hours"));
             $mintime = date("h:i", strtotime("+12 Hours"));
             $min = $mindate."T".$mintime;
            ?>
            <div class="page">
                <div class="field">
                    <div class="label">Une Date et une Heure</div>
                    <input type="datetime-local" min="<?php echo $min?>">
                </div>
                <div class="field">
                    <div class="label">Nombre De Passagers</div>
                    <select>
                        <option> 1</option>
                        <option> 2</option>
                        <option>3</option>
                        <option> 4</option>
                        <option> 5</option>
                        <option> 6</option>
                        <option> 7</option>


                    </select>
                </div>

                <div class="field">
                    <div class="label">Type de voiture</div>
                    <select id="TypeVoiture">
                        <option value="Berline">Berline - 5 places</option>
                        <option value="Vanne">Vanne - 7 place</option>

                    </select>
                </div>
                <div class="field" id='divprix15' style="display:none">
                    <div class="label">Prix +15% en €</div>
                    <input type="text" disabled id="prix15" placeholder="">
                </div>
                <div class="field btns">
                    <button class="prev-1 prev">Précédent</button>
                    <button class="next-1 next">Suivant</button>
                </div>

            </div>
            <div class="page">
                <div class="field">
                    <div class="label">Nom </div>

                    <input type="text">
                    <div style="position: absolute;
                                margin-left: 52%;
                                margin-top: -10%;}">prenom</div>

                    <input type="text">
                </div>
                <div class="field">
                    <div class="label">Adresse</div>
                    <input type="text">
                </div>

                <div class="field">
                    <div class="label">Adresse éléctronique</div>
                    <input type="email">
                </div>
                <div class="field">
                    <div class="label">Numéro de téléphone
                    </div>
                    <input type="tel" name="phone" id="phone">
                </div>
                <div class="field btns">
                    <button class="prev-2 prev">Précédent</button>
                    <button class="next-2 next" id="suivant">Suivant</button>
                </div>
            </div>
            <div class="page">
                <div class="field">
                    <div class="label">Numéro de carte</div>
                    <input type="text">
                </div>
                <div class="field">
                    <div class="label">Date d'expiration</div>
                    <input type="password">


                </div>
                <div class="field">
                    <div class="label">CVV/CVC</div>
                    <input type="password">


                </div>
                <div class="field btns">
                    <button class="prev-3 prev">Précédent</button>
                    <button id="bt" class="submit"> </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="build/js/intlTelInput.js"></script>
<script>
// Vanilla Javascript
var input = document.querySelector("#phone");
window.intlTelInput(input, ({
    // options here
}));

$(document).ready(function() {
    $('.iti__flag-container').click(function() {
        var countryCode = $('.iti__selected-flag').attr('title');
        var countryCode = countryCode.replace(/[^0-9]/g, '')
        $('#phone').val("");
        $('#phone').val("+" + countryCode + " " + $('#phone').val());
    });
});
</script>
<script>
$(document).ready(function() {


    $('#TypeVoiture').change(function() {
        if (this.value == "Vanne") {
            var query = $('#prix_km').val();
            query = parseInt(query);
            var query2 = (query * 0.15);
            $('#divprix15').css('display', 'block');
            $('#prix15').val(query + query2);

        } else {
            var query = $('#prix_km').val();
            query2 = (query * 15) / 100;
            query = query - query2;
            $('#divprix15').css('display', 'none');

        }




    });

    $('#suivant').click(function() {
        var query = $('#prix_km').val();
        $('#bt').text('Payer ( ' + query + ' )');



    });


})
</script>
<script src="{{ asset('js/script.js') }}"></script>