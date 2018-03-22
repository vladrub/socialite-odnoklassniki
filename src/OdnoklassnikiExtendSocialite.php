<?php
namespace vladrub\SocialiteProviders\Odnoklassniki;

use SocialiteProviders\Manager\SocialiteWasCalled;

class OdnoklassnikiExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'odnoklassniki', __NAMESPACE__ . '\Provider'
        );
    }
}
