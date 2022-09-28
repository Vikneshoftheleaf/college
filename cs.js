function firstsemcalc() {

    var a = parseInt(document.getElementById('a').value);
    var b = parseInt(document.getElementById('b').value);
    var c = parseInt(document.getElementById('c').value);
    var d = parseInt(document.getElementById('d').value);

    const total = 400;

    var totalMark = a + b + c + d;
    if (totalMark > 400) {
        document.getElementById('calcoutputone').innerHTML = "Invalid";
    } else {
        const percentage = Math.round((totalMark / total) * 100);
        document.getElementById('calcoutputone').innerHTML = percentage + "%";
    }

}

function secondsemcalc() {

    var e = parseInt(document.getElementById('e').value);
    var f = parseInt(document.getElementById('f').value);
    var g = parseInt(document.getElementById('g').value);
    var h = parseInt(document.getElementById('h').value);

    const total = 350;

    var totalMark = e + f + g + h;
    if (totalMark > 350) {
        document.getElementById('calcoutputtwo').innerHTML = "Invalid";
    } else {
        const percentage = Math.round((totalMark / total) * 100);
        document.getElementById('calcoutputtwo').innerHTML = percentage + "%";
    }

}