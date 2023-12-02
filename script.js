function generatePassword() {
    const length = document.getElementById('length').value;
    const includeNumbers = document.getElementById('includeNumbers').checked;
    const includeSpecial = document.getElementById('includeSpecial').checked;
    const includeAlphabets = document.getElementById('includeAlphabets').checked;

    let charset = '';
    if (includeNumbers) charset += '0123456789';
    if (includeSpecial) charset += '!@#$%^&*()-_=+';
    if (includeAlphabets) charset += 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    let password = '';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        password += charset[randomIndex];
    }

    document.getElementById('generated-password').innerText = 'Generated Password: ' + password;

    // Add the generated password to the password manager
    const passwordsList = document.getElementById('passwords');
    const li = document.createElement('li');
    li.appendChild(document.createTextNode(password));
    passwordsList.appendChild(li);
}

function copyPassword() {
    const generatedPassword = document.getElementById('generated-password');
    const textArea = document.createElement('textarea');
    textArea.value = generatedPassword.innerText.replace('Generated Password: ', '');
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand('copy');
    document.body.removeChild(textArea);
    alert('Password copied to clipboard!');
}

// Update the displayed length value as the slider is moved
const lengthSlider = document.getElementById('length');
const lengthDisplay = document.getElementById('length-display');
lengthDisplay.textContent = 'Length: ' + lengthSlider.value;

lengthSlider.addEventListener('input', function () {
    lengthDisplay.textContent = 'Length: ' + lengthSlider.value;
});
function clearPasswords() {
    const passwordsList = document.getElementById('passwords');
    passwordsList.innerHTML = ''; // Clearing all passwords
}

