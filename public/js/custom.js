console.log('custom js added')

  const toggler = document.querySelector('.custom-toggler');
  toggler.addEventListener('click', () => {
    toggler.classList.toggle('open');
  });
