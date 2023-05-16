console.log("hola");

let btn = document.querySelector("#btn");
let uri = "http://localhost/SpUkM01-099/MyPrimeraVezEnPHP"
btn.addEventListener("click", async(e)=>{
    console.log(await((await fetch(`${uri}/api.php`)).json()));
    let res = (await((await fetch(`${uri}/api.php?nombre=Fred&apellido=Faz`)).json()));
    console.log(res);
})

