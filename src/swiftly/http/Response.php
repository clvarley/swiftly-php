<?php

namespace Swiftly\Http;

/**
 * Represents a HTTP response
 *
 * @author C Varley <cvarley@highorbit.co.uk>
 */
Class Response
{

  /**
   * @var Headers $headers HTTP header collection
   */
  public $headers = null;

  /**
   * @var int $status_code HTTP status code
   */
  private $status_code = 200;

  /**
   * @var string $body HTTP response body/payload
   */
  private $body = '';

  /**
   * Construct a new HTTP response
   *
   * @param int $status     HTTP status code
   * @param array $headers  HTTP headers
   * @param string $body    Response body
   */
  public function __construct( int $status = 200, array $headers = [], string $body = '' )
  {
    $this->status_code = +$status;
    $this->headers = new Headers( $headers );
    $this->body = $body;
  }

  /**
   * Set the status code for this response
   *
   * @param int $status HTTP status code
   */
  public function setStatus( int $status ) : void
  {
    $this->status_code = $status;
  }

  /**
   * Get the HTTP status code for this response
   *
   * @return int HTTP status code
   */
  public function getStatus() : int
  {
    return $this->status;
  }

  /**
   * Sets the response body
   *
   * @param string $body Response body
   */
  public function setBody( string $body ) : void
  {
    $this->body = $body;
  }

  /**
   * Redirect the client to the given URL
   *
   * @param string $location  Redirect location
   * @param int $status       HTTP status code
   */
  public function redirect( string $location, int $status = 307 ) : void
  {

  }

}