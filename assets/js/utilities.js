document.addEventListener('DOMContentLoaded', function() {
 
  const menuItems = document.querySelectorAll('.menu-list li');

menuItems.forEach(item => {
  let hideTimeout;

  item.addEventListener('mouseleave', () => {
    const subMenu = item.querySelector('.sub-menu');
    if (subMenu) {
      hideTimeout = setTimeout(() => {
        subMenu.style.display = 'none';
      }, 300);
    }
  });

  item.addEventListener('mouseover', () => {
    const subMenu = item.querySelector('.sub-menu');
    if (subMenu) {
      clearTimeout(hideTimeout);
      subMenu.style.display = 'flex';
    }
  });
});

  // Función para mostrar/ocultar el menú al hacer clic en el botón de hamburguesa
  const menuToggle = document.querySelector('.menu-toggle');
  const smartMenu = document.querySelector('.smart-list');
  menuToggle.addEventListener('click', () => {
    smartMenu.classList.toggle('open');
    if (smartMenu.style.display === 'none' || smartMenu.style.display === '') {
      smartMenu.style.display = 'block';
    } else {
      smartMenu.style.display = 'none';
    }
  });

});
