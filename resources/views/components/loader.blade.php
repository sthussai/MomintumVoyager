<style>

  /* ALL LOADERS */
  .loader-bg {
      height: 100%;
      width: 100%;
      display: block;
      position: fixed;
      z-index: 10;
      top: 0;
      left: 0;
      background-color: white;
      /*   background-color: rgba(0,0,0, 0.5); */
    }

    .loader {
      position: absolute;
      top: 50%;
      left: 40%;
      margin-left: 10%;
      transform: translate3d(-50%, -50%, 0);
      z-index: 10;
    }

 
    @-moz-keyframes slide {
      0% {
        transform: scale(1);
      }

      50% {
        opacity: 0.3;
        transform: scale(2);
      }

      100% {
        transform: scale(1);
      }
    }

    @-webkit-keyframes slide {
      0% {
        transform: scale(1);
      }

      50% {
        opacity: 0.3;
        transform: scale(2);
      }

      100% {
        transform: scale(1);
      }
    }

    @-o-keyframes slide {
      0% {
        transform: scale(1);
      }

      50% {
        opacity: 0.3;
        transform: scale(2);
      }

      100% {
        transform: scale(1);
      }
    }

    @keyframes slide {
      0% {
        transform: scale(1);
      }

      50% {
        opacity: 0.3;
        transform: scale(2);
      }

      100% {
        transform: scale(1);
      }
    }




.dot {
      z-index: 10;
      width: 24px;
      height: 24px;
      background: #3ac;
      border-radius: 100%;
      display: inline-block;
      animation: slide 1s infinite;
    }

    .dot:nth-child(1) {
      animation-delay: 0.1s;
      background: #32aacc;
    }

    .dot:nth-child(2) {
      animation-delay: 0.2s;
      background: #64aacc;
    }

    .dot:nth-child(3) {
      animation-delay: 0.3s;
      background: #96aacc;
    }

    .dot:nth-child(4) {
      animation-delay: 0.4s;
      background: #c8aacc;
    }

    .dot:nth-child(5) {
      animation-delay: 0.5s;
      background: #faaacc;
    }


</style>

<div class='loader-bg'>
    <div class='loader'>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </div>
  <script>
    /* $(".loader").delay(3000).fadeOut("slow"); */
    $(window).on("load", function() {
      $(".loader-bg").delay(10).fadeOut("slow");
    });
  </script>