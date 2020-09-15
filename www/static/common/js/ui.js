(function($){
	'use strict';
	if(typeof window.ui === 'undefined'){
		var ui = window.ui = {}
	}

	$.fn.imagesLoaded = function(){
		var $imgs = this.find('img[src!=""]'), dfds = [];

		if (!$imgs.length){
			return $.Deferred().resolve().promise();
		}

		$imgs.each(function(){
			var dfd = $.Deferred(), img = new Image();
			dfds.push(dfd);
			img.onload = function(){dfd.resolve();}
			img.onerror = function(){dfd.resolve();}
			img.src = this.src;
		});

		return $.when.apply($, dfds);
	}

	ui.init = (function(_){
		(function deviceCheck(md){
			/* check device */
			_.isDevice   = md.mobile();		/* smart device	: ui.isDevice */
			_.isMobile   = md.phone();		/* mobile		: ui.isMobile */
			_.isTablet   = md.tablet();		/* tablet		: ui.isTablet */
			_.isDesktop  = !md.mobile();	/* desktop		: ui.isDesktop */
		})(new MobileDetect(window.navigator.userAgent));

		(function setViewport(viewport){
			if(_.isDesktop){
				/* set desktop viewport */
				viewport.attr({'content':'width=1440, user-scalable=yes'});
			}
			if(_.isTablet){
				/* set tablet viewport */
				viewport.attr({'content':'width=1280, user-scalable=yes'});
			}
			if(_.isMobile){
				/* set mobile viewport */
				viewport.attr({'content':'width=750, user-scalable=yes'});
			}
		})($('meta[name=viewport]'));

		var getElements = function(){
			_.$html			=	$('html');
			_.$body			=	$('body');
			_.$wrap			=	$('#wrap');
			_.$header		=	$('#header');
			_.$gnb			=	$('#gnb');
			_.$container	=	$('#container');
			_.$main			=	$('.main');
			_.$contents		=	$('#contents');
			_.$footer		=	$('#footer');
			_.$motion		=	$('.n-motion');
		}

		var getWindowSize = function(){
			_.winsizeW = $(window).outerWidth();
			_.winsizeH = $(window).outerHeight();	

			if( _.winsizeW >= 768){
				_.$html.removeClass('mobile').addClass('pc');
			} else {
				_.$html.removeClass('pc').addClass('mobile')
			}
		}

		var getWindowScrl = function(){
			_.winscrlT = $(window).scrollTop();
			_.winscrlL = $(window).scrollLeft();
		}


		return {
			onLoad : function(){
				getElements();
				getWindowSize();
				getWindowScrl();
				_.loadmotion.init();
				_.headerAction();
				_.gnbOpacity();
			},
			onResize : function(){
				getWindowSize();
				
			},
			onScroll : function(){
				getWindowScrl();
				_.gnbOpacity();				
			}
		}
	})(ui);

	ui.hasOwnProperty = function(org, src){
		for(var prop in src){
			if(!hasOwnProperty.call(src, prop)){
				continue;
			}
			if('object' === $.type(org[prop])){
				org[prop] = ($.isArray(org[prop]) ? src[prop].slice(0) : ui.hasOwnProperty(org[prop], src[prop]));
			}else{
				org[prop] = src[prop];
			}
		}

		return org;
	}

	ui.inputfile = function(target){
		var $target = $(target), value = $target.val();
		$target.next().val(value);
	}

	ui.loadmotion = (function(_){
		return {
			init : function(){
				var f = this;
				_.$motion.each(function(idx, obj){
					obj.t = $(obj).offset().top;
					obj.h = $(obj).outerHeight() / 2;
					obj.p = obj.t + obj.h;
					obj.e = 'load.lmotion'+idx+' scroll.lmotion'+idx;
					f.scroll(obj);
					$(window).on(obj.e, function(){
						f.scroll(obj);
					});
				});
			},
			scroll : function(obj){
				if(_.winscrlT + _.winsizeH > obj.p){
					$(obj).addClass('n-active');
					$(window).off(obj.e);
				} 
			}
		}
		
	})(ui);

	ui.tabAction = function(navi, cont){
		var _ = ui;

		function action(tab, idx){
			tab.def.$navi.eq(idx).addClass('on').siblings().removeClass('on');
			tab.def.$cont.eq(idx).addClass('on').siblings().removeClass('on');
			tab.def.offsetTop = tab.def.$navi.offset().top;

			tab.def.idx = idx;
		}

		var tabAction = (function(){
			return {
				def : {
					idx : 0,
					$navi : $(navi).children(),
					$cont : $(cont).children()
				},
				init : function(){
					var _this = this;

					_this.def.$navi.on('click', function(){
						action(_this, $(this).index());
					});

					return _this;
				},
				setIndex : function(idx){
					action(this, idx);
					$('html, body').animate({scrollTop : this.def.offsetTop-_.$header.outerHeight()}, 300);
				}
			};
		})();

		return tabAction.init();
	}

	ui.headerAction =function(_){
		var _=this;
		_.$header.find('.hamburger-box').on({
			'click' : function(){	
				_.$html.toggleClass('aside-open');
			}
		 })

		_.$gnb.find('ul > li').on({
			'click': function(){
				$(this).toggleClass('on').siblings().removeClass('on');
			}
		});
	}

	ui.gnbOpacity = function () {
		if ($('.main').length) {
			$(window).scrollTop() > 80 ? $('#header').addClass('on') : $('#header').removeClass('on');
		} else {
			$(window).scrollTop() > 80 ? $('#header').addClass('sticky') : $('#header').removeClass('sticky');
		}
	};

	ui.slider = (function(_){
		return {
			themeSd : function(){			
				
				this.$themeSd = $('.theme-sd-slider')							
				.slick({	
					adaptiveHeight: true,
					arrows : false,
					dots : false,
					infinite : false,
					slidesToShow : 1,
					slidesToScroll : 1,
					centerMode: true,
					variableWidth: true,
					centerPadding: '24px',
					asNavFor:'.theme-sd-nav',
					initialSlide: 1,
				})		
				
				.on('beforeChange',function(event, slick, currentSlide){		
					
				})
				.on('afterChange',function(event, slick, currentSlide){
					
				})
							
				this.$themeNai = $('.theme-sd-nav').slick({
					slidesToShow:3,
					slidesToscroll:1,
					asNavFor:'.theme-sd-slider',
					dot:true,
					focusOnSelect:true,	
					variableWidth: true,
					centerMode: true,
					initialSlide: 1,	

				});
			},	
		
		}
	})(ui);


	ui.addOnAction = function(elm, getSib){
		// getSib이 true면 형제들 removeClass on
		if (getSib == false) {
			$(elm).on('click', function(){
				$(this).toggleClass('on');
			});
		} else {
			$(elm).on('click', function(){
				$(this).toggleClass('on').siblings().removeClass('on');
			});
		}
	}


	$(window).on({
		'load' : function(){
			ui.init.onLoad();
		},
		'resize' : function(){
			ui.init.onResize();
		},
		'scroll' : function(){
			ui.init.onScroll();
		}
	});
	
})(jQuery);