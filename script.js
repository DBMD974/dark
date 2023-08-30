// Fonction pour vérifier si un élément est visible dans la fenêtre
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour appliquer l'effet d'apparition aux images lorsque l'utilisateur fait défiler
function handleScroll() {
    var images = document.querySelectorAll('.image-column img');
    images.forEach(function(image) {
        if (isElementInViewport(image)) {
            image.style.opacity = '1';
        }
    });
}

// Écouteur d'événement pour le défilement
window.addEventListener('scroll', handleScroll);




// case de newsletter a cocher obligatoirement 
document.addEventListener('DOMContentLoaded', function() {
    var acceptCheckboxes = document.querySelectorAll('.accept-newsletters input[type="checkbox"]');
    var acceptErrors = document.querySelectorAll('.accept-newsletters .error-message');
    var forms = document.querySelectorAll('form');

    forms.forEach(function(form, index) {
        form.addEventListener('submit', function(event) {
            if (!acceptCheckboxes[index].checked) {
                event.preventDefault(); // Empêche l'envoi du formulaire si la case n'est pas cochée
                acceptErrors[index].style.display = 'inline';
            } else {
                acceptErrors[index].style.display = 'none';
            }
        });
    });

    acceptCheckboxes.forEach(function(checkbox, index) {
        checkbox.addEventListener('change', function() {
            acceptErrors[index].style.display = this.checked ? 'none' : 'inline';
        });
    });
});


