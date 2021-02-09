

const btnCollection = document.querySelectorAll('.info a');

btnCollection.forEach(function(element, index){
    let btn = element;

    btn.addEventListener('click', function(e){
        e.preventDefault();

        let text = btn.previousElementSibling;

        text.classList.toggle('hidePara');

        if(text.className === 'hidePara'){
            btn.textContent = "Learn More";
        } else {
            btn.textContent = "See Less";
        }
    })
})

