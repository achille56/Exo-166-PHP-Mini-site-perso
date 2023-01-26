let password = document.getElementById("id-password");
let passwordConfirm = document.getElementById("id-password-repeat");

function checkPassword() {
    if (password.value !== passwordConfirm.value) {
        // Si les 2 valeurs sont différentes, on envoie pas le formulaire.
        passwordConfirm.setCustomValidity("Les mots de passes ne correspondent pas !");
    }
    else {
        // on retire l'avertissement, le formulaire peut à nouveau etre envoyé.
        passwordConfirm.setCustomValidity("");
    }
}

password.addEventListener("change", checkPassword);
passwordConfirm.addEventListener("keyup", checkPassword);