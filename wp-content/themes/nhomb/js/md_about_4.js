window.onload = function() {

    $('.carousel').carousel({
        interval: 9500
    });

    const BG_NEXT = document.getElementsByClassName('left');
    const BG_PREV = document.getElementsByClassName('right');
    const TIMING = document.getElementsByClassName('timing-bar');

    //Set auto animate timing bar
    setTimeout(() => {
        TIMING[0].classList.add('timingAnimation');
    }, 1000);

    let nextImage, prevImage;

    function getNextAndPrev() {
        let activeSlide = $('.active');

        if (activeSlide.next().length) {
            nextImage = activeSlide.next().find('img').attr('src')
        } else {
            nextImage = $('.carousel-inner').children().first().find('img').attr('src');
        }

        if (activeSlide.prev().length) {
            prevImage = activeSlide.prev().find('img').attr('src');
        } else {
            prevImage = $('.carousel-inner').children().last().find('img').attr('src');
        }

        $('.previmage').attr('src', prevImage);
        $('.nextimage').attr('src', nextImage);
    }
    getNextAndPrev();

    setInterval(getNextAndPrev, 200);
    BG_NEXT[0].addEventListener('click', function() {
        getNextAndPrev();
        BG_NEXT[0].style.background = "url('" + nextImage + "'";
        TIMING[0].classList.remove('timingAnimation');
        setTimeout(() => {
            TIMING[0].classList.add('timingAnimation');
        }, 1000);
    });
    BG_PREV[0].addEventListener('click', function() {
        getNextAndPrev();
        BG_PREV[0].style.background = "url('" + prevImage + "'";
        TIMING[0].classList.remove('timingAnimation');
        setTimeout(() => {
            TIMING[0].classList.add('timingAnimation');
        }, 1000);
    });
    BG_NEXT[0].addEventListener('mouseover', function() {
        BG_NEXT[0].style.background = "url('" + nextImage + "'";
    });
    BG_NEXT[0].addEventListener('mouseout', function() {
        BG_NEXT[0].style.background = "rgba(0,0,0,0.3)";
    });

    BG_PREV[0].addEventListener('mouseover', function() {
        BG_PREV[0].style.background = "url('" + prevImage + "'";
    });
    BG_PREV[0].addEventListener('mouseout', function() {
        BG_PREV[0].style.background = "rgba(0,0,0,0.3)";
    });
}