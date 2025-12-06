import Glide from "@glidejs/glide";
import "@glidejs/glide/dist/css/glide.core.min.css";
import "@glidejs/glide/dist/css/glide.theme.min.css";

(function () {
  "use strict";

  // document.addEventListener('DOMContentLoaded', () => {
  //   new Glide('.glide', {
  //     type: 'carousel',
  //     startAt: 0,
  //     perView: 4,
  //     autoplay: 3000, // optional
  //   }).mount();
  // });

  // select.addEventListener('change', function (event) {
  //   glide.update({
  //     type: event.target.value
  //   })
  // })
  var glide = new Glide("#intro", {
    type: "carousel",
    perView: 4,
    focusAt: "center",
    autoplay: 3000,
    breakpoints: {
      800: {
        perView: 2,
      },
      480: {
        perView: 1,
      },
    },

  });

  glide.mount();

  // Switching to mobile: https://developer.mozilla.org/en-US/docs/Web/API/MediaQueryList/onchange
  const isMobile = window.matchMedia(
    "(max-width: " +
      getComputedStyle(document.body).getPropertyValue(
        "--custom--media-max-width--sm"
      ) +
      ")"
  );
  const navigationResponsiveContainer = document.querySelector(
    ".site-header .wp-block-navigation__responsive-container"
  );
  isMobile.onchange = (e) => {
    if (e.matches) {
      // <= Mobile
    } else {
      // > Mobile
      // Autoclose header nav container if modal is open and browser window gets resized.
      if (
        document.body.contains(navigationResponsiveContainer) &&
        navigationResponsiveContainer.classList.contains("is-menu-open")
      ) {
        document
          .querySelector(
            ".site-header .wp-block-navigation__responsive-container-close"
          )
          .click();
      }
    }
  };

  // Style password protected post form.
  const passwordButton = document.querySelector(
    '.post-password-form [type="submit"]'
  );
  if (document.body.contains(passwordButton)) {
    const passwordButtonWrapper = document.createElement("div");
    passwordButtonWrapper.classList.add("wp-block-button");
    passwordButton.parentNode.insertBefore(
      passwordButtonWrapper,
      passwordButton
    );
    passwordButtonWrapper.appendChild(passwordButton);

    passwordButton.classList.add("wp-block-button__link");
  }
})();
const videos = document.querySelectorAll(".video-container");

// videos.forEach((video) => {
//   console.log("fire");
//   video.addEventListener("click", () => {
//     console.log("fire");
//     videos.forEach((v) => {
//       if (v !== video) {
//         v.contentWindow.postMessage(
//           JSON.stringify({ event: "command", func: "stopVideo", args: [] }),
//           "*"
//         );
//       }
//     });
//   });
// });

  const players = Plyr.setup('.plyr__video-embed', {
    youtube: {
      noCookie: true,
      rel: 0,
      modestbranding: 1,
    },
//   controls: [
//   'play-large', // The large play button in the center
//   'restart', // Restart playback
//   'rewind', // Rewind by the seek time (default 10 seconds)
//   'play', // Play/pause playback
//   'fast-forward', // Fast forward by the seek time (default 10 seconds)
//   'progress', // The progress bar and scrubber for playback and buffering
//   'current-time', // The current time of playback
//   'duration', // The full duration of the media
//   'mute', // Toggle mute
//   'volume', // Volume control
//   'captions', // Toggle captions
//   'settings', // Settings menu
//   'pip', // Picture-in-picture (currently Safari only)
//   'airplay', // Airplay (currently Safari only)
//   'download', // Show a download button with a link to either the current source or a custom URL you specify in your options
//   'fullscreen', // Toggle fullscreen
// ]
});

players.forEach((player, index) => {
  player.on('play', () => {
    players.forEach((otherPlayer, otherIndex) => {
      if (index !== otherIndex) {
        otherPlayer.pause();
      }
    });
  });
});

document.querySelectorAll(".list-none li").forEach(li => {
  li.addEventListener("click", () => {

    // Remove active class from all items
    document.querySelectorAll(".list-none li").forEach(item => {
      item.classList.remove("active");

      // Remove existing icons
      const icon = item.querySelector("i");
      if (icon) icon.remove();
    });

    // Add active class to clicked item
    li.classList.add("active");

    // Add Font Awesome arrow
    li.querySelector("button").insertAdjacentHTML(
      "beforeend",
      ' <i class="fa-solid fa-arrow-right"></i>'
    );

    // Hide all video wrappers
    document.querySelectorAll(".video-wrapper").forEach(vid =>
      vid.classList.add("hidden")
    );

    // Pause all players
    players.forEach(player => player.pause());

    // Show the correct video
    const target = document.getElementById(li.id + "-vid");
    if (target) target.classList.remove("hidden");
  });
});


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



  // const menuBtn = document.getElementById("mobile-menu-button");
  // const mobileMenu = document.getElementById("mobile-menu");
  // const menuIcon = menuBtn.querySelector("i");

  // menuBtn.addEventListener("click", () => {
  //   mobileMenu.classList.toggle("hidden");

  //   // toggle icon
  //   if (mobileMenu.classList.contains("hidden")) {
  //     menuIcon.classList.remove("fa-times");
  //     menuIcon.classList.add("fa-bars");
  //   } else {
  //     menuIcon.classList.remove("fa-bars");
  //     menuIcon.classList.add("fa-times");
  //   }
  // });

