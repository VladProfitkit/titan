$(document).ready(function (){
	//set fixed tabs
	$('<div class="product-item-detail-tabs-container-fixed">'+
		'<div class="wrapper_inner">'+
		'<ul class="product-item-detail-tabs-list nav nav-tabs">'+
		$('ul.nav.nav-tabs').html()+
		'<li class="last"></li>'+
		'</ul>'+
		'</div>'+
		'</div>').insertAfter($('#headerfixed'));
	$('.product-item-detail-tabs-list a').addClass('dark_link');
	$('.tab_slider_wrapp .tabs > li').first().addClass('cur');
	$('.tab_slider_wrapp .slider_navigation > li').first().addClass('cur');
	$('.tab_slider_wrapp .tabs_content > li').first().addClass('cur');

	$('.tab_slider_wrapp .tabs > li').on('click', function(){
		InitFlexSlider();
		$('.tab_slider_wrapp .tabs_content').height($('.tab_slider_wrapp .tabs_content > li.cur').data('unhover'));
		$(window).resize();
	});

	$('.items-services .item').sliceHeight();


	$(".opener").click(function(){
		$(this).find(".opener_icon").toggleClass("opened");
		var showBlock = $(this).parents("tr").toggleClass("nb").next(".offer_stores").find(".stores_block_wrap");
		showBlock.slideToggle(200);
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
		var _this = $(e.target),
			parent = _this.parent();

		//top nav
		if(_this.closest('.product-item-detail-tabs-list').length)
		{
			var content_offset=$('.tabs_section').offset(),
				tab_height = $('.product-item-detail-tabs-container-fixed').actual('outerHeight'),
				hfixed_height = $('#headerfixed').actual('outerHeight');
			$('html, body').animate({scrollTop: content_offset.top-hfixed_height-tab_height}, 400);
		}

		$('.nav.nav-tabs li').each(function(){
			$(this).removeClass('active');
			if($(this).index() == parent.index())
				$(this).addClass('active');
		})

		if(parent.hasClass('product_reviews_tab')) // review
		{
			$(".shadow.common").hide();
			$("#reviews_content").show();
		}
		else
		{
			$(".shadow.common").show();
			$("#reviews_content").hide();

			if($(this).attr('href') == '#descr'){
				var $gallery = $('.galerys-block');
				if($gallery.length){
					var bTypeBig = $gallery.find('.big_slider').length;
					var $slider = bTypeBig ? $gallery.find('.big_slider') : $gallery.find('.small_slider');
					InitFlexSlider();
					var interval = setInterval(function(){
						if($slider.find('.slides .item').attr('style').indexOf('height') === -1){
							$(window).resize();
						}
						else{
							clearInterval(interval);
						}
					}, 100);
				}
			}
		}
	})

	if($('.title-tab-heading').length)
	{
		$('.title-tab-heading').on('click', function(){
			var _this = $(this),
				content_offset = _this.offset();
			$('html, body').animate({scrollTop: content_offset.top-100}, 400);
		})
	}

	$(document).on('click', ".hint .icon", function(e){
		var tooltipWrapp = $(this).parents(".hint");
		// tooltipWrapp.click(function(e){e.stopPropagation();})
		if(tooltipWrapp.is(".active")){
			tooltipWrapp.removeClass("active").find(".tooltip").slideUp(200);
		}
		else{
			tooltipWrapp.addClass("active").find(".tooltip").slideDown(200);
			tooltipWrapp.find(".tooltip_close").click(function(e){
				e.stopPropagation(); tooltipWrapp.removeClass("active").find(".tooltip").slideUp(100);
			});
			/*$(document).click(function(){
				tooltipWrapp.removeClass("active").find(".tooltip").slideUp(100);
			});*/
		}
	});

	$('html, body').on('mousedown', function(e) {
		if(typeof e.target.className == 'string' && e.target.className.indexOf('adm') < 0)
		{
			e.stopPropagation();
			var hint = $(e.target).closest('.hint');
			if(!$(e.target).closest('.hint').length)
			{
				$('.hint').removeClass("active").find(".tooltip").slideUp(100);
			}
			else
			{
				var pos_tmp = hint.offset().top+''+hint.offset().left;
				$('.hint').each(function(){
					var pos_tmp2 = $(this).offset().top+''+$(this).offset().left;
					if($(this).text()+pos_tmp2 != hint.text()+pos_tmp)
					{
						$(this).removeClass("active").find(".tooltip").slideUp(100);
					}
				})
			}
		}
	})
	$('.share_wrapp').find('*').on('mousedown', function(e) {
		e.stopPropagation();
	});

	BX.addCustomEvent('onSlideInit', function(eventdata) {
		try{
			ignoreResize.push(true);
			if(eventdata){
				var slider = eventdata.slider;
				if(slider){
					if(slider.find('.catalog_item').length){
						setHeightBlockSlider();
					}
					if(slider.hasClass('small_slider')){
						$('.detail .small-gallery-block .item').sliceHeight({lineheight: -3});
					}
					if(slider.hasClass('big_slider')){
						$('.detail .big_slider .item').sliceHeight({lineheight: -3});
					}
				}
			}
		}
		catch(e){}
		finally{
			ignoreResize.pop();
		}
	});

	BX.addCustomEvent('onWindowResize', function(eventdata){
		try{
			ignoreResize.push(true);
			InitFlexSlider();
		}
		catch(e){}
		finally{
			ignoreResize.pop();
		}
	});
})