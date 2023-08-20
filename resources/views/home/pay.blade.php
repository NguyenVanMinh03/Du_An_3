@section('taitel', 'Pay')
@extends('home.contact.main2')

    <!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>@yield('taitel')</title>
    <meta name='robots' content='max-image-preview:large'/>
    <link rel="stylesheet" href="/temblate/fontawesome-free-6.1.1-web/css/all.css">

    <link rel="alternate" type="application/rss+xml" title="KidzOutfit &raquo; Feed"
          href="https://fullkit.moxcreative.com/kidzoutfit/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="KidzOutfit &raquo; Comments Feed"
          href="https://fullkit.moxcreative.com/kidzoutfit/comments/feed/"/>
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/fullkit.moxcreative.com\/kidzoutfit\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2"
            }
        };
        /*! This file is auto-generated */
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !
                            1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s(
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                        );
                    case "emoji":
                        return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-includes/css/dist/block-library/style.min.css?ver=6.2.2'
          media='all'/>
    <link rel='stylesheet' id='wc-blocks-vendors-style-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=10.2.4'
          media='all'/>
    <link rel='stylesheet' id='wc-blocks-style-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=10.2.4'
          media='all'/>
    <link rel='stylesheet' id='classic-theme-styles-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-includes/css/classic-themes.min.css?ver=6.2.2'
          media='all'/>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex > * {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='template-kit-export-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21'
          media='all'/>
    <link rel='stylesheet' id='woocommerce-layout-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=7.8.2'
          media='all'/>
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=7.8.2'
          media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' id='woocommerce-general-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=7.8.2'
          media='all'/>
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='hello-elementor-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/themes/hello-elementor/style.min.css?ver=2.8.1'
          media='all'/>
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/themes/hello-elementor/theme.min.css?ver=2.8.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.14.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-98-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/elementor/css/post-98.css?ver=1674828092'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0'
          media='all'/>
    <link rel='stylesheet' id='swiper-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6'
          media='all'/>
    <link rel='stylesheet' id='elementor-pro-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.10.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-937-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/elementor/css/post-937.css?ver=1674860507'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-133-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/elementor/css/post-133.css?ver=1674828092'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-193-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/elementor/css/post-193.css?ver=1674823064'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-ekiticons-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=2.9.0'
          media='all'/>
    <link rel='stylesheet' id='skb-cife-elegant_icon-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/elegant.css?ver=1.0.6'
          media='all'/>
    <link rel='stylesheet' id='skb-cife-linearicons_icon-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/linearicons.css?ver=1.0.6'
          media='all'/>
    <link rel='stylesheet' id='skb-cife-themify_icon-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify.css?ver=1.0.6'
          media='all'/>
    <link rel='stylesheet' id='ekit-widget-styles-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.9.0'
          media='all'/>
    <link rel='stylesheet' id='ekit-responsive-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.9.0'
          media='all'/>
    <link rel='stylesheet' id='google-fonts-1-css'
          href='https://fonts.googleapis.com/css?family=Grandstander%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCaveat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-skb_cife-themify-icon-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/skyboot-custom-icons-for-elementor/assets/css/themify.css?ver=1.0.6'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
          href='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3'
          media='all'/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='https://fullkit.moxcreative.com/kidzoutfit/wp-includes/js/jquery/jquery.min.js?ver=3.6.4'
            id='jquery-core-js'></script>
    <script src='https://fullkit.moxcreative.com/kidzoutfit/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0'
            id='jquery-migrate-js'></script>
    <script
        src='https://fullkit.moxcreative.com/kidzoutfit/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21'
        id='template-kit-export-js'></script>
    <link rel="https://api.w.org/" href="https://fullkit.moxcreative.com/kidzoutfit/wp-json/"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
          href="https://fullkit.moxcreative.com/kidzoutfit/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://fullkit.moxcreative.com/kidzoutfit/wp-includes/wlwmanifest.xml"/>

    <link rel="canonical"
          href="https://fullkit.moxcreative.com/kidzoutfit/?elementor_library=kidzoutfit-v1-checkout-page"/>
    <link rel='shortlink' href='https://fullkit.moxcreative.com/kidzoutfit/?p=937'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://fullkit.moxcreative.com/kidzoutfit/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffullkit.moxcreative.com%2Fkidzoutfit%2F%3Felementor_library%3Dkidzoutfit-v1-checkout-page"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://fullkit.moxcreative.com/kidzoutfit/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffullkit.moxcreative.com%2Fkidzoutfit%2F%3Felementor_library%3Dkidzoutfit-v1-checkout-page&#038;format=xml"/>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
          content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
</head>

<body
    class="elementor_library-template-default single single-elementor_library postid-937 theme-hello-elementor woocommerce-no-js elementor-default elementor-kit-98 elementor-page elementor-page-937 elementor-page-937">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0.49803921568627"/>
                <feFuncG type="table" tableValues="0 0.49803921568627"/>
                <feFuncB type="table" tableValues="0 0.49803921568627"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 0.27843137254902"/>
                <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0"/>
                <feFuncG type="table" tableValues="0 0.64705882352941"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.78039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.94901960784314"/>
                <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.44705882352941 0.4"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
     role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.098039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.66274509803922"/>
                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<div data-elementor-type="header" data-elementor-id="133"
     class="elementor elementor-133 elementor-location-header">
    @section('content')

</div>
<div data-elementor-type="single-page" data-elementor-id="937"
     class="elementor elementor-937 elementor-location-single post-58 post type-post status-publish format-standard has-post-thumbnail hentry category-insight tag-fashion tag-kids tag-outfit">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-9d0a503 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="9d0a503" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9aa147a"
                data-id="9aa147a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-26dcf44 elementor-widget elementor-widget-heading"
                         data-id="26dcf44" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-heading-title {
                                    padding: 0;
                                    margin: 0;
                                    line-height: 1
                                }

                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
                                    color: inherit;
                                    font-size: inherit;
                                    line-height: inherit
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                    font-size: 15px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                    font-size: 19px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                    font-size: 29px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                    font-size: 39px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                    font-size: 59px
                                }
                            </style>
                            <h2 class="elementor-heading-title elementor-size-default">Shop Product</h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-374ddb1 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="374ddb1" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;rubberBand&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Checkout Page</h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-23196e6 elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="23196e6" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-widget-divider {
                                    --divider-border-style: none;
                                    --divider-border-width: 1px;
                                    --divider-color: #0c0d0e;
                                    --divider-icon-size: 20px;
                                    --divider-element-spacing: 10px;
                                    --divider-pattern-height: 24px;
                                    --divider-pattern-size: 20px;
                                    --divider-pattern-url: none;
                                    --divider-pattern-repeat: repeat-x
                                }

                                .elementor-widget-divider .elementor-divider {
                                    display: flex
                                }

                                .elementor-widget-divider .elementor-divider__text {
                                    font-size: 15px;
                                    line-height: 1;
                                    max-width: 95%
                                }

                                .elementor-widget-divider .elementor-divider__element {
                                    margin: 0 var(--divider-element-spacing);
                                    flex-shrink: 0
                                }

                                .elementor-widget-divider .elementor-icon {
                                    font-size: var(--divider-icon-size)
                                }

                                .elementor-widget-divider .elementor-divider-separator {
                                    display: flex;
                                    margin: 0;
                                    direction: ltr
                                }

                                .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                    align-items: center
                                }

                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                    display: block;
                                    content: "";
                                    border-bottom: 0;
                                    flex-grow: 1;
                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                }

                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator > .elementor-divider__svg:first-of-type {
                                    flex-grow: 0;
                                    flex-shrink: 100
                                }

                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                    content: none
                                }

                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                    margin-left: 0
                                }

                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator > .elementor-divider__svg:last-of-type {
                                    flex-grow: 0;
                                    flex-shrink: 100
                                }

                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                    content: none
                                }

                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                    margin-right: 0
                                }

                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                }

                                .elementor-widget-divider--separator-type-pattern {
                                    --divider-border-style: none
                                }

                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                    width: 100%;
                                    min-height: var(--divider-pattern-height);
                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                    mask-size: var(--divider-pattern-size) 100%;
                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                    mask-repeat: var(--divider-pattern-repeat);
                                    background-color: var(--divider-color);
                                    -webkit-mask-image: var(--divider-pattern-url);
                                    mask-image: var(--divider-pattern-url)
                                }

                                .elementor-widget-divider--no-spacing {
                                    --divider-pattern-size: auto
                                }

                                .elementor-widget-divider--bg-round {
                                    --divider-pattern-repeat: round
                                }

                                .rtl .elementor-widget-divider .elementor-divider__text {
                                    direction: rtl
                                }

                                .e-con-inner > .elementor-widget-divider,
                                .e-con > .elementor-widget-divider {
                                    width: var(--container-widget-width, 100%);
                                    --flex-grow: var(--container-widget-flex-grow)
                                }
                            </style>
                            <div class="elementor-divider"
                                 style="--divider-pattern-url: url(&quot;data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; preserveAspectRatio=&#039;none&#039; overflow=&#039;visible&#039; height=&#039;100%&#039; viewBox=&#039;0 0 24 24&#039; fill=&#039;none&#039; stroke=&#039;black&#039; stroke-width=&#039;4&#039; stroke-linecap=&#039;square&#039; stroke-miterlimit=&#039;10&#039;%3E%3Cpath d=&#039;M0,21c3.3,0,8.3-0.9,15.7-7.1c6.6-5.4,4.4-9.3,2.4-10.3c-3.4-1.8-7.7,1.3-7.3,8.8C11.2,20,17.1,21,24,21&#039;/%3E%3C/svg%3E&quot;);">
                                        <span class="elementor-divider-separator">
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-cfc03a2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="cfc03a2" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-675afb8"
                data-id="675afb8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-8e7026b e-checkout-layout-two-column elementor-widget elementor-widget-woocommerce-checkout-page"
                        data-id="8e7026b" data-element_type="widget"
                        data-widget_type="woocommerce-checkout-page.default">
                        <div class="elementor-widget-container">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce-notices-wrapper"></div>
                                @if(session("suscess"))
                                    <div class="alert alert-success">
                                        {{session("suscess")}}
                                    </div>

                                @endif

                                <form name="checkout" method="post" class="checkout woocommerce-checkout"
                                      action="" enctype="multipart/form-data">


                                    <div class="e-checkout__container">
                                        <!--open container-->
                                        <div class="e-checkout__column e-checkout__column-start">
                                            <!--open column-1-->

                                            <div class="col2-set" id="customer_details">
                                                <div class="col-1">
                                                    <div class="woocommerce-billing-fields">

                                                        <h3>Billing Details</h3>


                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p class="form-row form-row-wide"
                                                               id="billing_company_field" data-priority="30">
                                                                <label for="billing_company" class="">Họ Tên
                                                                    Người Nhận&nbsp;</label>
                                                                <span class="woocommerce-input-wrapper"><input
                                                                        type="text" class="input-text "
                                                                        name="name"
                                                                        id="billing_company"
                                                                        placeholder="Company Name" value=""
                                                                        autocomplete="organization"/></span>
                                                            </p>

                                                            <p class="form-row form-row-wide address-field validate-required"
                                                               id="billing_city_field" data-priority="70">
                                                                <label for="billing_city" class="">Thành
                                                                    Phố&nbsp;<abbr class="required"
                                                                                   title="required">*</abbr></label><span
                                                                    class="woocommerce-input-wrapper"><input
                                                                        type="text" class="input-text "
                                                                        name="city" id="billing_city"
                                                                        placeholder="" value=""
                                                                        autocomplete="address-level2"/></span>
                                                            </p>
                                                            <p class="form-row form-row-wide address-field validate-required"
                                                               id="billing_address_1_field" data-priority="50">
                                                                <label for="billing_address_1" class="">Địa
                                                                    Chỉ Nhà&nbsp;<abbr class="required"
                                                                                       title="required">*</abbr></label><span
                                                                    class="woocommerce-input-wrapper"><input
                                                                        type="text" class="input-text "
                                                                        name="address"
                                                                        id="billing_address_1"
                                                                        placeholder="House number and street name"
                                                                        value=""
                                                                        autocomplete="address-line1"/></span>
                                                            </p>


                                                            <p class="form-row form-row-wide validate-required validate-phone"
                                                               id="billing_phone_field" data-priority="100">
                                                                <label for="billing_phone"
                                                                       class="">Phone&nbsp;<abbr
                                                                        class="required"
                                                                        title="required">*</abbr></label><span
                                                                    class="woocommerce-input-wrapper"><input
                                                                        type="tel" class="input-text "
                                                                        name="phone" id="billing_phone"
                                                                        placeholder="Phone" value=""
                                                                        autocomplete="tel"/></span>
                                                            </p>
                                                            <p class="form-row form-row-wide validate-required validate-email"
                                                               id="billing_email_field" data-priority="110">
                                                                <label for="billing_email" class="">Email
                                                                    Address&nbsp;<abbr class="required"
                                                                                       title="required">*</abbr></label><span
                                                                    class="woocommerce-input-wrapper"><input
                                                                        type="email" class="input-text "
                                                                        name="email" id="billing_email"
                                                                        placeholder="Email Address" value=""
                                                                        autocomplete="email username"/></span>
                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-2">
                                                    {{-- <div class="woocommerce-shipping-fields">
                                                        </div> --}}
                                                    <div class="woocommerce-additional-fields">

                                                        <p class="form-row form-row-wide address-field validate-required validate-state"
                                                           id="billing_state_field" data-priority="80">
                                                            <label for="billing_state"
                                                                   class="">Pay&nbsp;<abbr class="required"
                                                                                           title="required">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><select
                                                                    name="pay" id="billing_state"
                                                                    class="state_select "
                                                                    autocomplete="address-level1"
                                                                    data-placeholder="Select an option&hellip;"
                                                                    data-input-classes="" data-label="State">
                                                                            <option value="1">CHUYỂN KHOẢN </option>
                                                                            <option value="2">THANH TOÁN KHI NHẬN HÀNG
                                                                            </option>
                                                                        </select></span>
                                                        </p>

                                                        <h3></h3>


                                                    </div>
                                                </div>
                                            </div>

                                            <!--close column-1-->
                                        </div>


                                        <div class="e-checkout__column e-checkout__column-end">
                                            <!--open column-2-->
                                            <div class="e-checkout__column-inner e-sticky-right-column">

                                                <!--open column-inner-->
                                                <div class="e-checkout__order_review">

                                                    <!--open order_review-->

                                                    <h3 id="order_review_heading">Your Order</h3>


                                                    <div id="order_review"
                                                         class="woocommerce-checkout-review-order">
                                                        <table
                                                            class="shop_table woocommerce-checkout-review-order-table">
                                                            <thead>
                                                            <tr>
                                                                <th class="product-name">Product</th>
                                                                <th class="product-total">Subtotal</th>
                                                            </tr>
                                                            </thead>
                                                            @php
                                                                $total = 0;
                                                            @endphp
                                                            @foreach ($products as $item)
                                                                @php
                                                                    $price = $item->price;
                                                                    $priceEnd = $price * $carts[$item->id];
                                                                    $total += $priceEnd;
                                                                @endphp
                                                                <tbody>

                                                                <tr class="cart_item">
                                                                    <td class="product-name" value="{{ $item->name }}">
                                                                        {{ $item->name }} <strong
                                                                            class="product-quantity" value="">&times;&nbsp;{{ $carts[$item->id] }}</strong>
                                                                    </td>
                                                                    <td class="product-total">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount"
                                                                                        value=""><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{ $priceEnd }}</bdi></span>
                                                                    </td>
                                                                </tr>


                                                                </tbody>
                                                            @endforeach
                                                            <tfoot>

                                                            <tr class="cart-subtotal">
                                                                <th>Subtotal</th>
                                                                <td><span
                                                                        class="woocommerce-Price-amount amount"
                                                                        value=""><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{ $total }}</bdi></span>
                                                                </td>
                                                            </tr>

                                                            <tr class="order-total">
                                                                <th>Total</th>
                                                                <td><strong><span
                                                                            class="woocommerce-Price-amount amount"
                                                                            value=""><bdi><span
                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{ $total }}</bdi></span></strong>
                                                                </td>
                                                            </tr>


                                                            </tfoot>

                                                        </table>
                                                        <!--close wc_order_review-->
                                                    </div>
                                                    <!--close order_review-->
                                                </div>


                                                <div class="e-checkout__order_review-2">
                                                    <!--reopen wc_order_review-2-->
                                                    <div id="payment" class="woocommerce-checkout-payment">

                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Since your browser does not support JavaScript,
                                                                or it is disabled, please ensure you click the
                                                                <em>Update Totals</em> button before placing
                                                                your order. You may be charged more than the
                                                                amount stated above if you fail to do so.
                                                                <br/>
                                                                <button type="submit" class="button alt"
                                                                        name="woocommerce_checkout_update_totals"
                                                                        value="Update totals">Update
                                                                    totals
                                                                </button>
                                                            </noscript>

                                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                                <div class="woocommerce-privacy-policy-text">
                                                                </div>
                                                            </div>


                                                            <button type="submit" class="button alt"
                                                                    name="woocommerce_checkout_place_order"
                                                                    id="place_order" value="Place order"
                                                                    data-value="Place order">Place order
                                                            </button>

                                                            {{-- <input type="hidden"
                                                                id="woocommerce-process-checkout-nonce"
                                                                name="woocommerce-process-checkout-nonce"
                                                                value="01589c6d09" /><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/kidzoutfit/?elementor_library=kidzoutfit-v1-checkout-page" /> --}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--close wc_order_review-2-->
                                                <!--close column-inner-->
                                            </div>

                                            <!--close column-2-->
                                        </div>
                                        <!--close container-->
                                    </div>
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-7899394 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7899394" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-82c8ec8"
                data-id="82c8ec8" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-element elementor-element-15415dd elementor-widget elementor-widget-spacer"
                         data-id="15415dd" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-column .elementor-spacer-inner {
                                    height: var(--spacer-size)
                                }

                                .e-con {
                                    --container-widget-width: 100%
                                }

                                .e-con-inner > .elementor-widget-spacer,
                                .e-con > .elementor-widget-spacer {
                                    width: var(--container-widget-width, var(--spacer-size));
                                    --align-self: var(--container-widget-align-self, initial);
                                    --flex-shrink: 0
                                }

                                .e-con-inner > .elementor-widget-spacer > .elementor-widget-container,
                                .e-con-inner > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer,
                                .e-con > .elementor-widget-spacer > .elementor-widget-container,
                                .e-con > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer {
                                    height: 100%
                                }

                                .e-con-inner > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner,
                                .e-con > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner {
                                    height: var(--container-widget-height, var(--spacer-size))
                                }
                            </style>
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4144b5a"
                data-id="4144b5a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-0bbbf6b elementor-widget__width-auto elementor-absolute e-transform e-transform elementor-invisible elementor-widget elementor-widget-image"
                        data-id="0bbbf6b" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;rotateIn&quot;,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img width="787" height="497"
                                 src="https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration2.png"
                                 class="attachment-full size-full wp-image-375" alt="" loading="lazy"
                                 srcset="https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration2.png 787w, https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration2-300x189.png 300w, https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration2-768x485.png 768w, https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration2-600x379.png 600w"
                                 sizes="(max-width: 787px) 100vw, 787px"/>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-175038b elementor-widget__width-auto elementor-absolute e-transform e-transform elementor-invisible elementor-widget elementor-widget-image"
                        data-id="175038b" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;rotateInUpLeft&quot;,&quot;_animation_delay&quot;:360,&quot;_transform_rotateZ_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:65,&quot;sizes&quot;:[]},&quot;_transform_flipX_effect&quot;:&quot;transform&quot;,&quot;_transform_rotateZ_effect_tablet&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_rotateZ_effect_mobile&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img width="640" height="541"
                                 src="https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration1-1.png"
                                 class="attachment-full size-full wp-image-625" alt="" loading="lazy"
                                 srcset="https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration1-1.png 640w, https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration1-1-300x254.png 300w, https://fullkit.moxcreative.com/kidzoutfit/wp-content/uploads/sites/10/2022/07/Decoration1-1-600x507.png 600w"
                                 sizes="(max-width: 640px) 100vw, 640px"/>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2ac0306 elementor-widget elementor-widget-heading"
                         data-id="2ac0306" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Additional discount up to
                                30% for your first purchase</h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-e1957bb elementor-widget elementor-widget-text-editor"
                        data-id="e1957bb" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                    background-color: #69727d;
                                    color: #fff
                                }

                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                    color: #69727d;
                                    border: 3px solid;
                                    background-color: transparent
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                    margin-top: 8px
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                    width: 1em;
                                    height: 1em
                                }

                                .elementor-widget-text-editor .elementor-drop-cap {
                                    float: left;
                                    text-align: center;
                                    line-height: 1;
                                    font-size: 50px
                                }

                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                    display: inline-block
                                }
                            </style>
                            <p>Ullamcorper mollis montes curabitur curae phasellus fames bibendum.</p>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-5c960d2 elementor-mobile-align-center elementor-widget elementor-widget-button"
                        data-id="5c960d2" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-md"
                                   href="/shop">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Shop Now !</span>
                                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
