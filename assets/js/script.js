const MAX_INIT_RESULTS = 10;
$(document).ready(function () {
  //voting script start
  $(".votingup-btn").click(function () {
    let votesSumInit = Number(
      $(this).closest(".vote-box").find(".votes-sum").text()
    );
    let votesCountInit = Number(
      $(this).closest(".vote-box").find(".votes-sum").attr("votes-count")
    );
    let votesSumEle = $(this).closest(".vote-box").find(".votes-sum");
    let votingId = $(this).attr("forId");
    if (getCookie("voting" + votingId) !== "up") {
      $(this).addClass("active");
      if (getCookie("voting" + votingId) === "down") {
        votesSumEle.text(votesSumInit + 2);
        updateVote(votingId, votesSumInit + 2, 0);
        $(this)
          .closest(".vote-box")
          .find(".votingdown-btn")
          .removeClass("active");
      } else {
        votesSumEle.text(votesSumInit + 1);
        updateVote(votingId, votesSumInit + 1, votesCountInit + 1);
      }

      setCookie("voting" + votingId, "up", 100);
    }
  });
  $(".votingdown-btn").click(function () {
    let votesSumInit = Number(
      $(this).closest(".vote-box").find(".votes-sum").text()
    );
    let votesCountInit = Number(
      $(this).closest(".vote-box").find(".votes-sum").attr("votes-count")
    );
    let votesSumEle = $(this).closest(".vote-box").find(".votes-sum");
    let votingId = $(this).attr("forId");
    if (getCookie("voting" + votingId) !== "down") {
      $(this).addClass("active");
      if (getCookie("voting" + votingId) === "up") {
        votesSumEle.text(votesSumInit - 2);
        updateVote(votingId, votesSumInit - 2, 0);
        $(this)
          .closest(".vote-box")
          .find(".votingup-btn")
          .removeClass("active");
      } else {
        votesSumEle.text(votesSumInit - 1);
        updateVote(votingId, votesSumInit - 1, votesCountInit + 1);
      }
      setCookie("voting" + votingId, "down", 100);
    }
  });
  //voting script end

  $(".share-btn").click(function (event) {
    event.preventDefault();
    let url = $(this).closest(".img-gallery-item").find("img").attr("src");
    url = BASE_URL + url;
    CopyToClipboard(url, "Link copied to clipboard");
  });

  // scroll load more script start
  $(".img-gallery-item").hide();
  $(".img-gallery-item").slice(0, MAX_INIT_RESULTS).show();
  $(window).scroll(function () {
    if (
      $(window).scrollTop() >=
      $(document).height() - $(window).height() - 100
    ) {
      $(".img-gallery-item:hidden").slice(0, MAX_INIT_RESULTS).slideDown();
    }
  });
  // scroll load more script end
});
// light box script
$(document).on("click", '[data-toggle="lightbox"]', function (event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
// light box script end

// image upload script start
var btnUpload = $("#upload_file"),
  btnOuter = $(".button_outer");
btnUpload.on("change", function (e) {
  var ext = btnUpload.val().split(".").pop().toLowerCase();
  if ($.inArray(ext, ["gif", "png", "jpg", "jpeg", "webp"]) == -1) {
    $(".error_msg").text("Not an Image...");
  } else {
    $(".error_msg").text("");
    btnOuter.addClass("file_uploading");
    setTimeout(function () {
      btnOuter.addClass("file_uploaded");
      $("#imgSubmitBtn").prop("disabled", false);
    }, 3000);
    var uploadedFile = URL.createObjectURL(e.target.files[0]);
    setTimeout(function () {
      $("#uploaded_view")
        .append('<img src="' + uploadedFile + '" />')
        .addClass("show");
    }, 3500);
  }
});
$(".file_remove").on("click", function (e) {
  $("#uploaded_view").removeClass("show");
  $("#uploaded_view").find("img").remove();
  btnOuter.removeClass("file_uploading");
  btnOuter.removeClass("file_uploaded");
  $("#upload_file").val("");
});

$("#imgUploadForm").on("submit", function (e) {
  e.preventDefault();
  if ($("#upload_file").val()) {
    var data = new FormData(this);
    $("#uploaded_view").removeClass("show");
    $("#uploaded_view").find("img").remove();
    btnOuter.removeClass("file_uploading");
    btnOuter.removeClass("file_uploaded");
    $("#upload_file").val("");
    $("#imgUploadModal").modal("hide");

    $.ajax({
      url: "controller/imgUploadSubmitController.php",
      type: "POST",
      processData: false,
      mimeType: "multipart/form-data",
      dataType: "json",
      contentType: false,
      data: data,
      success: function (response) {
        if (response) {
          $(".copy-notification").html(
            `<div class="alert alert-success d-flex mb-0">
              <div><img width="40px" height="40px" src="./assets/images/icon_message.svg" /></div>
              <p class="my-auto ml-1">Thank you for uploading an image! It has been added to moderation queue and will be published later if it's very wholesome.</p>
            </div>`
          );
          alertFunc();
        }
      },
    });
  } else {
    $(".error_msg").text("Please upload image...");
  }
});
// img upload script end
function updateVote(votingId, votesSumInit, votesCountInit) {
  $.ajax({
    type: "post",
    dataType: "json",
    url: "./controller/updateVoteController.php",
    data: {
      id: votingId,
      votesSum: votesSumInit,
      votesCount: votesCountInit,
    },
    success: function (response) {
      console.log(response);
    },
  });
}
