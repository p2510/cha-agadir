"use strict";

// course detail page js for banner bg
if(window.innerWidth > 990){
    window.addEventListener('DOMContentLoaded',()=>{
        let couseDetailbannerBg = document.querySelector("#course-detail-banner-bg");
        let couseDetailbanner = document.querySelector(".course-detail-banner");
        couseDetailbannerBg.setAttribute('style', `width:100%;height:${couseDetailbanner.scrollHeight}px`);
    });
}
