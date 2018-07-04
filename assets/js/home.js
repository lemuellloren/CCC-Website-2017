// BASE FILE IMPORT
// @codekit-prepend '_base.js'

// PAGE FRAMEWORK COMPONENT IMPORT
// import any framework components that are used in this page only:
// @codekit-prepend '../bower_components/uikit/js/components/accordion.js'
// @codekit-prepend '../bower_components/uikit/js/components/slider.js'
// @codekit-prepend '../bower_components/uikit/js/components/dotnav.js'
// @codekit-prepend '../bower_components/uikit/js/components/slideshow.js'


// PAGE FUNCTIONS
// define needed page functions here, when document.readyState === "complete":


(function($) {
    
    /* page functions go here */

    // alert($(window).width() + ' ' + $(window).width());

    //SERVICES ACCORDION ADDITIONAL FUNCTIONS

    var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);

    if(isSafari){
        if($(window).width() <= 480){
            $('.promo-container').css('padding-top','20px');
        }
        $('.search-form input').css('max-height','auto');
    }

    function spanArrowsActive(element){
        element.children('span').removeClass('uk-icon-angle-left').addClass('uk-icon-angle-down');
    }

    function spanArrowsNotActive(element){
        element.children('span').removeClass('uk-icon-angle-down').addClass('uk-icon-angle-left');
    }

    function rightAcc(element){
        element.animate({borderBottomLeftRadius: 25}, 500);
        spanArrowsNotActive(element);
    }

    function leftAcc(element){
        element.animate({borderBottomRightRadius: 25}, 500);
        spanArrowsNotActive(element);
    }

    function siblingDeactive(element){
        var sibling = element.parent().siblings().find('h2.uk-active');
        if(sibling.parent().hasClass('right-acc')){
            rightAcc(sibling);
        }else{
            leftAcc(sibling);
        }
    }
        
        var leftClick = 1;
        
        var udpatedWidth = '';
        
        udpatedWidth = $(window).width();
        
        $(window).resize(function(){
            udpatedWidth = $(window).width();
            if(udpatedWidth>1024){
                $('.right-acc').each(function(){
                    if($(this).find('h2').hasClass('uk-active')){
                        $(this).find('h2').css('padding', '78px 25px 30px 94px');
                    }else{
                        $(this).find('h2').css('padding', '30px 26px 30px 50px');
                    }
                });
                $('.left-acc h2').each(function(){
                    if($(this).hasClass('uk-active')){
                      $(this).css('padding', '78px 49px 30px 26px');
                  }else{
                    $(this).css('padding', '30px 26px 30px 50px');
                }
            });
    
            }else{
               $('.right-acc').each(function(){
                 if($(this).find('h2').hasClass('uk-active')){
                    $(this).find('h2').css('padding', '50px 26px 60px 61px');
                }else{
                    $(this).find('h2').css('padding', '17px 25px 17px 17px');
                }
            });
               $('.left-acc h2').each(function(){
                 if($(this).hasClass('uk-active')){
                    $(this).css('padding', '50px 26px 60px 16px');
                }else{
                   $(this).css('padding', '17px 25px 17px 17px');
               }
           });
           }    
    
       });
    
                // accordion custom functions
    
                $('.uk-accordion-title').click(function(e){
                    // var firstClick = 1;
                    e.preventDefault();
                    var element = $(this);
                    if($(this).data('click') == undefined){
                        $(this).data('click', 0);
                    }
                    // check if accordion is right or left
                    if(element.parent().hasClass('right-acc')){
                        if(element.hasClass('uk-active')){
                            rightAcc(element);
                            if(udpatedWidth>1024){
                                element.css('padding', '30px 26px 30px 50px');
                            }else{
                                element.css('padding', '17px 25px 17px 17px');
                            }
                            element.css({
                                'position' : 'relative',
                                'left' : '0',
                                'top' : '0'
                            });
                            element.find('span').css({
                                'float': 'left',
                                'position': 'relative',
                                'right': '0',
                                'top': '0',
                                'visibility': 'visible'
                            });
                        }else{
                            // siblingDeactive(element);
                            element.css('border-bottom-left-radius','0px');
                            spanArrowsActive(element);
                            setTimeout(function(){
                            }, 500);
                            if(udpatedWidth>1024){
                                element.css('padding', '78px 25px 30px 94px');
                            }else{
                                element.css('padding', '50px 26px 60px 61px');
                            }
                            element.css({
                                'position' : 'relative',
                                'left' : '45px',
                                'top' : '20px'
                            });
                            element.find('span').css({
                                'float': 'none',
                                'position': 'absolute',
                                'right': '15%',
                                'top': '35%',
                                'visibility': 'hidden'
                            });
                        }
                    }else{
                        if(element.hasClass('uk-active')){
                            leftAcc(element);
                            if(udpatedWidth>1024){
                                element.css('padding', '30px 50px 30px 26px');
                            }else{
                                element.css('padding', '17px 25px 17px 17px');
                            }
                            element.find('span').css('visibility','visible');
                            // element.css({
                            //     'position' : 'relative',
                            //     'left' : '0',
                            //     'top' : '0'
                            // });
                            
                        }else{
                        // siblingDeactive(element);
                        element.css('border-bottom-right-radius','0px');
                        spanArrowsActive(element);
                        setTimeout(function(){
                       }, 500);
                        if(udpatedWidth>1024){
                            $(this).css('padding', '78px 49px 30px 26px');
                        }else{
                            element.css('padding', '50px 26px 60px 16px');
                        }
                        element.find('span').css('visibility','hidden');
                    // element.css({
                    //     'position' : 'relative',
                    //     'right' : '45px',
                    //     'top' : '20px'
                    // });
                }
            }
        });
            //END OF SERVICES ACCORDION ADDITIONAL FUNCTIONS
    


    //enables the map overlay when click to body
    $(document).click(function (evt) {

        if (!$(evt.target).is('#toggle-cover2')) {
            $('#toggle-cover2').removeClass('uk-hidden');
        }  

        if (!$(evt.target).is('#toggle-cover-modal')) {
            $('#toggle-cover-modal').removeClass('uk-hidden');
        }   
    
    });

    // $('.uk-modal').on({
    //     'show.uk.modal': function(){
    //        setTimeout(function() {
    //             $(document).trigger('click');
    //         },1000);
    //     }
    // }) ;

    // $('.search-form .uk-icon-search .articleSearch').click(function(){
    //     $("#search-formArticle").submit();
    // });

    // $('.search-form .uk-icon-search .blogSearch').click(function(){
    //     $("#search-formBlog").submit();
    // });

    // $('.search-form .uk-icon-search .blogMenu').click(function(){
    //     $("#search-formMenu").submit();
    // });

    // $('.search-form .uk-icon-search .articleMenu').click(function(){
    //     $("#search-formMenu").submit();
    // });

    // $('.search-form .uk-icon-search .formMain').click(function(){
    //     $("#search-formMain").submit();
    // });    
})(jQuery);

// MAP CONTAINER

$('.map-container')
.click(function(){
        $(this).find('iframe').addClass('clicked')})
.mouseleave(function(){
        $(this).find('iframe').removeClass('clicked')});