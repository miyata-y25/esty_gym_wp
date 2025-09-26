</div><!-- /.wrap -->

<ul class="fixed-btn">
    <li><a href="https://lin.ee/6SXgP7V" target="_blank" class="mypage"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fixed_txt02.svg" alt="LINE公式アカウント"></a></li>
</ul>

<footer class="site-footer">
    <h3 class="site-footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header_logo.svg" alt="GAFIT"></h3>
    <ul class="site-footer__nav">
        <li><a href="<?php echo home_url('/'); ?>law/">特定商取引法に基づく表記</a></li>
    </ul>
    <p class="copyright">
        掲載されている写真はイメージです<br>
        &copy; 2025 ESTY FITNESS.
    </p>
</footer>


<!---  jQuery 読み込みコード  --->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<?php if ( is_home() || is_front_page() ) { ?>

<!-- simplebarのjs読み込み -->
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>

<!-- slickのjs読み込み -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- 重要 -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script><!-- 重要 -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/swiper/swiper.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/swiper/swiper.min.js"></script>
<script>
var mySwiperMain1 = new Swiper ('.lineup-slider.--01 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--01 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--01 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
var mySwiperMain2 = new Swiper ('.lineup-slider.--02 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--02 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--02 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
var mySwiperMain3 = new Swiper ('.lineup-slider.--03 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--03 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--03 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
var mySwiperMain4 = new Swiper ('.lineup-slider.--04 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--04 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--04 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
</script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(".instructor-list").not('.slick-initialized').slick({
    infinite: true,
    // centerMode: true,
    // centerPadding: 0,
    slidesToShow: 3,
    slidesToScroll: 1,
    swipeToSlide: true,
    dots: true,
    responsive: [
    {
        breakpoint: 640,
        settings: {
            slidesToShow: 1,
        },
    },
    ],
});
</script>

<script>
$(".yourself-sec__slide").not('.slick-initialized').slick({
    infinite: true,
    autoplay: true,
    // centerMode: true,
    // centerPadding: 0,
    slidesToShow: 1,
    slidesToScroll: 1,
    swipeToSlide: true,
    dots: true,
    arrows: false,
    responsive: [
    {
        breakpoint: 640,
        settings: {
            slidesToShow: 1,
        },
    },
    ],
});
</script>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/modaal.min.js"></script>
<script>
$(".studio-thum a").modaal({
    type: 'video',
    hide_close: 'true'
});
$(".studio-mv a").modaal({
    type: 'video',
    hide_close: 'true'
});
</script>

<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
<script>
$(function(){
	var setElm = $('.viewer360'),
	imgType = ".png";

	setElm.each(function(){
		var self = $(this),
		setScreen = self.children('div').attr('id'),
		setNum = self.attr('data-num'),
		setImgPass = self.attr('data-pass');

		self.children('div').wrapAll('<div class="screenWrap"></div>').end().append('<nav></nav>');

		var thisNav = self.find('nav');

		if(setNum > 0){
			for (var i=0; i<setNum; i++) {
				thisNav.append('<a href="javascript:void(0);" class="view' + (i+1) + '"></a>');
			}
		}

        var setWith = 120;
        
        if ($(window).width() <= 768) {
            setWith = 80;
        }

		thisNav.find('a').click(function(){
			self.find('.pnlm-ui.pnlm-grab, .pnlm-render-container').addClass('targetHide');
			setTimeout(function(){self.find('.targetHide').remove();},600);

			var acvPos = $(this).index()+1;
			pannellum.viewer(setScreen, {
				"panorama": setImgPass + acvPos + imgType,
				"autoLoad": true,
				"autoRotate": -3,
				"hfov": setWith
			});
			thisNav.find('a').removeClass('active');
			$(this).addClass('active');
		});

		thisNav.find('a:first').click()

		self.find('.screenWrap').append('<a href="javascript:void(0);" class="prev"></a><a href="javascript:void(0);" class="next"></a>');

		self.find('.prev').click(function(){
			var acvPos = thisNav.find('a.active').index()+1,
			navLength = thisNav.find('a').length;
			if(acvPos == 1){
				thisNav.find('a').eq(navLength-1).click();
			} else {
				thisNav.find('a.active').prev().click();
			}
		});

		self.find('.next').click(function(){
			var acvPos = thisNav.find('a.active').index()+1,
			navLength = thisNav.find('a').length;
			if(acvPos == navLength){
				thisNav.find('a').eq(0).click();
			} else {
				thisNav.find('a.active').next().click();
			}
		});

	});
});
</script>

<?php } ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>