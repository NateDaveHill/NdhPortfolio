$(document).ready(function(e){
    $win = $(window);
    $navbar = $('#header');
    $toggle = $('.toggle-button');
    var width = $navbar.width();
    toggle_onclick($win, $navbar, width);

    //resize event
    $win.resize(function(){
        toggle_onclick($win, $navbar, width);
    });

    $toggle.click(function(e){
    $navbar.toggleClass("toggle-left");
})

var typed = new Typed('#typed', {
    strings: [
        "Software Developer.", 
        "Photographer."],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true
});

var typed_2 = new Typed('#typed_2', {
        strings: [
            "Humilty.",
            "Honesty.",
            "Integrity.", 
            "Transparency.",
            "Proactivity.",
            "Discipline.",
            "Growth.",],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
    });            
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetElement = document.querySelector(this.getAttribute('href'));
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        } else {
            console.error('Target element not found for selector:', this.getAttribute('href'));
        }
    });
});

function toggle_onclick($win, $navbar, width){
    if($win.width()<=768){
        $navbar.css({left:`-${width}px`});
    }else{
        $navbar.css({left:'0px'});
    }
}

document.addEventListener('mousedown', (event) => {
    if(event.target.classList.contains('logo')){
        cursor = {
            x: event.clientX,
            y: event.clientY
        };
        logo = {
            dom: event.target,
            x: event.target.getBoundingClientRect().left,
            y: event.target.getBoundingClientRect().top
        };
    }
});

document.addEventListener('mousemove', (event) => {
    if (logo.dom == null) return;

    let currentCursor = {
        x: event.clientX,
        y: event.clientY
    };

    let newLeft = currentCursor.x - cursor.x;
    let newTop = currentCursor.y - cursor.y;

    logo.dom.style.left = newLeft + 'px';
    logo.dom.style.top = newTop + 'px';
});

document.addEventListener('mouseup', (event) => {
    logo.dom = null;
});

