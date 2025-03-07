document.addEventListener('DOMContentLoaded', () => {
  // Theme toggle
  const themeToggle = document.getElementById('themeToggle');

  themeToggle.addEventListener('change', () => {
      document.body.classList.toggle('dark');
  });

  // Password visibility toggle
  const passwordInput = document.querySelector('.password-input input');
  const togglePassword = document.querySelector('.toggle-password');

  togglePassword.addEventListener('click', () => {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      // Update eye icon
      const eyeIcon = togglePassword.querySelector('svg');
      if (type === 'password') {
          eyeIcon.innerHTML = '<path d="M12 5c-7.333 0-12 6-12 6s4.667 6 12 6 12-6 12-6-4.667-6-12-6Z"/><path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>';
      } else {
          eyeIcon.innerHTML = '<path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7.33 0 12 6 12 6a13.16 13.16 0 0 1-1.67 1.67"/><path d="M6.61 6.61A13.526 13.526 0 0 0 0 11s4.67 6 12 6c1.94 0 3.69-.38 5.27-1"/><path d="M2 2l20 20"/>';
      }
  });

  // Save button animation
  const saveButton = document.querySelector('.save-button');

  saveButton.addEventListener('click', () => {
      saveButton.style.backgroundColor = 'var(--primary-hover)';
      setTimeout(() => {
          saveButton.style.backgroundColor = 'var(--primary-color)';
      }, 200);
  });
});


function editProfile(filename){
  let oldfilename = "old" + filename;
  let iconfilename = "icon" + filename;

  document.getElementById(oldfilename).style.display = "none";
  document.getElementById(iconfilename).style.display = "none";
  document.getElementById(filename).style.display = "flex";
}

function cancelProfile(filename){
  let oldfilename = "old" + filename;
  let iconfilename = "icon" + filename;
  let newFilename = filename.replace("old", ""); 

  document.getElementById(oldfilename).style.display = "flex";
  document.getElementById(iconfilename).style.display = "flex";
  document.getElementById(newFilename).style.display = "none";
}


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


function confirmLogout(event) {
  if (!confirm('Are you sure you want to log out?')) {
      event.preventDefault();
  }
}


var profileStates = {
  editProfile: false,
  changePassword: false,
  showDetails:true
}

$('.tabs').on('click', function(e) {
  e.stopPropagation();
  tabHandler(e.currentTarget);
})

$('.cancel').on('click', function(e) {
  e.stopPropagation();
  e.preventDefault();
  pageReset();
});

function tabHandler(tab){
  var editProfileTab = $(tab).hasClass('edit-profile');
  var changePassTab = $(tab).hasClass('change-password');
  
  switch (true) {

    // if Tab is Edit Profile and Edit Profile is not showing
    case (editProfileTab && !isEditProfileShowing()):
      // Check to see if Profile Details are showing. Hide if they are.
      if (isDetailsShowing()) {
        profileStates.showDetails = false;
        $('.student-details').removeClass('expanded');
      }

      // Remove .expanded from all content wrappers
      $('.tab-content').removeClass('expanded');

      // Add .expanded to edit profile content wrapper
      $('.edit-profile-form-wrap').addClass('expanded');
      
      profileStates.editProfile = true;
      profileStates.changePassword = false;
      break;

    // if Tab is Change Password and Detail is Showing
    case (changePassTab && !isChangePasswordShowing()):
      // Check to see if Profile Details are showing. Hide if they are.
      if (isDetailsShowing()) {
        profileStates.showDetails = false;
        $('.student-details').removeClass('expanded');
      }

      // Remove .expanded from all content wrappers
      $('.tab-content').removeClass('expanded');

      // Add .expanded to edit profile content wrapper
      $('.change-password-form-wrap').addClass('expanded');
      profileStates.editProfile = false;
      profileStates.changePassword = true;
      break;

    // if Tab is Edit Profile and Edit Profile is Showing
    case (editProfileTab && isEditProfileShowing()):
      pageReset();
      break;
    // if Tab is Change Password and Change Password is Shwoing
    case (changePassTab && isChangePasswordShowing()):
      pageReset();
      break;
  }
}

// popup

function openPopup(level) {
  document.getElementById('overlay').style.display = 'flex';
  document.getElementById('level').value = level;
}

function closePopup() {
  document.getElementById('overlay').style.display = 'none';
}


