function carrosselCursos() {
  const carrossel = document.querySelector('.home-cursos-inside');
  const controlLeft = document.querySelector('.cursos-left');
  const controlRight = document.querySelector('.cursos-right');
  const cursos = document.querySelectorAll('.home-cursos-item').length;
  let move = 0;

  if (!carrossel || !controlLeft || !controlRight || !cursos) return null;

  controlLeft.addEventListener('click', e => {
    e.preventDefault();

    if (move !== 0) {
      move--;

      carrossel.style.setProperty(
        'transform',
        `translate3d(calc(-${move * 100}% - ${move * 32}px), 0, 0)`
      );
    }
  });

  controlRight.addEventListener('click', e => {
    e.preventDefault();

    if (move < cursos - 1) {
      move++;

      carrossel.style.setProperty(
        'transform',
        `translate3d(calc(-${move * 100}% - ${move * 32}px), 0, 0)`
      );
    }
  });
}
carrosselCursos();
