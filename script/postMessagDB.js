document.querySelector('#submit').addEventListener('click', function (e) {
    e.preventDefault();
    let message = document.querySelector('#message').value;

    let now = new Date(); // create date HH/min/s
    let hh = now.getHours();
    let min = now.getMinutes();
    let sec = now.getSeconds();
    now = hh + 'h ' + min + 'm ' + sec + 's';

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (event) {
        // XMLHttpRequest.DONE === 4
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                let object = JSON.parse(this.responseText);
                console.log(object.login)
                fetch('Controller/postMessageDb.php?message=' + message + '&date=' + 
                now+'&nom='+object.login).then(function (reponse) {
                    return reponse.text();
                }).then(function (txt) {
                    console.log(txt);
                }).catch(function (err) {
                    console.log(err);
                });

            } else {
                console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
            }
        }
    };

    xhr.open('GET', 'Controller/displaySessionUser.php', true);
    xhr.send(null);


});