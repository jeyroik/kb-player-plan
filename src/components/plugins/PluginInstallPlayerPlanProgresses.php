<?php
namespace extas\components\plugins;

use extas\components\players\plans\progress\PlayerPlanProgress;
use extas\interfaces\players\plans\progress\IPlayerPlanProgressRepository;

/**
 * Class PluginInstallPlayerPlanProgresses
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallPlayerPlanProgresses extends PluginInstallDefault
{
    protected $selfRepositoryClass = IPlayerPlanProgressRepository::class;
    protected $selfUID = PlayerPlanProgress::FIELD__ID;
    protected $selfSection = 'player_plan_progress';
    protected $selfName = 'player plan progress';
    protected $selfItemClass = PlayerPlanProgress::class;
}
