$(document).ready(function () {
  //email already exists check
  $("#email").on("keypress blur", function () {
    var reg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = $("#email").val();
    $.ajax({
      url: "./addUser.php",
      method: "POST",

      data: {
        checkemail: "checkemail",
        email: email,
      },
      success: function (data) {
        if (data != 0) {
          $("#errorMsg2").html(
            "<small class='text-danger pl-3 font-weight-bold'>This Email Id Already Exists!!</small>"
          );
          $("#Signup").attr("disabled", true);
        } else if (data == 0 && reg.test(email)) {
          $("#errorMsg2").html(
            "<small class='text-primary pl-3 font-weight-bold'>You are good to go!</small>"
          );
          $("#Signup").attr("disabled", false);
        } else if (!reg.test(email)) {
          $("#errorMsg2").html(
            "<small class='text-danger pl-3 font-weight-bold'>Please Enter a valid Email (Format: name@mail.com)!!</small>"
          );
          $("#Signup").attr("disabled", true);
        }
      },
      error: function () {
        console.log("error");
      },
    });
  });
});

//register student

function AddUser() {
  var reg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var name = $("#name").val();
  var email = $("#email").val();
  var pass = $("#pass").val();

  //checking form fields
  if (name.trim() == "") {
    $("#errorMsg1").html(
      "<small class='text-danger pl-3 font-weight-bold ' >Name Field is Empty!!</small>"
    );
    $("#name").focus();
    return false;
  } else if (email.trim() == "") {
    $("#errorMsg2").html(
      "<small class='text-danger pl-3 font-weight-bold'>Email Field is Empty!!</small>"
    );
    $("#email").focus();
    return false;
  } else if (email.trim() != "" && !reg.test(email)) {
    $("#errorMsg2").html(
      "<small class='text-danger pl-3 font-weight-bold'>Please Enter a valid Email (Format: name@mail.com)!!</small>"
    );
    $("#email").focus();
    return false;
  } else if (pass.trim() == "") {
    $("#errorMsg3").html(
      "<small class='text-danger pl-3 font-weight-bold'>Password Field is Empty!!</small>"
    );
    $("#pass").focus();
    return false;
  } else {
    $.ajax({
      url: "./addUser.php",
      method: "POST",
      dataType: "json",
      data: {
        stduser: "stduser",
        name: name,
        email: email,
        pass: pass,
      },
      success: function (data) {
        if (data == "OK") {
          $("#SuccessMsg").html(
            "<span class='text-success font-weight-bold'>Registration Successful!!</span>"
          );
          clearForm();
        } else if (data == "Failed") {
          $("#SuccessMsg").html(
            "<span class='text-danger font-weight-bold'>Registration Failed!!</span>"
          );
        }
      },
    });
  }
}

//function to clear form
function clearForm() {
  $("#std-form").trigger("reset");
  $("#errorMsg1").html(" ");
  $("#errorMsg2").html(" ");
  $("#errorMsg3").html(" ");
}

//student Login
function LoginUser() {
  var reg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var logemail = $("#logemail").val();
  var logpass = $("#logpass").val();

  if (logemail.trim() == "") {
    $("logerrorMsg2").html(
      "<small class='text-danger pl-3 font-weight-bold'>Email Field is Empty!!</small>"
    );
    $("#logemail").focus();
    return false;
  } else if (logemail.trim() != "" && !reg.test(logemail)) {
    $("#logerrorMsg2").html(
      "<small class='text-danger pl-3 font-weight-bold'>Please Enter a valid Email (Format: name@mail.com)!!</small>"
    );
    $("#logemail").focus();
    return false;
  } else if (logpass.trim() == "") {
    $("#logerrorMsg3").html(
      "<small class='text-danger pl-3 font-weight-bold'>Password Field is Empty!!</small>"
    );
    $("#logpass").focus();
    return false;
  } else {
    $.ajax({
      url: "./logUser.php",
      method: "POST",
      data: {
        loginCheck: "Check login",
        logemail: logemail,
        logpass: logpass,
      },
      success: function (data) {
        console.log(data);
        if (data == 0) {
          $("#LogSuccessMsg").html(
            '<small class="alert alert-danger font-weight-bold">Invalid Email ID or Password</small>'
          );
        } else if (data == 1) {
          $("#LogSuccessMsg").html(
            '<div class="spinner-border text-success role="status"><span class="sr-only"></span></div>'
          );
          setTimeout(() => {
            window.location.href = "home.php";
          }, 1000);
        }
      },
    });
  }
}

