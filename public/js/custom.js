console.log('custom js added')

  const toggler = document.querySelector('.custom-toggler');
  toggler.addEventListener('click', () => {
    toggler.classList.toggle('open');
  });


  const starContainer = document.getElementById('stars');
  const numStars = 120;

  for (let i = 0; i < numStars; i++) {
    const star = document.createElement('div');
    star.className = 'star';
    star.style.left = `${Math.random() * window.innerWidth}px`;
    star.style.top = `${Math.random() * window.innerHeight}px`;
    star.style.animationDuration = `${1.5 + Math.random() * 2}s`;
    star.style.animationDelay = `${Math.random() * 2}s`;
    starContainer.appendChild(star);
  }


  // Load Lottie Animation
  const script = document.createElement("script");
  script.src = "https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js";
  script.onload = () => {
    const container = document.getElementById('lottie-animation');
    container.outerHTML = `
      <lottie-player
        src="https://assets6.lottiefiles.com/packages/lf20_kkflmtur.json"
        background="transparent"
        speed="1"
        style="width: 100%; max-width: 400px;"
        loop autoplay>
      </lottie-player>
    `;
  };
  document.body.appendChild(script);