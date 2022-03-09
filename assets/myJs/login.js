$(function () {
    const base_url = $('[name=base_url]').val();
    const $alert = $('#alert');
    $('button').click(function () {
        let email = $('[type=email]').val();
        let password = $('[type=password]').val();
        if (validator.isEmail(email)) {
            const api_key = $('[name=API_KEY]').val();
            const authorization = $('[name=API_AUTH]').val();

            var form = new FormData();
            form.append("email", email);
            form.append("password", password);
            var settings = {
                "url": `${base_url}/api/authentication/login/`,
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "X-API-KEY": api_key,
                    "Authorization": `Basic ${authorization}`
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form,
                "dataType": "JSON",
                "success": function ({ message, data }) {
                    $alert.html(message).attr('class', 'text-primary');
                    let loader = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="sr-only">Loading...</span>`;
                    $('button').html(loader);
                    return JSON.stringify(data[0])

                },
                "error": function (err) {
                    let json = JSON.parse(err.responseText)
                    $alert.html(json.message).attr('class', 'text-danger');
                }
            };

            $.ajax(settings).done(function ({ data } = {}) {
                window.location.href = `${base_url}dashboard`;

            });
        } else {
            $alert.html('Invalid Email').removeClass('d-none').attr('class', 'text-danger');
        }
    })
})