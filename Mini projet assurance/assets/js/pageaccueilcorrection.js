let formulaire = document.querySelector("form");
let age = document.querySelector("#age");
let permis = document.querySelector("#permis");
let nombreAccident = document.querySelector("#nbAccident");
let fidelite = document.querySelector("#fidelite");
let affichageTarif = document.querySelector("#tarifContainer")

formulaire.addEventListener("submit",(event)=>{
    event.preventDefault();
    // let paragrapheTarif = document.createElement("p")          CreateElement pour crée quelque chose dans l'html
    let
    let points = 0;
    if (age.value > 25 ) {
        points++;                   //La variable ++ revient a faire points = points+1
    }
    if (permis.value > 2) {
        points++;
    }
    if (fidelite.value > 5) {
        points++
    }
    if (nombreAccident.value > 2) {
        paragrapheTarif.innerText = "Apprend à conduire ! Refuser...";
    }
    else
     {
        points = points - nombreAccident.value;

        switch(points){
            case 0 :
                paragrapheTarif.innerText = "Vous avez le tarif le plus chère";
                document.body.style.backgroundImage = "url('./assets/images/voitureRouge.jpg')";
            break
            case 1 :
                paragrapheTarif.innerText = "Vous payez le tarif orange";
                document.body.style.backgroundImage = "url('./assets/images/voitureOrange.jpg')";
            break
            case 2 :
                paragrapheTarif.innerText = "Vous payez le tarif Vert";
                document.body.style.backgroundImage = "url('./assets/images/voitureVerte.jpg')";
            break
            case 3 :
                paragrapheTarif.innerText = "Vous avez le tarif le moins chère";
                document.body.style.backgroundImage = "url('./assets/images/voitureBleu.jpg')";
            break
            default :
                paragrapheTarif.innerText = "Vous avez été refusé sale nulos";
        }
    }
    affichageTarif.appendChild(paragrapheTarif);
})