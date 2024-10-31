let ROOT = "http://localhost/mycoachingWeb/";
let states = document.getElementById("states_select");
let cities = document.getElementById("cities_select");
let register = document.getElementById("register");
let states_select = document.getElementById("states_select");
let cities_select = document.getElementById("cities_select");
let reg_name = document.getElementById("reg_name");
let reg_email = document.getElementById("reg_email");
let reg_mobile = document.getElementById("reg_mobile");
let reg_password = document.getElementById("reg_password");
let reg_cpassword = document.getElementById("reg_cpassword");
$(document).ready(function () {
  $("#states_select").on("change", function () {
    $.ajax({
      url: ROOT + "register/findCities",
      method: "POST",
      data: { id: states.value },
      success: function (e) {
        // console.log(e);
        $("#cities_select").html(e);
      },
    });
  });
  $("#reg_cpassword").blur(function () {
    // match password eqal or not (password confrim)
    if (reg_cpassword.value === reg_password.value) {
        //set border color properties on input passowrd tag
      $("#reg_cpassword").css("border", "1px solid green");
      // submit form through ajax by click register button
      register.addEventListener("click", function () {
        $.ajax({
          url: ROOT + "register/save",
          method: "POST",
          data: {
            users: reg_name.value,
            mobile: reg_mobile.value,
            email: reg_email.value,
            password: reg_password.value,
            state_id: states_select.value,
            city_id: cities_select.value,
          },
          success: function (e) {
            
            window.location.assign(ROOT);
          },
        });
      });
    } else {
      $("#reg_cpassword").css("border", "1px solid red");
    }
  });
});

