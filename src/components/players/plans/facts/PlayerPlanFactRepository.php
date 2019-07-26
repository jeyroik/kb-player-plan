<?php
namespace extas\components\players\plans\facts;

use extas\components\plans\facts\PlanFactRepository;
use extas\interfaces\players\plans\facts\IPlayerPlanFactRepository;

/**
 * Class PlayerPlanFactRepository
 *
 * @package extas\components\players\plans\facts
 * @author jeyroik@gmail.com
 */
class PlayerPlanFactRepository extends PlanFactRepository implements IPlayerPlanFactRepository
{
    protected $name = 'players_plans_facts';
    protected $itemClass = PlayerPlanFact::class;
}
