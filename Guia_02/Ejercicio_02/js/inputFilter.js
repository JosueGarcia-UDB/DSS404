let checkbox = document.querySelector("input[name=hextra]");
const pagoExtra = document.getElementById('pagohextra')
const horaExtra = document.getElementById('numhorasex')

checkbox.addEventListener('change', () => {
  if (checkbox.checked) {
    pagoExtra.removeAttribute('disabled');
    horaExtra.removeAttribute('disabled');
  } else {
    pagoExtra.setAttribute('disabled', true);
    horaExtra.setAttribute('disabled', true);
  }
});