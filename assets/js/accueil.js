function frame() {
		var height = window.innerHeight;
		var a_left = document.querySelector(".box_rubrique");
		var content_accueil = document.querySelector(".content_accueil");
		var head_acceuil = document.querySelector(".head_acceuil");
		var item_content = document.querySelector('.item-content');
		
		var css = getComputedStyle(head_acceuil).height;
		var height_head_accueil = css.replace('px',"");

		var height_temp = height-height_head_accueil;
		content_accueil.style.maxHeight = height_temp+"px";
		a_left.style.height = height+"px";
		// item_content.style.height = height+"px";
	}

	window.addEventListener('resize',()=>{
		frame();
	});
	frame();
	
	var rubrique_item = document.querySelectorAll(".rubrique_item");
	var rubrique_icon = document.querySelectorAll(".rubrique_item i");
	var rubrique_text = document.querySelectorAll(".rubrique_text");

	rubrique_item.forEach((item,index)=>{
		item.addEventListener('mouseover', ()=>{
				item.style.background = '#ffffff4a';
				rubrique_icon[index].style.color = 'rgb(145, 127, 187);';
				rubrique_text[index].style.color = 'rgb(145, 127, 187);';
		});
	});

	rubrique_item.forEach((item,index)=>{
		item.addEventListener('mouseout', ()=>{
				item.style.background = 'transparent';
				rubrique_icon[index].style.color = 'white';
				rubrique_text[index].style.color = 'white';
		});
	});



	

var icon_nav = document.getElementById("icon_nav");
var rubrique_text = document.querySelectorAll(".rubrique_text");
var left = document.querySelector(".accueil_left");
var right = document.querySelector(".accueil_right");
	icon_nav.addEventListener('click',()=>{
		
		if (icon_nav.style.transform == 'rotate(180deg)') {
			icon_nav.style.transform = 'rotate(0deg)';
			rubrique_text.forEach((item)=>{
				item.style.display = 'block';
			});
			left.style.width = '20%';
			right.style.width = '80%';
		}else {
			icon_nav.style.transform = 'rotate(180deg)';
			rubrique_text.forEach((item)=>{
				item.style.display = 'none';
			});
			left.style.width = '6%';
			right.style.width = '94%';
		}
		
	});



	















