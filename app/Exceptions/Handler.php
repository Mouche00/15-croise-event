<?php

namespace App\Exceptions;

use App\Helpers\FlashHelper;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if($e instanceof AuthorizationException) {
            return FlashHelper::redirect('login', 'error', 'Action is unauthorized');
        }
//        if ($this->isHttpException($e) && $e->getStatusCode() === 500)
//        {
//            return redirect()->route('home');
//        }

        return parent::render($request, $e);
    }
}
