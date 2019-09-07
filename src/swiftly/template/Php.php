<?php

namespace Swiftly\Template;

/**
 * Renders a template using PHP
 *
 * @author C Varley <cvarley@highorbit.co.uk>
 */
Class Php Implements TemplateInterface
{

  /**
   * @var array $data Template data
   */
  private $data = [];

  /**
   * @inheritdoc
   */
  public function render( string $template, array $data ) : string
  {
    $result = '';

    $this->data = $data;

    if ( is_file($template . '.html.php') && is_readable($template . '.html.php') ) {
      ob_start();
      include $template . '.html.php';
      $result = ob_get_flush();
    }

    return $result;
  }

  /**
   * Provide magic method support
   *
   * @param string $name
   */
  private function __get( string $name )
  {
    return ( isset($this->data[$name]) ? $this->data[$name] : '' );
  }

}
