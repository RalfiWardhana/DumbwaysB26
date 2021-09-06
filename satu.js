//1.js
const input = "PapaMakanJerukWaktuBuka";
const array = input.split("");
const arr = [];
const arry = [];
for (let i = 0; i < array.length; i++) {
    if (i == 0) {
        arr.push(1);
    }
    else {
        if (array[i] == array[i].toUpperCase()) {
            arr.push(1);
        }
        else {
            arry.push(0);
        }
    }
}
const output = arr.length;
console.log(output);