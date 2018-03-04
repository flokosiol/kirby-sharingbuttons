# Kirby Sharingbuttons

![Version](https://img.shields.io/badge/Version-1.2-green.svg) ![Kirby](https://img.shields.io/badge/Kirby-2.3+-red.svg)

With this plugin for [Kirby 2](http://getkirby.com) you can easily include the [sharingbuttons](http://sharingbuttons.io/) by [@mxstbr](https://github.com/mxstbr).

> Super fast and easy Social Media Sharing Buttons. No JavaScript. No tracking.


## Requirements

+ Kirby CMS, Version **2.3+**


## Installation

### Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli), you can install this plugin by running the following command in your shell from the root folder of your Kirby installation:

```
kirby plugin:install flokosiol/kirby-sharingbuttons
```

### Download

Of course you can also download and unpack the zip file (or simply clone the repository). If necessary, rename the folder to `sharingbuttons` and put it into `site/plugins` of your Kirby installation.

Please make sure, that the plugin folder structure looks like this:

```
site/plugins/sharingbuttons/
```

### Git Submodule

If you want to add this plugin as a Git submodule.

```
$ cd your/project/root
$ git submodule add https://github.com/flokosiol/kirby-sharingbuttons.git site/plugins/sharingbuttons
```



## Usage

### 1. Include CSS

Add the path to the default css together with your existing stylesheets to your html head section.

```
<?= css('assets/plugins/sharingbuttons/css/sharingbuttons.css'); ?>
```

### 2. Template

Simply use the `sharingbuttons()` method in your template like this:


```
<?= page()->sharingbuttons(); ?>
```


## Customization

### 1. CSS

You can easily adjust the css by copying the original file from `site/plugins/sharingbuttons/assets/css/sharingbuttons.css` to `assets/plugins/sharingbuttons/css/sharingbuttons.css`. Kirby will then use your file instead of the one included in the plugin directory.

Of course you can also include the file to your build process. I guess you know how to do this properly …

#### CSS font-size

> The buttons are sized using em units, so the only step to change the size of the buttons is to set the font-size property of the .resp-sharing-button class. Seriously, that's it!


### 2. Configuration

You can change the default appearance in your `config.php` file, e.g. `site/config/config.php`.

```
<?php
  // define the size (small, medium, large)
  c::set('plugin.sharingbuttons.size', 'small');

  // define the style (normal, solid, circle, solidcircle)
  c::set('plugin.sharingbuttons.style', 'solid');

  // define the url field
  c::set('plugin.sharingbuttons.urlField', 'url');

  // define the description field
  c::set('plugin.sharingbuttons.descriptionField', 'title');

  // define the networks, their title and the order of the buttons
  c::set('plugin.sharingbuttons.networks', array(
    'twitter'     => 'Twitter',
    'facebook'    => 'Facebook',
    'google'      => 'Google+',
    'linkedin'    => 'LinkedIn',
    'email'       => 'E-Mail',
    // 'tumblr'      => 'Tumblr',
    // 'pinterest'   => 'Pinterest',
    // 'reddit'      => 'Reddit',
    // 'xing'        => 'XING',
    // 'whatsapp'    => 'WhatsApp',
    // 'hackernews'  => 'Hacker News',
    // 'vk'          => 'VK',
    // 'telegram'    => 'Telegram',
  ));
?>
```

#### Override your own config

In case you need different styles, URLs, or descriptions for different templates, you can override your own settings by adding params to the page method like this.

```
<?= page()->sharingbuttons([
    'size' => 'medium',
    'style' => 'circle',
    'urlField' => 'shareURL',
    'descriptionField' => 'shareMessage',
    'url' => 'https://getkirby.com',
    'description' => 'Check this out.',
    'networks' => ['facebook' => 'Facebook','twitter' => 'Twitter']
    ]) ?>
```

The parameter `url`, if provided, takes precedence over `urlField`.

The parameter `description`, if provided, takes precedence over `descriptionField`.

### 3. Translations

You can find some translations in `site/plugins/sharingbuttons/languages/`. You need to copy them to `site/languages/`.

```
<?php
  l::set('plugin.sharingbuttons.facebook', 'Auf Facebook teilen');
  l::set('plugin.sharingbuttons.twitter', 'Auf Twitter teilen');
  l::set('plugin.sharingbuttons.google', 'Auf Google+ teilen');
  l::set('plugin.sharingbuttons.tumblr', 'Auf Tumblr teilen');
  l::set('plugin.sharingbuttons.email', 'Per E-Mail teilen');
  l::set('plugin.sharingbuttons.pinterest', 'Auf Pinterest teilen');
  l::set('plugin.sharingbuttons.linkedin', 'Auf LinkedIn teilen');
  l::set('plugin.sharingbuttons.reddit', 'Auf Reddit teilen');
  l::set('plugin.sharingbuttons.xing', 'Auf XING teilen');
  l::set('plugin.sharingbuttons.whatsapp', 'Per WhatsApp teilen');
  l::set('plugin.sharingbuttons.hackernews', 'Auf Hacker News teilen');
  l::set('plugin.sharingbuttons.vk', 'Auf VK teilen');
  l::set('plugin.sharingbuttons.telegram', 'Auf Telegram teilen');
?>
```

## Credits

+ Original [sharingbuttons](http://sharingbuttons.io/) by [@mxstbr](https://github.com/mxstbr)
