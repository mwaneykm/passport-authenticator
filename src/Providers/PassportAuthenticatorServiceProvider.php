<?php namespace Mwaneykm\PassportAuthenticator\Providers;

use Mwaneykm\PassportAuthenticator\Repositories\Contracts\ExternalOauth2CredentialsRepositoryInterface;
use Mwaneykm\PassportAuthenticator\Repositories\Eloquent\EloquentExternalOauth2CredentialsRepository;
use RKooistra\SuperEloquentRepository\Abstracts\ConcreteResourceRepository;

class PassportAuthenticatorServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            ExternalOauth2CredentialsRepositoryInterface::class,
            EloquentExternalOauth2CredentialsRepository::class
        );
    }

    public function boot() {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
    }
}
