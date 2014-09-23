<?php

/*
 * This file is part of the Cdi package.
 *
 * (c) Cristian Incarnato
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Cristian Incarnato
 * @license http://opensource.org/licenses/BSD-3-Clause
 * 
 */
return array(
    
    'CdiGmaps' => array(),
    'controllers' => array(
        'invokables' => array(
       //     'CdiGmaps\Controller\Gmap' => 'CdiGmaps\Controller\GmapController',
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
        ),
        'factories' => array(

        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'RenderGmap' => 'CdiGmaps\View\Helper\RenderGmap',
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
    ),
);
