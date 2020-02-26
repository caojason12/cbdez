<?php
$GLOBALS['_ta_campaign_key'] = 'f18831064f2b7f8a9155439f3f28ccbf';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=f18831064f2b7f8a9155439f3f28ccbf' parameter

require 'bootloader_9982607592413d5a65a9c8191e740fd8.php';

$campaign_id = '9c3ih1';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!doctype html>
<html class="no-js" lang="en">
<head>

  <!-- Basic page needs ================================================== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0341/1840/2179/files/ce24ceda-03d1-415f-8f55-4ab4f0bb556e_200x200_2772f331-4e11-45ad-b567-e4fc61eef2aa_32x32.png?v=1582130854" type="image/png" />
  

  <!-- Title and description ================================================== -->
  <title>
  Great Campsites for Bluebells &ndash; Side-eNet
  </title>

  
  <meta name="description" content="Woodland Camping: 7 Great Campsites for Bluebells Have you noticed? Spring is here and the very first of the bluebells are starting to appear. And, with the arrival of the season, campsites across the country are starting to open up after their winter&#39;s slumber. If you&#39;ll be taking a trip down to the woods this spring,">
  

  <!-- Helpers ================================================== -->
  <!-- /snippets/social-meta-tags.liquid -->




<meta property="og:site_name" content="Side-eNet">
<meta property="og:url" content="https://side-enet.myshopify.com/blogs/news/great-campsites-for-bluebells">
<meta property="og:title" content="Great Campsites for Bluebells">
<meta property="og:type" content="article">
<meta property="og:description" content="Woodland Camping: 7 Great Campsites for Bluebells

Have you noticed? Spring is here and the very first of the bluebells are starting to appear. And, with the arrival of the season, campsites across the country are starting to open up after their winter's slumber. If you'll be taking a trip down to the woods this spring, you'll be sure to find a carpet of bluebells near most woodland camping spots. And, the older the woodland, the more bluebells you are likely to find. Did you know, for example, that bluebells are actually an indicator of ancient woodland? Bluebells are often used in combination with other species as a clue that a wood is ancient. Regardless of how they got there, though, bluebells in abundance are one of the UK's greatest woodland spectacles. Here's a handful of spots where happy campers can best enjoy them...

Cornish Tipis &amp; Camping, Cornwall
Set around an emerald, spring-fed lake in a former quarry, this family campsite plays second fiddle to nature, with a wild, enchanting feel.

Graig Wen, Snowdonia
On the banks of the Mawddach Estuary and at the foot of Cadair Idris, Graig Wen campsite has arguably the most enviable location in Wales.

Blackberry Wood, Sussex
In the woods of the South Downs, the individual clearings at Blackberry Wood Campsite offer ample space for a tent, a campfire and a few friends.

Ace Hideaways, Highlands
The serenity of this woodland campsite is off-set by local adventure options: canyoning, cliff jumping and white-water rafting on the River Findhorn.

The Almost Wild Campsite, Hertfordshire
Within cycling distance of central London, this small, minimal, riverside campsite is only open on weekends and books out far in advance.

North Lees Campsite, Peak District
It's a short, bluebell-clad stroll from the campsite to Stanage Edge, a rock-climbing Mecca in the heart of the Peak District National Park.

Kingsmead Centre, Devon
The bluebells are always out in force at this family-friendly campsite, with individual woodland pitches as well as their popular meadow spots.
">

<meta property="og:image" content="http://cdn.shopify.com/s/files/1/0341/1840/2179/articles/large_1200x1200.jpg?v=1582129745">
<meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0341/1840/2179/articles/large_1200x1200.jpg?v=1582129745">


  <meta name="twitter:site" content="@shopify">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Great Campsites for Bluebells">
<meta name="twitter:description" content="Woodland Camping: 7 Great Campsites for Bluebells

Have you noticed? Spring is here and the very first of the bluebells are starting to appear. And, with the arrival of the season, campsites across the country are starting to open up after their winter's slumber. If you'll be taking a trip down to the woods this spring, you'll be sure to find a carpet of bluebells near most woodland camping spots. And, the older the woodland, the more bluebells you are likely to find. Did you know, for example, that bluebells are actually an indicator of ancient woodland? Bluebells are often used in combination with other species as a clue that a wood is ancient. Regardless of how they got there, though, bluebells in abundance are one of the UK's greatest woodland spectacles. Here's a handful of spots where happy campers can best enjoy them...

Cornish Tipis &amp; Camping, Cornwall
Set around an emerald, spring-fed lake in a former quarry, this family campsite plays second fiddle to nature, with a wild, enchanting feel.

