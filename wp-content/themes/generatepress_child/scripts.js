jQuery(document).ready(function ($){
    $(".pro-back-history").click(function (e){
        e.preventDefault();
        history.back();
    });

    $(".pro-galeria-producto").slick({
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        nextArrow: `<svg class="slick-arrow slick-next" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="25" cy="25" r="25" transform="rotate(-90 25 25)" fill="#FFB740"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5417 13.6214C21.4291 13.3929 22.3274 13.9524 22.5482 14.8712C23.0554 16.9826 25.3542 21.6395 30.2292 23.0889C30.8947 23.2867 31.371 23.8924 31.4233 24.6072C31.4755 25.322 31.0927 25.995 30.4635 26.2942C29.1124 26.9369 27.0578 28.1848 25.3702 29.7823C23.6296 31.43 22.5971 33.1437 22.5971 34.7132C22.5971 35.66 21.8558 36.4275 20.9413 36.4275C20.0269 36.4275 19.2855 35.66 19.2855 34.7132C19.2855 31.6619 21.1967 29.0874 23.1356 27.252C24.0685 26.369 25.0823 25.5858 26.0602 24.9248C21.8823 22.3381 19.8788 17.9644 19.3345 15.6988C19.1138 14.78 19.6542 13.8499 20.5417 13.6214Z" fill="white"/>
            </svg>`,
        prevArrow: `<svg class="slick-arrow slick-prev" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle r="25" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 25 25)" fill="#FFB740"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.4583 13.6214C28.5709 13.3929 27.6726 13.9524 27.4518 14.8712C26.9446 16.9826 24.6458 21.6395 19.7708 23.0889C19.1053 23.2867 18.629 23.8924 18.5767 24.6072C18.5245 25.322 18.9073 25.995 19.5365 26.2942C20.8876 26.9369 22.9422 28.1848 24.6298 29.7823C26.3704 31.43 27.4029 33.1437 27.4029 34.7132C27.4029 35.66 28.1442 36.4275 29.0587 36.4275C29.9731 36.4275 30.7145 35.66 30.7145 34.7132C30.7145 31.6619 28.8033 29.0874 26.8644 27.252C25.9315 26.369 24.9177 25.5858 23.9398 24.9248C28.1177 22.3381 30.1212 17.9644 30.6655 15.6988C30.8862 14.78 30.3458 13.8499 29.4583 13.6214Z" fill="white"/>
            </svg>`,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    arrows: false
                }
            },
        ]
    });

    $(".pro-carousel-atencion").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        // autoplay: true,
        // speed: 2000,
        prevArrow: $(".pro-contacto-arrow-btn-left"),
        nextArrow: $(".pro-contacto-arrow-btn-right"),
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    arrows: true
                }
            },
        ]
    });

    $(".pro-carousel-soporte").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: false
    });


    $(".pro-form-acept").find("input").change(function(e){
        var $check = $(this);
        var $father = $(this).parent().parent().parent().parent().parent();
        var $iconSvg2 = $father.find(".pro-icon-svg2");
        var $iconSvg1 = $father.find(".pro-icon-svg1");
        if($check.prop("checked")){
            $iconSvg2.removeClass("pro-d-none");
            $iconSvg1.addClass("pro-d-none");
        }else{
            $iconSvg1.removeClass("pro-d-none");
            $iconSvg2.addClass("pro-d-none");
        }
    });

    $(".pro-accordion").click(function(e){
        e.preventDefault();
        var $this = $(this);
        var $father = $(this).parent();
        var $panel = $this.next();
        if($father.hasClass("pro-active")){
            $father.removeClass("pro-active");
        }else{
            $father.addClass("pro-active");
        }
    });

    // LINEA DE TIEMPO

    $(".pro-js-is-button-tab").click(function(e){
        e.preventDefault();
        var $btn = $(this);
        var $parent = $(this).parent();
        var $panel = $btn.data("panel");
        var $next = $btn.data("next");
        var $btnNext = $parent.find(`.pro-item__button-view--${$next}`);
        $(".pro-item__button-view--2").each(function(){
            $(this).slideUp();
        });
        $(".pro-item__button-view--1").each(function(){
            $(this).slideDown();
        });
        $btn.slideUp("fast");
        $btn.removeClass("is-active").addClass("no-active");
        $btnNext.slideDown("fast");
        $btnNext.removeClass("no-active").addClass("is-active");
        // RESET PANEL
        $(".pro-linea-tiempo__panel").each(function(){
            $(this).slideUp("fast");
        });
        if($panel){
            if($next === 2) $("#"+$panel).slideDown("fast");
            if($next === 1) $("#"+$panel).slideUp("fast");
        }
    });

    $(".pro-js-is-panel-close").click(function(e){
        e.preventDefault();
        var $parent = $(this).parent();
        $(".pro-item__button-view--2").each(function(){
            $(this).slideUp();
        });
        $(".pro-item__button-view--1").each(function(){
            $(this).slideDown();
        });
        $parent.slideUp("fast");
    });


    $(".pro-carousel-experiencia").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false
    });

    $(".pro-tab-list").on("click", ".pro-tab", function(event) {
        event.preventDefault();
        var $tab = $(".pro-tab");
        var $tabContent = $(".pro-tab-content");
        var $this = $(this);
        var $target = $(this).attr('href');
        $tab.removeClass("pro-active");
        $tabContent.removeClass("pro-show");
        $this.addClass("pro-active");
        $($target).addClass("pro-show");
    });

    $(".pro-slick-testimonios").slick({
        arrows: true,
        slidesToScroll: 1,
        slidesToShow: 4,
        prevArrow: $(".pro-arrow-btn-left"),
        nextArrow: $(".pro-arrow-btn-right"),
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            },
        ]
    });

    $(".pro-slick-nuestro-equipo-directivo").slick({
        autoplay: true,
        arrows: true,
        slidesToScroll: 1,
        slidesToShow: 1,
        fade: true,
        prevArrow: $(".pro-arrow-btn-left"),
        nextArrow: $(".pro-arrow-btn-right"),
        asNavFor: '.pro-slick-nav-image',
        pauseOnFocus: false,
        pauseOnHover: false
    });

    $(".pro-slick-nav-image").slick({
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.pro-slick-nuestro-equipo-directivo',
        pauseOnFocus: false,
        pauseOnHover: false
    });

    // HISTORIA

    const $slider = document.querySelector('.pro-timeline');
    var isDown = false;
    var startX;
    var scrollLeft;

    if($slider){
        $slider.addEventListener('mousedown', (e) => {
            isDown = true;
            $slider.classList.add('pro-active');
            startX = e.pageX - $slider.offsetLeft;
            scrollLeft = $slider.scrollLeft;
        });
        $slider.addEventListener('mouseleave', () => {
            isDown = false;
            $slider.classList.remove('pro-active');
        });
        $slider.addEventListener('mouseup', () => {
            isDown = false;
            $slider.classList.remove('pro-active');
        });
        $slider.addEventListener('mousemove', (e) => {
            if(!isDown) return;
            e.preventDefault();
            const x = e.pageX - $slider.offsetLeft;
            const walk = (x - startX) * 3; //scroll-fast
            $slider.scrollLeft = scrollLeft - walk;
        });
    }

    // NUESTROS LOGROS

    $(".pro-carousel-nuestros-logros").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        prevArrow: $(".pro-nuestros-logros-arrow-btn-left"),
        nextArrow: $(".pro-nuestros-logros-arrow-btn-right"),
    });

    // DETALLE PRODUCTO

    $(".pro-form-select1, .pro-form-select2, .pro-form-select3").change(function (e){
        var $this = $(this);
        if($this.hasClass("pro-form-select1")){
            $(".pro-form-select1-value").val($this.val());
        }
        if($this.hasClass("pro-form-select2")){
            $(".pro-form-select2-value").val($this.val());
        }
        if($this.hasClass("pro-form-select3")){
            $(".pro-form-select3-value").val($this.val());
        }
    });

});