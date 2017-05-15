<?php

/**
 * Kirby Sharingbuttons Plugin
 *
 * @package   Kirby CMS
 * @author    Flo Kosiol <git@flokosiol.de>
 * @link      http://flokosiol.de
 * @version   1.0.0
 */

/**
 * Custom page method
 */

page::$methods['sharingbuttons'] = function($page, $config = false) {

  // get custom setting from config.php or set defaults
  $size = c::get('plugin.sharingbuttons.size','small');

  $networks = c::get('plugin.sharingbuttons.networks', [
    'twitter' => 'Twitter',
    'facebook' => 'Facebook',
    'google' => 'Google+',
    'linkedin' => 'LinkedIn',
    'email' => 'E-Mail',
    // 'tumblr' => 'Tumblr',
    // 'pinterest' => 'Pinterest',
    // 'reddit' => 'Reddit',
    // 'xing' => 'XING',
    // 'whatsapp' => 'WhatsApp',
    // 'hackernews' => 'Hacker News',
    // 'vk' => 'VK',
    // 'telegram' => 'Telegram',
  ]);

  // override with inline settings if set
  if (!empty($config['size']) && in_array($config['size'], ['small', 'medium', 'large'])) {
    $size = $config['size'];
  }

  if (!empty($config['networks']) && is_array($config['networks'])) {
    $networks = $config['networks'];
  }

  // prepare data for templates
  $data = array(
    'url' => urlencode($page->url()),
    'description' => urlencode($page->title()),
    'size' => $size,
  );

  // build html brick
  $content = new Brick('div');
  $content->addClass('sharingbuttons');

  $buttons = '';
  foreach ($networks as $template => $network) {
    switch ($data['size']) {
      case 'medium':
        $data['title'] = $network;
        break;

      case 'large':
        $data['title'] = l::get('plugin.sharingbuttons.' . $template, 'Share on ' . $network);
        break;

      default:
        $data['title'] = '';
        break;
    }
    $buttons .= tpl::load(__DIR__ . DS . 'templates' . DS . $template . '.php', $data);
  }

  return $content->html($buttons);

};


