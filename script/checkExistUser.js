let checkLogin = document.querySelector('#creatLogin');

fetch('Controller/checkLogin.php').then(function(reponse){
    return reponse.json();
}).then(function(json){
    for(let indexArray of json){
        if(indexArray.login === checkLogin.value){
            checkLogin.classList = 'alertBackground'
        }
    }
})