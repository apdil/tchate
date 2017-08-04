let displayTchat = document.querySelector('#displayTchat');

fetch('Controller/checkMessages.php').then(function(reponse){
    return reponse.json();
}).then(function(json){
    putMessages(json);
}).catch(function(err){
    console.log(err.message);
})

function putMessages(object){
    for(let message of object){
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