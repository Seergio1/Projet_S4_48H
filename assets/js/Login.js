
// const container = document.querySelector(".container");
const form_sign_in = document.getElementById("demo-form_1");
var base = document.getElementById("url").getAttribute("value");


function toAccueil(){
  window.location = `${base}MyController/Monsite`;
}

form_sign_in.addEventListener("submit",(e) =>{
  e.preventDefault();
});

var boutton = document.querySelector('.log');

console.log(boutton);
boutton.addEventListener("click",() =>{
  login();
});


function login(){
  let formdata = new FormData(form_sign_in);
  let xhr = getTheBoy();
  xhr.onreadystatechange = function () {  
      if (xhr.readyState == 4) {
         if (xhr.status == 200) {
              let retour = JSON.parse(xhr.responseText);
              // alert(retour);
              if(retour != -1){
                toAccueil();
              }
          } else {
              console.log(xhr.status);
          }
      }
  };

  xhr.addEventListener("error", function (event) {
    alert("Oups! Quelque chose s'est mal passé lors de la publication .");
  });
  xhr.open("POST", `${base}Sign/login`,true);
  xhr.send(formdata);
}