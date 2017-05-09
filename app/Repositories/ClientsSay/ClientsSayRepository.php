<?php

namespace Fully\Repositories\ClientsSay;

use Fully\Models\ClientsSay;
use Fully\Repositories\AbstractValidator as Validator;

/**
 * Class ClientsSayRepository.
 *
 */
class ClientsSayRepository extends Validator implements ClientsSayInterface
{

    /**
     * @var \ClientsSay
     */
   protected $totalClientsSay;
   protected $clients_say;

    /**
     * @param ClientsSay $clients_say
     */
    public function __construct(ClientsSay $clients_say)
    {
        $this->clients_say = $clients_say;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->clients_say->where('lang', getLang())->get();
    }
}
