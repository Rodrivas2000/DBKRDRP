<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/** 
*@OA\Info(
    *      version="1.0.0",
    *      title="API de Rodrivas2000",
    *      description="API de ejemplo para clase de Desarrollo de Backend y APIs de la carrera de Ingenieria en Diseño y Desarrollo de Videojuegos",
    *      @OA\Contact(
    *          email="riveres50@gmail.com",
    *          name="Rodrivas2000",
    *          url="https://localhost/api/"
    *      ),
    *      @OA\License(
    *          name="Apache 2.0",
    *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
    *      )
    * )
    */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
