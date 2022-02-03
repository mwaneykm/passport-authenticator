<?php namespace mwaneykm\PassportAuthenticator\Mockables;

use mwaneykm\PassportAuthenticator\Factories\ConcretePassportAuthenticatorFactory;
use mwaneykm\PassportAuthenticator\Instances\Authenticator;

class Mock_ConcretePassportAuthenticatorFactory extends ConcretePassportAuthenticatorFactory
{
    public function build(): Authenticator
    {
        return $this->buildAuthenticator(
            'google', 1, 'TEST_TEST', 'http://127.0.0.1:8001/callback', 'test@application.test', 'password', 'authorizeme', 'token'
        );
    }
}
