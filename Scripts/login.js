const inputs = document.querySelectorAll(".input");
const inputNome = document.getElementById("nome");
const btn = document.querySelector("button");
inputNome.onclick(alert("oi"));
btn.addEventListener(
  "click",
  function () {
    alert("oi");
  },
  false
);

inputNome.on("click", function () {
  input.show();
});

input.on("focusout", function () {
  $(this).hide();
});
// function focusFunc() {
//   let parent = this.parentNode.parentNode;
//   parent.classList.add("focus");
// }

// function blurFunc() {
//   let parent = this.parentNode.parentNode;
//   if (this.value == "") {
//     parent.classList.remove("focus");
//   }
// }

// function teste() {
//   inputs.classList.add("teste");
// }
inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
  input.addEventListener("teste", teste());
});
