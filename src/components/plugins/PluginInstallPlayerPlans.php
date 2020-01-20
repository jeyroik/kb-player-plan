<?php
namespace extas\components\plugins;

use extas\components\players\plans\PlayerPlan;
use extas\interfaces\players\plans\IPlayerPlanRepository;

/**
 * Class PluginInstallPlayerPlans
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallPlayerPlans extends PluginInstallDefault
{
    protected $selfRepositoryClass = IPlayerPlanRepository::class;
    protected $selfUID = PlayerPlan::FIELD__ID;
    protected $selfSection = 'player_plans';
    protected $selfName = 'player plan';
    protected $selfItemClass = PlayerPlan::class;
}
