function generatePassword() {
    const passwordLength = 12;
    const passwordChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    let password = "";
    for (let i = 0; i < passwordLength; i++) {
        password += passwordChars.charAt(Math.floor(Math.random() * passwordChars.length));
    }
    document.getElementById("password").value = password;
    document.getElementById("passwordCheck").value = password;
}