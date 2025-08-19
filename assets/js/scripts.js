document.addEventListener("DOMContentLoaded", function () {
  const inject = async (id, file) => {
    const target = document.getElementById(id);
    if (target) {
      try {
        const res = await fetch(file);
        const html = await res.text();
        target.innerHTML = html;

        // to update the year for footer after injecting it to page
        const years = document.querySelectorAll(".currentYear");
        const thisYear = new Date().getFullYear();
        years.forEach((el) => (el.textContent = thisYear));
      } catch (e) {
        console.error(`Could not load ${file}:`, e);
      }
    }
  };

  inject("header", "components/header.html");
  inject("footer", "components/footer.html");


  // for scrolling to top of the content on nav button click
  document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', function () {
      const tabContent = document.querySelector('.tab-content');
      const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
      const offsetTop = tabContent.getBoundingClientRect().top + window.pageYOffset - navbarHeight - 20;

      window.scrollTo({
        top: offsetTop,
        behavior: 'smooth'
      });
    });
  });

});


// security-agent-slider
$(document).ready(function () {
  $('.security-agent-slider').on('init reInit afterChange', function (event, slick, currentSlide) {
    $('.slick-dots li').removeClass('animating');
    $('.slick-dots li.slick-active').addClass('animating');
  });

  $(".security-agent-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 600,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: true,
    pauseOnFocus: false,
    cssEase: 'ease',
    responsive: [
      {
        breakpoint: 992, // tablets
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576, // mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});

// testimonial-slider
$(".testimonial-slider").slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 600,
  slidesToShow: 3,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 5000,
  pauseOnHover: true,
  pauseOnFocus: false,
  cssEase: 'ease',
  responsive: [
    {
      breakpoint: 992, // tablets
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 576, // mobile
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// benefit-cards-slider
$(document).ready(function () {
  $('.benefit-cards-slider').on('init reInit afterChange', function (event, slick, currentSlide) {
    $('.slick-dots li').removeClass('animating');
    $('.slick-dots li.slick-active').addClass('animating');
  });

  $(".benefit-cards-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 600,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: true,
    pauseOnFocus: false,
    cssEase: 'ease',
    responsive: [
      {
        breakpoint: 992, // tablets
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 576, // mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // When slider changes, update active tab
$(".benefit-cards-slider").on("afterChange", function (event, slick, currentSlide) {
  $(".tab-btn").removeClass("active");
  let $activeTab = $('.tab-btn[data-slide="' + currentSlide + '"]').addClass("active");

  // Scroll horizontally inside .left-tabs so active tab stays visible
  let $tabsWrapper = $(".left-tabs");
  let tab = $activeTab[0];
  let wrapper = $tabsWrapper[0];

  // Calculate how far to scroll
  let offsetLeft = tab.offsetLeft - (wrapper.clientWidth / 2) + (tab.clientWidth / 2);

  $tabsWrapper.animate({ scrollLeft: offsetLeft }, 400); // smooth scroll
});

// When tab is clicked, go to respective slide
$(".tab-btn").on("click", function () {
  var slideIndex = $(this).data("slide");
  $(".benefit-cards-slider").slick("slickGoTo", slideIndex);

  // Update active tab
  $(".tab-btn").removeClass("active");
  $(this).addClass("active");

  // Scroll horizontally inside .left-tabs
  let $tabsWrapper = $(".left-tabs");
  let tab = this;
  let wrapper = $tabsWrapper[0];
  let offsetLeft = tab.offsetLeft - (wrapper.clientWidth / 2) + (tab.clientWidth / 2);

  $tabsWrapper.animate({ scrollLeft: offsetLeft }, 400);
});

});




// for changing the tab on scroll
$(document).ready(function () {
  const contentSections = $('.content-section');
  const navigation = $('#custom-scroll-tabs');

  // Smooth scroll on click
  navigation.on('click', 'a', function (e) {
    e.preventDefault();
    scrollToTarget($(this).attr('href'));
  });

  // Update nav highlight on scroll
  $(window).on('scroll', function () {
    updateActiveTab();
  });

  // Initial state
  updateActiveTab();

  function updateActiveTab() {
    contentSections.each(function () {
      const section = $(this);
      const sectionId = section.attr('id');
      const link = navigation.find(`a[href="#${sectionId}"]`);

      if (
        section.offset().top - $(window).height() / 2 < $(window).scrollTop() &&
        section.offset().top + section.outerHeight() - $(window).height() / 2 > $(window).scrollTop()
      ) {
        navigation.find('a').removeClass('active');
        link.addClass('active');
      }
    });
  }

  function scrollToTarget(selector) {
    const target = $(selector);
    if (target.length) {
      $('html, body').animate(
        {
          scrollTop: target.offset().top - 100, // adjust offset if header overlaps
        },
        800
      );
    }
  }
});


// for arrow animation start only when in viewport
document.addEventListener("DOMContentLoaded", () => {
  const svg = document.getElementById("arrowSvg");
  const stop1 = document.getElementById("stop1");
  const stop2 = document.getElementById("stop2");

  // Reset initial state (no fill)
  stop1.setAttribute("offset", "0%");
  stop2.setAttribute("offset", "0%");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Animate gradient manually
        let start = null;
        const duration = 500; // 3s

        function animateFill(timestamp) {
          if (!start) start = timestamp;
          let progress = (timestamp - start) / duration;
          if (progress > 1) progress = 1;

          stop1.setAttribute("offset", progress);
          stop2.setAttribute("offset", progress);

          if (progress < 1) {
            requestAnimationFrame(animateFill);
          }
        }

        requestAnimationFrame(animateFill);

        observer.unobserve(svg); // Run only once
      }
    });
  }, { threshold: 0.5 });

  observer.observe(svg);
})

// to play the gif once(how hoplon works section)
document.addEventListener("DOMContentLoaded", () => {
  const gif = document.getElementById("hoplonGif");

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Load & play GIF when visible
        gif.src = gif.dataset.src;
        observer.unobserve(entry.target); // Only run once
      }
    });
  }, { threshold: 0.5 });

  observer.observe(gif);
});


