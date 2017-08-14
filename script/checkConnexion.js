
let login = document.querySelector('#connectLogin');
let mdp = document.querySelector('#connectMdp');

document.querySelector('#connectButt').addEventListener('click', function (e) {
    e.preventDefault();

    fetch('Controller/checkConnexion.php?login='+login.value+'&mdp='+mdp.value).then(function (reponse) {
        return reponse.text();
    }).then(function (txt) {
        if(txt === 'succes'){
            window.location = 'tchat.html';
        }
        console.log(txt);
    }).catch(function (err) {
        console.log(err);
    })
    login.value = '';
    mdp.value = '';
});