// modal IMC


var btn_imc = document.querySelector('.box_IMC');
var modal_imc = document.getElementById("imc_box");
var close_imc = document.getElementsByClassName("close_imc")[0];
if (btn_imc!=null) {
    btn_imc.addEventListener('click',()=>{
        modal_imc.style.display = "block";
    });
    close_imc.addEventListener('click',()=>{
        modal_imc.style.display = "none";
        reponse_imc.innerHTML = '';
        taille_imc.value = '';
        poids_imc.value = '';
    });
    
    window.onclick = function(event) {
      if (event.target == modal_imc) {
        modal_imc.style.display = "none";
        reponse_imc.innerHTML = '';
        taille_imc.value = '';
        poids_imc.value = '';
      }
    }
}

//calcul imc
var taille_imc = document.getElementById('taille_imc');
var poids_imc = document.getElementById('poids_imc');
var reponse_imc = document.querySelector('.reponse_imc');
var btn_imc = document.getElementById('btn_calcul_imc');

if(btn_imc!=null){
    btn_imc.addEventListener('click',()=>{
        let value_taille = taille_imc.value*0.01;
        let value_poids = poids_imc.value;
        let carre_taille =value_taille*value_taille;
        console.log(value_poids);
        console.log(carre_taille);
        let reponse = value_poids/carre_taille;
        console.log(reponse.toFixed(1));
        reponse_imc.innerHTML=reponse.toFixed(1);
        reponse_imc.style.color = 'red';
        reponse_imc.style.fontSize = '20px';
        reponse_imc.style.fontWeight = 'bold';
    });
}