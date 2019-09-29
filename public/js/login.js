// function login(){
//     let token = $('input[name=_token]').val();
//     let email = $('#email').val();
//     let password = $('#password').val();
//     let data = {
//         '_token':token,
//         'email':email,
//         'password':password
//     }
//     $.ajax({
//         url:'/login',
//         data:data,
//         type:'post',
//         dataType:'html'
        
//     }).done(function(data){
//         let content = $(data).find('#html').html();
//         $('#html').html(content);
//         console.log(content);
        
//     })
// };