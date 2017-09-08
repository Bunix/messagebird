﻿<!DOCTYPE html>
<html lang="fr-be">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>RCS Messaging API - MessageBird</title>
        <meta name="description" content="We partnered up with Google to create an API that allows you and your business to use RCS to engage your customers and build meaningful experiences.">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="..\assets\images\apple-touch-icon.png">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="..\assets\images\favicon-16x16.png" sizes="16x16">
        <link rel="mask-icon" href="..\assets\images\pinned.svg" color="#2481D7">

                    <link href="..\assets\images\favicon.ico" rel="shortcut icon" type="image/x-icon">
                <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="5mhCZbZKlHXFNaMdF_7vvg6FWHnPDWdPFlTDP-TbpHprorQ4fuHXnPLKmwrlKUVwMJS8Ls4BrMTgizBYWjY9vQ==">

        <meta name="apple-mobile-web-app-title" content="MessageBird">
        <meta name="theme-color" content="#e5f0fa">
        <meta name="application-name" content="&nbsp;">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">

                         <link rel="canonical" href="google-rcs.htm">
        	<link rel="alternate" hreflang="nl-nl" href="..\nl\google-rcs.htm">
        	<link rel="alternate" hreflang="en-gb" href="..\en-gb\google-rcs.htm">
        	<link rel="alternate" hreflang="es-es" href="..\es-es\google-rcs.htm">
        	<link rel="alternate" hreflang="fr-fr" href="..\fr-fr\google-rcs.htm">
        	<link rel="alternate" hreflang="de-de" href="..\de-de\google-rcs.htm">
        	<link rel="alternate" hreflang="en-us" href="..\en-us\google-rcs.htm">
        	<link rel="alternate" hreflang="nl-be" href="..\nl-be\google-rcs.htm">
        	<link rel="alternate" hreflang="fr-be" href="google-rcs.htm">
        	<link rel="alternate" hreflang="x-default" href="..\en\google-rcs.htm">
        	<link rel="alternate" hreflang="en-jm" href="..\en-jm\google-rcs.htm">
        	<link rel="alternate" hreflang="en-bm" href="..\en-bm\google-rcs.htm">
        	<link rel="alternate" hreflang="en-ie" href="..\en-ie\google-rcs.htm">
        	<link rel="alternate" hreflang="en-gu" href="..\en-gu\google-rcs.htm">
        	<link rel="alternate" hreflang="en-gy" href="..\en-gy\google-rcs.htm">
        	<link rel="alternate" hreflang="en-gd" href="..\en-gd\google-rcs.htm">
        	<link rel="alternate" hreflang="en-au" href="..\en-au\google-rcs.htm">
        	<link rel="alternate" hreflang="en-bs" href="..\en-bs\google-rcs.htm">
        	<link rel="alternate" hreflang="en-vg" href="..\en-vg\google-rcs.htm">
        	<link rel="alternate" hreflang="en-tt" href="..\en-tt\google-rcs.htm">
        	<link rel="alternate" hreflang="en-nz" href="..\en-nz\google-rcs.htm">
        	<link rel="alternate" hreflang="en-bz" href="..\en-bz\google-rcs.htm">
        	<link rel="alternate" hreflang="en-sg" href="..\en-sg\google-rcs.htm">
        	<link rel="alternate" hreflang="en-ky" href="..\en-ky\google-rcs.htm">
        	<link rel="alternate" hreflang="en-gh" href="..\en-gh\google-rcs.htm">
        	<link rel="alternate" hreflang="en-ca" href="..\en-ca\google-rcs.htm">
        	<link rel="alternate" hreflang="en-ng" href="..\en-ng\google-rcs.htm">
        	<link rel="alternate" hreflang="en-pr" href="..\en-pr\google-rcs.htm">
        	<link rel="alternate" hreflang="en-hk" href="..\en-hk\google-rcs.htm">
        	<link rel="alternate" hreflang="en-gi" href="..\en-gi\google-rcs.htm">
        	<link rel="alternate" hreflang="en-ke" href="..\en-ke\google-rcs.htm">
        	<link rel="alternate" hreflang="en-ug" href="..\en-ug\google-rcs.htm">
        	<link rel="alternate" hreflang="en-zw" href="..\en-zw\google-rcs.htm">
        	<link rel="alternate" hreflang="en-je" href="..\en-je\google-rcs.htm">
        	<link rel="alternate" hreflang="en-im" href="..\en-im\google-rcs.htm">
        	<link rel="alternate" hreflang="en-gg" href="..\en-gg\google-rcs.htm">
    
    <!-- Robots -->
	<meta name='robots' content='index,follow'>
    <!-- Robots -->

                <link href="https://cdn-gc.messagebird.com/assets/css/all-00ba6b10fc9bc76e6585b1a45017bcfe.css" rel="stylesheet">
