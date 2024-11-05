 <div>
     <!doctype html>
     <html class="js" lang="en">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width,initial-scale=1">
         <meta name="theme-color" content="">
         <link rel="canonical" href="https:{{ asset('asset/') }}">
         <link rel="icon" type="image/png" href="{{ asset('asset/cdn/shop/files/logo-square_de796682-4773-4b8c-b16c-b3a9c4740ff5.png?crop=center&height=32&v=1715434674&width=32') }}">
         <link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin>
         <title>
             Picklefox - Best pickleball paddles and gear in Malaysia
             &ndash; Picklefox.com</title>


         <meta name="description" content="Picklefox is Malaysia&#39;s premier online store to help you find the best pickleball paddle and gear. Curated selection and fast shipping run by pickleball fans.">




         <meta property="og:site_name" content="Picklefox.com">
         <meta property="og:url" content="https:{{ asset('asset/') }}">
         <meta property="og:title" content="Picklefox - Best pickleball paddles and gear in Malaysia">
         <meta property="og:type" content="website">
         <meta property="og:description" content="Picklefox is Malaysia&#39;s premier online store to help you find the best pickleball paddle and gear. Curated selection and fast shipping run by pickleball fans.">
         <meta property="og:image" content="http:{{ asset('asset/cdn/shop/files/logo-square-pink.png') }}">
         <meta property="og:image:secure_url" content="https:{{ asset('asset/cdn/shop/files/logo-square-pink.png') }}">
         <meta property="og:image:width" content="1000">
         <meta property="og:image:height" content="1000">
         <meta name="twitter:card" content="summary_large_image">
         <meta name="twitter:title" content="Picklefox - Best pickleball paddles and gear in Malaysia">
         <meta name="twitter:description" content="Picklefox is Malaysia&#39;s premier online store to help you find the best pickleball paddle and gear. Curated selection and fast shipping run by pickleball fans.">


         <script src="{{ asset('asset/cdn/shop/t/7/assets/constants.js') }}" defer="defer"></script>
         <script src="{{ asset('asset/cdn/shop/t/7/assets/pubsub.js') }}" defer="defer"></script>
         <script src="{{ asset('asset/cdn/shop/t/7/assets/global.js') }}" defer="defer"></script>
         <script src="{{ asset('asset/cdn/shop/t/7/assets/details-disclosure.js') }}" defer="defer"></script>
         <script src="{{ asset('asset/cdn/shop/t/7/assets/details-modal.js') }}" defer="defer"></script>
         <script src="{{ asset('asset/cdn/shop/t/7/assets/search-form.js') }}" defer="defer"></script>
         <script src="{{ asset('asset/cdn/shop/t/7/assets/animations.js') }}" defer="defer"></script>
         <script>
             window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');

         </script>
         <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/65451524292/digital_wallets/dialog">

         </script>
         <script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
             function portableWalletsHideBuyerConsent(e) {
                 var t = document.getElementById("shopify-buyer-consent")
                     , n = document.getElementById("shopify-subscription-policy-button");
                 t && n && (t.classList.add("hidden"), t.setAttribute("aria-hidden", "true"), n.removeEventListener("click", e))
             }

             function portableWalletsShowBuyerConsent(e) {
                 var t = document.getElementById("shopify-buyer-consent")
                     , n = document.getElementById("shopify-subscription-policy-button");
                 t && n && (t.classList.remove("hidden"), t.removeAttribute("aria-hidden"), n.addEventListener("click", e))
             }
             window.Shopify ? .PaymentButton && (window.Shopify.PaymentButton.hideBuyerConsent = portableWalletsHideBuyerConsent, window.Shopify.PaymentButton.showBuyerConsent = portableWalletsShowBuyerConsent);

         </script>
         <script>
             function portableWalletsCleanup(e) {
                 e && e.src && console.error("Failed to load portable wallets script " + e.src);
                 var t = document.querySelectorAll("shopify-accelerated-checkout .shopify-payment-button__skeleton, shopify-accelerated-checkout-cart .wallet-cart-button__skeleton")
                     , e = document.getElementById("shopify-buyer-consent");
                 for (let e = 0; e < t.length; e++) t[e].remove();
                 e && e.remove()
             }

             function portableWalletsNotLoadedAsModule(e) {
                 e instanceof ErrorEvent && "string" == typeof e.message && e.message.includes("import.meta") && "string" == typeof e.filename && e.filename.includes("portable-wallets") && (window.removeEventListener("error", portableWalletsNotLoadedAsModule), window.Shopify.PaymentButton.failedToLoad = e, "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", window.Shopify.PaymentButton.init) : window.Shopify.PaymentButton.init())
             }
             window.addEventListener("error", portableWalletsNotLoadedAsModule);

         </script>

         <script type="module" src="https:{{ asset('asset/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js') }}" onError="portableWalletsCleanup(this)" crossorigin="anonymous"></script>
         <script nomodule>
             document.addEventListener("DOMContentLoaded", portableWalletsCleanup);

         </script>

         <script id="sections-script" data-sections="header" defer="defer" src="{{ asset('asset/cdn/shop/t/7/compiled_assets/scripts.js?402') }}"></script>
         <style id="shopify-accelerated-checkout">
             .shopify-payment-button__button--hidden {
                 visibility: hidden;
             }

             .shopify-payment-button__button {
                 height: clamp(25px,
                         var(--shopify-accelerated-checkout-button-block-size, 44px),
                         55px);
                 min-height: clamp(25px,
                         var(--shopify-accelerated-checkout-button-block-size, 44px),
                         55px);
                 border-radius: var(--shopify-accelerated-checkout-button-border-radius, 0px);
                 width: 100%;
                 border: none;
                 box-shadow: 0 0 0 0 transparent;
                 color: white;
                 cursor: pointer;
                 display: block;
                 font-size: 1em;
                 font-weight: 500;
                 line-height: 1;
                 text-align: center;
                 transition: background 0.2s ease-in-out;
             }

             .shopify-payment-button__button[disabled] {
                 opacity: 0.6;
                 cursor: default;
             }

             .shopify-payment-button__button--unbranded {
                 background-color: #1990c6;
                 padding: 1em 2em;
             }

             .shopify-payment-button__button--unbranded:hover:not([disabled]) {
                 background-color: #136f99;
             }

             .shopify-payment-button__more-options {
                 background: transparent;
                 border: 0 none;
                 cursor: pointer;
                 display: block;
                 font-size: 1em;
                 margin-top: 1em;
                 text-align: center;
                 text-decoration: underline;
                 width: 100%;
             }

             .shopify-payment-button__more-options.shopify-payment-button__skeleton {
                 height: auto !important;
                 min-height: 0 !important;
                 border-radius: 4px !important;
                 width: 50%;
                 margin-left: 25%;
                 margin-right: 25%;
             }

             .shopify-payment-button__more-options[disabled] {
                 opacity: 0.6;
                 cursor: default !important;
             }

             .shopify-payment-button__button.shopify-payment-button__button--branded {
                 display: flex;
                 flex-direction: column;
                 position: relative;
                 z-index: 1;
             }

             .shopify-payment-button__button.shopify-payment-button__button--branded .shopify-cleanslate {
                 flex: 1 !important;
                 display: flex !important;
                 flex-direction: column !important;
             }

             .shopify-payment-button__button.button.loading {
                 position: relative;
                 color: transparent;
             }

             .shopify-payment-button__button.button.loading>.loading-overlay__spinner {
                 top: 50%;
                 left: 50%;
                 transform: translate(-50%, -50%);
                 position: absolute;
                 height: 100%;
                 display: flex;
                 align-items: center;
             }

             .shopify-payment-button__button.button.loading>.loading-overlay__spinner .spinner {
                 width: -moz-fit-content;
                 width: -webkit-fit-content;
                 width: fit-content;
             }

             .button.loading>.loading-overlay__spinner .path {
                 stroke: white;
             }

             .shopify-payment-button__button .loading-overlay__spinner {
                 width: 1.8rem;
                 display: inline-block;
             }

             .shopify-payment-button__button .spinner {
                 animation: shopify-rotator 1.4s linear infinite;
             }

             @keyframes shopify-rotator {
                 0% {
                     transform: rotate(0deg);
                 }

                 100% {
                     transform: rotate(270deg);
                 }
             }

             .shopify-payment-button__button .path {
                 stroke-dasharray: 280;
                 stroke-dashoffset: 0;
                 transform-origin: center;
                 stroke: rgb(18, 18, 18);
                 animation: shopify-dash 1.4s ease-in-out infinite;
             }

             @media screen and (forced-colors: active) {
                 .shopify-payment-button__button .path {
                     stroke: CanvasText;
                 }
             }

             @keyframes shopify-dash {
                 0% {
                     stroke-dashoffset: 280;
                 }

                 50% {
                     stroke-dashoffset: 75;
                     transform: rotate(135deg);
                 }

                 100% {
                     stroke-dashoffset: 280;
                     transform: rotate(450deg);
                 }
             }

             @keyframes acceleratedCheckoutLoadingSkeleton {
                 50% {
                     opacity: var(--shopify-accelerated-checkout-skeleton-animation-opacity-start, 1);
                 }

                 75% {
                     opacity: var(--shopify-accelerated-checkout-skeleton-animation-opacity-end, 0.5);
                 }

                 100% {
                     opacity: var(--shopify-accelerated-checkout-skeleton-animation-opacity-start, 1);
                 }
             }

             .shopify-payment-button__skeleton {
                 animation: acceleratedCheckoutLoadingSkeleton var(--shopify-accelerated-checkout-skeleton-animation-duration, 4s) var(--shopify-accelerated-checkout-skeleton-animation-timing-function, ease) infinite;
                 animation-delay: -0.168s;
                 background-color: var(--shopify-accelerated-checkout-skeleton-background-color, #dedede);
                 box-sizing: border-box;
                 text-decoration: none !important;
                 height: var(--shopify-accelerated-checkout-button-block-size, inherit);
                 min-height: 25px;
                 max-height: 55px;
                 border-radius: var(--shopify-accelerated-checkout-button-border-radius, inherit);
             }

             .shopify-payment-button__button {
                 border-radius: 0px;
             }

             #shopify-buyer-consent {
                 margin-top: 1em;
                 display: inline-block;
                 width: 100%;
             }

             #shopify-buyer-consent.hidden {
                 display: none;
             }

             #shopify-subscription-policy-button {
                 background: none;
                 border: none;
                 padding: 0;
                 text-decoration: underline;
                 font-size: inherit;
                 cursor: pointer;
             }

             #shopify-subscription-policy-button::before {
                 box-shadow: none;
             }

         </style>

         <style id="shopify-accelerated-checkout-cart">
             #dynamic-checkout-cart {
                 container-type: inline-size;
                 container-name: dcc;
                 width: 100%;
             }

             .wallet-cart-grid {
                 --wallet-button-height-horizontal: clamp(25px,
                         var(--shopify-accelerated-checkout-button-inline-size,
                             42px),
                         55px);
                 --wallet-button-height-vertical: clamp(25px,
                         var(--shopify-accelerated-checkout-button-block-size,
                             54px),
                         55px);
                 --wallet-button-width-horizontal: 150px;
                 --wallet-button-width-vertical: 100%;
                 --wallet-button-border-radius: var(--shopify-accelerated-checkout-button-border-radius,
                         4px);
                 --wallet-grid-margin-horizontal: 0 -5px -5px -5px;
                 --wallet-button-container-margin-horizontal: 0 5px 5px;
                 --wallet-button-container-margin-vertical: var(--shopify-accelerated-checkout-row-gap, 8px) 0 0;
             }

             @keyframes acceleratedCheckoutLoadingSkeleton {
                 50% {
                     opacity: var(--shopify-accelerated-checkout-skeleton-animation-opacity-start, 1);
                 }

                 75% {
                     opacity: var(--shopify-accelerated-checkout-skeleton-animation-opacity-end, 0.5);
                 }

                 100% {
                     opacity: var(--shopify-accelerated-checkout-skeleton-animation-opacity-start, 1);
                 }
             }

             .wallet-cart-button__skeleton {
                 animation: acceleratedCheckoutLoadingSkeleton var(--shopify-accelerated-checkout-skeleton-animation-duration, 4s) var(--shopify-accelerated-checkout-skeleton-animation-timing-function, ease) infinite;
                 animation-delay: -0.168s;
                 background-color: var(--shopify-accelerated-checkout-skeleton-background-color, #dedede);
                 box-sizing: border-box;
                 text-decoration: none !important;
             }

             .wallet-cart-grid {
                 margin: var(--wallet-grid-margin-horizontal);
                 padding: 0;
                 display: flex;
                 flex-direction: row;
                 justify-content: var(--shopify-accelerated-checkout-inline-alignment, start);
                 gap: 0 !important;
             }

             .wallet-cart-grid--skeleton {
                 justify-content: var(--shopify-accelerated-checkout-inline-alignment, inherit);
             }

             .wallet-cart-button-container {
                 position: relative;
                 margin: var(--wallet-button-container-margin-horizontal);
             }

             .wallet-cart-button-container,
             .wallet-cart-button {
                 width: var(--wallet-button-width-horizontal);
                 height: var(--wallet-button-height-horizontal);
                 border-radius: var(--wallet-button-border-radius);
                 list-style-type: none !important;
                 text-align: center;
                 flex-shrink: 0;
                 flex-grow: 0;
             }

             .additional-checkout-buttons--vertical .wallet-cart-grid {
                 justify-content: start;
                 flex-direction: column;
                 margin: 0;
             }

             .additional-checkout-buttons--vertical .wallet-cart-grid .wallet-cart-button-container {
                 width: var(--wallet-button-width-vertical);
                 height: var(--wallet-button-height-vertical);
                 margin: var(--wallet-button-container-margin-vertical);
             }

             .additional-checkout-buttons--vertical .wallet-cart-grid .wallet-cart-button-container:first-child {
                 margin-top: 0;
             }

             .additional-checkout-buttons--vertical .wallet-cart-grid .wallet-cart-button {
                 width: var(--wallet-button-width-vertical);
                 height: var(--wallet-button-height-vertical);
             }

             .additional-checkout-buttons--horizontal .wallet-cart-grid .wallet-cart-button-container,
             .additional-checkout-buttons--horizontal .wallet-cart-grid .wallet-cart-button {
                 width: var(--wallet-button-width-horizontal) !important;
                 height: var(--wallet-button-height-horizontal) !important;
                 border-radius: var(--wallet-button-border-radius) !important;
             }

             @container dcc (width >=150px) and (width <=500px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(1)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(2))) {
                     justify-content: start;
                     flex-direction: column;
                     margin: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(1)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(2))) .wallet-cart-button-container {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                     margin: var(--wallet-button-container-margin-vertical);
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(1)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(2))) .wallet-cart-button-container:first-child {
                     margin-top: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(1)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(2))) .wallet-cart-button {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                 }
             }

             @container dcc (width <=310px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(2)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(3))) {
                     justify-content: start;
                     flex-direction: column;
                     margin: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(2)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(3))) .wallet-cart-button-container {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                     margin: var(--wallet-button-container-margin-vertical);
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(2)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(3))) .wallet-cart-button-container:first-child {
                     margin-top: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(2)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(3))) .wallet-cart-button {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                 }
             }

             @container dcc (width <=470px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(3)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(4))) {
                     justify-content: start;
                     flex-direction: column;
                     margin: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(3)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(4))) .wallet-cart-button-container {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                     margin: var(--wallet-button-container-margin-vertical);
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(3)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(4))) .wallet-cart-button-container:first-child {
                     margin-top: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(3)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(4))) .wallet-cart-button {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                 }
             }

             @container dcc (width <=630px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(4)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(5))) {
                     justify-content: start;
                     flex-direction: column;
                     margin: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(4)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(5))) .wallet-cart-button-container {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                     margin: var(--wallet-button-container-margin-vertical);
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(4)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(5))) .wallet-cart-button-container:first-child {
                     margin-top: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(4)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(5))) .wallet-cart-button {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                 }
             }

             @container dcc (width <=790px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(5)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(6))) {
                     justify-content: start;
                     flex-direction: column;
                     margin: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(5)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(6))) .wallet-cart-button-container {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                     margin: var(--wallet-button-container-margin-vertical);
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(5)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(6))) .wallet-cart-button-container:first-child {
                     margin-top: 0;
                 }

                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(5)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(6))) .wallet-cart-button {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                 }
             }

             .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(6)) {
                 justify-content: start;
                 flex-direction: column;
                 margin: 0;
             }

             .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(6)) .wallet-cart-button-container {
                 width: var(--wallet-button-width-vertical);
                 height: var(--wallet-button-height-vertical);
                 margin: var(--wallet-button-container-margin-vertical);
             }

             .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(6)) .wallet-cart-button-container:first-child {
                 margin-top: 0;
             }

             .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(6)) .wallet-cart-button {
                 width: var(--wallet-button-width-vertical);
                 height: var(--wallet-button-height-vertical);
             }

             @media screen and (max-width: 750px) {
                 .wallet-cart-grid {
                     justify-content: start;
                     flex-direction: column;
                     max-width: none;
                     margin: 0;
                 }

                 .wallet-cart-grid .wallet-cart-button-container {
                     max-width: none;
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                     margin: var(--wallet-button-container-margin-vertical);
                 }

                 .wallet-cart-grid .wallet-cart-button-container:first-child {
                     margin-top: 0;
                 }

                 .wallet-cart-grid .wallet-cart-button {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                 }
             }

             @supports (not (container-type: inline-size)) or (not (selector(:has(*)))) {
                 .wallet-cart-grid {
                     justify-content: start;
                     flex-direction: column;
                     margin: 0;
                 }

                 .wallet-cart-button-container {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                     margin: var(--wallet-button-container-margin-vertical);
                 }

                 .wallet-cart-button-container:first-child {
                     margin-top: 0;
                 }

                 .wallet-cart-grid .wallet-cart-button {
                     width: var(--wallet-button-width-vertical);
                     height: var(--wallet-button-height-vertical);
                 }
             }

             #shopify-buyer-consent {
                 margin-top: 1em;
                 display: inline-block;
                 width: 100%;
             }

             #shopify-buyer-consent.hidden {
                 display: none;
             }

             #shopify-subscription-policy-button {
                 background: none;
                 border: none;
                 padding: 0;
                 text-decoration: underline;
                 font-size: inherit;
                 cursor: pointer;
             }

             #shopify-subscription-policy-button::before {
                 box-shadow: none;
             }

         </style>

         <style id="shopify-accelerated-checkout-cart-grid-with-margin-top">
             .additional-checkout-buttons--vertical .wallet-cart-grid .wallet-cart-button-container:first-child {
                 margin-top: 8px;
             }


             @container dcc (width >=150px) and (width <=500px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(1)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(2))) .wallet-cart-button-container:first-child {
                     margin-top: 8px;
                 }
             }

             @container dcc (width <=310px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(2)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(3))) .wallet-cart-button-container:first-child {
                     margin-top: 8px;
                 }
             }

             @container dcc (width <=470px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(3)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(4))) .wallet-cart-button-container:first-child {
                     margin-top: 8px;
                 }
             }

             @container dcc (width <=630px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(4)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(5))) .wallet-cart-button-container:first-child {
                     margin-top: 8px;
                 }
             }

             @container dcc (width <=790px) {
                 .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(5)).wallet-cart-grid:not(:has(>.wallet-cart-button-container:nth-of-type(6))) .wallet-cart-button-container:first-child {
                     margin-top: 8px;
                 }
             }

             .wallet-cart-grid:has(>.wallet-cart-button-container:nth-of-type(6)) .wallet-cart-button-container:first-child {
                 margin-top: 8px;
             }

             @media screen and (max-width: 750px) {
                 .wallet-cart-grid .wallet-cart-button-container:first-child {
                     margin-top: 8px;
                 }
             }

             @supports (not (container-type: inline-size)) or (not (selector(:has(*)))) {
                 .wallet-cart-button-container:first-child {
                     margin-top: 8px;
                 }
             }

         </style>
         <script>
             window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');

         </script>


         <style data-shopify>
             @font-face {
                 font-family: Roboto;
                 font-weight: 400;
                 font-style: normal;
                 font-display: swap;
                 src: url("{{ asset('asset/cdn/fonts/roboto/roboto_n4.da808834c2315f31dd3910e2ae6b1a895d7f73f5.woff2?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=7c3aa694acadd3b10a907ea7bd5bbee90ae97196b0309decd06e4b141b32fe75') }}"
                 ) format("woff2"),
                 url("{{ asset('asset/cdn/fonts/roboto/roboto_n4.a512c7b68cd7f12c72e1a5fd58e7f7315c552e93.woff?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=4f6caec49be63ee0235341e44b593ef073f6c5e9087e379b752d0c199f9386af') }}"
                 ) format("woff");
             }

             @font-face {
                 font-family: Roboto;
                 font-weight: 700;
                 font-style: normal;
                 font-display: swap;
                 src: url("{{ asset('asset/cdn/fonts/roboto/roboto_n7.51ede27d5b58491d9cf07ad184108da52fef80b4.woff2?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=310159012285a5085f931c07c9283e5ed774504d00e90868ff0326df5f81815d') }}"
                 ) format("woff2"),
                 url("{{ asset('asset/cdn/fonts/roboto/roboto_n7.1babbb6a27f91b14216bafa40bf222e08f6999f4.woff?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=b0a14e908e031f7ddf32586fbb0afd2c3984ac8404eb9e14daf41fc5ee50e264') }}"
                 ) format("woff");
             }

             @font-face {
                 font-family: Roboto;
                 font-weight: 400;
                 font-style: italic;
                 font-display: swap;
                 src: url("{{ asset('asset/cdn/fonts/roboto/roboto_i4.f98951b4b9b6e1096fc799cd05debd098bd422ac.woff2?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=e476531e4a6f89b79ba97bd338d85504375f7d2c9f62a1f2caff5dc31fadb208') }}"
                 ) format("woff2"),
                 url("{{ asset('asset/cdn/fonts/roboto/roboto_i4.688a26691d45bc4053b6ae24a196cabdeedbc25c.woff?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=b525ede08c6145c7ff77bd5bb808e6a5ba17c4757562c2b95492cbeb22a3a8f6') }}"
                 ) format("woff");
             }

             @font-face {
                 font-family: Roboto;
                 font-weight: 700;
                 font-style: italic;
                 font-display: swap;
                 src: url("{{ asset('asset/cdn/fonts/roboto/roboto_i7.9c922c35bb84952cfb17e8c1d42e440e75aa8ccf.woff2?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=290a4960177e2b4801ad2ac561f7bd7687474050f3e00d2760660d3fcc67cc3c') }}"
                 ) format("woff2"),
                 url("{{ asset('asset/cdn/fonts/roboto/roboto_i7.c50b5683f5731edb8040ff2110a54947108434de.woff?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=2e257a86ef6917a98fa168276b064d4ab4fe3ef579d382307e3b7e4436c2d953') }}"
                 ) format("woff");
             }

             @font-face {
                 font-family: Poppins;
                 font-weight: 400;
                 font-style: normal;
                 font-display: swap;
                 src: url("{{ asset('asset/cdn/fonts/poppins/poppins_n4.934accbf9f5987aa89334210e6c1e9151f37d3b6.woff2?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=7730cb02fd3a37e19100ce35c0c023b280327aa5394f856427212ad9f344ca05') }}"
                 ) format("woff2"),
                 url("{{ asset('asset/cdn/fonts/poppins/poppins_n4.ee28d4489eaf5de9cf6e17e696991b5e9148c716.woff?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=3c3f73a45f823d208d34cd453fa75466db4ec9ea294fc5c9e6d0e297664edc85') }}"
                 ) format("woff");
             }



             :root,
             .color-scheme-1 {
                 --color-background: 255, 255, 255;

                 --gradient-background: #ffffff;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 191, 191, 191;
                 --color-shadow: 2, 9, 18;
                 --color-button: 236, 50, 175;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 255, 255, 255;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 255, 255, 255;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(255 255 255);
             }


             .color-scheme-2 {
                 --color-background: 255, 255, 255;

                 --gradient-background: #ffffff;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 191, 191, 191;
                 --color-shadow: 2, 9, 18;
                 --color-button: 50, 175, 236;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 255, 255, 255;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 255, 255, 255;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(255 255 255);
             }


             .color-scheme-3 {
                 --color-background: 252, 252, 252;

                 --gradient-background: #fcfcfc;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 188, 188, 188;
                 --color-shadow: 2, 9, 18;
                 --color-button: 175, 236, 50;
                 --color-button-text: 2, 9, 18;
                 --color-secondary-button: 252, 252, 252;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 252, 252, 252;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(252 252 252);
             }


             .color-scheme-4 {
                 --color-background: 20, 27, 34;

                 --gradient-background: #141b22;




                 --color-foreground: 252, 252, 252;
                 --color-background-contrast: 128, 154, 181;
                 --color-shadow: 2, 9, 18;
                 --color-button: 205, 205, 205;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 20, 27, 34;
                 --color-secondary-button-text: 252, 252, 252;
                 --color-link: 252, 252, 252;
                 --color-badge-foreground: 252, 252, 252;
                 --color-badge-background: 20, 27, 34;
                 --color-badge-border: 252, 252, 252;
                 --payment-terms-background-color: rgb(20 27 34);
             }


             .color-scheme-5 {
                 --color-background: 236, 50, 175;

                 --gradient-background: #ec32af;




                 --color-foreground: 252, 252, 252;
                 --color-background-contrast: 145, 13, 102;
                 --color-shadow: 2, 9, 18;
                 --color-button: 2, 9, 18;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 236, 50, 175;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 252, 252, 252;
                 --color-badge-background: 236, 50, 175;
                 --color-badge-border: 252, 252, 252;
                 --payment-terms-background-color: rgb(236 50 175);
             }


             .color-scheme-c37c595b-82d7-4b04-a217-298954af529c {
                 --color-background: 50, 175, 236;

                 --gradient-background: #32afec;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 13, 102, 145;
                 --color-shadow: 2, 9, 18;
                 --color-button: 252, 252, 252;
                 --color-button-text: 2, 9, 18;
                 --color-secondary-button: 50, 175, 236;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 50, 175, 236;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(50 175 236);
             }


             .color-scheme-bbba58fd-2264-47ab-865f-9d4f8eae8a8a {
                 --color-background: 175, 236, 50;

                 --gradient-background: #afec32;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 102, 145, 13;
                 --color-shadow: 2, 9, 18;
                 --color-button: 2, 9, 18;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 175, 236, 50;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 175, 236, 50;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(175 236 50);
             }


             .color-scheme-98780e47-4f17-4167-b954-b15fcd542a1c {
                 --color-background: 230, 230, 230;

                 --gradient-background: #e6e6e6;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 166, 166, 166;
                 --color-shadow: 2, 9, 18;
                 --color-button: 236, 50, 175;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 230, 230, 230;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 230, 230, 230;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(230 230 230);
             }


             .color-scheme-7efd7f2f-6410-41cb-a1df-285103efb9e0 {
                 --color-background: 230, 230, 230;

                 --gradient-background: #e6e6e6;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 166, 166, 166;
                 --color-shadow: 2, 9, 18;
                 --color-button: 50, 175, 236;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 230, 230, 230;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 230, 230, 230;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(230 230 230);
             }


             .color-scheme-143ab6a3-39d2-4d86-a5c2-19d1b145fed8 {
                 --color-background: 230, 230, 230;

                 --gradient-background: #e6e6e6;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 166, 166, 166;
                 --color-shadow: 2, 9, 18;
                 --color-button: 175, 236, 50;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 230, 230, 230;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 230, 230, 230;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(230 230 230);
             }


             .color-scheme-38ab0b12-8ee0-4d7d-a4fa-fbb972c39125 {
                 --color-background: 230, 230, 230;

                 --gradient-background: #e6e6e6;




                 --color-foreground: 2, 9, 18;
                 --color-background-contrast: 166, 166, 166;
                 --color-shadow: 2, 9, 18;
                 --color-button: 2, 9, 18;
                 --color-button-text: 252, 252, 252;
                 --color-secondary-button: 230, 230, 230;
                 --color-secondary-button-text: 2, 9, 18;
                 --color-link: 2, 9, 18;
                 --color-badge-foreground: 2, 9, 18;
                 --color-badge-background: 230, 230, 230;
                 --color-badge-border: 2, 9, 18;
                 --payment-terms-background-color: rgb(230 230 230);
             }


             body,
             .color-scheme-1,
             .color-scheme-2,
             .color-scheme-3,
             .color-scheme-4,
             .color-scheme-5,
             .color-scheme-c37c595b-82d7-4b04-a217-298954af529c,
             .color-scheme-bbba58fd-2264-47ab-865f-9d4f8eae8a8a,
             .color-scheme-98780e47-4f17-4167-b954-b15fcd542a1c,
             .color-scheme-7efd7f2f-6410-41cb-a1df-285103efb9e0,
             .color-scheme-143ab6a3-39d2-4d86-a5c2-19d1b145fed8,
             .color-scheme-38ab0b12-8ee0-4d7d-a4fa-fbb972c39125 {
                 color: rgba(var(--color-foreground), 0.75);
                 background-color: rgb(var(--color-background));
             }

             :root {
                 --font-body-family: Roboto, sans-serif;
                 --font-body-style: normal;
                 --font-body-weight: 400;
                 --font-body-weight-bold: 700;

                 --font-heading-family: Poppins, sans-serif;
                 --font-heading-style: normal;
                 --font-heading-weight: 400;

                 --font-body-scale: 1.0;
                 --font-heading-scale: 1.0;

                 --media-padding: px;
                 --media-border-opacity: 1.0;
                 --media-border-width: 0px;
                 --media-radius: 0px;
                 --media-shadow-opacity: 0.0;
                 --media-shadow-horizontal-offset: 0px;
                 --media-shadow-vertical-offset: 4px;
                 --media-shadow-blur-radius: 5px;
                 --media-shadow-visible: 0;

                 --page-width: 120rem;
                 --page-width-margin: 0rem;

                 --product-card-image-padding: 0.0rem;
                 --product-card-corner-radius: 1.0rem;
                 --product-card-text-alignment: center;
                 --product-card-border-width: 0.0rem;
                 --product-card-border-opacity: 0.1;
                 --product-card-shadow-opacity: 0.0;
                 --product-card-shadow-visible: 0;
                 --product-card-shadow-horizontal-offset: 0.0rem;
                 --product-card-shadow-vertical-offset: 0.4rem;
                 --product-card-shadow-blur-radius: 0.5rem;

                 --collection-card-image-padding: 0.0rem;
                 --collection-card-corner-radius: 1.0rem;
                 --collection-card-text-alignment: center;
                 --collection-card-border-width: 0.0rem;
                 --collection-card-border-opacity: 0.1;
                 --collection-card-shadow-opacity: 0.0;
                 --collection-card-shadow-visible: 0;
                 --collection-card-shadow-horizontal-offset: 0.0rem;
                 --collection-card-shadow-vertical-offset: 0.4rem;
                 --collection-card-shadow-blur-radius: 0.5rem;

                 --blog-card-image-padding: 0.2rem;
                 --blog-card-corner-radius: 1.0rem;
                 --blog-card-text-alignment: left;
                 --blog-card-border-width: 0.0rem;
                 --blog-card-border-opacity: 0.1;
                 --blog-card-shadow-opacity: 0.0;
                 --blog-card-shadow-visible: 0;
                 --blog-card-shadow-horizontal-offset: 0.0rem;
                 --blog-card-shadow-vertical-offset: 0.4rem;
                 --blog-card-shadow-blur-radius: 0.5rem;

                 --badge-corner-radius: 4.0rem;

                 --popup-border-width: 2px;
                 --popup-border-opacity: 1.0;
                 --popup-corner-radius: 0px;
                 --popup-shadow-opacity: 0.05;
                 --popup-shadow-horizontal-offset: 0px;
                 --popup-shadow-vertical-offset: 4px;
                 --popup-shadow-blur-radius: 5px;

                 --drawer-border-width: 2px;
                 --drawer-border-opacity: 1.0;
                 --drawer-shadow-opacity: 0.0;
                 --drawer-shadow-horizontal-offset: 0px;
                 --drawer-shadow-vertical-offset: 4px;
                 --drawer-shadow-blur-radius: 5px;

                 --spacing-sections-desktop: 20px;
                 --spacing-sections-mobile: 20px;

                 --grid-desktop-vertical-spacing: 24px;
                 --grid-desktop-horizontal-spacing: 24px;
                 --grid-mobile-vertical-spacing: 12px;
                 --grid-mobile-horizontal-spacing: 12px;

                 --text-boxes-border-opacity: 1.0;
                 --text-boxes-border-width: 0px;
                 --text-boxes-radius: 0px;
                 --text-boxes-shadow-opacity: 0.0;
                 --text-boxes-shadow-visible: 0;
                 --text-boxes-shadow-horizontal-offset: 0px;
                 --text-boxes-shadow-vertical-offset: 4px;
                 --text-boxes-shadow-blur-radius: 5px;

                 --buttons-radius: 8px;
                 --buttons-radius-outset: 9px;
                 --buttons-border-width: 1px;
                 --buttons-border-opacity: 1.0;
                 --buttons-shadow-opacity: 0.0;
                 --buttons-shadow-visible: 0;
                 --buttons-shadow-horizontal-offset: 0px;
                 --buttons-shadow-vertical-offset: 4px;
                 --buttons-shadow-blur-radius: 5px;
                 --buttons-border-offset: 0.3px;

                 --inputs-radius: 8px;
                 --inputs-border-width: 1px;
                 --inputs-border-opacity: 0.55;
                 --inputs-shadow-opacity: 0.0;
                 --inputs-shadow-horizontal-offset: 0px;
                 --inputs-margin-offset: 0px;
                 --inputs-shadow-vertical-offset: 4px;
                 --inputs-shadow-blur-radius: 5px;
                 --inputs-radius-outset: 9px;

                 --variant-pills-radius: 40px;
                 --variant-pills-border-width: 1px;
                 --variant-pills-border-opacity: 0.55;
                 --variant-pills-shadow-opacity: 0.0;
                 --variant-pills-shadow-horizontal-offset: 0px;
                 --variant-pills-shadow-vertical-offset: 4px;
                 --variant-pills-shadow-blur-radius: 5px;
             }

             *,
             *::before,
             *::after {
                 box-sizing: inherit;
             }

             html {
                 box-sizing: border-box;
                 font-size: calc(var(--font-body-scale) * 62.5%);
                 height: 100%;
             }

             body {
                 display: grid;
                 grid-template-rows: auto auto 1fr auto;
                 grid-template-columns: 100%;
                 min-height: 100%;
                 margin: 0;
                 font-size: 1.5rem;
                 letter-spacing: 0.06rem;
                 line-height: calc(1 + 0.8 / var(--font-body-scale));
                 font-family: var(--font-body-family);
                 font-style: var(--font-body-style);
                 font-weight: var(--font-body-weight);
             }

             @media screen and (min-width: 750px) {
                 body {
                     font-size: 1.6rem;
                 }
             }

         </style>

         <link href="{{asset('asset/cdn/shop/t/7/assets/base.css?v=159841507637079171801729322515')}}" rel="stylesheet" type="text/css" media="all" />
         <link rel="stylesheet" href="{{ asset('asset/cdn/shop/t/7/assets/component-cart-items.css') }}"  >
         <link rel="preload" as="font" href="{{ asset('asset/cdn/fonts/roboto/roboto_n4.da808834c2315f31dd3910e2ae6b1a895d7f73f5.woff2?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=7c3aa694acadd3b10a907ea7bd5bbee90ae97196b0309decd06e4b141b32fe75') }}" type="font/woff2" crossorigin>


         <link rel="preload" as="font" href="{{ asset('asset/cdn/fonts/poppins/poppins_n4.934accbf9f5987aa89334210e6c1e9151f37d3b6.woff2?h1=Y2E3ODljLWNkLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=cGlja2xlZm94LmNvbQ&h3=YWNjb3VudC5waWNrbGVmb3guY29t&hmac=7730cb02fd3a37e19100ce35c0c023b280327aa5394f856427212ad9f344ca05') }}" type="font/woff2" crossorigin>

         <link rel="stylesheet" href="{{ asset('asset/cdn/shop/t/7/assets/component-predictive-search.css') }}" media="print" onload="this.media='all'">
         <script>
             if (Shopify.designMode) {
                 document.documentElement.classList.add('shopify-design-mode');
             }

         </script>
         <link rel="preload" href="{{ asset('asset/cdn/shop/t/7/assets/design-pack-styles.css') }}" as="style">
         <link href="{{ asset('asset/cdn/shop/t/7/assets/design-pack-styles.css') }}" rel="stylesheet" type="text/css" media="all" />
         <!-- BEGIN app block: shopify://apps/smartseo/blocks/smartseo/7b0a6064-ca2e-4392-9a1d-8c43c942357b -->
         <meta name="smart-seo-integrated" content="true" /><!-- metatagsSavedToSEOFields: true -->
         <!-- BEGIN app snippet: smartseo.website.info.jsonld -->
         <!--JSON-LD data generated by Smart SEO-->
         <script type="application/ld+json">
             {
                 "@context": "https://schema.org"
                 , "@type": "Website"
                 , "url": "https://picklefox.com"
                 , "name": "Picklefox.com"
                 , "potentialAction": {
                     "@type": "SearchAction"
                     , "target": "https:{{ asset('asset/search?q={query}') }}"
                     , "query-input": "required name=query"
                 }
             }

         </script><!-- END app snippet -->
         <!-- END app app block -->
         <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">

         <script defer src="https:{{ asset('asset/cdn/shopifycloud/perf-kit/shopify-perf-kit-1.0.1.min.js') }}" data-application="storefront-renderer" data-shop-id="65451524292" data-render-region="gcp-asia-southeast1" data-page-type="index" data-theme-instance-id="140388761796" data-monorail-region="shop_domain" data-resource-timing-sampling-rate="10"></script>
     </head>

     <body class="gradient animate--hover-default">
         <a class="skip-to-content-link button visually-hidden" href="#MainContent">
             Skip to content
         </a><!-- BEGIN sections: header-group -->
         <div id="shopify-section-sections--17738896179396__header" class="shopify-section shopify-section-group-header-group section-header">
             <link rel="stylesheet" href="{{ asset('asset/cdn/shop/t/7/assets/component-list-menu.css') }}" media="print" onload="this.media='all'">
             <link rel="stylesheet" href="{{ asset('asset/cdn/shop/t/7/assets/component-search.css') }}" media="print" onload="this.media='all'">
             <link rel="stylesheet" href="{{ asset('asset/cdn/shop/t/7/assets/component-menu-drawer.css') }}" media="print" onload="this.media='all'">
             <link rel="stylesheet" href="{{ asset('asset/cdn/shop/t/7/assets/component-cart-notification.css') }}" media="print" onload="this.media='all'">
             <link rel="stylesheet" href="{{ asset('asset/cdn/shop/t/7/assets/component-price.css') }}" media="print" onload="this.media='all'">
             <style>
                 header-drawer {
                     justify-self: start;
                     margin-left: -1.2rem;
                 }

                 @media screen and (min-width: 990px) {
                     header-drawer {
                         display: none;
                     }
                 }

                 .menu-drawer-container {
                     display: flex;
                 }

                 .list-menu {
                     list-style: none;
                     padding: 0;
                     margin: 0;
                 }

                 .list-menu--inline {
                     display: inline-flex;
                     flex-wrap: wrap;
                 }

                 summary.list-menu__item {
                     padding-right: 2.7rem;
                 }

                 .list-menu__item {
                     display: flex;
                     align-items: center;
                     line-height: calc(1 + 0.3 / var(--font-body-scale));
                 }

                 .list-menu__item--link {
                     text-decoration: none;
                     padding-bottom: 1rem;
                     padding-top: 1rem;
                     line-height: calc(1 + 0.8 / var(--font-body-scale));
                 }

                 @media screen and (min-width: 750px) {
                     .list-menu__item--link {
                         padding-bottom: 0.5rem;
                         padding-top: 0.5rem;
                     }
                 }

             </style>
             <style data-shopify>
                 .header {
                     padding: 10px 3rem 10px 3rem;
                 }

                 .section-header {
                     position: sticky;
                     /* This is for fixing a Safari z-index issue. PR #2147 */
                     margin-bottom: 0px;
                 }

                 @media screen and (min-width: 750px) {
                     .section-header {
                         margin-bottom: 0px;
                     }
                 }

                 @media screen and (min-width: 990px) {
                     .header {
                         padding-top: 20px;
                         padding-bottom: 20px;
                     }
                 }

             </style>
             <script src="{{ asset('asset/cdn/shop/t/7/assets/cart-notification.js') }}" defer="defer"></script>
             @include('livewire.inc.header')


             <cart-notification>
                 <div class="cart-notification-wrapper page-width">
                     <div id="cart-notification" class="cart-notification focus-inset color-scheme-1 gradient" aria-modal="true" aria-label="Item added to your cart" role="dialog" tabindex="-1">
                         <div class="cart-notification__header">
                             <h2 class="cart-notification__heading caption-large text-body"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-checkmark" viewBox="0 0 12 9">
                                     <path fill="currentColor" fill-rule="evenodd" d="M11.35.643a.5.5 0 0 1 .006.707l-6.77 6.886a.5.5 0 0 1-.719-.006L.638 4.845a.5.5 0 1 1 .724-.69l2.872 3.011 6.41-6.517a.5.5 0 0 1 .707-.006z" clip-rule="evenodd" /></svg>
                                 Item added to your cart
                             </h2>
                             <button type="button" class="cart-notification__close modal__close-button link link--text focus-inset" aria-label="Close">
                                 <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                         <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                 </span>
                             </button>
                         </div>
                         <div id="cart-notification-product" class="cart-notification-product"></div>
                         <div class="cart-notification__links">
                             <a href="/cart" id="cart-notification-button" class="button button--secondary button--full-width">View cart</a>
                             <form action="/cart" method="post" id="cart-notification-form">
                                 <button class="button button--primary button--full-width" name="checkout">
                                     Check out
                                 </button>
                             </form>
                             <button type="button" class="link button-label">Continue shopping</button>
                         </div>
                     </div>
                 </div>
             </cart-notification>
             <style data-shopify>
                 .cart-notification {
                     display: none;
                 }

             </style>


             <script type="application/ld+json">
                 {
                     "@context": "http://schema.org"
                     , "@type": "Organization"
                     , "name": "Picklefox.com",

                     "logo": "https:\/\/picklefox.com\/cdn\/shop\/files\/logo_475f505e-2f86-48d1-a830-466027f570e6.png?v=1715434221\u0026width=500",

                     "sameAs": [
                         ""
                         , ""
                         , ""
                         , "https:\/\/www.instagram.com\/picklefox_com\/"
                         , ""
                         , ""
                         , ""
                         , ""
                         , ""
                     ]
                     , "url": "https:\/\/picklefox.com"
                 }

             </script>
             <script type="application/ld+json">
                 {
                     "@context": "http://schema.org"
                     , "@type": "WebSite"
                     , "name": "Picklefox.com"
                     , "potentialAction": {
                         "@type": "SearchAction"
                         , "target": "https:\/\/picklefox.com\/search?q={search_term_string}"
                         , "query-input": "required name=search_term_string"
                     }
                     , "url": "https:\/\/picklefox.com"
                 }

             </script>
         </div>
         <div id="shopify-section-sections--17738896179396__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section">
             <link href="{{ asset('asset/cdn/shop/t/7/assets/component-slideshow.css') }}" rel="stylesheet" type="text/css" media="all" />
             <link href="{{ asset('asset/cdn/shop/t/7/assets/component-slider.css') }}" rel="stylesheet" type="text/css" media="all" />

             <link href="{{ asset('asset/cdn/shop/t/7/assets/component-list-social.css') }}" rel="stylesheet" type="text/css" media="all" />


             <div class="utility-bar color-scheme-4 gradient">
                 <div class="page-width utility-bar__grid">
                     <slideshow-component class="announcement-bar" role="region" aria-roledescription="Carousel" aria-label="Announcement bar">
                         <div class="announcement-bar-slider slider-buttons">
                             <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Previous announcement" aria-controls="Slider-sections--17738896179396__announcement-bar">
                                 <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                         <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                 </span>
                             </button>
                             <div class="grid grid--1-col slider slider--everywhere" id="Slider-sections--17738896179396__announcement-bar" aria-live="polite" aria-atomic="true" data-autoplay="true" data-speed="5">
                                 <div class="slideshow__slide slider__slide grid__item grid--1-col" id="Slide-sections--17738896179396__announcement-bar-1" role="group" aria-roledescription="Announcement" aria-label="1 of 2" tabindex="-1">
                                     <div class="announcement-bar__announcement" role="region" aria-label="Announcement">
                                         <p class="announcement-bar__message h5">
                                             <span>FREE shipping on all orders over RM100 to Malaysia. Use code FREESHIP at checkout.</span></p>
                                     </div>
                                 </div>
                                 <div class="slideshow__slide slider__slide grid__item grid--1-col" id="Slide-sections--17738896179396__announcement-bar-2" role="group" aria-roledescription="Announcement" aria-label="2 of 2" tabindex="-1">
                                     <div class="announcement-bar__announcement" role="region" aria-label="Announcement"><a href="https:{{ asset('asset/products/honolulu-sword-shield-j3k?_pos=4&_fid=2dbc38f92&_ss=c') }}" class="announcement-bar__link link link--text focus-inset animate-arrow">
                                             <p class="announcement-bar__message h5">
                                                 <span>Honolulu Sword &amp; Shield paddles have dropped! J3K is super sweet, selling super fast!</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                             </p>
                                         </a></div>
                                 </div>
                             </div>
                             <button type="button" class="slider-button slider-button--next" name="next" aria-label="Next announcement" aria-controls="Slider-sections--17738896179396__announcement-bar">
                                 <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                         <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                 </span>
                             </button>
                         </div>
                     </slideshow-component>
                     <div class="localization-wrapper">
                     </div>
                 </div>
             </div>


         </div>
         <!-- END sections: header-group -->

         <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
             <section id="shopify-section-template--17738895655108__collection_list_8QCENw" class="shopify-section section section-collection-list">
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/section-collection-list.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-card.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-slider.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <style data-shopify>
                     .section-template--17738895655108__collection_list_8QCENw-padding {
                         padding-top: 27px;
                         padding-bottom: 27px;
                     }

                     @media screen and (min-width: 750px) {
                         .section-template--17738895655108__collection_list_8QCENw-padding {
                             padding-top: 36px;
                             padding-bottom: 36px;
                         }
                     }

                 </style>
                 <div class="color-scheme-4 gradient">
                     <div class="collection-list-wrapper page-width isolate page-width-desktop no-heading no-mobile-link section-template--17738895655108__collection_list_8QCENw-padding">
                         <slider-component class="slider-mobile-gutter scroll-trigger animate--slide-in">
                             <ul class="collection-list contains-card contains-card--collection contains-card--standard grid grid--4-col-desktop grid--2-col-tablet-down slider slider--tablet grid--peek collection-list--4-items" id="Slider-template--17738895655108__collection_list_8QCENw" role="list">
                                 <li id="Slide-template--17738895655108__collection_list_8QCENw-1" class="collection-list__item grid__item slider__slide scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">
                                     <div class="card-wrapper animate-arrow collection-card-wrapper">
                                         <div class="
      card
      card--standard
       card--media



    " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">
                                                         <img srcset="//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=165 165w,//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=330 330w,//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=535 535w,//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=750 750w,//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=1000 1000w,//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=1500 1500w,//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=3000 3000w,//picklefox.com/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395 4748w
              " src="{{ asset('asset/cdn/shop/collections/ripple_r2_14_2g1a0009.jpg?v=1730383395&width=1500') }}" sizes="
                (min-width: 1200px) 366px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              " alt="Paddles" height="4748" width="4748" loading="lazy" class="motion-reduce">
                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/collections/paddles" class="full-unstyled-link">Paddles
                                                             </a>
                                                         </h3>
                                                         <p class="card__caption">Discover the perfect paddle to suit your playing style. Our carefully selected...<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading">
                                                         <a href="/collections/paddles" class="full-unstyled-link">Paddles<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </a>
                                                     </h3>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </li>
                                 <li id="Slide-template--17738895655108__collection_list_8QCENw-2" class="collection-list__item grid__item slider__slide scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">
                                     <div class="card-wrapper animate-arrow collection-card-wrapper">
                                         <div class="
      card
      card--standard
       card--media



    " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">
                                                         <img srcset="//picklefox.com/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450&width=165 165w,//picklefox.com/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450&width=330 330w,//picklefox.com/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450&width=535 535w,//picklefox.com/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450&width=750 750w,//picklefox.com/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450&width=1000 1000w,//picklefox.com/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450&width=1500 1500w,//picklefox.com/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450 1946w
              " src="{{ asset('asset/cdn/shop/collections/HesacoreWomanTourGripPickleball.png?v=1730383450&width=1500') }}" sizes="
                (min-width: 1200px) 366px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              " alt="Grips" height="1946" width="1946" loading="lazy" class="motion-reduce">
                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/collections/grips" class="full-unstyled-link">Grips
                                                             </a>
                                                         </h3>
                                                         <p class="card__caption">We offer a diverse range of overgrips to cater to your playing...<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading">
                                                         <a href="/collections/grips" class="full-unstyled-link">Grips<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </a>
                                                     </h3>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </li>
                                 <li id="Slide-template--17738895655108__collection_list_8QCENw-3" class="collection-list__item grid__item slider__slide scroll-trigger animate--slide-in" data-cascade style="--animation-order: 3;">
                                     <div class="card-wrapper animate-arrow collection-card-wrapper">
                                         <div class="
      card
      card--standard
       card--media



    " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">
                                                         <img srcset="//picklefox.com/cdn/shop/collections/crbn-pickleball-safety-glasses-eyewear-clear.jpg?v=1730383992&width=165 165w,//picklefox.com/cdn/shop/collections/crbn-pickleball-safety-glasses-eyewear-clear.jpg?v=1730383992&width=330 330w,//picklefox.com/cdn/shop/collections/crbn-pickleball-safety-glasses-eyewear-clear.jpg?v=1730383992&width=535 535w,//picklefox.com/cdn/shop/collections/crbn-pickleball-safety-glasses-eyewear-clear.jpg?v=1730383992&width=750 750w,//picklefox.com/cdn/shop/collections/crbn-pickleball-safety-glasses-eyewear-clear.jpg?v=1730383992&width=1000 1000w,//picklefox.com/cdn/shop/collections/crbn-pickleball-safety-glasses-eyewear-clear.jpg?v=1730383992 1080w
              " src="{{ asset('asset/cdn/shop/collections/crbn-pickleball-safety-glasses-eyewear-clear.jpg?v=1730383992&width=1500') }}" sizes="
                (min-width: 1200px) 366px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              " alt="Eyewear" height="1080" width="1080" loading="lazy" class="motion-reduce">
                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/collections/eyewear" class="full-unstyled-link">Eyewear
                                                             </a>
                                                         </h3>
                                                         <p class="card__caption">Discover our premium range of pickleball eyewear designed for maximum protection and...<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading">
                                                         <a href="/collections/eyewear" class="full-unstyled-link">Eyewear<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </a>
                                                     </h3>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </li>
                                 <li id="Slide-template--17738895655108__collection_list_8QCENw-4" class="collection-list__item grid__item slider__slide scroll-trigger animate--slide-in" data-cascade style="--animation-order: 4;">
                                     <div class="card-wrapper animate-arrow collection-card-wrapper">
                                         <div class="
      card
      card--standard
       card--media



    " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">
                                                         <img srcset="//picklefox.com/cdn/shop/collections/lead-tape-for-pickleball-paddles-crbn.jpg?v=1730384152&width=165 165w,//picklefox.com/cdn/shop/collections/lead-tape-for-pickleball-paddles-crbn.jpg?v=1730384152&width=330 330w,//picklefox.com/cdn/shop/collections/lead-tape-for-pickleball-paddles-crbn.jpg?v=1730384152&width=535 535w,//picklefox.com/cdn/shop/collections/lead-tape-for-pickleball-paddles-crbn.jpg?v=1730384152&width=750 750w,//picklefox.com/cdn/shop/collections/lead-tape-for-pickleball-paddles-crbn.jpg?v=1730384152&width=1000 1000w,//picklefox.com/cdn/shop/collections/lead-tape-for-pickleball-paddles-crbn.jpg?v=1730384152 1080w
              " src="{{ asset('asset/cdn/shop/collections/lead-tape-for-pickleball-paddles-crbn.jpg?v=1730384152&width=1500') }}" sizes="
                (min-width: 1200px) 366px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              " alt="Accessories" height="1080" width="1080" loading="lazy" class="motion-reduce">
                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/collections/accessories-1" class="full-unstyled-link">Accessories
                                                             </a>
                                                         </h3>
                                                         <p class="card__caption">Accessories to help you enhance your pickleball play
                                                             <span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading">
                                                         <a href="/collections/accessories-1" class="full-unstyled-link">Accessories<span class="icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                                             </span>
                                                         </a>
                                                     </h3>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </li>
                             </ul>
                             <div class="slider-buttons">
                                 <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                     </span>
                                 </button>
                                 <div class="slider-counter caption">
                                     <span class="slider-counter--current">1</span>
                                     <span aria-hidden="true"> / </span>
                                     <span class="visually-hidden">of</span>
                                     <span class="slider-counter--total">4</span>
                                 </div>
                                 <button type="button" class="slider-button slider-button--next" name="next" aria-label="Slide right">
                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                     </span>
                                 </button>
                             </div>
                         </slider-component>
                     </div>
                 </div>


                 <style>
                     #shopify-section-template--17738895655108__collection_list_8QCENw li {
                         text-indent: 0 !important;
                     }

                 </style>
             </section>
             <div id="shopify-section-template--17738895655108__logo_slider_JBFkNQ" class="shopify-section">

                 <div class="logo-slider-section">
                     <h4>Official distributor and lifetime fan123</h4>
                     <div class="logo-slider">

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/paddles?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=Six+Zero') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/Six_Zero_black_large.png') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/paddles?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=Ronbus') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/Ronbus_Logo_1200x1200_3b470234-f923-4ebe-9b5d-a3b9de9b2e14_large.png') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/paddles?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=CRBN') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/CRBN_Logo_01_Horizontal_1_large.png') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/paddles?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=Engage') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/2023-engage-pickleball_2x-2048x758-1_large.png') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/paddles?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=Honolulu') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/Honolulu_Pickleball_BOX_ART_V1_3134x_7c185fc4-50dc-44e9-b67a-d7fca847f508_large.png') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/paddles?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=ProXR') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/ProXR_Black_and_Blue_Logo_410x_49981fc5-28e8-4b9b-a2e0-8bae5d25f55f_large.png') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/paddles?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=PickleballApes') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/PickleballApes_Logo_large.webp') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/grips?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=UDRIPPIN') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/udripping-logo_large.png') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/collections/grips?sort_by=best-selling&filter.v.price.gte=&filter.v.price.lte=&filter.p.vendor=Hesacore') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/Hesacore-logo_large.webp') }}" alt="Logo">
                             </a>
                         </div>

                         <div class="logo-slide">
                             <a href="https:{{ asset('asset/products/pkldout-paddle-edge-tape') }}">
                                 <img src="{{ asset('asset/cdn/shop/files/pkldout_large.png') }}" alt="Logo">
                             </a>
                         </div>

                     </div>
                 </div>

                 <style>
                     .logo-slider-section {
                         text-align: center;
                         padding: 20px;
                     }

                     .logo-slider-section h2 {
                         font-size: 24px;
                         margin-bottom: 20px;
                     }

                     .logo-slider {
                         display: flex;
                         justify-content: center;
                         gap: 20px;
                         flex-wrap: wrap;
                     }

                     .logo-slide {
                         flex: 1 1 160px;
                         max-width: 160px;
                         margin: 10px;
                     }

                     .logo-slide img {
                         max-width: 100%;
                         padding: 20px;
                         height: auto;
                     }

                     /* Responsive adjustments */
                     @media (max-width: 768px) {
                         .logo-slider {
                             justify-content: center;
                         }

                         .logo-slide {
                             flex: 1 1 120px;
                             max-width: 120px;
                         }

                         .logo-slider-section h2 {
                             font-size: 20px;
                         }

                         .logo-slider-section {
                             max-width: 1400px;
                         }
                     }

                     @media (max-width: 480px) {
                         .logo-slider {
                             justify-content: center;
                             gap: 10px;
                         }

                         .logo-slide {
                             flex: 1 1 120px;
                             max-width: 120px;
                         }

                         .logo-slider-section h2 {
                             font-size: 18px;
                         }
                     }

                 </style>
                 <style>
                     #shopify-section-template--17738895655108__logo_slider_JBFkNQ .logo-slide {
                         height: 90px;
                         line-height: 90px;
                         text-align: center;
                     }

                     #shopify-section-template--17738895655108__logo_slider_JBFkNQ .logo-slide img {
                         vertical-align: middle;
                         max-height: 100%;
                     }

                     #shopify-section-template--17738895655108__logo_slider_JBFkNQ .logo-slider-section {
                         text-align: center;
                         padding: 20px;
                         max-width: 1400px;
                         margin: 0 auto;
                     }

                 </style>
             </div>
             <section id="shopify-section-template--17738895655108__featured_collection" class="shopify-section section">
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-card.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-price.css') }}" rel="stylesheet" type="text/css" media="all" />

                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-slider.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/template-collection.css') }}" rel="stylesheet" type="text/css" media="all" />

                 <link href="{{ asset('asset/cdn/shop/t/7/assets/quick-add.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <script src="{{ asset('asset/cdn/shop/t/7/assets/product-form.js') }}" defer="defer"></script>
                 <script src="{{ asset('asset/cdn/shop/t/7/assets/quick-add.js') }}" defer="defer"></script>
                 <style data-shopify>
                     .section-template--17738895655108__featured_collection-padding {
                         padding-top: 24px;
                         padding-bottom: 27px;
                     }

                     @media screen and (min-width: 750px) {
                         .section-template--17738895655108__featured_collection-padding {
                             padding-top: 32px;
                             padding-bottom: 36px;
                         }
                     }

                 </style>
                 <div class="color-scheme-1 isolate gradient">
                     <div class="collection section-template--17738895655108__featured_collection-padding" id="collection-template--17738895655108__featured_collection" data-id="template--17738895655108__featured_collection">
                         <div class="collection__title title-wrapper title-wrapper--no-top-margin page-width">
                             <h2 class="title inline-richtext h2 scroll-trigger animate--slide-in">
                                 Freshest Paddles
                             </h2>
                             <div class="collection__description body rte scroll-trigger animate--slide-in">
                                 <p class="p1">Explore the latest pickleball paddles at Picklefox. Our new arrivals feature cutting-edge designs and advanced materials to enhance your game. Upgrade your play with the freshest paddles designed for peak performance. Shop now and be the first to own the newest gear in pickleball!</p>
                                 <!---->

                             </div>
                         </div>

                         <slider-component class="slider-mobile-gutter page-width page-width-desktop scroll-trigger animate--slide-in">
                             <ul id="Slider-template--17738895655108__featured_collection" data-id="template--17738895655108__featured_collection" class="grid product-grid contains-card contains-card--product contains-card--standard grid--4-col-desktop grid--2-col-tablet-down" role="list" aria-label="Slider">

                                 <li id="Slide-template--17738895655108__featured_collection-1" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">

                                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-rating.css') }}" rel="stylesheet" type="text/css" media="all" />
                                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-volume-pricing.css') }}" rel="stylesheet" type="text/css" media="all" />

                                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-price.css') }}" rel="stylesheet" type="text/css" media="all" />
                                     <link href="{{ asset('asset/cdn/shop/t/7/assets/quick-order-list.css') }}" rel="stylesheet" type="text/css" media="all" />
                                     <link href="{{ asset('asset/cdn/shop/t/7/assets/quantity-popover.css') }}" rel="stylesheet" type="text/css" media="all" />
                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/1_1024x1024_b1f6e874-aca8-4b46-8455-87765f247ebd.png?v=1722681906&width=165 165w,//picklefox.com/cdn/shop/files/1_1024x1024_b1f6e874-aca8-4b46-8455-87765f247ebd.png?v=1722681906&width=360 360w,//picklefox.com/cdn/shop/files/1_1024x1024_b1f6e874-aca8-4b46-8455-87765f247ebd.png?v=1722681906&width=533 533w,//picklefox.com/cdn/shop/files/1_1024x1024_b1f6e874-aca8-4b46-8455-87765f247ebd.png?v=1722681906&width=720 720w,//picklefox.com/cdn/shop/files/1_1024x1024_b1f6e874-aca8-4b46-8455-87765f247ebd.png?v=1722681906&width=940 940w,//picklefox.com/cdn/shop/files/1_1024x1024_b1f6e874-aca8-4b46-8455-87765f247ebd.png?v=1722681906 1024w
                " src="{{ asset('asset/cdn/shop/files/1_1024x1024_b1f6e874-aca8-4b46-8455-87765f247ebd.png?v=1722681906&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Six Zero Quartz Pickleball Paddle with large sweet spot for enhanced control, power, and performance." class="motion-reduce" loading="lazy" width="1024" height="1024">

                                                         <img srcset="//picklefox.com/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906&width=165 165w,//picklefox.com/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906&width=360 360w,//picklefox.com/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906&width=533 533w,//picklefox.com/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906&width=720 720w,//picklefox.com/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906&width=940 940w,//picklefox.com/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906&width=1066 1066w,//picklefox.com/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906 1080w
                  " src="{{ asset('asset/cdn/shop/files/2_020095fe-a13c-4b72-a8ab-2ede8f3ddc41.png?v=1722681906&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/six-zero-quartz" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7993786564804" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7993786564804 NoMediaStandardBadge-template--17738895655108__featured_collection-7993786564804">
                                                                 Six Zero Quartz
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7993786564804">
                                                         <a href="/products/six-zero-quartz" id="CardLink-template--17738895655108__featured_collection-7993786564804" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7993786564804 Badge-template--17738895655108__featured_collection-7993786564804">
                                                             Six Zero Quartz
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="3" data-url="/products/six-zero-quartz" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM405.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM405.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-7993786564804">
                                                         <button id="quick-add-template--17738895655108__featured_collection7993786564804-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7993786564804-submit title-template--17738895655108__featured_collection-7993786564804" data-product-url="/products/six-zero-quartz">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-7993786564804" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for Six Zero Quartz" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-7993786564804" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-7993786564804" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-2" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508&width=165 165w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508&width=360 360w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508&width=533 533w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508&width=720 720w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508&width=940 940w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508&width=1066 1066w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508 1080w
                " src="{{ asset('asset/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152725786.png?v=1718364508&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Six Zero Double Black Diamond Control paddle with revolutionary Raw Carbon Technology. Paddle of the Year 2023." class="motion-reduce" loading="lazy" width="1080" height="1080">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507&width=165 165w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507&width=360 360w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507&width=533 533w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507&width=720 720w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507&width=940 940w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507&width=1066 1066w,//picklefox.com/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507 1080w
                  " src="{{ asset('asset/cdn/shop/files/Double-Black-Diamond-Control-Six-Zero-152727049.png?v=1718364507&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/six-zero-double-black-diamond-control" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7934034673860" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7934034673860 NoMediaStandardBadge-template--17738895655108__featured_collection-7934034673860">
                                                                 Six Zero Double Black Diamond Control
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7934034673860">
                                                         <a href="/products/six-zero-double-black-diamond-control" id="CardLink-template--17738895655108__featured_collection-7934034673860" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7934034673860 Badge-template--17738895655108__featured_collection-7934034673860">
                                                             Six Zero Double Black Diamond Control
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="3" data-url="/products/six-zero-double-black-diamond-control" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM810.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM810.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-7934034673860">
                                                         <button id="quick-add-template--17738895655108__featured_collection7934034673860-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7934034673860-submit title-template--17738895655108__featured_collection-7934034673860" data-product-url="/products/six-zero-double-black-diamond-control">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-7934034673860" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for Six Zero Double Black Diamond Control" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-7934034673860" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-7934034673860" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-3" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 3;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010&width=165 165w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010&width=360 360w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010&width=533 533w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010&width=720 720w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010&width=940 940w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010&width=1066 1066w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010 1080w
                " src="{{ asset('asset/cdn/shop/files/Ruby-Six-Zero-152745783.png?v=1716110010&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Six Zero Ruby Pickleball Paddle - advanced spin technology for superior control on the court" class="motion-reduce" loading="lazy" width="1080" height="1080">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009&width=165 165w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009&width=360 360w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009&width=533 533w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009&width=720 720w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009&width=940 940w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009&width=1066 1066w,//picklefox.com/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009 1080w
                  " src="{{ asset('asset/cdn/shop/files/Ruby-Six-Zero-152745913.png?v=1716110009&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/six-zero-ruby" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7853004226756" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7853004226756 NoMediaStandardBadge-template--17738895655108__featured_collection-7853004226756">
                                                                 Six Zero Ruby
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7853004226756">
                                                         <a href="/products/six-zero-ruby" id="CardLink-template--17738895655108__featured_collection-7853004226756" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7853004226756 Badge-template--17738895655108__featured_collection-7853004226756">
                                                             Six Zero Ruby
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="2" data-url="/products/six-zero-ruby" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM896.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM896.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-7853004226756">
                                                         <button id="quick-add-template--17738895655108__featured_collection7853004226756-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7853004226756-submit title-template--17738895655108__featured_collection-7853004226756" data-product-url="/products/six-zero-ruby">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-7853004226756" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for Six Zero Ruby" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-7853004226756" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-7853004226756" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-4" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 4;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092&width=165 165w,//picklefox.com/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092&width=360 360w,//picklefox.com/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092&width=533 533w,//picklefox.com/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092&width=720 720w,//picklefox.com/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092&width=940 940w,//picklefox.com/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092&width=1066 1066w,//picklefox.com/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092 1080w
                " src="{{ asset('asset/cdn/shop/files/CRBN3X16_2.jpg?v=1722676092&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="CRBN³ X Series Hybrid Power Paddle with durable carbon fiber face for elite pickleball players seeking power and performance." class="motion-reduce" loading="lazy" width="1080" height="1080">

                                                         <img srcset="//picklefox.com/cdn/shop/files/CRBN3X16.jpg?v=1722676092&width=165 165w,//picklefox.com/cdn/shop/files/CRBN3X16.jpg?v=1722676092&width=360 360w,//picklefox.com/cdn/shop/files/CRBN3X16.jpg?v=1722676092&width=533 533w,//picklefox.com/cdn/shop/files/CRBN3X16.jpg?v=1722676092&width=720 720w,//picklefox.com/cdn/shop/files/CRBN3X16.jpg?v=1722676092&width=940 940w,//picklefox.com/cdn/shop/files/CRBN3X16.jpg?v=1722676092&width=1066 1066w,//picklefox.com/cdn/shop/files/CRBN3X16.jpg?v=1722676092 1080w
                  " src="{{ asset('asset/cdn/shop/files/CRBN3X16.jpg?v=1722676092&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/crbn-x-series-hybrid-power-paddle" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7993769099460" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7993769099460 NoMediaStandardBadge-template--17738895655108__featured_collection-7993769099460">
                                                                 CRBN³ X Series Hybrid Power Paddle [PRE-ORDER]
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7993769099460">
                                                         <a href="/products/crbn-x-series-hybrid-power-paddle" id="CardLink-template--17738895655108__featured_collection-7993769099460" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7993769099460 Badge-template--17738895655108__featured_collection-7993769099460">
                                                             CRBN³ X Series Hybrid Power Paddle [PRE-ORDER]
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="2" data-url="/products/crbn-x-series-hybrid-power-paddle" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM1,080.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM1,080.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-7993769099460">
                                                         <button id="quick-add-template--17738895655108__featured_collection7993769099460-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7993769099460-submit title-template--17738895655108__featured_collection-7993769099460" data-product-url="/products/crbn-x-series-hybrid-power-paddle">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-7993769099460" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for CRBN³ X Series Hybrid Power Paddle [PRE-ORDER]" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-7993769099460" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-7993769099460" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-5" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 5;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152742658_1024x1024_7043c83b-9539-462a-8564-d6a2782ce2a0.png?v=1716109634&width=165 165w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152742658_1024x1024_7043c83b-9539-462a-8564-d6a2782ce2a0.png?v=1716109634&width=360 360w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152742658_1024x1024_7043c83b-9539-462a-8564-d6a2782ce2a0.png?v=1716109634&width=533 533w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152742658_1024x1024_7043c83b-9539-462a-8564-d6a2782ce2a0.png?v=1716109634&width=720 720w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152742658_1024x1024_7043c83b-9539-462a-8564-d6a2782ce2a0.png?v=1716109634&width=940 940w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152742658_1024x1024_7043c83b-9539-462a-8564-d6a2782ce2a0.png?v=1716109634 1024w
                " src="{{ asset('asset/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152742658_1024x1024_7043c83b-9539-462a-8564-d6a2782ce2a0.png?v=1716109634&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Six Zero Infinity Series Double Black Diamond pickleball paddle with revolutionary edge technology for high-performance play" class="motion-reduce" loading="lazy" width="1024" height="1024">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634&width=165 165w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634&width=360 360w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634&width=533 533w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634&width=720 720w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634&width=940 940w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634&width=1066 1066w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634 1080w
                  " src="{{ asset('asset/cdn/shop/files/Infinity-Edgeless-Double-Black-Diamond-Control-Six-Zero-152744166_b9344778-ff8a-447c-9503-4b2514fe0385.png?v=1716109634&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/six-zero-infinity-edgeless-double-black-diamond-control" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7852994265284" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7852994265284 NoMediaStandardBadge-template--17738895655108__featured_collection-7852994265284">
                                                                 Six Zero Infinity Edgeless Double Black Diamond Control
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7852994265284">
                                                         <a href="/products/six-zero-infinity-edgeless-double-black-diamond-control" id="CardLink-template--17738895655108__featured_collection-7852994265284" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7852994265284 Badge-template--17738895655108__featured_collection-7852994265284">
                                                             Six Zero Infinity Edgeless Double Black Diamond Control
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="1" data-url="/products/six-zero-infinity-edgeless-double-black-diamond-control" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM990.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM990.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-7852994265284">
                                                         <button id="quick-add-template--17738895655108__featured_collection7852994265284-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7852994265284-submit title-template--17738895655108__featured_collection-7852994265284" data-product-url="/products/six-zero-infinity-edgeless-double-black-diamond-control">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-7852994265284" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for Six Zero Infinity Edgeless Double Black Diamond Control" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-7852994265284" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-7852994265284" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-6" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 6;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_4_800x_6c19f3db-611c-40eb-8e47-6848aa8588c6.jpg?v=1728307711&width=165 165w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_4_800x_6c19f3db-611c-40eb-8e47-6848aa8588c6.jpg?v=1728307711&width=360 360w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_4_800x_6c19f3db-611c-40eb-8e47-6848aa8588c6.jpg?v=1728307711&width=533 533w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_4_800x_6c19f3db-611c-40eb-8e47-6848aa8588c6.jpg?v=1728307711&width=720 720w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_4_800x_6c19f3db-611c-40eb-8e47-6848aa8588c6.jpg?v=1728307711 800w
                " src="{{ asset('asset/cdn/shop/files/SWORD_SHIELDJ2K_4_800x_6c19f3db-611c-40eb-8e47-6848aa8588c6.jpg?v=1728307711&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Honolulu Sword &amp; Shield J2K paddle in red, featuring DuPont Kevlar for enhanced power, spin, and control with an aero hybrid shape." class="motion-reduce" loading="lazy" width="800" height="800">

                                                         <img srcset="//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_5_800x_d50e5b9a-3376-4edb-99f9-35e4305150de.jpg?v=1728307720&width=165 165w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_5_800x_d50e5b9a-3376-4edb-99f9-35e4305150de.jpg?v=1728307720&width=360 360w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_5_800x_d50e5b9a-3376-4edb-99f9-35e4305150de.jpg?v=1728307720&width=533 533w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_5_800x_d50e5b9a-3376-4edb-99f9-35e4305150de.jpg?v=1728307720&width=720 720w,//picklefox.com/cdn/shop/files/SWORD_SHIELDJ2K_5_800x_d50e5b9a-3376-4edb-99f9-35e4305150de.jpg?v=1728307720 800w
                  " src="{{ asset('asset/cdn/shop/files/SWORD_SHIELDJ2K_5_800x_d50e5b9a-3376-4edb-99f9-35e4305150de.jpg?v=1728307720&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="800" height="800"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/honolulu-sword-shield-j2k" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8075075748036" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8075075748036 NoMediaStandardBadge-template--17738895655108__featured_collection-8075075748036">
                                                                 Honolulu Sword &amp; Shield J2K
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"><span id="NoMediaStandardBadge-template--17738895655108__featured_collection-8075075748036" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8075075748036">
                                                         <a href="/products/honolulu-sword-shield-j2k" id="CardLink-template--17738895655108__featured_collection-8075075748036" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8075075748036 Badge-template--17738895655108__featured_collection-8075075748036">
                                                             Honolulu Sword &amp; Shield J2K
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="1" data-url="/products/honolulu-sword-shield-j2k" data-rco="1"></div>

                                                         <div class="
      price  price--sold-out">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM720.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM720.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-8075075748036">
                                                         <button id="quick-add-template--17738895655108__featured_collection8075075748036-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8075075748036-submit title-template--17738895655108__featured_collection-8075075748036" data-product-url="/products/honolulu-sword-shield-j2k">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-8075075748036" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for Honolulu Sword &amp;amp; Shield J2K" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-8075075748036" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-8075075748036" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"><span id="Badge-template--17738895655108__featured_collection-8075075748036" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-7" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 7;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693&width=165 165w,//picklefox.com/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693&width=360 360w,//picklefox.com/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693&width=533 533w,//picklefox.com/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693&width=720 720w,//picklefox.com/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693&width=940 940w,//picklefox.com/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693&width=1066 1066w,//picklefox.com/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693 4944w
                " src="{{ asset('asset/cdn/shop/files/r1pfx2g1a0015.jpg?v=1721211693&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Ronbus R1 Pulsar FX paddle with Gen 3 thermoforming, patent pending grid technology for enhanced power and maximum spin" class="motion-reduce" loading="lazy" width="4944" height="4944">

                                                         <img srcset="//picklefox.com/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764&width=165 165w,//picklefox.com/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764&width=360 360w,//picklefox.com/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764&width=533 533w,//picklefox.com/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764&width=720 720w,//picklefox.com/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764&width=940 940w,//picklefox.com/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764&width=1066 1066w,//picklefox.com/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764 2800w
                  " src="{{ asset('asset/cdn/shop/files/R1PFX2G1A0016.jpg?v=1721211764&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="2800" height="2800"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/ronbus-r1-pulsar-fx" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7975408795844" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7975408795844 NoMediaStandardBadge-template--17738895655108__featured_collection-7975408795844">
                                                                 Ronbus R1 Pulsar FX
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7975408795844">
                                                         <a href="/products/ronbus-r1-pulsar-fx" id="CardLink-template--17738895655108__featured_collection-7975408795844" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7975408795844 Badge-template--17738895655108__featured_collection-7975408795844">
                                                             Ronbus R1 Pulsar FX
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="2" data-url="/products/ronbus-r1-pulsar-fx" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM864.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM864.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection7975408795844" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43943725301956" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection7975408795844-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7975408795844-submit title-template--17738895655108__featured_collection-7975408795844" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="7975408795844" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-8" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 8;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533&width=165 165w,//picklefox.com/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533&width=360 360w,//picklefox.com/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533&width=533 533w,//picklefox.com/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533&width=720 720w,//picklefox.com/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533&width=940 940w,//picklefox.com/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533&width=1066 1066w,//picklefox.com/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533 1080w
                " src="{{ asset('asset/cdn/shop/files/1_a4304a31-c37b-4869-8988-fa0d6c3c10c7.png?v=1726642533&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Six Zero Double Black Diamond Control Elongated Paddle with Raw Carbon Technology for Precision and Control" class="motion-reduce" loading="lazy" width="1080" height="1080">

                                                         <img srcset="//picklefox.com/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533&width=165 165w,//picklefox.com/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533&width=360 360w,//picklefox.com/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533&width=533 533w,//picklefox.com/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533&width=720 720w,//picklefox.com/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533&width=940 940w,//picklefox.com/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533&width=1066 1066w,//picklefox.com/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533 1080w
                  " src="{{ asset('asset/cdn/shop/files/2_b95eb47d-f435-4ba3-af7c-235bc25e443c.png?v=1726642533&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/six-zero-double-black-diamond-control-elongated" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8051970310340" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8051970310340 NoMediaStandardBadge-template--17738895655108__featured_collection-8051970310340">
                                                                 Six Zero Double Black Diamond Control Elongated
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8051970310340">
                                                         <a href="/products/six-zero-double-black-diamond-control-elongated" id="CardLink-template--17738895655108__featured_collection-8051970310340" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8051970310340 Badge-template--17738895655108__featured_collection-8051970310340">
                                                             Six Zero Double Black Diamond Control Elongated
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM855.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM855.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection8051970310340" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44178867421380" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection8051970310340-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8051970310340-submit title-template--17738895655108__featured_collection-8051970310340" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="8051970310340" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-9" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 9;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605&width=165 165w,//picklefox.com/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605&width=360 360w,//picklefox.com/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605&width=533 533w,//picklefox.com/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605&width=720 720w,//picklefox.com/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605&width=940 940w,//picklefox.com/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605&width=1066 1066w,//picklefox.com/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605 2048w
                " src="{{ asset('asset/cdn/shop/files/r2pfx2g1a0009.jpg?v=1722215605&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Ronbus R2 Pulsar FX thermoforming paddle with carbon fiber grid, enhanced power, and maximum spin" class="motion-reduce" loading="lazy" width="2048" height="2048">

                                                         <img srcset="//picklefox.com/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610&width=165 165w,//picklefox.com/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610&width=360 360w,//picklefox.com/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610&width=533 533w,//picklefox.com/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610&width=720 720w,//picklefox.com/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610&width=940 940w,//picklefox.com/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610&width=1066 1066w,//picklefox.com/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610 2048w
                  " src="{{ asset('asset/cdn/shop/files/R2PFX2G1A0010.jpg?v=1722215610&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="2048" height="2048"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/ronbus-r2-pulsar-fx" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7846292160708" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7846292160708 NoMediaStandardBadge-template--17738895655108__featured_collection-7846292160708">
                                                                 Ronbus R2 Pulsar FX
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7846292160708">
                                                         <a href="/products/ronbus-r2-pulsar-fx" id="CardLink-template--17738895655108__featured_collection-7846292160708" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7846292160708 Badge-template--17738895655108__featured_collection-7846292160708">
                                                             Ronbus R2 Pulsar FX
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="4" data-url="/products/ronbus-r2-pulsar-fx" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM864.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM864.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection7846292160708" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43608924291268" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection7846292160708-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7846292160708-submit title-template--17738895655108__featured_collection-7846292160708" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="7846292160708" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-10" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 10;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/J7K_RED_800x_cf485048-c3eb-4187-9597-22bc33ff54b0.jpg?v=1728309081&width=165 165w,//picklefox.com/cdn/shop/files/J7K_RED_800x_cf485048-c3eb-4187-9597-22bc33ff54b0.jpg?v=1728309081&width=360 360w,//picklefox.com/cdn/shop/files/J7K_RED_800x_cf485048-c3eb-4187-9597-22bc33ff54b0.jpg?v=1728309081&width=533 533w,//picklefox.com/cdn/shop/files/J7K_RED_800x_cf485048-c3eb-4187-9597-22bc33ff54b0.jpg?v=1728309081&width=720 720w,//picklefox.com/cdn/shop/files/J7K_RED_800x_cf485048-c3eb-4187-9597-22bc33ff54b0.jpg?v=1728309081 800w
                " src="{{ asset('asset/cdn/shop/files/J7K_RED_800x_cf485048-c3eb-4187-9597-22bc33ff54b0.jpg?v=1728309081&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Honolulu Sword &amp; Shield J7K Pickleball Paddle with red design, showcasing power, spin, and control with elongated aero shape." class="motion-reduce" loading="lazy" width="800" height="800">

                                                         <img srcset="//picklefox.com/cdn/shop/files/IMG_2212_800x_ea445a67-4907-40dc-8bef-ccea0cb3ead7.jpg?v=1728309093&width=165 165w,//picklefox.com/cdn/shop/files/IMG_2212_800x_ea445a67-4907-40dc-8bef-ccea0cb3ead7.jpg?v=1728309093&width=360 360w,//picklefox.com/cdn/shop/files/IMG_2212_800x_ea445a67-4907-40dc-8bef-ccea0cb3ead7.jpg?v=1728309093&width=533 533w,//picklefox.com/cdn/shop/files/IMG_2212_800x_ea445a67-4907-40dc-8bef-ccea0cb3ead7.jpg?v=1728309093&width=720 720w,//picklefox.com/cdn/shop/files/IMG_2212_800x_ea445a67-4907-40dc-8bef-ccea0cb3ead7.jpg?v=1728309093 800w
                  " src="{{ asset('asset/cdn/shop/files/IMG_2212_800x_ea445a67-4907-40dc-8bef-ccea0cb3ead7.jpg?v=1728309093&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="800" height="800"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/honolulu-sword-shield-j7k" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8075079286980" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8075079286980 NoMediaStandardBadge-template--17738895655108__featured_collection-8075079286980">
                                                                 Honolulu Sword &amp; Shield J7K
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"><span id="NoMediaStandardBadge-template--17738895655108__featured_collection-8075079286980" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8075079286980">
                                                         <a href="/products/honolulu-sword-shield-j7k" id="CardLink-template--17738895655108__featured_collection-8075079286980" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8075079286980 Badge-template--17738895655108__featured_collection-8075079286980">
                                                             Honolulu Sword &amp; Shield J7K
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price  price--sold-out">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM720.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM720.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-8075079286980">
                                                         <button id="quick-add-template--17738895655108__featured_collection8075079286980-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8075079286980-submit title-template--17738895655108__featured_collection-8075079286980" data-product-url="/products/honolulu-sword-shield-j7k">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-8075079286980" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for Honolulu Sword &amp;amp; Shield J7K" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-8075079286980" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-8075079286980" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"><span id="Badge-template--17738895655108__featured_collection-8075079286980" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-11" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 11;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714&width=165 165w,//picklefox.com/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714&width=360 360w,//picklefox.com/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714&width=533 533w,//picklefox.com/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714&width=720 720w,//picklefox.com/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714&width=940 940w,//picklefox.com/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714&width=1066 1066w,//picklefox.com/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714 1080w
                " src="{{ asset('asset/cdn/shop/files/IMG_2611_5553a3de-42a7-4a98-90e6-fb4bbb418b57.jpg?v=1722675714&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="CRBN X Elongated Power Paddle with durable carbon fiber face for elite pickleball players seeking unmatched power and performance" class="motion-reduce" loading="lazy" width="1080" height="1080">

                                                         <img srcset="//picklefox.com/cdn/shop/files/IMG_2612.jpg?v=1722675713&width=165 165w,//picklefox.com/cdn/shop/files/IMG_2612.jpg?v=1722675713&width=360 360w,//picklefox.com/cdn/shop/files/IMG_2612.jpg?v=1722675713&width=533 533w,//picklefox.com/cdn/shop/files/IMG_2612.jpg?v=1722675713&width=720 720w,//picklefox.com/cdn/shop/files/IMG_2612.jpg?v=1722675713&width=940 940w,//picklefox.com/cdn/shop/files/IMG_2612.jpg?v=1722675713&width=1066 1066w,//picklefox.com/cdn/shop/files/IMG_2612.jpg?v=1722675713 1080w
                  " src="{{ asset('asset/cdn/shop/files/IMG_2612.jpg?v=1722675713&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/crbn-x-elongated-power-paddle" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7993768280260" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7993768280260 NoMediaStandardBadge-template--17738895655108__featured_collection-7993768280260">
                                                                 CRBN¹ X Elongated Power Paddle
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7993768280260">
                                                         <a href="/products/crbn-x-elongated-power-paddle" id="CardLink-template--17738895655108__featured_collection-7993768280260" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7993768280260 Badge-template--17738895655108__featured_collection-7993768280260">
                                                             CRBN¹ X Elongated Power Paddle
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM1,080.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM1,080.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection7993768280260" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44015227764932" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection7993768280260-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7993768280260-submit title-template--17738895655108__featured_collection-7993768280260" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="7993768280260" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-12" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 12;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634&width=165 165w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634&width=360 360w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634&width=533 533w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634&width=720 720w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634&width=940 940w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634&width=1066 1066w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634 1080w
                " src="{{ asset('asset/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744287.png?v=1716109634&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Six Zero Infinity Edgeless Black Diamond Power pickleball paddle with advanced technology for high-performance play" class="motion-reduce" loading="lazy" width="1080" height="1080">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634&width=165 165w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634&width=360 360w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634&width=533 533w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634&width=720 720w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634&width=940 940w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634&width=1066 1066w,//picklefox.com/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634 1080w
                  " src="{{ asset('asset/cdn/shop/files/Infinity-Edgeless-Black-Diamond-Power-Six-Zero-152744711.png?v=1716109634&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/six-zero-infinity-edgeless-black-diamond-power" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7850723213508" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7850723213508 NoMediaStandardBadge-template--17738895655108__featured_collection-7850723213508">
                                                                 Six Zero Infinity Edgeless Black Diamond Power
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7850723213508">
                                                         <a href="/products/six-zero-infinity-edgeless-black-diamond-power" id="CardLink-template--17738895655108__featured_collection-7850723213508" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7850723213508 Badge-template--17738895655108__featured_collection-7850723213508">
                                                             Six Zero Infinity Edgeless Black Diamond Power
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>


                                                         <div class="rapid_reviews_stars_badge r_grid" data-avg="5" data-count="1" data-url="/products/six-zero-infinity-edgeless-black-diamond-power" data-rco="1"></div>

                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM990.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM990.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection7850723213508" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43613446373572" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection7850723213508-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7850723213508-submit title-template--17738895655108__featured_collection-7850723213508" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="7850723213508" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-13" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 13;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125&width=165 165w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125&width=360 360w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125&width=533 533w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125&width=720 720w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125&width=940 940w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125&width=1066 1066w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125 1251w
                " src="{{ asset('asset/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_8_500x500_3x_ab3c6938-7886-4879-a65f-31bc2bf28d04.jpg?v=1722159125&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ProXR Sweet Spot Max paddle with T700 Ultra-Raw Carbon and thermoformed edge guard for maximum control and unreturnable spin" class="motion-reduce" loading="lazy" width="1251" height="1251">

                                                         <img srcset="//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125&width=165 165w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125&width=360 360w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125&width=533 533w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125&width=720 720w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125&width=940 940w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125&width=1066 1066w,//picklefox.com/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125 1251w
                  " src="{{ asset('asset/cdn/shop/files/ProXR_Pickleball_Tiger_Orange_Pickleball_Paddle_7_500x500_3x_59a34383-a00a-4958-9a13-c020d665ed09.jpg?v=1722159125&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1251" height="1251"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/proxr-sweet-spot-max" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7975433109700" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7975433109700 NoMediaStandardBadge-template--17738895655108__featured_collection-7975433109700">
                                                                 ProXR Sweet Spot Max
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7975433109700">
                                                         <a href="/products/proxr-sweet-spot-max" id="CardLink-template--17738895655108__featured_collection-7975433109700" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7975433109700 Badge-template--17738895655108__featured_collection-7975433109700">
                                                             ProXR Sweet Spot Max
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM1,014.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM1,014.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-7975433109700">
                                                         <button id="quick-add-template--17738895655108__featured_collection7975433109700-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7975433109700-submit title-template--17738895655108__featured_collection-7975433109700" data-product-url="/products/proxr-sweet-spot-max">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-7975433109700" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for ProXR Sweet Spot Max" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-7975433109700" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-7975433109700" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-14" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 14;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887&width=165 165w,//picklefox.com/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887&width=360 360w,//picklefox.com/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887&width=533 533w,//picklefox.com/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887&width=720 720w,//picklefox.com/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887&width=940 940w,//picklefox.com/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887&width=1066 1066w,//picklefox.com/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887 2048w
                " src="{{ asset('asset/cdn/shop/files/r3pfx2g1a0022.jpg?v=1716088887&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Ronbus R3 Pulsar FX thermoforming paddle with patent pending grid technology for enhanced power and maximum spin." class="motion-reduce" loading="lazy" width="2048" height="2048">

                                                         <img srcset="//picklefox.com/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887&width=165 165w,//picklefox.com/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887&width=360 360w,//picklefox.com/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887&width=533 533w,//picklefox.com/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887&width=720 720w,//picklefox.com/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887&width=940 940w,//picklefox.com/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887&width=1066 1066w,//picklefox.com/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887 2048w
                  " src="{{ asset('asset/cdn/shop/files/R3PFX2G1A0023.jpg?v=1716088887&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="2048" height="2048"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/ronbus-r3-pulsar-fx" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7846256017604" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7846256017604 NoMediaStandardBadge-template--17738895655108__featured_collection-7846256017604">
                                                                 Ronbus R3 Pulsar FX
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7846256017604">
                                                         <a href="/products/ronbus-r3-pulsar-fx" id="CardLink-template--17738895655108__featured_collection-7846256017604" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7846256017604 Badge-template--17738895655108__featured_collection-7846256017604">
                                                             Ronbus R3 Pulsar FX
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM864.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM864.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection7846256017604" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43608886870212" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection7846256017604-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7846256017604-submit title-template--17738895655108__featured_collection-7846256017604" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="7846256017604" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-15" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 15;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336&width=165 165w,//picklefox.com/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336&width=360 360w,//picklefox.com/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336&width=533 533w,//picklefox.com/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336&width=720 720w,//picklefox.com/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336&width=940 940w,//picklefox.com/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336&width=1066 1066w,//picklefox.com/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336 4748w
                " src="{{ asset('asset/cdn/shop/files/ripple_r2_14_2g1a0009.jpg?v=1727586336&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Ronbus Ripple R2.14 paddle with 3D carbon fiber grid infused EVA core and textured Toray T700 carbon fiber surface." class="motion-reduce" loading="lazy" width="4748" height="4748">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371&width=165 165w,//picklefox.com/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371&width=360 360w,//picklefox.com/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371&width=533 533w,//picklefox.com/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371&width=720 720w,//picklefox.com/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371&width=940 940w,//picklefox.com/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371&width=1066 1066w,//picklefox.com/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371 4000w
                  " src="{{ asset('asset/cdn/shop/files/Ripple_R2_14_2G1A0010.jpg?v=1727586371&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="4000" height="4000"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/ronbus-ripple-r2-14" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8066945679556" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8066945679556 NoMediaStandardBadge-template--17738895655108__featured_collection-8066945679556">
                                                                 Ronbus Ripple R2.14
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"><span id="NoMediaStandardBadge-template--17738895655108__featured_collection-8066945679556" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8066945679556">
                                                         <a href="/products/ronbus-ripple-r2-14" id="CardLink-template--17738895655108__featured_collection-8066945679556" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8066945679556 Badge-template--17738895655108__featured_collection-8066945679556">
                                                             Ronbus Ripple R2.14
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price  price--sold-out">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM1,200.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM1,200.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection8066945679556" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44229630296260" class="product-variant-id" disabled>
                                                             <button id="quick-add-template--17738895655108__featured_collection8066945679556-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8066945679556-submit title-template--17738895655108__featured_collection-8066945679556" aria-live="polite" data-sold-out-message="true" disabled>
                                                                 <span>Sold out
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="8066945679556" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"><span id="Badge-template--17738895655108__featured_collection-8066945679556" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-16" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 16;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852&width=165 165w,//picklefox.com/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852&width=360 360w,//picklefox.com/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852&width=533 533w,//picklefox.com/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852&width=720 720w,//picklefox.com/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852&width=940 940w,//picklefox.com/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852&width=1066 1066w,//picklefox.com/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852 4960w
                " src="{{ asset('asset/cdn/shop/files/ripple_r1_14_2g1a0001.jpg?v=1727585852&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Ronbus Ripple R1.14 paddle with 3D carbon fiber grid infused EVA core and Raw Toray T700 carbon fiber textured surface." class="motion-reduce" loading="lazy" width="4960" height="4960">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933&width=165 165w,//picklefox.com/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933&width=360 360w,//picklefox.com/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933&width=533 533w,//picklefox.com/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933&width=720 720w,//picklefox.com/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933&width=940 940w,//picklefox.com/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933&width=1066 1066w,//picklefox.com/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933 4000w
                  " src="{{ asset('asset/cdn/shop/files/Ripple_R1_14_2G1A0002.jpg?v=1727585933&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="4000" height="4000"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/ronbus-ripple-r1-14" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8066942402756" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8066942402756 NoMediaStandardBadge-template--17738895655108__featured_collection-8066942402756">
                                                                 Ronbus Ripple R1.14
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"><span id="NoMediaStandardBadge-template--17738895655108__featured_collection-8066942402756" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8066942402756">
                                                         <a href="/products/ronbus-ripple-r1-14" id="CardLink-template--17738895655108__featured_collection-8066942402756" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8066942402756 Badge-template--17738895655108__featured_collection-8066942402756">
                                                             Ronbus Ripple R1.14
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price  price--sold-out">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM1,200.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM1,200.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection8066942402756" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44229626233028" class="product-variant-id" disabled>
                                                             <button id="quick-add-template--17738895655108__featured_collection8066942402756-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8066942402756-submit title-template--17738895655108__featured_collection-8066942402756" aria-live="polite" data-sold-out-message="true" disabled>
                                                                 <span>Sold out
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="8066942402756" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"><span id="Badge-template--17738895655108__featured_collection-8066942402756" class="badge badge--bottom-left color-scheme-4">Sold out</span></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-17" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 17;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/2024PRODUCTIMAGEPPMX_ArcticGold_28cb68ee-3cf0-4377-9926-4231ffa272e4.png?v=1719208039&width=165 165w,//picklefox.com/cdn/shop/files/2024PRODUCTIMAGEPPMX_ArcticGold_28cb68ee-3cf0-4377-9926-4231ffa272e4.png?v=1719208039&width=360 360w,//picklefox.com/cdn/shop/files/2024PRODUCTIMAGEPPMX_ArcticGold_28cb68ee-3cf0-4377-9926-4231ffa272e4.png?v=1719208039&width=533 533w,//picklefox.com/cdn/shop/files/2024PRODUCTIMAGEPPMX_ArcticGold_28cb68ee-3cf0-4377-9926-4231ffa272e4.png?v=1719208039&width=720 720w,//picklefox.com/cdn/shop/files/2024PRODUCTIMAGEPPMX_ArcticGold_28cb68ee-3cf0-4377-9926-4231ffa272e4.png?v=1719208039 900w
                " src="{{ asset('asset/cdn/shop/files/2024PRODUCTIMAGEPPMX_ArcticGold_28cb68ee-3cf0-4377-9926-4231ffa272e4.png?v=1719208039&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Engage New Pursuit PRO MX Lite Elongated paddle with raw T700 carbon fiber design and target graphic on face" class="motion-reduce" loading="lazy" width="900" height="1200">

                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/engage-new-pursuit-pro-mx" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-7947374330052" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-7947374330052 NoMediaStandardBadge-template--17738895655108__featured_collection-7947374330052">
                                                                 Engage New Pursuit PRO MX - Lite Elongated
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-7947374330052">
                                                         <a href="/products/engage-new-pursuit-pro-mx" id="CardLink-template--17738895655108__featured_collection-7947374330052" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-7947374330052 Badge-template--17738895655108__featured_collection-7947374330052">
                                                             Engage New Pursuit PRO MX - Lite Elongated
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM1,247.99
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM1,247.99
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection7947374330052" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43852665258180" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection7947374330052-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection7947374330052-submit title-template--17738895655108__featured_collection-7947374330052" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="7947374330052" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-18" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 18;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369&width=165 165w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369&width=360 360w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369&width=533 533w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369&width=720 720w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369&width=940 940w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369&width=1066 1066w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369 1080w
                " src="{{ asset('asset/cdn/shop/files/Black-Diamond-Power-Six-Zero-152727513_22e8018f-ad9e-4acf-8848-e40a03e55060.png?v=1730364369&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Six Zero Black Diamond Power" class="motion-reduce" loading="lazy" width="1080" height="1080">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368&width=165 165w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368&width=360 360w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368&width=533 533w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368&width=720 720w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368&width=940 940w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368&width=1066 1066w,//picklefox.com/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368 1080w
                  " src="{{ asset('asset/cdn/shop/files/Black-Diamond-Power-Six-Zero-152728184_23c80293-3394-4a8c-bf51-2f935aa37e86.png?v=1730364368&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="1080" height="1080"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/six-zero-black-diamond-power" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8094845960388" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8094845960388 NoMediaStandardBadge-template--17738895655108__featured_collection-8094845960388">
                                                                 Six Zero Black Diamond Power
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8094845960388">
                                                         <a href="/products/six-zero-black-diamond-power" id="CardLink-template--17738895655108__featured_collection-8094845960388" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8094845960388 Badge-template--17738895655108__featured_collection-8094845960388">
                                                             Six Zero Black Diamond Power
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM810.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM810.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection8094845960388" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44319152865476" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection8094845960388-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8094845960388-submit title-template--17738895655108__featured_collection-8094845960388" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="8094845960388" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-19" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 19;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Sword_ShieldJ3KRed_800x_d57690da-5350-42af-b393-fe951ebe58b6.jpg?v=1728308529&width=165 165w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KRed_800x_d57690da-5350-42af-b393-fe951ebe58b6.jpg?v=1728308529&width=360 360w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KRed_800x_d57690da-5350-42af-b393-fe951ebe58b6.jpg?v=1728308529&width=533 533w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KRed_800x_d57690da-5350-42af-b393-fe951ebe58b6.jpg?v=1728308529&width=720 720w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KRed_800x_d57690da-5350-42af-b393-fe951ebe58b6.jpg?v=1728308529 800w
                " src="{{ asset('asset/cdn/shop/files/Sword_ShieldJ3KRed_800x_d57690da-5350-42af-b393-fe951ebe58b6.jpg?v=1728308529&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Honolulu Sword &amp; Shield J3K red paddle with square shape and Kevlar weave for control, spin, and power." class="motion-reduce" loading="lazy" width="800" height="800">

                                                         <img srcset="//picklefox.com/cdn/shop/files/Sword_ShieldJ3KBlue_800x_82d1118f-61b8-430c-bb10-70259845ce4f.jpg?v=1728308542&width=165 165w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KBlue_800x_82d1118f-61b8-430c-bb10-70259845ce4f.jpg?v=1728308542&width=360 360w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KBlue_800x_82d1118f-61b8-430c-bb10-70259845ce4f.jpg?v=1728308542&width=533 533w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KBlue_800x_82d1118f-61b8-430c-bb10-70259845ce4f.jpg?v=1728308542&width=720 720w,//picklefox.com/cdn/shop/files/Sword_ShieldJ3KBlue_800x_82d1118f-61b8-430c-bb10-70259845ce4f.jpg?v=1728308542 800w
                  " src="{{ asset('asset/cdn/shop/files/Sword_ShieldJ3KBlue_800x_82d1118f-61b8-430c-bb10-70259845ce4f.jpg?v=1728308542&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="800" height="800"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/honolulu-sword-shield-j3k" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8075078172868" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8075078172868 NoMediaStandardBadge-template--17738895655108__featured_collection-8075078172868">
                                                                 Honolulu Sword &amp; Shield J3K
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8075078172868">
                                                         <a href="/products/honolulu-sword-shield-j3k" id="CardLink-template--17738895655108__featured_collection-8075078172868" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8075078172868 Badge-template--17738895655108__featured_collection-8075078172868">
                                                             Honolulu Sword &amp; Shield J3K
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM720.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM720.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <modal-opener data-modal="#QuickAdd-8075078172868">
                                                         <button id="quick-add-template--17738895655108__featured_collection8075078172868-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8075078172868-submit title-template--17738895655108__featured_collection-8075078172868" data-product-url="/products/honolulu-sword-shield-j3k">
                                                             Choose options


                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                     </modal-opener>
                                                     <quick-add-modal id="QuickAdd-8075078172868" class="quick-add-modal">
                                                         <div role="dialog" aria-label="Choose options for Honolulu Sword &amp;amp; Shield J3K" aria-modal="true" class="quick-add-modal__content global-settings-popup" tabindex="-1">
                                                             <button id="ModalClose-8075078172868" type="button" class="quick-add-modal__toggle" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                     <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                             </button>
                                                             <div id="QuickAddInfo-8075078172868" class="quick-add-modal__content-info"></div>
                                                         </div>
                                                     </quick-add-modal>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_collection-20" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 20;">

                                     <div class="card-wrapper product-card-wrapper underline-links-hover">
                                         <div class="
        card card--standard
         card--media





      " style="--ratio-percent: 100%;">
                                             <div class="card__inner color-scheme-1 gradient ratio" style="--ratio-percent: 100%;">
                                                 <div class="card__media">
                                                     <div class="media media--transparent media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774&width=165 165w,//picklefox.com/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774&width=360 360w,//picklefox.com/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774&width=533 533w,//picklefox.com/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774&width=720 720w,//picklefox.com/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774&width=940 940w,//picklefox.com/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774&width=1066 1066w,//picklefox.com/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774 3840w
                " src="{{ asset('asset/cdn/shop/files/r2nova2g1a0001.jpg?v=1726978774&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="Ronbus R2 Nova Gen 3 thermoforming paddle with patent pending edge grid technology for superior control and increased sweet spot area" class="motion-reduce" loading="lazy" width="3840" height="3840">

                                                         <img srcset="//picklefox.com/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774&width=165 165w,//picklefox.com/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774&width=360 360w,//picklefox.com/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774&width=533 533w,//picklefox.com/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774&width=720 720w,//picklefox.com/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774&width=940 940w,//picklefox.com/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774&width=1066 1066w,//picklefox.com/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774 4768w
                  " src="{{ asset('asset/cdn/shop/files/R2Nova2G1A0002.jpg?v=1726978774&width=533') }}" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="" class="motion-reduce" loading="lazy" width="4768" height="4768"></div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading">
                                                             <a href="/products/ronbus-r2-nova" id="StandardCardNoMediaLink-template--17738895655108__featured_collection-8060776906948" class="full-unstyled-link" aria-labelledby="StandardCardNoMediaLink-template--17738895655108__featured_collection-8060776906948 NoMediaStandardBadge-template--17738895655108__featured_collection-8060776906948">
                                                                 Ronbus R2 Nova
                                                             </a>
                                                         </h3>
                                                     </div>
                                                     <div class="card__badge bottom right"></div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h5" id="title-template--17738895655108__featured_collection-8060776906948">
                                                         <a href="/products/ronbus-r2-nova" id="CardLink-template--17738895655108__featured_collection-8060776906948" class="full-unstyled-link" aria-labelledby="CardLink-template--17738895655108__featured_collection-8060776906948 Badge-template--17738895655108__featured_collection-8060776906948">
                                                             Ronbus R2 Nova
                                                         </a>
                                                     </h3>
                                                     <div class="card-information"><span class="caption-large light"></span>




                                                         <div class="
      price ">
                                                             <div class="price__container">
                                                                 <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span class="price-item price-item--regular">
                                                                         RM864.00
                                                                     </span></div>
                                                                 <div class="price__sale">
                                                                     <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                                     <span>
                                                                         <s class="price-item price-item--regular">



                                                                         </s>
                                                                     </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                                     <span class="price-item price-item--sale price-item--last">
                                                                         RM864.00
                                                                     </span>
                                                                 </div>
                                                                 <small class="unit-price caption hidden">
                                                                     <span class="visually-hidden">Unit price</span>
                                                                     <span class="price-item price-item--last">
                                                                         <span></span>
                                                                         <span aria-hidden="true">/</span>
                                                                         <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                                         <span>
                                                                         </span>
                                                                     </span>
                                                                 </small>
                                                             </div>
                                                         </div>


                                                     </div>
                                                 </div>


                                                 <div class="quick-add no-js-hidden">
                                                     <product-form data-section-id="template--17738895655108__featured_collection">
                                                         <form method="post" action="/cart/add" id="quick-add-template--17738895655108__featured_collection8060776906948" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44207392358596" class="product-variant-id">
                                                             <button id="quick-add-template--17738895655108__featured_collection8060776906948-submit" type="submit" name="add" class="quick-add__submit button button--full-width button--secondary" aria-haspopup="dialog" aria-labelledby="quick-add-template--17738895655108__featured_collection8060776906948-submit title-template--17738895655108__featured_collection-8060776906948" aria-live="polite" data-sold-out-message="true">
                                                                 <span>Add to cart
                                                                 </span>
                                                                 <span class="sold-out-message hidden">
                                                                     Sold out
                                                                 </span>

                                                                 <div class="loading__spinner hidden">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                         <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                                 </div>
                                                             </button><input type="hidden" name="product-id" value="8060776906948" /><input type="hidden" name="section-id" value="template--17738895655108__featured_collection" /></form>
                                                     </product-form>
                                                 </div>

                                                 <div class="card__badge bottom right"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                             </ul>
                         </slider-component>
                     </div>
                 </div>


                 <style>
                     #shopify-section-template--17738895655108__featured_collection .price__container {
                         display: flex;
                         justify-content: center;
                         align-items: center;
                         text-align: center;
                         text-indent: 0 !important;
                     }

                     #shopify-section-template--17738895655108__featured_collection .card__information {
                         text-align: center;
                         text-indent: 0 !important;
                     }

                     #shopify-section-template--17738895655108__featured_collection .facet-checkbox__text-label {
                         padding-left: 20px;
                     }

                     #shopify-section-template--17738895655108__featured_collection .card__badge {
                         text-indent: 0;
                     }

                     #shopify-section-template--17738895655108__featured_collection .badge {
                         width: 60px;
                     }

                 </style>
             </section>
             <section id="shopify-section-template--17738895655108__172281745025e899e8" class="shopify-section section">
                 <div class=" scroll-trigger animate--slide-in">
                     <div id="shopify-block-rapid_reviews_reviews_global_featured_list_RHFaLE" class="shopify-block shopify-app-block">
                         <div id="rapid_reviews_global_featured_list" class="rapid_reviews_global_featured_list rgf_scroll"></div>

                         <style>
                             .rapid_reviews_global_featured_list a {
                                 color: #020912;
                             }

                         </style><!-- BEGIN app snippet: section-title -->


                         <script>
                             window['r_section_title' + '_global'] = `Customer Reviews`;
                             window.r_section_title_align = `left`;

                         </script><!-- END app snippet -->


                     </div>
                     <div id="shopify-block-rapid_reviews_core_script_8AQ8JT" class="shopify-block shopify-app-block">
                         <style>
                             .rapid_reviews_stars_badge.r_grid {
                                 font-size: 12px;
                                 text-align: center;
                             }

                         </style>
                         <style>
                             .rapid_reviews_stars_badge a {
                                 color: #020912 !important;
                             }

                         </style>
                         <script>
                             ;
                             (function() {
                                 if (window.r_u_loaded) return;
                                 window.r_u_loaded = 1;
                                 var rvsc = document.createElement('script');
                                 rvsc.type = 'text/javascript';
                                 rvsc.async = 'true';
                                 rvsc.src = 'https://apps.belkapp.com/api/reviews/files/ca789c-cd.myshopify.com/rapid-reviews-core';
                                 var s = document.getElementsByTagName('script')[0];
                                 s.parentNode.insertBefore(rvsc, s);
                             })();

                         </script>
                     </div>
                 </div>


                 <style>
                     #shopify-section-template--17738895655108__172281745025e899e8 .r_stars {
                         text-indent: 0px;
                         margin-left: 20px;
                     }

                     #shopify-section-template--17738895655108__172281745025e899e8 .r_ago {
                         text-indent: 0px;
                     }

                     #shopify-section-template--17738895655108__172281745025e899e8 .r_body {
                         text-indent: 0px;
                     }

                     #shopify-section-template--17738895655108__172281745025e899e8 .r_title {
                         text-indent: 0px;
                     }

                     #shopify-section-template--17738895655108__172281745025e899e8 .rapid_reviews_global_featured_list {
                         max-width: 1200px;
                     }

                 </style>
             </section>
             <div id="shopify-section-template--17738895655108__image-with-text" class="shopify-section section">
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-image-with-text.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <style data-shopify>
                     .section-template--17738895655108__image-with-text-padding {
                         padding-top: 9px;
                         padding-bottom: 24px;
                     }

                     @media screen and (min-width: 750px) {
                         .section-template--17738895655108__image-with-text-padding {
                             padding-top: 12px;
                             padding-bottom: 32px;
                         }
                     }

                 </style>
                 <div class="section-template--17738895655108__image-with-text-padding gradient color-scheme-2">
                     <div class="page-width">
                         <div class="image-with-text image-with-text--no-overlap isolate collapse-corners scroll-trigger animate--slide-in">
                             <div class="image-with-text__grid grid grid--gapless grid--1-col grid--3-col-tablet image-with-text__grid--reverse">
                                 <div class="image-with-text__media-item image-with-text__media-item--small image-with-text__media-item--middle grid__item">
                                     <div class="image-with-text__media image-with-text__media--small global-media-settings gradient color-scheme-bbba58fd-2264-47ab-865f-9d4f8eae8a8a media"><img src="{{ asset('asset/cdn/shop/files/udrippin-banner.jpg?v=1730382281&amp;width=1500') }}" alt="" srcset="{{ asset('asset/cdn/shop/files/udrippin-banner.jpg?v=1730382281&amp;width=165 165w, //picklefox.com/cdn/shop/files/udrippin-banner.jpg?v=1730382281&amp;width=360 360w, //picklefox.com/cdn/shop/files/udrippin-banner.jpg?v=1730382281&amp;width=535 535w, //picklefox.com/cdn/shop/files/udrippin-banner.jpg?v=1730382281&amp;width=750 750w, //picklefox.com/cdn/shop/files/udrippin-banner.jpg?v=1730382281&amp;width=1070 1070w, //picklefox.com/cdn/shop/files/udrippin-banner.jpg?v=1730382281&amp;width=1500 1500w') }}" width="1500" height="1045" loading="lazy" sizes="(min-width: 1200px) 550px,
              (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" fetchpriority="auto">
                                     </div>
                                 </div>
                                 <div class="image-with-text__text-item grid__item">
                                     <div id="ImageWithText--template--17738895655108__image-with-text" class="image-with-text__content image-with-text__content--middle image-with-text__content--desktop-left image-with-text__content--mobile-center image-with-text__content--small content-container gradient color-scheme-bbba58fd-2264-47ab-865f-9d4f8eae8a8a">
                                         <h2 class="image-with-text__heading inline-richtext h1">
                                             <strong>UDRIPPIN Restocked!</strong>
                                         </h2>
                                         <div class="image-with-text__text rte body">
                                             <p>We’ve got an incredible selection of grip designs! </p>
                                             <p>Customize your paddle and stand out on the court, not just for your incredible skills, but also for having the coolest gear!</p>
                                             <p>Enjoy FREE shipping on all orders over RM100 with code <strong>FREESHIP.</strong></p>
                                         </div><a href="/collections/grips" class="button button--primary">
                                             Grips, grips and grips!
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>


             </div>
             <section id="shopify-section-template--17738895655108__featured_product_WLXFjQ" class="shopify-section section section-featured-product">
                 <product-info data-section="template--17738895655108__featured_product_WLXFjQ" data-product-id="8010069704900" data-update-url="false" data-url="/products/hesacore-s-pickleball-grip-white">
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/section-main-product.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/section-featured-product.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-accordion.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-price.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-deferred-media.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-rating.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-volume-pricing.css') }}" rel="stylesheet" type="text/css" media="all" />

                     <style data-shopify>
                         .section-template--17738895655108__featured_product_WLXFjQ-padding {
                             padding-top: 27px;
                             padding-bottom: 27px;
                         }

                         @media screen and (min-width: 750px) {
                             .section-template--17738895655108__featured_product_WLXFjQ-padding {
                                 padding-top: 36px;
                                 padding-bottom: 36px;
                             }
                         }

                     </style>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/product-info.js') }}" defer="defer"></script>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/show-more.js') }}" defer="defer"></script>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/price-per-item.js') }}" defer="defer"></script>




                     <section class="color-scheme-1 background-secondary">
                         <div class="page-width section-template--17738895655108__featured_product_WLXFjQ-padding isolate">
                             <div class="featured-product product product--small grid grid--1-col gradient color-scheme-1 product--right grid--2-col-tablet">
                                 <div class="grid__item product__media-wrapper">
                                     <media-gallery id="MediaGallery-template--17738895655108__featured_product_WLXFjQ" role="region" aria-label="Gallery Viewer" data-desktop-layout="">
                                         <div id="GalleryStatus-template--17738895655108__featured_product_WLXFjQ" class="visually-hidden" role="status"></div>
                                         <slider-component id="GalleryViewer-template--17738895655108__featured_product_WLXFjQ" class="slider-mobile-gutter">
                                             <a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--17738895655108__featured_product_WLXFjQ">
                                                 Skip to product information
                                             </a>
                                             <ul id="Slider-Gallery-template--17738895655108__featured_product_WLXFjQ" class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile" role="list">
                                                 <li id="Slide-template--17738895655108__featured_product_WLXFjQ-32176062169284" class="product__media-item grid__item slider__slide product__media-item--single is-active scroll-trigger animate--fade-in" data-media-id="template--17738895655108__featured_product_WLXFjQ-32176062169284">

                                                     <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height" style="--ratio: 1.0; --preview-ratio: 1.0;">
                                                         <modal-opener class="product__modal-opener product__modal-opener--image" data-modal="#ProductModal-template--17738895655108__featured_product_WLXFjQ">
                                                             <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true">

                                                                 <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-plus" viewBox="0 0 19 19">
                                                                         <path fill="currentColor" fill-rule="evenodd" d="M4.667 7.94a.5.5 0 0 1 .499-.501l5.534-.014a.5.5 0 1 1 .002 1l-5.534.014a.5.5 0 0 1-.5-.5" clip-rule="evenodd" />
                                                                         <path fill="currentColor" fill-rule="evenodd" d="M7.926 4.665a.5.5 0 0 1 .501.498l.014 5.534a.5.5 0 1 1-1 .003l-.014-5.534a.5.5 0 0 1 .499-.501" clip-rule="evenodd" />
                                                                         <path fill="currentColor" fill-rule="evenodd" d="M12.832 3.03a6.931 6.931 0 1 0-9.802 9.802 6.931 6.931 0 0 0 9.802-9.802M2.323 2.323a7.931 7.931 0 0 1 11.296 11.136l4.628 4.628a.5.5 0 0 1-.707.707l-4.662-4.662A7.932 7.932 0 0 1 2.323 2.323" clip-rule="evenodd" /></svg>
                                                                 </span>

                                                             </span>

                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                             <div class="product__media media media--transparent">
                                                                 <img src="{{ asset('asset/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=1946') }}" alt="White Hesacore S Pickleball Grip with honeycomb design, 5.25 inches long, regular soft feel for improved comfort and grip efficiency." srcset="{{ asset('asset/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=246 246w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=493 493w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=600 600w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=713 713w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=823 823w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=990 990w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=1100 1100w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=1206 1206w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=1346 1346w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=1426 1426w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=1646 1646w, //picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&amp;width=1946 1946w') }}" width="1946" height="1946" loading="lazy" class="image-magnify-lightbox" sizes="(min-width: 1200px) 495px, (min-width: 990px) calc(45.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                                                             </div>
                                                             <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="32176062169284">
                                                                 <span class="visually-hidden">
                                                                     Open media 1 in modal
                                                                 </span>
                                                             </button>
                                                         </modal-opener>
                                                     </div>

                                                 </li>





                                             </ul>
                                             <div class="slider-buttons quick-add-hidden small-hide">
                                                 <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
                                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                                     </span>
                                                 </button>
                                                 <div class="slider-counter caption">
                                                     <span class="slider-counter--current">1</span>
                                                     <span aria-hidden="true"> / </span>
                                                     <span class="visually-hidden">of</span>
                                                     <span class="slider-counter--total">7</span>
                                                 </div>
                                                 <button type="button" class="slider-button slider-button--next" name="next" aria-label="Slide right">
                                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                                     </span>
                                                 </button>
                                             </div>
                                         </slider-component>
                                     </media-gallery>

                                 </div>
                                 <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
                                     <section id="ProductInfo-template--17738895655108__featured_product_WLXFjQ" class="product__info-container" data-section="template--17738895655108__featured_product_WLXFjQ" data-url="/products/hesacore-s-pickleball-grip-white">
                                         <p class="product__text inline-richtext subtitle"><strong>SELLING FAST</strong></p>
                                         <p class="product__text inline-richtext caption-with-letter-spacing">Hesacore</p>
                                         <h2 class="product__title h1">Hesacore S Pickleball Grip - 5.25 Inches Long - Regular Soft Feel - White
                                         </h2>
                                         <div id="price-template--17738895655108__featured_product_WLXFjQ" role="status">
                                             <div class="
      price price--large price--show-badge">
                                                 <div class="price__container">
                                                     <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                         <span class="price-item price-item--regular">
                                                             RM150.00
                                                         </span></div>
                                                     <div class="price__sale">
                                                         <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                         <span>
                                                             <s class="price-item price-item--regular">



                                                             </s>
                                                         </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                         <span class="price-item price-item--sale price-item--last">
                                                             RM150.00
                                                         </span>
                                                     </div>
                                                     <small class="unit-price caption hidden">
                                                         <span class="visually-hidden">Unit price</span>
                                                         <span class="price-item price-item--last">
                                                             <span></span>
                                                             <span aria-hidden="true">/</span>
                                                             <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                             <span>
                                                             </span>
                                                         </span>
                                                     </small>
                                                 </div><span class="badge price__badge-sale color-scheme-5">
                                                     Sale
                                                 </span>

                                                 <span class="badge price__badge-sold-out color-scheme-4">
                                                     Sold out
                                                 </span>
                                             </div>

                                         </div>
                                         <div class="product__tax caption rte"><a href="/policies/shipping-policy">Shipping</a> calculated at checkout.
                                         </div>
                                         <div>
                                             <form method="post" action="/cart/add" id="product_form_8010069704900" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44063142674628">

                                                 <input type="hidden" name="product-id" value="8010069704900" /><input type="hidden" name="section-id" value="template--17738895655108__featured_product_WLXFjQ" /></form>
                                         </div>

                                         <div id="Quantity-Form-template--17738895655108__featured_product_WLXFjQ" class="product-form__input product-form__quantity">



                                             <label class="quantity__label form__label" for="Quantity-template--17738895655108__featured_product_WLXFjQ">
                                                 Quantity
                                                 <span class="quantity__rules-cart hidden">

                                                     <div class="loading__spinner hidden">
                                                         <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                             <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                     </div>
                                                     <span>(<span class="quantity-cart">0</span> in cart)</span>
                                                 </span>
                                             </label>
                                             <div class="price-per-item__container">
                                                 <quantity-input class="quantity">
                                                     <button class="quantity__button" name="minus" type="button">
                                                         <span class="visually-hidden">Decrease quantity for Hesacore S Pickleball Grip - 5.25 Inches Long - Regular Soft Feel - White</span>
                                                         <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-minus" viewBox="0 0 10 2">
                                                                 <path fill="currentColor" fill-rule="evenodd" d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 1 1 0 1H1A.5.5 0 0 1 .5 1" clip-rule="evenodd" /></svg>
                                                         </span>
                                                     </button>
                                                     <input class="quantity__input" type="number" name="quantity" id="Quantity-template--17738895655108__featured_product_WLXFjQ" data-cart-quantity="0" data-min="1" min="1" step="1" value="1" form="product-form-template--17738895655108__featured_product_WLXFjQ">
                                                     <button class="quantity__button" name="plus" type="button">
                                                         <span class="visually-hidden">Increase quantity for Hesacore S Pickleball Grip - 5.25 Inches Long - Regular Soft Feel - White</span>
                                                         <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-plus" viewBox="0 0 10 10">
                                                                 <path fill="currentColor" fill-rule="evenodd" d="M1 4.51a.5.5 0 0 0 0 1h3.5l.01 3.5a.5.5 0 0 0 1-.01V5.5l3.5-.01a.5.5 0 0 0-.01-1H5.5L5.49.99a.5.5 0 0 0-1 .01v3.5l-3.5.01z" clip-rule="evenodd" /></svg>
                                                         </span>
                                                     </button>
                                                 </quantity-input>
                                             </div>
                                             <div class="quantity__rules caption" id="Quantity-Rules-template--17738895655108__featured_product_WLXFjQ"></div>
                                         </div>
                                         <div>
                                             <product-form class="product-form" data-hide-errors="false" data-section-id="template--17738895655108__featured_product_WLXFjQ">
                                                 <div class="product-form__error-message-wrapper" role="alert" hidden>
                                                     <span class="svg-wrapper"><svg class="icon icon-error" viewBox="0 0 13 13">
                                                             <circle cx="6.5" cy="6.5" r="5.5" stroke="#fff" stroke-width="2" />
                                                             <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width=".7" />
                                                             <path fill="#fff" d="m5.874 3.528.1 4.044h1.053l.1-4.044zm.627 6.133c.38 0 .68-.288.68-.656s-.3-.656-.68-.656-.681.288-.681.656.3.656.68.656" />
                                                             <path fill="#fff" stroke="#EB001B" stroke-width=".7" d="M5.874 3.178h-.359l.01.359.1 4.044.008.341h1.736l.008-.341.1-4.044.01-.359H5.873Zm.627 6.833c.56 0 1.03-.432 1.03-1.006s-.47-1.006-1.03-1.006-1.031.432-1.031 1.006.47 1.006 1.03 1.006Z" /></svg>
                                                     </span>
                                                     <span class="product-form__error-message"></span>
                                                 </div>
                                                 <form method="post" action="/cart/add" id="product-form-template--17738895655108__featured_product_WLXFjQ" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44063142674628" class="product-variant-id">
                                                     <div class="product-form__buttons"><button id="ProductSubmitButton-template--17738895655108__featured_product_WLXFjQ" type="submit" name="add" class="product-form__submit button button--full-width button--secondary">
                                                             <span>Add to cart
                                                             </span>

                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                         <div data-shopify="payment-button" class="shopify-payment-button">
                                                             <shopify-accelerated-checkout recommended="{&quot;name&quot;:&quot;google_pay&quot;,&quot;wallet_params&quot;:{&quot;sdkUrl&quot;:&quot;https://pay.google.com/gp/p/js/pay.js&quot;,&quot;paymentData&quot;:{&quot;apiVersion&quot;:2,&quot;apiVersionMinor&quot;:0,&quot;shippingAddressParameters&quot;:{&quot;allowedCountryCodes&quot;:[&quot;AE&quot;,&quot;AT&quot;,&quot;AU&quot;,&quot;BE&quot;,&quot;CA&quot;,&quot;CH&quot;,&quot;CZ&quot;,&quot;DE&quot;,&quot;DK&quot;,&quot;ES&quot;,&quot;FI&quot;,&quot;FR&quot;,&quot;GB&quot;,&quot;HK&quot;,&quot;IE&quot;,&quot;IL&quot;,&quot;IT&quot;,&quot;JP&quot;,&quot;KR&quot;,&quot;MY&quot;,&quot;NL&quot;,&quot;NO&quot;,&quot;NZ&quot;,&quot;PL&quot;,&quot;PT&quot;,&quot;SE&quot;,&quot;SG&quot;,&quot;US&quot;],&quot;phoneNumberRequired&quot;:true},&quot;merchantInfo&quot;:{&quot;merchantName&quot;:&quot;Picklefox.com&quot;,&quot;merchantId&quot;:&quot;16708973830884969730&quot;,&quot;merchantOrigin&quot;:&quot;picklefox.com&quot;,&quot;authJwt&quot;:&quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJtZXJjaGFudElkIjoiMTY3MDg5NzM4MzA4ODQ5Njk3MzAiLCJtZXJjaGFudE9yaWdpbiI6InBpY2tsZWZveC5jb20iLCJpYXQiOjE3MzA3MjAwNDF9.rYpNLKI4esXA0Mj7N_L5YsIuBTlWMrS53SVe1FYPppxBJtnwyjBh2PRNd76AJRinNfnY8ToTCUmIeR-vP-h8vw&quot;},&quot;allowedPaymentMethods&quot;:[{&quot;type&quot;:&quot;CARD&quot;,&quot;parameters&quot;:{&quot;allowedCardNetworks&quot;:[&quot;VISA&quot;,&quot;MASTERCARD&quot;,&quot;AMEX&quot;,&quot;DISCOVER&quot;,&quot;JCB&quot;],&quot;allowedAuthMethods&quot;:[&quot;PAN_ONLY&quot;,&quot;CRYPTOGRAM_3DS&quot;],&quot;billingAddressRequired&quot;:true,&quot;billingAddressParameters&quot;:{&quot;format&quot;:&quot;FULL&quot;,&quot;phoneNumberRequired&quot;:true}},&quot;tokenizationSpecification&quot;:{&quot;type&quot;:&quot;PAYMENT_GATEWAY&quot;,&quot;parameters&quot;:{&quot;gateway&quot;:&quot;shopify&quot;,&quot;gatewayMerchantId&quot;:&quot;65451524292&quot;}}}],&quot;emailRequired&quot;:true},&quot;customerAccountEmail&quot;:null,&quot;environment&quot;:&quot;PRODUCTION&quot;,&quot;availablePresentmentCurrencies&quot;:[&quot;MYR&quot;],&quot;auth&quot;:[{&quot;jwt&quot;:&quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJtZXJjaGFudElkIjoiMTY3MDg5NzM4MzA4ODQ5Njk3MzAiLCJtZXJjaGFudE9yaWdpbiI6InBpY2tsZWZveC5jb20iLCJpYXQiOjE3MzA3MjAwNDF9.LDoq-wGlZipRDhQYY3sQ-VOF8CVcLtOMpg2M5_yDvW2wHvCSi4Hxyk_d1XzygS1pnn88NAvLfJvHlTUasShjuQ&quot;,&quot;expiresAt&quot;:1730763241},{&quot;jwt&quot;:&quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJtZXJjaGFudElkIjoiMTY3MDg5NzM4MzA4ODQ5Njk3MzAiLCJtZXJjaGFudE9yaWdpbiI6InBpY2tsZWZveC5jb20iLCJpYXQiOjE3MzA3NjMyNDF9._duIAcr_QMdk9wlmh8bETc_UdokBq0CHsVzM7sxY41VP55U--scFO4BfqnnKreLmgrM_LYzAz4xYynEeb1JcgQ&quot;,&quot;expiresAt&quot;:1730806441}],&quot;expiresAt&quot;:1730763241}}" fallback="{&quot;name&quot;:&quot;buy_it_now&quot;,&quot;wallet_params&quot;:{}}" access-token="801509de32718c81f9d760d8c575d293" buyer-country="MY" buyer-locale="en" buyer-currency="MYR" variant-params="[{&quot;id&quot;:44063142674628,&quot;requiresShipping&quot;:true}]" shop-id="65451524292">
                                                                 <div class="shopify-payment-button__button" role="button" disabled aria-hidden="true" style="background-color: transparent; border: none">
                                                                     <div class="shopify-payment-button__skeleton">&nbsp;</div>
                                                                 </div>
                                                                 <div class="shopify-payment-button__more-options shopify-payment-button__skeleton" role="button" disabled aria-hidden="true">&nbsp;</div>
                                                             </shopify-accelerated-checkout> <small id="shopify-buyer-consent" class="hidden" aria-hidden="true"> This item is a recurring or deferred purchase. By continuing, I agree to the <span id="shopify-subscription-policy-button">cancellation policy</span> and authorize you to charge my payment method at the prices, frequency and dates listed on this page until my order is fulfilled or I cancel, if permitted. </small>
                                                         </div>
                                                     </div><input type="hidden" name="product-id" value="8010069704900" /><input type="hidden" name="section-id" value="template--17738895655108__featured_product_WLXFjQ" />
                                                 </form>
                                             </product-form>
                                         </div>

                                         <script src="{{ asset('asset/cdn/shop/t/7/assets/share.js') }}" defer="defer"></script>

                                         <share-button id="Share-template--17738895655108__featured_product_WLXFjQ" class="share-button quick-add-hidden">
                                             <button class="share-button__button hidden">
                                                 <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-share" viewBox="0 0 13 12">
                                                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.625 8.125v2.167a1.083 1.083 0 0 0 1.083 1.083h7.584a1.083 1.083 0 0 0 1.083-1.083V8.125" />
                                                         <path fill="currentColor" fill-rule="evenodd" d="M6.148 1.271a.5.5 0 0 1 .707 0L9.563 3.98a.5.5 0 0 1-.707.707L6.501 2.332 4.147 4.687a.5.5 0 1 1-.708-.707z" clip-rule="evenodd" />
                                                         <path fill="currentColor" fill-rule="evenodd" d="M6.5 1.125a.5.5 0 0 1 .5.5v6.5a.5.5 0 0 1-1 0v-6.5a.5.5 0 0 1 .5-.5" clip-rule="evenodd" /></svg>
                                                 </span>
                                                 Share
                                             </button>
                                             <details id="Details-share_n3Tfpi-template--17738895655108__featured_product_WLXFjQ">
                                                 <summary class="share-button__button">
                                                     <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-share" viewBox="0 0 13 12">
                                                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.625 8.125v2.167a1.083 1.083 0 0 0 1.083 1.083h7.584a1.083 1.083 0 0 0 1.083-1.083V8.125" />
                                                             <path fill="currentColor" fill-rule="evenodd" d="M6.148 1.271a.5.5 0 0 1 .707 0L9.563 3.98a.5.5 0 0 1-.707.707L6.501 2.332 4.147 4.687a.5.5 0 1 1-.708-.707z" clip-rule="evenodd" />
                                                             <path fill="currentColor" fill-rule="evenodd" d="M6.5 1.125a.5.5 0 0 1 .5.5v6.5a.5.5 0 0 1-1 0v-6.5a.5.5 0 0 1 .5-.5" clip-rule="evenodd" /></svg>
                                                     </span>
                                                     Share
                                                 </summary>
                                                 <div class="share-button__fallback motion-reduce">
                                                     <div class="field">
                                                         <span id="ShareMessage-template--17738895655108__featured_product_WLXFjQ" class="share-button__message hidden" role="status"> </span>
                                                         <input type="text" class="field__input" id="ShareUrl-template--17738895655108__featured_product_WLXFjQ" value="https:{{ asset('asset/products/hesacore-s-pickleball-grip-white') }}" placeholder="Link" onclick="this.select();" readonly>
                                                         <label class="field__label" for="ShareUrl-template--17738895655108__featured_product_WLXFjQ">Link</label>
                                                     </div>
                                                     <button class="share-button__close hidden">
                                                         <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                 <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                         </span>
                                                         <span class="visually-hidden">Close share</span>
                                                     </button>
                                                     <button class="share-button__copy">
                                                         <span class="svg-wrapper"><svg class="icon icon-clipboard" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor" />
                                                             </svg>
                                                         </span>
                                                         <span class="visually-hidden">Copy link</span>
                                                     </button>
                                                 </div>
                                             </details>
                                         </share-button>

                                         <a href="/products/hesacore-s-pickleball-grip-white" class="link product__view-details animate-arrow">
                                             View full details
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                 <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                         </a>
                                     </section>
                                 </div>
                             </div>


                             <product-modal id="ProductModal-template--17738895655108__featured_product_WLXFjQ" class="product-media-modal media-modal">
                                 <div class="product-media-modal__dialog color-scheme-1 gradient" role="dialog" aria-label="Media gallery" aria-modal="true" tabindex="-1">
                                     <button id="ModalClose-template--17738895655108__featured_product_WLXFjQ" type="button" class="product-media-modal__toggle" aria-label="Close">
                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                             <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>

                                     </button>

                                     <div class="product-media-modal__content color-scheme-1 gradient" role="document" aria-label="Media gallery" tabindex="0">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&width=550 550w,//picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&width=1100 1100w,//picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&width=1445 1445w,//picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&width=1680 1680w,//picklefox.com/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370 1946w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/HesacoreTourGripPickleball.png?v=1723892370&width=1445') }}" alt="White Hesacore S Pickleball Grip with honeycomb design, 5.25 inches long, regular soft feel for improved comfort and grip efficiency." loading="lazy" width="1100" height="1100" data-media-id="32176062169284">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/HesacoreTourGrip-2.png?v=1723892370&width=550 550w,//picklefox.com/cdn/shop/files/HesacoreTourGrip-2.png?v=1723892370&width=1100 1100w,//picklefox.com/cdn/shop/files/HesacoreTourGrip-2.png?v=1723892370&width=1445 1445w,//picklefox.com/cdn/shop/files/HesacoreTourGrip-2.png?v=1723892370&width=1680 1680w,//picklefox.com/cdn/shop/files/HesacoreTourGrip-2.png?v=1723892370 1946w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/HesacoreTourGrip-2.png?v=1723892370&width=1445') }}" alt="Close-up of pickleball paddles with Hesacore S grips featuring white honeycomb design for improved comfort, efficiency, and sweat absorption." loading="lazy" width="1100" height="1100" data-media-id="32176062005444">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/TourGripProductImage-3.jpg?v=1723892370&width=550 550w,//picklefox.com/cdn/shop/files/TourGripProductImage-3.jpg?v=1723892370&width=1100 1100w,//picklefox.com/cdn/shop/files/TourGripProductImage-3.jpg?v=1723892370&width=1445 1445w,//picklefox.com/cdn/shop/files/TourGripProductImage-3.jpg?v=1723892370&width=1680 1680w,//picklefox.com/cdn/shop/files/TourGripProductImage-3.jpg?v=1723892370 1946w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/TourGripProductImage-3.jpg?v=1723892370&width=1445') }}" alt="Hesacore S Pickleball Grip, 5.25 Inches, Soft Feel, White, with Hexagonal Design for Enhanced Comfort and Grip, Shown with Packaging" loading="lazy" width="1100" height="1100" data-media-id="32176062202052">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/03_95bf54e5-bac6-44d8-b582-964069340f20.jpg?v=1723892370&width=550 550w,//picklefox.com/cdn/shop/files/03_95bf54e5-bac6-44d8-b582-964069340f20.jpg?v=1723892370&width=1100 1100w,//picklefox.com/cdn/shop/files/03_95bf54e5-bac6-44d8-b582-964069340f20.jpg?v=1723892370&width=1445 1445w,//picklefox.com/cdn/shop/files/03_95bf54e5-bac6-44d8-b582-964069340f20.jpg?v=1723892370 1500w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/03_95bf54e5-bac6-44d8-b582-964069340f20.jpg?v=1723892370&width=1445') }}" alt="How to choose Hesacore Grip size guide diagram for pickleball handles 5.25 inches long, with size options XS, S, and M." loading="lazy" width="1100" height="1100" data-media-id="32176061710532">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/04_6b967b07-5225-466f-85cf-e1ee212e831d.jpg?v=1723892370&width=550 550w,//picklefox.com/cdn/shop/files/04_6b967b07-5225-466f-85cf-e1ee212e831d.jpg?v=1723892370&width=1100 1100w,//picklefox.com/cdn/shop/files/04_6b967b07-5225-466f-85cf-e1ee212e831d.jpg?v=1723892370&width=1445 1445w,//picklefox.com/cdn/shop/files/04_6b967b07-5225-466f-85cf-e1ee212e831d.jpg?v=1723892370 1500w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/04_6b967b07-5225-466f-85cf-e1ee212e831d.jpg?v=1723892370&width=1445') }}" alt="Hesacore S Pickleball Grip in white showing medium-softness and ergonomic design with hexagonal pattern for comfort and efficiency." loading="lazy" width="1100" height="1100" data-media-id="32176061743300">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/09_53528b54-e45b-43d5-82d1-db64ab7adbfd.jpg?v=1723892370&width=550 550w,//picklefox.com/cdn/shop/files/09_53528b54-e45b-43d5-82d1-db64ab7adbfd.jpg?v=1723892370&width=1100 1100w,//picklefox.com/cdn/shop/files/09_53528b54-e45b-43d5-82d1-db64ab7adbfd.jpg?v=1723892370&width=1445 1445w,//picklefox.com/cdn/shop/files/09_53528b54-e45b-43d5-82d1-db64ab7adbfd.jpg?v=1723892370 1500w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/09_53528b54-e45b-43d5-82d1-db64ab7adbfd.jpg?v=1723892370&width=1445') }}" alt="Hesacore Tour Grip with ergonomic honeycomb design and performance benefits for comfort, antishock, responsiveness, and grip efficiency." loading="lazy" width="1100" height="1100" data-media-id="32176061874372">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/05_1d0f675b-7a4b-4c77-8927-7f7ca35b7faf.jpg?v=1723892370&width=550 550w,//picklefox.com/cdn/shop/files/05_1d0f675b-7a4b-4c77-8927-7f7ca35b7faf.jpg?v=1723892370&width=1100 1100w,//picklefox.com/cdn/shop/files/05_1d0f675b-7a4b-4c77-8927-7f7ca35b7faf.jpg?v=1723892370&width=1445 1445w,//picklefox.com/cdn/shop/files/05_1d0f675b-7a4b-4c77-8927-7f7ca35b7faf.jpg?v=1723892370 1500w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/05_1d0f675b-7a4b-4c77-8927-7f7ca35b7faf.jpg?v=1723892370&width=1445') }}" alt="Step-by-step installation guide for Hesacore S Pickleball Grip showing proper grip placement, alignment, and adjustment for comfort and efficiency." loading="lazy" width="1100" height="1100" data-media-id="32176061776068"></div>
                                 </div>
                             </product-modal>

                         </div>
                     </section>

                     <script src="{{ asset('asset/cdn/shop/t/7/assets/product-form.js') }}" defer="defer"></script>
                     <script type="application/ld+json">
                         {
                             "@context": "http:\/\/schema.org\/"
                             , "@id": "\/products\/hesacore-s-pickleball-grip-white#product"
                             , "@type": "Product"
                             , "brand": {
                                 "@type": "Brand"
                                 , "name": "Hesacore"
                             }
                             , "category": "Pickleball"
                             , "description": "Hesacore Original Grip offers the perfect balance between comfort and efficiency for club players. It's been designed to absorb sweat, vibrations and to offer a greater friction surface on the grip.\nWho would have guessed that a honeycomb would prove to be the perfect ergonomic fit for the hand to naturally rest on? Not only that, but the concave hexagons provide a larger friction surface, which reduces the need to tighten the grip and minimizes vibrations from impacts, both traditional causes of injuries.\nSize: Small (1.5mm thickness)\nDimensions:\n\nLength: 5 1\/4 inches\nWeight: 0.53 ounces\nRecommended for handles up to 5.5 inches\n\n"
                             , "gtin": "197644760558"
                             , "hasMerchantReturnPolicy": {
                                 "merchantReturnLink": "https:\/\/picklefox.com\/policies\/refund-policy"
                             }
                             , "image": "https:\/\/picklefox.com\/cdn\/shop\/files\/HesacoreTourGripPickleball.png?v=1723892370\u0026width=1920"
                             , "name": "Hesacore S Pickleball Grip - 5.25 Inches Long - Regular Soft Feel - White"
                             , "offers": {
                                 "@id": "\/products\/hesacore-s-pickleball-grip-white?variant=44063142674628#offer"
                                 , "@type": "Offer"
                                 , "availability": "http:\/\/schema.org\/InStock"
                                 , "price": "150.00"
                                 , "priceCurrency": "MYR"
                                 , "url": "https:\/\/picklefox.com\/products\/hesacore-s-pickleball-grip-white?variant=44063142674628"
                             }
                             , "sku": "HCTS"
                             , "url": "https:\/\/picklefox.com\/products\/hesacore-s-pickleball-grip-white"
                         }

                     </script>


                     <script src="{{ asset('asset/cdn/shop/t/7/assets/product-modal.js') }}" defer="defer"></script>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/media-gallery.js') }}" defer="defer"></script>

                 </product-info>


             </section>
             <section id="shopify-section-template--17738895655108__featured_product_TUBMRD" class="shopify-section section section-featured-product">
                 <product-info data-section="template--17738895655108__featured_product_TUBMRD" data-product-id="8010120233156" data-update-url="false" data-url="/products/udrippin-nizo-sunglasses">
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/section-main-product.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/section-featured-product.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-accordion.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-price.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-deferred-media.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-rating.css') }}" rel="stylesheet" type="text/css" media="all" />
                     <link href="{{ asset('asset/cdn/shop/t/7/assets/component-volume-pricing.css') }}" rel="stylesheet" type="text/css" media="all" />

                     <style data-shopify>
                         .section-template--17738895655108__featured_product_TUBMRD-padding {
                             padding-top: 27px;
                             padding-bottom: 27px;
                         }

                         @media screen and (min-width: 750px) {
                             .section-template--17738895655108__featured_product_TUBMRD-padding {
                                 padding-top: 36px;
                                 padding-bottom: 36px;
                             }
                         }

                     </style>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/product-info.js') }}" defer="defer"></script>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/show-more.js') }}" defer="defer"></script>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/price-per-item.js') }}" defer="defer"></script>




                     <section class="color-scheme-2 gradient">
                         <div class="page-width section-template--17738895655108__featured_product_TUBMRD-padding">
                             <div class="featured-product product product--small grid grid--1-col gradient color-scheme-2 product--left isolate grid--2-col-tablet">
                                 <div class="grid__item product__media-wrapper">
                                     <media-gallery id="MediaGallery-template--17738895655108__featured_product_TUBMRD" role="region" aria-label="Gallery Viewer" data-desktop-layout="">
                                         <div id="GalleryStatus-template--17738895655108__featured_product_TUBMRD" class="visually-hidden" role="status"></div>
                                         <slider-component id="GalleryViewer-template--17738895655108__featured_product_TUBMRD" class="slider-mobile-gutter">
                                             <a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--17738895655108__featured_product_TUBMRD">
                                                 Skip to product information
                                             </a>
                                             <ul id="Slider-Gallery-template--17738895655108__featured_product_TUBMRD" class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile" role="list">
                                                 <li id="Slide-template--17738895655108__featured_product_TUBMRD-32178872287428" class="product__media-item grid__item slider__slide product__media-item--single is-active scroll-trigger animate--fade-in" data-media-id="template--17738895655108__featured_product_TUBMRD-32178872287428">

                                                     <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height" style="--ratio: 1.0; --preview-ratio: 1.0;">
                                                         <modal-opener class="product__modal-opener product__modal-opener--image" data-modal="#ProductModal-template--17738895655108__featured_product_TUBMRD">
                                                             <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true">

                                                                 <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-plus" viewBox="0 0 19 19">
                                                                         <path fill="currentColor" fill-rule="evenodd" d="M4.667 7.94a.5.5 0 0 1 .499-.501l5.534-.014a.5.5 0 1 1 .002 1l-5.534.014a.5.5 0 0 1-.5-.5" clip-rule="evenodd" />
                                                                         <path fill="currentColor" fill-rule="evenodd" d="M7.926 4.665a.5.5 0 0 1 .501.498l.014 5.534a.5.5 0 1 1-1 .003l-.014-5.534a.5.5 0 0 1 .499-.501" clip-rule="evenodd" />
                                                                         <path fill="currentColor" fill-rule="evenodd" d="M12.832 3.03a6.931 6.931 0 1 0-9.802 9.802 6.931 6.931 0 0 0 9.802-9.802M2.323 2.323a7.931 7.931 0 0 1 11.296 11.136l4.628 4.628a.5.5 0 0 1-.707.707l-4.662-4.662A7.932 7.932 0 0 1 2.323 2.323" clip-rule="evenodd" /></svg>
                                                                 </span>

                                                             </span>

                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                             <div class="product__media media media--transparent">
                                                                 <img src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=1946') }}" alt="UDRIPPIN &quot;NIZO&quot; sunglasses with blue-green high contrast lens on a white background" srcset="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=246 246w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=493 493w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=600 600w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=713 713w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=823 823w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=990 990w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=1100 1100w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=1206 1206w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=1346 1346w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=1426 1426w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=1646 1646w, //picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&amp;width=1946 1946w') }}" width="1946" height="1946" loading="lazy" class="image-magnify-lightbox" sizes="(min-width: 1200px) 495px, (min-width: 990px) calc(45.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                                                             </div>
                                                             <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="32178872287428">
                                                                 <span class="visually-hidden">
                                                                     Open media 1 in modal
                                                                 </span>
                                                             </button>
                                                         </modal-opener>
                                                     </div>

                                                 </li>





                                             </ul>
                                             <div class="slider-buttons quick-add-hidden small-hide">
                                                 <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
                                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                                     </span>
                                                 </button>
                                                 <div class="slider-counter caption">
                                                     <span class="slider-counter--current">1</span>
                                                     <span aria-hidden="true"> / </span>
                                                     <span class="visually-hidden">of</span>
                                                     <span class="slider-counter--total">7</span>
                                                 </div>
                                                 <button type="button" class="slider-button slider-button--next" name="next" aria-label="Slide right">
                                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                                     </span>
                                                 </button>
                                             </div>
                                         </slider-component>
                                     </media-gallery>

                                 </div>
                                 <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
                                     <section id="ProductInfo-template--17738895655108__featured_product_TUBMRD" class="product__info-container" data-section="template--17738895655108__featured_product_TUBMRD" data-url="/products/udrippin-nizo-sunglasses">
                                         <p class="product__text inline-richtext subtitle"><strong>MUST HAVE</strong></p>
                                         <p class="product__text inline-richtext caption-with-letter-spacing">UDRIPPIN</p>
                                         <h2 class="product__title h1">UDRIPPIN &quot;NIZO&quot; Sunglasses
                                         </h2>
                                         <div id="price-template--17738895655108__featured_product_TUBMRD" role="status">
                                             <div class="
      price price--large price--show-badge">
                                                 <div class="price__container">
                                                     <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                         <span class="price-item price-item--regular">
                                                             RM480.00
                                                         </span></div>
                                                     <div class="price__sale">
                                                         <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                         <span>
                                                             <s class="price-item price-item--regular">



                                                             </s>
                                                         </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                         <span class="price-item price-item--sale price-item--last">
                                                             RM480.00
                                                         </span>
                                                     </div>
                                                     <small class="unit-price caption hidden">
                                                         <span class="visually-hidden">Unit price</span>
                                                         <span class="price-item price-item--last">
                                                             <span></span>
                                                             <span aria-hidden="true">/</span>
                                                             <span class="visually-hidden">&nbsp;per&nbsp;</span>
                                                             <span>
                                                             </span>
                                                         </span>
                                                     </small>
                                                 </div><span class="badge price__badge-sale color-scheme-5">
                                                     Sale
                                                 </span>

                                                 <span class="badge price__badge-sold-out color-scheme-4">
                                                     Sold out
                                                 </span>
                                             </div>

                                         </div>
                                         <div class="product__tax caption rte"><a href="/policies/shipping-policy">Shipping</a> calculated at checkout.
                                         </div>
                                         <div>
                                             <form method="post" action="/cart/add" id="product_form_8010120233156" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44063510331588">

                                                 <input type="hidden" name="product-id" value="8010120233156" /><input type="hidden" name="section-id" value="template--17738895655108__featured_product_TUBMRD" /></form>
                                         </div>

                                         <div id="Quantity-Form-template--17738895655108__featured_product_TUBMRD" class="product-form__input product-form__quantity">



                                             <label class="quantity__label form__label" for="Quantity-template--17738895655108__featured_product_TUBMRD">
                                                 Quantity
                                                 <span class="quantity__rules-cart hidden">

                                                     <div class="loading__spinner hidden">
                                                         <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                             <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                     </div>
                                                     <span>(<span class="quantity-cart">0</span> in cart)</span>
                                                 </span>
                                             </label>
                                             <div class="price-per-item__container">
                                                 <quantity-input class="quantity">
                                                     <button class="quantity__button" name="minus" type="button">
                                                         <span class="visually-hidden">Decrease quantity for UDRIPPIN &amp;quot;NIZO&amp;quot; Sunglasses</span>
                                                         <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-minus" viewBox="0 0 10 2">
                                                                 <path fill="currentColor" fill-rule="evenodd" d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 1 1 0 1H1A.5.5 0 0 1 .5 1" clip-rule="evenodd" /></svg>
                                                         </span>
                                                     </button>
                                                     <input class="quantity__input" type="number" name="quantity" id="Quantity-template--17738895655108__featured_product_TUBMRD" data-cart-quantity="0" data-min="1" min="1" step="1" value="1" form="product-form-template--17738895655108__featured_product_TUBMRD">
                                                     <button class="quantity__button" name="plus" type="button">
                                                         <span class="visually-hidden">Increase quantity for UDRIPPIN &amp;quot;NIZO&amp;quot; Sunglasses</span>
                                                         <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-plus" viewBox="0 0 10 10">
                                                                 <path fill="currentColor" fill-rule="evenodd" d="M1 4.51a.5.5 0 0 0 0 1h3.5l.01 3.5a.5.5 0 0 0 1-.01V5.5l3.5-.01a.5.5 0 0 0-.01-1H5.5L5.49.99a.5.5 0 0 0-1 .01v3.5l-3.5.01z" clip-rule="evenodd" /></svg>
                                                         </span>
                                                     </button>
                                                 </quantity-input>
                                             </div>
                                             <div class="quantity__rules caption" id="Quantity-Rules-template--17738895655108__featured_product_TUBMRD"></div>
                                         </div>
                                         <div>
                                             <product-form class="product-form" data-hide-errors="false" data-section-id="template--17738895655108__featured_product_TUBMRD">
                                                 <div class="product-form__error-message-wrapper" role="alert" hidden>
                                                     <span class="svg-wrapper"><svg class="icon icon-error" viewBox="0 0 13 13">
                                                             <circle cx="6.5" cy="6.5" r="5.5" stroke="#fff" stroke-width="2" />
                                                             <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width=".7" />
                                                             <path fill="#fff" d="m5.874 3.528.1 4.044h1.053l.1-4.044zm.627 6.133c.38 0 .68-.288.68-.656s-.3-.656-.68-.656-.681.288-.681.656.3.656.68.656" />
                                                             <path fill="#fff" stroke="#EB001B" stroke-width=".7" d="M5.874 3.178h-.359l.01.359.1 4.044.008.341h1.736l.008-.341.1-4.044.01-.359H5.873Zm.627 6.833c.56 0 1.03-.432 1.03-1.006s-.47-1.006-1.03-1.006-1.031.432-1.031 1.006.47 1.006 1.03 1.006Z" /></svg>
                                                     </span>
                                                     <span class="product-form__error-message"></span>
                                                 </div>
                                                 <form method="post" action="/cart/add" id="product-form-template--17738895655108__featured_product_TUBMRD" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44063510331588" class="product-variant-id">
                                                     <div class="product-form__buttons"><button id="ProductSubmitButton-template--17738895655108__featured_product_TUBMRD" type="submit" name="add" class="product-form__submit button button--full-width button--secondary">
                                                             <span>Add to cart
                                                             </span>

                                                             <div class="loading__spinner hidden">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66">
                                                                     <circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>

                                                             </div>
                                                         </button>
                                                         <div data-shopify="payment-button" class="shopify-payment-button">
                                                             <shopify-accelerated-checkout recommended="{&quot;name&quot;:&quot;google_pay&quot;,&quot;wallet_params&quot;:{&quot;sdkUrl&quot;:&quot;https://pay.google.com/gp/p/js/pay.js&quot;,&quot;paymentData&quot;:{&quot;apiVersion&quot;:2,&quot;apiVersionMinor&quot;:0,&quot;shippingAddressParameters&quot;:{&quot;allowedCountryCodes&quot;:[&quot;AE&quot;,&quot;AT&quot;,&quot;AU&quot;,&quot;BE&quot;,&quot;CA&quot;,&quot;CH&quot;,&quot;CZ&quot;,&quot;DE&quot;,&quot;DK&quot;,&quot;ES&quot;,&quot;FI&quot;,&quot;FR&quot;,&quot;GB&quot;,&quot;HK&quot;,&quot;IE&quot;,&quot;IL&quot;,&quot;IT&quot;,&quot;JP&quot;,&quot;KR&quot;,&quot;MY&quot;,&quot;NL&quot;,&quot;NO&quot;,&quot;NZ&quot;,&quot;PL&quot;,&quot;PT&quot;,&quot;SE&quot;,&quot;SG&quot;,&quot;US&quot;],&quot;phoneNumberRequired&quot;:true},&quot;merchantInfo&quot;:{&quot;merchantName&quot;:&quot;Picklefox.com&quot;,&quot;merchantId&quot;:&quot;16708973830884969730&quot;,&quot;merchantOrigin&quot;:&quot;picklefox.com&quot;,&quot;authJwt&quot;:&quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJtZXJjaGFudElkIjoiMTY3MDg5NzM4MzA4ODQ5Njk3MzAiLCJtZXJjaGFudE9yaWdpbiI6InBpY2tsZWZveC5jb20iLCJpYXQiOjE3MzA3MjAwNDF9.ZS-S8FURPwClGd3uKGCuWig-KfbNuiVxfkD9fNR3HS6oVaFzmlJog0bV-Ow_okAM2Dqwfe0bMC5wsN5qj9v5CQ&quot;},&quot;allowedPaymentMethods&quot;:[{&quot;type&quot;:&quot;CARD&quot;,&quot;parameters&quot;:{&quot;allowedCardNetworks&quot;:[&quot;VISA&quot;,&quot;MASTERCARD&quot;,&quot;AMEX&quot;,&quot;DISCOVER&quot;,&quot;JCB&quot;],&quot;allowedAuthMethods&quot;:[&quot;PAN_ONLY&quot;,&quot;CRYPTOGRAM_3DS&quot;],&quot;billingAddressRequired&quot;:true,&quot;billingAddressParameters&quot;:{&quot;format&quot;:&quot;FULL&quot;,&quot;phoneNumberRequired&quot;:true}},&quot;tokenizationSpecification&quot;:{&quot;type&quot;:&quot;PAYMENT_GATEWAY&quot;,&quot;parameters&quot;:{&quot;gateway&quot;:&quot;shopify&quot;,&quot;gatewayMerchantId&quot;:&quot;65451524292&quot;}}}],&quot;emailRequired&quot;:true},&quot;customerAccountEmail&quot;:null,&quot;environment&quot;:&quot;PRODUCTION&quot;,&quot;availablePresentmentCurrencies&quot;:[&quot;MYR&quot;],&quot;auth&quot;:[{&quot;jwt&quot;:&quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJtZXJjaGFudElkIjoiMTY3MDg5NzM4MzA4ODQ5Njk3MzAiLCJtZXJjaGFudE9yaWdpbiI6InBpY2tsZWZveC5jb20iLCJpYXQiOjE3MzA3MjAwNDF9.KqQLMUFTpwvdAJtdTSltPNQsH1bIqmH5m6nINssCliNc4rf9XsQubO_JQwVeImXauAczM2r923FDfBnAunRLnQ&quot;,&quot;expiresAt&quot;:1730763241},{&quot;jwt&quot;:&quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiJ9.eyJtZXJjaGFudElkIjoiMTY3MDg5NzM4MzA4ODQ5Njk3MzAiLCJtZXJjaGFudE9yaWdpbiI6InBpY2tsZWZveC5jb20iLCJpYXQiOjE3MzA3NjMyNDF9.BjtNM4FODmiS75-X3dHuTtxHr_6mdmp1j8sILVDfcXcAOA-x0C-VvbpGQGO0DEM13IC5IvaqIWizXDTzP5baFQ&quot;,&quot;expiresAt&quot;:1730806441}],&quot;expiresAt&quot;:1730763241}}" fallback="{&quot;name&quot;:&quot;buy_it_now&quot;,&quot;wallet_params&quot;:{}}" access-token="801509de32718c81f9d760d8c575d293" buyer-country="MY" buyer-locale="en" buyer-currency="MYR" variant-params="[{&quot;id&quot;:44063510331588,&quot;requiresShipping&quot;:true}]" shop-id="65451524292">
                                                                 <div class="shopify-payment-button__button" role="button" disabled aria-hidden="true" style="background-color: transparent; border: none">
                                                                     <div class="shopify-payment-button__skeleton">&nbsp;</div>
                                                                 </div>
                                                                 <div class="shopify-payment-button__more-options shopify-payment-button__skeleton" role="button" disabled aria-hidden="true">&nbsp;</div>
                                                             </shopify-accelerated-checkout> <small id="shopify-buyer-consent" class="hidden" aria-hidden="true"> This item is a recurring or deferred purchase. By continuing, I agree to the <span id="shopify-subscription-policy-button">cancellation policy</span> and authorize you to charge my payment method at the prices, frequency and dates listed on this page until my order is fulfilled or I cancel, if permitted. </small>
                                                         </div>
                                                     </div><input type="hidden" name="product-id" value="8010120233156" /><input type="hidden" name="section-id" value="template--17738895655108__featured_product_TUBMRD" />
                                                 </form>
                                             </product-form>
                                         </div>

                                         <script src="{{ asset('asset/cdn/shop/t/7/assets/share.js') }}" defer="defer"></script>

                                         <share-button id="Share-template--17738895655108__featured_product_TUBMRD" class="share-button quick-add-hidden">
                                             <button class="share-button__button hidden">
                                                 <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-share" viewBox="0 0 13 12">
                                                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.625 8.125v2.167a1.083 1.083 0 0 0 1.083 1.083h7.584a1.083 1.083 0 0 0 1.083-1.083V8.125" />
                                                         <path fill="currentColor" fill-rule="evenodd" d="M6.148 1.271a.5.5 0 0 1 .707 0L9.563 3.98a.5.5 0 0 1-.707.707L6.501 2.332 4.147 4.687a.5.5 0 1 1-.708-.707z" clip-rule="evenodd" />
                                                         <path fill="currentColor" fill-rule="evenodd" d="M6.5 1.125a.5.5 0 0 1 .5.5v6.5a.5.5 0 0 1-1 0v-6.5a.5.5 0 0 1 .5-.5" clip-rule="evenodd" /></svg>
                                                 </span>
                                                 Share
                                             </button>
                                             <details id="Details-share_9gd8ei-template--17738895655108__featured_product_TUBMRD">
                                                 <summary class="share-button__button">
                                                     <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-share" viewBox="0 0 13 12">
                                                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.625 8.125v2.167a1.083 1.083 0 0 0 1.083 1.083h7.584a1.083 1.083 0 0 0 1.083-1.083V8.125" />
                                                             <path fill="currentColor" fill-rule="evenodd" d="M6.148 1.271a.5.5 0 0 1 .707 0L9.563 3.98a.5.5 0 0 1-.707.707L6.501 2.332 4.147 4.687a.5.5 0 1 1-.708-.707z" clip-rule="evenodd" />
                                                             <path fill="currentColor" fill-rule="evenodd" d="M6.5 1.125a.5.5 0 0 1 .5.5v6.5a.5.5 0 0 1-1 0v-6.5a.5.5 0 0 1 .5-.5" clip-rule="evenodd" /></svg>
                                                     </span>
                                                     Share
                                                 </summary>
                                                 <div class="share-button__fallback motion-reduce">
                                                     <div class="field">
                                                         <span id="ShareMessage-template--17738895655108__featured_product_TUBMRD" class="share-button__message hidden" role="status"> </span>
                                                         <input type="text" class="field__input" id="ShareUrl-template--17738895655108__featured_product_TUBMRD" value="https:{{ asset('asset/products/udrippin-nizo-sunglasses') }}" placeholder="Link" onclick="this.select();" readonly>
                                                         <label class="field__label" for="ShareUrl-template--17738895655108__featured_product_TUBMRD">Link</label>
                                                     </div>
                                                     <button class="share-button__close hidden">
                                                         <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                                                 <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>
                                                         </span>
                                                         <span class="visually-hidden">Close share</span>
                                                     </button>
                                                     <button class="share-button__copy">
                                                         <span class="svg-wrapper"><svg class="icon icon-clipboard" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor" />
                                                             </svg>
                                                         </span>
                                                         <span class="visually-hidden">Copy link</span>
                                                     </button>
                                                 </div>
                                             </details>
                                         </share-button>

                                         <a href="/products/udrippin-nizo-sunglasses" class="link product__view-details animate-arrow">
                                             View full details
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                 <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                         </a>
                                     </section>
                                 </div>
                             </div>


                             <product-modal id="ProductModal-template--17738895655108__featured_product_TUBMRD" class="product-media-modal media-modal">
                                 <div class="product-media-modal__dialog color-scheme-2 gradient" role="dialog" aria-label="Media gallery" aria-modal="true" tabindex="-1">
                                     <button id="ModalClose-template--17738895655108__featured_product_TUBMRD" type="button" class="product-media-modal__toggle" aria-label="Close">
                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                             <path fill="currentColor" d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z" /></svg>

                                     </button>

                                     <div class="product-media-modal__content color-scheme-2 gradient" role="document" aria-label="Media gallery" tabindex="0">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&width=550 550w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&width=1100 1100w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&width=1445 1445w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&width=1680 1680w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266 1750w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_blue.jpg?v=1723900266&width=1445') }}" alt="UDRIPPIN &quot;NIZO&quot; sunglasses with blue-green high contrast lens on a white background" loading="lazy" width="1100" height="1100" data-media-id="32178872287428">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey.jpg?v=1723900266&width=550 550w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey.jpg?v=1723900266&width=1100 1100w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey.jpg?v=1723900266&width=1445 1445w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey.jpg?v=1723900266&width=1680 1680w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey.jpg?v=1723900266 1750w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_grey.jpg?v=1723900266&width=1445') }}" alt="UDRIPPIN NIZO sunglasses with mirror grey contrast lens, sporty design, 3 interchangeable lenses including blue-green high contrast and clear lens." loading="lazy" width="1100" height="1100" data-media-id="32178872418500">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_clear.jpg?v=1723900266&width=550 550w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_clear.jpg?v=1723900266&width=1100 1100w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_clear.jpg?v=1723900266&width=1445 1445w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_clear.jpg?v=1723900266&width=1680 1680w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_clear.jpg?v=1723900266 1750w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_clear.jpg?v=1723900266&width=1445') }}" alt="UDRIPPIN &quot;NIZO&quot; Sunglasses with Clear Lens, featuring interchangeable Mirror Grey and Blue-Green High Contrast Lenses" loading="lazy" width="1100" height="1100" data-media-id="32178872352964">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey_nosepiece.jpg?v=1723900266&width=550 550w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey_nosepiece.jpg?v=1723900266&width=1100 1100w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey_nosepiece.jpg?v=1723900266&width=1445 1445w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey_nosepiece.jpg?v=1723900266&width=1680 1680w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_grey_nosepiece.jpg?v=1723900266 1750w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_grey_nosepiece.jpg?v=1723900266&width=1445') }}" alt="Close-up view of UDRIPPIN &quot;NIZO&quot; sunglasses with Mirror Grey Contrast Lens." loading="lazy" width="1100" height="1100" data-media-id="32178872385732">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_lensefeatures.jpg?v=1723900266&width=550 550w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_lensefeatures.jpg?v=1723900266&width=1100 1100w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_lensefeatures.jpg?v=1723900266&width=1445 1445w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_lensefeatures.jpg?v=1723900266&width=1680 1680w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_lensefeatures.jpg?v=1723900266 1750w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_lensefeatures.jpg?v=1723900266&width=1445') }}" alt="UDRIPPIN NIZO sunglasses with blue-green high contrast lens, close-up side view showing sleek black frame and lens detail." loading="lazy" width="1100" height="1100" data-media-id="32178872451268">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_withlenses.jpg?v=1723900266&width=550 550w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_withlenses.jpg?v=1723900266&width=1100 1100w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_withlenses.jpg?v=1723900266&width=1445 1445w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_withlenses.jpg?v=1723900266&width=1680 1680w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_withlenses.jpg?v=1723900266 1750w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_withlenses.jpg?v=1723900266&width=1445') }}" alt="UDRIPPIN NIZO sunglasses with 3 interchangeable lenses: Mirror Grey, Blue-Green High Contrast, and Clear Lens for versatile eyewear options." loading="lazy" width="1100" height="1100" data-media-id="32178872484036">
                                         <img class="global-media-settings global-media-settings--no-shadow" srcset="//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_case.jpg?v=1723900266&width=550 550w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_case.jpg?v=1723900266&width=1100 1100w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_case.jpg?v=1723900266&width=1445 1445w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_case.jpg?v=1723900266&width=1680 1680w,//picklefox.com/cdn/shop/files/udrippin_nizo_sunglasses_case.jpg?v=1723900266 1750w
    " sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="{{ asset('asset/cdn/shop/files/udrippin_nizo_sunglasses_case.jpg?v=1723900266&width=1445') }}" alt="Black UDRIPPIN NIZO Sunglasses Carrying Case with Zipper Enclosure" loading="lazy" width="1100" height="1100" data-media-id="32178872320196"></div>
                                 </div>
                             </product-modal>

                         </div>
                     </section>

                     <script src="{{ asset('asset/cdn/shop/t/7/assets/product-form.js') }}" defer="defer"></script>
                     <script type="application/ld+json">
                         {
                             "@context": "http:\/\/schema.org\/"
                             , "@id": "\/products\/udrippin-nizo-sunglasses#product"
                             , "@type": "Product"
                             , "brand": {
                                 "@type": "Brand"
                                 , "name": "UDRIPPIN"
                             }
                             , "category": "Pickleball"
                             , "description": "One pair of sunglasses, 3 lenses!\n\nMirror Grey Contrast Lens\nBlue-Green High Contrast Lens\nClear Lens\n\n"
                             , "hasMerchantReturnPolicy": {
                                 "merchantReturnLink": "https:\/\/picklefox.com\/policies\/refund-policy"
                             }
                             , "image": "https:\/\/picklefox.com\/cdn\/shop\/files\/udrippin_nizo_sunglasses_blue.jpg?v=1723900266\u0026width=1920"
                             , "name": "UDRIPPIN \"NIZO\" Sunglasses"
                             , "offers": {
                                 "@id": "\/products\/udrippin-nizo-sunglasses?variant=44063510331588#offer"
                                 , "@type": "Offer"
                                 , "availability": "http:\/\/schema.org\/InStock"
                                 , "price": "480.00"
                                 , "priceCurrency": "MYR"
                                 , "url": "https:\/\/picklefox.com\/products\/udrippin-nizo-sunglasses?variant=44063510331588"
                             }
                             , "sku": "UDNS"
                             , "url": "https:\/\/picklefox.com\/products\/udrippin-nizo-sunglasses"
                         }

                     </script>


                     <script src="{{ asset('asset/cdn/shop/t/7/assets/product-modal.js') }}" defer="defer"></script>
                     <script src="{{ asset('asset/cdn/shop/t/7/assets/media-gallery.js') }}" defer="defer"></script>

                 </product-info>


             </section>
             <section id="shopify-section-template--17738895655108__multicolumn_6jxNy4" class="shopify-section section">
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/section-multicolumn.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-slider.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <style data-shopify>
                     .section-template--17738895655108__multicolumn_6jxNy4-padding {
                         padding-top: 27px;
                         padding-bottom: 27px;
                     }

                     @media screen and (min-width: 750px) {
                         .section-template--17738895655108__multicolumn_6jxNy4-padding {
                             padding-top: 36px;
                             padding-bottom: 36px;
                         }
                     }

                 </style>
                 <div class="multicolumn color-scheme-3 gradient background-none no-heading">
                     <div class="page-width section-template--17738895655108__multicolumn_6jxNy4-padding isolate scroll-trigger animate--slide-in" data-cascade>
                         <slider-component class="slider-mobile-gutter">
                             <ul class="multicolumn-list contains-content-container grid grid--1-col-tablet-down grid--3-col-desktop" id="Slider-template--17738895655108__multicolumn_6jxNy4" role="list">
                                 <li id="Slide-template--17738895655108__multicolumn_6jxNy4-1" class="multicolumn-list__item grid__item center scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">
                                     <div class="multicolumn-card content-container">
                                         <div class="multicolumn-card__image-wrapper multicolumn-card__image-wrapper--third-width multicolumn-card-spacing">
                                             <div class="media media--transparent media--adapt" style="padding-bottom: 100.0%;">
                                                 <img src="{{ asset('asset/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=3200') }}" alt="" srcset="{{ asset('asset/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=50 50w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=75 75w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=100 100w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=150 150w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=200 200w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=300 300w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=400 400w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=500 500w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=750 750w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=1000 1000w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=1250 1250w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=1500 1500w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=1750 1750w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=2000 2000w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=2250 2250w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=2500 2500w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=2750 2750w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=3000 3000w, //picklefox.com/cdn/shop/files/free-shipping_19e5be37-ecfe-45be-9323-287601991c31.png?v=1730381969&amp;width=3200 3200w') }}" width="3200" height="3200" loading="lazy" sizes="
                      (min-width: 1200px) calc((1200px - 148px) * 0.33 /  3),
                      (min-width: 990px) calc((100vw - 148px) * 0.33 / 3),
                      (min-width: 750px) calc((100vw - 100px) * 0.33 / 1),
                      calc((100vw - 30px) * 0.33 / 1)
                    " class="multicolumn-card__image">
                                             </div>
                                         </div>
                                         <div class="multicolumn-card__info">
                                             <h3 class="inline-richtext">Free Shipping</h3>
                                             <div class="rte">
                                                 <p>Free shipping for all purchases over RM100. Paddles and most gear reach your doorstep without extra costs. Use code FREESHIP at checkout. </p>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__multicolumn_6jxNy4-2" class="multicolumn-list__item grid__item center scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">
                                     <div class="multicolumn-card content-container">
                                         <div class="multicolumn-card__image-wrapper multicolumn-card__image-wrapper--third-width multicolumn-card-spacing">
                                             <div class="media media--transparent media--adapt" style="padding-bottom: 100.0%;">
                                                 <img src="{{ asset('asset/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=3200') }}" alt="" srcset="{{ asset('asset/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=50 50w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=75 75w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=100 100w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=150 150w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=200 200w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=300 300w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=400 400w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=500 500w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=750 750w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=1000 1000w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=1250 1250w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=1500 1500w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=1750 1750w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=2000 2000w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=2250 2250w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=2500 2500w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=2750 2750w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=3000 3000w, //picklefox.com/cdn/shop/files/transparent-pricing_a04a8b06-9c4a-459e-9e0f-1402ece18bd5.png?v=1730381969&amp;width=3200 3200w') }}" width="3200" height="3200" loading="lazy" sizes="
                      (min-width: 1200px) calc((1200px - 148px) * 0.33 /  3),
                      (min-width: 990px) calc((100vw - 148px) * 0.33 / 3),
                      (min-width: 750px) calc((100vw - 100px) * 0.33 / 1),
                      calc((100vw - 30px) * 0.33 / 1)
                    " class="multicolumn-card__image">
                                             </div>
                                         </div>
                                         <div class="multicolumn-card__info">
                                             <h3 class="inline-richtext">Transparent Pricing</h3>
                                             <div class="rte">
                                                 <p>Our pricing aligns with the manufacturers' prices. We believe in transparency and fairness, ensuring you get the best deal without any hidden costs. </p>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__multicolumn_6jxNy4-3" class="multicolumn-list__item grid__item center scroll-trigger animate--slide-in" data-cascade style="--animation-order: 3;">
                                     <div class="multicolumn-card content-container">
                                         <div class="multicolumn-card__image-wrapper multicolumn-card__image-wrapper--third-width multicolumn-card-spacing">
                                             <div class="media media--transparent media--adapt" style="padding-bottom: 100.0%;">
                                                 <img src="{{ asset('asset/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=3200') }}" alt="" srcset="{{ asset('asset/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=50 50w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=75 75w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=100 100w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=150 150w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=200 200w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=300 300w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=400 400w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=500 500w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=750 750w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=1000 1000w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=1250 1250w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=1500 1500w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=1750 1750w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=2000 2000w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=2250 2250w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=2500 2500w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=2750 2750w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=3000 3000w, //picklefox.com/cdn/shop/files/warranty_b2e2427e-c1e6-4aff-a63e-e831b15437fb.png?v=1730381968&amp;width=3200 3200w') }}" width="3200" height="3200" loading="lazy" sizes="
                      (min-width: 1200px) calc((1200px - 148px) * 0.33 /  3),
                      (min-width: 990px) calc((100vw - 148px) * 0.33 / 3),
                      (min-width: 750px) calc((100vw - 100px) * 0.33 / 1),
                      calc((100vw - 30px) * 0.33 / 1)
                    " class="multicolumn-card__image">
                                             </div>
                                         </div>
                                         <div class="multicolumn-card__info">
                                             <h3 class="inline-richtext">Warranty</h3>
                                             <div class="rte">
                                                 <p>As official distributors, we extend the same warranty terms as the manufacturers. You can rest assured that your purchase is protected.</p>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                             </ul>
                         </slider-component>
                         <div class="center"></div>
                     </div>
                 </div>


             </section>
             <section id="shopify-section-template--17738895655108__featured_blog_tigUyc" class="shopify-section">
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-slider.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-card.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/component-article-card.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <link href="{{ asset('asset/cdn/shop/t/7/assets/section-featured-blog.css') }}" rel="stylesheet" type="text/css" media="all" />
                 <style data-shopify>
                     .section-template--17738895655108__featured_blog_tigUyc-padding {
                         padding-top: 27px;
                         padding-bottom: 27px;
                     }

                     @media screen and (min-width: 750px) {
                         .section-template--17738895655108__featured_blog_tigUyc-padding {
                             padding-top: 36px;
                             padding-bottom: 36px;
                         }
                     }

                 </style>
                 <div class="blog color-scheme-7efd7f2f-6410-41cb-a1df-285103efb9e0 gradient">
                     <div class="page-width-desktop isolate section-template--17738895655108__featured_blog_tigUyc-padding">
                         <div class="title-wrapper-with-link title-wrapper--self-padded-tablet-down title-wrapper--no-top-margin">
                             <h2 id="SectionHeading-template--17738895655108__featured_blog_tigUyc" class="blog__title inline-richtext h2 scroll-trigger animate--slide-in" data-cascade>
                                 Kitchen On Fire
                             </h2><a href="/blogs/kitchen-on-fire" class="link underlined-link large-up-hide scroll-trigger animate--slide-in">
                                 View all
                             </a>
                         </div>
                         <slider-component class="slider-mobile-gutter scroll-trigger animate--slide-in">
                             <ul id="Slider-template--17738895655108__featured_blog_tigUyc" class="blog__posts articles-wrapper contains-card contains-card--article grid grid--peek grid--2-col-tablet grid--3-col-desktop slider slider--tablet" role="list">
                                 <li id="Slide-template--17738895655108__featured_blog_tigUyc-1" class="blog__post grid__item article slider__slide slider__slide--full-width scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">

                                     <div class="article-card-wrapper card-wrapper underline-links-hover">

                                         <div class="
        card article-card
        card--card

         card--media
         color-scheme-2 gradient

      " style="--ratio-percent: 60.24096385542169%;">
                                             <div class="card__inner  ratio" style="--ratio-percent: 60.24096385542169%;">
                                                 <div class="article-card__image-wrapper card__media">
                                                     <div class="article-card__image media media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/articles/40429e8cec8e87100f69cc6d5c34f9d0.jpg?v=1725166933&width=165 165w,//picklefox.com/cdn/shop/articles/40429e8cec8e87100f69cc6d5c34f9d0.jpg?v=1725166933&width=360 360w,//picklefox.com/cdn/shop/articles/40429e8cec8e87100f69cc6d5c34f9d0.jpg?v=1725166933&width=533 533w,//picklefox.com/cdn/shop/articles/40429e8cec8e87100f69cc6d5c34f9d0.jpg?v=1725166933&width=720 720w,//picklefox.com/cdn/shop/articles/40429e8cec8e87100f69cc6d5c34f9d0.jpg?v=1725166933&width=1000 1000w,//picklefox.com/cdn/shop/articles/40429e8cec8e87100f69cc6d5c34f9d0.jpg?v=1725166933 1000w
                " src="{{ asset('asset/cdn/shop/articles/40429e8cec8e87100f69cc6d5c34f9d0.jpg?v=1725166933&width=533') }}" sizes="(min-width: 1200px) 550px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="Six Zero Ruby 14mm paddle with XS Hesacore grip with UDRIPPIN over grip" class="motion-reduce" loading="lazy" width="1000" height="1333">

                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading h2">
                                                             <a href="/blogs/kitchen-on-fire/installing-a-hesacore-grip" class="full-unstyled-link">
                                                                 Installing a Hesacore grip
                                                             </a>
                                                         </h3>
                                                         <div class="article-card__info caption-with-letter-spacing h5"><span class="circle-divider"><time datetime="2024-09-01T04:55:54Z">September 1, 2024</time></span></div>
                                                         <p class="article-card__excerpt rte-width">On my new Ruby 14, I decided to set it up with a Hesacore from the start. I guess most would try it out and then upgrade, but I really...
                                                         </p>
                                                         <div class="article-card__footer"></div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h2">
                                                         <a href="/blogs/kitchen-on-fire/installing-a-hesacore-grip" class="full-unstyled-link">
                                                             Installing a Hesacore grip
                                                         </a>
                                                     </h3>
                                                     <div class="article-card__info caption-with-letter-spacing h5"><span class="circle-divider"><time datetime="2024-09-01T04:55:54Z">September 1, 2024</time></span></div>
                                                     <p class="article-card__excerpt rte-width">On my new Ruby 14, I decided to set it up with a Hesacore from the start. I guess most would try it out and then upgrade, but I really...
                                                     </p>
                                                     <div class="article-card__footer"></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_blog_tigUyc-2" class="blog__post grid__item article slider__slide slider__slide--full-width scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">

                                     <div class="article-card-wrapper card-wrapper underline-links-hover">

                                         <div class="
        card article-card
        card--card

         card--media
         color-scheme-2 gradient

      " style="--ratio-percent: 60.24096385542169%;">
                                             <div class="card__inner  ratio" style="--ratio-percent: 60.24096385542169%;">
                                                 <div class="article-card__image-wrapper card__media">
                                                     <div class="article-card__image media media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949&width=165 165w,//picklefox.com/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949&width=360 360w,//picklefox.com/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949&width=533 533w,//picklefox.com/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949&width=720 720w,//picklefox.com/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949&width=1000 1000w,//picklefox.com/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949&width=1500 1500w,//picklefox.com/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949 4000w
                " src="{{ asset('asset/cdn/shop/articles/462eb688b3f12e453062b33ceaabe59a.jpg?v=1725166949&width=533') }}" sizes="(min-width: 1200px) 550px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="Indoor pickleball tournament in Malaysia the  Skechers KL International Pickleball Tournament 2024 at Tun Razak National Tennis Centre" class="motion-reduce" loading="lazy" width="4000" height="3000">

                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading h2">
                                                             <a href="/blogs/kitchen-on-fire/the-growing-popularity-of-pickleball-in-malaysia" class="full-unstyled-link">
                                                                 The Growing Popularity of Pickleball in Malaysia
                                                             </a>
                                                         </h3>
                                                         <div class="article-card__info caption-with-letter-spacing h5"><span class="circle-divider"><time datetime="2024-08-05T06:33:34Z">August 5, 2024</time></span></div>
                                                         <p class="article-card__excerpt rte-width">Pickleball, the sport we love that takes the best elements of tennis, badminton, and table tennis, is experiencing a surge in popularity across Malaysia. I know this surge is palpable...
                                                         </p>
                                                         <div class="article-card__footer"></div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h2">
                                                         <a href="/blogs/kitchen-on-fire/the-growing-popularity-of-pickleball-in-malaysia" class="full-unstyled-link">
                                                             The Growing Popularity of Pickleball in Malaysia
                                                         </a>
                                                     </h3>
                                                     <div class="article-card__info caption-with-letter-spacing h5"><span class="circle-divider"><time datetime="2024-08-05T06:33:34Z">August 5, 2024</time></span></div>
                                                     <p class="article-card__excerpt rte-width">Pickleball, the sport we love that takes the best elements of tennis, badminton, and table tennis, is experiencing a surge in popularity across Malaysia. I know this surge is palpable...
                                                     </p>
                                                     <div class="article-card__footer"></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li id="Slide-template--17738895655108__featured_blog_tigUyc-3" class="blog__post grid__item article slider__slide slider__slide--full-width scroll-trigger animate--slide-in" data-cascade style="--animation-order: 3;">

                                     <div class="article-card-wrapper card-wrapper underline-links-hover">

                                         <div class="
        card article-card
        card--card

         card--media
         color-scheme-2 gradient

      " style="--ratio-percent: 60.24096385542169%;">
                                             <div class="card__inner  ratio" style="--ratio-percent: 60.24096385542169%;">
                                                 <div class="article-card__image-wrapper card__media">
                                                     <div class="article-card__image media media--hover-effect">

                                                         <img srcset="//picklefox.com/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969&width=165 165w,//picklefox.com/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969&width=360 360w,//picklefox.com/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969&width=533 533w,//picklefox.com/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969&width=720 720w,//picklefox.com/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969&width=1000 1000w,//picklefox.com/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969&width=1500 1500w,//picklefox.com/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969 2048w
                " src="{{ asset('asset/cdn/shop/articles/a4733c678194b39c5f683d1e8be89a72.png?v=1725166969&width=533') }}" sizes="(min-width: 1200px) 550px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="Yellow pickleball in mid-air with bright blue sky and sun in the background." class="motion-reduce" loading="lazy" width="2048" height="2048">

                                                     </div>
                                                 </div>
                                                 <div class="card__content">
                                                     <div class="card__information">
                                                         <h3 class="card__heading h2">
                                                             <a href="/blogs/kitchen-on-fire/how-to-choose-the-right-pickleball-paddle-a-guide-for-every-player" class="full-unstyled-link">
                                                                 How I choose my Engage New Pursuit PRO1 6.0
                                                             </a>
                                                         </h3>
                                                         <div class="article-card__info caption-with-letter-spacing h5"><span class="circle-divider"><time datetime="2024-07-29T09:43:46Z">July 29, 2024</time></span></div>
                                                         <p class="article-card__excerpt rte-width">Choosing the right pickleball paddle can significantly impact your game, whether you're a beginner or an experienced player. With so many options available, it can be overwhelming to make the...
                                                         </p>
                                                         <div class="article-card__footer"></div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card__content">
                                                 <div class="card__information">
                                                     <h3 class="card__heading h2">
                                                         <a href="/blogs/kitchen-on-fire/how-to-choose-the-right-pickleball-paddle-a-guide-for-every-player" class="full-unstyled-link">
                                                             How I choose my Engage New Pursuit PRO1 6.0
                                                         </a>
                                                     </h3>
                                                     <div class="article-card__info caption-with-letter-spacing h5"><span class="circle-divider"><time datetime="2024-07-29T09:43:46Z">July 29, 2024</time></span></div>
                                                     <p class="article-card__excerpt rte-width">Choosing the right pickleball paddle can significantly impact your game, whether you're a beginner or an experienced player. With so many options available, it can be overwhelming to make the...
                                                     </p>
                                                     <div class="article-card__footer"></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                             </ul>
                             <div class="slider-buttons">
                                 <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                     </span>
                                 </button>
                                 <div class="slider-counter caption">
                                     <span class="slider-counter--current">1</span>
                                     <span aria-hidden="true"> / </span>
                                     <span class="visually-hidden">of</span>
                                     <span class="slider-counter--total">3</span>
                                 </div>
                                 <button type="button" class="slider-button slider-button--next" name="next" aria-label="Slide right">
                                     <span class="svg-wrapper"><svg class="icon icon-caret" viewBox="0 0 10 6">
                                             <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" /></svg>
                                     </span>
                                 </button>
                             </div>
                         </slider-component>
                         <div class="blog__view-all center small-hide medium-hide scroll-trigger animate--slide-in" data-cascade>
                             <a href="/blogs/kitchen-on-fire" id="ViewAll-template--17738895655108__featured_blog_tigUyc" class="blog__button button" aria-labelledby="ViewAll-template--17738895655108__featured_blog_tigUyc SectionHeading-template--17738895655108__featured_blog_tigUyc">
                                 View all
                             </a>
                         </div>
                     </div>
                 </div>


                 <style>
                     #shopify-section-template--17738895655108__featured_blog_tigUyc h1 {
                         font-size: 24px;
                     }

                     #shopify-section-template--17738895655108__featured_blog_tigUyc h3 {
                         font-size: 20px;
                     }

                     #shopify-section-template--17738895655108__featured_blog_tigUyc .card__information {
                         text-align: left;
                         text-indent: 0 !important;
                     }

                 </style>
             </section>
         </main>

         <!-- BEGIN sections: footer-group -->
         <div id="shopify-section-sections--17738896146628__footer" class="shopify-section shopify-section-group-footer-group">
             <link href="{{ asset('asset/cdn/shop/t/7/assets/section-footer.css') }}" rel="stylesheet" type="text/css" media="all" />
             <link href="{{ asset('asset/cdn/shop/t/7/assets/component-newsletter.css') }}" rel="stylesheet" type="text/css" media="all" />
             <link href="{{ asset('asset/cdn/shop/t/7/assets/component-list-menu.css') }}" rel="stylesheet" type="text/css" media="all" />
             <link href="{{ asset('asset/cdn/shop/t/7/assets/component-list-payment.css') }}" rel="stylesheet" type="text/css" media="all" />
             <link href="{{ asset('asset/cdn/shop/t/7/assets/component-list-social.css') }}" rel="stylesheet" type="text/css" media="all" />
             <style data-shopify>
                 .footer {
                     margin-top: 0px;
                 }

                 .section-sections--17738896146628__footer-padding {
                     padding-top: 24px;
                     padding-bottom: 24px;
                 }

                 @media screen and (min-width: 750px) {
                     .footer {
                         margin-top: 0px;
                     }

                     .section-sections--17738896146628__footer-padding {
                         padding-top: 32px;
                         padding-bottom: 32px;
                     }
                 }

             </style>
             <footer class="footer color-scheme-4 gradient section-sections--17738896146628__footer-padding">
                 <div class="footer__content-top page-width">
                     <div class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in" data-cascade>
                         <div class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">
                             <ul class="footer-block__details-content list-unstyled">
                                 <li>
                                     <a href="/pages/about-us" class="link link--text list-menu__item list-menu__item--link">
                                         About
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/pages/contact" class="link link--text list-menu__item list-menu__item--link">
                                         Contact
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/pages/customer-reviews" class="link link--text list-menu__item list-menu__item--link">
                                         Customer Reviews
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/blogs/kitchen-on-fire" class="link link--text list-menu__item list-menu__item--link">
                                         Kitchen On Fire
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/blogs/court-reviews" class="link link--text list-menu__item list-menu__item--link">
                                         Court Reviews
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/pages/join-the-picklefox-ambassador-program" class="link link--text list-menu__item list-menu__item--link">
                                         Ambassador Program
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/search" class="link link--text list-menu__item list-menu__item--link">
                                         Search
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <div class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">
                             <ul class="footer-block__details-content list-unstyled">
                                 <li>
                                     <a href="/collections/new" class="link link--text list-menu__item list-menu__item--link">
                                         Latest Paddles
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/collections/best-sellers" class="link link--text list-menu__item list-menu__item--link">
                                         Best Sellers
                                     </a>
                                 </li>
                                 <li>
                                     <a href="/collections/featured" class="link link--text list-menu__item list-menu__item--link">
                                         Featured Gear
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <div class="footer-block grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 3;">
                             <h2 class="footer-block__heading inline-richtext">Shop Confidently</h2>
                             <div class="footer-block__details-content rte">
                                 <p>Picklefox provides curated pickleball equipment, transparent pricing, and a secure shopping experience. We prioritize quality, community, and customer satisfaction.<br /><br /><a href="/pages/why-buy-from-us" title="Why buy from us">Learn more</a> about our comprehensive security measures and safe shipping practices. </p>
                             </div>
                         </div>
                     </div>
                     <div class="footer-block--newsletter scroll-trigger animate--slide-in" data-cascade>
                         <div class="footer-block__newsletter">
                             <h2 class="footer-block__heading inline-richtext">Subscribe to get latest product updates</h2>
                             <form method="post" action="/contact#ContactFooter" id="ContactFooter" accept-charset="UTF-8" class="footer__newsletter newsletter-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="contact[tags]" value="newsletter">
                                 <div class="newsletter-form__field-wrapper">
                                     <div class="field">
                                         <input id="NewsletterForm--sections--17738896146628__footer" type="email" name="contact[email]" class="field__input" value="" aria-required="true" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="Email" required>
                                         <label class="field__label" for="NewsletterForm--sections--17738896146628__footer">
                                             Email
                                         </label>
                                         <button type="submit" class="newsletter-form__button field__button" name="commit" id="Subscribe" aria-label="Subscribe">
                                             <span class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                                     <path fill="currentColor" fill-rule="evenodd" d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546" clip-rule="evenodd" /></svg>
                                             </span>
                                         </button>
                                     </div>
                                 </div>
                             </form>
                         </div>

                         <ul class="list-unstyled list-social footer__list-social" role="list">
                             <li class="list-social__item">
                                 <a href="https://www.instagram.com/picklefox_com/" class="link list-social__link">
                                     <span class="svg-wrapper"><svg class="icon icon-instagram" viewBox="0 0 20 20">
                                             <path fill="currentColor" fill-rule="evenodd" d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.4 2.4 0 0 0-.912.593 2.5 2.5 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23s.01 2.39.046 3.229c.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046s2.39-.01 3.23-.046c.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23s-.01-2.39-.055-3.229c-.027-.784-.164-1.204-.274-1.495a2.4 2.4 0 0 0-.593-.913 2.6 2.6 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045a63 63 0 0 1 3.302.045c.664.014 1.321.14 1.943.374a4 4 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.9 3.9 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.15 4.15 0 0 1-1.414-.922 4.1 4.1 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.4 4.4 0 0 1 .92-1.414 4.2 4.2 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805m1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93m5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355" clip-rule="evenodd" /></svg>
                                     </span>
                                     <span class="visually-hidden">Instagram</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="footer__content-bottom scroll-trigger animate--slide-in" data-cascade>
                     <div class="footer__content-bottom-wrapper page-width">
                         <div class="footer__column footer__localization isolate"></div>
                         <div class="footer__column footer__column--info">
                             <div class="footer__payment">
                                 <span class="visually-hidden">Payment methods</span>
                                 <ul class="list list-payment" role="list"></ul>
                             </div>
                         </div>
                     </div>
                     <div class="footer__content-bottom-wrapper page-width footer__content-bottom-wrapper--center">
                         <div class="footer__copyright caption">
                             <small class="copyright__content">&copy; 2024, <a href="/" title="">Picklefox.com</a></small>
                             <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a></small>
                             <ul class="policies list-unstyled">
                                 <li>
                                     <small class="copyright__content"><a href="/policies/refund-policy">Refund policy</a></small>
                                 </li>
                                 <li>
                                     <small class="copyright__content"><a href="/policies/privacy-policy">Privacy policy</a></small>
                                 </li>
                                 <li>
                                     <small class="copyright__content"><a href="/policies/terms-of-service">Terms of service</a></small>
                                 </li>
                                 <li>
                                     <small class="copyright__content"><a href="/policies/shipping-policy">Shipping policy</a></small>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </footer>


             <style>
                 #shopify-section-sections--17738896146628__footer li {
                     padding-right: 20px;
                     text-indent: 0 !important;
                 }

             </style>
         </div>
         <!-- END sections: footer-group -->

         <ul hidden>
             <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
             <li id="a11y-new-window-message">Opens in a new window.</li>
         </ul>

         <script>
             window.shopUrl = 'https://picklefox.com';
             window.routes = {
                 cart_add_url: '/cart/add'
                 , cart_change_url: '/cart/change'
                 , cart_update_url: '/cart/update'
                 , cart_url: '/cart'
                 , predictive_search_url: '/search/suggest'
             , };

             window.cartStrings = {
                 error: `There was an error while updating your cart. Please try again.`
                 , quantityError: `You can only add [quantity] of this item to your cart.`
             , };

             window.variantStrings = {
                 addToCart: `Add to cart`
                 , soldOut: `Sold out`
                 , unavailable: `Unavailable`
                 , unavailable_with_option: `[value] - Unavailable`
             , };

             window.quickOrderListStrings = {
                 itemsAdded: `[quantity] items added`
                 , itemAdded: `[quantity] item added`
                 , itemsRemoved: `[quantity] items removed`
                 , itemRemoved: `[quantity] item removed`
                 , viewCart: `View cart`
                 , each: `[money]/ea`
                 , min_error: `This item has a minimum of [min]`
                 , max_error: `This item has a maximum of [max]`
                 , step_error: `You can only add this item in increments of [step]`
             , };

             window.accessibilityStrings = {
                 imageAvailable: `Image [index] is now available in gallery view`
                 , shareSuccess: `Link copied to clipboard`
                 , pauseSlideshow: `Pause slideshow`
                 , playSlideshow: `Play slideshow`
                 , recipientFormExpanded: `Gift card recipient form expanded`
                 , recipientFormCollapsed: `Gift card recipient form collapsed`
                 , countrySelectorSearchCount: `[count] countries/regions found`
             , };

         </script>
         <script src="{{ asset('asset/cdn/shop/t/7/assets/predictive-search.js') }}" defer="defer"></script>
         <style>
             ul {
                 list-style-position: inside;
                 padding-left: 20px;
             }

             li {
                 text-indent: -22px;
                 /* Adjust the negative indent to match the padding-left */
                 padding-left: 20px;
                 /* Match the padding-left of the ul */
             }

         </style>
     </body>
     </html>

 </div>
