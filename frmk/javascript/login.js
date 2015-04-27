$(document).ready(function(){
  $("#login-trigger").click(function(){
    $(this).next('#login-content').slideToggle();
    $(this).toggleClass('active');          

    if ($(this).hasClass('active')) $(this).find('span').html('<i class="fa fa-chevron-up"></i>')
      else $(this).find('span').html('<i class="fa fa-chevron-down"></i>')
    })

  $("#submit").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();
        var logged = $("#logged").val();

        $.post("database/login.php", {
            username1: username,
            password1: password,
            logged1: logged
        }, function(data){
            alert(data);
            location.replace("index.php");
        });
    })
  $("#logout-trigger").click(function(){
      $(document).load("database/logout.php", function(){
          alert("Acabou de fazer logout!");
          location.replace("index.php");
      });

    })
});
