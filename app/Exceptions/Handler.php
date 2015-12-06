<?php

namespace JoshGoodson\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exc
     * @return void
     */
    public function report(Exception $exc)
    {
        return parent::report($exc);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exc
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exc)
    {
      if (method_exists($exc, 'getStatusCode'))
      {
        $status = $exc->getStatusCode();
        if (view()->exists("errors.{$status}"))
        {
          $title = "Error";
          switch($status)
          {
            case '401':
              $title = "Unauthorized";
              break;
            case '403':
              $title = "Forbidden";
              break;
            case '503':
              $title = "Service Unavailable";
              break;
            default:
              $title = "Error";
          }
          return response()->view("errors.{$status}", ['exception' => $exc, 'title' => $title], $status);
        } else {
          return $this->convertExceptionToResponse($exc);
        }
      }

      return parent::render($request, $exc);
    }
}
