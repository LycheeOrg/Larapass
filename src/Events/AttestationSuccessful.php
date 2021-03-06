<?php

namespace DarkGhostHunter\Larapass\Events;

use Webauthn\PublicKeyCredentialSource;
use DarkGhostHunter\Larapass\Contracts\WebAuthnAuthenticatable;

class AttestationSuccessful
{
    /**
     * The user who registered a new set of credentials.
     *
     * @var \DarkGhostHunter\Larapass\Contracts\WebAuthnAuthenticatable
     */
    public $user;

    /**
     * The credentials registered.
     *
     * @var \Webauthn\PublicKeyCredentialSource
     */
    public $credential;

    /**
     * Create a new Event instance.
     *
     * @param  \DarkGhostHunter\Larapass\Contracts\WebAuthnAuthenticatable  $user
     * @param  \Webauthn\PublicKeyCredentialSource  $credential
     * @return void
     */
    public function __construct(WebAuthnAuthenticatable $user, PublicKeyCredentialSource $credential)
    {
        $this->user = $user;
        $this->credential = $credential;
    }
}