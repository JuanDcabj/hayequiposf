<?php
// auto-generated by sfViewConfigHandler
// date: 2012/10/28 22:09:25
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('jquery.mCustomScrollbar.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('mocha.js', '', array ());
  $response->addJavascript('jquery.mousewheel.min.js', '', array ());
  $response->addJavascript('jquery.mCustomScrollbar.js', '', array ());


