const openPopUP = document.getElementById('open_pop_up');
const closePopUp = document.getElementById('pop_up_close');
const popUP = document.getElementById('pop_up');

openPopUP.addEventListener('click', function(e){
    e.preventDefault();
    popUP.classList.add('active');
})

closePopUp.addEventListener('click', ()=>{
    popUP.classList.remove('active');
})