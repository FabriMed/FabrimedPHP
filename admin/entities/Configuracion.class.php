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

  /*TU INGENIO*/
  /*
  const HOST_BD="127.0.0.1";
  const NAME_DB="ctu12466_tuingenio";
  const USER_BD="ctu12466_eroco";
  const PASS_BD="12345678a";
  const RAIZ="http://www.tuingenio.cl/admin";
  */

  /*LOCALHOST*/
  
	const HOST_BD="127.0.0.1";
  const NAME_DB="tuingenio";
	const USER_BD="root";
	const PASS_BD="";
  const RAIZ="http://localhost:8080/TuIngenio";
  


  #Paginador
  const MAXREGSPERPAGE = 10; //Cantidad Maxima de registros por p�gina
  const MAXPAGESPERPAGER = 20; //Cantidad M�xima de paginas mostradas por el paginador
  #Otros parametros
  const TITULO = ".:: Administrador de TuIngenio ::.";
  const DEBUG = 0;

}
