<?php
/*
Template Name: Banjo Home template
*/
 wp_head();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Rusty Strings - Old School Banjo Band</title>
 
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <script
      src="https://kit.fontawesome.com/e87fb6e1d4.js"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.7/plyr.min.css"
    /> -->
    <style>
        /* 
      @import url("https://fonts.googleapis.com/css2?family=Almendra+SC&family=Roboto+Slab:wght@400;700&display=swap");

    
      .banjo-bg {
        background-image: url("https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80");
        background-size: cover;
        background-position: center;
        background-blend-mode: multiply;
      } */

      .title-font {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }

      .nav-link {
        position: relative;
      }

      .nav-link::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #d4a017;
        transition: width 0.3s ease;
      }

      .nav-link:hover::after {
        width: 100%;
      }

      .banjo-icon {
        transition: transform 0.3s ease;
      }

      .banjo-icon:hover {
        transform: rotate(15deg);
      }

      .gallery-item {
        transition:
          transform 0.3s ease,
          box-shadow 0.3s ease;
      }

      .gallery-item:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      }

      .vinyl {
        animation: spin 20s linear infinite;
      }

      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
    </style>
  </head>
  <body id="app">
    <!-- Navigation -->
    <nav class=" sticky top-0 z-50 shadow-lg">
      <div
        class="container mx-auto px-6 py-6 md:py-3 flex justify-between items-center"
      >
        <div class="flex items-center space-x-2">
          <span class="title-font text-xl md:text-2xl">San Francisco Banjo Band</span>
        </div>
        <div class="hidden md:flex space-x-8">
          <a
            href="#home"
            class="nav-link px-3 py-2 text-amber-100 hover:text-amber-300"
            >Home</a
          >
          <a
            href="#about"
            class="nav-link px-3 py-2 text-amber-100 hover:text-amber-300"
            >About</a
          >
          <a
            href="#music"
            class="nav-link px-3 py-2 text-amber-100 hover:text-amber-300"
            >Live</a
          >
          <a
            href="#media"
            class="nav-link px-3 py-2 text-amber-100 hover:text-amber-300"
            >Media</a
          >
          <a
            href="#contact"
            class="nav-link px-3 py-2 text-amber-100 hover:text-amber-300"
            >Contact</a
          >
        </div>
        <button
          class="md:hidden cream focus:outline-none"
          id="mobile-menu-button"
        >
          <i class="fas fa-bars text-3xl"></i>
        </button>
      </div>
      <!-- Mobile menu -->
      <div class="md:hidden hidden  px-6 py-3" id="mobile-menu">
        <div class="flex flex-col space-y-3">
          <a
            href="#home"
            class="nav-link text-right px-3 py-2 text-amber-100 hover:text-amber-300"
            >Home</a
          >
          <a
            href="#about"
            class="nav-link text-right px-3 py-2 text-amber-100 hover:text-amber-300"
            >About</a
          >
          <a
            href="#music"
            class="nav-link text-right px-3 py-2 text-amber-100 hover:text-amber-300"
            >Live</a
          >
          <a
            href="#media"
            class="nav-link text-right px-3 py-2 text-amber-100 hover:text-amber-300"
            >Media</a
          >
          <a
            href="#contact"
            class="nav-link text-right px-3 py-2 text-amber-100 hover:text-amber-300"
            >Contact</a
          >
        </div>
      </div>
    </nav>


    <!-- Hero Section -->
<section
  id="home"
  class="banjo-bg flex items-center min-h-[50%] py-[2rem] relative overflow-hidden"
