<?php 
  include_once("controller/config.php");
  $sql = "SELECT * FROM data_news ORDER BY date DESC";
  $result = $conn->query($sql); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Wholesome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/favicon/favicon.png"
    />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/news.css" />
  </head>
  <body class="home-page">
    <?php include_once("header.php"); ?>
    <main class="py-4 px-3">
      <div class="news-wrapper">
        <?php foreach($result as $data){ ?>
          <div class="news-item row mb-4">
            <div class="col-xl-3 mb-2 mb-xl-0">
              <div class="news-img-box mr-4">
                <img src="<?php echo $data['image'];?>" alt="" />
              </div>
            </div>
            <div class="news-body col-xl-9">
              <a href="https://www.<?php echo $data['url']; ?>" target="_blank"
                ><?php echo $data['url']; ?></a
              >
              <a class="news-title" href="https://www.<?php echo $data['url']; ?>" target="_blank"
                ><h3>
                <?php echo $data['title']; ?>
                </h3></a
              >
              <div class="news-desc-box mb-3">
                <p>
                  <?php echo $data['desc']; ?>
                </p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <p class="date-text"><?php $date=date_create($data['date']); echo date_format($date,"l jS \of F Y"); ?></p>
                <div class="news-btn-box px-3">
                  <div class="vote-box d-flex align-items-center mr-3">
                    <a
                      href="javascript: void(0)"
                      class="votingup-btn d-flex <?php if(isset($_COOKIE["news_voting".$data['id']])&&$_COOKIE["news_voting".$data['id']]=="up") echo "active";?>" forId="<?php echo $data['id']; ?>"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 256 256"
                      >
                        <path
                          fill="currentColor"
                          d="m229.7 114.3l-96-96a8.1 8.1 0 0 0-11.4 0l-96 96a8.4 8.4 0 0 0-1.7 8.8A8 8 0 0 0 32 128h40v80a16 16 0 0 0 16 16h80a16 16 0 0 0 16-16v-80h40a8 8 0 0 0 7.4-4.9a8.4 8.4 0 0 0-1.7-8.8ZM176 112a8 8 0 0 0-8 8v88H88v-88a8 8 0 0 0-8-8H51.3L128 35.3l76.7 76.7Z"
                        />
                      </svg>
                    </a>
                    <div class="px-2">
                      <p
                        class="votes-sum my-0"
                        votes-sum="<?php echo $data['votes_sum']; ?>"
                        votes-count="<?php echo $data['votes_count'];?>"
                      >
                        <?php echo $data['votes_sum']; ?>
                      </p>
                    </div>
                    <a
                      href="javascript: void(0)"
                      class="votingdown-btn d-flex <?php if(isset($_COOKIE["news_voting".$data['id']])&&$_COOKIE["news_voting".$data['id']]=="down") echo "active";?>"
                      forId="<?php echo $data['id']; ?>"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 256 256"
                      >
                        <path
                          fill="currentColor"
                          d="M231.4 132.9a8 8 0 0 0-7.4-4.9h-40V48a16 16 0 0 0-16-16H88a16 16 0 0 0-16 16v80H32a8 8 0 0 0-7.4 4.9a8.4 8.4 0 0 0 1.7 8.8l96 96a8.2 8.2 0 0 0 11.4 0l96-96a8.4 8.4 0 0 0 1.7-8.8ZM128 220.7L51.3 144H80a8 8 0 0 0 8-8V48h80v88a8 8 0 0 0 8 8h28.7Z"
                        />
                      </svg>
                    </a>
                  </div>
                  <a href="javascript: void(0)" class="share-btn">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="26"
                      height="26"
                      preserveAspectRatio="xMidYMid meet"
                      viewBox="0 0 26 26"
                    >
                      <path
                        fill="currentColor"
                        d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363q.025-.187.075-.337l-7.05-4.1q-.425.375-.95.587Q6.575 15 6 15q-1.25 0-2.125-.875T3 12q0-1.25.875-2.125T6 9q.575 0 1.1.212q.525.213.95.588l7.05-4.1q-.05-.15-.075-.337Q15 5.175 15 5q0-1.25.875-2.125T18 2q1.25 0 2.125.875T21 5q0 1.25-.875 2.125T18 8q-.575 0-1.1-.213q-.525-.212-.95-.587L8.9 11.3q.05.15.075.337Q9 11.825 9 12t-.025.362q-.025.188-.075.338l7.05 4.1q.425-.375.95-.588Q17.425 16 18 16q1.25 0 2.125.875T21 19q0 1.25-.875 2.125T18 22Zm0-16q.425 0 .712-.287Q19 5.425 19 5t-.288-.713Q18.425 4 18 4t-.712.287Q17 4.575 17 5t.288.713Q17.575 6 18 6ZM6 13q.425 0 .713-.288Q7 12.425 7 12t-.287-.713Q6.425 11 6 11t-.713.287Q5 11.575 5 12t.287.712Q5.575 13 6 13Zm12 7q.425 0 .712-.288Q19 19.425 19 19t-.288-.712Q18.425 18 18 18t-.712.288Q17 18.575 17 19t.288.712Q17.575 20 18 20Zm0-15ZM6 12Zm12 7Z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="copy-notification"></div>
      <button class="scroll-top">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="1em"
          height="1em"
          preserveAspectRatio="xMidYMid meet"
          viewBox="0 0 256 256"
        >
          <path
            d="M128 26a102 102 0 1 0 102 102A102.2 102.2 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm38.2-100.3a6.1 6.1 0 0 1 0 8.5a5.9 5.9 0 0 1-4.3 1.7a5.8 5.8 0 0 1-4.2-1.7L134 102.5V168a6 6 0 0 1-12 0v-65.5l-23.7 23.7a6 6 0 0 1-8.5-8.5l34-33.9a5.8 5.8 0 0 1 8.4 0Z"
          />
        </svg>
      </button>
    </main>
    <script src="./assets/js/cookie.js"></script>
    <script src="./assets/js/darkmode.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/alert.js"></script>
    <script src="./assets/js/all.js"></script>
    <script src="./assets/js/news.js"></script>
  </body>
</html>
