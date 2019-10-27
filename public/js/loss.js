/**
 * Mobil Filter Start
 * @param  {[type]} q [description]
 * @return {[type]}     [description]
 */
$('#filterMobil').keyup(function () {
    let q = $('#filterMobil').find("input[name=q]").val();
    let jenis_mobil = $('#filterMobil').find("select[name=jenis_mobil]").children("option:selected").val();
    let harga = $('#filterMobil').find("select[name=harga]").children("option:selected").val();
    let status = $('#filterMobil').find("select[name=status]").children("option:selected").val();
    $.ajax({
        url: '?q=' + q + '&jmobil=' + jenis_mobil + "&harga=" + harga + "&status=" + status,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
    });
});
$('#filterMobil').change(function(){
    let q = $('#filterMobil').find("input[name=q]").val();
    let jenis_mobil = $('#filterMobil').find("select[name=jenis_mobil]").children("option:selected").val();
    let harga = $('#filterMobil').find("select[name=harga]").children("option:selected").val();
    let status = $('#filterMobil').find("select[name=status]").children("option:selected").val();
    $.ajax({
            url: '?q='+q+'&jmobil='+jenis_mobil+"&harga="+harga+"&status="+status,
            type: 'GET',
            dataType: 'html'
    }).done(function(data){
            let datas = $(data).find('#table-content').html();
            $('#table-content').html(datas);
    });
});
function pageMobil(pages) {
    const urls = () => {
        let q = $('#filterMobil').find("input[name=q]").val();
        let jenis_mobil = $('#filterMobil').find("select[name=jenis_mobil]").children("option:selected").val();
        let harga = $('#filterMobil').find("select[name=harga]").children("option:selected").val();
        let status = $('#filterMobil').find("select[name=status]").children("option:selected").val();
        return '?q=' + q + '&jmobil=' + jenis_mobil + '&harga=' + harga + '&status=' + status;
    };
    let url = urls();
    let page = $(pages).attr('href').split("page=")[1];
    $.ajax({
        url: url + "&page=" + page,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
    });
}

/**
 * Mobil Filter End
 */





/**
 * FilterUser
 * @param  {[type]} ){                 let q [description]
 * @return {[type]}     [description]
 */
$('#filterUser').keyup(function () {
    let q = $('#filterUser').find("input[name=q]").val();
    $.ajax({
        url: '?q=' + q,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
    });
});

function pageUser(pages) {
    const urls = () => {
        let q = $('#filterUser').find("input[name=q]").val();
        return '?q=' + q;
    };
    let url = urls();
    let page = $(pages).attr('href').split("page=")[1];
    $.ajax({
        url: url + "&page=" + page,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
    });
}
/**
 * FilterUser end
 */




/**
 * filterCostumer
 * @param  {[type]} ){                 let q [description]
 * @return {[type]}     [description]
 */
$('#filterCostumer').keyup(function () {
    let q = $('#filterCostumer').find("input[name=q]").val();
    $.ajax({
        url: '?q=' + q,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
    });
});
function pageCostumer(pages) {
    const urls = () => {
        let q = $('#filterCostumer').find("input[name=q]").val();
        return '?q=' + q;
    };
    let url = urls();
    let page = $(pages).attr('href').split("page=")[1];
    $.ajax({
        url: url + "&page=" + page,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
    });
}
/**
 * filterCostumer end
 */







$('#filterPinjam').keyup(function () {
    let q = $('#filterPinjam').find("input[name=q]").val();
    let year = $('#filterPinjam').find("select[name=year]").children("option:selected").val();
    let month = $('#filterPinjam').find("select[name=month]").children("option:selected").val();
    let url = '?q=' + q + '&year=' + year + '&month=' + month;
    let cetakLink = $('#cetakPinjam').attr('href').split('?')[0];
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
        $('#cetakPinjam').prop('href',cetakLink+url);
    });
});

$('#filterPinjam').change(function () {
    let q = $('#filterPinjam').find("input[name=q]").val();
    let year = $('#filterPinjam').find("select[name=year]").children("option:selected").val();
    let month = $('#filterPinjam').find("select[name=month]").children("option:selected").val();
    let cetakLink = $('#cetakPinjam').attr('href').split('?')[0];
    let url = '?q=' + q + '&year=' + year + '&month=' + month;
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
        $('#cetakPinjam').prop('href',cetakLink+url);
    });
});

function pagePinjam(pages) {
    const urls = () => {
            let q = $('#filterPinjam').find("input[name=q]").val();
            let year = $('#filterPinjam').find("select[name=year]").children("option:selected").val();
            let month = $('#filterPinjam').find("select[name=month]").children("option:selected").val();
        return '?q=' + q + '&year=' + year + '&month=' + month;
    };
    let url = urls();
    let page = $(pages).attr('href').split("page=")[1];
    $.ajax({
        url: url + "&page=" + page,
        type: 'GET',
        dataType: 'html'
    }).done(function (data) {
        let datas = $(data).find('#table-content').html();
        $('#table-content').html(datas);
    });
}




/**
 * Goto to url via ajax,
 * And add response to #body 
 * @param {*} tmp 
 */
function goto(tmp) {
    let link = $(tmp).attr('src');
    $.ajax({
        url: link,
        type: 'get',
        dataType: 'html'
    }).done(function (data) {
        let title = data.split('<title>')[1].split('</title>')[0];
        let datas = $(data).find('#body').html();
        if (history.pushState) {
            document.title = title;
            history.pushState(null, null, link);
        } else {
            location.hash = link;
        }
        $('#body').html(datas);
    });
}

//Date picker
$(function () {
    $('#datetimepicker1').datetimepicker({
        minDate: new Date(),
    });
    $('#datetimepicker2').datetimepicker({
        minDate: new Date(),
    });
    $('#status').bootstrapToggle();
});
