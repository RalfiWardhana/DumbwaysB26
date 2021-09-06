//3.js
function cetak_gambar(n) {
    for (let i = 1; i <= n; i++) {
        if ((i == 1) || (i == n)) {
            let s = "";
            for (let j = 1; j <= n; j++) {
                s = s + "*"
            }
            console.log(s);
        }
        else if (i % 2 == 0) {
            let s = "";
            for (let j = 1; j <= n; j++) {
                if ((j == 1) || (j == n)) {
                    s = s + "*"
                }
                else {
                    s = s + "="
                }
            }
            console.log(s);
        }
        else {
            let s = "";
            for (let j = 1; j <= n; j++) {
                if ((j == 1) || (j == n)) {
                    s = s + "*"
                }
                else {
                    s = s + "*"
                }
            }
            console.log(s);
        }
    }
}
cetak_gambar(7);