let displayValue = '';

function appendToDisplay(value) {
    displayValue += value;
    document.getElementById('display').value = displayValue;
}

function clearDisplay() {
    displayValue = '';
    document.getElementById('display').value = '';
}

function calculate() {
    try {
        if (displayValue.includes('^')) {
            const values = displayValue.split('^');
            displayValue = Math.pow(parseFloat(values[0]), parseFloat(values[1])).toString();
        } else {
            displayValue = eval(displayValue).toString();
        }
        document.getElementById('display').value = displayValue;
    } catch (error) {
        document.getElementById('display').value = 'Error';
    }
}
