const num1=document.querySelector('.Numero1');
const num2=document.querySelector('.Numero2');
const boton=document.querySelector('.boton')
const disp=document.querySelector('.display');

boton.onclick = () => {
    let suma=parseFloat(num1.value) +parseFloat(num2.value); 
    disp.innerHTML= <?php suma?>;
}