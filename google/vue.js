const body = document.querySelector('body');
const button = document.querySelector('button');
button.addEventListener('click', (e) => {
  e.preventDefault();
  body.classList.toggle('results')
});
