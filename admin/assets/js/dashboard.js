const MAX_INIT_RESULTS = 12;
$(document).ready(function () {
  $(".img-gallery-item").hide();
  $(".img-gallery-item").slice(0, MAX_INIT_RESULTS).show();
  $(window).on("scroll", function () {
    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
      $(".img-gallery-item:hidden").slice(0, MAX_INIT_RESULTS).slideDown();
    }
  });

  $(".decline-btn").on("click", function () {
    let itemEle = $(this).closest(".img-gallery-item");
    let forId = $(this).attr("forId");
    let imgName = $(this).closest(".img-gallery-item").find("img").attr("src");
    // imgName = imgName.split("/")[2];
    ezBSAlert({
      type: "confirm",
      messageText: "Are you sure you want to delete?",
      alertType: "danger",
    }).done(function (e) {
      if (e) {
        $.ajax({
          type: "post",
          dataType: "json",
          url: "../controller/deleteImageController.php",
          data: {
            id: forId,
            imgName: imgName,
          },
          success: function (response) {
            if (response) {
              itemEle.remove();
              $(".copy-notification").html(
                `<div class="alert alert-success d-flex mb-0">
                  <div><img width="40px" height="40px" src="../assets/images/icon_message.svg" /></div>
                  <p class="my-auto ml-1">Declined successfully!</p>
                </div>`
              );
              alertFunc();
            }
          },
        });
      }
    });
  });

  $(".approve-btn").on("click", function () {
    let itemEle = $(this).closest(".img-gallery-item");
    let forId = $(this).attr("forId");
    let imgName = $(this).closest(".img-gallery-item").find("img").attr("src");
    // imgName = imgName.split("/")[2];
    $.ajax({
      type: "post",
      dataType: "json",
      url: "../controller/approveImageController.php",
      data: {
        id: forId,
        imgName: imgName,
      },
      success: function (response) {
        if (response) {
          itemEle.remove();
          $(".copy-notification").html(
            `<div class="alert alert-success d-flex mb-0">
              <div><img width="40px" height="40px" src="../assets/images/icon_message.svg" /></div>
              <p class="my-auto ml-1">Approved successfully!</p>
            </div>`
          );
          alertFunc();
        }
      },
    });
  });

  // light box script
  $(document).on("click", '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
  // light box script end
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
});
