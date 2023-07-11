    const menus = document.querySelectorAll(".one-menu");
    menus.forEach((menu) =>{
        menu.addEventListener("click", ()=> {
            menus.forEach((menu)=>{
                menu.classList.remove("active");
            });
            menu.classList.add("active");
        })
    });


var form1 = document.querySelector(".formular5");
var fermer = document.querySelector(".fermer");
fermer.addEventListener("click", () => {
    form1.classList.remove("active");
});
// 
    var sup = document.querySelectorAll(".supprimer");
    var form = document.querySelector(".formular6");
    sup.forEach(supp => {
        supp.addEventListener("click", () => {
            form.classList.toggle("active");
        });
    });  

    var mod = document.querySelectorAll(".ajout_regime");
    var form1 = document.querySelector(".formular5 ");
    mod.forEach(mods => {
        mods.addEventListener("click", () => {
            form1.classList.toggle("active");
            // sup.classList.add("active");
        });
    });


    // choix plats
    let choix_1 =`
                <div class="choix_1">
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="1" type="checkbox">
                    </div>
                    <div class="text">Plat 1</div>
                </div>
                <input type="button" id="btn_plat1" value="Valider">
                </div>
               
    `;
    let choix_2 =`
               <div class="choix_2">
                <div class="one-plat">
                    <div class="input">
                        <input value="2" type="checkbox">
                    </div>
                    <div class="text">Plat 2</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="2" type="checkbox">
                    </div>
                    <div class="text">Plat 2</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="2" type="checkbox">
                    </div>
                    <div class="text">Plat 2</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="2" type="checkbox">
                    </div>
                    <div class="text">Plat 2</div>
                </div>
                <input type="button" id="btn_plat2" value="Valider">
                </div>
               
    `;
    let choix_3 =`
               <div class="choix_3">
                <div class="one-plat">
                    <div class="input">
                        <input value="3" type="checkbox">
                    </div>
                    <div class="text">Plat 3</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="3" type="checkbox">
                    </div>
                    <div class="text">Plat 3</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="3" type="checkbox">
                    </div>
                    <div class="text">Plat 3</div>
                </div>
                <div class="one-plat">
                    <div class="input">
                        <input value="3" type="checkbox">
                    </div>
                    <div class="text">Plat 3</div>
                </div>
                <input type="button" id="btn_plat3" value="Valider">
                </div>
               
    `;
var choice_content = document.querySelector('.choix');
var btn_plat1;
var btn_plat2;
var btn_plat3;
var btn_plat4;
var btn_plat5;
var allPlat1;
var allPlat2;
var allPlat3;
var allPlat4;
var allPlat5;

var valuePlat = [];
var valuePlat1 = [];
var valuePlat2 = [];
var valuePlat3 = [];
var valuePlat4 = [];


function changeBody(params) {
    
    if (params==0) {
        choice_content.innerHTML='';
        choice_content.innerHTML=choix_1;
         btn_plat1 = document.getElementById('btn_plat1');
         allPlat1 = document.querySelectorAll('.choix_1 .one-plat input');
         btn_plat1.addEventListener('click',()=>{
        allPlat1.forEach((element,i)=>{
            if (element.checked) {
                console.log(element.value);
                valuePlat.push(element.value);
            }
        });
    });
}
     else if(params==1) {
        choice_content.innerHTML='';
        choice_content.innerHTML=choix_2;
         btn_plat2 = document.getElementById('btn_plat2');
         allPlat2 = document.querySelectorAll('.choix_2 .one-plat input');
         btn_plat2.addEventListener('click',()=>{
        allPlat2.forEach((element,i)=>{
            if (element.checked) {
                console.log(element.value);
                valuePlat1.push(element.value);
            }
        });
    });
    }else if(params==2) {
        choice_content.innerHTML='';
        choice_content.innerHTML=choix_3;
         btn_plat3 = document.getElementById('btn_plat3');
         allPlat3 = document.querySelectorAll('.choix_3 .one-plat input');
         btn_plat3.addEventListener('click',()=>{
        allPlat3.forEach((element,i)=>{
            if (element.checked) {
                console.log(element.value);
                valuePlat2.push(element.value);
            }
        });
    });
    }else if(params==3) {
        choice_content.innerHTML='';
        choice_content.innerHTML=choix_3;
         btn_plat4 = document.getElementById('btn_plat4');
         allPlat4 = document.querySelectorAll('.choix_4 .one-plat input');
         btn_plat4.addEventListener('click',()=>{
        allPlat4.forEach((element,i)=>{
            if (element.checked) {
                console.log(element.value);
                valuePlat3.push(element.value);
            }
        });
    });
    }else if(params==4) {
        choice_content.innerHTML='';
        choice_content.innerHTML=choix_3;
         btn_plat5 = document.getElementById('btn_plat5');
         allPlat5 = document.querySelectorAll('.choix_5 .one-plat input');
         btn_plat5.addEventListener('click',()=>{
        allPlat5.forEach((element,i)=>{
            if (element.checked) {
                console.log(element.value);
                valuePlat4.push(element.value);
            }
        });
    });
    }
}