<link href="https://cdn-gc.messagebird.com/assets/css/core-5d9e5b7a2660977d0292193c7847b101.css" rel="stylesheet">
        <!--[if lte IE 8]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Robots Overwrite -->
                <!-- Robots Overwrite -->

        <meta property="og:image" content="https://www.messagebird.com/assets/images/og/messagebird.gif">
        <meta property="og:image:width" content="600">
        <meta property="og:image:height" content="315">

        <meta property="og:title" content="RCS Messaging API">
        <meta property="og:description" content="We partnered up with Google to create an API that allows you and your business to use RCS to engage your customers and build meaningful experiences.">
        <meta property="og:url" content="https://www.messagebird.com/fr-be/google-rcs">
        <meta property="og:site_name" content="MessageBird">
        <meta property="og:locale" content="fr-be">

        <!-- Twitter Card -->

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@messagebird">
        <meta name="twitter:title" content="RCS Messaging API">
        <meta name="twitter:description" content="We partnered up with Google to create an API that allows you and your business to use RCS to engage your customers and build meaningful experiences.">
        

        <script type="text/javascript">window.page = 'rcs';</script>

        <script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-34056529-1', {'cookieDomain': '.messagebird.com'});
ga('set', 'User Type', 'Guest');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script><script type="text/javascript">
            !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";
            analytics.load("I2Py1njgrCIuI8Q7kTZba08d8knyzK1k");
            }}();
        </script><script type="text/javascript">analytics.page("", {route: "app/pages/google_rcs"});</script><script type="text/javascript">
            var _user_id = "";
            var _session_id = "d0c3b992f1766459948e9d33f8d2e810";
            var _sift = window._sift = window._sift || [];

            _sift.push(["_setAccount", "ed76f300ec"]);
            _sift.push(["_setUserId", _user_id]);
            _sift.push(["_setSessionId", _session_id]);
            _sift.push(["_trackPageview"]);

            (function() {
                function ls() {
                    var e = document.createElement("script");
                    var s = document.getElementsByTagName("script")[0];
                    e.src = "https://cdn.siftscience.com/s.js";
                    s.parentNode.insertBefore(e, s);
                }
                if (window.attachEvent) {
                    window.attachEvent("onload", ls);
                } else {
                    window.addEventListener("load", ls, false);
                }
               })();
        </script><script type="text/javascript"></script>
    </head>
    <body class="rcs">
        <div class="body-background ">

            
            
            <!-- Main header -->


    <header class="header ">
    <nav class="header-top navbar navbar-default navbar-static-top hidden-xs" id="topbar">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li class="header-top-item">
                    <a class="header-top-link header-top-locale js-open-locale-modal" href="#" data-toggle="modal" data-target="#select-language">

                                                    <img class="header-top-locale-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/BE_belgium.png">
                        
                                                                                                                                                                                                                                                                                                                                                                                                                                Belgique (Français)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span class="header-top-locale-explanation">(Changer la langue)</span>
                    </a>
                </li>
                <li class="header-top-item" id="telephone">
                    <a class="header-top-link header-top-phone" id="phonenumber" href="contact.htm">
                        <i class="fa fa-phone"></i>
                                            </a>
                </li>
                <li class="header-top-item">
                    <a href="https://dashboard.messagebird.com/app/fr-be/login/" class="header-top-link btn-logout hidden-xs">Connexion</a>
                </li>
                <li class="header-top-item header-cta">
                    <a href="https://dashboard.messagebird.com/app/fr-be/sign-up/" class="header-top-link btn-cta hidden-xs">Inscription</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="header-main" id="subbar">
      <div class="container">

        
          <div class="navbar-header logo hidden-xs">
              <a href="index.htm" class="pull-left">
                                        <img class="header-logo" src="https://cdn-gc.messagebird.com/assets/images/logo.svg" id="logo" alt="MessageBird" height="32">
                                </a>
          </div>

          <div class="row visible-xs">
              <ul class="nav-mobile col-xs-12 text-right">
                  <div class="pull-left">
                      <a href="index.htm">
                                                        <img class="header-logo-glyph" style="display:block!important" src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" alt="MessageBird" height="20">
                                                </a>
                  </div>
                  <li class="dropdown products">
                      <a href="#" class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Produits                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="mobileProducts">

            <ul class="container">
                <li class="clearfix">
                    <a href="/fr-be/sms-gateway">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/sms-gateway.svg" alt="MessageBird - SMS Gateway">
                        </div>
                        SMS Gateway                    </a>
                </li>
                                <li class="clearfix">
                    <a href="sms-vocal.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/voice.svg" class="icon-fix" alt="MessageBird - Text to Speech">
                        </div>
                        Voice                    </a>
                </li>
                <li class="clearfix">
                    <a href="chat-api.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/chat-gateway.svg" alt="MessageBird - Chat Gateway">
                        </div>
                        Chat API                    </a>
                </li>
                <li class="clearfix">
                    <a href="numero-court.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/shortcode.svg" alt="MessageBird - Short Code">
                        </div>
                        Numéro court                    </a>
                </li>
                <li class="clearfix">
                    <a href="grands-comptes.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/wholesale.svg" alt="MessageBird - Large Accounts">
                        </div>
                        Grands comptes                    </a>
                </li>
                <li class="clearfix">
                    <a href="sms-par-mail.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/mail2sms.svg" alt="MessageBird - Email to SMS">
                        </div>
                        SMS par mail                    </a>
                </li>
                <li class="clearfix">
                    <a href="/fr-be/virtual-mobile-number">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/vmn.svg" alt="MessageBird - Virtual Mobile Number">
                        </div>
                        Numéro                    </a>
                </li>
                <li class="clearfix">
                    <a href="verify.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/verify.svg" alt="MessageBird - Verify">
                        </div>
                        Verify                    </a>
                </li>
                                <li class="clearfix">
                    <a href="lookup.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/lookup.svg" alt="MessageBird - Lookup">
                        </div>
                        Lookup                    </a>
                </li>


            </ul>

            <h3 class="dropdown-products-sub">Secteurs</h3>

            <ul class="container">


                <li class="clearfix">
                    <a href="secteur-de-la-sante.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/healthcare.svg" alt="MessageBird - Healthcare">
                        </div>
                        Secteur de la santé                    </a>
                </li>

                <li class="clearfix">
                    <a href="transport.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/transport.svg" alt="MessageBird - Transport">
                        </div>
                        Transport & Logistique                    </a>
                </li>

                <li class="clearfix">
                    <a href="commerce-de-detail.htm">
                        <div class="icon-product pull-left">
                            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/retail.svg" alt="MessageBird - Retail">
                        </div>
                        Commerce de détail                    </a>
                </li>
            </ul>
    </div>
                      </div>
                  </li>
                  <li>
                      <a class="header-main-link" href="tarifs.htm">
                          <span class="link-title">
                              Tarifs                          </span>
                      </a>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Plus                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          <div class="mobile-about animated zoomIn" role="menu" aria-labelledby="mobileAbout">

        <ul class="container" role="menu">
            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/app/fr-be/login">
                  Connexion                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="a-propos-de-nous.htm">
                  À propos                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="/fr-be/careers" target="_blank">
                      Carrières                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="securite.htm">
                    Sécurité                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="customers.htm">
                    Clients                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank">
                    Statut système                </a>
            </li>

            <li role="presentation">
                <a role="menuitem" tabindex="-1" href="contact.htm">
                    Contact                </a>
            </li>
        </ul>
