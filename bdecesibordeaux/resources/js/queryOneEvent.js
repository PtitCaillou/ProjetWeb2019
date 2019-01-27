var request = new XMLHttpRequest();
var url = "http://siteweb:3000/events/" + document.currentScript.getAttribute('id');
request.open('GET', url);
request.onload = function () {
    var data = JSON.parse(this.response);
    data.forEach(event => {
        document.getElementById('event').insertAdjacentHTML('beforeend', "<tr><td>"
            + event.name + "</td><td>"
            + event.eventtype + "</td><td>"
            + event.description + "</td><td>"
            + event.status + "</td><td>"
            + event.path + "</td><td>"
            + event.username + "</td><td>"
            + event.lastname + "</td></tr>");
    });
}

request.send();