// alert('hello')

$(document).ready(function () {
  $("#login").on("click", function () {
    let userinfo = {
      username: document.getElementById("log_email_phone").value,
      password: document.getElementById("log_reg_password").value,
    };
    $.ajax({
      url: ROOT + "users/login",
      method: "POST",
      data: userinfo,
      success: function (e) {
        console.log(ROOT);
        window.location.assign(ROOT);
      },
    });
  });
});
