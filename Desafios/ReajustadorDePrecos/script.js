// const range  = document.querySelector('#perc');
// const container =  document.querySelector('.valor_b');

// function pegarDados(){
//     let valorRange = Number(range.value);
//     container.innerText = `(${valorRange}%)`;
// }

const range  = document.querySelector('#perc');
const container =  document.querySelector('.valor_b');

container.textContent = `(${range.value}%)`;

range.addEventListener('input', function() {
    container.textContent = `(${this.value}%)`;
});