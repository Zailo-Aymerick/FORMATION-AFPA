let age, tarif, permisold, nbaccident, points, fidelite;
let myform = document.querySelector("form");
myform.addEventListener("submit", (event) =>{
event.preventDefault();


points = 0;
fidelite = 0;

age = document.querySelector("#age".value)
permisold = document.querySelector("#permisold".value)
nbaccident = document.querySelector("#nbaccident".value)

if (nbaccident>3) {
     document.getElementById("tarif").innerHTML = "<p> Vous êtes refusé ! </p>"
     console.log(nbaccident)
}

if (age<=25) {
    points = points-1
    console.log(points)
} else {
    points = points+1
    console.log(points)
}

console.log(permisold)
if (permisold>=2) {
    points = points+1
    console.log(points)
} else {
    points = points-1
    console.log(points)
}



if (nbaccident == 0) {
    points = points+1
    console.log(points)
} 
if (nbaccident >= 1) {
    points = points-nbaccident
    console.log(points)
}


if (fidelite == 5) {
    points = points+1
    console.log(points)
}


 if (points >= 4) {
    document.querySelector("#tarif").innerHTML = '<p class="tarifbleu"> Votre tarif est le tarif bleu. </p>'
    document.body.style.backgroundImage = "url('./assets/images/voitureBleu.jpg')";
}


else if (points ==2 || points == 3 ) {
    document.querySelector("#tarif").innerHTML = '<p class="tarifvert"> Votre tarif est le tarif vert. </p>'
    document.body.style.backgroundImage = "url('./assets/images/voitureVerte.jpg')";
}


else if (points == 0 || points == 1) {
    document.querySelector("#tarif").innerHTML = '<p class="tariforange"> Votre tarif est le tarif orange. </p>'
    document.body.style.backgroundImage = "url('./assets/images/voitureOrange.jpg')";
    
    
    
} else {
    if (points<0) {
        document.querySelector("#tarif").innerHTML = '<p class="tarifrouge"> Votre tarif est le tarif Rouge. </p>'
        document.body.style.backgroundImage = "url('./assets/images/voitureRouge.jpg')";
    }
}
document.querySelector("#tarif")
})



// let boutons = document.querySelector(".boutonheader")
// boutons.addEventListener("mouseover", (event)=>{
//     event.preventDefault();
//     document.getElementsByClassName(".boutonheader").style.margin-top = "20px"
// })

























// FONCTIONS_UTILISEES
// VARIABLES
//   Age EST_DU_TYPE NOMBRE
//   permisold EST_DU_TYPE NOMBRE
//   nbraccident EST_DU_TYPE NOMBRE
//   tarif EST_DU_TYPE CHAINE
//   points EST_DU_TYPE NOMBRE
//   Fidelité EST_DU_TYPE NOMBRE
// DEBUT_ALGORITHME
//   LIRE Age
//   LIRE permisold
//   LIRE nbraccident

//   SI (nbraccident>3) ALORS
//     DEBUT_SI
//     AFFICHER* "REFUSED"
//     FIN_SI

//   SI (Age<=25) ALORS
//     DEBUT_SI
//     points PREND_LA_VALEUR points-1
//     FIN_SI
//     SINON
//       DEBUT_SINON
//       points PREND_LA_VALEUR points+1
//       FIN_SINON

//   SI (permisold >= 2) ALORS
//     DEBUT_SI
//     points PREND_LA_VALEUR points+1
//     FIN_SI
//     SINON
//       DEBUT_SINON
//       Age PREND_LA_VALEUR points-1
//       FIN_SINON

//   SI (nbraccident ==0) ALORS
//     DEBUT_SI
//     points PREND_LA_VALEUR points+1


//     SI (nbraccident >=1) ALORS
//       DEBUT_SI
//       points PREND_LA_VALEUR points-nbraccident
//       FIN_SI
//     FIN_SI
//   AFFICHER* points


//   SI (Fidelité>5) ALORS
//     DEBUT_SI
//     points PREND_LA_VALEUR points+1
//     FIN_SI


//   SI (points>=4) ALORS
//     DEBUT_SI
//     AFFICHER* "TARIF BLEU"
//     FIN_SI


//   SI (points==2 OU points==3) ALORS
//     DEBUT_SI
//     AFFICHER* "TARIF VERT"
//     FIN_SI

//     SINON
//       DEBUT_SINON
//       SI (points==0 OU points==1) ALORS
//         DEBUT_SI
//         AFFICHER* "TARIF ORANGE"
//         FIN_SI

//         SINON
//           DEBUT_SINON
//           SI (points<0) ALORS
//             DEBUT_SI
//             AFFICHER* "ROUZE"
//             FIN_SI
//           FIN_SINON
//       FIN_SINON
// FIN_ALGORITHME
 