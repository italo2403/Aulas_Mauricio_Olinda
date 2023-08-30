function Logar(){
    let nome = document.querySelector("#nome").value;
    let senha = document.querySelector("#senha").value;

    if (nome === "admin" || senha === 123) {
        window.location.assign("index.php")
    } else {
        console.log("Perdeu Mané!")
    }
}