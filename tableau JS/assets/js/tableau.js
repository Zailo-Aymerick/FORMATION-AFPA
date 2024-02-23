let animals = [
    {
        nom: "Bengal",
        long: "7 a 10 ans",
        Image: "./images/bengal.jfif",
        Alimentation: ["Croquettte", "Poulet"
     ],
    },
    {
        nom: "MaineCoon",
        long: "8 a 12 ans",
        Image: "./images/Le sphinx.jpg",
        Alimentation: ["Croquettte", "Poulet"
     ],
    },
    {
        nom: "Sphinx",
        long: "5 a 11 ans",
        Image:"./images/mainecoon.jpg",
        Alimentation: ["Croquettte", "Poulet"
     ],
    },
    {
        nom: "Savannah",
        long: "9 a 13 ans",
        Image: "./images/Savannah.jfif",
        Alimentation: ["Croquettte", "Poulet"
      ],
    },
];



// document.write(`<table>`)
//   document.write(`<tr>
//                   <th>Nom</th>
//                   <th>Long</th>
//                   <th>image</th>
//                   <th>Alimentation</th>
//                   </tr>`)
//   animals.forEach (function (animals){
//     document.write(<tr> <td> ${animals.nom} </td> </tr>)
//     document.write(<tr> <td> ${animals.long} </td> </tr>)
//     document.write(<tr> <td> ${animals.Image}</td> </tr>)
//     document.write(<tr> <td> ${animals.Alimentation}</td> </tr>)
//   }
// )
// document.write(`</table>`)






// document.write(`/table>`);

document.write('<table border="2">');
document.write(
            `<tr>
                <th> Nom </th>
                <th> longévité </th>
                <th> image </th>
                <th> Alimentation </th>
             </tr>`
             );
 
animals.forEach((animals) =>{
  document.write('<tr>');
  document.write('<td>' +animals.nom + '</td>');
  document.write('<td>' +animals.long + '</td>');
  document.write('<td> <img src="' + animals.Image + ' "/> </td>');
  document.write(`<td>  <ol>`);
  animals.Alimentation.forEach((aliment) =>{
    document.write(`<li>`+aliment+`<li>`)
  } )
document.write(`</ol>  </td>`)
document.write(`<tr>`);
  
} )
 
 
document.write('</table>');