/* IOS Modal Form Fix */
var currentScroll = 0;

$(window).scroll(function() {
	if ( $(this).scrollTop() > 0 ) {
		currentScroll = $(this).scrollTop();
	}
});

$(document).ready(function(){
	/* IOS Modal Form Fix */
    if ( $(window).width() < 768 ) {		
		$('.modal').on('hidden.bs.modal', function (e) {
            $('html, body').animate({
                scrollTop: currentScroll
            }, 0);
        });
    }
    
    /* video background */
    if ($('.vide').length) {
        $('.vide').each(function () {
            var it = $(this),
                video = it.data('video'),
                poster = it.data('poster');

            $(this).vide({
                mp4: video,
                poster: poster,

            }, {
                position: 'center center',
                resizing: true,
                autoplay: false,
                className: 'video-bg',
            });
            $(this).data('vide').getVideoObject().play();
        });

    }
    
    // bootstrap tooltip
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

	/* Form Button Handlers */
    $('.pre-send-sms').click(function () {
        $(this).prop('disabled', true);
        $(this).addClass('disabled');

        var form = $(this).closest('form');

        if (form.valid()) {
            form.css('opacity', '.8');
            var actUrl = 'https://puzzles-school.com/sendsms/handler.php';

            $.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function (data) {
                    form.submit();
                },
                error: function () {}
            });
        } else {
            $(this).prop('disabled', false);
            $(this).removeClass('disabled');
        }
    });
	
	$('.send-ajax').click( function() {
		$(this).prop('disabled', true);
		$(this).addClass('disabled');
		
		var form = $(this).closest('form');
		var redirect = form.find('input[name="redirect"]').val();
		var thanks = form.find('input[name="thanks_modal"]').val();
		
		if ( form.valid() ) {
			form.css('opacity','.8');
			var actUrl = form.attr('action');

			$.ajax({
				url: actUrl,
				type: 'post',
				dataType: 'html',
				data: form.serialize(),
				success: function(data) {
					$(this).prop('disabled', false);
					$(this).removeClass('disabled');
					form.css('opacity','1');
                    
					if ( redirect ) {
						window.location.href = redirect;
					}
					
					if ( thanks ) {
						$('.modal').modal('hide');
						
						setTimeout(function(){
							$(thanks).modal('show');
							
							setTimeout(function(){
								$(thanks).modal('hide');
							},5000);
						},150);
					}
				},
				error: function() {
				}
			});
		} else {
			$(this).prop('disabled', false);
			$(this).removeClass('disabled');
		}
	});
	
	$('.send').click( function() {
		$(this).prop('disabled', true);
		$(this).addClass('disabled');
		
		var form = $(this).closest('form');
		
		if ( form.valid() ) {
			form.submit();
		} else {
			$(this).prop('disabled', false);
			$(this).removeClass('disabled');
		}
	});
    
    var swiper = new Swiper('.realise-slider', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        //centeredSlides: true,
        //autoHeight: true,
        navigation: {
            nextEl: '.realise-next',
            prevEl: '.realise-prev',
        },
        breakpoints: {
        // when window width is <= 575px
        575: {
          slidesPerView: 1,
          spaceBetween: 10,
            autoHeight: true,
        },
        // when window width is <= 768px
        991: {
          slidesPerView: 2,
          spaceBetween: 20
        },
      }
    });
    
    /* if policy checkbox is checked */
    
    $('input[name=policy]').each(function () {
        var it = $(this),
            form = it.closest('form'),
            button = form.find('button');

        it.on('change', function () {
            if (it.prop('checked') == false) {

                $(button).addClass('disabled');

            } else {

                $(button).removeClass('disabled');
            }
        });
    });
    
	
	/*
		Slide to block. Add class "go-to-block" to link or button and data-attribute with target class or id
		Example: <a href="#" class="go-to-block" data-target=".slide-1">Slide</a>
	*/
	
	$(".go-to-block").click(function() {
		var target = $(this).data('target');
		
	    $('html, body').animate({
	        scrollTop: $(target).offset().top - 30
	    }, 400);
	});
});

// same height for blocks 

if ( $(window).width() > 575 ) {
    $(window).on('load', function () {
        setHeight('.will-not', '.wn-row .wn-inner');
        setHeight('.realise', '.rl-block');
    });
}

function setHeight (parent, block) {

    $(parent).each(function(){
        
        var height = 0,
            blockk = $(this).find(block);
        
        blockk.each(function(){
            
            var blockHeight = $(this).outerHeight();
            
           if(height < blockHeight) {
                height = blockHeight;
            } 
            
        });
        
        blockk.css({height: height});
        
    });
}

var out = 0;
var showModal = '';

$(document).ready(function(){
	
	var windowWidth = $(window).width();
	
	if ( windowWidth > 767 ) {
		// Модалка для камбекера
		$(document).mouseleave(function(e) {
			if ( !out && (e.pageY - $(window).scrollTop()) <= 1 ) {
				showModal = setTimeout(function(){
					$('#modal_comeback').modal('show');
					out = 1;
				},500);
			}
		});
		
		$(document).mouseenter(function() {
			if ( !out ) {
				clearTimeout(showModal);
			}
		});
	} else {
		/*setTimeout(function(){
			if ( !out ) {
				$('#modal_comeback').modal('show');
				out = 1;
			}
		},30000);*/
	}
});