</div>
                      </div>
                  </li>
              </ul>
          </div>

          <div class="visible-md visible-lg navbar-collapse collapse navigation" id="subbar-navigation">

              
              <ul class="nav navbar-nav navbar-right">

                <li class="dropdown js-dropdown-toggle ">
                      <a class="header-main-link">
                          <span class="link-title">
                              Produits                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu products">
                          
<div class="dropdown-products animated zoomIn" role="menu" aria-labelledby="productMenu">
    <div class="dropdown-content new">
    
<div class="row products-new">
    <div class="col-md-products-5">

        <ul>
            <li>
                <a href="/fr-be/sms-gateway" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/sms.svg">
                    </div>
                    <h4>SMS Gateway</h4>
                    <p>La plateforme de messagerie la plus rapide et fiable du marché.</p>
                </a>
            </li>
            <li>
                <a href="sms-vocal.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/voice.svg">
                    </div>
                    <h4>Messages Voice</h4>
                    <p>Convertissez votre texte en message vocal via notre plateforme.</p>
                </a>
            </li>
            <li>
                <a href="/fr-be/virtual-mobile-number" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/vmn.svg">
                    </div>
                    <h4>Numéros</h4>
                    <p>Restez accessible à tout moment sur des numéros locaux.</p>
                </a>
            </li>
        </ul>

    </div>

    <div class="col-md-products-5">
        <ul>
            <li>
                <a href="verify.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/verify.svg">
                    </div>
                    <h4>Verify</h4>
                    <p>Renforcez votre sécurité avec le One Time Password.</p>
                </a>
            </li>
            <li>
                <a href="chat-api.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/chat.svg">
                    </div>
                    <h4>Chat</h4>
                    <p>Contactez vos clients sur leurs plateformes de chat préférées.</p>
                </a>
            </li>
            <li>
                <a href="numero-court.htm" class="clearfix" role="menuitem">
                    <div>
                        <img src="https://cdn-gc.messagebird.com/assets/images/icons/products/shortcode.svg">
                    </div>
                    <h4>Numéro court</h4>
                    <p>Disposez d'un numéro facile à retenir pour vos clients.</p>
                </a>
            </li>
        </ul>
    </div>
