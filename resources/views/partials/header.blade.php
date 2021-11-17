@include("partials.loader")
<nav class="navbar navbar-light main-nav container-fluid pl-5 pr-5">
    <a class="navbar-brand" href="index.php"><img src="{{ url('assets/img/logos/logo.svg') }}" alt="" /></a>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link mr-4 txt-blue" href="#" data-toggle="modal" data-target=".regsitro">Regístrate <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn-custom" href="#" data-toggle="modal" data-target=".login">Iniciar sesion
          <img class="logo-login" src="{{ url('assets/img/iconos/user.png')}}" alt="" />
        </a>
      </li>
    </ul>
  </nav>


  <div class="container-menu">
    <div class="right" data-animation="to-bottom">
      <div class="link-a clic-nav">

        <div data-text="ABOUT US"  class="main-a">
          <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
            <path d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 25 11 A 3 3 0 0 0 22 14 A 3 3 0 0 0 25 17 A 3 3 0 0 0 28 14 A 3 3 0 0 0 25 11 z M 21 21 L 21 23 L 22 23 L 23 23 L 23 36 L 22 36 L 21 36 L 21 38 L 22 38 L 23 38 L 27 38 L 28 38 L 29 38 L 29 36 L 28 36 L 27 36 L 27 21 L 26 21 L 22 21 L 21 21 z"></path>
          </svg>
          PagoYa
          <div class="menu-hover">
            <strong>Nuestros valores</strong>
            <a href="{{ url('/team') }}">Visión - Misión</a>
            <a href="{{ url('/team') }}"> Equipo</a>
          </div>

        </div>
      </div>
      <div class="link-a clic-nav">
        <div data-text="EQUIPMENT" class="main-a">
          <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
            <path d="M 24 4.015625 C 16.289774 4.0178592 10 10.286931 10 18 C 10 21.999465 11.691407 25.619495 14.388672 28.167969 C 14.705917 28.467557 14.938931 28.889561 15.046875 29.373047 L 17.513672 40.476562 C 17.969216 42.527257 19.805576 44 21.90625 44 L 26.09375 44 C 28.194629 44 30.030487 42.527102 30.486328 40.476562 L 32.955078 29.373047 L 32.955078 29.371094 C 33.062069 28.888989 33.293691 28.469343 33.611328 28.169922 L 33.611328 28.167969 L 33.613281 28.167969 C 36.309356 25.619613 38 21.999465 38 18 C 38 10.286931 31.710226 4.0178592 24 4.015625 z M 24 7.015625 C 30.093774 7.0173908 35 11.909069 35 18 C 35 21.156535 33.67466 23.980731 31.550781 25.988281 C 30.753594 26.740588 30.250209 27.709621 30.025391 28.722656 L 28.853516 34 L 19.146484 34 L 17.974609 28.720703 C 17.748553 27.708189 17.245974 26.740693 16.449219 25.988281 C 14.324484 23.980755 13 21.156535 13 18 C 13 11.909069 17.906226 7.0173908 24 7.015625 z M 19.814453 37 L 28.185547 37 L 27.558594 39.826172 C 27.404435 40.519634 26.804871 41 26.09375 41 L 21.90625 41 C 21.192924 41 20.595862 40.521478 20.441406 39.826172 L 19.814453 37 z"></path>
          </svg>
          Soluciones
          <div class="menu-hover">
            <a href="#soluciones"> Botón de pagos</a>
            <a href="#soluciones"> Link de pagos</a>
            <a href="#soluciones"> Integración API Rest</a>
            <a href="#soluciones"> Micrositios de recaudo</a>
          </div>



        </div>
      </div>



      <a data-text="TOURS" href="blog.php" class="style-a">
        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#ffffff">
              <path d="M43,8.0625c-9.675,0 -17.46875,7.79375 -17.46875,17.46875v120.9375c0,9.80937 7.92813,17.46875 14.78125,17.46875h88.6875c4.70313,0 9.00208,-1.8823 12.36145,-5.1073c3.35938,-3.35937 5.1073,-7.65833 5.1073,-12.36145v-90.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125v90.03125c0,2.55312 -0.94063,4.8375 -2.6875,6.71875c-1.74687,1.88125 -4.16563,2.82135 -6.71875,2.82135h-88.6875c-2.28437,0 -6.71875,-4.03125 -6.71875,-9.40625v-121.07135c0,-5.24063 4.16562,-9.40625 9.40625,-9.40625h68.53125v9.40625c0,9.675 7.79375,17.46875 17.46875,17.46875h12.89948h0.53802c1.6125,0 3.09167,-1.07605 3.76355,-2.4198c0.26875,-0.5375 0.40155,-1.07395 0.40155,-1.61145v-0.53803c-0.13438,-8.0625 -3.35833,-15.58802 -9.00208,-21.36615c-6.04687,-5.77813 -13.84115,-9.00208 -22.03802,-9.00208zM119.59375,16.52917c4.56875,0.80625 8.73438,2.9552 12.09375,6.31458c3.35938,3.35938 5.50833,7.525 6.31458,12.09375h-9.00208c-5.24063,0 -9.40625,-4.16563 -9.40625,-9.40625zM69.875,34.9375c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74688,4.03125 4.03125,4.03125h32.25c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125zM56.4375,75.25c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74687,4.03125 4.03125,4.03125h59.125c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125zM56.4375,95.40625c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74687,4.03125 4.03125,4.03125h59.125c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125zM56.7052,115.5625c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74687,4.03125 4.03125,4.03125h38.96875c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125zM115.5625,115.5625c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path>
            </g>
          </g>
        </svg>
        Blog</a>
      <a data-text="CONTACT" href="{{ url('/doc') }}" class="style-a">
        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" width="1792" height="1792" viewBox="0 0 1792 1792">
          <path d="M553 1399l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23t-10 23l-393 393 393 393q10 10 10 23t-10 23zm591-1067l-373 1291q-4 13-15.5 19.5t-23.5 2.5l-62-17q-13-4-19.5-15.5t-2.5-24.5l373-1291q4-13 15.5-19.5t23.5-2.5l62 17q13 4 19.5 15.5t2.5 24.5zm657 651l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23t-10 23z" />
        </svg>
        Dev/Librería</a>
      <a data-text="CONTACT" href="" data-toggle="modal" data-target=".contact-modal" class="style-a">
        <svg class="icon-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#ffffff">
              <path d="M38.96875,1.34375c-9.675,0 -17.46875,7.79375 -17.46875,17.46875v9.40625h-2.6875c-5.9125,0 -10.75,4.8375 -10.75,10.75c0,5.9125 4.8375,10.75 10.75,10.75h13.4375c5.9125,0 10.75,-4.8375 10.75,-10.75c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,1.47812 -1.20938,2.6875 -2.6875,2.6875h-13.4375c-1.47812,0 -2.6875,-1.20938 -2.6875,-2.6875c0,-1.47812 1.20938,-2.6875 2.6875,-2.6875h6.71875c2.28438,0 4.03125,-1.74688 4.03125,-4.03125v-13.4375c0,-5.24062 4.16562,-9.40625 9.40625,-9.40625h102.125c5.24062,0 9.40625,4.16563 9.40625,9.40625v134.375c0,5.24062 -4.16563,9.40625 -9.40625,9.40625h-102.125c-5.24063,0 -9.40625,-4.16563 -9.40625,-9.40625v-9.40625h2.6875c5.9125,0 10.75,-4.8375 10.75,-10.75c0,-2.28438 -1.74688,-4.03125 -4.03125,-4.03125c-2.28437,0 -4.03125,1.74687 -4.03125,4.03125c0,1.47813 -1.20938,2.6875 -2.6875,2.6875h-13.4375c-1.47812,0 -2.6875,-1.20937 -2.6875,-2.6875c0,-1.47813 1.20938,-2.6875 2.6875,-2.6875h6.71875c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-16.125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125v12.09375h-2.6875c-5.9125,0 -10.75,4.8375 -10.75,10.75c0,5.9125 4.8375,10.75 10.75,10.75h2.6875v9.40625c0,9.675 7.79375,17.46875 17.46875,17.46875h102.125c9.675,0 17.46875,-7.79375 17.46875,-17.46875v-134.375c0,-9.675 -7.79375,-17.46875 -17.46875,-17.46875zM92.71875,32.25c-9.675,0 -17.46875,7.79375 -17.46875,17.46875c0,9.675 7.79375,17.46875 17.46875,17.46875c9.675,0 17.46875,-7.79375 17.46875,-17.46875c0,-9.675 -7.79375,-17.46875 -17.46875,-17.46875zM92.71875,40.3125c5.24063,0 9.40625,4.16562 9.40625,9.40625c0,5.24063 -4.16562,9.40625 -9.40625,9.40625c-5.24063,0 -9.40625,-4.16562 -9.40625,-9.40625c0,-5.24063 4.16562,-9.40625 9.40625,-9.40625zM25.53125,59.125c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125v12.09375h-2.6875c-5.9125,0 -10.75,4.8375 -10.75,10.75c0,5.9125 4.8375,10.75 10.75,10.75h13.4375c5.9125,0 10.75,-4.8375 10.75,-10.75c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,1.47812 -1.20938,2.6875 -2.6875,2.6875h-13.4375c-1.47812,0 -2.6875,-1.20938 -2.6875,-2.6875c0,-1.47813 1.20938,-2.6875 2.6875,-2.6875h6.71875c2.28438,0 4.03125,-1.74688 4.03125,-4.03125v-16.125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125zM64.5,95.40625c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74687,4.03125 4.03125,4.03125h37.625c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125zM122.28125,95.40625c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125zM64.5,115.5625c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74687,4.03125 4.03125,4.03125h57.78125c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125z"></path>
            </g>
          </g>
        </svg>
        Contáctanos
      </a>
    </div>
    <div class="left"></div>
    <div id="menuBtn">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span class="menu-t">Menú</span>

    </div>

  </div>
  <div class="menu-options">
    <a href="https://api.whatsapp.com/send?phone=+5800000" target="_blank" class="icons hover-ws" >
      <p>
        Nuestros horarios para atenderte por Business WhatsApp son de <br />
        <strong>Lunes a Viernes 8 AM - 6 PM</strong>
      </p>
      <svg width="46" height="46" viewBox="0 0 46 46" class="fill-white" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.2724 10.7966C33.6784 9.19211 31.7819 7.91988 29.6927 7.05361C27.6035 6.18734 25.3632 5.74425 23.1016 5.74999C13.6179 5.74999 5.89758 13.4684 5.89375 22.9559C5.89375 25.9881 6.68533 28.9474 8.18992 31.5579L5.75 40.4723L14.8714 38.0784C17.3945 39.4519 20.2212 40.1721 23.0939 40.1733H23.1016C32.5833 40.1733 40.3037 32.4549 40.3075 22.9674C40.314 20.7067 39.8724 18.4671 39.0082 16.378C38.1439 14.289 36.8742 12.392 35.2724 10.7966ZM23.1016 37.2696H23.0958C20.5342 37.2698 18.0198 36.5807 15.8163 35.2743L15.295 34.9638L9.88233 36.3841L11.3256 31.1075L10.9863 30.567C9.55418 28.287 8.79603 25.6484 8.79942 22.9559C8.80325 15.0707 15.2183 8.65566 23.1073 8.65566C24.9861 8.65149 26.8471 9.01998 28.5826 9.73983C30.318 10.4597 31.8935 11.5166 33.2178 12.8493C34.5491 14.1757 35.6044 15.7529 36.3225 17.4896C37.0407 19.2263 37.4075 21.0881 37.4018 22.9674C37.398 30.8526 30.9829 37.2696 23.1016 37.2696ZM30.9465 26.5573C30.5153 26.3407 28.4031 25.3019 28.0083 25.1582C27.6153 25.0144 27.3298 24.9435 27.0423 25.3728C26.7548 25.8022 25.9306 26.7701 25.6795 27.0576C25.4284 27.3451 25.1773 27.3796 24.748 27.1649C24.3187 26.9502 22.9329 26.496 21.2903 25.0317C20.0119 23.8912 19.1494 22.4844 18.8983 22.0532C18.6473 21.6219 18.8715 21.39 19.0881 21.1753C19.2817 20.9837 19.5174 20.6732 19.7321 20.4221C19.9468 20.171 20.0177 19.9927 20.1614 19.7052C20.3052 19.4177 20.2343 19.1667 20.125 18.952C20.0177 18.7354 19.1571 16.6194 18.7987 15.7588C18.4517 14.9251 18.0972 15.0362 17.8327 15.0247C17.5587 15.0135 17.2846 15.0084 17.0104 15.0094C16.7924 15.015 16.5779 15.0655 16.3803 15.1579C16.1828 15.2502 16.0064 15.3824 15.8623 15.5461C15.4675 15.9773 14.3578 17.0162 14.3578 19.1322C14.3578 21.2482 15.8987 23.2932 16.1134 23.5807C16.3281 23.8682 19.1456 28.2095 23.4581 30.0725C24.4854 30.5152 25.2866 30.7797 25.9095 30.9791C26.9387 31.3068 27.876 31.2589 28.6178 31.1497C29.4438 31.027 31.1612 30.1108 31.5196 29.1065C31.878 28.1022 31.878 27.2416 31.7707 27.0614C31.6633 26.8812 31.3739 26.772 30.9465 26.5573Z" />
      </svg>

    </a>
    <a data-toggle="modal" data-target=".faq" href="" class="icons"><svg width="40" height="40" viewBox="0 0 40 40" class="fill-white" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 6.66667C15.405 6.66667 11.6666 10.405 11.6666 15H15C15 12.2433 17.2433 10 20 10C22.7566 10 25 12.2433 25 15C25 16.7817 24.2433 17.4417 22.5316 18.7583C21.895 19.2483 21.1766 19.8017 20.4883 20.4883C18.3016 22.6733 18.325 24.8283 18.3333 25V28.3333H21.6666V24.985C21.6666 24.945 21.705 23.9833 22.845 22.845C23.3783 22.3117 23.9816 21.8483 24.5633 21.4C26.33 20.04 28.3333 18.5 28.3333 15C28.3333 10.405 24.595 6.66667 20 6.66667ZM18.3333 30H21.6666V33.3333H18.3333V30Z" />
      </svg>
    </a>
  </div>
  <p data-aos="zoom-out" class="btn-contact" data-toggle="modal" data-target=".contact-modal">Contáctanos</p>
  <div class="main-banner_shape">
    <img src="assets/img/Vector.svg" alt="">
  </div>
  </div>