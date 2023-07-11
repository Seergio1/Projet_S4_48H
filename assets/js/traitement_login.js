function getXHR() {
	let xhr;
	try {
		xhr = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e2) {
			try {
				xhr = new XMLHttpRequest();
			} catch (e3) {
				xhr = false;
			}
		}
	}
	return xhr;
}
function login_front_office(){
    var login_front_office = document.getElementById('demo-form_1');
    var formData = new FormData();
	formData.append('objectif',value_objectif);
	formData.append('genre',value_genre);
	formData.append('age',value_age);
	formData.append('poids_actuel',value_poids_actuel);
	formData.append('taille',value_taille);
	formData.append('restriction_alimentaire',tab_restriction_alimentaire);
	formData.append('maladie',tab_maladie);
	formData.append('frequence_sport',value_frequence_sport);
	formData.append('nbr_repas',value_nbr_repas_jour);
	formData.append('argent',value_argent);
	formData.append('rythme',value_rythme);
	formData.append('poids_ideal',value_poids_ideal);
	formData.append('name',value_name);
	formData.append('email',value_email);
	formData.append('password',value_password);
	formData.append('dtn',value_dateN);
	let xhr = getXHR();
	xhr.onreadystatechange = function () {

		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				var retour = xhr.responseText;
                if(retour!=null){
                    // if(retour==){

                    // }else{
                    //     //erreur
                    //     Swal.fire({
                    //         title: 'Login non validé',
                    //         text: "",
                    //         icon: 'error'
                    //     });
                    // }
                }
                
			} else {
				console.log(xhr.status);
			}
			
		};
		xhr.addEventListener("error", function (event) {
			alert("Oups! Quelque chose s'est mal passé lors de la publication .");
		});
		xhr.open("POST","",true);

		xhr.send(formData);
	}
}
function inscription_front_office(){
    var inscription_front_office = document.getElementById('demo-form_2');
    var formData = new FormData(inscription_front_office);
	let xhr = getXHR();
	xhr.onreadystatechange = function () {

		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				var retour = xhr.responseText;
                if(retour!=null){
                    // if(retour==){

                    // }else{
                    //     //erreur
                    //     Swal.fire({
                    //         title: 'Inscription non validé',
                    //         text: "",
                    //         icon: 'error'
                    //     });
                    // }
                }
			} else {
				console.log(xhr.status);
			}
			
		};
		xhr.addEventListener("error", function (event) {
			alert("Oups! Quelque chose s'est mal passé lors de la publication .");
		});
		xhr.open("POST","",true);

		xhr.send(formData);
	}
}
function login_back_office(){
    var login_back_office = document.getElementById('form_back_office');
    var formData = new FormData(login_back_office);
	let xhr = getXHR();
	xhr.onreadystatechange = function () {

		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				var retour = xhr.responseText;
                if(retour!=null){
                    // if(retour==){

                    // }else{
                    //     //erreur
                    //     Swal.fire({
                    //         title: 'Login non validé',
                    //         text: "",
                    //         icon: 'error'
                    //     });
                    // }
                }
			} else {
				console.log(xhr.status);
			}
			
		};
		xhr.addEventListener("error", function (event) {
			alert("Oups! Quelque chose s'est mal passé lors de la publication .");
		});
		xhr.open("POST","",true);

		xhr.send(formData);
	}
}

var btn_log_back_office = document.getElementById('btn_log_back_office');
var btn_log_front_office = document.getElementById('btn_log_front_office');
var btn_inscri_front_office = document.getElementById('btn_inscri_front_office');



btn_inscri_front_office.addEventListener('click',()=>{
		console.log("bouton");
		getLogin();
		console.log(value_age);
		console.log(value_argent);
		console.log(value_frequence_sport);
		console.log(value_nbr_repas_jour);
		console.log(tab_restriction_alimentaire);
		console.log(value_taille);
		console.log(value_rythme);
		console.log(value_genre);
		console.log(tab_restriction_alimentaire);
		console.log(value_poids_ideal);
		console.log(value_objectif);
		console.log(value_poids_actuel);
		console.log(value_name);
		console.log(value_email);
		console.log(value_password);
		console.log(value_dateN);
        login_front_office();
    });


