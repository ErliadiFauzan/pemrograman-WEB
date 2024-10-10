function calculateSum() {
    const num1 = document.getElementById('num1').value;
    const num2 = document.getElementById('num2').value;
    if (num1 === '' || num2 === '') {
        alert("Mohon isi kedua angka!");
    } else {
        const sum = parseFloat(num1) + parseFloat(num2);
        document.getElementById('result').innerText = sum;
    }
}
