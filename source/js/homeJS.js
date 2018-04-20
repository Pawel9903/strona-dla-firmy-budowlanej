
$(document).ready(function () {
    showService();
    slider();
    //positionImageSlider();
    checkActiveHamburger();
    activeHamburger();
    setActivePageMenu();
    animate();

    $('#submitContact').click(function (e) {
        e.preventDefault();
        validateContactForm();
    });

    $('#submitWork').click(function (e) {
        e.preventDefault();
        validateWorkForm();
    });
});

function animate() {
    $('.animate').addClass('c-hide').each(function () {
        $(this).viewportChecker({
            classToAdd: 'show animated fadeInLeft',
            classToRemove: 'hide',
            offset: '20%'
        })
    })
}

/*function useGrowingStat() {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 400) {
            growingStat();
            return false;
        }
    });
    return false;
}*/

function showService(){
    $(".c-item-services").click(function () {
        $(".c-active-services").removeClass("c-active-services");
        $(this).addClass("c-active-services");
        $(".service").hide();
        var openService = $(this).attr("id");
        $("."+openService).addClass("c-active-services").show();
    })
}

var imageNumber = 1;

function slider() {
    imageNumber++;
    if(imageNumber === 5){
        imageNumber = 1;
    }
    var url = 'url("../../images/background/background'+imageNumber+'.jpg")';
    $(".c-hero").delay(5000).fadeOut(700,function () {
        $(".c-hero").css({'background': url,'background-position-x': '50%',
            'background-position-y': '50%' });
        $(this).fadeIn(1000);
    });
    setTimeout("slider()", 7000);
}

/*function positionImageSlider() {
    $(".c-hero").animate({
        'background-position-x': '-5%',
        'background-position-y': '-5%'
    }, 50000, 'linear', function () { $(this).removeAttr('background-position-x','background-position-y'); });
    setTimeout("positionImageSlider()", 6000);
}
*/

/*function growingStat() {
    $(".c-stat-item").each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 10000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now))
            }
        });
    });
}*/
function setActivePageMenu() {
    $(location).attr('pathname').slice(1,-4);
    $('.nav-item').removeClass('c-header-active');
    $('.nav-item').each(function () {
        if($(this).attr('id') == $(location).attr('pathname').slice(1,-4)){
            $(this).addClass('c-header-active');
        }
    })
}

function checkActiveHamburger() {
    if (window.matchMedia('(min-width: 720px)').matches) {
            $('#c-navbar-content').removeClass('collapse','navbar-collapse').addClass('container');
    } else {
        //...
    }
}

function activeHamburger() {
        $('.c-hamburger').click(function () {
        $(this).toggleClass('c-hamburger-active');
    })
}

function validateContactForm(){

        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var subject = $('#subject').val();
        var description = $('#description').val();
        var file = $('#file').val();

        $.ajax({
            type: "POST",
            url: "../../template/validateContactForm.php",
            dataType: "json",
            data: {name:name,email:email,phone:phone,subject:subject,description:description,file:file},
            success : function (data) {
                if (data.code == "200"){
                    alert("Success: "+data.msg);
                }else {
                    //$(".display-error").html("<ul>"+data.msg+"</ul>");
                    //$(".display-error").css("display","block");
                    $.each(data.msg, function (index , value) {
                        $(".display-error-"+index).html("<ul>"+value+"</ul>");
                        $(".display-error-"+index).css({"display":"block",'font-family':'Play'});
                    })
                }
            }
        });
    }

function validateWorkForm(){

    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var subject = $('#subject').val();
    var description = $('#description').val();
    var file = $('#file').val();

    $.ajax({
        type: "POST",
        url: "../../template/validateWorkForm.php",
        dataType: "json",
        data: {name:name,email:email,phone:phone,subject:subject,description:description,file:file},
        success : function (data) {
            if (data.code == "200"){
                alert("Success: "+data.msg);
            }else {
                $.each(data.msg, function (index , value) {
                    $(".display-error-"+index).html("<ul>"+value+"</ul>");
                    $(".display-error-"+index).css({"display":"block",'font-family':'Play'});
                });
            }
        }
    });
}