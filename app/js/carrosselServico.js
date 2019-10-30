function carrosselServico() {
  const carrossel = document.querySelector('.home-servicos-list ul');
  const controlLeft = document.querySelector('.servicos-left');
  const controlRight = document.querySelector('.servicos-right');
  const qtdServicos = document.querySelectorAll('.home-servicos-list li')
    .length;
  let move = 0;

  if (!carrossel || !controlLeft || !controlRight || !qtdServicos) return null;

  controlLeft.addEventListener('click', e => {
    e.preventDefault();

    if (move !== 0) {
      move--;

      carrossel.style.setProperty(
        'transform',
        `translate3d(-${move * 100}%, 0, 0)`
      );
    }
  });

  controlRight.addEventListener('click', e => {
    e.preventDefault();

    if (move < qtdServicos - 1) {
      move++;

      carrossel.style.setProperty(
        'transform',
        `translate3d(-${move * 100}%, 0, 0)`
      );
    }
  });
}
carrosselServico();
