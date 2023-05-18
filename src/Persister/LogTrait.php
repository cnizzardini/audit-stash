<?php

namespace AuditStash\Persister;

use Cake\Datasource\EntityInterface;
use Cake\Log\LogTrait as BaseLogTrait;

trait LogTrait
{
    use BaseLogTrait;

    /**
     * Converts an entity to an error log message.
     *
     * @param \Cake\Datasource\EntityInterface $entity The entity to convert.
     * @param int $depth The depth up to which to export the entity data.
     * @return string
     */
    protected function toErrorLog(EntityInterface $entity, int $depth = 4)
    {
        /*
         * @todo needs review. The error logs were printing html out on my local with the original code, not sure I love this though.
         * @todo if keeping ths change, depth is not required?
         */
        return sprintf(
            '[%s] Persisting audit log failed for %s. Data:' . PHP_EOL  . '%s',
            __CLASS__,
            get_class($entity),
            print_r($entity->getErrors(), true)
        );
    }
}