Graig Wen, Snowdonia
On the banks of the Mawddach Estuary and at the foot of Cadair Idris, Graig Wen campsite has arguably the most enviable location in Wales.

Blackberry Wood, Sussex
In the woods of the South Downs, the individual clearings at Blackberry Wood Campsite offer ample space for a tent, a campfire and a few friends.

Ace Hideaways, Highlands
The serenity of this woodland campsite is off-set by local adventure options: canyoning, cliff jumping and white-water rafting on the River Findhorn.

The Almost Wild Campsite, Hertfordshire
Within cycling distance of central London, this small, minimal, riverside campsite is only open on weekends and books out far in advance.

North Lees Campsite, Peak District
It's a short, bluebell-clad stroll from the campsite to Stanage Edge, a rock-climbing Mecca in the heart of the Peak District National Park.

Kingsmead Centre, Devon
The bluebells are always out in force at this family-friendly campsite, with individual woodland pitches as well as their popular meadow spots.
">

  <link rel="canonical" href="https://side-enet.myshopify.com/blogs/news/great-campsites-for-bluebells">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="theme-color" content="#1c1d1d">

  <!-- CSS ================================================== -->
  <link href="//cdn.shopify.com/s/files/1/0341/1840/2179/t/2/assets/timber.scss.css?40" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/0341/1840/2179/t/2/assets/theme.scss.css?40" rel="stylesheet" type="text/css" media="all" />

  <!-- Sections ================================================== -->
  <script>
    window.theme = window.theme || {};
    theme.strings = {
      zoomClose: "Close (Esc)",
      zoomPrev: "Previous (Left arrow key)",
      zoomNext: "Next (Right arrow key)",
      moneyFormat: "${{amount}}",
      addressError: "Error looking up that address",
      addressNoResults: "No results for that address",
      addressQueryLimit: "You have exceeded the Google API usage limit. Consider upgrading to a \u003ca href=\"https:\/\/developers.google.com\/maps\/premium\/usage-limits\"\u003ePremium Plan\u003c\/a\u003e.",
      authError: "There was a problem authenticating your Google Maps account.",
      cartEmpty: "Your cart is currently empty.",
      cartCookie: "Enable cookies to use the shopping cart",
      cartSavings: "You're saving [savings]"
    };
    theme.settings = {
      cartType: "drawer",
      gridType: "collage"
    };
  </script>

  <script src="//cdn.shopify.com/s/files/1/0341/1840/2179/t/2/assets/jquery-2.2.3.min.js?40" type="text/javascript"></script>

  <script src="//cdn.shopify.com/s/files/1/0341/1840/2179/t/2/assets/lazysizes.min.js?40" async="async"></script>

  <script src="//cdn.shopify.com/s/files/1/0341/1840/2179/t/2/assets/theme.js?40" defer="defer"></script>

  <!-- Header hook for plugins ================================================== -->
  <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/34118402179/digital_wallets/dialog">
