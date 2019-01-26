var request = new XMLHttpRequest();
request.open('GET', 'http://siteweb:3000/medias');
request.onload = function () {
    var data = JSON.parse(this.response);
    data.forEach(media => {
        document.getElementById('media').insertAdjacentHTML('beforeend', "<tr><td>"
            + media.path + "</td><td>"
            + media.description + "</td><td>"
            + media.name + "</td><td>"
            + media.lastname + "</td></tr>");
    });
}

request.send();