
   <?php include"connection.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">

<!-- Mirrored from www.ziglar.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2015 06:00:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head profile="http://www.w3.org/1999/xhtml/vocab">
<title>Spreadwings</title>
<meta charset="utf-8"/><script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1426520997,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"53038599004ebdfa49cf7cd1d9716e66",petok:"36b9b10f9a7a1098cf0174495fb57ef96d5dfc98-1427522443-1800",zone:"ziglar.com",rocket:"0",apps:{"ga_key":{"ua":"UA-55110185-1","ga_bs":"2"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d919620257c/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(n,e,t){function r(t){if(!e[t]){var o=e[t]={exports:{}};n[t][0].call(o.exports,function(e){var o=n[t][1][e];return r(o?o:e)},o,o.exports)}return e[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(n,e){function t(n){function e(e,t,a){n&&n(e,t,a),a||(a={});for(var u=c(e),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(n,e){f[n]=c(n).concat(e)}function c(n){return f[n]||[]}function u(){return t(e)}var f={};return{on:a,emit:e,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=n("gos");e.exports=t()},{gos:"7eSDFh"}],ee:[function(n,e){e.exports=n("QJf3ax")},{}],3:[function(n,e){function t(n){return function(){r(n,[(new Date).getTime()].concat(i(arguments)))}}var r=n("handle"),o=n(1),i=n(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(n,e){window.NREUM[e]=t("api-"+e)}),e.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],"7eSDFh":[function(n,e){function t(n,e,t){if(r.call(n,e))return n[e];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return n[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=t},{}],gos:[function(n,e){e.exports=n("7eSDFh")},{}],handle:[function(n,e){e.exports=n("D5DuLP")},{}],D5DuLP:[function(n,e){function t(n,e,t){return r.listeners(n).length?r.emit(n,e,t):(o[n]||(o[n]=[]),void o[n].push(e))}var r=n("ee").create(),o={};e.exports=t,t.ee=r,r.q=o},{ee:"QJf3ax"}],id:[function(n,e){e.exports=n("XL7HBI")},{}],XL7HBI:[function(n,e){function t(n){var e=typeof n;return!n||"object"!==e&&"function"!==e?-1:n===window?0:i(n,o,function(){return r++})}var r=1,o="nr@id",i=n("gos");e.exports=t},{gos:"7eSDFh"}],G9z0Bl:[function(n,e){function t(){var n=h.info=NREUM.info;if(n&&n.licenseKey&&n.applicationID&&f&&f.body){c(l,function(e,t){e in n||(n[e]=t)}),h.proto="https"===d.split(":")[0]||n.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=f.createElement("script");e.src=h.proto+n.agent,f.body.appendChild(e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=n("handle"),c=n(1),u=(n(2),window),f=u.document,s="addEventListener",p="attachEvent",d=(""+location).split("?")[0],l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-627.min.js"},h=e.exports={offset:i(),origin:d,features:{}};f[s]?(f[s]("DOMContentLoaded",o,!1),u[s]("load",t,!1)):(f[p]("onreadystatechange",r),u[p]("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(n,e){e.exports=n("G9z0Bl")},{}],12:[function(n,e){function t(n,e){var t=[],o="",i=0;for(o in n)r.call(n,o)&&(t[i]=e(o,n[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;e.exports=t},{}],13:[function(n,e){function t(n,e,t){e||(e=0),"undefined"==typeof t&&(t=n?n.length:0);for(var r=-1,o=t-e||0,i=Array(0>o?0:o);++r<o;)i[r]=n[e+r];return i}e.exports=t},{}]},{},["G9z0Bl"]);</script>
<link rel="shortcut icon" href="sites/www.ziglar.com/files/favicon_0.ico"/>
<meta name="description" content="Ziglar strives to be the difference-maker in people�s personal, family and professional success. By doing so, Ziglar hopes to make a positive difference in America and the world."/>
<meta name="keywords" content="Zig Ziglar, Official Zig Ziglar, Ziglar Corporation, Sales Training, Corporate Training, Live Events, The Ziglar Way"/>
<meta name="generator" content="Drupal 7 (http://drupal.org)"/>
<meta name="rights" content="Copyright Ziglar, Inc. 2013"/>
<link rel="canonical" href="index.html"/>
<link rel="shortlink" href="index.html"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style media="all">@import url("modules/system/system.base5cf0.css?nlw5s2");@import url("modules/system/system.menus5cf0.css?nlw5s2");@import url("modules/system/system.messages5cf0.css?nlw5s2");@import url("modules/system/system.theme5cf0.css?nlw5s2");</style>
<style media="screen">@import url("sites/www.ziglar.com/modules/views_slideshow/views_slideshow5cf0.css?nlw5s2");</style>
<style media="all">@import url("modules/comment/comment5cf0.css?nlw5s2");@import url("sites/all/modules/date/date_api/date5cf0.css?nlw5s2");@import url("sites/all/modules/date/date_popup/themes/datepicker.1.75cf0.css?nlw5s2");@import url("modules/field/theme/field5cf0.css?nlw5s2");@import url("sites/all/modules/views_fractionslider/css/fractionslider5cf0.css?nlw5s2");@import url("sites/all/modules/logintoboggan/logintoboggan5cf0.css?nlw5s2");@import url("sites/all/modules/maximenu/css/maximenu5cf0.css?nlw5s2");@import url("modules/node/node5cf0.css?nlw5s2");@import url("sites/www.ziglar.com/modules/rpx/rpx_widgets5cf0.css?nlw5s2");@import url("modules/user/user5cf0.css?nlw5s2");@import url("sites/www.ziglar.com/modules/views_slideshow_xtra/views_slideshow_xtra_overlay/css/views_slideshow_xtra_overlay5cf0.css?nlw5s2");@import url("sites/all/modules/views/css/views5cf0.css?nlw5s2");</style>
<style media="all">@import url("sites/www.ziglar.com/modules/colorbox/styles/default/colorbox_style5cf0.css?nlw5s2");@import url("sites/all/modules/ctools/css/ctools5cf0.css?nlw5s2");@import url("sites/all/modules/ctools/css/modal5cf0.css?nlw5s2");@import url("sites/all/modules/modal_forms/css/modal_forms_popup5cf0.css?nlw5s2");@import url("sites/all/modules/panels/css/panels5cf0.css?nlw5s2");@import url("sites/all/modules/rate/rate5cf0.css?nlw5s2");@import url("sites/all/modules/word_link/css/word_link5cf0.css?nlw5s2");@import url("sites/all/modules/tb_megamenu/css/bootstrap5cf0.css?nlw5s2");@import url("sites/all/modules/tb_megamenu/css/base5cf0.css?nlw5s2");@import url("sites/all/modules/tb_megamenu/css/default5cf0.css?nlw5s2");@import url("sites/all/modules/tb_megamenu/css/compatibility5cf0.css?nlw5s2");@import url("sites/all/modules/addressfield/addressfield5cf0.css?nlw5s2");@import url("sites/www.ziglar.com/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle5cf0.css?nlw5s2");@import url("sites/all/modules/feedback_simple/feedback_simple5cf0.css?nlw5s2");</style>
<style media="all">@import url("sites/www.ziglar.com/themes/ziglar_new/style5cf0.css?nlw5s2");@import url("sites/www.ziglar.com/themes/ziglar_new/custom5cf0.css?nlw5s2");@import url("sites/www.ziglar.com/themes/ziglar_new/search_api_page5cf0.css?nlw5s2");</style>
<style media="print">@import url("sites/www.ziglar.com/themes/ziglar_new/print5cf0.css?nlw5s2");</style>
<!--[if lt IE 7]>
<link rel="stylesheet" href="http://www.ziglar.com/sites/www.ziglar.com/themes/ziglar_new/fix-ie.css?nlw5s2" media="all" />
<![endif]-->
<style media="all">@import url("sites/www.ziglar.com/files/css_injector/css_injector_25cf0.css?nlw5s2");@import url("sites/www.ziglar.com/files/css_injector/css_injector_35cf0.css?nlw5s2");@import url("sites/www.ziglar.com/files/css_injector/css_injector_45cf0.css?nlw5s2");@import url("sites/www.ziglar.com/files/css_injector/css_injector_55cf0.css?nlw5s2");@import url("sites/www.ziglar.com/files/css_injector/css_injector_85cf0.css?nlw5s2");</style>
<script src="sites/all/modules/jquery_update/replace/jquery/1.10/jquery.min468f.js?v=1.10.2"></script>
<script src="misc/jquery.once7839.js?v=1.2"></script>
<script src="misc/drupal5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/jquery_update/replace/ui/external/jquery.cookie1683.js?v=67fb34f6a866c40d0570"></script>
<script src="sites/all/modules/jquery_update/replace/misc/jquery.form.min97e5.js?v=2.69"></script>
<script src="sites/www.ziglar.com/modules/views_slideshow/js/views_slideshowc619.js?v=1.0"></script>
<script src="misc/ajax2347.js?v=7.34"></script>
<script src="sites/all/modules/jquery_update/js/jquery_update241d.js?v=0.0.1"></script>
<script src="sites/all/libraries/jquery/jquery-1.9.0.min5cf0.js?nlw5s2"></script>
<script src="sites/all/libraries/fractionslider/jquery.fractionslider5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/jqmulti/js/switch5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/views_fractionslider/js/fractionslider5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/maximenu/js/maximenu5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/views_slideshow_xtra/views_slideshow_xtra_overlay/js/views_slideshow_xtra_overlay5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/visualization/js/visualization5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/modal_forms/js/modal_forms_contact5cf0.js?nlw5s2"></script>
<script src="sites/all/libraries/colorbox/jquery.colorbox-min5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/colorbox/js/colorbox5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/colorbox/styles/default/colorbox_style5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/colorbox/js/colorbox_load5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/colorbox/js/colorbox_inline5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/files/jstimer/timer5cf0.js?nlw5s2"></script>
<script src="misc/progress2347.js?v=7.34"></script>
<script src="sites/all/modules/ctools/js/modal5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/modal_forms/js/modal_forms_popup5cf0.js?nlw5s2"></script>
<script src="sites/all/libraries/jstorage/jstorage.min5cf0.js?nlw5s2"></script>
<script src="sites/all/libraries/timeago/jquery.timeago5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/tb_megamenu/js/tb-megamenu-frontend5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/tb_megamenu/js/tb-megamenu-touch5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/libraries/jquery.cycle/jquery.cycle.all5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/views_slideshow/contrib/views_slideshow_cycle/js/views_slideshow_cycle5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/google_analytics/googleanalytics5cf0.js?nlw5s2"></script>
<script>/* CloudFlare analytics upgrade */
</script>
<script src="sites/all/modules/timeago/timeago5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/splashify/js/splashify_init_min5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/themes/ziglar_new/script5cf0.js?nlw5s2"></script>
<script>
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"ziglar_new","theme_token":"Li9rMfvlugjK86VjgZLbPQ6nX1JCjU3X_pd6tbyrwp0","jquery_version":"1.10","js":{"sites\/all\/modules\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"sites\/all\/modules\/jquery_update\/replace\/misc\/jquery.form.min.js":1,"sites\/www.ziglar.com\/modules\/views_slideshow\/js\/views_slideshow.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/jquery_update\/js\/jquery_update.js":1,"sites\/all\/libraries\/jquery\/jquery-1.9.0.min.js":1,"sites\/all\/libraries\/fractionslider\/jquery.fractionslider.js":1,"sites\/all\/modules\/jqmulti\/js\/switch.js":1,"sites\/all\/modules\/views_fractionslider\/js\/fractionslider.js":1,"sites\/all\/modules\/maximenu\/js\/maximenu.js":1,"sites\/www.ziglar.com\/modules\/views_slideshow_xtra\/views_slideshow_xtra_overlay\/js\/views_slideshow_xtra_overlay.js":1,"sites\/all\/modules\/visualization\/js\/visualization.js":1,"sites\/all\/modules\/modal_forms\/js\/modal_forms_contact.js":1,"sites\/all\/libraries\/colorbox\/jquery.colorbox-min.js":1,"sites\/www.ziglar.com\/modules\/colorbox\/js\/colorbox.js":1,"sites\/www.ziglar.com\/modules\/colorbox\/styles\/default\/colorbox_style.js":1,"sites\/www.ziglar.com\/modules\/colorbox\/js\/colorbox_load.js":1,"sites\/www.ziglar.com\/modules\/colorbox\/js\/colorbox_inline.js":1,"public:\/\/jstimer\/timer.js":1,"misc\/progress.js":1,"sites\/all\/modules\/ctools\/js\/modal.js":1,"sites\/all\/modules\/modal_forms\/js\/modal_forms_popup.js":1,"sites\/all\/libraries\/jstorage\/jstorage.min.js":1,"sites\/all\/libraries\/timeago\/jquery.timeago.js":1,"sites\/all\/modules\/tb_megamenu\/js\/tb-megamenu-frontend.js":1,"sites\/all\/modules\/tb_megamenu\/js\/tb-megamenu-touch.js":1,"sites\/www.ziglar.com\/libraries\/jquery.cycle\/jquery.cycle.all.js":1,"sites\/www.ziglar.com\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/js\/views_slideshow_cycle.js":1,"sites\/all\/modules\/google_analytics\/googleanalytics.js":1,"0":1,"sites\/all\/modules\/timeago\/timeago.js":1,"sites\/www.ziglar.com\/modules\/splashify\/js\/splashify_init_min.js":1,"sites\/www.ziglar.com\/themes\/ziglar_new\/script.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"sites\/www.ziglar.com\/modules\/views_slideshow\/views_slideshow.css":1,"modules\/comment\/comment.css":1,"sites\/all\/modules\/date\/date_api\/date.css":1,"sites\/all\/modules\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/views_fractionslider\/css\/fractionslider.css":1,"sites\/all\/modules\/logintoboggan\/logintoboggan.css":1,"sites\/all\/modules\/maximenu\/css\/maximenu.css":1,"modules\/node\/node.css":1,"sites\/www.ziglar.com\/modules\/rpx\/rpx_widgets.css":1,"modules\/user\/user.css":1,"sites\/www.ziglar.com\/modules\/views_slideshow_xtra\/views_slideshow_xtra_overlay\/css\/views_slideshow_xtra_overlay.css":1,"sites\/all\/modules\/views\/css\/views.css":1,"http:\/\/www.ziglar.com\/sites\/www.ziglar.com\/modules\/affiliate_ng\/theme\/affiliate_ng_ui.css":1,"sites\/www.ziglar.com\/modules\/colorbox\/styles\/default\/colorbox_style.css":1,"sites\/all\/modules\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/ctools\/css\/modal.css":1,"sites\/all\/modules\/modal_forms\/css\/modal_forms_popup.css":1,"sites\/all\/modules\/panels\/css\/panels.css":1,"sites\/all\/modules\/rate\/rate.css":1,"sites\/all\/modules\/word_link\/css\/word_link.css":1,"sites\/all\/modules\/tb_megamenu\/css\/bootstrap.css":1,"sites\/all\/modules\/tb_megamenu\/css\/base.css":1,"sites\/all\/modules\/tb_megamenu\/css\/default.css":1,"sites\/all\/modules\/tb_megamenu\/css\/compatibility.css":1,"sites\/all\/modules\/addressfield\/addressfield.css":1,"sites\/www.ziglar.com\/modules\/views_slideshow\/contrib\/views_slideshow_cycle\/views_slideshow_cycle.css":1,"sites\/all\/modules\/feedback_simple\/feedback_simple.css":1,"sites\/www.ziglar.com\/themes\/ziglar_new\/style.css":1,"sites\/www.ziglar.com\/themes\/ziglar_new\/custom.css":1,"sites\/www.ziglar.com\/themes\/ziglar_new\/search_api_page.css":1,"sites\/www.ziglar.com\/themes\/ziglar_new\/print.css":1,"sites\/www.ziglar.com\/themes\/ziglar_new\/fix-ie.css":1,"public:\/\/css_injector\/css_injector_2.css":1,"public:\/\/css_injector\/css_injector_3.css":1,"public:\/\/css_injector\/css_injector_4.css":1,"public:\/\/css_injector\/css_injector_5.css":1,"public:\/\/css_injector\/css_injector_8.css":1}},"colorbox":{"transition":"elastic","speed":"350","opacity":"0.25","slideshow":false,"slideshowAuto":true,"slideshowSpeed":"2500","slideshowStart":"start slideshow","slideshowStop":"stop slideshow","current":"{current} of {total}","previous":"\u00ab Prev","next":"Next \u00bb","close":"Close","overlayClose":true,"maxWidth":"100%","maxHeight":"100%","initialWidth":"300","initialHeight":"250","fixed":true,"scrolling":true,"mobiledetect":true,"mobiledevicewidth":"480px"},"CToolsModal":{"loadingText":"Loading...","closeText":"Close Window","closeImage":"\u003Cimg src=\u0022http:\/\/www.ziglar.com\/sites\/all\/modules\/ctools\/images\/icon-close-window.png\u0022 alt=\u0022Close window\u0022 title=\u0022Close window\u0022 \/\u003E","throbber":"\u003Cimg src=\u0022http:\/\/www.ziglar.com\/sites\/all\/modules\/ctools\/images\/throbber.gif\u0022 alt=\u0022Loading\u0022 title=\u0022Loading...\u0022 \/\u003E"},"modal-popup-small":{"modalSize":{"type":"fixed","width":300,"height":300},"modalOptions":{"opacity":0.85,"background-color":"#000"},"animation":"fadeIn","modalTheme":"ModalFormsPopup","throbber":"\u003Cimg src=\u0022http:\/\/www.ziglar.com\/sites\/all\/modules\/modal_forms\/images\/loading_animation.gif\u0022 alt=\u0022Loading...\u0022 title=\u0022Loading\u0022 \/\u003E","closeText":"Close"},"modal-popup-medium":{"modalSize":{"type":"fixed","width":550,"height":450},"modalOptions":{"opacity":0.85,"background-color":"#000"},"animation":"fadeIn","modalTheme":"ModalFormsPopup","throbber":"\u003Cimg src=\u0022http:\/\/www.ziglar.com\/sites\/all\/modules\/modal_forms\/images\/loading_animation.gif\u0022 alt=\u0022Loading...\u0022 title=\u0022Loading\u0022 \/\u003E","closeText":"Close"},"modal-popup-large":{"modalSize":{"type":"scale","width":0.8,"height":0.8},"modalOptions":{"opacity":0.85,"background-color":"#000"},"animation":"fadeIn","modalTheme":"ModalFormsPopup","throbber":"\u003Cimg src=\u0022http:\/\/www.ziglar.com\/sites\/all\/modules\/modal_forms\/images\/loading_animation.gif\u0022 alt=\u0022Loading...\u0022 title=\u0022Loading\u0022 \/\u003E","closeText":"Close"},"splashify":{"js_splash_always":"0","js_expire_after":86400,"js_mode":"colorbox","js_mode_settings":{"mode":"random","system_splash":"","urls":["http:\/\/www.ziglar.com\/build-your-legacy"],"total_urls":1,"size_width":"640","size_height":"680"},"js_disable_referrer_check":0},"timeago":{"refreshMillis":60000,"allowFuture":true,"localeTitle":false,"cutoff":0,"strings":{"prefixAgo":null,"prefixFromNow":null,"suffixAgo":"ago","suffixFromNow":"from now","seconds":"less than a minute","minute":"about a minute","minutes":"%d minutes","hour":"about an hour","hours":"about %d hours","day":"a day","days":"%d days","month":"about a month","months":"%d months","year":"about a year","years":"%d years","wordSeparator":" "}},"viewsSlideshow":{"right_sidebar_blocks-block":{"methods":{"goToSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"nextSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"pause":["viewsSlideshowControls","viewsSlideshowCycle"],"play":["viewsSlideshowControls","viewsSlideshowCycle"],"previousSlide":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowCycle"],"transitionBegin":["viewsSlideshowPager","viewsSlideshowSlideCounter","viewsSlideshowXtraOverlay"],"transitionEnd":[]},"paused":0}},"viewsSlideshowPager":{"right_sidebar_blocks-block":{"top":{"type":"viewsSlideshowPagerFields"}}},"viewsSlideshowPagerFields":{"right_sidebar_blocks-block":{"top":{"activatePauseOnHover":0}}},"viewsSlideshowCycle":{"#views_slideshow_cycle_main_right_sidebar_blocks-block":{"num_divs":10,"id_prefix":"#views_slideshow_cycle_main_","div_prefix":"#views_slideshow_cycle_div_","vss_id":"right_sidebar_blocks-block","effect":"fade","transition_advanced":0,"timeout":5000,"speed":700,"delay":0,"sync":1,"random":0,"pause":1,"pause_on_click":0,"action_advanced":0,"start_paused":0,"remember_slide":0,"remember_slide_days":1,"pause_in_middle":0,"pause_when_hidden":0,"pause_when_hidden_type":"full","amount_allowed_visible":"","nowrap":0,"fixed_height":1,"items_per_slide":1,"wait_for_image_load":1,"wait_for_image_load_timeout":3000,"cleartype":0,"cleartypenobg":0,"advanced_options":"{}"}},"googleanalytics":{"trackOutbound":1,"trackMailto":1,"trackDownload":1,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls|xml|z|zip"}});
</script>
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-55110185-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body class="html front not-logged-in one-sidebar sidebar-second page-node page-node- page-node-2228 node-type-section">
<div id="skip-link">
<a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
</div>
<script text="javascript">


        function openurl(url)
        {
            
            window.open(url, '_self');
            

        }

    </script>
<div class="header-area" style="background-color:white;">
<div class="header-cont">
 
<div class="header-lft">
<div class="logo"><a href="index.php"> <img src="home page imagesss/olv.png" style="
    width: 165px;
    /* margin-left: -9px; */
" alt="spreadwings " title="Spreadwings " id="logo"/>
</a></div>
</div>
 
 
<div class="header-rgt">
<div class="header-top">
<div class="header-blank"> &nbsp; </div>
<div class="header-menu"> <div class="region region-header-menu">
<div id="block-block-28" class="block block-block clearfix">
<div class="content">
<div class="header_menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="contactus.php">Contact Us</a></li>
<?php
session_start();
if(isset($_SESSION['log']))
{
	$usnamess=$_SESSION['username'];
echo '<li><a href="myaccount.php">Hi..'.$usnamess.'</a></li>';
}
else
{
echo '<li><a href="login.php">Login</a></li>';
echo '<li><a href="register.php">Register</a></li>';
}
		

?>
<!-- <li><a href="login.php">Login</a></li>  -->
<!--<li><a href="register.php">Register</a></li> -->
<li class="cart_icon"><a href="view_cart.php">Cart</a>
<span class="items">
<?php
if(isset($_SESSION['log']))
{
	$u_id=$_SESSION['log'];

	$query10="select * from cart where uid=$u_id";
	$retval10=mysqli_query($con,$query10);
	$rows10 = mysqli_num_rows($retval10);	
    echo $rows10." ";
}
else if(isset($_SESSION['cart_number']))
{
	echo $_SESSION['cart_number']." ";
 }
else
{
 echo "0 ";
} 
?>
Items
</span></li>
</ul>
</div>
</div>
</div>
</div>
<div class="clear"> </div></div>
<div class="header-items"> 0 Items </div>
</div>
<div class="header-bottom">
<div class="header-call"> <div class="call-text">call us - 8487820082  </div> </div>
<div class="header-search">
<div class="region region-search">
<div id="block-search-api-page-ziglar-search" class="block block-search-api-page clearfix">
<div class="content">
<form action="searching.php" method="post" id="search-api-page-search-form-ziglar-search" accept-charset="UTF-8">
<div><div class="form-item form-type-textfield form-item-keys-3">
<label class="element-invisible" for="edit-keys-3">Enter your keywords </label>
<input placeholder="Enter your keywords" type="text" id="keyword" name="keyword" value="" size="15" maxlength="128" class="form-text"/>
</div>
<input type="submit" id="edit-submit-3" name="op" value="GO" class="form-submit"/>
</div>
</form> 
</div>
</div>
</div>
</div>
</div>
</div>
 
</div>
 
<div class="nav" style="
    margin-top: 0px;
">
<div class="nav-menu">
<div class="navigatation" style="
    width: 0px;
    margin-left: 312px;
">
<nav>
<div class="region region-tb-menu">
<div id="block-tb-megamenu-main-menu" class="block block-tb-megamenu clearfix">
<div class="content">
<div class="tb-megamenu tb-megamenu-main-menu">
<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar tb-megamenu-button" type="button">
<i class="icon-reorder"></i>
</button>
<div class="nav-collapse collapse always-show">
<ul class="tb-megamenu-nav nav level-0 items-19">
<li data-id="28721" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega active">
<a href="index.php" class="">
Home </a>
</li>
<li data-id="28720" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega">
<a href="aboutus.php" class="">
About Us </a>
</li>

<li data-id="28727" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega dropdown">
<a href="onlinestore.php" class="dropdown-toggle">
Live Webcasts & Events <span class="caret"></span>
</a>

<!--eventsssssssssss -->

<div data-class="" data-width="" class="tb-megamenu-submenu dropdown-menu mega-dropdown-menu nav-child">
<div class="mega-dropdown-inner">
<div class="tb-megamenu-row row-fluid">
<div data-showblocktitle="1" data-class="" data-width="12" data-hidewcol="" id="tb-megamenu-column-1" class="tb-megamenu-column span12  mega-col-nav">
<div class="tb-megamenu-column-inner mega-inner clearfix">
<div data-type="block" data-block="views--events-block_1" class="tb-megamenu-block tb-block tb-megamenu-block">
<div class="block-inner">
<div id="block-views-events-block-1" class="block block-views clearfix">
<h2 class="title">Events</h2>
<div class="content">
<div class="view view-events view-id-events view-display-id-block_1 ziglarevents view-dom-id-dae56cdb8013add527e32e8aa8127181">
<div class="view-content">


<?php

	$query9="select * from product p,onlinestore o where product_type='event' and p.online_id=o.online_id and o.is_active=1  and p.is_active order by p.updated";
$retval9=mysqli_query($con,$query9);
	
	while($row9=mysqli_fetch_array($retval9))
					{
					$prod_idd=$row9['product_id'];
					$online_idd=$row9['online_id'];
					
				/*	$dts=$row9['updated'];
					$newstring = substr($dts, -2);
					
					date( $row9['updated'] );
					$pff=date('M'); */
					
					$d=$row9['updated'];
					$date = new DateTime($d);

					
					$dayss = $date->format('d');  // Creates date number
					$monthh = $date->format('M'); // Creates month number
					$yearr = $date->format('Y'); // Creates year
										
					
					// echo date('d');
					//echo  $newstring;
					 

?>

<div class="views-row views-row-1 views-row-odd views-row-first">
<div class="views-field views-field-nothing"> 
<span class="field-content"><a href='online_detail.php?proid=<?php echo $prod_idd;?>&onlid=<?php echo $online_idd;?>' class="eventitemlink"><div class="eventitem">
<div class="eventdate"><span class="date-display-single"> <?php echo $dayss; ?></span>
<div class="abbr"><span class="date-display-single"><?php echo $monthh; ?></span></div>
</div>
<div class="eventtitle"><?php echo $row9['product_name']; ?></div>
<div class="eventmeta">
<div class="eventlocation"></div>
</div>
</div></a></span> </div> </div>


<?php } ?>
</div>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<!--eventsssssssssss -->
<li data-id="28722" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega">
<a href="onlinestore.php" class="">
Online Store </a>
</li>

<li data-id="28725" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega">
<a href="frequentlyaskedque.php" class="">
FAQ </a>
</li>
<li data-id="28726" data-level="1" data-type="menu_item" data-class="" data-xicon="" data-caption="" data-alignsub="" data-group="0" data-hidewcol="0" data-hidesub="0" class="tb-megamenu-item level-1 mega">
<a href="blogdesign.php" class="">
Blog </a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
 
</div>

