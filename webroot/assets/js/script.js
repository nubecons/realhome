/*	Table OF Contents
 ==========================
 Carousel
 Ajax Tab
 List view , Grid view  and compact view
 Global Plugins
 Customs Script
 Responsive cat-collapse for homepage
 */


$(document).ready(function () {
    var isMobile = function () {
        return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
    };

    var navbarSite = $('.navbar-site');

    // check if RTL or LTR
    var ifrtl = false;
    var dir = $("html").attr("dir");
    var direction = "left";

    if(dir == "rtl")  {
         ifrtl = true;
        console.log(ifrtl);
         direction = "right";
        console.log(direction)
    }else {
        console.log(ifrtl);
        console.log(direction)
    }

    /*==================================
     Carousel
     ====================================*/

    // Featured Listings  carousel || HOME PAGE
    var owlitem = $(".item-news");

    owlitem.owlCarousel({
        //navigation : true, // Show next and prev buttons
        navigation: false,
        pagination: true,
        items: 1,
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: [660, 2],
        itemsMobile: [400, 1]

    });

    // Custom Navigation Events
    $(".slider-nav").click(function () {
        owlitem.trigger('owl.next');
    });
    $("#prevItem").click(function () {
        owlitem.trigger('owl.prev');
    });


    // Featured Listings  carousel || HOME PAGE
    var featuredListSlider = $(".featured-list-slider");

    featuredListSlider.owlCarousel({
        //navigation : true, // Show next and prev buttons
		
		loop:true,
		margin:10,
		autoPlay:true,
		autoplayTimeout:10,
		autoplayHoverPause:true,
        
		navigation: false,
        pagination: false,
        items: 6,
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: [660, 2],
        itemsMobile: [400, 1]


    });

    // Custom Navigation Events
    $(".featured-list-row .next").click(function () {
        featuredListSlider.trigger('owl.next');
    });

    $(".featured-list-row .prev").click(function () {
        featuredListSlider.trigger('owl.prev');
    });



// News Listings  carousel || HOME PAGE
    var featuredNewsListSlider = $("#new-slider");

    featuredNewsListSlider.owlCarousel({
        //navigation : true, // Show next and prev buttons
		
		loop:true,
		margin:10,
		autoPlay:true,
		autoplayTimeout:10,
		autoplayHoverPause:true,
        
		navigation: false,
        pagination: false,
        items: 1,
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
        itemsTabletSmall: [660, 2],
        itemsMobile: [400, 1]


    });

    // Custom Navigation Events
    $(".featured-news-list-row .next").click(function () {
        featuredNewsListSlider.trigger('owl.next');
    });

    $(".featured-news-list-row .prev").click(function () {
        featuredNewsListSlider.trigger('owl.prev');
    });

    /*==================================
     Ajax Tab || CATEGORY PAGE
     ====================================*/


    $("#ajaxTabs li > a").click(function () {

        $("#allAds").empty().append("<div id='loading text-center'> <br> <img class='center-block' src='images/loading.gif' alt='Loading' /> <br> </div>");
        $("#ajaxTabs li").removeClass('active');
        $(this).parent('li').addClass('active');
        $.ajax({
            url: this.href, success: function (html) {
                $("#allAds").empty().append(html);
                $('.tooltipHere').tooltip('hide');
            }
        });
        return false;
    });

    urls = $('#ajaxTabs li:first-child a').attr("href");
    //alert(urls);
    $("#allAds").empty().append("<div id='loading text-center'> <br> <img class='center-block' src='images/loading.gif' alt='Loading' /> <br>  </div>");
    $.ajax({
        url: urls, success: function (html) {
            $("#allAds").empty().append(html);
            $('.tooltipHere').tooltip('hide');

            // default grid view class invoke into ajax content (product item)
            $(function () {
                $('.hasGridView .item-list').addClass('make-grid');
                $('.hasGridView .item-list').matchHeight();
                $.fn.matchHeight._apply('.hasGridView .item-list');
            });
        }
    });


    /*==================================
     List view clickable || CATEGORY
     ====================================*/

    // List view , Grid view  and compact view

    //  var selector doesn't work on ajax tab category.hhml. This variables elements disable for V1.6
    // var listItem = $('.item-list');
    // var addDescBox = $('.item-list .add-desc-box');
    //  var addsWrapper = $('.adds-wrapper');

    $('.list-view,#ajaxTabs li a').click(function (e) { //use a class, since your ID gets mangled
        e.preventDefault();
        $('.grid-view,.compact-view').removeClass("active");
        $('.list-view').addClass("active");
        $('.item-list').addClass("make-list").removeClass("make-grid make-compact");


        if ($('.adds-wrapper').hasClass('property-list')) {
            $('.item-list .add-desc-box').removeClass("col-md-9").addClass("col-md-6");
        } else {
            $('.item-list .add-desc-box').removeClass("col-md-9").addClass("col-md-7");
        }

        $(function () {
            $('.item-list').matchHeight('remove');
        });
    });

    $('.grid-view').click(function (e) { //use a class, since your ID gets mangled
        e.preventDefault();
        $('.list-view,.compact-view').removeClass("active");
        $(this).addClass("active");
        $('.item-list').addClass("make-grid").removeClass("make-list make-compact");


        if ($('.adds-wrapper').hasClass('property-list')) {
            // keep it for future
        } else {
            //
        }

        $(function () {
            $('.item-list').matchHeight();
            $.fn.matchHeight._apply('.item-list');
        });

    });

    $(function () {
        $('.hasGridView .item-list').matchHeight();
        $.fn.matchHeight._apply('.hasGridView .item-list');
    });

    $(function () {
        $('.row-featured .f-category').matchHeight();
        $.fn.matchHeight._apply('.row-featured .f-category');
    });

    $(function () {
        $('.has-equal-div > div').matchHeight();
        $.fn.matchHeight._apply('.row-featured .f-category');
    });


    $('.compact-view').click(function (e) { //use a class, since your ID gets mangled
        e.preventDefault();
        $('.list-view,.grid-view').removeClass("active");
        $(this).addClass("active");
        $('.item-list').addClass("make-compact").removeClass("make-list make-grid");


        if ($('.adds-wrapper').hasClass('property-list')) {
            $('.item-list .add-desc-box').addClass("col-md-9").removeClass('col-md-6');
        } else {
            $('.item-list .add-desc-box').toggleClass("col-md-9 col-md-7");
        }

        $(function () {
            $('.adds-wrapper .item-list').matchHeight('remove');
        });
    });


    /*==================================
     Global Plugins ||
     ====================================*/

    $('.long-list').hideMaxListItems({
        'max': 8,
        'speed': 500,
        'moreText': 'View More ([COUNT])'
    });


    $('.long-list-user').hideMaxListItems({
        'max': 12,
        'speed': 500,
        'moreText': 'View More ([COUNT])'
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $("select.selecter").niceSelect({ // custom scroll select plugin
    });

    $(".selectpicker").niceSelect({ // category list Short by
        // customClass: "select-sort-by"
    });

    $(".scrollbar").niceScroll();  //  customs scroll plugin

    $(".loginForm").validate(); //  form validation


    // smooth scroll to the ID
    $(document).on('click', 'a.scrollto', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });


    /*=======================================================================================
     cat-collapse Homepage Category Responsive view
     ========================================================================================*/
   // $('.collapse-box .collapse').collapse();

    var catCollapse = $('.cat-collapse');

    $(window).bind('resize load', function () {

        if ($(this).width() < 767) {
           catCollapse.collapse('hide');
           catCollapse.on('show.bs.collapse', function () {
                $(this).prev('.cat-title').find('.icon-down-open-big').addClass("active-panel");
                //$(this).prev('.cat-title').find('.icon-down-open-big').toggleClass('icon-down-open-big icon-up-open-big');
            });

            catCollapse.on('hide.bs.collapse', function () {
                $(this).prev('.cat-title').find('.icon-down-open-big').removeClass("active-panel");
            })

        } else {
            $('#bd-docs-nav').collapse('show');
            catCollapse.collapse('show');
        }

    });

    // DEMO PREVIEW

    $(".tbtn").click(function () {
        $('.themeControll').toggleClass('active')
    });

    // jobs

    $("input:radio").click(function () {
        if ($('input:radio#job-seeker:checked').length > 0) {
            $('.forJobSeeker').removeClass('hide');
            $('.forJobFinder').addClass('hide');
        } else {
            $('.forJobFinder').removeClass('hide');
            $('.forJobSeeker').addClass('hide')
        }
    });


    // Change Direction based on template dir="RTL"  or dir="LTR"

    var sidebarDirection = {};
    var sidebarDirectionClose = {};

    if(ifrtl) {
        sidebarDirection = { right: '-251px' };
        sidebarDirectionClose = { right: '0' };
    }
    else {
        sidebarDirection = { left: '-251px' };
        sidebarDirectionClose = { left: '0' };
     }

    $(".filter-toggle").click(function () {
        $('.mobile-filter-sidebar')
            .prepend("<div class='closeFilter'>X</div>")
            .animate(sidebarDirectionClose, 250, "linear", function () {
            });
        $('.menu-overly-mask').addClass('is-visible');
    });

    $(".menu-overly-mask").click(function () {
        $(".mobile-filter-sidebar").animate(sidebarDirection, 250, "linear", function () {
        });
        $('.menu-overly-mask').removeClass('is-visible');
    });


    $(document).on('click', '.closeFilter', function () {
        $(".mobile-filter-sidebar").animate(sidebarDirection, 250, "linear", function () {
        });
        $('.menu-overly-mask').removeClass('is-visible');
    });


    // cityName will replace with selected location/area from location modal

    $('#selectRegion').on('shown.bs.modal', function (e) {
        // alert('Modal is successfully shown!');
        $("ul.list-link li a").click(function () {
            $('ul.list-link li a').removeClass('active');
            $(this).addClass('active');
            $(".cityName").text($(this).text());
            $('#selectRegion').modal('hide');
        });
    });

    $("#checkAll").click(function () {
        $('.add-img-selector input:checkbox').not(this).prop('checked', this.checked);
    });


    var stickyScroller = function () {
        var intialscroll = 0;
        $(window).scroll(function (event) {
            var windowScroll = $(this).scrollTop();
            if (windowScroll > intialscroll) {
                // downward-scrolling
                navbarSite.addClass('stuck');
            } else {
                // upward-scrolling
                navbarSite.removeClass('stuck');
            }
            if (windowScroll < 450) {
                // downward-scrolling
                navbarSite.removeClass('stuck');
            }
            intialscroll = windowScroll;
        });
    };

    if (isMobile()) {
        // For  mobile , ipad, tab
    } else {
        stickyScroller();
    } // end Desktop else

    // custom
   /* function loadCiies(filter){
        var country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas"
            ,"Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands"
            ,"Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica"
            ,"Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea"
            ,"Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana"
            ,"Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India"
            ,"Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia"
            ,"Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania"
            ,"Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia"
            ,"New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal"
            ,"Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles"
            ,"Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan"
            ,"Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia"
            ,"Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","United States Minor Outlying Islands","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)"
            ,"Yemen","Zambia","Zimbabwe"];
        var city_list_html = '';
        if (filter){
           var filteredCiteis =  country_list.filter(function (value) {
                return value.toLocaleLowerCase().startsWith(filter.toLowerCase());
            });
            filteredCiteis.forEach(function (value) {
                city_list_html += "<li class=\"list-group-item city_select \">"+value+"</li>"
            });
            $("#city_list").empty().append(city_list_html);
        }
        else  {
            country_list.forEach(function (value) {
                city_list_html += "<li class=\"list-group-item city_select \">"+value+"</li>"
            });
            $("#city_list").empty().append(city_list_html);
        }

    }
    loadCiies();*/
    // filter cities
   /* $(".city_filter").keyup(function(){
        var val = $(this).val();
        loadCiies(val);
    });*/
    // select city
  /*  $( "#main_search_form" ).on("click", ".city_select", function( event ) {
        var text = $(this).html();
        $('#City_selectbox').hide();
        $('#city_value').empty().html(text);
        $(".city_select").removeClass("selected");
        $(this).addClass("selected");
    });
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("show");
        if (_opened === true && !clickover.hasClass("navbar-toggler")) {
            $(".navbar-toggler").click();
        }
    });
    $('[data-toggle]').click(function (e) {
        var element = $(this).attr('data-target');
        var ishidden = $(element).is(":visible");
        $(".collapse").hide();
        if(ishidden) {
            $(element).hide();
        }
        else {
            $(element).show();
        }

    });*/
    $('.toggle_menu').click(function () {
        $('.collapsable_menu').animate({width: 'toggle'});
    });
    $(' #header .fa-bars').click(function () {
        $(' #header').toggleClass('active');
        $(' #secondary_header').toggle();
    });

}); // end Ready


	
