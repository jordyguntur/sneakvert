const mongoose = require('mongoose');

const sneakerSchema = mongoose.Schema({
    shoe: {
        type: String,
        required: true
    },
    fit: {
        type: String,
        required: true
    },
});

var Sneaker = module.exports = mongoose.model('sneaker', sneakerSchema);
module.exports.get = function (callback, limit) {
    Sneaker.find(callback).limit(limit);
}
