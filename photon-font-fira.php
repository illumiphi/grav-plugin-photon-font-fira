<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

use Grav\Common\Grav;

/**
 * Class PhotonFontFiraPlugin
 * @package Grav\Plugin
 */
class PhotonFontFiraPlugin extends Plugin
{

    public static function getSubscribedEvents()
    {
      return [
        'onPluginsInitialized' => ['onPluginsInitialized', 0],
      ];
    }

    public function onPluginsInitialized()
    {
      $this->enable([
        'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
      ]);

      return;
    }

    public function onTwigSiteVariables()
    {
      $assets = 		$this->grav['assets'];

      // styles
      $css = 'plugin://photon-font-fira/assets/font-fira.css';
      $assets->addCss($css, 100, true, 'photon-plugins' );
    }
}
