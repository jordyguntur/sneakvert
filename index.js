const express = require("express");
const bodyParser = require("body-parser");
const mongoose = require("mongoose");
const app = express();

// Configure bodyparser to handle post requests
app.use(
  bodyParser.urlencoded({
    extended: true
  })
);
app.use(bodyParser.json());

// Connect to Mongoose and set connection variable
mongoose
  .connect("mongodb://localhost/test", { useNewUrlParser: true })
  .then(() => {
    console.log("sneakvert database connected");
  })
  .catch(error => {
    console.log("error connecting to database");
  });

var db = mongoose.connection;

// Setup server port
var port = process.env.PORT || 8080;

// Send message for default URL
app.get("/ping", (req, res) => res.send("sneakvert server is running"));

app.get("/api", (req, res) => {
  res.status(200).json({
    status: "API is functional",
    message: "Welcome to SneakVert API!"
  });
});

// Send list of shoe names
app.get("/sneakers-list", (req, res) => {
  var shoe_names = [];
  var cursor = db.collection("sneakers").find();
  cursor
    .forEach(item => {
      if (item) shoe_names.push(item.Shoe);
    })
    .then(() => {
      shoe_names.sort();
      res.status(200).json(shoe_names);
    })
    .catch(error => {
      res.status(500).json({
        error
      });
    });
});

// Convert current sneaker to target sneaker size
app.post("/conversion", (req, res) => {
  var current_sneaker = req.body.current;
  current_sneaker = current_sneaker.replace(/\s*$/, ""); // Remove whitespace at end of the string

  var target_sneaker = req.body.target;
  target_sneaker = target_sneaker.replace(/\s*$/, ""); // Remove whitespace at end of the string

  const current_sneaker_size = parseFloat(req.body.size);

  var true_size;
  var target_size;

  console.log(
    "Inbound request for " +
      target_sneaker +
      " with current_sneaker " +
      current_sneaker +
      " size " +
      current_sneaker_size
  );

  const incoming_request = {
    target_sneaker,
    current_sneaker,
    current_sneaker_size,
    timestamp: new Date().toISOString()
  };

  db.collection("requests").insert(incoming_request, (err, res) => {
    if (err) throw err;
    console.log("request recorded: " + res);
  });

  // Find current sneaker specs
  db.collection("sneakers")
    .findOne({ Shoe: current_sneaker })
    .then(doc => {
      if (!doc) {
        console.log("no record of current sneaker");
      }

      // Get current sneaker size to figure out true size of the user;
      switch (doc.Fit) {
        case 1:
          true_size = current_sneaker_size;
          break;
        case 2:
          true_size = current_sneaker_size - 0.5;
          break;
        case 3:
          true_size = current_sneaker_size + 0.5;
          break;
        case 4:
          true_size = current_sneaker_size - 1;
          break;
        case 5:
          true_size = current_sneaker_size + 1;
          break;
      }
    })
    .then(() => {
      // Find target sneaker specs
      db.collection("sneakers")
        .findOne({ Shoe: target_sneaker })
        .then(doc => {
          if (!doc) {
            console.log("no record of target sneaker");
          }

          // Get the target sneaker size based on users true size
          switch (doc.Fit) {
            case 1:
              target_size = true_size;
              break;
            case 2:
              target_size = true_size + 0.5;
              break;
            case 3:
              target_size = true_size - 0.5;
              break;
            case 4:
              target_size = true_size + 1;
              break;
            case 5:
              target_size = true_size - 1;
              break;
          }

          res.status(200).json({
            message: "success",
            target_size: target_size
          });
        })
        .catch(error => {
          res.status(500).json({
            error
          });
        });
    })
    .catch(error => {
      res.status(500).json({
        error
      });
    });
});

// Launch app to listen to specified port
app.listen(port, function() {
  console.log("running sneakvert on port " + port);
});
