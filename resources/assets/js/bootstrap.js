window._ = require('lodash');

import "bootstrap";

try {
    window.Popper = require('@popperjs/core').default;
    window.$ = window.jQuery = require('jquery');
    window.bootstrap = require('bootstrap');

} catch (e) {}


window.axios = require('axios');
window.Swal = require('sweetalert2');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Custom scripts
require("./tahani.js");
// require("./crudHandler.js");
