var express = require('express');
var bodyParser = require("body-parser");
var mysql = require('mysql');
var hostname = 'localhost';
var port = 3000;
var app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

var pool = mysql.createPool({
    connectionLimit: 100,
    host: "localhost",
    user: "web",
    password: "projet",
    database: 'bde_cesi_bordeaux',
    debug: false
});

//Query all users
var queryAllUsers = "SELECT lastname, name, email, role_id FROM User";
//Query one specific user
var queryOneUser = "SELECT lastname, name, email, role_id FROM User WHERE id = ";
//Query all events
var queryAllEvents = "SELECT event.name, event.description, eventtype.type, eventstatus.status, media.path, user.name, user.lastname FROM event INNER JOIN eventtype ON event.eventtype_id = eventtype.id INNER JOIN eventstatus ON event.eventstatus_id = eventstatus.id INNER JOIN media ON event.media_id = media.id INNER JOIN user ON event.user_id = user.id ";
//Query one specific event
var queryOneEvent = "SELECT event.name, event.description, eventtype.type, eventstatus.status, media.path, user.name, user.lastname FROM event INNER JOIN eventtype ON event.eventtype_id = eventtype.id INNER JOIN eventstatus ON event.eventstatus_id = eventstatus.id INNER JOIN media ON event.media_id = media.id INNER JOIN user ON event.user_id = user.id WHERE event.id = ";
//Query a list of user that have registered to an upcoming event
var queryRegisteredUsers = "SELECT user.name, user.lastname FROM User INNER JOIN eventinterraction ON user.id = eventinterraction.user_id WHERE eventinterraction.interractiontype_id = 5 AND eventinterraction.event_id = ";
//Query all baskets
var queryAllBaskets = "SELECT user.lastname, user.name, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id";
//Query all complete baskets
var queryAllBasketsComplete = "SELECT user.lastname, user.name, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 1";
//Query all uncomplete baskets
var queryAllBasketsUncomplete = "SELECT user.lastname, user.name, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 0";
//Query all baskets of one user
var queryOneBasketUser = "SELECT user.lastname, user.name, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE user.id = ";
//Query all complete baskets of one user
var queryOneBasketsUncomplete = "SELECT user.lastname, user.name, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 1 AND user.id = ";
//Query all uncomplete baskets of one user
var queryOneBasketComplete = "SELECT user.lastname, user.name, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 0 AND user.id = ";



function handle_database(req, res, opt) {
    pool.getConnection(function (err, connection) {
        if (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        }
        console.log('connected as id ' + connection.threadId);

        if (opt == 0) { //List all users
            connection.query(queryAllUsers, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 1) { //Get one user
            connection.query(queryOneUser + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 2) { //List all events
            connection.query(queryAllEvents, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 3) { //Get one event and his info
            connection.query(queryOneEvent + req.params.event_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 4) { //List all users of an event
            connection.query(queryRegisteredUsers + req.params.event_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 5) { //Get all baskets
            connection.query(queryAllBaskets, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 6) { //Get one basket complete
            connection.query(queryOneBasketComplete + req.params.basket_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 7) { //Get all baskets uncomplete
            connection.query(queryAllBasketsUncomplete, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 8) { //Get one basket Uncomplete
            connection.query(queryOneBasketUncomplete + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 9) { //Get all baskets of one user
            connection.query(queryOneBasketUser + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 10) { //Get all baskets complete of one user
            connection.query(queryOneBasketComplete + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 11) { //Get all baskets uncomplete of one user
            connection.query(queryOneBasketUncomplete + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        }


        connection.on('error', function (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        });
    });
}



var myRouter = express.Router();

myRouter.route('/users').get(function (req, res) {
    handle_database(req, res, 0);
})

myRouter.route('/users/:user_id').get(function (req, res) {
    handle_database(req, res, 1);
})

myRouter.route('/events').get(function (req, res) {
    handle_database(req, res, 2);
})

myRouter.route('/events/:event_id').get(function (req, res) {
    handle_database(req, res, 3);
})

myRouter.route('/registeredusers/:event_id').get(function (req, res) {
    handle_database(req, res, 4);
})

myRouter.route('/baskets').get(function (req, res) {
    handle_database(req, res, 5);
})

myRouter.route('/baskets/complete').get(function (req, res) {
    handle_database(req, res, 6);
})

myRouter.route('/baskets/uncomplete').get(function (req, res) {
    handle_database(req, res, 7);
})

myRouter.route('/baskets/:user_id').get(function (req, res) {
    handle_database(req, res, 9);
})

myRouter.route('/baskets/complete/:user_id').get(function (req, res) {
    handle_database(req, res, 10);
})

myRouter.route('/baskets/uncomplete/:user_id').get(function (req, res) {
    handle_database(req, res, 11);
})

app.use(myRouter);

var server = app.listen(port, hostname, function () {
    console.log("Server is up on http://" + hostname + ":" + port + "\n");
});