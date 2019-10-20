<?php
/**
 * Created by IntelliJ IDEA.
 * User: alex
 * Date: 20.10.19
 * Time: 14:02
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassRoomController
{
    /**
     * @Route("/")
     */
    public function main () {
        return Response::create('{"status":"ok"}');
    }
}