var mysql = require('mysql');
var htmltopdf = require('html-pdf');
var archiver = require('archiver');
var fs = require('fs');

var pool = mysql.createPool({
    connectionLimit: 100,
    host: "localhost",
    user: "web",
    password: "projet",
    database: 'bde_cesi_bordeaux',
    debug: false
});

const JsonToCsv = (response, data, id) => {
    var text = "name,lastname,email \n";
    var path = "./csv/output" + id + ".csv";
    for (var i = 0; i < data.length; i++) { text += data[i].name + "," + data[i].lastname + "," + data[i].email + "\n"; }
    fs.writeFileSync(path, text);
    response.download(path);
}

function JsonToPdf(response, data, id) {
    var html = "<ul><li>Participants: </li>";
    var path = "./pdf/output" + id + ".pdf";
    var config = { format: 'A4' };

    for (var i = 0; i < data.length; i++) { html += "<ul><li>Prénom: " + data[i].name + "</li><li>Nom: " + data[i].lastname + "</li><li>Email: " + data[i].email + "</li></ul>"; }
    html += "<li>Number of members: " + data.length + "</li></ul>";
    htmltopdf.create(html, { format: 'A4' }).toFile(path, function (err, res) {
        if (!err) { response.download(path); }
    })
}

//HAVE TO TRY THIS
function DownloadAlbum(response, data, id) {
    var path = './album/album' + id + '.zip';
    var output = fs.createWriteStream(path);
    var archive = archiver('zip', { zlib: { level: 9 } });

    for (var i = 0; i < data.length; i++) {
        console.log(data[i].path);
        archive.file(data[i].path);
    }

    output.on('end', function () {
        console.log('Data has been drained');
        response.download(path);
        console.log('Archive has been download');
    });

    archive.finalize();
}



//Query all users
var queryAllUsers = "SELECT lastname, name, email, role_id FROM User";
//Add one user
var addOneUser = "INSERT INTO user (lastname, name, email, password, role_id) VALUES (\"";
//Query one user
var queryOneUser = "SELECT lastname, name, email, role_id FROM User WHERE id = ";
//Query all events
var queryAllEvents = "SELECT event.name, event.description, eventtype.type AS eventtype, eventstatus.status, media.path, user.name AS username, user.lastname FROM event INNER JOIN eventtype ON event.eventtype_id = eventtype.id INNER JOIN eventstatus ON event.eventstatus_id = eventstatus.id INNER JOIN media ON event.media_id = media.id INNER JOIN user ON event.user_id = user.id ";
//Add one event
var addOneEvent = "INSERT INTO user (name, description, eventtype_id, eventstatus_id, media_id, user_id) VALUES (\"";
//Query one event
var queryOneEvent = "SELECT event.name, event.description, eventtype.type AS eventtype, eventstatus.status, media.path, user.name AS username, user.lastname FROM event INNER JOIN eventtype ON event.eventtype_id = eventtype.id INNER JOIN eventstatus ON event.eventstatus_id = eventstatus.id INNER JOIN media ON event.media_id = media.id INNER JOIN user ON event.user_id = user.id WHERE event.id = ";
//Update one event
var updateOneEvent = "UPDATE event SET eventtype_id =";
//Query a list of user that have registered to an upcoming event
var queryRegisteredUsers = "SELECT name, lastname, email FROM User INNER JOIN eventinterraction ON user.id = eventinterraction.user_id WHERE eventinterraction.interractiontype_id = 5 AND eventinterraction.event_id = ";
//Query all baskets
var queryAllBaskets = "SELECT user.lastname, user.name AS username, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id";
//Query all complete baskets
var queryAllBasketsComplete = "SELECT user.lastname, user.name AS username, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 1";
//Query all uncomplete baskets
var queryAllBasketsUncomplete = "SELECT user.lastname, user.name AS username, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 0";
//Query all baskets of one user
var queryOneBasket = "SELECT user.lastname, user.name AS username, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE user.id = ";
//Add one basket
var addOneBasket = "INSERT INTO basket VALUES (\"";
//Update baskets of one user
var updateOneBasket = "UPDATE basket SET status =";
//Delete baskets of one user
var deleteOneBasket = "DELETE FROM basket WHERE user_id = ";
//Query all uncomplete baskets of one user
var queryOneBasketComplete = "SELECT user.lastname, user.name AS username, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 0 AND user.id = ";
//Query all complete baskets of one user
var queryOneBasketUncomplete = "SELECT user.lastname, user.name AS username, product.name, quantity FROM basket INNER JOIN User ON user.id = basket.user_id INNER JOIN product ON basket.product_id = product.id WHERE basket.status = 1 AND user.id = ";
//Query all products
var queryAllProducts = "SELECT product.id, name, description, price, producttype.type FROM Product INNER JOIN producttype ON product.producttype_id = producttype.id";
//Add one product
var addOneProduct = "INSERT INTO product (name, description, price, stock, producttype_id)VALUES (\"";
//Query one product
var queryOneProduct = "SELECT product.id, description, price, producttype.type FROM Product INNER JOIN producttype ON product.producttype_id = producttype.id WHERE Product.name = \"";
//Update one product
var updateOneProduct = "UPDATE product SET stock =";
//Query all medias
var queryAllMedias = "SELECT path, description, user.name, user.lastname FROM Media INNER JOIN user ON media.user_id = user.id";
//Add one media
var addOneMedia = "INSERT INTO media (path, description, user_id, status) VALUES (\"";
//Query one media
var queryOneMedia = "SELECT path, description, user.name, user.lastname FROM Media INNER JOIN user ON media.user_id = user.id WHERE media.id = ";
//Update one media
var updateOneMedia = "UPDATE media SET status = ";
//Query all medias of one event
var queryAlbum = "SELECT path, description FROM Media WHERE status = 1 AND event_id = ";


