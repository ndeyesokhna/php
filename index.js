let formtag = document.getElementById('message_form');
let nom =  document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('email');
let submit = document.getElementById("Envoyer");
let genre = document.getElementById('Genre')




submit.addEventListener("click" ,function() {
    
    if (nom.value==""){
        alert("le champ nom est vide ");
    }
	else if (prenom.value==""){
        alert("le champ prenom est vide");
    }
    else if (email.value==""){
        alert("le champ email est vide");
    }
    else if (genre.value==""){
        alert("le champ genre est vide");
    }

	
});