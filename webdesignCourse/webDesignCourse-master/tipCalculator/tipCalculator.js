let calculateTip = () => {
    const billAmount = document.getElementById('billAmount').value;
    const serviceQuality = document.getElementById('serviceQuality').value;
    let numOfPers = document.getElementById('totalPeople').value;

    if (billAmount === "" || serviceQuality === 0) {
        return window.alert("Please enter some values");
    }

    if (numOfPers === "" || numOfPers <= 1) {
        numOfPers = 1;

        each.classList.add('displayNone');
    }
    else {
        each.classList.remove('displayNone');
    }

    var calculatedTip = (billAmount * serviceQuality) / numOfPers;
    calculatedTip = Math.round(calculatedTip * 100) / 100;
    calculatedTip = calculatedTip.toFixed(2);

    totalTip.classList.remove('displayNone');
    tip.innerHTML = calculatedTip;

    return calculatedTip;
}

var totalTip = document.getElementById('totalTip');
var button = document.getElementById('button');
var tip = document.getElementById('tip');
var each = document.getElementById('each');

// clicking the button calls our custom function call
button.onclick = () => {
    calculateTip();
}
