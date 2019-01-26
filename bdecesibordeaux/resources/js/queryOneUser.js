var request = new XMLHttpRequest();
var url = "http://siteweb:3000/users/" + document.currentScript.getAttribute('id');
request.open('GET', url);
request.onload = function () {
    var data = JSON.parse(this.response);
    data.forEach(user => {
        document.getElementById('user').insertAdjacentHTML('beforeend', "<tr><td>"
            + user.lastname + "</td><td>"
            + user.name + "</td><td>"
            + user.email + "</td><td>"
            + user.role_id + "</td></tr>");
    });
}

request.send();