<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Configuracion
 *
 * @author Edwin_Guaman
 */
class Configuracion {

  const HOST_BD = "127.0.0.1";
  const NAME_DB="Fabrimed";
  //const NAME_DB = "pde";
  const USER_BD = "root";
  const PASS_BD = "";


  #Paginador
  const MAXREGSPERPAGE = 10; //Cantidad Maxima de registros por p�gina
  const MAXPAGESPERPAGER = 20; //Cantidad M�xima de paginas mostradas por el paginador
  #Otros parametros
  const TITULO = ".:: Administrador de Fabrimed ::.";
  const DEBUG = 0;
  const RAIZ = "http://localhost/Fabrimed";

  //const RAIZ="http://www.eguaman.cl/Fabrimed";
}
