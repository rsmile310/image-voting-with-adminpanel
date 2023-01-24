const BASE_URL = "https://itsjustwholesome.com/";
$(document).ready(function () {
  // navbar responsive script
  $(".navbar-toggler").click(function () {
    if (!$(".navbar-menu-box").hasClass("show"))
      $(".navbar-menu-box").addClass("show");
  });
  $(".nav-mask").click(function () {
    if ($(".navbar-menu-box").hasClass("show"))
      $(".navbar-menu-box").removeClass("show");
  });
  //navbar responsive script end

  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $(".scroll-top").addClass("show");
    } else {
      $(".scroll-top").removeClass("show");
    }
  });

  $(".scroll-top").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "100");
  });
  $(".navbar-brand").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "100");
  });
});

function CopyToClipboard(value, notificationText) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val(value).select();
  document.execCommand("copy");
  $temp.remove();

  $(".copy-notification").html(
    `<div class="alert alert-success d-flex mb-0">
        <div><img width="40px" height="40px" src="./assets/images/icon_message.svg" /></div>
        <p class="my-auto ml-1">${notificationText}</p>
      </div>`
  );
  alertFunc();
}
