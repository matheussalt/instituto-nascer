function openGaleria() {
  const fotos = document.querySelectorAll('[data-foto]');
  const popup = document.querySelector('#popup-galeria');

  if (!fotos) return null;

  fotos.forEach(foto => {
    foto.addEventListener('click', e => {
      e.preventDefault();
      popup.classList.add('ativo');

      const imagemAmp = document.createElement('img');
      imagemAmp.setAttribute('src', foto.getAttribute('src'));

      popup.appendChild(imagemAmp);

      popup.addEventListener('click', e => {
        if (e.target === e.currentTarget) {
          popup.classList.remove('ativo');

          popup.removeChild(imagemAmp);

          popup.removeEventListener('click', this);
        }
      });
    });
  });
}
openGaleria();
