$(function () {
    const base_url = $('[name=base_url]').val();

    $('#eps_upload').on('click', '.upl-list-item', function () {
        var tgt = $(this).attr('data-tgt');

        if (tgt != "" || tgt != null) {
            var html = "<iframe width='100%' height='500' src='" + tgt + "'></iframe>";
            $('#preview-dialog').find(".modal-body").html(html);
            $('#preview-dialog').modal('show');
        }
    });

    $('#open-upload-eps').click(function () {
        $('#upload-eps').click();
    });

    $('#open-upload-eps').on('dragover', function () {
        $(this).addClass('file_drag_over');
        return false;
    });

    $('#open-upload-eps').on('dragleave', function () {
        $(this).removeClass('file_drag_over');
        return false;
    });

    $('#open-upload-eps').on('drop', function (e) {
        $(this).removeClass('file_drag_over');
        e.preventDefault();
        var files = e.originalEvent.target.files || e.originalEvent.dataTransfer.files;
        var fileData = new FormData();
        var addme = 0;

        $.each(files, function (k, v) { fileData.append(k, v); addme++; });

        $('#upload-eps').val('');
        var uploadpreIndex = $('#uploaded-eps .upl-list-item').length;
        var uploaderUrl = base_url + "Data/illustration/";
        var arritems = [];


        $.ajax({
            url: uploaderUrl, type: "POST", dataType: 'json',
            data: fileData, cache: false,
            processData: false,
            contentType: false,
            beforeSend: function () {


                for (x = 0; x < addme; x++) {
                    var htm = '<a href="#" id="upl-item' + uploadpreIndex + '" class="list-group-item upl-list-item" data-tgt="" data-tgt-name="">';
                    htm += '<button type="button" class="close upl-item-close" style="display:none" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    htm += '<p class="list-group-item-heading">Uploading File...</p>';
                    htm += '<div class="progress">';
                    htm += '<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>';
                    htm += '</a>';

                    $('#uploaded-eps').append(htm);

                    arritems.push(uploadpreIndex);
                    uploadpreIndex++;
                }

            },
            success: function (result) {
                for (x = 0; x < addme; x++) {
                    var uploadpreIndex = arritems[x];
                    if (result[x].success) {
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .progress').remove();
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .upl-item-close').show(0);
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .list-group-item-heading').html("File Name: " + result[x].input.name + "<br /><small>Click to view document.</small>");
                        $('#uploaded-eps #upl-item' + uploadpreIndex).attr('data-tgt', result[x].link);
                        $('#uploaded-eps #upl-item' + uploadpreIndex).attr('data-tgt-name', result[x].input.name);
                    } else {
                        var replacement = '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>';
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .progress').html(replacement);
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .list-group-item-heading').html("Upload failed." + result[x].error);
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .upl-item-close').show(0);
                    }
                }

            },
            error: function () {
                var replacement = '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>';
                $('#uploaded-eps #upl-item' + uploadpreIndex + ' .progress').html(replacement);
                $('#uploaded-eps #upl-item' + uploadpreIndex + ' .list-group-item-heading').html("Upload failed. Server Error");
                $('#uploaded-eps #upl-item' + uploadpreIndex + ' .upl-item-close').show(0);
            }
        });
    });
    //11-16-17
    $('.upl-item-close').click(function () {
        $(this).parent().remove();
    });


    $('.upl-list-item').click(function (e) {
        e.preventDefault();
        var tgt = $(this).attr('data-tgt');

        if (tgt != "" || tgt != null) {
            var html = "<iframe width='100%' height='500' src='" + tgt + "'></iframe>";
            $('#preview-dialog').find(".modal-body").html(html);
            $('#preview-dialog').modal('show');
        }

    });

    $('#upload-eps').change(function (ev) {
        var files = ev.target.files;
        var fileData = new FormData();
        var addme = 0;

        $.each(files, function (k, v) { fileData.append(k, v); addme++; });

        $('#upload-eps').val('');
        var uploadpreIndex = $('#uploaded-eps .upl-list-item').length;
        var uploaderUrl = base_url + "Data/illustration/";
        var arritems = [];


        $.ajax({
            url: uploaderUrl, type: "POST", dataType: 'json',
            data: fileData, cache: false,
            processData: false,
            contentType: false,
            beforeSend: function () {


                for (x = 0; x < addme; x++) {
                    var htm = '<a href="#" id="upl-item' + uploadpreIndex + '" class="list-group-item upl-list-item" data-tgt="" data-tgt-name="">';
                    htm += '<button type="button" class="close upl-item-close" style="display:none" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    htm += '<p class="list-group-item-heading">Uploading File...</p>';
                    htm += '<div class="progress">';
                    htm += '<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>';
                    htm += '</a>';

                    $('#uploaded-eps').append(htm);
                    $('.upl-item-close').click(function () {
                        $(this).parent().remove();
                    });


                    $('.upl-list-item').click(function () {

                        var tgt = $(this).attr('data-tgt');

                        if (tgt != "" || tgt != null) {
                            var html = "<iframe width='100%' height='500' src='" + tgt + "'></iframe>";
                            $('#preview-dialog').find(".modal-body").html(html);
                            $('#preview-dialog').modal('show');
                        }

                    });


                    arritems.push(uploadpreIndex);
                    uploadpreIndex++;
                }

            },
            success: function (result) {
                for (x = 0; x < addme; x++) {
                    var uploadpreIndex = arritems[x];
                    if (result[x].success) {
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .progress').remove();
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .upl-item-close').show(0);
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .list-group-item-heading').html("File Name: " + result[x].input.name + "<br /><small>Click to view document.</small>");
                        $('#uploaded-eps #upl-item' + uploadpreIndex).attr('data-tgt', result[x].link);
                        $('#uploaded-eps #upl-item' + uploadpreIndex).attr('data-tgt-name', result[x].input.name);
                    } else {
                        var replacement = '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>';
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .progress').html(replacement);
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .list-group-item-heading').html("Upload failed." + result[x].error);
                        $('#uploaded-eps #upl-item' + uploadpreIndex + ' .upl-item-close').show(0);
                    }
                }

            },
            error: function () {
                var replacement = '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>';
                $('#uploaded-eps #upl-item' + uploadpreIndex + ' .progress').html(replacement);
                $('#uploaded-eps #upl-item' + uploadpreIndex + ' .list-group-item-heading').html("Upload failed. Server Error");
                $('#uploaded-eps #upl-item' + uploadpreIndex + ' .upl-item-close').show(0);
            }
        });
    });


    $('#eps_upload').on('click', '.upl-list-item', function () {
        var tgt = $(this).attr('data-tgt');

        if (tgt != "" || tgt != null) {
            var html = "<iframe width='100%' height='500' src='" + tgt + "'></iframe>";
            $('#preview-dialog').find(".modal-body").html(html);
            $('#preview-dialog').modal('show');
        }
    });
})