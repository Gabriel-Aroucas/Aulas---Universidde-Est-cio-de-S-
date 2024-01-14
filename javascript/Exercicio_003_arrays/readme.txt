var alunos = ["Gabriel", "Cynthia", "Emmanuel"];
var alunos_other_methodo = new Array("Gabriel", "Cynthia", "Emmanuel");

inject items in arrays
alunos_other_methodo.push("Jorge");

adding items on first position array;
const new_students = "Jorge";
const arr = new_students.concat(',',alunos_other_methodo)

navigate to array
alunos_other_methodo[1] --  Cynthia


  splice add the param on the array.
  the first number is the position
  the second number is the methodo( 0 = dont remove anything only add item);
 

alunos_other_methodo.splice(2,0,"Larissa")
console.log(alunos_other_methodo)

 the length property return the amount of items on the array
const arr = alunos.length
console.log(arr)

 delete items on the array
delete alunos_other_methodo[2]
console.log(alunos_other_methodo)

// remove the last item on the array
//alunos_other_methodo.pop()
//console.log(alunos_other_methodo)

// remove the first item on the array
//alunos_other_methodo.shift()
//console.log(alunos_other_methodo)
