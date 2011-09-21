<?php

/*
 * This file is part of the sfLESSPlugin.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * LessCssHelper handles the less css stylesheets
 *
 * @package    sfLESSPlugin
 * @subpackage helper
 * @author     Victor Berchet <victor@suumit.com>
 * @version    1.0.0
 */
use_helper('Asset');

/**
 * Returns <link> tags for all stylesheets configured in view.yml or added to the response object.
 *
 * You can use this helper to decide the location of stylesheets in pages.
 * By default, if you don't call this helper, symfony will automatically include stylesheets before </head>.
 * Calling this helper disables this behavior.
 *
 * @return string <link> tags
 */
function get_less_stylesheets()
{
  $response = sfContext::getInstance()->getResponse();
  sfConfig::set('symfony.asset.stylesheets_included', true);

  sfLESS::findAndFixContentLinks($response, sfConfig::get('app_sf_less_plugin_use_js', false));

  $html = '';
  foreach ($response->getStylesheets() as $file => $options)
  {
    $html .= stylesheet_tag($file, $options);
  }

  return $html;
}

/**
 * Prints <link> tags for all stylesheets configured in view.yml or added to the response object.
 *
 * @see get_stylesheets()
 */
function include_less_stylesheets()
{
  echo get_less_stylesheets();
}