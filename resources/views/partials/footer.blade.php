<div class="bg">
    <footer class="">
        <h1>footer</h1>
      <div class="top container">

        <div class="col">
        <h4>DC COMICS</h4>
        <nav>
          <ul>
            <li v-for="(link, index) in footerMenu.dcComics" :key="index">
              <a </a>
            </li>
          </ul>
          <h4>SHOP</h4>
          <ul>
            <li v-for="(link, index) in footerMenu.shop" :key="index">
              <a </a>
            </li>
          </ul>

        </nav>
        </div>

        <div class="col">
        <h4>DC</h4>
        <nav>
          <ul>
            <li v-for="(link, index) in footerMenu.dc" :key="index">
              <a </a>
            </li>
          </ul>
        </nav>
        </div>

        <div class="col">
        <h4>SITES</h4>
        <nav>
          <ul>
            <li v-for="(link, index) in footerMenu.sites" :key="index">
              <a </a>
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
            <img src="../assets/img/footer-twitter.png" alt="">
            <img src="../assets/img/footer-youtube.png" alt="">
            <img src="../assets/img/footer-pinterest.png" alt="">
            <img src="../assets/img/footer-periscope.png" alt="">
          </div>
        </div>

      </div>
    </footer>
  </div>
