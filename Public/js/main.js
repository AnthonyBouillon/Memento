/* Si l'utilisateur clique sur le lien bouton, la fonction est appelé */
function linkView() {
    /* On récupère l'id de la div qui contient les liens, puis on les affichent */
    document.getElementById("link").style.display = "block";
}
function buttonUpdateNote() {
    var elements = document.getElementsByClassName('formUpdateNote');
    elementsLength = elements.length;
    for (var i = 0; i < elementsLength; i++) {
        elements[i].style.display = "block";   
    }
    var elements2 = document.getElementsByClassName('notesViews');
    elementsLength2 = elements2.length;
    for (var i = 0; i < elementsLength2; i++) {
        elements2[i].style.display = "none";   
    }
}
