const imagem = document.getElementById('imagem').value;

function readerFile(files){
    const reader = new FileReader();
    reader.onload = (event) => {
        let data = event.target.result;
        document.querySelector("#texto").value = data; 
    };
    reader.readAsText(files[0]);
    console.log(reader);
}