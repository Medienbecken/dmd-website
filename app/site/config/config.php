<?php
if(file_exists(kirby()->roots()->config() . DIRECTORY_SEPARATOR . 'license.php')) {
  require_once('license.php');
} else {
  $license = "";
}

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', $license);

/*---------------------------------------
Kirby Debug Configuration
---------------------------------------*/

c::set('debug', true);
c::set('whoops', false);

c::set('cache', false);

/*---------------------------------------
Kirby Routing Configuration
---------------------------------------*/

c::set('routes', array(
  array(
      'pattern' => '(:any)/FacebookEvents.php',
      'action'  => function($uri) {
        $news = page('news');
        $fbe = FacebookEvents($news);
        $events = $fbe->getFacebookEvents('1676014109285451');
        $fb_event = $fbe->getEvent($events, 0, 'asc', false);
        snippet('sections/contentnews', array('fb_event' => $fb_event, 'news' => $news));

        // header("content-type:application/json");
        // echo (json_encode($fb_event));
      },
      'method' => 'POST'
  )
));

/* hooks */

kirby()->hook('panel.file.upload', 'resizeImageOnUpload');
kirby()->hook('panel.file.replace', 'resizeImageOnUpload');

// https://getkirby.com/docs/panel/developers/custom-css
c::set('panel.stylesheet', '/assets/css/panel.css');

// https://getkirby.com/docs/languages/setup
c::set('language.detect', false);
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'default' => true,
    'locale'  => 'de_DE',
    'url'     => '/',
  ),
));


// https://getkirby.com/docs/panel/roles
c::set('roles', array(
  array(
    'id'      => 'admin',
    'name'    => 'Admin',
    'panel'   => true
  ),
  array(
    'id'      => 'editor',
    'name'    => 'Editor',
    'panel'   => true,
    'default' => true,
  )
));



/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
