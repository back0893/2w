/*首页顶部*/
var indexSwiper = new Swiper('.swiper-index', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: 1500,
    // 是否显示圆点
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
/*企业*/
var swiper_imgtxt = new Swiper('.swiper-imgtxt', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: 1500,
    // 是否显示圆点
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
/*新闻*/
var swiper_news = new Swiper('.swiper-news', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: 1500,
    // 是否显示圆点
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});


$('.search i.iconfont').click(function(event) {
    $('.search').find('.search-hide').toggleClass('search-show');
});