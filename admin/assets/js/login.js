$("document").ready(function () {
  $("#signinForm").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "../controller/loginController.php",
      dataType: "json",
      method: "post",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        if (response) {
          window.location.href = "dashboard.php";
        } else {
          $(".error-msg-box").html(
            '<div class="alert py-0 mb-0 mt-3 text-center text-danger">User is not allowed.</div>'
          );
        }
        alertFunc();
      },
    });
  });
});
