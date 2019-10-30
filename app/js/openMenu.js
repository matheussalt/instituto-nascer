function openMenu() {
  const menuHamb = document.querySelector('.menu-hamb');
  const menu = document.querySelector('.menu');
  const headerInfo = document.querySelector('.header-right');

  menuHamb.addEventListener('click', e => {
    e.preventDefault();

    menu.classList.add('active');
    headerInfo.classList.add('active');

    menu.addEventListener('click', e => {
      if (e.currentTarget === e.target) {
        menu.classList.remove('active');
        headerInfo.classList.remove('active');

        menu.removeEventListener('click', this);
      }
    });
  });
}
openMenu();
