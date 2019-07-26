<?php
namespace extas\components\plugins\players\plans;

use extas\components\parameters\Parameter;
use extas\components\plugins\Plugin;
use extas\interfaces\books\plans\facts\IBookPlanFact;
use extas\interfaces\books\plans\progress\IBookPlanProgress;
use extas\interfaces\parameters\IParameter;

/**
 * Class PlayerPlanFactPluginProgressAdd
 *
 * @package extas\components\plugins\books\plans
 * @author jeyroik@gmail.com
 */
class PlayerPlanFactPluginProgressAdd extends Plugin
{
    const FIELD__PAGES_COUNT = 'pages_count';

    /**
     * @param IBookPlanFact $fact
     * @param IBookPlanProgress $progress
     */
    public function __invoke(&$fact, $progress)
    {
        $pagesFact = $fact->getParameter(static::FIELD__PAGES_COUNT, null);
        $pagesProgress = $progress->getParameter(static::FIELD__PAGES_COUNT, new Parameter([
            IParameter::FIELD__NAME => static::FIELD__PAGES_COUNT,
            IParameter::FIELD__VALUE => 0
        ]));

        if (!$pagesFact) {
            $pagesFact = $pagesProgress;
        } else {
            $pagesFact->setValue($pagesFact->getValue() + $pagesProgress->getValue());
        }

        $fact->setParameter(static::FIELD__PAGES_COUNT, $pagesFact);
    }
}
