$(function () {
    const base_url = $('[name=base_url]').val();
    const $alert = $('#alert');
    $('button').click(function () {
        let email = $('[type=email]').val();
        let password = $('[type=password]').val();
        if (validator.isEmail(email)) {

            var form = new FormData();
            form.append("email", email);
            form.append("password", password);
            var settings = {
                "url": "http://localhost/investment_new/api/authentication/login/",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "X-API-KEY": "EliteInsure123",
                    "Authorization": "Basic YWRtaW46MTIzNA==",

                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form,
                "dataType": "JSON",
                "success": function (data) {
                    $alert.html(data.message).attr('class', 'text-primary');
                },
                "error": function (err) {
                    let json = JSON.parse(err.responseText)
                    $alert.html(json.message).attr('class', 'text-danger');
                }
            };

            $.ajax(settings).done(function (response) {
                console.log('done')

            });
        } else {
            $alert.html('Invalid Email').removeClass('d-none').attr('class', 'text-danger');
        }
    })
})