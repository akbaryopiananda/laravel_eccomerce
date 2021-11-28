window.onload = function() {
    if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var slider = document.getElementById('slider');
        if (slider.classList) {
            slider.classList.add('swipe');
            slider.getElementsByTagName('div')[0].classList.add('swipe-wrap');
        } else {
            slider.className += 'swipe';
            slider.getElementsByTagName('div')[0].className += 'swipe-wrap';
        }
        window.mySwipe = Swipe(document.getElementById('slider'));
    }
}