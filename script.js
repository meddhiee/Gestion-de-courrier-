// La recuperation des elements 
const form = document.querySelector("#form");
const objet = document.querySelector('#objet');
const details = document.querySelector('#details');
const destinataire = document.querySelector('#destinataire');

function save_data()
{
	var form_element = document.getElementsByClassobjet('form_data');

	var form_data = new FormData();

	for(var count = 0; count < form_element.length; count++)
	{
		form_data.append(form_element[count].objet, form_element[count].value);
	}

	document.getElementById('submit').disabled = true;

	var ajax_request = new XMLHttpRequest();

	ajax_request.open('POST', 'home_check.php');

	ajax_request.send(form_data);

	ajax_request.onreadystatechange = function()
	{
		if(ajax_request.readyState == 4 && ajax_request.status == 200)
		{
			document.getElementById('submit').disabled = false;

			var response = JSON.parse(ajax_request.responseText);

			if(response.success != '')
			{
				document.getElementById('form').reset();

				document.getElementById('message').innerHTML = response.success;

				setTimeout(function(){

					document.getElementById('message').innerHTML = '';

				}, 5000);

				document.getElementById('objet_error').innerHTML = '';

                document.getElementById('type_error').innerHTML = '';

				document.getElementById('destinataire_error').innerHTML = '';

			}
			else
			{
				//display validation error
				document.getElementById('objet_error').innerHTML = response.objet_error;
				document.getElementById('type_error').innerHTML = response.type_error;
				document.getElementById('destinataire_error').innerHTML = response.destinataire_error;

			}

			
		}
	}
}
// Evenements
// form.addEventListener('submit',e=>{
//     e.preventDefault();

//     form_verify();
// })

// Fonstions
/*function form_verify() {
    // Obtenir toutes les valeurs des inputs
    const objetValue = objet.value.trim();
    const detailsValue = details.value.trim();
    const destinValue = destinataire.value.trim();

    
    // objet verify
    if (objetValue === "") {
        let message ="objet ne peut pas être vide";
        setError(objet,message);
    }else if(!objetValue.match(/^[a-zA-Z]/)){
        let message ="objet doit commencer par une lettre";
        setError(objet,message)
    }else{
        let letterNum = objetValue.length;
        if (letterNum < 3) {
            let message ="objet doit avoir au moins 3 caractères";
            setError(objet,message)
        } else {
            setSuccess(objet);
        }
    }

    // details verify
    if (detailsValue === "") {
        let message = "details ne peut pas être vide";
        setError(details,message);
    }else{
        setSuccess(details)
    }
    
    // destinataire verify
    if (destinValue ==="") {
        let message ="Le destinataire ne peut pas être vide";
        setError(destinataire,message)
    }else if(!destin_verify(destinValue)){
        let message = "Destinataire non valide";
        setError(destinataire,message);
    }else{
        setSuccess(destinataire);
    }
}

function setError(elem,message) {
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');

    // Ajout du message d'erreur
    small.innerText = message

    // Ajout de la classe error
    formControl.classobjet = "form-control error";
}

function setSuccess(elem) {
    const formControl = elem.parentElement;
    formControl.classobjet ='form-control success'
}
function destin_verify(des) {
 
    return /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(des);
}
*/
