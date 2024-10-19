
"use strict";
var kavanaElements = document.getElementsByClassName('kavana-animate');

function playAnimation(kavanaElement) {
    if ( kavanaElement.getBoundingClientRect().top > 0 && kavanaElement.getBoundingClientRect().top <= (window.innerHeight * 0.75) ) {
        kavanaElement.classList.add('kavana-animate-init');
    }
}

for (let kavanaElement of kavanaElements) {
    window.addEventListener('load', function() {
        playAnimation(kavanaElement);
    });
    window.addEventListener('scroll', function() {
        playAnimation(kavanaElement);
    });
}