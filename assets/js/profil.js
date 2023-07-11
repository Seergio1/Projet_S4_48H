var etape = document.querySelectorAll('.etape');
var box_profil = document.querySelector('.box_profil');
var container_login = document.querySelector('.container');

// etape 1
var objectif;
var value_objectif;
var div = null;

//etape 2
var genre;
var value_genre;
var age;
var value_age;
var poids_actuel;
var value_poids_actuel;
var taille;
var value_taille;
var div2 = null;

// etape3
var restriction_alimentaire;
var tab_restriction_alimentaire = [];

//etape 4
var maladie;
var tab_maladie = [];

//etape 5
var frequence_sport;
var value_frequence_sport;

//etape 6
var nbr_repas_jour;
var value_nbr_repas_jour;
var div3 = null;

//etape 7
var argent;
var value_argent;
var div4 = null;

//etape 8
var rythtme_progression;
var value_rythme;
var poids_ideal;
var value_poids_ideal;

var username;
var email;
var password;
var dateN;

var value_name;
var value_email;
var value_password;
var value_dateN;

//etape login

function getObject_value(){
    for (let index = 0; index < objectif.length; index++) {
        if(objectif[index].style.border=="1px solid red"){
            value_objectif = objectif[index].getAttribute("value");
        }
        
    }
}
function getGenre_value(){
    for (let index = 0; index < genre.length; index++) {
        if(genre[index].style.border=="1px solid red"){
            value_genre = genre[index].getAttribute("value");
        }
    }
}
function getAlimentation_value(){
    console.log("taille: "+tab_restriction_alimentaire.length);
    for (let index = 0; index < restriction_alimentaire.length; index++) {
        if(restriction_alimentaire[index].style.border=="1px solid red"){
            // console.log("bonjour");
            if(index!=restriction_alimentaire.length-1){
                tab_restriction_alimentaire.push(restriction_alimentaire[index].getAttribute("value")); 
            }
        }
    }
}
function getMaladie_value(){
    for (let index = 0; index < maladie.length; index++) {
        if(maladie[index].style.border=="1px solid red"){
            if(index!=maladie.length-1){
                tab_maladie.push(maladie[index].getAttribute("value")); 
            }
        }
    }
}
function getNbrRepas_value(){
    for (let index = 0; index < nbr_repas_jour.length; index++) {
        if(nbr_repas_jour[index].style.border=="1px solid red"){
            value_nbr_repas_jour = nbr_repas_jour[index].getAttribute("value");
        }
        
    }
}
function getArgent_value(){
    for (let index = 0; index < argent.length; index++) {
        if(argent[index].style.border=="1px solid red"){
            value_argent = argent[index].getAttribute("value");
        }
        
    }
}
function  getLogin(){
    username = document.getElementById('username');
    email = document.getElementById('email');
    password = document.getElementById('password');
    dateN = document.getElementById('dtn');
    if(username.value!=null&&email.value!=null&&password.value!=null&&dateN.value!=null){
        value_name = username.value;
        value_email = email.value;
        value_password = password.value;
        value_dateN = dateN.value;
    }
    
}



getDataObjectif();
getDataEtape2();
getDataAlimentaire();
getDataMaladie();
getDataNbrRepas();
getDataArgent();
getDataEtape6();
getDataEtape7();





age = document.getElementById('age');
poids_actuel = document.getElementById('poids');
taille = document.getElementById('taille');
frequence_sport = document.getElementById('frequence_sport');
rythtme_progression = document.getElementById('rythme');
poids_ideal = document.getElementById('poids_ideal');




var suivant2 = document.getElementsByName('suivant2');
var precedent2 = document.getElementsByName('precedent2');
var suivant3 = document.getElementsByName('suivant3');
var precedent3 = document.getElementsByName('precedent3');
var suivant4 = document.getElementsByName('suivant4');
var precedent4 = document.getElementsByName('precedent4');
var suivant5 = document.getElementsByName('suivant5');
var precedent5 = document.getElementsByName('precedent5');
var suivant8 = document.getElementsByName('suivant8');
var precedent8 = document.getElementsByName('precedent8');


var div_erreur = document.querySelector('.age .erreur');
var div_erreur_taille = document.querySelector('.taille .erreur');
var div_erreur_poids_actuel = document.querySelector('.poids .erreur');
var div_erreur_frequence = document.querySelector('.frequence .erreur');
var div_erreur_poids_ideal = document.querySelector('.poids_ideal .erreur');

var check_age = 0;
var check_taille = 0;
var check_poids_actuel = 0;
var check_frequence = 0;
var check_poids_ideal = 0;
var check_rythme = 0;

