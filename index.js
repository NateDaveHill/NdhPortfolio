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








function toggle_onclick($win, $navbar, width){
    if($win.width()<=768){
        $navbar.css({left:`-${width}px`});
    }else{
        $navbar.css({left:'0px'});
    }
}