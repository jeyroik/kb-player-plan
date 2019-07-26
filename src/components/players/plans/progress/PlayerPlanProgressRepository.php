<?php
namespace extas\components\players\plans\progress;

use extas\components\plans\progress\PlanProgressRepository;
use extas\interfaces\players\plans\progress\IPlayerPlanProgressRepository;

/**
 * Class PlayerPlanProgressRepository
 *
 * @package extas\components\players\plans\progress
 * @author jeyroik@gmail.com
 */
class PlayerPlanProgressRepository extends PlanProgressRepository implements IPlayerPlanProgressRepository
{
    protected $name = 'players_plans_progress';
    protected $itemClass = PlayerPlanProgress::class;
}
