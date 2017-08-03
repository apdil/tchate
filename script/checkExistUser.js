let checkLogin = document.querySelector('#creatLogin');
let creatButt = document.querySelector('#creatButt');

setInterval(function () {
    fetch('Controller/checkLogin.php').then(function (reponse) {
        return reponse.json();
    }).then(function (json) { // get user object with only login
        for (let indexArray of json) {
            if (indexArray.login === checkLogin.value) { 
                checkLogin.classList = 'alertBackground';
                creatButt.disabled = 'disabled';
                break;
            } else {
                checkLogin.classList.remove('alertBackground');
                creatButt.removeAttribute('disabled');
            }
        }
    })
}, 500);