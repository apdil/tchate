
function doAjax(options) {

    let defaults = {
        url: '', method: 'GET', async: true, args: '',
        callback: function () { }, callbackError: function () { }
    };

    assignArgs(options, defaults);

    let ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {
        if (ajax.status === 200 || ajax.status === 304) {
            if (ajax.readyState === 4) {
                defaults.callback(ajax.response);
            } else {
                defaults.callbackError();
            }
        }
    };

    ajax.open(defaults.method, defaults.url, defaults.async);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(defaults.args);
}

Object.hasOwn
function assignArgs(source, target){
    for(let clef in source){
        if(target.hasOwnProperty(clef)) {
            target[clef] = source[clef];
        }
    }
}