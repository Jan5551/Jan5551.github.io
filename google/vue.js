var Body = document.getElementsByTagName('body')[0];

const input = document.querySelector('input');
input.addEventListener('change', updateValue);
const button = document.querySelector('button');
function updateValue(e)
{
    if(e.target.value != '')
    {
        button.addEventListener('click', (e) => {
  e.preventDefault();
        Body.classList.toggle('results');
        }}
    else
    {
    }
}
