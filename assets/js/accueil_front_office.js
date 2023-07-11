

//modal recharger porte_monnaie
var btn = document.querySelector('.recharger');
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close_monnaie")[0];
if (btn!=null) {
	btn.addEventListener('click',()=>{
		modal.style.display = "block";
	});
	span.addEventListener('click',()=>{
		modal.style.display = "none";
	});
	
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
}


// modal modif poids
var btn_poids = document.querySelector('.modif_perso i');
var modal_poids = document.getElementById("modal_poids");
var close = document.getElementsByClassName("close")[0];
if(btn_poids!=null){
	btn_poids.addEventListener('click',()=>{
		modal_poids.style.display = "block";
	});
	close.addEventListener('click',()=>{
		modal_poids.style.display = "none";
	});
	
	window.onclick = function(event) {
	  if (event.target == modal_poids) {
		modal_poids.style.display = "none";
	  }
	}
	
}



