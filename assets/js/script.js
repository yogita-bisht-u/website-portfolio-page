'use strict';

// navbar variables
const nav = document.querySelector('.mobile-nav');
const navMenuBtn = document.querySelector('.nav-menu-btn');
const navCloseBtn = document.querySelector('.nav-close-btn');

// navToggle function
const navToggleFunc = function () { nav.classList.toggle('active'); };

navMenuBtn.addEventListener('click', navToggleFunc);
navCloseBtn.addEventListener('click', navToggleFunc);

// theme toggle variables
const themeBtn = document.querySelectorAll('.theme-btn');

// Function to set theme based on localStorage value
const applyTheme = (theme) => {
  if (theme === 'light') {
    document.body.classList.add('light-theme');
    document.body.classList.remove('dark-theme');
    themeBtn.forEach(btn => {
      btn.classList.add('light');
      btn.classList.remove('dark');
    });
  } else {
    document.body.classList.add('dark-theme');
    document.body.classList.remove('light-theme');
    themeBtn.forEach(btn => {
      btn.classList.add('dark');
      btn.classList.remove('light');
    });
  }
};

// Check and apply saved theme on page load
const savedTheme = localStorage.getItem('theme') || 'dark'; // Default to 'dark' if no theme is saved
applyTheme(savedTheme);

// Add click event listeners for theme buttons
for (let i = 0; i < themeBtn.length; i++) {
  themeBtn[i].addEventListener('click', function () {
    // Toggle theme classes
    const isLightTheme = document.body.classList.contains('light-theme');
    const newTheme = isLightTheme ? 'dark' : 'light';
    applyTheme(newTheme);

    // Save the new theme in localStorage
    localStorage.setItem('theme', newTheme);
  });
}