</div>

    </div>
</div>                      </div>
                  </li>

                  <li>
                    <a class="header-main-link" href="https://developers.messagebird.com" target="_blank">
                        <span class="link-title">
                            Développeurs                        </span>
                    </a>
                  </li>

                  <li class="">
                    <a class="header-main-link" href="tarifs.htm">
                        <span class="link-title">
                            Tarifs                        </span>
                    </a>
                  </li>

                  <li class="dropdown js-dropdown-toggle ">
                      <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <span class="link-title">
                              Plus                          </span>
                          <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu mini">
                          

<ul class="animated zoomIn" role="menu" aria-labelledby="aboutMenu">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="a-propos-de-nous.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;about&quot;});">
          À propos        </a>
    </li>

        <li role="presentation">
        <a role="menuitem" tabindex="-1" href="customers.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;customers&quot;});">
          Clients        </a>
    </li>
    

    <li role="presentation">
        <a role="menuitem" tabindex="-1" target="_blank" href="http://blog.messagebird.com" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;blog&quot;});">
          Blog        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="/fr-be/careers" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;careers&quot;});">
              Carrières        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="securite.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;security&quot;});">
            Sécurité        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="http://status.messagebird.com" target="_blank" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;systemStatus&quot;});">
            Statut système        </a>
    </li>

    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="contact.htm" onclick="analytics.track('web:navMiscPressed', {&quot;page&quot;:&quot;contact&quot;});">
            Contact        </a>
    </li>
</ul>                      </div>
                  </li>

                  <li class="">
                      <a class="header-main-link" href="http://support.messagebird.com/hc/en-us/">
                          <span class="link-title">
                              Aide                          </span>
                      </a>
                  </li>

              </ul>
          </div>
        </div>
    </nav>
</header>

<!--[if lte IE 8]>
<div class="upgrade-browser">
    <div class="upgrade-browser-container">
        Nous ne prenons plus en charge activement le navigateur que vous utilisez pour visionner notre site web. Pour consulter et utiliser facilement notre site, <a href="http://browsehappy.com/" target="_blank">veuillez télécharger une version récente du navigateur</a>. Vous pouvez également nous appeler ou <a href="mailto:support@messagebird.com" target="_blank">envoyer un e-mail avec vos questions</a>.    </div>
    <a href="#" onClick="this.parentNode.style.display = 'none'; return;">Close [x]</a>
</div>
<![endif]-->


<!-- Sticky header -->



<nav class="header-sticky">
    <div class="header-sticky-wrapper">
        <div class="container">

            <div class="header-sticky-cta">
                <a class="btn btn-cta" href="https://dashboard.messagebird.com/app/fr-be/sign-up/">Lancez-vous</a>
            </div>

            <div class="navbar-header logo">
                <a href="index.htm" class="pull-left">
                    <img class="header-logo" src="https://cdn-gc.messagebird.com/assets/images/logo.svg" onerror="this.onerror=null;this.src='https://cdn-gc.messagebird.com/assets/images/logo/logo.png'" id="logo" alt="MessageBird" height="32">
                    <img class="header-logo-glyph" src="https://cdn-gc.messagebird.com/assets/images/glyph.svg" onerror="this.onerror=null;this.src='https://cdn-gc.messagebird.com/assets/images/logo/logo.png'" id="logo" alt="MessageBird" height="32">
                </a>
            </div>

            <div class="navbar-collapse collapse sticky navigation" id="subbar-navigation">

                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="header-main-link" href="tarifs.htm">Tarifs</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="/fr-be/sms-gateway">SMS</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="chat-api.htm">Chat</a>
                    </li>
                    <li>
                        <a class="header-main-link" href="sms-vocal.htm">Voice</a>
                    </li>
                    <li class="dropdown dark sub-products-open ">
                        <a class="header-main-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <span class="link-title">
                                Autres produits                            </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu mini">
                            <ul class="animated zoomIn sub-products" role="menu" aria-labelledby="productsSticky">
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="numero-court.htm">
            Numéro court        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="sms-par-mail.htm">
            SMS par mail        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="numeros.htm">
            Numéros        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="verify.htm">
            Verify        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="one-time-password.htm">
            One Time Password        </a>
    </li>
    <li role="presentation">
        <a role="menuitem" tabindex="-1" href="lookup.htm">
            Lookup        </a>
    </li>
</ul>
                        </div>
                    </li>

                    <li class="">
                        <a href="https://dashboard.messagebird.com/app/fr-be/sign-up/" class="btn btn-cta">Lancez-vous</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>


<div class="header-filler"></div>

<div class="veil"></div>

<!-- Search Modal -->

<!-- Language Modal -->

