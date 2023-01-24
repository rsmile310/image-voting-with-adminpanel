<?php 
  include_once("controller/config.php");
  $sql = "SELECT * FROM data_images ORDER BY sort_id DESC";
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
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/img-upload.css" />
    <link
      rel="stylesheet"
      href="./assets/css/ekko-lightbox.css"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <style>
      .nav-item:first-child .nav-link{
        color: #0056b3;
      }
      @media (max-width: 800px){
        .scroll-top{
          display: none;
        }
      }
    </style>
  </head>
  <body class="home-page">
    <?php include_once("header.php"); ?>
    <main class="py-4 px-3 max-w-640">
      <div class="img-gallery">
        <?php foreach($result as $data){ ?>
        <div class="img-gallery-item py-3">
          <div>
            <a
              href="<?php echo 'img/'.$data['filename'];?>"
              data-toggle="lightbox"
              data-gallery="gallery"
            >
              <img
                src="<?php echo 'img/'.$data['filename'];?>"
              />
            </a>
          </div>
          <div
              class="img-gallery-item-footer d-flex align-items-center justify-content-between px-4"
            >
              <div class="vote-box">
                <a
                  href="javascript: void(0)"
                  class="votingup-btn text-white d-flex <?php if(isset($_COOKIE["voting".$data['id']])&&$_COOKIE["voting".$data['id']]=="up") echo "active";?>" forId="<?php echo $data['id']; ?>"
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
                  class="votingdown-btn text-white d-flex <?php if(isset($_COOKIE["voting".$data['id']])&&$_COOKIE["voting".$data['id']]=="down") echo "active";?>"
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
              <a href="javascript: void(0)" class="share-btn text-white">
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
                  />
                </svg>
              </a>
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
    <!-- modal start -->
    <div
      class="modal fade"
      id="imgUploadModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-4 px-3">
          <div class="modal-header border-0 mb-4">
            <h3 class="modal-title text-body">
              Please upload image and submit.
            </h3>
          </div>
          <form id="imgUploadForm" class="modal-body mb-4">
            <div class="panel">
              <div class="file-upload-btn-box">
                <div class="init-upload-box">
                  <p class="text-body">
                    Browse .jpg, .jpeg, .png, .gif, .webp images
                  </p>
                </div>

                <div class="button_outer">
                  <div class="btn_upload default-btn">
                    <input type="file" id="upload_file" name="upload_file" />
                    Browse image
                  </div>
                  <div class="processing_bar"></div>
                </div>
              </div>

              <div class="error_msg"></div>
              <div class="uploaded_file_view" id="uploaded_view">
                <span
                  class="file_remove d-flex justify-content-center align-items-center"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24px"
                    height="24px"
                    preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6Z"
                    />
                  </svg>
                </span>
              </div>
            </div>
            <div class="border-0 mt-4 text-right">
              <button
                id="imgSubmitBtn"
                class="default-btn w-120 mr-2"
                type="submit"
                disabled
              >
                Submit
              </button>
              <button
                type="button"
                class="default-btn bg-danger w-120"
                data-dismiss="modal"
              >
                Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- modal end -->
    <script src="./assets/js/cookie.js"></script>
    <script src="./assets/js/darkmode.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/ekko-lightbox.min.js"></script>
    <script src="./assets/js/alert.js"></script>
    <script src="./assets/js/all.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
