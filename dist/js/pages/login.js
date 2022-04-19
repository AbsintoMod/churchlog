const inputUser = document.querySelector('#user');
const inputPass = document.querySelector('#pass');
const btnSub = document.querySelector('#btnSub');
const formLogin = document.querySelector('.validate-form');


btnSub.addEventListener("click",(e)=>{
    var checkUser = false;
    var checkPass = false;

    e.preventDefault()

    if(inputUser.value.trim() == ''){
        showValidate(inputUser);    
    }else{
        checkUser = true;
        hideValidate(inputUser);
    }

    if (inputPass.value.trim() == '') {
        showValidate(inputPass);
    }else{
        checkPass = true;
        hideValidate(inputPass)
    }

    if (checkPass === true && checkUser === true) {
        formLogin.submit();
    }
});



$('.validate-form .input100').each(function(){
    $(this).focus(function(){
        hideValidate(this);
    });
});

function showValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).addClass('alert-validate');
}

function hideValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).removeClass('alert-validate');
}

