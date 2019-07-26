<?php
namespace extas\components\players\plans\progress;

use extas\components\plans\progress\PlanProgress;
use extas\interfaces\players\plans\IPlayerPlanRepository;
use extas\interfaces\players\plans\progress\IPlayerPlanProgress;

/**
 * Class PlayerPlanProgress
 *
 * @package extas\components\players\plans\progress
 * @author jeyroik@gmail.com
 */
class PlayerPlanProgress extends PlanProgress implements IPlayerPlanProgress
{
    protected $planRepo = IPlayerPlanRepository::class;
}
