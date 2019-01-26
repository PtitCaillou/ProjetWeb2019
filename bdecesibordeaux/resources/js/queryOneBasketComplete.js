var request = new XMLHttpRequest();
var url = "http://siteweb:3000/baskets/complete/" + document.currentScript.getAttribute('id');
request.open('GET', url);
request.onload = function () {
    var data = JSON.parse(this.response);
    data.forEach(basket => {
        document.getElementById('basket').insertAdjacentHTML('beforeend', "<tr><td>"
            + basket.lastname + "</td><td>"
            + basket.username + "</td><td>"
            + basket.name + "</td><td>"
            + basket.quantity + "</td></tr>");
    });
}

request.send();