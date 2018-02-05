<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="assets/css/estilo.css" rel="stylesheet" />
</head>
<body>


	
<div class="modal fade" id="exemplomodal" tabindex="-1" role="dialog" aria-
 labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg" role="document">
   		<div class="modal-content">
        	<div class="modal-header">
            
           		<h4 class="modal-title" id="gridSystemModalLabel">Monitoramento inicial de Servidores</h4>
       		</div>;
       			<div class="modal-body">
           			<h4 class="alert alert-danger text-center">O Servidor abaixo está indisponível no momento!</h4>

       			</div>
      			<div>
   
				<?php

			       include 'conexao_aguasfrias.php';
			       include 'conexao_extrema.php';
			       include 'conexao_boavista.php';
				   include 'conexao_mansidao.php';
				   include 'conexao_condado.php';
				   include 'conexao_bauru.php';                                    
			              
                ?>                                     
        		</div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
       </div>
   </div>
</div>

	</div>

</body>
</html>
