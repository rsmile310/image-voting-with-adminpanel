const MAX_NEWS_INIT_RESULTS = 10;
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
    if (getCookie("news_voting" + votingId) !== "up") {
      $(this).addClass("active");
      if (getCookie("news_voting" + votingId) === "down") {
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

      setCookie("news_voting" + votingId, "up", 100);
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
    if (getCookie("news_voting" + votingId) !== "down") {
      $(this).addClass("active");
      if (getCookie("news_voting" + votingId) === "up") {
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
      setCookie("news_voting" + votingId, "down", 100);
    }
  });
  //voting script end
  // scroll load more script start
  $(".news-item").hide();
  $(".news-item").slice(0, MAX_NEWS_INIT_RESULTS).show();
  $(window).scroll(function () {
    if (
      $(window).scrollTop() >=
      $(document).height() - $(window).height() - 100
    ) {
      $(".news-item:hidden").slice(0, MAX_NEWS_INIT_RESULTS).slideDown();
    }
  });
  // scroll load more script end
  $(".share-btn").click(function (event) {
    event.preventDefault();
    let url = $(this).closest(".news-item").find(".news-title").attr("href");
    CopyToClipboard(url, "Link copied to clipboard");
  });
});

function updateVote(votingId, votesSumInit, votesCountInit) {
  $.ajax({
    type: "post",
    dataType: "json",
    url: "./controller/updateNewsController.php",
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
