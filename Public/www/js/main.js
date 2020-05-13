$(function () {



    // pc轮播

    var mySwiper = new Swiper('.pc-banner .swiper-container', {

        loop: true,

        autoplay: true,

        speed: 1200,

        navigation: {

            nextEl: '.pc-banner .swiper-button-next',

            prevEl: '.pc-banner .swiper-button-prev',

        },

        pagination: {

            el: '.pc-banner .swiper-pagination',

            clickable: true,

        },

    })



    // pc-partner

    var mySwiper = new Swiper('.pc-partner .swiper-container', {

        autoplay: true,

        speed: 1200,

        spaceBetween: 20,

        slidesPerView: 4,

        slidesPerColumn: 2,

        navigation: {

            nextEl: '.pc-partner .swiper-button-next',

            prevEl: '.pc-partner .swiper-button-prev',

        },



        pagination: {

            el: '.pc-partner .swiper-pagination',

            clickable: true,

        },

    })



    // wap 轮播

    // wap-banner

    var mySwiper = new Swiper('.wap-banner .swiper-container', {

        loop: true,

        autoplay: true,

        speed: 1200,

        pagination: {

            el: '.wap-banner .swiper-pagination',

            clickable: true,

        },

    })

    // wap-partenr

    var mySwiper = new Swiper('.wap-partner .swiper-container', {

        loop: true,

        autoplay: true,

        speed: 1200,

        slidesPerView: 2,

        spaceBetween: 20,

        pagination: {

            el: '.wap-partner .swiper-pagination',

            clickable: true,

        },

    })



    // wap右上导航

    $(".nav li").click(function () {

        $(this).parent().parent().removeClass("in");

    })





    // 滚动监听

    $('body').scrollspy({

        target: '#navbar-example'

    })

    // top

    $(window).scroll(function () {

        if ($(window).scrollTop() > 10) {

            $(".goTop").fadeIn(1000);

            $(".navbar").addClass("navbar-fixed-top");

        } else {

            $(".goTop").fadeOut(1000);

            $(".navbar").removeClass("navbar-fixed-top");

        }

    });

    $(window).scroll(function () {

        if ($(window).scrollTop() > 100) {

            $("#circle1").circleChart({

                speed: 2000,

                widthRatio: 0.05,

                size: 170,

                value: 100,

                color: "#29366b",

                backgroundColor: "#ccc",

                text: true,

                onDraw: function (el, circle) {

                    circle.text(Math.round(circle.value) * 81 / 100 + '<div>Injection machines</div>'



                    );

                }

            });

            $("#circle2").circleChart({

                speed: 2000,

                widthRatio: 0.05,

                size: 170,

                value: 100,

                color: "#29366b",

                backgroundColor: "#ccc",

                text: true,

                onDraw: function (el, circle) {

                    circle.text(Math.round(circle.value) * 124 / 100 + '<div>Punching machines</div>'

                    );

                }

            });



            $("#circle3").circleChart({

                speed: 2000,

                widthRatio: 0.05,

                size: 170,

                value: 100,

                color: "#29366b",

                backgroundColor: "#ccc",

                text: true,

                onDraw: function (el, circle) {

                    circle.text(Math.round(circle.value) * 130 / 100 + '<div>Automatic machines</div>'

                    );

                }

            });



            $("#circle4").circleChart({

                speed: 2000,

                widthRatio: 0.05,

                size: 170,

                value: 100,

                color: "#29366b",

                backgroundColor: "#ccc",

                text: true,

                onDraw: function (el, circle) {

                    circle.text(Math.round(circle.value) * 30 / 100 + '<div>Testing machines</div>'



                    );

                }

            });

            $("#circle5").circleChart({

                speed: 2000,

                widthRatio: 0.05,

                size: 170,

                value: 100,

                color: "#29366b",

                backgroundColor: "#ccc",

                text: true,

                onDraw: function (el, circle) {

                    circle.text(Math.round(circle.value) * 86 / 100 + '<div>Dustless workshop equipments</div>'

                    );

                }

            });

        }

    });

    $(".goTop").click(function () {

        $("html,body").animate({

            scrollTop: 0

        }, 1000);

    });

    if ($(window).width() <= 768) {

    }



})



var submitcount2 = 0;



function beforeSubmit2(form) {



    if (form.name.value == '') {

        alert('Name can not be empty');

        form.name.focus();

        return false;

    } else if (form.email.value == '') {

        alert('Please enter the correct email format');

        form.email.focus();

        return false;

    } else if (form.email.value.indexOf('@') < 0) {

        alert('The email is wrong');

        form.email.focus();

        return false;

    } else if (form.message.value == '') {

        alert('The message can not be empty');

        form.message.focus();

        return false;

    } else {



        if (submitcount2 == 0) {

            submitcount2++;

            return true;

        } else {

            alert("Message is being sent, please wait!");

            return false;



        }

    }



}



