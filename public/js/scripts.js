// Dark/Light theme toggle (voorbeeld met een knop)
const themeToggle = document.getElementById('themeToggle');
themeToggle.addEventListener('click', () => {
  const root = document.documentElement;
  if (root.getAttribute('data-theme') === 'dark') {
    root.setAttribute('data-theme', 'light');
  } else {
    root.setAttribute('data-theme', 'dark');
  }
});

// Tabs functionaliteit
const tabs = document.querySelectorAll('.tab');
const contents = document.querySelectorAll('.tab-content');
tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    // active class to clicked tab
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    // show corresponding content
    contents.forEach(c => c.classList.remove('active'));
    contents[index].classList.add('active');
  });
});

// (Optioneel) Slider functionaliteit - eenvoudig voorbeeld
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const prevBtn = document.getElementById('sliderPrev');
const nextBtn = document.getElementById('sliderNext');
function showSlide(index) {
  slides.forEach(s => s.classList.remove('active'));
  slides[index].classList.add('active');
}
if(prevBtn && nextBtn) {
  prevBtn.addEventListener('click', () => {
    currentSlide = (currentSlide === 0) ? slides.length - 1 : currentSlide - 1;
    showSlide(currentSlide);
  });
  nextBtn.addEventListener('click', () => {
    currentSlide = (currentSlide === slides.length - 1) ? 0 : currentSlide + 1;
    showSlide(currentSlide);
  });
}



