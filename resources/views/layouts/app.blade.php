<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      @yield('title', 'DevHabbos - Início')
    </title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>

  <body>
    @include('layouts.components.navbar')
    @yield('content')

    <a href="javascript:void(0)" class="hidden items-center justify-center bg-primary text-white w-10 h-10 rounded-md fixed bottom-8 right-8 left-auto z-[999] hover:bg-dark back-to-top shadow-md transition duration-300 ease-in-out">
      <span class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"></span>
    </a>

    @include('layouts.components.footer')

    <script src="assets/js/main.js"></script>
    <style>
      .navbar-logo {
        color: white; /* Defina a cor padrão do logo */
      }
    
      .navbar-logo-black {
        color: rgb(48 86 211 / var(--tw-bg-opacity)); /* Defina a cor do logo quando a barra de rolagem for acionada */
      }
    </style>
    
    <script>
      window.addEventListener('scroll', function() {
        var navbarLogo = document.querySelector('.navbar-logo');
        if (window.pageYOffset > 0) {
          navbarLogo.classList.add('navbar-logo-black');
        } else {
          navbarLogo.classList.remove('navbar-logo-black');
        }
      });
    
      const pageLink = document.querySelectorAll(".ud-menu-scroll");
    
      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });
    
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;
    
        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }
    
      window.document.addEventListener("scroll", onScroll);
    </script>
  </body>
</html>
