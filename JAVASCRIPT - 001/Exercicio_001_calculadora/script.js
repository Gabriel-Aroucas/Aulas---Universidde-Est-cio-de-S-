const calc = (num) => {
  let data = document.querySelector(".visorContent");
  data.innerHTML += num;
  const answer = data.innerHTML;
  switch (num) {
    case undefined:
      data.innerHTML = "";
      break;
    case "c":
      data.innerHTML = "";
      break;
  }
  const resultButton = document.querySelector(".result");
  resultButton.addEventListener("click", () => {
    const result = eval(answer);
    data.innerHTML = `${result}`;
  });
};
