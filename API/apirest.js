var express = require('express'),
    app = express();
var hostname = 'siteweb';
var bodyParser = require("body-parser");
var port = 3000;
var routes = require("./routes/route.js");

/*
app.use(function (req, res) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-with, Content-Type, Accept");
});*/


app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
routes(app);

var server = app.listen(port, hostname, function () {
    console.log("Server is up on http://" + hostname + ":" + port + "\n");
});