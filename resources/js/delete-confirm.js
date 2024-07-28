const deleteForms=document.querySelectorAll('form.animal-destroy');

deleteForms.forEach((deleteFormElement) => {
    deleteFormElement.addEventListener('submit',function( event ){
        event.preventDefault();

        if(window.confirm('sei sicuro di voler eliminare questo animale ?') === true){
            this.onsubmit();
        }
    });

})