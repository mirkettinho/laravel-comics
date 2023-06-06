<div class="footer-bg">
    <footer class="">
      <div class="top container">

        <div class="col">
        <h4>DC COMICS</h4>
        <nav>
          <ul>
            <li v-for="(link, index) in footerMenu.dcComics" :key="index">

            </li>
          </ul>
          <h4>SHOP</h4>
          <ul>
            <li v-for="(link, index) in footerMenu.shop" :key="index">

            </li>
          </ul>

        </nav>
        </div>

        <div class="col">
        <h4>DC</h4>
        <nav>
          <ul>
            <li v-for="(link, index) in footerMenu.dc" :key="index">

            </li>
          </ul>
        </nav>
        </div>

        <div class="col">
        <h4>SITES</h4>
        <nav>
          <ul>
            <li v-for="(link, index) in footerMenu.sites" :key="index">

            </li>
          </ul>
        </nav>
        </div>

        <div class="logo-bg">
          <!-- <img src="../assets/img/dc-logo-bg.png" alt=""> -->
        </div>

      </div>

      <div class="bottom">
        <div class="container flex">

          <div class="left">
            <a href="#">SIGN-UP NOW!</a>
          </div>

          <div class="right">
            <h4>FOLLOW US</h4>
            <img src="{{Vite::asset("public/img/footer-facebook.png")}}" alt="">
            <img src="{{Vite::asset("public/img/footer-periscope.png")}}" alt="">
            <img src="{{Vite::asset("public/img/footer-twitter.png")}}" alt="">
            <img src="{{Vite::asset("public/img/footer-youtube.png")}}" alt="">
          </div>
        </div>

      </div>
    </footer>
  </div>