<div class="locale-modal modal fade" id="select-language" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="close">
        <a href="#" data-dismiss="modal">
            <img src="https://cdn-gc.messagebird.com/assets/images/illustrations/icons/utility/close.svg" alt="Close">
        </a>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body clearfix">

                <img class="locale-modal-map" src="https://cdn-gc.messagebird.com/assets/images/world.svg" alt="Globe">

                <div class="locale-modal-lists-container clearfix">
                    <div class="locale-modal-col text-center">
                        <h3 class="locale-modal-heading">Choisissez votre pays</h3>
                        <p class="sub">Le choix d'un pays permet de changer la langue et d'accéder à un contenu adapté à votre région. </p>
                    </div>

                    <div class="locale-modal-col col-md-offset-1 col-md-6" style="height: 265px;">
                        <ul class="locale-modal-menu clearfix js-locale-modal-menu">
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\nl\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/NL_netherlands.png" alt="Nederland">
                                            Nederland                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-gb\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/UK_unitedKingdom.png" alt="United Kingdom">
                                            United Kingdom                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-us\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/US_unitedStates.png" alt="United States">
                                            United States                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\de-de\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/DE_germany.png" alt="Deutschland">
                                            Deutschland                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\es-es\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/ES_spain.png" alt="España">
                                            España                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\fr-fr\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/FR_france.png" alt="France">
                                            France                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\nl-be\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/BE_belgium.png" alt="België">
                                            België                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-ca\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/CA_canada.png" alt="Canada">
                                            Canada                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-au\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/AU_australia.png" alt="Australia">
                                            Australia                                        </span>
                                    </a>
                                </li>
                                                            <li class="locale-modal-menu-item">
                                    <a href="..\en-nz\google-rcs.htm">
                                        <span>
                                            <img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/ZN_newZealand.png" alt="New Zealand">
                                            New Zealand                                        </span>
                                    </a>
                                </li>
                                                    </ul>
                    </div>

                    <div class="locale-modal-col border-col col-md-4" style="height: 265px;">
                        <p class="small" style="margin-top: 15px">Vous ne trouvez pas votre pays? Consultez la liste complète ci-dessous.</p>
                        <select onchange="if (this.value) window.location.href=this.value">
                            <option value="" disabled="" selected="">Choisissez votre pays
                                                            <optgroup label="Africa">
                                                                                <option value="/en-gh/google-rcs" data-name-locale="English">
                                                Ghana                                            
                                                                                    <option value="/en-ke/google-rcs" data-name-locale="English">
                                                Kenya                                            
                                                                                    <option value="/en-ng/google-rcs" data-name-locale="English">
                                                Nigeria                                            
                                                                                    <option value="/en-ug/google-rcs" data-name-locale="English">
                                                Uganda                                            
                                                                                    <option value="/en-zw/google-rcs" data-name-locale="English">
                                                Zimbabwe                                            
                                                                        </optgroup>
                                                          <optgroup label="Asia">
                                                                                <option value="/en-hk/google-rcs" data-name-locale="English">
                                                Hong Kong                                            
                                                                                    <option value="/en-sg/google-rcs" data-name-locale="English">
                                                Singapore                                            
                                                                        </optgroup>
                                                          <optgroup label="Europe">
                                                                                <option value="/fr-be/google-rcs" data-name-locale="Français">
                                                Belgique                                            
                                                                                    <option value="/nl-be/google-rcs" data-name-locale="Vlaams">
                                                België                                            
                                                                                    <option value="/de-de/google-rcs" data-name-locale="Deutsch">
                                                Deutschland                                            
                                                                                    <option value="/es-es/google-rcs" data-name-locale="Español">
                                                España                                            
                                                                                    <option value="/fr-fr/google-rcs" data-name-locale="Français">
                                                France                                            
                                                                                    <option value="/en-gi/google-rcs" data-name-locale="English">
                                                Gibraltar                                            
                                                                                    <option value="/en-gg/google-rcs" data-name-locale="English">
                                                Guernsey                                            
                                                                                    <option value="/en-ie/google-rcs" data-name-locale="English">
                                                Ireland                                            
                                                                                    <option value="/en-im/google-rcs" data-name-locale="English">
                                                Isle of Man                                            
                                                                                    <option value="/en-je/google-rcs" data-name-locale="English">
                                                Jersey                                            
                                                                                    <option value="/nl/google-rcs" data-name-locale="Nederlands">
                                                Nederland                                            
                                                                                    <option value="/en-gb/google-rcs" data-name-locale="English">
                                                United Kingdom                                            
                                                                        </optgroup>
                                                          <optgroup label="North America">
                                                                                <option value="/en-bs/google-rcs" data-name-locale="English">
                                                Bahamas                                            
                                                                                    <option value="/en-bz/google-rcs" data-name-locale="English">
                                                Belize                                            
                                                                                    <option value="/en-bm/google-rcs" data-name-locale="English">
                                                Bermuda                                            
                                                                                    <option value="/en-vg/google-rcs" data-name-locale="English">
                                                British Virgin Islands                                            
                                                                                    <option value="/en-ca/google-rcs" data-name-locale="English">
                                                Canada                                            
                                                                                    <option value="/en-ky/google-rcs" data-name-locale="English">
                                                Cayman Islands                                            
                                                                                    <option value="/en-gd/google-rcs" data-name-locale="English">
                                                Grenada                                            
                                                                                    <option value="/en-jm/google-rcs" data-name-locale="English">
                                                Jamaica                                            
                                                                                    <option value="/en-pr/google-rcs" data-name-locale="English">
                                                Puerto Rico                                            
                                                                                    <option value="/en-tt/google-rcs" data-name-locale="English">
                                                Trinidad & Tobago                                            
                                                                                    <option value="/en-us/google-rcs" data-name-locale="English">
                                                United States                                            
                                                                        </optgroup>
                                                          <optgroup label="Oceania">
                                                                                <option value="/en-au/google-rcs" data-name-locale="English">
                                                Australia                                            
                                                                                    <option value="/en-gu/google-rcs" data-name-locale="English">
                                                Guam                                            
                                                                                    <option value="/en-nz/google-rcs" data-name-locale="English">
                                                New Zealand                                            
                                                                        </optgroup>
                                                          <optgroup label="South America">
                                                                                <option value="/en-gy/google-rcs" data-name-locale="English">
                                                Guyana                                            
                                                                        </optgroup>
                                                    <optgroup label="Other">
                              <option value="/en/google-rcs" data-name-locale="Rest of world">
                                  Rest of world
                              
                          </optgroup>
                        </select>

                        <div class="locale-modal-col-footer">
                            <p class="small">Votre pays n'est pas repris dans la liste? Vous pouvez toujours visiter notre site internet en anglais:</p>
                            <div class="clearfix">
                                <div class="locale-modal-menu-item locale-modal-center">
                                    <a href="..\en\google-rcs.htm">
                                        <span><img class="locale-modal-menu-item-flag" src="https://cdn-gc.messagebird.com/assets/images/flags/round/UK_unitedKingdom.png" alt="English">English</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="locale-modal-footer">
                    <p>Si vous avez des questions, des suggestions ou des plaintes concernant nos efforts de localisation, <a href="contact.htm"> n'hésitez pas à nous contacter </a>. Votre opinion nous importe!</p>
                </div>

            </div>
        </div>
    </div>
