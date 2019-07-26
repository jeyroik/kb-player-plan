<?php
namespace extas\components\players\plans\facts;

use extas\components\plans\facts\PlanFact;
use extas\interfaces\players\plans\facts\IPlayerPlanFact;
use extas\interfaces\players\plans\facts\IPlayerPlanFactRepository;
use extas\interfaces\players\plans\IPlayerPlanRepository;

/**
 * Class PlayerPlanFact
 *
 * @package extas\components\players\plans\facts
 * @author jeyroik@gmail.com
 */
class PlayerPlanFact extends PlanFact implements IPlayerPlanFact
{
    protected $planRepo = IPlayerPlanRepository::class;
    protected $factRepo = IPlayerPlanFactRepository::class;
}
