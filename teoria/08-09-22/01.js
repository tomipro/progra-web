/*

function helloWorld() {
    console.log("Hola mundo desde funcion normal");
}

helloWorld();

// hello world arrow function
const helloWorld2 = () => {
    console.log("Hola mundo desde funcion flecha");
}

helloWorld2();

// hello world arrow function with implicit return
const helloWorld3 = () => console.log("Hola mundo desde funcion flecha con retorno implicito");

helloWorld3();

// hello world arrow function with implicit return and one parameter
const helloWorld4 = name => console.log(`Hola mundo desde funcion flecha con retorno implicito y un parametro ${name}`);

helloWorld4("Juan");

// hello world arrow function with implicit return and two parameters

const helloWorld5 = (name, age) => console.log(`Hola mundo desde funcion flecha con retorno implicito y dos parametros ${name} y ${age}`);

helloWorld5("Juan", 25);

// hello world arrow function with implicit return and two parameters and object

const helloWorld6 = (name, age) => ({
    name,
    age
});

console.log(helloWorld6("Juan", 25));

*/

function hola(txt) {
    document.body.innerHTML += txt + "<br>";
}

function tipoNum(num) {
    var res;

    if (num > 0) {
        res = "positivo";
    }

    else if (num < 0) {
        res = "negativo";
    }

    else {
        res = "cero";
    }

    return res;
}


// funcion tipoNum pero arrow function
const tipoNum2 = num => {
    var res;

    if (num > 0) {
        res = "positivo";
    }

    else if (num < 0) {
        res = "negativo";
    }

    else {
        res = "cero";
    }

    return res;
}

// console.log(tipoNum2(prompt("Introduce un numero")));


function cicloW(txt, cant) {
    var res = "";
    var i = 0;

    while (i < cant) {
        res = res + txt;
        i++;
    }

    return res;
}

// console.log(cicloW(prompt("Introduce un texto"), prompt("Introduce una cantidad")));

function cicloF(ini, fin) {
    for (i = ini; i < fin; i++) {
        console.log("hola ${}", i);
    }
}