/*!
 * Contact Buttons Plugin Demo 0.1.0
 * https://github.com/joege/contact-buttons-plugin
 *
 * Copyright 2015, José Gonçalves
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

// Google Fonts
/*WebFontConfig = {
  google: { families: [ 'Lato:400,700,300:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})(); */

// Initialize Share-Buttons
$.contactButtons({
  effect  : 'slide-on-scroll',
  buttons : {
    'facebook':   { class: 'facebook',     use: true, link: 'https://www.facebook.com/MonkeyCage2016/', extras: 'target="_blank"' },
    'twitter':    { class: 'twitter',      use: true, link: 'https://twitter.com/MonkeyCage2016', icon: 'twitter', title: 'Follow on Twitter'  },
    'instagram':      { class: 'instagram',    use: true, link: 'https://www.instagram.com/monkey_cage/',icon: 'instagram' }
  }
});
