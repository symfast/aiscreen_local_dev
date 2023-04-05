<!-- GTranslate: https://gtranslate.io/ -->
<style>
    .switcher {
        font-family: Arial;
        font-size: 12pt;
        text-align: left;
        cursor: pointer;
        overflow: hidden;
        width: 68px;
        line-height: 17px;
    }

    .switcher a {
        text-decoration: none;
        display: block;
        font-size: 12pt;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
    }

    .switcher a img {
        vertical-align: middle;
        display: inline;
        border: 0;
        padding: 0;
        margin: 0;
        opacity: 0.8;
    }

    .switcher a:hover img {
        opacity: 1;
    }

    .switcher .selected {
       /* background: #fff linear-gradient(180deg, #efefef 0%, #fff 70%);*/
        position: relative;
        z-index: 9999;
    }

    .switcher .selected a {
        border: 1px solid #ccc;
        color: #666;
        padding: 5px 10px;
        width: 45px;
        border-radius:10px;
    }

    .switcher .selected a:after {
        height: 24px;
        display: inline-block;
        position: absolute;
        right: 10px;
        width: 15px;
        background-position: 50%;
        background-size: 11px;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");
        background-repeat: no-repeat;
        content: "" !important;
        transition: all .2s;
    }

    .switcher .selected a.open:after {
        -webkit-transform: rotate(-180deg);
        transform: rotate(-180deg);
    }

    .switcher .selected a:hover {
        background: #fff
    }

    .switcher .option {
        position: relative;
        z-index: 9998;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        background-color: #eee;
        display: none;
        width: 65px;
        max-height: 198px;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .switcher .option a {
        color: #000;
        padding: 3px 5px;
    }

    .switcher .option a:hover {
        background: #fff;
    }

    .switcher .option a.selected {
        background: #fff;
    }

    #selected_lang_name {
        float: none;
    }

    .l_name {
        float: none !important;
        margin: 0;
    }

    .switcher .option::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        background-color: #f5f5f5;
    }

    .switcher .option::-webkit-scrollbar {
        width: 5px;
    }

    .switcher .option::-webkit-scrollbar-thumb {
        border-radius: 5px;
        -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
        background-color: #888;
    }
</style>
<div class="switcher notranslate">
    <div class="selected">
        <a href="#" onclick="return false;"><img src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/en.png"
                height="24" width="24" alt="en" /> </a>
    </div>
    <div class="option">
        <a href="#"
            onclick="doGTranslate('en|ar');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="Arabic" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/ar.png" height="24"
                width="24" alt="ar" /> </a><a href="#"
            onclick="doGTranslate('en|zh-CN');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="Chinese (Simplified)" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/zh-CN.png" height="24"
                width="24" alt="zh-CN" /> </a><a href="#"
            onclick="doGTranslate('en|nl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="Dutch" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/nl.png" height="24"
                width="24" alt="nl" /> </a><a href="#"
            onclick="doGTranslate('en|en');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="English" class="nturl selected"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/en.png" height="24"
                width="24" alt="en" /> </a><a href="#"
            onclick="doGTranslate('en|fr');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="French" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/fr.png" height="24"
                width="24" alt="fr" /> </a><a href="#"
            onclick="doGTranslate('en|de');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="German" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/de.png" height="24"
                width="24" alt="de" /> </a><a href="#"
            onclick="doGTranslate('en|it');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="Italian" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/it.png" height="24"
                width="24" alt="it" /> </a><a href="#"
            onclick="doGTranslate('en|pt');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="Portuguese" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/pt.png" height="24"
                width="24" alt="pt" /> </a><a href="#"
            onclick="doGTranslate('en|ru');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="Russian" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/ru.png" height="24"
                width="24" alt="ru" /> </a><a href="#"
            onclick="doGTranslate('en|es');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;"
            title="Spanish" class="nturl"><img
                data-gt-lazy-src="//www.aiscreen.io/wp-content/plugins/gtranslate/flags/24/es.png" height="24"
                width="24" alt="es" /> </a>
    </div>
</div>
<script>
    (function gt_jquery_ready() {
        if (!window.jQuery || !jQuery.fn.click) return setTimeout(gt_jquery_ready, 20);
        jQuery('.switcher .selected').click(function () { jQuery('.switcher .option a img').each(function () { if (!jQuery(this)[0].hasAttribute('src')) jQuery(this).attr('src', jQuery(this).attr('data-gt-lazy-src')) }); if (!(jQuery('.switcher .option').is(':visible'))) { jQuery('.switcher .option').stop(true, true).delay(100).slideDown(500); jQuery('.switcher .selected a').toggleClass('open') } });
        jQuery('.switcher .option').bind('mousewheel', function (e) { var options = jQuery('.switcher .option'); if (options.is(':visible')) options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta / 10); return false; });
        jQuery('body').not('.switcher').click(function (e) { if (jQuery('.switcher .option').is(':visible') && e.target != jQuery('.switcher .option').get(0)) { jQuery('.switcher .option').stop(true, true).delay(100).slideUp(500); jQuery('.switcher .selected a').toggleClass('open') } });
    })();
</script>
<style>
    #goog-gt-tt {
        display: none !important;
    }

    .goog-te-banner-frame {
        display: none !important;
    }

    .goog-te-menu-value:hover {
        text-decoration: none !important;
    }

    .goog-text-highlight {
        background-color: transparent !important;
        box-shadow: none !important;
    }

    body {
        top: 0 !important;
    }

    #google_translate_element2 {
        display: none !important;
    }
</style>
<div id="google_translate_element2"></div>
<script>function googleTranslateElementInit2() { new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element2'); } if (!window.gt_translate_script) { window.gt_translate_script = document.createElement('script'); gt_translate_script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2'; document.body.appendChild(gt_translate_script); }</script>

<script>
    function GTranslateGetCurrentLang() { var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)'); return keyValue ? keyValue[2].split('/')[2] : null; }
    function GTranslateFireEvent(element, event) { try { if (document.createEventObject) { var evt = document.createEventObject(); element.fireEvent('on' + event, evt) } else { var evt = document.createEvent('HTMLEvents'); evt.initEvent(event, true, true); element.dispatchEvent(evt) } } catch (e) { } }
    function doGTranslate(lang_pair) { if (lang_pair.value) lang_pair = lang_pair.value; if (lang_pair == '') return; var lang = lang_pair.split('|')[1]; if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return; if (typeof ga == 'function') { ga('send', 'event', 'GTranslate', lang, location.hostname + location.pathname + location.search); } var teCombo; var sel = document.getElementsByTagName('select'); for (var i = 0; i < sel.length; i++)if (sel[i].className.indexOf('goog-te-combo') != -1) { teCombo = sel[i]; break; } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) { setTimeout(function () { doGTranslate(lang_pair) }, 500) } else { teCombo.value = lang; GTranslateFireEvent(teCombo, 'change'); GTranslateFireEvent(teCombo, 'change') } }
    (function gt_jquery_ready() {
        if (!window.jQuery || !jQuery.fn.click) return setTimeout(gt_jquery_ready, 20);
        if (GTranslateGetCurrentLang() != null) jQuery(document).ready(function () { var lang_html = jQuery('div.switcher div.option').find('img[alt="' + GTranslateGetCurrentLang() + '"]').parent().html(); if (typeof lang_html != 'undefined') jQuery('div.switcher div.selected a').html(lang_html.replace('data-gt-lazy-', '')); });
    })();
</script>