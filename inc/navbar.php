
<div class="container py-2">
  <div class="row">
    <div class="col-12 col-md-3 col-lg-3">
      <div class="d-flex justify-content-between align-items-center">
        <img src="assets/img/icon.png" class="icons">
        <button type="button" class="burger d-md-none" id="burger">
          <span class="burger_line"></span>
          <span class="burger_line"></span>
          <span class="burger_line"></span>
        </button>
      </div>
    </div>
    <div class="col-12 col-md-9 col-lg-9 ">
      <nav class="dark_bg" id="menu">
        <div class="text-center d-md-none">
        <img src="assets/img/icon.png" class="icons">
        </div>
        <ul class="nav pt-4">
        <li class="nav-item text-dark <?php if ($page == 'home') { echo "active-menu"; } ?>">
            <a class="nav-link hover-underline" href="./">Home</a>
        </li>
        <li class="nav-item text-dark <?php if ($page == 'about-us') { echo "active-menu"; } ?>">
            <a class="nav-link hover-underline" href="./">About Us</a>
        </li>
        <li class="nav-item text-dark <?php if ($page == 'our-services') { echo "active-menu"; } ?>">
            <a class="nav-link hover-underline" href="./">Our Services</a>
        </li>
        <li class="nav-item text-dark <?php if ($page == 'knowledge-&-research') { echo "active-menu"; } ?>">
            <a class="nav-link hover-underline" href="./">Knowledge & Research</a>
        </li>
        <li class="nav-item text-dark <?php if ($page == 'investor-login') { echo "active-menu"; } ?>">
            <a class="nav-link hover-underline" href="./">Investor Login</a>
        </li>
        <li class="nav-item text-dark <?php if ($page == 'contact-us') { echo "active-menu"; } ?>">
            <a class="nav-link hover-underline" href="./">Contact us</a>
        </li>
        </ul>
        <div class="contact_link d-md-none">
                  <div class="contact_icons ">
                  <i class="fa-solid fa-location-dot"></i>
                    <a href="mailto:sudipbhowmick80@gmail.com">96 Ernser Vista Suite 437, NY, US</a>
                  </div>
                  <div class="contact_icons">
                  <i class="fa-solid fa-phone"></i>
                    <a href="tel:918898244769">(123) 456-78-910</a>
                  </div>
                  <div class="contact_icons">
                  <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:sudipbhowmick80@gmail.com">Info@colorlib.com</a>
                  </div>
                </div>
                <div class="dropdown d-md-none pb-3">
               <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="assets/img/flag-ing.png" >  ENGLISH
               </button>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="#">English</a>
                 <a class="dropdown-item" href="#">Bengali</a>
              </div>
             </div>
              </div>
      </nav>
    </div>
  </div>
</div>
<style>
    .icons{
    width: 100px;
    height: 100px;
}
    </style>
