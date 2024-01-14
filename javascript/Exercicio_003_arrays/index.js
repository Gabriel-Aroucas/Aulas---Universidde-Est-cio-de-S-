//const onlyNumber = document.querySelector("#onlyNumber");
//onlyNumber.onkeydown = (e) =>{
//    if(e.code == 'Space'){
//        e.preventDefault()
//    }else if(isNaN(e.key) && e.key !== 'Backspace'){
//        e.preventDefault()
//    }
//}

const validate = () => {
  const arr = new Array();
  const onlyNumberInput = document.querySelector("#onlyNumber");
  const onlyNumberInputToo = document.querySelector("#onlyNumberToo");

  const convertToIntNumber = parseInt(onlyNumberInput.value);
  const convertToIntNumberToo = parseInt(onlyNumberInputToo.value);

  if (onlyNumberInput.value < 0 || onlyNumberInputToo.value < 0) {
    alert("error: o número não é um numero positivo");
    window.location.reload();
  } else if (
    onlyNumberInput.value != convertToIntNumber ||
    onlyNumberInputToo.value != convertToIntNumberToo
  ) {
    alert("error: o número não é um numero inteiro");
    window.location.reload();
  } else {
    arr.push(onlyNumberInput.value, onlyNumberInputToo.value);
  }
  const result = arr[0]/arr[1]
    alert("A divisão dos dois números é : " + parseInt(result))
};
