<?php namespace Mwaneykm\PassportAuthenticator\Mockables;

use Mwaneykm\PassportAuthenticator\Abstracts\ConcretePassportAuthenticator;
use Mwaneykm\PassportAuthenticator\Factories\ConcretePassportAuthenticatorFactory;
use Mwaneykm\PassportAuthenticator\Instances\Authenticator;

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
