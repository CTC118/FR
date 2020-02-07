function isEmail(strEmail) {
    
    if (strEmail.search(/^\w ((-\w )|(\.\w ))*\@[A-Za-z0-9] ((\.|-)[A-Za-z0-9] )*\.[A-Za-z0-9] $/) != -1) {
        return true;
    } else {
        alert("Le format est incorrect");
    }
    
}




function validForm(ev) {
    //alert('validation');
    var erreur = false;
    var requis = document.querySelectorAll('.requi');
    for (var indexLabel = 0; indexLabel < requis.length; indexLabel++) {
        var input = requis[indexLabel].nextElementSibling;
        if (input.value === '') {
            input.style.backgroundColor = 'red';
            erreur = true;
            input.addEventListener('focus', function (){
                this.style.background = '#eaeaea';
            }, false);
            input.addEventListener('blur', function (){
                this.style.background = 'white';
            }, false);
        }
    }
    
    
}