>

  <!-- Dark overlay (optional if you want video dimmed) -->
  <!-- <div class="absolute inset-0 bg-black opacity-40 z-0 pointer-events-none"></div> -->

  <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center relative z-10 gap-10">

    <!-- LEFT COLUMN — TEXT -->
    <div class="text-left lg:w-2/3">
      <h1 class="title-font text-4xl md:text-6xl lg:text-7xl mb-6 cream">
        San Francisco Banjo Band
      </h1>

      <p class="text-xl md:text-2xl mb-8 max-w-xl">
        Keeping the old-time banjo tradition alive with foot-stomping,
        hand-clapping melodies
      </p>

      <div class="hero-cta flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 ">
        <a
          href="#music"
          class="special-button px-8 py-3 rounded-full font-bold transition duration-300 transform hover:scale-105 text-center"
        >
          Shows
        </a>

        <a
          href="#contact"
          class=" special-button bg-transparent border-2 px-8 py-3 rounded-full font-bold transition duration-300 transform hover:scale-105 text-center"
        >
          Book Us
        </a>
      </div>
    </div>

    <!-- RIGHT COLUMN — VIDEO -->
  <div class="relative w-full h-64 md:h-full overflow-hidden rounded-xl plyr--video  lg:w-1/3">  <a href="#media">
      <video
        class="w-full h-full object-cover"
        autoplay
        muted
        loop
        playsinline
      >
        <source
          src="/wp-content/uploads/2025/12/SFBB2.mp4"
          type="video/mp4"
        />
        Your browser does not support the video tag.
      </video> </a>
    </div>

  </div>

  <!-- Scroll-down arrow -->
  <!-- <div class="absolute bottom-10 left-0 right-0 text-center z-10">
    <a href="#about" class="hover:text-white animate-bounce inline-block">
      <i class="fas fa-chevron-down text-3xl"></i>
    </a>
  </div> -->

