const genNumber = () => {
  document.querySelector("#asta").style.setProperty("--percent", 1);
  document.getElementById("#asta").style.paddingTop = "10px;";
};

setInterval(genNumber, 2000);
setTimeout(genNumber);