<?php

/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 02-05-2016
 * Time: 11:18
 */
use ArmoredCore\Facades\Router;

/* * **************************************************************************
 *  URLEncoder/HTTPRouter Routing Rules
 *  Use convention: controllerName@methodActionName
 * ************************************************************************** */
Router::get('/', 'HomeController/index');
Router::get('home/', 'HomeController/index');
Router::get('home/index', 'HomeController/index');
Router::get('home/start', 'HomeController/start');
Router::get('play/', 'JogoController/jogoInicio');
Router::get('home/jogo', 'JogoController/viewJogo');
Router::post('pede-carta/', 'JogoController/jogoMedio');












/************** End of URLEncoder Routing Rules ************************************/