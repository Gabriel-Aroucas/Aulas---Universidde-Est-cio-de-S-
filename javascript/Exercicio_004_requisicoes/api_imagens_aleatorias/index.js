const loader = (text) => {
  let imgDog = document.getElementById("img_dog");
  imgDog.alt = text;
  imgDog.style.margin = "10px";
};
const carregarImagens = () => {
  let imgDog = document.getElementById("img_dog");
  loader("carregando...");

  const url = "https://dog.ceo/api/breeds/image/random";
  fetch(url, { method: "get" })
    .then((response) => response.json())
    .then((data) => {
      imgDog.src = data.message;
    })
    .catch((err) => {
      console.error("O seguinte erro ocorreu durante a requisição: " + err);
    });

  //.then(function(response) {
  //	response.json().then(function(data){
  //		console.log('Resultado da Requisição: ' + data.message);
  //
  //		var imgDog = document.getElementById("img_dog");
  //		imgDog.src = data.message;
  //	});
  //})
  //.catch(function(err) {
  //	console.error('O seguinte erro ocorreu durante a requisição: ' + err);
  //});
};
