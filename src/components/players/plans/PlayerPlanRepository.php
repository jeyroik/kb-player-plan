<?php
namespace extas\components\players\plans;

use extas\components\plans\PlanRepository;
use extas\interfaces\players\plans\IPlayerPlanRepository;

/**
 * Class PlayerPlanRepository
 *
 * @package extas\components\players\plans
 * @author jeyroik@gmail.com
 */
class PlayerPlanRepository extends PlanRepository implements IPlayerPlanRepository
{
    protected $itemClass = PlayerPlan::class;
    protected $name = 'players_plans';
}
