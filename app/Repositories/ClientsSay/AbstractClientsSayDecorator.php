<?php

namespace Fully\Repositories\ClientsSay;

/**
 * Class AbstractClientsSayDecorator.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
abstract class AbstractClientsSayDecorator implements ClientsSayInterface
{
  /**
   * @var ClientsSayInterface
   */
  protected $clients_say;

  /**
   * @param ClientsSayInterface $clients_say
   */
  public function __construct(ClientsSayInterface $clients_say)
  {
      $this->clients_say = $clients_say;
  }

  /**
   * @return mixed
   */
  public function all()
  {
      return $this->clients_say->all();
  }
}
