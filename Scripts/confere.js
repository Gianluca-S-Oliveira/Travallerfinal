function confereSenha(e){
  var campo1 = document.getElementById("senha1").value;
  var campo2 = document.getElementById("senha2").value;
   if(campo1 != campo2 ){
    alert("senhas nao conferem, tente novamente!");
    campo1.value="";
    campo2.value="";
    e.preventDefault();
    return false;
   }
}

// adiciona um event listener para o evento "submit" do formulário
document.querySelector(".form").addEventListener("submit", confereSenha);