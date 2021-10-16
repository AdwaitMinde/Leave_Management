function login_validate(){
    var loginUsername=document.getElementById("loginUsername").value;
    //var loginForm=document.getElementById("loginForm");
    var loginPassword=document.getElementById("loginPassword").value;
    //var errorElement=document.getElementById('error')
    if (loginPassword=='' && loginUsername=='') {
        alert('all fields are required');
    };        
}
function register_validate(){
    var registerUsername= document.getElementById("registerUsername").value;
    var registerPassword= document.getElementById("registerPassword").value;
    var registerRePassword= document.getElementById("registerRePassword").value;
    var registerEmail= document.getElementById("registerEmail").value;
    var registerContact= document.getElementById("registerContact").value;
    var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
    if (registerEmail !='' && registerUsername != '' && registerRePassword != '' 
        && registerPassword !='' && registerContact !='') {
        alert('all fields are required');
        if (email.match(emailReg)) {
        }
        else{
            alert('put in a real email')
        }
    }

    else{

        alert('all fields are required');

    }
}