</div>

                        <div class="body-content" id="panel">

                
                





<style type="text/css">

	.pill {
		background: #feedbe;
	    color: #B6994A;
	    font-weight: 600;
	    text-transform: uppercase;
	    letter-spacing: 1px;
	    font-size: 10px;
	    padding: 4px 8px;
	    margin-top: -15px;
	}
</style>

<div class="rcs sms-marketing new">

	<section class="page-section hero">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-7">
	                <h1 class="hero-title inline-block">RCS Messaging <span class="pill">beta</span></h1>
	                <p>RCS (Rich Communication Services) makes it possible to do things like share high-res photos and large files, know when messages are read and have branded interactions; all over the mobile network.</p>
	                <p>We are participating in Google's Early Access Program for RCS business messaging. With RCS business messaging, you and your business can use RCS to engage your customers and build meaningful experiences.</p>
	            </div>
	            <div class="col-md-4 col-md-push-1">
	                <img class="illustration" src="https://cdn-gc.messagebird.com/assets/images/chat-gateway/rich-media-better.svg">
	            </div>
	        </div>
	    </div>
	</section>

	<section class="page-section comm">
	    <div class="container">
	        <div class="row">
	          <div class="col-md-3 head">
	            <h3 class="page-section-tag">Potentiel</h3>
	            <h2 class="page-section-heading">Modern Features</h2>
	          </div>
	          <div class="col-md-8 col-md-push-1">
	            <div class="row">
	              <div class="col-md-6">
	                <img width="20" class="inline-block" src="https://cdn-gc.messagebird.com/assets/images/rcs/mb-richmedia.svg">
	                <h4 class="inline-block">Rich Media</h4>
	                <p>Use images, videos, audio, maps and buttons in your messages.</p>
	              </div><div class="col-md-6">
	                <img width="20" class="inline-block" src="https://cdn-gc.messagebird.com/assets/images/rcs/mb-filesharing.svg">
	                <h4 class="inline-block">File sharing</h4>
	                <p>Easily share high-res images, documents and large files.</p>
	              </div><div class="col-md-6">
	                <img width="20" class="inline-block" src="https://cdn-gc.messagebird.com/assets/images/rcs/mb-insights-1.svg">
	                <h4 class="inline-block">Better Insights</h4>
	                <p>Track when a recipient has read or interacted with your message.</p>
	              </div><div class="col-md-6">
	                <img width="20" class="inline-block" src="https://cdn-gc.messagebird.com/assets/images/rcs/mb-interactions.svg">
	                <h4 class="inline-block">Branded Interactions</h4>
	                <p>Create advanced interactive elements that match your company's brand.</p>
	              </div>
	            </div>
	          </div>
	        </div>
	    </div>
	</section>

	<section class="page-section support">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6 col-md-push-3">

	            	<h2 class="page-section-heading text-center">Sign up for RCS updates</h2>

	            	<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						#mc_embed_signup{background:#fff; clear:left; font:14px 'Proxima Nova',Helvetica,Arial,sans-serif; margin-bottom: 90px;}
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

						#mc_embed_signup form {
							padding: 0;
						}

						#mc_embed_signup input {
						    border: none;
						}
						input#mc-embedded-subscribe {
						    min-width: 200px;
						    margin: 0 auto;
						}

						#mc_embed_signup .mc-field-group {
							width: 100%;
						}

						#mc_embed_signup .mc-field-group input{
							width: 100%;
						    min-width: 150px;
						    height: 50px;
						    -webkit-font-smoothing: antialiased;
						    border-top-left-radius: 4px;
						    border-bottom-left-radius: 4px;
						    border: 1px solid #e7f1fa;
						    padding: 9px 15px;
						    box-sizing: border-box;
						    box-shadow: 0 3px 6px rgba(36,129,215,.05),0 2px 3px rgba(36,129,215,.04)!important;
						    font-size: 16px;
						    margin: 0 auto;
						    outline: none;
						}

						#mc_embed_signup div.response {
						    margin: 0;
						    margin-bottom: 20px;
						    margin-top: 10px;
						    padding: 0;
						    font-weight: bold;
						    float: left;
						    top: -1.5em;
						    z-index: 1;
						    width: 100%;
						    text-align: center;
						    line-height: 18px;
						}
					</style>
					<div id="mc_embed_signup">

						<form action="//messagebird.us5.list-manage.com/subscribe/post?u=fbfcc4fa95e73ae87a48e1f6b&amp;id=3132daf90f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
						    <div id="mc_embed_signup_scroll">

						<div class="mc-field-group">
							<input type="email" value="" placeholder="Votre adresse e-mail professionnelle" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fbfcc4fa95e73ae87a48e1f6b_3132daf90f" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-cta"></div>
						    </div>
						</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->

	            </div>
	        </div>
	    </div>
	</section>

