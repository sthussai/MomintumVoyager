<style>
  /* The overlay effect with black background */
  .overlay {
      height: 100%;
      width: 100%;
      display: none;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.7);
      /* Black with a little bit see-through */
    }

    /* The content */
    .overlay-content {
      position: relative;
      top: 140px;
      max-width: 50%;
      text-align: center;
      margin-top: 20px;
      margin: auto;
      overflow: auto;
      border: solid 2px white;
    }

    /* Close button */
    .overlay .closebtn {
      position: absolute;
      top: 20px;
      right: 45px;
      font-size: 60px;
      cursor: pointer;
      color: white;
    }

    .overlay .closebtn:hover {
      color: #ccc;
    }

    /* Style the search field */
    .overlay input[type=text] {
      padding: 15px;
      font-size: 17px;
      border: solid;
      background: white;
      width: 100%;
    }

    .overlay input[type=text]:hover {
      background: #f1f1f1;
    }

    .overlay input[type=text]:focus {
      border-width: 5px;
      border-color: lightskyblue;

    }

    @media only screen and (max-width: 800px) {
      .overlay-content {
      max-width: 90%;
  }
}

</style>

<div id="myOverlay" title="Close Overlay" class="overlay w3-animate-right">
    <span class="closebtn" onclick="" title="Close Overlay">x</span>
    <div class="overlay-content" >
      <input id="search" autocomplete="off" type="text" placeholder="Search Programs and Events" name="search" class="w3-mobile" autofocus>
      <div id="results" style="overflow:auto" class="w3-content w3-white"></div>
    </div>

  </div>