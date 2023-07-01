//Hamburger
const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.menu'),
      close = document.querySelector('.menu__close');
      main = document.querySelector('.menu__link-main');
      aboutMe = document.querySelector('.menu__link-aboutMe');
      aboutOwner = document.querySelector('.menu__link-aboutOwner');
      questions = document.querySelector('.menu__link-questions');
      
hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

close.addEventListener('click', () => {
    menu.classList.remove('active');
});

main.addEventListener('click', () => {
    menu.classList.remove('active');
});

aboutMe.addEventListener('click', () => {
    menu.classList.remove('active');
});

aboutOwner.addEventListener('click', () => {
    menu.classList.remove('active');
});

questions.addEventListener('click', () => {
    menu.classList.remove('active');
});

//Slider
const slider = tns({
    container: '.gallery__slider',
    items: 1,
    slideBy: 'page',
    autoplay: false,
    controls: false,
    speed: 600
});

document.querySelector('.prev').addEventListener('click', function () {
    slider.goTo('prev');
});

document.querySelector('.next').addEventListener('click', function () {
    slider.goTo('next');
});

//Form validation
$('#form').validate({
    rules: {
        name: 'required',
        email: {
            required: true,
            email: true
        },
        text:'required',
        checkbox:'required'
    },
    messages: {
        name: "Please, enter your name",
        email: {
          required: "Please, enter your email",
          email: "Email address entered incorrectly" 
        },
        text: "Please, enter a message",
        checkbox: "Please, agree to the privacy policy"
      }
});

// Smooth Scroll and pageup
$(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
        $('.pageup').fadeIn();
    } else {
        $('.pageup').fadeOut();
    }
});

$("a[href^='#']").click(function(){
    const _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    return false;
});

//Modal windows closing function

$('.modal__close').on('click', function() {
    $('.overlay, #order').fadeOut('slow');
});

//Form sending
$('#form').submit(function(e) {
    e.preventDefault();

    if (!$(this).valid()) {
        return;
    }

    $.ajax({
        type: "POST",
        url: "mailer/smart.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val("");
        $('.overlay, #thanks').fadeIn('slow');
        $('#form').trigger('reset');
    });
    return false;
});
