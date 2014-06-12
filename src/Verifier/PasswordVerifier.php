<?php
namespace Aura\Auth\Verifier;

class PasswordVerifier implements VerifierInterface
{
    protected $algo;

    protected $opts;

    public function __construct($algo, array $opts = array())
    {
        $this->algo = $algo;
        $this->opts = $opts;
    }

    public function __invoke($plaintext, $encrypted)
    {
        return $this->verifyPassword($plaintext, $encrypted);
    }

    public function verifyPassword($plaintext, $encrypted)
    {
        return password_verify($plaintext, $encrypted);
    }
}
