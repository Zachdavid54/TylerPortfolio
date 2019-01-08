$(document).ready(function () {
	$('.col-matchHeight').matchHeight({
		property: 'min-height'
  });
  
  $('[data-fancybox="portfolio"]').fancybox({
    // Options will go here
     baseTpl:
       '<div class="fancybox-container" role="dialog" tabindex="-1">' +
       '<div class="fancybox-bg"></div>' +
       '<div class="fancybox-inner">' +
       '<div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div>' +
       '<div class="fancybox-toolbar">{{buttons}}</div>' +
       '<div class="fancybox-navigation">{{arrows}}</div>' +
       '<div class="fancybox-stage"></div>' +
       '<div class="fancybox-caption"></div>' +
       "</div>" +
       "</div>",
  });

});
