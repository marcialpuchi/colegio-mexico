$(function(e) {
    
    function t() {
        e(window).width() > 1024 && e(document).scrollTop() <= 150 ? e(".navbar").removeClass("navbar-light") : e(".navbar").addClass("navbar-light")
    }

    function i() {
        e(window).width() > 1024 && e("#testimonial").hasClass("parallax") && e("#testimonial").parallax(0, .1)
    }
    if (e("body").jpreLoader({
        showSplash: !1,
        loaderVPos: "50%"
    }), e(window).on("scroll", function() {
        e(window).width() > 1024 && (e(document).scrollTop() > 150 ? e(".navbar").addClass("navbar-light") : e(".navbar").removeClass("navbar-light"))
    }), t(), e(window).resize(function() {
        t()
    }), e(".navbar-nav li a").click(function() {
        e(this).parents(".navbar-collapse.collapse").hasClass("in") && e("#main-nav").collapse("hide")
    }), e("#main-nav").localScroll({
        duration: 1e3,
        easing: "easeInOutExpo"
    }), e(".hero-buttons").localScroll({
        duration: 1e3,
        easing: "easeInOutExpo"
    }), e(".slideshow").length > 0 && (e.supersized({
        autoplay: 1,
        slide_interval: 3e3,
        transition: 1,
        transition_speed: 1e3,
        slide_links: "blank",
        thumb_links: 0,
        slides: [{
            image: "assets/img/sliders/slider1.png",
            title: '<div class="hero-text"><h2 class="hero-heading">HANDCRAFTED</h2><p>Built to provide great visitor experience</p></div>',
            thumb: "",
            url: ""
        }, {
            image: "assets/img/sliders/slider2.png",
            title: '<div class="hero-text"><h2 class="hero-heading">PARALLAX</h2><p>Scrolling the page is fun with parallax background</p></div>',
            thumb: "",
            url: ""
        }, {
            image: "assets/img/sliders/slider3.png",
            title: '<div class="hero-text"><h2 class="hero-heading">BUY ONE FOR TWO</h2><p>Buy one to get both of the agency and personal theme</p></div>',
            thumb: "",
            url: ""
        }]
    }), e(".fa-pause, .fa-play").click(function() {
        e(this).toggleClass("fa-pause fa-play")
    })), e(".hero-video").length > 0) {
        var a = {
            mp4: "assets/videos/motion.mp4",
            webm: "assets/videos/motion.webm",
            ogv: "assets/videos/motion.ogv",
            opacity: 1,
            zIndex: 0,
            fullscreen: !0,
            muted: "muted"
        };
        e(window).width() > 480 && (a.poster = "assets/img/sliders/slider3.png"), e(".hero-unit").videoBG(a), e(window).resize(function() {
            e(".videoBG_wrapper").width("100%"), e(".videoBG_wrapper").height("100%")
        }), e(".fa-volume-up, .fa-volume-off").click(function() {
            e(".videoBG video").toggleVolume(), e(this).toggleClass("fa-volume-up fa-volume-off")
        }), e.fn.toggleVolume = function() {
            var t = e(this).get(0);
            t.muted = 1 == t.muted ? !1 : !0
        }
    }
    //New Here
    e(".flexslider").flexslider({
        slideshowSpeed: 4e3,
        directionNav: !1,
        pauseOnAction: !1
    }), i(), e(window).resize(function() {
        i()
    }), e(window).width() > 992 && (e(window).scroll(function() {
        e(this).scrollTop() > 300 ? e(".back-to-top").fadeIn() : e(".back-to-top").fadeOut()
    }), e(".back-to-top").click(function(t) {
        t.preventDefault(), e("body, html").animate({
            scrollTop: 0
        }, 800, "easeInOutExpo")
    }));
    //To Here
    
    // e(".flexslider").flexslider({
    //     slideshowSpeed: 4e3,
    //     directionNav: !1,
    //     pauseOnAction: !1
    // }), i(), e(window).resize(function() {
    //     i()
    // }), twitterFetcher.fetch("441767385733668865", "tweet", 1, !0, !1, !0, "default"), e(window).width() > 992 && (e(window).scroll(function() {
    //     e(this).scrollTop() > 300 ? e(".back-to-top").fadeIn() : e(".back-to-top").fadeOut()
    // }), e(".back-to-top").click(function(t) {
    //     t.preventDefault(), e("body, html").animate({
    //         scrollTop: 0
    //     }, 800, "easeInOutExpo")
    // }));
    var o = e(".work-item-list");
    new imagesLoaded(o, function() {
        o.isotope({
            itemSelector: ".work-item"
        })
    }), e(window).smartresize(function() {
        o.isotope("reLayout")
    }), e(".work-item-filters a").click(function() {
        var t = e(this).attr("data-filter");
        return o.isotope({
            filter: t
        }), e(".work-item-filters a").removeClass("active"), e(this).addClass("active"), !1
    });
    var s, n;
    e(".media-popup").magnificPopup({
        type: "image",
        callbacks: {
            beforeOpen: function() {
                n = e(this.items)[this.index], s = n.title, n.title = "<h3>" + s + "</h3><p>" + e(n).parents(".work-item").find("img").attr("alt") + "</p>", this.st.mainClass = "mfp-fade"
            },
            close: function() {
                n.title = s
            }
        }
    }), e(window).width() > 1024 ? (wow = new WOW({
        animateClass: "animated"
    }), wow.init()) : e(".wow").attr("class", ""), e(window).width() > 1024 && e("body").tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    }), navigator.userAgent.match("Opera/") ? e("#main-nav .nav li").removeClass("active") : e("body").scrollspy({
        target: "#main-nav"
    })
});