</section>

    <!-- Hero Section -->
    <!-- <section
      id="home"
      class="banjo-bg min-h-screen flex items-center justify-center relative overflow-hidden"
    > -->
      <!-- Video background -->
      <!-- <video
        class="absolute top-1/2 left-1/2 w-auto min-w-full min-h-full transform -translate-x-1/2 -translate-y-1/2 object-cover -z-10"
        autoplay
        muted
        loop
        playsinline
      >
        <source
          src="/wp-content/uploads/2025/08/San-Francisco-Banjo-Band-Five-Foot-Two.mp4"
          type="video/mp4"
        />
        Your browser does not support the video tag.
      </video> -->


      <!-- Scroll-down arrow -->
      <!-- <div class="absolute bottom-10 left-0 right-0 text-center z-10">
        <a
          href="#about"
          class=" hover:text-white animate-bounce inline-block"
        >
          <i class="fas fa-chevron-down text-3xl"></i>
        </a>
      </div> -->
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-4">
      <div class="container mx-auto">
        <h2
          class="title-font text-3xl md:text-4xl text-center mb-16 dark-blue"
        >
          Our Story
        </h2>

        <div class="flexm flex-colm md:flex-rowm items-center">
          <div class="mb-10 md:mb-0 md:pr-10"></div>

          <div class="dark-blue">
            <p>
              The San Francisco Banjo Band is celebrating its 65th year of
              entertaining throughout the Bay Area. The band often referred to
              as the "Best Kept Secret in the Bay Area," packs each performance
              with the songs our rich historical music past, and mainly on the
              only instrument said to be indigenous to America, The Banjo!
              Playing songs from Stephen Foster, the classics of vaudeville to
              Broadway, audiences are taken back to a "different time."
            </p>
            <p class="mt-6">
              The band was founded in 1975 by two exceptional banjo players, Ray
              Bell and Phil Smith. Not only did they entertain with music, Ray,
              an accomplished magician, would amaze the audience by performing
              his magic tricks in between songs. They played every Friday night
              at Molloy's Tavern in Colma for eighteen years. After a brief
              interlude the band continues to play at Molloy's Tavern the first
              Saturday of each month from 6:30pm to 8:30pm, with no cover
              charge.
            </p>
            <p class="mt-6">
              Thanks to the founding members the San Francisco Banjo Band
              continues their legacy of being a goodtime band and has played at
              Convention Centers, Political events, for the San Francisco
              Giants, Senior centers, civic celebrations, and good time sing
              alongs. The band currently consists of 15 members and play
              instruments, and along with banjos, that include the gut bucket,
              trombone, trumpet, tuba, washboard, kazoos, squawking rubber
              chickens, along with hula dancing. A true musical smorgasborg.
            </p>
            <p class="mt-6">
              We wish you well, and thank you for visiting our website and in
              reference to the popular song written in 1928, When Your Smiling
              the Whole World (ok, maybe not the' the whole world, but certainly
              others) Will Smile With You........
            </p>
          </div>

          <div class="glide py-20" id="intro">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides items-center">
                 <li class="glide__slide">
                  <a
                    href="https://sfbanjoband.com/wp-content/uploads/2026/01/DSC_5970-edited-1.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="https://sfbanjoband.com/wp-content/uploads/2026/01/DSC_5970-edited-1.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/malloys1972-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/malloys1972-scaled.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/don2-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/don2-scaled.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/daisy.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/daisy.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/billdon.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/billdon.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/1970banjo-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/1970banjo-scaled.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/1970band-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/1970band-scaled.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/stripevest-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/stripevest-scaled.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/redvestbanjo-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/redvestbanjo-scaled.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/oscar-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/oscar-scaled.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/mike.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/mike.jpg"
                    />
                  </a>
                </li>
                <li class="glide__slide">
                  <a
                    href="/wp-content/uploads/2025/08/malloysband-scaled.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="/wp-content/uploads/2025/08/malloysband-scaled.jpg"
                    />
                  </a>
                </li>
                  <li class="glide__slide">
                  <a
                    href="https://sfbanjoband.com/wp-content/uploads/2026/01/IMG_0606-rotated.jpg"
                    target="_blank"
                  >
                    <img
                      class="rounded-md m-auto h-[300px]"
                      src="https://sfbanjoband.com/wp-content/uploads/2026/01/IMG_0606-rotated.jpg"
                    />
                  </a>
                </li>
                 
              </ul>
            </div>
   <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
            <!-- Optional: navigation bullets -->
            <!-- <div class="glide__bullets" data-glide-el="controls[nav]">
              <button class="glide__bullet" data-glide-dir="=0"></button>
              <button class="glide__bullet" data-glide-dir="=1"></button>
              <button class="glide__bullet" data-glide-dir="=2"></button>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- Music Section -->
    <section id="music" class="py-20 bg-blue">
      <div class="container mx-auto px-6">
        <h2
          class="title-font text-3xl md:text-5xl text-center mb-16 cream"
        >
          Monthly show
        </h2>
        <div class="flex flex-col lg:flex-row items-center justify-center">
          <div class="lg:w-1/2 mb-10 lg:mb-0 relative">
            <a class=""
              target="_blank"
              href="/wp-content/uploads/2025/08/HPSCAN_20250718185503389_2025-07-18_185607554.pdf"
              ><img class="max-h-[75vh] rounded-lg"
                src="/wp-content/uploads/2025/08/1754531898136-b8f48e84-2763-47fb-9117-302cf96931a5_1.jpg"
                alt="Album Cover"
                class="rounded-2xl object-cover shadow-2xl mx-auto"
            /></a>
          </div>
          <div class="lg:w-1/2 ">
            <h3 class="pb-4">First Saturday of each month!</h3>
            <h4 class="title-font text-3xl mb-6 cream">
                1655 Mission Rd. South San Francisco, CA 94080
            </h4>
            <div class="space-y-4 mb-8">
    
              <h4 class="title-font">
                2:00pm - 4:00pm 
                </h4>
                <h4 class="title-font"> No cover charge  </h4>
                   <h4 class="title-font">Ample parking  </h4>
                <!-- <br />The band plays throughout The Bay Area and monthly at
                Molloys Tavern. -->
 
              <h4><a class="link red" target="_blank"
                href="https://maps.app.goo.gl/c1AmTWMwmxkPbzkR7">Get Directions</a></h4>

                <!-- dedicated page for molloys tavern? -->
            </div>
          </div>
        </div>
        <div>
          <h3 class="title-font text-center pt-10">
            If you would like to book a show
     <a
          href="#contact"
          class="link red"
        >
          Contact Us
        </a>

          </h3>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section id="media" class="py-20">
      <div class="container mx-auto px-6">
        <h2
          class="title-font text-3xl md:text-4xl text-center mb-16 dark-blue"
        >
          Media
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <div class="list-of-songs flex content-center flex-wrap">
            <ul class="list-none">
              <li id="alabama" class="active">
                <button>The Alabama Jubilee <i class="fa-solid fa-arrow-right"></i></button>
              </li>
              <li id="battle-of-new-orleans">
                <button>Battle of New Orleans</button>
              </li>
              <li id="bill-bailey">
                <button>Bill Bailey (remote)</button>
              </li>
              <li id="blue-swede-shoes">
                <button>Blue Swede Shoes</button>
              </li>
              <li id="burbon-street">
                <button>Bourbon Street</button>
              </li>
              <li id="five-foot">
                <button>Five Foot Two</button>
              </li>

              <li id="hot-time">
                <button>Hot Time in the Old Town Tonight</button>
              </li>
              <li id="i-wanna-be-like-you">
                <button>I wanna be like you</button>
              </li>
              <li id="sin-to-tell-lie">
                <button>It's a sin to tell a lie</button>
              </li>
              <li id="tipperary">
                <button>It's a Long Way to Tipperary</button>
              </li>
              <li id="sit-right-down">
                <button>I'm going to sit right down and write myself a letter
                </button>
              </li>

              <li id="invented-champagn">
                <button>Night they Invented Champagne</button>
              </li>

              <li id="san-francisco">
                <button>San Francisco Bay Blues</button>
              </li>

              <li id="stole-gal">
                <button>Somebody Stole My Gal</button>
              </li>

              <li id="sweet-georgia">
                <button>Sweet Georgia Brown (remote)</button>
              </li>
            </ul>
          </div>

          <div id="blue-swede-shoes-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/l4hPXs-lW1g?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="burbon-street-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/NX-s8QDPfQw?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="sin-to-tell-lie-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/Dx-qMQkG-PQ?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="sit-right-down-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/whEUu5ZDq8Q?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="battle-of-new-orleans-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/jWWoKp4hAcw?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="i-wanna-be-like-you-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/XAE8EJ5lo_c?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="invented-champagn-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/ETqNq1JDT-w?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="alabama-vid" class="video-wrapper">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/XaIeVut5xJk?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="tipperary-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/LsRyyXKI2xU?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>
          <div id="san-francisco-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/xXRjAbrT5hA?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="sweet-georgia-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/iLZC_RCqN0w?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="bill-bailey-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/dkOPmH9j1FE?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>

          <div id="hot-time-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/wPGZOQaWQrc?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>
          <div id="stole-gal-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/Jdy0bxPX6aY?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>
          <div id="five-foot-vid" class="video-wrapper hidden">
            <div class="plyr__video-embed relative">
              <iframe
                src="https://www.youtube.com/embed/U0qFIFVF9oA?origin=http://sfbanjo.local/&iv_load_policy=3&modestbranding=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-blue text-white">
      <div class="container mx-auto px-6">
        <h2
          class="title-font text-3xl md:text-4xl text-center mb-16 cream"
        >
          Get In Touch
        </h2>
        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10 pt-4">
            <h3 class="text-2xl mb-6 font-bold">
              Book The San Francisco Banjo band
            </h3>
            <p class="mb-8">
              Interested in having us perform at your event? Fill out the form
              and we'll get back to you. We play festivals, private parties, and
              more.
            </p>
            <div class="space-y-4">
              <div class="flex items-start">
                <i class="fas fa-map-marker-alt red mt-1 mr-3"></i>
                <span class="font-bold">Based in the Bay Area</span>
              </div>
   
            </div>

          </div>
          <div class="md:w-1/2">
                 <?php echo do_shortcode('[wpforms id="13"]'); ?>
          </div>
        </div>
      </div>
    </section>

<?php wp_footer(); ?>

    <!-- <script>
      // Mobile menu toggle
      document
        .getElementById("mobile-menu-button")
        .addEventListener("click", function () {
          const menu = document.getElementById("mobile-menu");
          menu.classList.toggle("hidden");
        });

      // Smooth scrolling for navigation links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();

          const targetId = this.getAttribute("href");
          const targetElement = document.querySelector(targetId);

          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 80,
              behavior: "smooth",
            });

            // Close mobile menu if open
            const mobileMenu = document.getElementById("mobile-menu");
            if (!mobileMenu.classList.contains("hidden")) {
              mobileMenu.classList.add("hidden");
            }
          }
        });
      });

      // Change navbar style on scroll
      window.addEventListener("scroll", function () {
        const nav = document.querySelector("nav");
        if (window.scrollY > 50) {
          nav.classList.add("shadow-xl");
          nav.classList.add("bg-opacity-90");
        } else {
          nav.classList.remove("shadow-xl");
          nav.classList.remove("bg-opacity-90");
        }
      });
    </script> -->
    <!-- <script src="https://cdn.plyr.io/3.8.3/plyr.js"></script> -->
  </body>
</html>
