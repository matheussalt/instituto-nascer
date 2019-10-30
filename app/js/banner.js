function banner() {
  const bannerCarrossel = document.querySelector('.banner-carrossel');
  const bannerImgs = document.querySelectorAll('.banner-carrossel img');
  const imgSelectors = document.querySelectorAll('.img-selector');
  const controlLeft = document.querySelector('.banner-control-left');
  const controlRight = document.querySelector('.banner-control-right');
  let pos = 0;

  if (!bannerCarrossel) return null;

  controlRight.addEventListener('click', e => {
    e.preventDefault();

    if (pos < bannerImgs.length - 1) {
      pos++;

      bannerImgs.forEach((img, index) => {
        img.style.setProperty('opacity', 0);

        if (index === pos) img.style.setProperty('opacity', 1);
      });
    }
  });

  controlLeft.addEventListener('click', e => {
    e.preventDefault();

    if (pos > 0) {
      pos--;

      bannerImgs.forEach((img, index) => {
        img.style.setProperty('opacity', 0);

        if (index === pos) img.style.setProperty('opacity', 1);
      });
    }
  });

  imgSelectors.forEach((selector, index) => {
    selector.addEventListener('click', () => {
      pos = index;

      bannerImgs.forEach((img, index2) => {
        img.style.setProperty('opacity', 0);

        if (index2 === pos) img.style.setProperty('opacity', 1);
      });
    });
  });
}
banner();
