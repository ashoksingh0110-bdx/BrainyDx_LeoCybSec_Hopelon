document.addEventListener("DOMContentLoaded", function () {
  const inject = async (id, file) => {
    const target = document.getElementById(id);
    if (target) {
      try {
        const res = await fetch(file);
        const html = await res.text();
        target.innerHTML = html;
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


// for work slider in services page
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
});

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