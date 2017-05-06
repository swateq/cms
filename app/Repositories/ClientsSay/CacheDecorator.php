<?php

namespace Fully\Repositories\ClientsSay;

use Fully\Services\Cache\CacheInterface;

/**
 * Class CacheDecorator.
 *
 *
 */
class CacheDecorator extends AbstractClientsSayDecorator
{
  /**
   * @var \Fully\Services\ClientsSay\ClientsSayInterface
   */
  protected $cache;

  /**
   * Cache key.
   *
   * @var string
   */
  protected $cacheKey = 'clients_say';

  /**
   * @param ClientsSayInterface $clients_say
   * @param CacheInterface  $cache
   */
  public function __construct(ClientsSayInterface $clients_say, CacheInterface $cache)
  {
      parent::__construct($clients_say);
      $this->cache = $cache;
  }

  /**
   * @return mixed
   */
  public function all()
  {
      $key = md5(getLang().$this->cacheKey.'all.clients_say');

      if ($this->cache->has($key)) {
          return $this->cache->get($key);
      }

      $clients_say = $this->clients_say->all();

      $this->cache->put($key, $clients_say);

      return $clients_say;
  }

}
