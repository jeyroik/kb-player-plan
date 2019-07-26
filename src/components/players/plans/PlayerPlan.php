<?php
namespace extas\components\players\plans;

use extas\components\plans\Plan;
use extas\components\players\plans\progress\PlayerPlanProgress;
use extas\interfaces\plans\progress\IPlanProgress;
use extas\interfaces\players\plans\IPlayerPlan;
use extas\interfaces\players\plans\progress\IPlayerPlanProgressRepository;

/**
 * Class PlayerPlan
 *
 * @package extas\components\players\plans
 * @author jeyroik@gmail.com
 */
class PlayerPlan extends Plan implements IPlayerPlan
{
    protected $planProgressRepo = IPlayerPlanProgressRepository::class;

    /**
     * @return string
     */
    protected function getPlanSubject()
    {
        return 'kb.player.plan';
    }

    /**
     * @param array $data
     *
     * @return IPlanProgress
     */
    protected function getPlanProgress($data)
    {
        return new PlayerPlanProgress($data);
    }
}
