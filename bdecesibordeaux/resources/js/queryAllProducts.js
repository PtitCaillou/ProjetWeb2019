var request = new XMLHttpRequest();
request.open('GET', 'http://siteweb:3000/products');
request.onload = function () {
    var data = JSON.parse(this.response);
    data.forEach(product => {
        document.getElementById('product').insertAdjacentHTML('beforeend', "<tr><td>"
            + product.name + "</td><td>"
            + product.description + "</td><td>"
            + product.price + "</td><td>"
            + product.type + "</td></tr>");
    });
}

request.send();