function showMenu(){
    let menu = document.querySelector('aside.sidebar');
    menu.style.left = 0;

    let menuBackground = document.querySelector('div.hidden-menu');
    menuBackground.style.display = 'block';
}

function hideMenu(){
    let menu = document.querySelector('aside.sidebar');
    menu.style.left = -250;

    let menuBackground = document.querySelector('div.hidden-menu');
    menuBackground.style.display = 'none';
}

function markCurrent(){
    // let liGroup = document.querySelector('li.project-item');
    alert('ois');
}

function addProject(){
    let form = document.querySelector('.new-project-form'); 
    form.style.display = 'block'
}