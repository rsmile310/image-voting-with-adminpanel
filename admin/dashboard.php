<?php 
  if (session_status() === PHP_SESSION_NONE) @session_start();
  if(!isset($_SESSION['access_id']))
    header("Location: ./");
  include_once("../controller/config.php");
  $sql = "SELECT * FROM data_submissions ORDER BY id DESC";
  $result = $conn->query($sql); ?>
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
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/img-upload.css" />
    <link rel="stylesheet" href="../assets/css/ekko-lightbox.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <style>
      .img-gallery-item-footer {
      }
      .img-gallery-item .admin-img-gallery-item-footer {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 48px;
        background-color: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(25px);
      }
      header a {
        font-size: 24px;
        text-decoration: none !important;
      }
      main{
        max-width: 1440px !important;
      }
      @media (max-width: 1300px){
        .scroll-top{
          display: none;
        }
      }
    </style>
  </head>
  <body class="dashboard-page">
    <header class="px-3">
      <nav class="d-flex align-items-center justify-content-between mx-auto py-2">
        <div>
          <img
            width="90px"
            class="img-fluid"
            src="../assets/images/logo.svg"
            alt=""
          />
        </div>
        <div>
          <a href="../controller/logoutController.php">Log out</a>
        </div>
      </nav>
    </header>
    <main class="py-4 px-3">
      <div class="row img-gallery">
        <?php foreach($result as $data){ ?>
        <div class="img-gallery-item col-sm-6 col-md-4 col-lg-3 py-3">
          <div>
            <a
              href="<?php echo '../uploads/'.$data['filename'];?>"
              data-toggle="lightbox"
              data-gallery="gallery"
            >
              <img
                src="<?php echo '../uploads/'.$data['filename'];?>"
                class="rounded"
              />
            </a>
            <div
              class="admin-img-gallery-item-footer d-flex align-items-center justify-content-between px-4"
            >
              <a
                href="javascript: void(0)"
                class="approve-btn"
                forId="<?php echo $data['id'] ; ?>"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--material-symbols"
                  width="30"
                  height="30"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 24 24"
                  data-icon="material-symbols:check-circle"
                  data-width="30"
                  style="color: rgb(8, 183, 0)"
                >
                  <path
                    fill="currentColor"
                    d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z"
                  ></path>
                </svg>
              </a>
              <a
                href="javascript: void(0)"
                class="decline-btn"
                forId="<?php echo $data['id'] ; ?>"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--mdi"
                  width="30"
                  height="30"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 24 24"
                  data-icon="mdi:close-circle"
                  data-width="30"
                  style="color: rgb(229, 40, 33)"
                >
                  <path
                    fill="currentColor"
                    d="M12 2c5.53 0 10 4.47 10 10s-4.47 10-10 10S2 17.53 2 12S6.47 2 12 2m3.59 5L12 10.59L8.41 7L7 8.41L10.59 12L7 15.59L8.41 17L12 13.41L15.59 17L17 15.59L13.41 12L17 8.41L15.59 7Z"
                  ></path>
                </svg>
              </a>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/ekko-lightbox.min.js"></script>
    <script src="../assets/js/alert.js"></script>
    <script src="./assets/js/dashboard.js"></script>
  </body>
</html>
