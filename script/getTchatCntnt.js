let displayTchat = document.querySelector('#displayMessg');
let oldMessag = [];

let xhr = new XMLHttpRequest();

let intervalID = setInterval(function () {
xhr.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            let reponse = this.responseText;
            if (reponse != '') { // if database is empty
                let object = JSON.parse(reponse);
                if (object !== oldMessag[oldMessag.length - 1]) {
                    oldMessag.push(object);
                    displayTchat.innerHTML = "";
                    for (let commentObject of object) {
                        putMessages(commentObject); // inner displayTchate display message
                    }
                    displayTchat.scrollTop = displayTchat.scrollHeight;
                }
            }
            // document.querySelector('#displayTchat').addEventListener('scroll', function () {
            //     clearInterval(intervalID);
            // });
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};
xhr.open('GET', 'Controller/checkMessages.php', true);
xhr.send(null);
}, 500);


function putMessages(object) {
    let div = document.createElement('div');
    let h5 = document.createElement('h5');
    let p = document.createElement('p');
    let date = document.createElement('p');

    h5.textContent = object.user;
    p.textContent = object.comment;
    date.textContent = object.date;

    div.appendChild(h5);
    div.appendChild(p);
    div.appendChild(date);

    displayTchat.appendChild(div);
}