rythtme_progression.addEventListener('input',()=>{
    value_rythme = rythtme_progression.value;
    if(value_rythme>=0){
            let poids_ideal_ = document.querySelector('.poids_ideal');
            poids_ideal_.style.display = 'flex';
            check_rythme = 1;
            
    }else{
        suivant8[0].style.display = 'none';
        check_rythme = 0;
    }
    if(check_poids_ideal+check_rythme==2){
        suivant8[0].style.display = 'block';
    }
});
poids_ideal.addEventListener('input',()=>{
    value_poids_ideal = poids_ideal.value;
    
    if(value_poids_ideal>=0&&value_poids_ideal!=null){
        
        if((value_objectif=='1'&&value_poids_ideal>=value_poids_actuel) || (value_objectif=='2'&&value_poids_ideal<=value_poids_actuel)){
            suivant8[0].style.display = 'none';
            check_poids_ideal = 0;
            div_erreur_poids_ideal.style.display = 'block';
            div_erreur_poids_ideal.innerHTML = "Votre objectif et votre poids ne corresponde pas";
        }else{
            suivant8[0].style.display = 'block';
            precedent8[0].style.display = 'block';
            check_poids_ideal = 1;
            div_erreur_poids_ideal.style.display = 'none';
        }
            
    }else{
        suivant8[0].style.display = 'none';
        check_poids_ideal = 0;
        div_erreur_poids_ideal.style.display = 'block';
    }
    if(check_poids_ideal+check_rythme==2){
        // getObject_value();
        // getGenre_value();
        // getAlimentation_value();
        // getMaladie_value();
        // getNbrRepas_value();
        // getArgent_value();
        suivant8[0].style.display = 'block';
    }
});
frequence_sport.addEventListener('input',()=>{
    value_frequence_sport = frequence_sport.value;
    if(value_frequence_sport>=0){
            let frequence_ = document.querySelector('.frequence');
            frequence_.style.display = 'flex';
            check_frequence = 1;
            div_erreur_frequence.style.display = 'none';
    }else{
        suivant5[0].style.display = 'none';
        precedent5[0].style.display = 'none';
        check_frequence = 0;
        
        div_erreur_frequence.style.display = 'block';
    }
    if(check_poids_actuel==1){
        suivant5[0].style.display = 'block';
        precedent5[0].style.display = 'block';
    }
});

age.addEventListener('input',()=>{
    value_age = age.value;
    if(value_age>=18&&value_age<=60){
            let taille = document.querySelector('.taille');
            taille.style.display = 'flex';
            check_age = 1;
            div_erreur.style.display = 'none';
    }else{
        suivant2[0].style.display = 'none';
        check_age = 0;
        
        div_erreur.style.display = 'block';
        if(value_age<18){
            div_erreur.innerHTML = "Vous devez être agé d'au moins 18 ans";
        }else{
            div_erreur.innerHTML = "Vous êtes trop agé pour suivre un régime";
        }
    }
    if(check_age+check_taille+check_poids_actuel==3){
        suivant2[0].style.display = 'block';
    }
});
taille.addEventListener('input',()=>{
    value_taille = taille.value;
    if(value_taille>=140&&value_taille<=250){
        let poids = document.querySelector('.poids');
        poids.style.display = 'flex';
        check_taille = 1;
        div_erreur_taille.style.display = 'none';
    }else{
        suivant2[0].style.display = 'none';
        check_taille = 0;
        div_erreur_taille.style.display = 'block';
    }
    if(check_age+check_taille+check_poids_actuel==3){
        suivant2[0].style.display = 'block';
    }
});
poids_actuel.addEventListener('input',()=>{
    value_poids_actuel = poids_actuel.value;
    if(value_poids_actuel>=30&&value_poids_actuel<=150){
        suivant2[0].style.display = 'block';
        precedent2[0].style.display = 'block';
        check_poids_actuel = 1;
        div_erreur_poids_actuel.style.display = 'none';
    }else{
        suivant2[0].style.display = 'none';
        check_poids_actuel = 0;
        div_erreur_poids_actuel.style.display = 'block';
    }
    if(check_age+check_taille+check_poids_actuel==3){
        suivant2[0].style.display = 'block';
    }
});


function suivant(num){

    if(num==7){
        etape[num].style.display='none';
        box_profil.style.opacity='0';
        box_profil.style.zIndex = '0';
        container_login.style.opacity='1';
        container_login.style.zIndex = '50';
    }else{
        etape[num].style.display='none';
        etape[num+1].style.display='flex';
    }
    
}

function precedent(num){
    etape[num].style.display='none';
    etape[num-1].style.display='flex';
}

function getDataEtape2(){
    genre = document.querySelectorAll('.box_genre div');
    genre.forEach((element,i) => {
        element.addEventListener('click',()=>{
            let age = document.querySelector('.age');
            age.style.display='flex';
            if(div2!=null){
                div2.style.border='none';
            }
            if(element.style.border == '1px solid red'){
                element.style.border='none';
                
            }else{
                element.style.border = '1px solid red';
                div2 = element;
            }
        });
    });
}
function getDataArgent(){
    argent = document.querySelectorAll('.box_argent div');
    argent.forEach((element,i) => {
        element.addEventListener('click',()=>{
            let suivant7 = document.getElementsByName('suivant7');
            let precedent7 = document.getElementsByName('precedent7');
            suivant7[0].style.display='block';
            precedent7[0].style.display='block';
            if(div4!=null){
                div4.style.border='none';
            }
            if(element.style.border == '1px solid red'){
                element.style.border='none';
                
            }else{
                element.style.border = '1px solid red';
                div4 = element;
            }
        });
    });
}

