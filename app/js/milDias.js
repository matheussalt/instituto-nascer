function milDias() {
  const menuButtons = document.querySelectorAll('.menu-mildias button');
  const mildiasTxt = document.querySelectorAll('#mildias-txt');

  if (!menuButtons || !mildiasTxt) return null;

  menuButtons.forEach((but, index) => {
    but.addEventListener('click', e => {
      e.preventDefault();

      menuButtons.forEach(buttonDesativo => {
        if (buttonDesativo !== but) buttonDesativo.classList.remove('ativo');
      });

      but.classList.add('ativo');

      mildiasTxt.forEach((txt, index2) => {
        txt.classList.remove('ativo');

        if (index === index2) {
          txt.classList.add('ativo');
        }
      });
    });
  });
}
milDias();
