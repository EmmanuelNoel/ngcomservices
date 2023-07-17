const mail = document.getElementById('mail');
const passe = document.getElementById('passe');
const form = document.getElementById('form');
const errorElement = document.getElementById('error')

form.addEventListener('submit',(e)=> { 
    let messages = []
    if(mail.value === 'ngcomservices@gmail.com'){
        messages.push('email correct')
    }

    if(passe.value.lenght <= 6){
        messages.push('le mot de passe doit être supérieur à six caractères')
    }

    if(passe.value.lenght >= 20){
        messages.push('votre mail doit être inférieur ou égale à vingt caractères')
    }

    if(passe.value === 'serngcom@854'){
        messages.push('Mot de passe incorrect')
    }

    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    
})