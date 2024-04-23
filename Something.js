const scroll = new LocomotiveScroll({
    el: document.querySelector('#main'),
    smooth: true
});

function locomotiveanimation() {
    gsap.registerPlugin(ScrollTrigger);

    const locoScroll = new LocomotiveScroll({
        el: document.querySelector("#main"),
        smooth: true
    });

    locoScroll.on("scroll", ScrollTrigger.update);

    ScrollTrigger.scrollerProxy("#main", {
        scrollTop(value) {
            return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
        },
        getBoundingClientRect() {
            return {
                top: 0,
                left: 0,
                width: window.innerWidth,
                height: window.innerHeight
            };
        },
        pinType: document.querySelector("#main").style.transform ? "transform" : "fixed"
    });

    ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
    ScrollTrigger.refresh();
}

locomotiveanimation();

function navbaranimation() {
    gsap.to('#nav-part1 svg', {
        transform: 'translate(0,-100%)',
        scrollTrigger: {
            trigger: "#page1",
            scroller: "#main",
            markers: true,
            start: "top 0",
            end: 'top -5%',
            scrub: true
        }
    });

    gsap.to('#nav-part2 #links', {
        transform: 'translate(0,-100%)',
        opacity: 0,
        scrollTrigger: {
            trigger: "#page1",
            scroller: "#main",
            markers: true,
            start: "top 0",
            end: 'top -5%',
            scrub: true
        }
    });
}

navbaranimation();

function videoconanimation() {
    var videocon = document.querySelector("#video-container");
    var playbtn = document.querySelector("#play");
    videocon.addEventListener("mouseenter", function() {
        gsap.to(playbtn, {
            opacity: 1,
            scale: 1
        });
    });
    videocon.addEventListener('mouseleave', function() {
        gsap.to(playbtn, {
            opacity: 0,
            scale: 0
        });
    });

    videocon.addEventListener('mousemove', function(dets) {
        gsap.to(playbtn, {
            left: dets.x - 80,
            top: dets.y - 60
        });
    });
}

videoconanimation();

function loadinganimation() {
    gsap.from("#page1 h1", {
        y: 100,
        opacity: 0,
        delay: 0.5,
        duration: 0.9,
        stagger: 0.2
    });
    gsap.from("#page1 #video-container", {
        scale: 0.9,
        opacity: 0,
        delay: 1.3,
        duration: 0.5
    });
}

loadinganimation();

function cursoranimation() {
    document.addEventListener("mousemove", function(dets) {
        gsap.to("#cursor", {
            left: dets.x,
            top: dets.y
        });
    });

    document.querySelector("#child1").addEventListener("mouseenter", function() {
        gsap.to("#cursor", {
            transform: 'translate(-50%,-50%) scale(1)',
            backgroundColor: "#ffebcd"
        });
    });

    document.querySelector("#child2").addEventListener("mouseenter", function() {
        gsap.to("#cursor", {
            transform: "translate(-50%,-50%) scale(1)",
            backgroundColor: "#ffcdf6"
        });
    });

    document.querySelector("#child3").addEventListener("mouseenter", function() {
        gsap.to("#cursor", {
            transform: "translate(-50%,-50%) scale(1)",
            backgroundColor: "#cdecff"
        });
    });

    document.querySelector("#child4").addEventListener("mouseenter", function() {
        gsap.to("#cursor", {
            transform: "translate(-50%,-50%) scale(1)",
            backgroundColor: "#d0ffcd"
        });
    });

    document.querySelectorAll(".child").forEach(function(elem) {
        elem.addEventListener("mouseleave", function() {
            gsap.to("#cursor", {
                transform: "translate(-50%,-50%) scale(0)",
            });
        });
    });
}

cursoranimation();

// Adding zoom effect and page reload on click for specific images
document.querySelectorAll('img').forEach(function(img) {
    if (img.src.includes('images/Garv.png') || img.src.includes('pratham.png') || img.src.includes('sakshi.png')) {
        img.addEventListener('mouseenter', function() {
            gsap.to(img, { scale: 1.2 });
        });
        img.addEventListener('mouseleave', function() {
            gsap.to(img, { scale: 1 });
        });
        img.addEventListener('click', function() {
            location.reload();
        });
    }
});
