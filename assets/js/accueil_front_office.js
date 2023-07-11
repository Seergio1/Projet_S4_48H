const menuBtn = document.querySelector(".menu-icon span");
const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const form = document.querySelector("form");
/*pour faire apparaitre le menu cacher*/
menuBtn.onclick = ()=>{
	items.classList.add("active");
	menuBtn.classList.add("hide");
	searchBtn.classList.add("hide");
	cancelBtn.classList.add("show");
}
/*pour faire disparaitre le menu cacher*/
cancelBtn.onclick = ()=>{
	items.classList.remove("active");
	menuBtn.classList.remove("hide");
	searchBtn.classList.remove("hide");
	cancelBtn.classList.remove("show");
	form.classList.remove("active");
}

searchBtn.onclick = ()=>{
	form.classList.add("active");
	searchBtn.classList.add("hide");
	cancelBtn.classList.add("show");
}

var btn = document.querySelector('.recharger');
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
if(btn!=null){
	btn.addEventListener('click',()=>{
		modal.style.display = "block";
	});
	span.addEventListener('click',()=>{
		modal.style.display = "none";
	});
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
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
}


window.onclick = function(event) {
  if (event.target == modal_poids) {
    modal_poids.style.display = "none";
  }
}