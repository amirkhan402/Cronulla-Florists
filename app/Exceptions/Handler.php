<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof MethodNotAllowedHttpException) //post/get route exception 
        {   
            return redirect()->back();   
            // return response()->view('error.404');
        }

        if ($exception instanceof NotFoundHttpException) { // no url found exception
            return response()->view('theme.layout.error.custom_error_message');
        }
        if($exception instanceof \PDOException){ //query exception
            // send your custom error message here
            return response()->view('theme.layout.error.custom_error_message');
        }
        if ($exception instanceof TokenMismatchException){ //form token mismatch exception
            // Redirect to a form. Here is an example of how I handle mine
            return redirect($request->fullUrl())->with('csrf_error',"Oops! Seems you couldn't submit form for a long time. Please try again.");
        }
        if ($exception instanceof \ErrorException) { // php errors exception
            // send your custom error message here
            return response()->view('theme.layout.error.custom_error_message');
        }

        if ($exception instanceof \BadMethodCallException) { // call undefined function exception
            // send your custom error message here
            return response()->view('theme.layout.error.custom_error_message');
        }

        if ($exception instanceof \NotReadableException) { // Image invertion  error handling
            // send your custom error message here
            return response()->view('theme.layout.error.custom_error_message');
        }

        if ($exception instanceof \Swift_TransportException) { // Swift mailer error handling
            // send your custom error message here
            return response()->view('theme.layout.error.custom_error_message');
        }
        return parent::render($request, $exception);
    }
}