<link rel="alternate" type="application/atom+xml" title="Feed" href="/blogs/news.atom" />
<script id="shopify-features" type="application/json">{"accessToken":"c8bd8cfc25c3859924d8261260408a33","betas":[],"domain":"side-enet.myshopify.com","predictiveSearch":true,"shopId":34118402179,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "side-enet.myshopify.com";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.theme = {"name":"Brooklyn","id":88689541251,"theme_store_id":730,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":34118402179,"offset":-18000,"reqid":"d150e398-56c2-45d9-8ef2-7190b8cc7478","pageurl":"side-enet.myshopify.com\/blogs\/news\/great-campsites-for-bluebells","s":"articles-384758251651","u":"4328d708ce07","p":"article","rtyp":"article","rid":384758251651};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"article","resourceType":"article","resourceId":384758251651}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2019.11.04.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":34118402179,"isMerchantRequest":true,"themeId":88689541251,"themeCityHash":"2966561232368092340","contentLanguage":"en","currency":"USD"}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;
      (function () {
        if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
          return;
        }
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.snippetStart = new Date().getTime();
        window.BOOMR.snippetExecuted = true;
        window.BOOMR.snippetVersion = 12;
        window.BOOMR.shopId = 34118402179;
        window.BOOMR.themeId = 88689541251;
        window.BOOMR.url =
          "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
        var where = document.currentScript || document.getElementsByTagName("script")[0];
        var parentNode = where.parentNode;
        var promoted = false;
        var LOADER_TIMEOUT = 3000;
        function promote() {
          if (promoted) {
            return;
          }
          var script = document.createElement("script");
          script.id = "boomr-scr-as";
          script.src = window.BOOMR.url;
          script.async = true;
          parentNode.appendChild(script);
          promoted = true;
        }
        function iframeLoader(wasFallback) {
          promoted = true;
          var dom, bootstrap, iframe, iframeStyle;
          var doc = document;
          var win = window;
          window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
          bootstrap = function(parent, scriptId) {
            var script = doc.createElement("script");
            script.id = scriptId || "boomr-if-as";
            script.src = window.BOOMR.url;
            BOOMR_lstart = new Date().getTime();
            parent = parent || doc.body;
            parent.appendChild(script);
          };
          if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
            window.BOOMR.snippetMethod = "s";
            bootstrap(parentNode, "boomr-async");
            return;
          }
          iframe = document.createElement("IFRAME");
          iframe.src = "about:blank";
          iframe.title = "";
          iframe.role = "presentation";
          iframe.loading = "eager";
          iframeStyle = (iframe.frameElement || iframe).style;
          iframeStyle.width = 0;
          iframeStyle.height = 0;
          iframeStyle.border = 0;
          iframeStyle.display = "none";
          parentNode.appendChild(iframe);
          try {
            win = iframe.contentWindow;
            doc = win.document.open();
          } catch (e) {
            dom = document.domain;
            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
            win = iframe.contentWindow;
            doc = win.document.open();
          }
          if (dom) {
            doc._boomrl = function() {
              this.domain = dom;
              bootstrap();
            };
            doc.write("<body onload='document._boomrl();'>");
          } else {
            win._boomrl = function() {
              bootstrap();
            };
            if (win.addEventListener) {
              win.addEventListener("load", win._boomrl, false);
            } else if (win.attachEvent) {
              win.attachEvent("onload", win._boomrl);
            }
          }
          doc.close();
        }
        var link = document.createElement("link");
        if (link.relList &&
          typeof link.relList.supports === "function" &&
          link.relList.supports("preload") &&
          ("as" in link)) {
          window.BOOMR.snippetMethod = "p";
          link.href = window.BOOMR.url;
          link.rel = "preload";
          link.as = "script";
          link.addEventListener("load", promote);
          link.addEventListener("error", function() {
            iframeLoader(true);
          });
          setTimeout(function() {
            if (!promoted) {
              iframeLoader(true);
            }
          }, LOADER_TIMEOUT);
          BOOMR_lstart = new Date().getTime();
          parentNode.appendChild(link);
        } else {
          iframeLoader(false);
        }
        function boomerangSaveLoadTime(e) {
          window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
        }
        if (window.addEventListener) {
          window.addEventListener("load", boomerangSaveLoadTime, false);
        } else if (window.attachEvent) {
          window.attachEvent("onload", boomerangSaveLoadTime);
        }
        if (document.addEventListener) {
          document.addEventListener("onBoomerangLoaded", function(e) {
            e.detail.BOOMR.init({});
            e.detail.BOOMR.t_end = new Date().getTime();
          });
        } else if (document.attachEvent) {
          document.attachEvent("onpropertychange", function(e) {
            if (!e) e=event;
            if (e.propertyName === "onBoomerangLoaded") {
              e.detail.BOOMR.init({});
              e.detail.BOOMR.t_end = new Date().getTime();
            }
          });
        }
      })();
    

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();
      
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"article","resourceType":"article","resourceId":384758251651}
        );
      
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-09875a9a2b286acf534498184c24b199675a6097a941992d0979e5295d2cf9e9.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script>document.addEventListener('DOMContentLoaded', function() {
  const adminBarInjector = new Shopify.AdminBarInjector({
    targetNode: document.body,
    iframeSrc: 'https://side-enet.myshopify.com/admin/bar?action_name=articles&handle=great-campsites-for-bluebells&path=%2Fblogs%2Fnews%2Fgreat-campsites-for-bluebells&storefront_locale=en',
    permanentDomain: 'side-enet.myshopify.com',
  });

  adminBarInjector.init();
});</script>
<script integrity="sha256-7cnivoc1QycC7pcsTGoqslrdfHtmqf/neOuoAKsWhK0=" crossorigin="anonymous" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cdn.shopify.com/s/assets/storefront/load_feature-edc9e2be8735432702ee972c4c6a2ab25add7c7b66a9ffe778eba800ab1684ad.js"></script>
<script integrity="sha256-EYppj7RbseKnaugbP4EJXR4sMs7TPdTpPmQ3i163eNA=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/s/assets/storefront/features-118a698fb45bb1e2a76ae81b3f81095d1e2c32ced33dd4e93e64378b5eb778d0.js" crossorigin="anonymous"></script>
<script integrity="sha256-W/8ErimNjuLry4tbS6aRUsYsqT8I4sd8qv4EeYIpdnY=" crossorigin="anonymous" defer="defer" src="//cdn.shopify.com/s/assets/storefront/bars/admin_bar_injector-5bff04ae298d8ee2ebcb8b5b4ba69152c62ca93f08e2c77caafe047982297676.js"></script>


