<script>
document.getElementById('meld_aan').onclick = function(){
    document.getElementById('vrijmilunch').innerHTML = 
        '<h4 class="aanmeld-titel">Vrijdagmiddag lunch</h4>'+
        '<button class="aanwezig checked" id="meld_aan">See you there!<i class="zmdi zmdi-check"></i></button>'+
        '<a href="agenda.html#aanwezigenVrijMiLunch" class="afwezig">Check de aanwezigen</a>';
}

document.getElementById('meld_af').onclick = function(){
    document.getElementById('vrijmilunch').innerHTML = 
        '<h4 class="aanmeld-titel">Vrijdagmiddag lunch</h4>'+
        '<button class="aanwezig un-checked" id="meld_aan">Niet aanwezig<i class="zmdi zmdi-close"></i></button>'+
        '<a href="agenda.html#aanwezigenVrijMiLunch" class="afwezig">Wijzig je status</a>';
}
</script>