var btn_code = document.querySelector('.modal-content input');

if(btn_code!=null){
    btn_code.addEventListener('input',()=>{
        console.log(btn_code.value);
    });
}


