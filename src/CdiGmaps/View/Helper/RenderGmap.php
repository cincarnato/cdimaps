<?php

namespace CdiGmaps\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;
use Zend\View\Renderer\PhpRenderer;
use Zend\View\Resolver\TemplateMapResolver;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RenderGrid
 *
 * @author cincarnato
 */
class RenderGmap extends AbstractHelper implements ServiceLocatorAwareInterface {

    /**
     * Set the service locator. 
     * 
     * @param ServiceLocatorInterface $serviceLocator 
     * @return CustomHelper 
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator) {
        $this->serviceLocator = $serviceLocator;
        return $this;
    }

    /**
     * Get the service locator. 
     * 
     * @return \Zend\ServiceManager\ServiceLocatorInterface 
     */
    public function getServiceLocator() {
        return $this->serviceLocator;
    }

    public function __invoke(\CdiGmaps\Gmap\Gmap $Gmap) {

          $view = new ViewModel(array(
            'gmap' => $Gmap,
            'gview' => $this->getView()
        ));

        $viewRender = new PhpRenderer();
        $resolver = new TemplateMapResolver();
        $resolver->setMap(array(
            'rendergmap' => __DIR__ . '/../Scripts/rendergmap.phtml',
        ));
        $viewRender->setResolver($resolver);


        $view->setTemplate('rendergmap');

        return $viewRender->render($view);
        
       
    }

}

?>
