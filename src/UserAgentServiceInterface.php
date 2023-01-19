<?php

namespace Laravel\InterfaceUseragent;

interface UserAgentServiceInterface {

    public function parse(string $_data): void;
    public function getBrowserName(): ?string;
    public function getSystemName(): ?string;
}
