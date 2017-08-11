function revealFunction() {
    var x = document.getElementById('toggle');
    var y = document.getElementById('splat');
    var z = document.getElementById('about');
    if (x.style.visibility === 'hidden') {
        console.log("firing");
        x.style.visibility = 'visible';
        z.style.visibility = 'hidden';
    } else {
        x.style.visibility = 'hidden';
        y.style.visibility = 'visible';
        z.style.visibility = 'visible';
    }
}
