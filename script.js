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
// function handleScroll() {
//     var images = document.querySelectorAll('.image-column img');
//     images.forEach(function(image) {
//         if (isElementInViewport(image)) {
//             image.style.opacity = '1';
//         }
//     });
// }

// // Écouteur d'événement pour le défilement
// window.addEventListener('scroll', handleScroll);




// case de newsletter a cocher obligatoirement 
document.addEventListener('DOMContentLoaded', function() {
    var acceptCheckboxes = document.querySelectorAll('.accept-newsletters input[type="checkbox"]');
    var acceptErrors = document.querySelectorAll('.accept-newsletters .error-message');
    var forms = document.querySelectorAll('form');
  
    acceptErrors.forEach(function(error) {
      error.style.display = 'none'; // Masquez tous les messages d'erreur au chargement de la page
    });
  
    forms.forEach(function(form, index) {
      form.addEventListener('submit', function(event) {
        if (!acceptCheckboxes[index].checked) {
          event.preventDefault(); // Empêche l'envoi du formulaire si la case n'est pas cochée
          acceptErrors[index].style.display = 'inline';
          acceptErrors[index].style.color = 'red'; // Mettez le texte en rouge
        }
      });
    });
  
    acceptCheckboxes.forEach(function(checkbox, index) {
      checkbox.addEventListener('change', function() {
        acceptErrors[index].style.display = 'none'; // Masquez le message d'erreur lorsque la case est cochée
      });
    });
  });
  


// effet sur le header
// Sélectionnez les éléments du header
const headerContent = document.querySelector('.header-content');
const imageSection = document.querySelector('.image-section');

// Attendez que la page soit chargée
window.addEventListener('load', () => {
    // Ajoutez la classe "active" pour déclencher l'effet d'apparition
    headerContent.classList.add('active');
    imageSection.classList.add('active');
});





// Fonction pour vérifier si un élément est dans la fenêtre d'affichage
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Fonction pour activer l'animation du texte (de gauche à droite)
  function animateText() {
    const textColumn = document.querySelector('.text-column');
    if (isElementInViewport(textColumn)) {
      textColumn.classList.add('animate'); // Ajoutez une classe d'animation au texte
      window.removeEventListener('scroll', animateText); // Désactivez l'écouteur d'événements une fois l'animation activée
    }
  }
  
  // Écouteur d'événement pour le défilement pour activer l'animation du texte
  window.addEventListener('scroll', animateText);
  
  // Fonction pour gérer le défilement et l'effet d'apparition des images
  function handleScroll() {
    // Logique pour gérer le défilement existante (le cas échéant)
  
    // Logique pour l'effet d'apparition des images
    const images = document.querySelectorAll('.image-column img');
    images.forEach(function(image) {
      if (isElementInViewport(image)) {
        image.style.opacity = '1'; // L'opacité devient 1 lorsque l'image est dans la fenêtre
      }
    });
  }
  
  // Écouteur d'événement pour le défilement pour l'effet d'apparition des images
  window.addEventListener('scroll', handleScroll);
  