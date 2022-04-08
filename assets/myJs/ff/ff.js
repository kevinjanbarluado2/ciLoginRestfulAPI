const base_url = $('[name=base_url]').val();
const modal = $('#modalContent');

$(function () {
    $('.notLoaded').attr('disabled', true);
    $('#generateFF').on('click', function () {
        let myBtn = $(this)
        myBtn.html('Loading <i class="fa fa-spinner fa-spin float-right" style="font-size: 1rem;line-height: 1rem;"></i>')
        $.ajax({
            url: `${base_url}/document/factfind`,
            type: 'post',
            data: { 'name': $('#client-first-name').val() },
        }).then((res) => {
            let myPdf = res;
            $('.notLoaded').attr('disabled', false);
            myBtn.html('Update Document');
            console.log(`${base_url}document/readPdf/${myPdf}`)
            let myIframe = `
            <iframe src="${base_url}document/readPdf/${myPdf}" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>
       `
          modal.html(myIframe);


        }).catch((err) => {
            console.log('err', err.responseText)
        })
    })
})