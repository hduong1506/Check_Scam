setTimeout(function() {
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'none';
    
    var webContainer = document.getElementById('web-container');
    webContainer.style.display = 'block';
}, 5000);

function Login(){
    $.ajax({
        url: "/xZjYd55FT1Zpy2xc6JKX2TYJCz4Bg95W7GQ4Fzxz09PNqBnYPXJ6Dd1P1MHd0rYGt3fdarH7NKXr37T0.html",
        method: "POST",
        data: {
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(response) {
            console.log(response);
            var responseObject = JSON.parse(response);
            var status = responseObject.status;
            var text = responseObject.text;
            if(status == 'error'){
                $("#message").html(`<div class="alert"><span>${text}</span></div>`);
            } else if(status == 'success'){
                window.location.href="/kRQb7Z9dZYaZd40BGzF425r5Yp9pEPw5A7GHzbQCy9nS1xkyrqAxPgNdZH2GNJM7cSMWkeCeX26rEK4a.html";
            }
            
        }
    });
}