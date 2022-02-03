<?php namespace mwaneykm\PassportAuthenticator\Mockables;

use mwaneykm\PassportAuthenticator\Abstracts\ConcretePassportAuthenticator;
use mwaneykm\PassportAuthenticator\Factories\ConcretePassportAuthenticatorFactory;
use mwaneykm\PassportAuthenticator\Instances\Authenticator;

class Mock_ConcretePassportAuthenticator extends ConcretePassportAuthenticator
{
    /**
     * @inheritDoc
     */
    protected function getAuthenticatorInstance(): Authenticator
    {
        return app()->make(Mock_ConcretePassportAuthenticatorFactory::class)->build();
    }

    /**
     * @inheritDoc
     */
    protected function getBaseUri(): string
    {
        return 'https://google.com';
    }
}
