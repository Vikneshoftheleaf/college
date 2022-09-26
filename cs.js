function calc() {

    var a = parseInt(document.getElementById('a').value);
    var b = parseInt(document.getElementById('b').value);
    var c = parseInt(document.getElementById('c').value);
    var d = parseInt(document.getElementById('d').value);
    var e = parseInt(document.getElementById('e').value);
    var f = parseInt(document.getElementById('f').value);
    var g = parseInt(document.getElementById('g').value);
    var h = parseInt(document.getElementById('h').value);

    const total = 750;

    var totalMark = a + b + c + d + e + f + g + h;
    const percentage = Math.round((totalMark / total) * 100);
    document.getElementById('calcoutput').innerHTML = percentage + "%";

}