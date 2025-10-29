/* =========================================================
   Success Counter Animation
   ---------------------------------------------------------
   📍 Purpose: Animates numbers counting up (e.g., "Projects", "Clients")
   📍 Where: Used on the homepage inside elements with class ".counter-number"
   📈 SEO Tip: This draws attention to stats (like achievements) — 
               Make sure these numbers are wrapped with <strong> or <span>
               inside a <section> with descriptive heading for SEO.
   ========================================================= */
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter-number");
  const speed = 100; // Lower value = faster counting

  counters.forEach(counter => {
    const animate = () => {
      const target = +counter.getAttribute("data-target"); // Final number
      const count = +counter.innerText;                    // Current number
      const increment = target / speed;                    // Increment per frame

      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(animate, 30); // Run again every 30ms
      } else {
        counter.innerText = target + "+"; // Add "+" for style (e.g., "120+")
      }
    };

    // Run animation only if element is visible (performance optimization)
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animate();
          observer.unobserve(counter); // Stop watching once animated
        }
      });
    });
    observer.observe(counter);
  });
});


/* =========================================================
   Client Logo Scrolling (Marquee)
   ---------------------------------------------------------
   📍 Purpose: Continuously scrolls client logos horizontally.
   📍 Where: Section with class ".logo-track" inside ".logo-marquee"
   ⚡ SEO Tip: Add <img alt="Client Name"> for each logo to improve image SEO.
   ========================================================= */
const track = document.querySelector('.logo-track');
let speed = 50; // Scrolling speed (px per second)

if (track) {
  // Clone track content for seamless infinite scrolling
  track.innerHTML += track.innerHTML;

  let animationId;
  let progress = 0;

  function animate() {
    progress -= (speed / 60); // ~60 frames per second
    if (Math.abs(progress) >= track.scrollWidth / 2) {
      progress = 0; // Reset scroll to start for seamless looping
    }
    track.style.transform = `translateX(${progress}px)`;
    animationId = requestAnimationFrame(animate);
  }

  // Pause scrolling on hover (UX improvement)
  track.addEventListener('mouseenter', () => cancelAnimationFrame(animationId));
  track.addEventListener('mouseleave', () => animate());

  // Start animation
  animate();
}


/* =========================================================
   Dynamic Year Updater (Footer)
   ---------------------------------------------------------
   📍 Purpose: Automatically updates the © year in the footer.
   📍 Where: Footer element with <span id="year"></span>
   💡 SEO Tip: Keeps copyright current — 
               boosts trust and freshness signals to Google.
   ========================================================= */
document.addEventListener("DOMContentLoaded", () => {
  const yearSpan = document.getElementById("year");
  if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear(); // Set current year
  }
});
