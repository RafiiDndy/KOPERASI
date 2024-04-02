
  document.addEventListener("DOMContentLoaded", function() {
    const currentUrl = window.location.href;
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
      if (item.href === currentUrl) {
        item.classList.add('active');
      }
    });
  });

