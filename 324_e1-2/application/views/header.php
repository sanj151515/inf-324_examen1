<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	
    <title>Stand CSS Blog by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.css">

  </head>

  <body>

   

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
			
		  
		       <a class="navbar-brand" ><h2><em>FCPN</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <form action="<?php echo base_url()."index.php/welcome/index"?>" method="post" ><button type="submit" class="button"><a class="nav-link">PÁGINA PRINCIPAL</a></button></form>
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">			  
                <form action="<?php echo base_url()."index.php/welcome/fmate"?>" method="post" ><button type="submit" class="button"><a class="nav-link">Matemática</a></button></form>
              </li>
              <li class="nav-item">
                <form action="<?php echo base_url()."index.php/welcome/finfo"?>" method="post" ><button type="submit" class="button"><a class="nav-link">Informática</a></button></form>
              </li>
             <li class="nav-item">
				<form action="<?php echo base_url()."index.php/welcome/ffisi"?>" method="post" ><button type="submit" class="button"><a class="nav-link">Física</a></button></form>
              </li>             
            </ul>
          </div>
        </div>
      </nav>
    </header>