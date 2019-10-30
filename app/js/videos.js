function videos() {
  const videoWrapper = document.querySelector('.video-wrapper');

  if (!videoWrapper) return null;

  fetch(`${baseURL}/wp-json/wp/v2/videos`)
    .then(r => r.json())
    .then(r => {
      r.forEach(video => {
        const iframe = document.createElement('iframe');
        iframe.setAttribute(
          'src',
          `https://www.youtube.com/embed/${video.acf.id}`
        );
        iframe.setAttribute('frameborder', 0);
        iframe.setAttribute('encrypted-media', '');
        iframe.setAttribute('allow', 'accelerometer');
        iframe.setAttribute('allowfullscreen', '');
        iframe.setAttribute('picture-in-picture', '');
        iframe.classList.add('video-frame');

        videoWrapper.appendChild(iframe);
      });
      console.log(r);
    });
}
videos();
