const searchElement = document.querySelector('#searchInput');
const list = document.querySelector('.searchList');

async function querySearch() {
    try {
        const value = searchElement.value;
        const response = await fetch(`/api/discs?title=${value}`);
        const body = await response.json();

        return body['hydra:member'];
    } catch (e) {
        console.log(e)
    }
}

async function showResult(){
    const resultat = await querySearch();

    list.innerHTML=``;

    if (searchElement.value){
        resultat.forEach(element => {
            const aElement = document.createElement('a');
            aElement.classList.add('list-group-item', 'list-group-item-action', 'resultLink');
            aElement.setAttribute('href', window.location.origin+'/disc/'+element.id)
            aElement.innerHTML = `${element.title}`;
            list.appendChild(aElement);
            list.classList.contains('d-none') ? list.classList.replace('d-none', 'd-block') : null;
        });
    }
}

//affiche la liste lors de la saisie
searchElement.addEventListener('input',()=>{
    showResult();
})

//retire la liste si click en dehors
window.addEventListener('click', ()=>{
    if (list.classList.contains('d-block')) {
        list.classList.replace('d-block', 'd-none');
    }
})

//Retire la liste si la touche escape
searchElement.addEventListener('keydown', (event)=>{
    if (event.key == 'Escape') {
        list.classList.contains('d-block') ? list.classList.replace('d-block', 'd-none') : null;
    }
})