function getDataObjectif(){

        objectif = document.querySelectorAll('.e1 .etape_item');
        objectif.forEach((element,i) => {
            element.addEventListener('click',()=>{
                let suivant1 = document.getElementsByName('suivant1');
                suivant1[0].style.display='block';
                if(div!=null){
                    div.style.border='none';
                }
                if(element.style.border == '1px solid red'){
                    element.style.border='none';
                    
                }else{
                    element.style.border = '1px solid red';
                    div = element;
                }    
            });
        });
}
function getDataNbrRepas(){

    nbr_repas_jour = document.querySelectorAll('.e6 .etape_item');
    nbr_repas_jour.forEach((element,i) => {
        element.addEventListener('click',()=>{
            let suivant6 = document.getElementsByName('suivant6');
            let precedent6 = document.getElementsByName('precedent6');
            suivant6[0].style.display='block';
            precedent6[0].style.display='block';
            if(div3!=null){
                div3.style.border='none';
            }
            if(element.style.border == '1px solid red'){
                element.style.border='none';
                
            }else{
                element.style.border = '1px solid red';
                div3 = element;
            }    
        });
    });
}
var check_alimentaire = 0;
var aucun = document.querySelector('.aucun');
function getDataAlimentaire(){
    restriction_alimentaire = document.querySelectorAll('.e3 .etape_item');
    console.log("restriction : "+restriction_alimentaire.length);
    restriction_alimentaire.forEach((element,i) => {
        element.addEventListener('click',()=>{
            let suivant3 = document.getElementsByName('suivant3');
            let precedent3 = document.getElementsByName('precedent3');
            suivant3[0].style.display='block';
            precedent3[0].style.display = 'block';
            check_alimentaire = 1;
            if(element.getAttribute('value')==aucun.getAttribute("value")){//aucune
                restriction_alimentaire[restriction_alimentaire.length-1].style.border = 'red';
                for (let index = 0; index < restriction_alimentaire.length-1; index++) {
                    restriction_alimentaire[index].style.border = 'none';
                }
            }else{
                restriction_alimentaire[restriction_alimentaire.length-1].style.border = 'none';
            }
            if(element.style.border == '1px solid red'){
                element.style.border='none';
                check_alimentaire = 0;
                suivant3[0].style.display='none';
            }else{
                element.style.border = '1px solid red';
                check_alimentaire = 1;
            }
            if(check_alimentaire ==1){
                suivant3[0].style.display='block';
            }
        });
    });
}
var check_maladie = 0;
var aucun2 = document.querySelector('.aucun2');
function getDataMaladie(){

    maladie = document.querySelectorAll('.e4 .etape_item');
    console.log("maladie: "+maladie.length);
    maladie.forEach((element,i) => {
        element.addEventListener('click',()=>{
            let suivant4 = document.getElementsByName('suivant4');
            let precedent4 = document.getElementsByName('precedent4');
            suivant4[0].style.display='block';
            precedent4[0].style.display = 'block';
            check_maladie = 1;
            if(element.getAttribute('value')==aucun2.getAttribute("value")){//aucune
                maladie[maladie.length-1].style.border = 'red';
                for (let index = 0; index < maladie.length-1; index++) {
                    maladie[index].style.border = 'none';
                }
            }else{
                maladie[4].style.border = 'none';
            }
            if(element.style.border == '1px solid red'){
                element.style.border='none';
                check_maladie = 0;
                suivant4[0].style.display='none';
            }else{
                element.style.border = '1px solid red';
                check_maladie = 1;
            }
            if(check_maladie ==1){
                suivant4[0].style.display='block';
            }
        });
    });
}
function getDataEtape6(){
    nbr_repas_jour = document.querySelectorAll('.e6 .etape_item');
    nbr_repas_jour.forEach((element,i) => {
        element.addEventListener('click',()=>{
            if(div3!=null){
                div3.style.border='none';
            }
            if(element.style.border == '1px solid red'){
                element.style.border='none';
                
            }else{
                element.style.border = '1px solid red';
                div3 = element;
            }
        });
    });
}
function getDataEtape7(){
    argent = document.querySelectorAll('.box_argent div');
    argent.forEach((element,i) => {
        element.addEventListener('click',()=>{
            if(div4!=null){
                div4.style.border='none';
            }
            if(element.style.border == '1px solid red'){
                element.style.border='none';
                
            }else{
                element.style.border = '1px solid red';
                div4 = element;
            }
        });
    });
}
function isIn(tab,element){
    for (let index = 0; index < tab.length; index++) {
        if(tab[index]==element){
            return true
        }  
    }
    return false;
}

