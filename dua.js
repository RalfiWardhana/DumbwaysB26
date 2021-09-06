
//2.js
let arryy = ["u", "W", "d", "o", "b"," d", "D", "s", "y", "m", "i", "t", "a"];
let dumb = ["D", "u", "m", "b", "W", "a", "y", "s","d", "o", "t", "i", " d"];

let n = arryy.length;
let end = n - 1;
for (let i = 0; i < n; i++) {
   for (let j = 0; j < end; j++) {
       if(dumb.indexOf(arryy[j])>dumb.indexOf(arryy[j+1])){
           let tmp = arryy[j];
           arryy[j] = arryy[j+1];
           arryy[j+1] = tmp;
       }
  }
}
console.log(arryy);