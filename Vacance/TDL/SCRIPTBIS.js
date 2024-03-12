
var btnToDo = document.querySelector('#btnToDo');
var toDoCont = document.querySelector('#toDoCont');
var inputT = document.querySelector('#inputT');
var form = document.querySelector('form');
var paraStyle = document.querySelectorAll('.paraStyle p');

form.addEventListener("submit", function (event) {
    event.preventDefault();  // Bloque l'action par défaut du formulaire

    // Appelez la fonction addTask ici pour gérer l'ajout de la tâche
    addTask();
});

// Fonction pour ajouter une tâche : 

function addTask() {
// Si le contenue de inputT est différent de rien :
    if (inputT.value !== "") {
    // Crée une balise <p> stocké dans la Variable para :
        var li = document.createElement('li');
// Ajoute au text HTML de para le contenue de inputT :
        li.innerText = inputT.value;
// Ajouter une class à para ( => CSS & HTML) :
        li.classList.add('paraStyle');
// Add para à la <div id="toDoCont"> :
        toDoCont.appendChild(li);
// Reset inputT quand btnToDo.onclick :
        inputT.value = "";
// Permet de revenir sur le champ inputT :
        inputT.focus();
// Ajoute l'event 'click' à para qui permet de ajouter une class à para : 
        li.addEventListener('click', function () {
            li.classList.add('paraClick');
        });
// Ajoute l'event 'dblclick' à para qui permet de delete la tache sur la quelle on double clique :
        li.addEventListener('dblclick', function () {
            toDoCont.removeChild(li);
        });
    }
}

paraStyle.forEach(function(test){
test.addEventListener('click', function () {
    test.classList.add('paraClick');
});
});

paraStyle.forEach(function(test){
test.addEventListener('dblclick', function () {
    toDoCont.removeChild(test);
});
});