<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>

  <script src="//cdn.shopify.com/s/files/1/0341/1840/2179/t/2/assets/modernizr.min.js?40" type="text/javascript"></script>

  
  

</head>


<body id="great-campsites-for-bluebells" class="template-article">

  <div id="shopify-section-header" class="shopify-section"><style data-shopify>.header-wrapper .site-nav__link,
  .header-wrapper .site-header__logo a,
  .header-wrapper .site-nav__dropdown-link,
  .header-wrapper .site-nav--has-dropdown > a.nav-focus,
  .header-wrapper .site-nav--has-dropdown.nav-hover > a,
  .header-wrapper .site-nav--has-dropdown:hover > a {
    color: #000000;
  }

  .header-wrapper .site-header__logo a:hover,
  .header-wrapper .site-header__logo a:focus,
  .header-wrapper .site-nav__link:hover,
  .header-wrapper .site-nav__link:focus,
  .header-wrapper .site-nav--has-dropdown a:hover,
  .header-wrapper .site-nav--has-dropdown > a.nav-focus:hover,
  .header-wrapper .site-nav--has-dropdown > a.nav-focus:focus,
  .header-wrapper .site-nav--has-dropdown .site-nav__link:hover,
  .header-wrapper .site-nav--has-dropdown .site-nav__link:focus,
  .header-wrapper .site-nav--has-dropdown.nav-hover > a:hover,
  .header-wrapper .site-nav__dropdown a:focus {
    color: rgba(0, 0, 0, 0.75);
  }

  .header-wrapper .burger-icon,
  .header-wrapper .site-nav--has-dropdown:hover > a:before,
  .header-wrapper .site-nav--has-dropdown > a.nav-focus:before,
  .header-wrapper .site-nav--has-dropdown.nav-hover > a:before {
    background: #000000;
  }

  .header-wrapper .site-nav__link:hover .burger-icon {
    background: rgba(0, 0, 0, 0.75);
  }

  .site-header__logo img {
    max-width: 180px;
  }

  @media screen and (max-width: 768px) {
    .site-header__logo img {
      max-width: 100%;
    }
  }</style><div data-section-id="header" data-section-type="header-section" data-template="article">
  <div id="NavDrawer" class="drawer drawer--left">
      <div class="drawer__inner drawer-left__inner">

    

    <ul class="mobile-nav">
      
        

          <li class="mobile-nav__item">
            <a
              href="/"
              class="mobile-nav__link"
              >
                Home
            </a>
          </li>

        
      
        

          <li class="mobile-nav__item">
            <a
              href="/blogs/news"
              class="mobile-nav__link"
              aria-current="page">
                Blog
            </a>
          </li>

        
      
      
      <li class="mobile-nav__spacer"></li>

      
      
      
        <li class="mobile-nav__item mobile-nav__item--secondary"><a href="/pages/disclaimer">Disclaimer</a></li>
      
        <li class="mobile-nav__item mobile-nav__item--secondary"><a href="/pages/privacy-policy">Privacy Policy</a></li>
      
    </ul>
    <!-- //mobile-nav -->
  </div>


  </div>
  <div class="header-container drawer__header-container">
    <div class="header-wrapper" data-header-wrapper>
      

      <header class="site-header" role="banner" data-transparent-header="true">
        <div class="wrapper">
          <div class="grid--full grid--table">
            <div class="grid__item large--hide large--one-sixth one-quarter">
              <div class="site-nav--open site-nav--mobile">
                <button type="button" class="icon-fallback-text site-nav__link site-nav__link--burger js-drawer-open-button-left" aria-controls="NavDrawer">
                  <span class="burger-icon burger-icon--top"></span>
                  <span class="burger-icon burger-icon--mid"></span>
                  <span class="burger-icon burger-icon--bottom"></span>
                  <span class="fallback-text">Site navigation</span>
                </button>
              </div>
            </div>
            <div class="grid__item large--one-third medium-down--one-half">
              
              
                <div class="h1 site-header__logo large--left" itemscope itemtype="http://schema.org/Organization">
              
                

                <a href="/" itemprop="url" class="site-header__logo-link">
                  
                    <img class="site-header__logo-image" src="//cdn.shopify.com/s/files/1/0341/1840/2179/files/ce24ceda-03d1-415f-8f55-4ab4f0bb556e_200x200_2772f331-4e11-45ad-b567-e4fc61eef2aa_180x.png?v=1582130854" srcset="//cdn.shopify.com/s/files/1/0341/1840/2179/files/ce24ceda-03d1-415f-8f55-4ab4f0bb556e_200x200_2772f331-4e11-45ad-b567-e4fc61eef2aa_180x.png?v=1582130854 1x, //cdn.shopify.com/s/files/1/0341/1840/2179/files/ce24ceda-03d1-415f-8f55-4ab4f0bb556e_200x200_2772f331-4e11-45ad-b567-e4fc61eef2aa_180x@2x.png?v=1582130854 2x" alt="Side-eNet" itemprop="logo">

                    
                  
                </a>
              
                </div>
              
            </div>
            <nav class="grid__item large--two-thirds large--text-right medium-down--hide" role="navigation">
              
              <!-- begin site-nav -->
              <ul class="site-nav" id="AccessibleNav">
                
                  
                    <li class="site-nav__item">
                      <a
                        href="/"
                        class="site-nav__link"
                        data-meganav-type="child"
                        >
                          Home
                      </a>
                    </li>
                  
                
                  
                    <li class="site-nav__item site-nav--active">
                      <a
                        href="/blogs/news"
                        class="site-nav__link"
                        data-meganav-type="child"
                        aria-current="page">
                          Blog
                      </a>
                    </li>
                  
                

                
                

                
                  
                  
                  <li class="site-nav__item site-nav__item--compressed">
                    <a href="/search" class="site-nav__link site-nav__link--icon js-toggle-search-modal" data-mfp-src="#SearchModal">
                      <span class="icon-fallback-text">
                        <span class="icon icon-search" aria-hidden="true"></span>
                        <span class="fallback-text">Search</span>
                      </span>
                    </a>
                  </li>
                

                <li class="site-nav__item site-nav__item--compressed">
                  <a href="/cart" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-button-right" aria-controls="CartDrawer">
                    <span class="icon-fallback-text">
                      <span class="icon icon-cart" aria-hidden="true"></span>
                      <span class="fallback-text">Cart</span>
                    </span>
                    <span class="cart-link__bubble"></span>
                  </a>
                </li>

              </ul>
              <!-- //site-nav -->
            </nav>
            <div class="grid__item large--hide one-quarter">
              <div class="site-nav--mobile text-right">
                <a href="/cart" class="site-nav__link cart-link js-drawer-open-button-right" aria-controls="CartDrawer">
                  <span class="icon-fallback-text">
                    <span class="icon icon-cart" aria-hidden="true"></span>
                    <span class="fallback-text">Cart</span>
                  </span>
                  <span class="cart-link__bubble"></span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </header>
    </div>
  </div>
