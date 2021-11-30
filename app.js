const variable1 = 5.5;
let variable2 = 10;
const variable3 = "esto es una cadena";
const resultado = variable1 + variable2;
const nombre = "Jose";
const apellido = "García";
const nombrecompleto = nombre + " " + apellido;
const variabletemplate = `${nombre} ${apellido} ${5 + 7}`;
console.log(variable1);
console.log(variable2);

console.log(typeof variable3); // devuelve el tripo de variable
console.log(resultado);
console.log(variable1 + variable2);
console.log(nombrecompleto);
console.log(variabletemplate);


function getsaludo(apellido) {
    return "Que Guapo " + apellido;
  }
console.log(`Esto es un texto: ${getsaludo(apellido)}`);

//Objetos literales
const persona={
    nombre1:'José',
    apellido1:'García',
    edad: 25,
};
console.log(persona);
console.log(persona.nombre1)
