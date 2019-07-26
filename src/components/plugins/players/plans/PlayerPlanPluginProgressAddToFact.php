<?php
namespace extas\components\plugins\players\plans;

use extas\components\players\plans\facts\PlayerPlanFact;
use extas\components\plugins\plans\PlanPluginProgressAddToFact;
use extas\interfaces\books\plans\facts\IBookPlanFactRepository;
use extas\interfaces\plans\facts\IPlanFact;

/**
 * Class PlayerPlanPluginProgressAddToFact
 *
 * @package extas\components\plugins\books\plans
 * @author jeyroik@gmail.com
 */
class PlayerPlanPluginProgressAddToFact extends PlanPluginProgressAddToFact
{
    protected $factRepo = IBookPlanFactRepository::class;

    /**
     * @override_it
     *
     * @return string
     */
    protected function getPlanFactSubject()
    {
        return 'kb.player.plan.fact';
    }

    /**
     * @override_it
     *
     * @param $factData
     *
     * @return IPlanFact
     */
    protected function getPlanFact($factData)
    {
        return new PlayerPlanFact($factData);
    }
}