function handle_database(req, res, opt) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-with, Content-Type, Accept");

    pool.getConnection(function (err, connection) {
        if (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        }
        var query;
        var id = connection.threadId;
        console.log('connected as id ' + id);

        if (opt == 0) { //Query all users
            connection.query(queryAllUsers, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 1) { //Add one user
            query = addOneUser + req.query.lastname + "\", \""
                + req.query.name + "\", \""
                + req.query.email + "\", \""
                + req.query.password + "\", \""
                + req.query.role + "\")";
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 2) { //Querry one user
            connection.query(queryOneUser + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 4) { //Querry all events
            connection.query(queryAllEvents, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 5) { //Add one event
            query = addOneEvent + req.query.name + "\", \""
                + req.query.description + "\", \""
                + req.query.eventtype + "\", \""
                + req.query.eventstatus + "\", \""
                + req.query.media + "\", \""
                + req.query.user + "\")";
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 6) { //Querry one event
            connection.query(queryOneEvent + req.params.event_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 7) { //Update one event
            query = updateOneEvent + req.query.type + "\", eventstatus_id = \""
                + req.query.status
                + "WHERE name = \"" + req.params.event_name + "\"";
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 8) { //List all users of an event
            connection.query(queryRegisteredUsers + req.params.event_name, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 9) { //Querry all baskets
            connection.query(queryAllBaskets, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 10) { //Querry all baskets complete
            connection.query(queryAllBasketsComplete, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 11) { //Querry all baskets uncomplete
            connection.query(queryAllBasketsUncomplete, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 12) { //Querry all baskets of one user
            connection.query(queryOneBasket + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 13) { //Add one basket
            query = addOneBasket + req.body.product + "\", \""
                + req.params.user_id + "\", \""
                + req.body.quantity + "\", \""
                + req.body.status + "\")";
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 14) { //Update one basket
            query = updateOneBasket + req.query.status + " WHERE user_id = "
                + req.params.user_id;
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 15) { //Delete one basket
            connection.query(deleteOneBasket + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 16) { //Querry all baskets complete of one user
            connection.query(queryOneBasketComplete + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 17) { //Querry all baskets uncomplete of one user
            connection.query(queryOneBasketUncomplete + req.params.user_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 18) { //Querry all products
            connection.query(queryAllProducts, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 19) { //Add one product
            query = addOneProduct + req.query.name + "\", \""
                + req.params.description + "\", \""
                + req.query.price + "\", \""
                + req.query.stock + "\", \""
                + req.query.type + "\")";
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 20) { //Get one product
            connection.query(queryOneProduct + req.params.product_name + "\"", function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 21) { //Update one product
            query = updateOneProduct + req.query.stock + " WHERE name = "
                + req.params.product_name;
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 22) { //Querry all medias
            connection.query(queryAllMedias, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 23) { //Add one media
            query = addOneMedia + req.query.path + "\", \""
                + req.params.description + "\", \""
                + req.query.user + "\", \""
                + req.query.status + "\")";
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 24) { //Querry one media
            connection.query(queryOneMedia + req.params.media_id, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 25) { //Update one media
            query = updateOneMedia + req.query.status + " WHERE path = "
                + req.params.media_path;
            connection.query(query, function (err, rows) {
                connection.release();
                if (!err) { res.json(rows); }
            });
        } else if (opt == 26) { //Download a csv file with the registered user of one event
            connection.query(queryRegisteredUsers + req.params.event_id, function (err, rows) {
                connection.release();
                if (!err) { JsonToCsv(res, rows, id); }
            });
        } else if (opt == 27) { //Download a pdf file with the registered user of one event
            connection.query(queryRegisteredUsers + req.params.event_id, function (err, rows) {
                connection.release();
                if (!err) { JsonToPdf(res, rows, id); }
            });
        } else if (opt == 28) { //Download an archive with the photos of an album of an event
            connection.query(queryAlbum + req.params.event_id, function (err, rows) {
                connection.release();
                if (!err) {
                    DownloadAlbum(res, rows, id);
                }
            });
        }

        connection.on('error', function (err) {
            res.json({ "code": 100, "status": "Error in connection database" });
            return;
        });
    });
}

var appRouter = function (app) {
    app.get('/users', function (req, res) {
        handle_database(req, res, 0);
    })
    app.post('/users/add', function (req, res) {
        handle_database(req, res, 1);
    })

    app.get('/users/:user_id', function (req, res) {
        handle_database(req, res, 2);
    })

    app.get('/events', function (req, res) {
        handle_database(req, res, 4);
    })
    app.post('/events/add', function (req, res) {
        handle_database(req, res, 5);
    })

    app.get('/events/:event_name', function (req, res) {
        handle_database(req, res, 6);
    })
    app.put('/events/update/:event_name', function (req, res) {
        handle_database(req, res, 7);
    })

    app.get('/registeredusers/:event_name', function (req, res) {
        handle_database(req, res, 8);
    })

    app.get('/baskets', function (req, res) {
        handle_database(req, res, 9);
    })

    app.get('/baskets/complete', function (req, res) {
        handle_database(req, res, 10);
    })

    app.get('/baskets/uncomplete', function (req, res) {
        handle_database(req, res, 11);
    })

    app.get('/baskets/:user_id', function (req, res) {
        handle_database(req, res, 12);
    })
    app.post('/baskets/add/:user_id', function (req, res) {
        handle_database(req, res, 13);
    })
    app.put('/baskets/update/:user_id', function (req, res) {
        handle_database(req, res, 14);
    })
    app.put('/baskets/delete/:user_id', function (req, res) {
        handle_database(req, res, 15);
    })

    app.get('/baskets/complete/:user_id', function (req, res) {
        handle_database(req, res, 16);
    })

    app.get('/baskets/uncomplete/:user_id', function (req, res) {
        handle_database(req, res, 17);
    })

    app.get('/products', function (req, res) {
        handle_database(req, res, 18);
    })
    app.post('/products/add', function (req, res) {
        handle_database(req, res, 19);
    })

    app.get('/products/:product_name', function (req, res) {
        handle_database(req, res, 20);
    })
    app.put('/products/update/:product_name', function (req, res) {
        handle_database(req, res, 21);
    })

    app.get('/medias', function (req, res) {
        handle_database(req, res, 22);
    })
    app.post('/medias/add', function (req, res) {
        handle_database(req, res, 23);
    })

    app.get('/medias/:media_id', function (req, res) {
        handle_database(req, res, 24);
    })
    app.put('/medias/update/:media_path', function (req, res) {
        handle_database(req, res, 25);
    })

    app.get('/registeredusers/:event_id/csv', function (req, res) {
        handle_database(req, res, 26);
    })
    app.get('/registeredusers/:event_id/pdf', function (req, res) {
        handle_database(req, res, 27);
    })

    app.get('/album/:event_id', function (req, res) {
        handle_database(req, res, 28);
    })
}

module.exports = appRouter;