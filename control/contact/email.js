function controlField(pId) {
    var field = $('#'+pId).val();
    if (field === "") {
        $('#'+pId).css({
            "border-bottom-width": "1px",
            "border-bottom-style":"solid",
            "border-bottom-color": "red"
        });
    } else {
        $('#'+pId).css({
            "border-bottom-width": "1px",
            "border-bottom-style":"solid",
            "border-bottom-color": "#9e9e9e"
        });
    }
}

function sendEMail() {
    
    var name = $('#name').val();
    var email = $('#email').val();
    var subject = $('#subject').val();
    var message = $('#message').val();
    
    $.ajax({
            type: 'POST',
            url: "./control/contact/Email.php",
            data: "name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
            dataType: 'text',
            success: function (result, textStatus, jqXHR) {

                switch (result) {
                        
                    case "Message has been sent":
                        alert("email inviata");
                        break;
                        
                    default :
                        alert("EMAIL NON INVIATA" + result);
                        break;
                }

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("CHIAMATA AJAX FALLITA!!");
            }
        });
}


