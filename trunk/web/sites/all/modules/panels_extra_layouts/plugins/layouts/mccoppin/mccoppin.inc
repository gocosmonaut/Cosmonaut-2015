<?php
/**
 * @file   mccoppin.inc
 * @date   Tue Dec 18 11:03:00 2012
 * @brief  The panels layout plugin for the McCoppin panels layout.
 *
 *
 */

// Plugin definition
$plugin = array(
  'title' => t('McCoppin'),
  'icon' => 'mccoppin.png',
  'category' => t('Panopoly'),
  'theme' => 'mccoppin',
  'css' => 'mccoppin.css',
  'regions' => array(
      'header' => t('Header'),
	   'chunk1' => t('Left Chunk'),
    'chunk2' => t('Center Chunk'),
    'chunk3' => t('Right Chunk'),
	  'lowerbanner' => t('Lower Banner'),
    'column1' => t('1st Column'),
    'column2' => t('2nd Column'),
    'column3' => t('3rd Column'),
	'column4' => t('4th Column'),
    'column5' => t('5th Column'),
    'column6' => t('6th Column'),
	  'lowestbanner' => t('Lowest Banner'),
	   'chunk4' => t('Lower Tier Left Chunk'),
    'chunk5' => t('Lower Tier Center Chunk'),
    'chunk6' => t('Lower Tier Right Chunk'),
  ),
);
