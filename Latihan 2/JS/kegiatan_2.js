function validateForm() {

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const address = document.getElementById('address').value.trim();


    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const emailFormatError = document.getElementById('emailFormatError');
    const addressError = document.getElementById('addressError');
    const successMessage = document.getElementById('successMessage');

  
    nameError.style.display = 'none';
    emailError.style.display = 'none';
    emailFormatError.style.display = 'none';
    addressError.style.display = 'none';
    successMessage.style.display = 'none';

    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('address').value = '';

    let isValid = true;


    if (name === '') {
        nameError.style.display = 'block';
        document.getElementById('name').style.borderColor = 'red'; 
        isValid = false;
    }

 
    if (email === '') {
        emailError.style.display = 'block';
        document.getElementById('email').style.borderColor = 'red'; 
        isValid = false;
    } else if (!validateEmail(email)) {
        emailFormatError.style.display = 'block';
        document.getElementById('email').style.borderColor = 'red'; 
        isValid = false;
    }


    if (address === '') {
        addressError.style.display = 'block';
        document.getElementById('address').style.borderColor = 'red'; 
        isValid = false;
    }


    if (isValid) {
        successMessage.innerText = 'Formulir Pendaftaran berhasil!';
        successMessage.style.display = 'block'; 
    }
}


function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}


document.querySelectorAll('input').forEach(input => {
    input.addEventListener('focus', function() {
        const errorMessage = document.getElementById(this.id + 'Error');
        const emailFormatError = document.getElementById('emailFormatError');
        
        if (errorMessage) {
            errorMessage.style.display = 'none'; 
            this.style.borderColor = ''; 
        }

        if (this.id === 'email') {
            emailFormatError.style.display = 'none'; 
        }
    });

    input.addEventListener('input', function() {
        const errorMessage = document.getElementById(this.id + 'Error');
        if (errorMessage) {
            errorMessage.style.display = 'none'; 
            this.style.borderColor = ''; 
        }
    });
});
