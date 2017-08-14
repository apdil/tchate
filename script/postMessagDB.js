document.querySelector('#submit').addEventListener('click', function (e) {
    e.preventDefault();
    let message = document.querySelector('#message').value;

    let now = new Date(); // create date HH/min/s
    let hh = now.getHours();
    let min = now.getMinutes();
    let sec = now.getSeconds();
    now = hh + 'h ' + min + 'm ' + sec + 's';

    fetch('Controller/postMessageDb.php?message='+message+'&date='+now).then(function(reponse){
        return reponse.text();
    }).then(function(txt){
        console.log(txt);
    }).catch(function(err){
        console.log(err);
    });

});