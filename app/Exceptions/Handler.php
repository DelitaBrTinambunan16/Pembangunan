<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Psr\Log\LoggerInterface;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            // keep default reporting
        });

        $this->renderable(function (TokenMismatchException $e, Request $request) {
            // Log extra details for diagnostics, then rethrow so framework shows 419
            try {
                $logger = app(LoggerInterface::class);
                $logger->error('TokenMismatchException detected', [
                    'url' => $request->fullUrl(),
                    'method' => $request->method(),
                    'cookies' => $request->cookies->all(),
                    'headers' => $request->headers->all(),
                ]);
            } catch (\Throwable $ex) {
                // ignore logging failures
            }
            throw $e;
        });
    }
}
