<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * URIs that should be excluded from CSRF verification.
     * Temporary: we exempt auth/login to let you sign in while diagnosing the 419.
     * Remove this exemption after debugging to restore full CSRF protection.
     *
     * @var array<int, string>
     */
    protected $except = [
        // no temporary exemptions; keep CSRF protection enabled for all routes
    ];
}
