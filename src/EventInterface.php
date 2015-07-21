<?php

namespace AuditStash;

interface EventInterface
{
    public function getEventType();

    public function getTransactionId();

    public function getId();

    public function getSourceName();

    public function getTimestamp();

    public function getMetaInfo();

    public function setMetaInfo($meta);
}