</div>




</div>

  <div id="CartDrawer" class="drawer drawer--right drawer--has-fixed-footer">
    <div class="drawer__fixed-header">
      <div class="drawer__header">
        <div class="drawer__title">Your cart</div>
        <div class="drawer__close">
          <button type="button" class="icon-fallback-text drawer__close-button js-drawer-close">
            <span class="icon icon-x" aria-hidden="true"></span>
            <span class="fallback-text">Close Cart</span>
          </button>
        </div>
      </div>
    </div>
    <div class="drawer__inner">
      <div id="CartContainer" class="drawer__cart"></div>
    </div>
  </div>

  <div id="PageContainer" class="page-container">
    <main class="main-content" role="main">
      
        <div class="wrapper">
      
        <!-- /templates/article.liquid -->


<div id="shopify-section-article-template" class="shopify-section"><!-- /templates/article.liquid -->




<div class="grid">
  <article class="grid__item large--five-sixths push--large--one-twelfth article" itemscope itemtype="http://schema.org/Article">

    <header class="section-header text-center">
      <h1>Great Campsites for Bluebells</h1>
      <hr class="hr--small">
      <p>
        <span class="date"><time datetime="2020-02-19T11:28:00Z">February 19, 2020</time></span>
      </p>
    </header>

    <div class="grid">
      <div class="grid__item large--four-fifths push--large--one-tenth">

        <div class="rte rte--indented-images" itemprop="articleBody">
          <h1>Woodland Camping: 7 Great Campsites for Bluebells</h1>