</div>            </div>

            
    
<footer class="footer">
    <div class="container">
        <div class="footer-row row">

            <div class="footer-mobile">
                <div class="footer-mobile-row clearfix">
                    <div class="footer-mobile-col">
                        <a class="footer-mobile-link" href="/fr-be/sms-gateway">
                            SMS                        </a>
                        <a class="footer-mobile-link" href="sms-vocal.htm">
                            Voice                        </a>
                        <a class="footer-mobile-link" target="_blank" href="http://blog.messagebird.com">
                            Blog                        </a>
                        <a class="footer-mobile-link" href="http://support.messagebird.com/hc/en-us/">
                            Aide                        </a>
                    </div>
                    <div class="footer-mobile-col">
                        <a class="footer-mobile-link" href="tarifs.htm">
                            Tarifs                        </a>
                        <a class="footer-mobile-link" href="/app/fr-be/sign-up">
                            Inscription                        </a>
                        <a class="footer-mobile-link" href="/app/fr-be/login">
                            Connexion                        </a>
                        <a class="footer-mobile-link" href="contact.htm">
                            Contact                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <span class="footer-copyright">&copy;2017 MessageBird</span>
                    <a class="footer-link" href="legal\privacy.htm">
                        Privacy                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Conditions                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\sla.htm">
                        SLA
                    </a>
                </div>

            </div>

            <div class="col-md-5ths footer-logo-col">
                <span class="footer-copyright">&copy;2017 MessageBird</span>

                <div class="footer-legal">
                    <a class="footer-link" href="legal\privacy.htm">
                        Privacy                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\tos.htm">
                        Conditions                    </a>
                    <span class="footer-link">-</span>
                    <a class="footer-link" href="legal\sla.htm">
                        SLA
                    </a>
                </div>
                <span class="footer-member-of">Fier membre de</span>
                <span class="footer-member-link gsma">
                    <a href="http://www.gsma.com/membership/messagebird/" target="_blank">
                        <img class="footer-big-img" src="https://cdn-gc.messagebird.com/assets/images/logo-gsma.svg" alt="GSMA">
                    </a>
                </span>
            </div>

            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        En savoir plus                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="a-propos-de-nous.htm">
                                À propos                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://blog.messagebird.com" target="_blank">
                                Blog                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/fr-be/careers" target="_blank">
                                Carrières                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="securite.htm">
                                Sécurité                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="customers.htm">
                                Clients                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="tarifs.htm">
                                Tarifs                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="grands-comptes.htm">
                                Grands comptes                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/fr-be/developers">
                                Développeurs                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://support.messagebird.com/hc/fr/">
                                Aide                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="http://status.messagebird.com" target="_blank">
                                Statut système                            </a>
                        </li>
                                    </ul>
            </div>
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Produits                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/fr-be/sms-gateway">
                                SMS Gateway                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-vocal.htm">
                                Voice                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="chat-api.htm">
                                Chat API                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="numeros.htm">
                                Numéros                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-en-masse.htm">
                                SMS en masse                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-par-mail.htm">
                                SMS par mail                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="numero-court.htm">
                                Numéro court                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="sms-marketing.htm">
                                SMS Marketing                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="verify.htm">
                                Verify                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="lookup.htm">
                                Lookup                            </a>
                        </li>
                                    </ul>
            </div>

                      <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Secteurs                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="secteur-de-la-sante.htm">
                                Secteur de la santé                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="transport.htm">
                                Transport & Logistique                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="commerce-de-detail.htm">
                                Commerce de détail                            </a>
                        </li>
                    
                    <li class="footer-nav-item footer-coming-soon">
                        Plus d'informations à venir!
                    </li>
                </ul>
            </div>
          
            <div class="col-md-5ths footer-list-col">
                <ul class="footer-nav-col">
                    <li class="footer-nav-heading">
                        Rejoignez-nous                    </li>

                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/fr-be/sign-up">
                                Inscription                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="/app/fr-be/login">
                                Connexion                            </a>
                        </li>
                                            <li class="footer-nav-item">
                            <a class="footer-link" href="contact.htm">
                                Contact                            </a>
                        </li>
                    
                    <li class="footer-nav-item">
                                                    <a href="https://www.linkedin.com/company/messagebird-com" class="footer-social-link" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                                                    <a href="https://twitter.com/messagebird" class="footer-social-link" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                                                    <a href="https://dribbble.com/messagebird" class="footer-social-link" target="_blank">
                                <i class="fa fa-dribbble"></i>
                            </a>
                                                    <a href="https://github.com/messagebird" class="footer-social-link" target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                                            </li>
                </ul>
            </div>

        </div>
    </div>
