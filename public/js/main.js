const nav = document.getElementById('nav')

const slider = document.getElementById('slider');


document.addEventListener('scroll', navBackgorund);


slider.innerHTML += slider.innerHTML;


function navBackgorund () {
    let scrollY = window.scrollY;
    console.log(scrollY);
    
    if(scrollY > 200 ) {
        nav.classList.add('navBg');
    } else {
        nav.classList.remove('navBg');
    }
}