<div class="post_text">
<p>Have you noticed? Spring is here and the very first of the bluebells are starting to appear. And, with the arrival of the season, campsites across the country are starting to open up after their winter's slumber. If you'll be taking a trip down to the woods this spring, you'll be sure to find a carpet of bluebells near most<span> </span><a href="https://coolcamping.com/campsites/woodland">woodland camping</a><span> </span>spots. And, the older the woodland, the more bluebells you are likely to find. Did you know, for example, that bluebells are actually an indicator of ancient woodland? Bluebells are often used in combination with other species as a clue that a wood is ancient. Regardless of how they got there, though, bluebells in abundance are one of the UK's greatest woodland spectacles. Here's a handful of spots where happy campers can best enjoy them...</p>
<br><img src="https://assets.bedful.com/images/1591c59a13c365b2c740c0c16a309fddab34cd27/large/image.jpg" alt="Cornish Tipi Holidays and Camping" class="full"><br>
<h2>Cornish Tipis &amp; Camping, Cornwall</h2>
<div>Set around an emerald, spring-fed lake in a former quarry, this family campsite plays second fiddle to nature, with a wild, enchanting feel.</div>
<br><br><img src="https://assets.bedful.com/images/589f8e9b2f274f28eac63c5c6561f3ad7a9c2055/large/image.jpg" alt="Graig Wen Campsite, Wales" class="full"><br>
<h2>Graig Wen, Snowdonia</h2>
<div>On the banks of the Mawddach Estuary and at the foot of Cadair Idris, Graig Wen campsite has arguably the most enviable location in Wales.</div>
<br><img src="https://assets.bedful.com/images/26a20e301be4be95f7554fd66b44f529767a5880/large/image.jpg" alt="Woodland pitch at Blackberry Wood Campsite" class="full"><br>
<h2>Blackberry Wood, Sussex</h2>
<div>In the woods of the South Downs, the individual clearings at Blackberry Wood Campsite offer ample space for a tent, a campfire and a few friends.</div>
<br><br><img src="https://assets.bedful.com/images/a3fed57fa5799b48d9b6aed24b273603e86dc3c7/large/image.jpg" alt="Ace Hideaways camping" class="full"><br>
<h2>Ace Hideaways, Highlands</h2>
<div>The serenity of this woodland campsite is off-set by local adventure options: canyoning, cliff jumping and white-water rafting on the River Findhorn.</div>
<br><br><img src="https://assets.bedful.com/images/a160a84ec89188f53942ab8ac0c90177975d8b08/large/image.jpg" alt="Lee Valley Almost Wild Campsite" class="full"><br>
<h2>The Almost Wild Campsite, Hertfordshire</h2>
<div>Within cycling distance of central London, this small, minimal, riverside campsite is only open on weekends and books out far in advance.</div>
<br><br><img src="https://assets.bedful.com/images/6d5618196b562c53525bad8e024b4c34563f6cc5/large/image.jpg" alt="North Lees Campsite in the Peak District" class="full"><br>
<h2>North Lees Campsite, Peak District</h2>
<div>It's a short, bluebell-clad stroll from the campsite to Stanage Edge, a rock-climbing Mecca in the heart of the Peak District National Park.</div>
<br><br><img src="https://assets.bedful.com/images/e95ae56f2fc4fab399fc4d5f6c31582603c49ad7/large/image.jpg" alt="Kingsmead Centre Campsite in Devon" class="full"><br>
<h2>Kingsmead Centre, Devon</h2>
<div>The bluebells are always out in force at this family-friendly campsite, with individual woodland pitches as well as their popular meadow spots.</div>
</div>
        </div>

        <ul class="tags tags--article inline-list">
          <!-- /snippets/tags-article.liquid -->


        </ul>

        
          <!-- /snippets/social-sharing.liquid -->


<div class="social-sharing clean">

  
    <a target="_blank" href="//www.facebook.com/sharer.php?u=https://side-enet.myshopify.com/blogs/news/great-campsites-for-bluebells" class="share-facebook" title="Share on Facebook">
      <span class="icon icon-facebook" aria-hidden="true"></span>
      <span class="share-title" aria-hidden="true">Share</span>
      <span class="visually-hidden">Share on Facebook</span>
    </a>
  

  
    <a target="_blank" href="//twitter.com/share?text=Great%20Campsites%20for%20Bluebells&amp;url=https://side-enet.myshopify.com/blogs/news/great-campsites-for-bluebells" class="share-twitter" title="Tweet on Twitter">
      <span class="icon icon-twitter" aria-hidden="true"></span>
      <span class="share-title" aria-hidden="true">Tweet</span>
      <span class="visually-hidden">Tweet on Twitter</span>
    </a>
  

  
    <a target="_blank" href="//pinterest.com/pin/create/button/?url=https://side-enet.myshopify.com/blogs/news/great-campsites-for-bluebells&amp;media=//cdn.shopify.com/s/files/1/0341/1840/2179/articles/large_1024x1024.jpg?v=1582129745&amp;description=Great%20Campsites%20for%20Bluebells" class="share-pinterest" title="Pin on Pinterest">
      <span class="icon icon-pinterest" aria-hidden="true"></span>
      <span class="share-title" aria-hidden="true">Pin it</span>
      <span class="visually-hidden">Pin on Pinterest</span>
    </a>
  

