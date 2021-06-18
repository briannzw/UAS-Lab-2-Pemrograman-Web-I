$(function(){
    $("#btn_email").click(function(){
        if($("#btn_email").text() == "Change Email"){
            $("#email").html("<form action='account.php' method='post' autocomplete='off' id='emailForm'><input class='form-control' required type='email' name='email' value='" + $('#email').text() + "'></input><input id='emailSubmit' type='submit'></input></form>");
            $("#emailForm").css("margin", 0);
            $("#emailSubmit").hide();
            $("#btn_email").addClass('btn-outline-success').removeClass('btn-outline-dark');
            $("#btn_email").text("Confirm");
        } else {
            $("#emailSubmit").click();
        }
    });
    $("#btn_nickname").click(function(){
        if($("#btn_nickname").text() == "Change Nickname"){
            $("#nickname").html("<form action='account.php' method='post' autocomplete='off' id='nicknameForm'><input class='form-control' required name='nickname' value='" + $('#nickname').text() + "'></input><input id='nicknameSubmit' type='submit'></input></form>");
            $("#nicknameForm").css("margin", 0);
            $("#nicknameSubmit").hide();
            $("#btn_nickname").addClass('btn-outline-success').removeClass('btn-outline-dark');
            $("#btn_nickname").text("Confirm");
        } else {
            $("#nicknameSubmit").click();
        }
    });
    $("#btn_pass").click(function(){
        if($("#btn_pass").text() == "Change Password"){
            $("#pass").html("<form action='account.php' method='post' autocomplete='off' id='passForm'><p>Old Password</p><input class='form-control' required type='password' name='oldPass'></input><p>New Password</p><input class='form-control' required type='password' name='newPass'></input><p>Confirm New Password</p><input class='form-control' required type='password' name='confirmPass'></input><input id='passSubmit' type='submit' name='pass'></input></form>");
            $("#passForm").css("margin", 0);
            $("#passForm").css("font-size", '11px');
            $("#passSubmit").hide();
            $("#btn_pass").addClass('btn-outline-success').removeClass('btn-outline-dark');
            $("#btn_pass").text("Confirm");
        } else {
            $("#passSubmit").click();
        }
    });
});