</footer>


<!--[if lt IE 9]>
<script>
window.onload = function(){
    if (!Modernizr.svg) {
        var imgs = document.getElementsByTagName('img');
        var svgExtension = /.*\.svg$/
        var l = imgs.length;
        for(var i = 0; i < l; i++) {
            if(imgs[i].src.match(svgExtension)) {
                var src = imgs[i].src.slice(0, -3) + 'png',
                    images_folder_index = src.indexOf('images') + 'images'.length;

                imgs[i].src = [src.slice(0, images_folder_index), '/png_fallback', src.slice(images_folder_index)].join('');
            }
        }
    }
}
</script>
<![endif]-->


<script>
    var env = 'production';
</script>
<!-- env: prod-marketing-production-marketing-570398068-t7b92 - 202.90.137.43 -->

            <script src="https://cdn-gc.messagebird.com/assets/js/all-243683dec71a0e3b94c6cf8e0cf76fab.js"></script>        </div>
    </body>
</html>

<script type="text/javascript">
    var dashboardUrl = 'https://dashboard.messagebird.com';
</script>

<script>

var cookiemsg = "MessageBird utilise des cookies fonctionnels, de performance et de publicité afin d'offrir à ses utilisateurs une expérience optimale. Pour plus d'informations, consultez notre ";
var cookiepolicy = " politique de cookies.";
var dismissmsg = "Accepter tous les cookies";
var denymsg = "Gérer les cookies";

window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#fff",
          "text": "#4C5669"
        },
        "button": {
          "background": "#2481d7",
        }
      },
      "position": "bottom",
      "type": "opt-out",
      "content": {
        "message": cookiemsg,
        "dismiss": dismissmsg,
        "deny": denymsg,
        "link": cookiepolicy,
        "href": "/fr-be/privacy#cookies"
      },
    "law": {
        "regionalLaw": false,
        "countryCode": "PH"
    },
    "location": false,

    onInitialise: function (status) {
      var type = this.options.type;
      var didConsent = this.hasConsented();
    },

    onStatusChange: function(status, chosenBefore) {
      var type = this.options.type;
      var didConsent = this.hasConsented();
      if (type == 'opt-out' && !didConsent) {
        goToPolicy();
      }
    },

    onRevokeChoice: function() {
      var type = this.options.type;
      if (type == 'opt-in') {
        goToPolicy();
      }
    }
    });

});

function goToPolicy(){
    window.location.href = "/fr-be/privacy#cookies";
};
</script>

<script src="..\assets\js\selectivity-jquery.min.js"></script>