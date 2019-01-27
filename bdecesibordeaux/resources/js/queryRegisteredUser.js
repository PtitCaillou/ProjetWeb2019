var request = new XMLHttpRequest();
request.open('GET', 'http://siteweb:3000/registeredusers/' + document.currentScript.getAttribute('id'));
request.onload = function () {
    var data = JSON.parse(this.response);
    data.forEach(user => {
        document.getElementById('user').insertAdjacentHTML('beforeend', "<tr><td>"
            + user.lastname + "</td><td>"
            + user.name + "</td><td>"
            + user.email + "</td></tr>");
    });
}

request.send();