</div>

        

        

      </div>
    </div>

  </article>
</div>

<hr class="hr--medium hr--clear">
<div class="text-center">
  <a href="/blogs/news" class="return-link">&larr; Back to News</a>
</div>




</div>
      
        </div>
      
    </main>

    <hr class="hr--large">

    <div id="shopify-section-footer" class="shopify-section"><footer class="site-footer small--text-center" role="contentinfo">
  <div class="wrapper">

    <div class="grid-uniform">

      
      

      
      

      
      
      

      
      

      

      
        <div class="grid__item one-third small--one-whole">
          <ul class="no-bullets site-footer__linklist">
            

      
      

              <li><a href="/pages/disclaimer">Disclaimer</a></li>

            

      
      

              <li><a href="/pages/privacy-policy">Privacy Policy</a></li>

            
          </ul>
        </div>
      

      
        <div class="grid__item one-third small--one-whole">
            <ul class="no-bullets social-icons">
              
                <li>
                  <a href="https://www.facebook.com/shopify" title="Side-eNet on Facebook">
                    <span class="icon icon-facebook" aria-hidden="true"></span>
                    Facebook
                  </a>
                </li>
              
              
                <li>
                  <a href="https://twitter.com/shopify" title="Side-eNet on Twitter">
                    <span class="icon icon-twitter" aria-hidden="true"></span>
                    Twitter
                  </a>
                </li>
              
              
              
                <li>
                  <a href="https://instagram.com/shopify" title="Side-eNet on Instagram">
                    <span class="icon icon-instagram" aria-hidden="true"></span>
                    Instagram
                  </a>
                </li>
              
              
              
              
              
                <li>
                  <a href="https://www.youtube.com/user/shopify" title="Side-eNet on YouTube">
                    <span class="icon icon-youtube" aria-hidden="true"></span>
                    YouTube
                  </a>
                </li>
              
              
              
            </ul>
        </div>
      

      <div class="grid__item one-third small--one-whole large--text-right">
        <p>&copy; 2020, <a href="/" title="">Side-eNet</a><br><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a></p></div>
    </div>

  </div>
</footer>




