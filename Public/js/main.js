/* Si l'utilisateur clique sur le lien bouton, la fonction est appelé */
function linkView() {
    /* On récupère l'id de la div qui contient les liens, puis on les affichent */
    document.getElementById('link').style.display = 'block';
}
function buttonUpdateNote() {
//    var elements = document.getElementsByClassName('notesViews');
//    elementsLength = elements.length;
//    for (var i = 0; i < elementsLength; i++) {
//        elements[i].style.display = "none";   
//    }
}
$('.buttonUpdate').click(function () {
    var id = $(this).attr('id');
    document.getElementById('formUpdateNote' + id).style.display = 'block';
    $('#notesViews' + id).css('display', 'none');
    $('#twoButtonViews' + id).css('display', 'none');
});
