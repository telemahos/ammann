/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

// MY SCRIPT ##################################################
// Variables
var brand = document.getElementById("brand");
var closeOverlay = document.getElementById("closeBtn");
var yellowOverlay = document.getElementById("startPageContent");
var mainNavMenu =  document.getElementById("menu-primary-navigation");
var ammannH1 = document.getElementById("ammann");
var overlayTop = document.getElementById("overlayTop");

// Set the URLs for H1 and Nav Menu in StartPage
var lizURL = mainNavMenu.firstChild.firstChild;
var kontaktURL = mainNavMenu.firstChild.nextSibling.nextSibling.firstChild;
var grafikURL = mainNavMenu.firstChild.nextSibling.nextSibling.nextSibling.nextSibling.firstChild;
var kundenlisteURL = mainNavMenu.firstChild.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.firstChild;
var intactURL = mainNavMenu.lastChild.previousSibling.previousSibling.previousSibling.firstChild;
var angebotURL = mainNavMenu.lastChild.previousSibling.firstChild;

//#########################################
// Top Effect
// Click Event on Liz Ammann
$("#ammann").click(function(){
  $("#overlayTop").css("display", "block");
  $("#overlayTop").switchClass( "overlay", "overlay-close-top", 1000 );
  setTimeout(function(){ 
    window.location.href = lizURL; 
  }, 1100);
}); 
// Click Event on ÜBER MICH
$("#startPage .menu-uber-mich").click(function(event){
  event.preventDefault();
  $("#overlayTop").css("display", "block");
  $("#overlayTop").switchClass( "overlay", "overlay-close-top", 1000 );
  setTimeout(function(){ 
    window.location.href = lizURL; 
  }, 1100);
});
// Click Event on KONTAKT
$("#startPage .menu-kontakt").click(function(event){
  event.preventDefault();
  $("#overlayTop").css("display", "block");
  $("#overlayTop").switchClass( "overlay", "overlay-close-top", 1000 );
  setTimeout(function(){ 
    window.location.href = kontaktURL; 
  }, 1100);
});

//#########################################
// Right Effect
// Click Event on Grafik
$("#grafik").click(function(){
  $("#overlayRight").css("display", "block");
  $("#overlayRight").switchClass( "overlay-right", "overlay-close-right", 1000 );
  setTimeout(function(){ 
    window.location.href = grafikURL; 
  }, 1100);
}); 
// Click Event on ARBEITEN
$("#startPage .menu-arbeiten").click(function(event){
  event.preventDefault();
  $("#overlayRight").css("display", "block");
  $("#overlayRight").switchClass( "overlay-right", "overlay-close-right", 1000 );
  setTimeout(function(){ 
    window.location.href = grafikURL; 
  }, 1100);
});
// Click Event on KUNDENLISTE
$("#startPage .menu-kundenliste").click(function(event){
  event.preventDefault();
  $("#overlayRight").css("display", "block");
  $("#overlayRight").switchClass( "overlay-right", "overlay-close-right", 1000 );
  setTimeout(function(){ 
    window.location.href = kundenlisteURL; 
  }, 1100);
});

//#########################################
// Left Effect
// Click Event on Interactive Design
$("#intDesign").click(function(){
  $("#overlayLeft").css("display", "block");
  $("#overlayLeft").switchClass( "overlay-left", "overlay-close-left", 1000 );
  setTimeout(function(){ 
    window.location.href = intactURL; 
  }, 1100);
}); 
// Click Event on BEDARF
$("#startPage .menu-bedarf").click(function(event){
  event.preventDefault();
  $("#overlayLeft").css("display", "block");
  $("#overlayLeft").switchClass( "overlay-left", "overlay-close-left", 1000 );
  setTimeout(function(){ 
    window.location.href = intactURL; 
  }, 1100);
});
// Click Event on ANGEBOT
$("#startPage .menu-angebot").click(function(event){
  event.preventDefault();
  $("#overlayLeft").css("display", "block");
  $("#overlayLeft").switchClass( "overlay-left", "overlay-close-left", 1000 );
  setTimeout(function(){ 
    window.location.href = angebotURL; 
  }, 1100);
});

// brand.style.opacity = "0.6";
// brand.style.display = "none";
brand.onmouseover=function(){
  // alert("Tset");
  // brand.style.opacity = "0.1";
};
brand.onmouseout=function(){
  // alert("Tset");
  // brand.style.opacity = "1";
};
closeOverlay.onclick=function(){
  yellowOverlay.style.display = "none";
  brand.style.display = "none";
  // document.getElementById("startPage").style.display = "none";
};


// ALL THE NAV MENU LINKS
// alert(mainNavMenu.firstChild.firstChild); // UBER-MICH
// alert(mainNavMenu.firstChild.nextSibling.nextSibling.firstChild); // KONTAKT
// alert(mainNavMenu.firstChild.nextSibling.nextSibling.nextSibling.nextSibling.firstChild); // ARBEITEN
// alert(mainNavMenu.firstChild.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.firstChild); // KUNDENLISTE
// alert(mainNavMenu.lastChild.previousSibling.previousSibling.previousSibling.firstChild); // BEDARF
// alert(mainNavMenu.lastChild.previousSibling.firstChild); // ANGEBOT

})(jQuery); // Fully reference jQuery after this point.