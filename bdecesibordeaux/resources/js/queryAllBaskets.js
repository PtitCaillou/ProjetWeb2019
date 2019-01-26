var request = new XMLHttpRequest();
request.open('GET', 'http://siteweb:3000/baskets');
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