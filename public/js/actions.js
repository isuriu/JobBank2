$(function() {

    var a11 = 0;

    $(document).scroll(function() {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

        /*var oTop = $('#counter').offset().top - window.innerHeight;
        if (a11 == 0 && $(window).scrollTop() > oTop) {

            $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            a11 = 1;
        }*/


    });

    $('#select-category').select2({
        placeholder: '<i class="fa fa-list-alt"></i>&nbsp;Select an option',
        escapeMarkup: function(markup) {
            return markup;
        }
    });

    $('#google_translate_element').on("click", function() {

        // Change font family and color
        $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div") //, .goog-te-menu2 *
            .css({
                'color': '#544F4B',
                'background-color': '#e3e3ff',
                'font-family': '"Open Sans",Helvetica,Arial,sans-serif'
            });

        // Change hover effects  #e3e3ff = white
        $("iframe").contents().find(".goog-te-menu2-item div").hover(function() {
            $(this).css('background-color', '#17548d').find('span.text').css('color', '#e3e3ff');
        }, function() {
            $(this).css('background-color', '#e3e3ff').find('span.text').css('color', '#544F4B');
        });

        // Change Google's default blue border
        $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #17548d');

        $("iframe").contents().find('.goog-te-menu2').css('background-color', '#e3e3ff');

        // Change the iframe's box shadow
        $(".goog-te-menu-frame").css({
            '-moz-box-shadow': '0 3px 8px 2px #666666',
            '-webkit-box-shadow': '0 3px 8px 2px #666',
            'box-shadow': '0 3px 8px 2px #666'
        });
    });

});

function openJobsTab(evt, jobName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(jobName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openRegTypeTab(evt, typeName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(typeName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openRegTypeTab1(evt, typeName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tab-pane");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove("active");
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("nav-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(typeName).classList.remove("fade");
    document.getElementById(typeName).classList.add("active");
    evt.currentTarget.className += " active";
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        includedLanguages: 'en,ja'
    }, 'google_translate_element');
}