<?php
namespace extas\components\plugins;

use extas\components\players\plans\facts\PlayerPlanFact;
use extas\interfaces\players\plans\facts\IPlayerPlanFactRepository;

/**
 * Class PluginInstallPlayerPlanFacts
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallPlayerPlanFacts extends PluginInstallDefault
{
    protected $selfItemClass = PlayerPlanFact::class;
    protected $selfName = 'player plan fact';
    protected $selfSection = 'player_plan_facts';
    protected $selfUID = PlayerPlanFact::FIELD__ID;
    protected $selfRepositoryClass = IPlayerPlanFactRepository::class;
}
