
let login = document.querySelector('#connectLogin');
let mdp = document.querySelector('#connectMdp');

document.querySelector('#connectButt').addEventListener('click', function(e){
    e.preventDefault();

    let init = {
        method: 'POST',
        body: JSON.stringify({
            login: login.value,
            mdp: mdp.value
        })
    };

    fetch('Controller/checkConnexion.php', init).then(function(reponse){
        return reponse.text();
    }).then(function(txt){
        console.log(txt);
    }).catch(function(err){
        console.log(err);
    })
});