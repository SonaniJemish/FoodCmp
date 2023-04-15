const stars = document.querySelectorAll('.star');

stars.forEach((star, index) => {
  star.addEventListener('click', () => {
    stars.forEach((s, i) => {
      if (i <= index) {
        s.classList.add('active');
      } else {
        s.classList.remove('active');
      }
    });
  });
});