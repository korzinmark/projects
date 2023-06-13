//Hamburger
const hamburger = document.querySelector('.hamburger'),
      menu = document.querySelector('.sidebar'),
      closeElem = document.querySelector('.sidebar__close');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

closeElem.addEventListener('click', () => {
    menu.classList.remove('active');
});

//Form
$('form').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "mailer/smart.php",
        data: $(this).serialize()
    }).done(function() {
        $(this).find("input").val("");
        $('.overlay, #thanks').fadeIn('slow');

        $('form').trigger('reset');
    });
    return false;
});


//Modal window closing function

$('.modal__close').on('click', function() {
    $('.overlay, #order').fadeOut('slow');
});
