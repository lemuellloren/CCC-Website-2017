<?php

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

c::set('license', 'K2-PRO-562443f79666f54a909225d181a74c03');

// Force using SSL connection
//c::set('ssl',true);

c::set('debug',true);

// css style for panel
c::set('panel.stylesheet', 'assets/css/panel.css');

c::set('simplemde.replaceTextarea', true);

c::set('routes', array(
  array(
    // in 'pattern', enter the same url being called from your ajax javascript function
    'pattern' => 'api/mailFormData',
    'method' => 'POST',
    'action' => function() {
      // check whether this is an ajax request, and respond with an error if it isn't
      if(!kirby()->request()->ajax()){ return response::error("Page Not Found!","404");}
      // process the form data, send the email - and get the result (as an array)
      $data = mailFormData(kirby()->request()->data());
      // respond with the result - in JSON format
      return response::json($data);
      }
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
