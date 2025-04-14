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