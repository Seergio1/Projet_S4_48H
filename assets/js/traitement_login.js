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
    var formData = new FormData(login_front_office);
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
if(btn_log_back_office!=null){
    btn_log_back_office.addEventListener('click',()=>{
        login_back_office();
    });
}
if(btn_log_front_office!=null){
    btn_log_front_office.addEventListener('click',()=>{
        login_front_office();
    });
}
if(btn_inscri_front_office!=null){
    btn_inscri_front_office.addEventListener('click',()=>{
        inscription_front_office();
    });
}
