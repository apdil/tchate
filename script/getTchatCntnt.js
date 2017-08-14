let displayTchat = document.querySelector('#displayMessg');

setInterval(function(){
    fetch('Controller/checkMessages.php').then(function (reponse) {
        return reponse.json();
    }).then(function (json) {
        putMessages(json);
    }).catch(function (err) {
        console.log(err.message);
    })
    displayTchat.scrollTop = displayTchat.scrollHeight;
}, 500);


function putMessages(object) {
    for (let message of object) {
        let div = document.createElement('div');
        let h5 = document.createElement('h5');
        let p = document.createElement('p');
        let date = document.createElement('p');

        h5.textContent = message.user;
        p.textContent = message.comment;
        date.textContent = message.date;

        div.appendChild(h5);
        div.appendChild(p);
        div.appendChild(date);

        displayTchat.appendChild(div);
    }
}