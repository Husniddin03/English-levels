// DOM Elements
const menuToggle = document.getElementById('menuToggle');
const sideNav = document.getElementById('sideNav');
const overlay = document.getElementById('overlay');
const navItems = document.querySelectorAll('.nav-item');
const pages = document.querySelectorAll('.page');

// Toggle mobile menu
menuToggle.addEventListener('click', () => {
  sideNav.classList.toggle('open');
  overlay.classList.toggle('active');
});

// Close menu when clicking overlay
overlay.addEventListener('click', () => {
  sideNav.classList.remove('open');
  overlay.classList.remove('active');
});

// Handle navigation
navItems.forEach(item => {
  item.addEventListener('click', () => {
    // Update active nav item
    navItems.forEach(nav => nav.classList.remove('active'));
    item.classList.add('active');
    
    // Show corresponding page
    const pageName = item.getAttribute('data-page');
    pages.forEach(page => page.classList.remove('active'));
    document.getElementById(`${pageName}Page`).classList.add('active');
    
    // Close mobile menu after navigation
    sideNav.classList.remove('open');
    overlay.classList.remove('active');
  });
});

// Level cards interaction
const levelCards = document.querySelectorAll('.level-card');
levelCards.forEach(card => {
  card.addEventListener('click', () => {
    // You can add navigation to level details here
    console.log(`Clicked on ${card.querySelector('h3').textContent} level`);
  });
});

// Form toggle functionality is handled by CSS :checked selector