document.addEventListener('scroll', function () {
    var scrolled = window.scrollY;
    document.querySelector('.left-banner').style.top = scrolled + 'px';
    document.querySelector('.right-banner').style.top = scrolled + 'px';
});