</div>

  </div>

  
  <script>
    
  </script>

  
  
    <!-- /snippets/ajax-cart-template.liquid -->

  <script id="CartTemplate" type="text/template">
  
    <form action="/cart" method="post" novalidate class="cart ajaxcart">
      <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer">
        {{#items}}
        <div class="ajaxcart__product">
          <div class="ajaxcart__row" data-line="{{line}}">
            <div class="grid">
              <div class="grid__item one-quarter">
                <a href="{{url}}" class="ajaxcart__product-image"><img src="{{img}}" alt="{{name}}"></a>
              </div>
              <div class="grid__item three-quarters">
                <div class="ajaxcart__product-name--wrapper">
                  <a href="{{url}}" class="ajaxcart__product-name">{{{name}}}</a>
                  {{#if variation}}
                    <span class="ajaxcart__product-meta">{{variation}}</span>
                  {{/if}}
                  {{#properties}}
                    {{#each this}}
                      {{#if this}}
                        <span class="ajaxcart__product-meta">{{@key}}: {{this}}</span>
                      {{/if}}
                    {{/each}}
                  {{/properties}}
                </div>

                <div class="grid--full">
                  <div class="grid__item one-half">
                    <div class="ajaxcart__qty">
                      <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="{{key}}" data-qty="{{itemMinus}}" data-line="{{line}}" aria-label="Reduce item quantity by one">
                        <span class="icon icon-minus" aria-hidden="true"></span>
                        <span class="fallback-text" aria-hidden="true">&minus;</span>
                      </button>
                      <input type="text" name="updates[]" class="ajaxcart__qty-num" value="{{itemQty}}" min="0" data-id="{{key}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                      <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}" aria-label="Increase item quantity by one">
                        <span class="icon icon-plus" aria-hidden="true"></span>
                        <span class="fallback-text" aria-hidden="true">+</span>
                      </button>
                    </div>
                  </div>
                  <div class="grid__item one-half text-right">
                    {{#if discountsApplied}}
                      <span class="visually-hidden">Regular price</span>
                      <del class="ajaxcart__price">{{{price}}}</del>
                      <span class="visually-hidden">Sale price</span>
                      <span class="ajaxcart__price">{{{discountedPrice}}}</span>
                    {{else}}
                      <span class="ajaxcart__price">{{{price}}}</span>
                    {{/if}}
                    {{#if unitPrice}}
                      <span class="visually-hidden">Unit price</span>
                      <span class="cart__unit-price">
                        


                        <span>{{{ unitPrice.price }}}</span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span>{{#if unitPrice.addRefererenceValue }}{{{ unitPrice.reference_value }}}{{/if}}{{{ unitPrice.reference_unit }}}
                      </span>
                    {{/if}}
                  </div>
                </div>
                {{#if discountsApplied}}
                  <div class="grid--full">
                    <div class="grid__item text-right">
                      <ul class="order-discount order-discount--list order-discount--title order-discount--ajax-cart order-discount--ajax-cart-list" aria-label="Discount">
                        {{#each discounts}}
                          <li class="order-discount__item">
                            <span class="icon icon-saletag" aria-hidden="true"></span>{{ this.discount_application.title }} (-{{{ this.formattedAmount }}})
                          </li>
                        {{/each}}
                      </ul>
                    </div>
                  </div>
                {{/if}}
              </div>
            </div>
          </div>
        </div>
        {{/items}}

        
      </div>
      <div class="ajaxcart__footer ajaxcart__footer--fixed">
        <div class="grid--full">
          {{#if cartDiscountsApplied}}
            {{#each cartDiscounts}}
              <div class="grid__item two-thirds ajaxcart__discounts">
                <span class="order-discount order-discount--title order-discount--ajax-cart">
                  <span class="icon icon-saletag" aria-hidden="true"></span><span class="visually-hidden">Discount:</span>{{ this.title }}
                </span>
              </div>
              <div class="grid__item one-third text-right">
                <span class="ajaxcart__price">-{{{ this.formattedAmount }}}</span>
              </div>
            {{/each}}
          {{/if}}
          <div class="grid__item two-thirds">
            <p class="ajaxcart__subtotal">Subtotal</p>
          </div>
          <div class="grid__item one-third text-right">
            <p class="ajaxcart__subtotal">{{{totalPrice}}}</p>
          </div>
        </div>

        <p class="ajaxcart__policies">
Taxes and shipping calculated at checkout

        </p>
        <button type="submit" class="btn--secondary btn--full cart__checkout" name="checkout">
          Check Out <span class="icon icon-arrow-right" aria-hidden="true"></span>
        </button>
      </div>
    </form>
  
  </script>
  <script id="AjaxQty" type="text/template">
  
    <div class="ajaxcart__qty">
      <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-id="{{key}}" data-qty="{{itemMinus}}" aria-label="Reduce item quantity by one">
        <span class="icon icon-minus" aria-hidden="true"></span>
        <span class="fallback-text" aria-hidden="true">&minus;</span>
      </button>
      <input type="text" class="ajaxcart__qty-num" value="{{itemQty}}" min="0" data-id="{{key}}" aria-label="quantity" pattern="[0-9]*">
      <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-id="{{key}}" data-qty="{{itemAdd}}" aria-label="Increase item quantity by one">
        <span class="icon icon-plus" aria-hidden="true"></span>
        <span class="fallback-text" aria-hidden="true">+</span>
      </button>
    </div>
  
  </script>
  <script id="JsQty" type="text/template">
  
    <div class="js-qty">
      <button type="button" class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-id="{{key}}" data-qty="{{itemMinus}}" aria-label="Reduce item quantity by one">
        <span class="icon icon-minus" aria-hidden="true"></span>
        <span class="fallback-text" aria-hidden="true">&minus;</span>
      </button>
      <input type="text" class="js-qty__num" value="{{itemQty}}" min="1" data-id="{{key}}" aria-label="quantity" pattern="[0-9]*" name="{{inputName}}" id="{{inputId}}">
      <button type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-id="{{key}}" data-qty="{{itemAdd}}" aria-label="Increase item quantity by one">
        <span class="icon icon-plus" aria-hidden="true"></span>
        <span class="fallback-text" aria-hidden="true">+</span>
      </button>
    </div>
  
  </script>

  

  

  <div id="SearchModal" class="mfp-hide">
    <!-- /snippets/search-bar.liquid -->





<form action="/search" method="get" class="input-group search-bar search-bar--modal" role="search">
  
  <input type="search" name="q" value="" placeholder="Search our store" class="input-group-field" aria-label="Search our store">
  <span class="input-group-btn">
    <button type="submit" class="btn icon-fallback-text">
      <span class="icon icon-search" aria-hidden="true"></span>
      <span class="fallback-text">Search</span>
    </button>
  </span>
</form>

  </div>
  <ul hidden>
    <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
    <li id="a11y-selection-message">Press the space key then arrow keys to make a selection.</li>
    <li id="a11y-slideshow-info">Use left/right arrows to navigate the slideshow or swipe left/right if using a mobile device</li>
  </ul>
</body>
</html>
