function galeria() {
  const galeriaWrapper = document.querySelector('.galeria-wrapper ul');
  const controlLeft = document.querySelector('.galeria-left');
  const controlRight = document.querySelector('.galeria-right');
  let qtdFotos = document.querySelectorAll('.galeria-wrapper ul li img');
  let move = 0;

  if (!galeriaWrapper || !controlLeft || !controlRight || !qtdFotos)
    return null;

  controlLeft.addEventListener('click', e => {
    e.preventDefault();

    if (move !== 0 && window.innerWidth > 1050) {
      move--;

      galeriaWrapper.style.setProperty(
        'transform',
        `translate3d(-${move * (100 / 4)}%, 0, 0)`
      );
    } else if (
      move !== 0 &&
      window.innerWidth > 600 &&
      window.innerWidth < 1050
    ) {
      move--;

      galeriaWrapper.style.setProperty(
        'transform',
        `translate3d(-${move * (100 / 3)}%, 0, 0)`
      );
    } else if (move !== 0 && window.innerWidth < 600) {
      move--;

      galeriaWrapper.style.setProperty(
        'transform',
        `translate3d(-${move * 100}%, 0, 0)`
      );
    }
  });

  controlRight.addEventListener('click', e => {
    e.preventDefault();

    if (move < Math.ceil(qtdFotos.length / 2) - 4 && window.innerWidth > 1050) {
      move++;

      galeriaWrapper.style.setProperty(
        'transform',
        `translate3d(-${move * (100 / 4)}%, 0, 0)`
      );
    } else if (
      move < Math.ceil(qtdFotos.length / 2) - 3 &&
      window.innerWidth > 600 &&
      window.innerWidth < 1050
    ) {
      move++;

      galeriaWrapper.style.setProperty(
        'transform',
        `translate3d(-${move * (100 / 3)}%, 0, 0)`
      );
    } else if (move < qtdFotos.length - 1 && window.innerWidth < 600) {
      move++;

      galeriaWrapper.style.setProperty(
        'transform',
        `translate3d(-${move * 100}%, 0, 0)`
      );
    }
  });

  qtdFotos.forEach(foto => {
    foto.dataset.foto = '';

    // foto.addEventListener('click', e => {
    //   e.preventDefault();

    //   const imgPopup = document.createElement('div')
    //   imgPopup.classList.add('img-popup')
    // });
  });
}
galeria();
