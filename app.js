  ScrollReveal().reveal('.sr-fade', {
    delay: 300,
    duration: 800,
    distance: '50px',
    opacity: 0
  });

  // Toggle menu when the hamburger icon is clicked
  const menuToggle = document.getElementById('menu-toggle');
  menuToggle.addEventListener('change', function () {
    const menu = document.querySelector('.menu');
    if (this.checked) {
      menu.style.display = 'flex';
    } else {
      menu.style.display = 'none';
    }
  });

  

  $(document).ready(function () {
    // Set the interval for auto slide (in milliseconds)
    var interval = 3000;

    // Get all the cards
    var cards = $('.card-testi');

    // Set the initial active card index
    var activeIndex = 0;

    // Function to show the next card
    function showNextCard() {
      // Hide the current active card
      cards.eq(activeIndex).removeClass('active');

      // Increment the active index
      activeIndex++;

      // If the active index exceeds the number of cards, reset to 0
      if (activeIndex >= cards.length) {
        activeIndex = 0;
      }

      // Show the next card
      cards.eq(activeIndex).addClass('active');
    }

    // Start the auto slide interval
    setInterval(showNextCard, interval);
  });


 
