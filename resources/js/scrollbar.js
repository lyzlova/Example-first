import $ from 'jquery';

require('malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min');

$(".weapons__content").mCustomScrollbar({
    axis:"x",
    theme:"my-theme"
});
