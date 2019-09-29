// $('#filters').change(function(){
//     let q = $('#filters').find("input[name=q]").val();
//     let jenis_mobil = $('#filters').find("select[name=jenis_mobil]").children("option:selected").val();
//     let harga = $('#filters').find("select[name=harga]").children("option:selected").val();
//     let status = $('#filters').find("select[name=status]").children("option:selected").val();
    
//     status = (status == "")?"ASC":status;
//     harga = (harga == "") ? "20" : harga;
//     $.ajax({
//         url: '?q='+q+'&jenis_mobil='+jenis_mobil+'&harga='+harga+'&status='+status,
//         type: 'GET',
//         dataType: 'html'
//     }).done(function(data){
//         let datas = $(data).find('#content').html();
//         $('#content').html(datas);
//     });
// });

function goTo(pages){
    // const urls=()=>{
    //     let q = $('#filters').find("input[name=q]").val();
    //     let jenis_mobil = $('#filters').find("select[name=jenis_mobil]").children("option:selected").val();
    //     let harga = $('#filters').find("select[name=harga]").children("option:selected").val();
    //     let status = $('#filters').find("select[name=status]").children("option:selected").val();
    //     status = (status == "") ? "1":status;
    //     harga = (harga == "") ? "20000" : harga;
    //     return '?query='+q+'&jenis_mobil='+jenis_mobil+'&harga='+harga+'&status='+status;
    // };
    // let url = urls();
    let page = $(pages).attr('href').slice(-1);
    console.log("TCL: goTo -> page", page)
    // $.ajax({
    //     url: url+'&page='+page,
    //     type: 'GET',
    //     dataType: 'html'
    // }).done(function(data){
    //     let datas = $(data).find('#content').html();
    //     $('#content').html(datas);
    // });
}

// function jenis_mobilChange(attr,id){
//     let jenis_mobilTo = $(attr).val();
//     $.ajax({
//         url: '/pegawai/change/'+id+'/'+jenis_mobilTo,
//         type: 'GET',
//         dataType: 'html'
//     }).done(function(data){
//         let tmp = $(data).find('#content').html();
//         $('#content').html(tmp);
//     });
// }


// function getDatas(page) {
//     $.ajax({
//         url : '?page=' + page,
//         type : "get",
//         dataType: 'json',
//         data:{
//             q: $('#q').val()
//         },
//     }).done(function (data) {
//         $('.datas').html(data);
//         location.hash = page;
//     }).fail(function (msg) {
//         alert('Gagal menampilkan data, silahkan refresh halaman.');
//     });
// }