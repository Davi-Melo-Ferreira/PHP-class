document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('meuFormulario');

    form.addEventListener("submit", function(event){
        const confirmar = confirm("Deseja realmente enviar esta mensagem?");
        if (!confirmar){
            event.preventDefault();
        }
    })
})