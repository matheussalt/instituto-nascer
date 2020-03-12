function banner() {
  const bannerCarrossel = document.querySelector('.banner-carrossel');
  const bannerImgs = document.querySelectorAll('.banner-carrossel img');
  const imgSelectors = document.querySelectorAll('.img-selector');
  const controlLeft = document.querySelector('.banner-control-left');
  const controlRight = document.querySelector('.banner-control-right');
  const controls = [controlLeft, controlRight, ...imgSelectors];
  let pos = 0;

  if (!bannerCarrossel) return null;

  function bannerTransition() {
    bannerImgs.forEach(img => {
      img.style.setProperty('opacity', 0);
    });

    if (pos < bannerImgs.length - 1) {
      pos++;
    } else {
      pos = 0;
    }

    bannerImgs[pos].style.setProperty('opacity', 1);
  }

  let transition = setInterval(bannerTransition, 5000);

  controls.forEach(control => {
    control.addEventListener('mouseenter', e => {
      clearInterval(transition);
    });

    control.addEventListener('mouseleave', e => {
      transition = setInterval(bannerTransition, 5000);
    });
  });

  controlRight.addEventListener('click', e => {
    e.preventDefault();

    if (pos < bannerImgs.length - 1) {
      pos++;

      bannerImgs.forEach((img, index) => {
        img.style.setProperty('opacity', 0);

        if (index === pos) img.style.setProperty('opacity', 1);
      });
    } else {
      pos = 0;

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
    } else {
      pos = bannerImgs.length - 1;

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
