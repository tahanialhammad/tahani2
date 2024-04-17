let crudHandler = {
    initialize: function () {
        this.registerEvents();
    },

    registerEvents: function () {
        $('body').on('click', 'a[data-method]', this.handleMethod);
    },

    handleMethod: function (e) {
        let link = $(this);
        let httpMethod = link.data('method').toUpperCase();
        let form;

        // TODO: Get requests will break the code!
        if ($.inArray(httpMethod, ['PUT', 'DELETE', 'POST']) === -1) {
            return;
        }

        if (!link.data('confirm')) {
            // Do not create a 'are you sure' form.
        } else if (httpMethod == "POST") {
            if (!crudHandler.verifyPost(link)) {
                return false;
            }
        } else if (httpMethod == "DELETE") {
            if (!crudHandler.verifyDelete(link)) {
                return false;
            }
        } else if (httpMethod == "PUT") {
            if (!crudHandler.verifyPut(link)) {
                return false;
            }
        }

        form = crudHandler.createForm(link);
        form.submit();

        e.preventDefault();
    },

    verifyDelete: function (link) {
        Swal.fire({
            html: link.data('message'),
            title: link.data('confirm'),
            showCancelButton: true,
            confirmButtonColor: "#333840",
            confirmButtonText: link.data('confirmbuttontext') ?? 'Ja, verwijderen',
            cancelButtonText: link.data('cancelbuttontext') ?? 'Annuleren',
            closeOnConfirm: true,
            allowOutsideClick: "true",
            customClass: "swal-left",
        }).then((result) => {
            if (result.isConfirmed) {
                let form = crudHandler.createForm(link);
                form.submit();
            }
        })
    },

    verifyPost: function (link) {
        Swal.fire({
            title: link.data('confirm'),
            showCancelButton: true,
            confirmButtonColor: "#333840",
            confirmButtonText: 'Ja',
            closeOnConfirm: true
        }).then((result) => {
            if (result.isConfirmed) {
                let form = crudHandler.createForm(link);
                form.submit();
            }
        })
    },

    verifyPut: function (link) {
        Swal.fire({
            title: link.data('confirm'),
            showCancelButton: true,
            confirmButtonColor: "#333840",
            confirmButtonText: "Ja",
            closeOnConfirm: true
        }).then((result) => {
            if (result.isConfirmed) {
                let form = crudHandler.createForm(link);
                form.submit();
            }
        })
    },

    createForm: function (link) {
        let form = $('<form>', {
            'method': 'POST',
            'action': link.attr('href')
        });
    
        let token = $('<input>', {
            'name': '_token',
            'type': 'hidden',
            'value': $('meta[name="csrf-token"]').attr('content') // Fetch CSRF token value from the meta tag
        });
    
        let hiddenInput = $('<input>', {
            'name': '_method',
            'type': 'hidden',
            'value': link.data('method')
        });
    
        return form.append(token, hiddenInput).appendTo('body');
    }
    
};

// Trigger the laravel method
crudHandler.initialize();