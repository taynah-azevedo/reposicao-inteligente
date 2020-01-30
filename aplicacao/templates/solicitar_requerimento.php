<?php 
    include('config.php');

    $aux = explode(";",$_POST['req_disciplina']);
    
    $req_dicente = $_POST['req_dicente'];
    $req_dicente_email = $_POST['req_dicente_email'];

    $req_docente = $aux[2];
    //$req_docente_email = $aux[1];
    $req_docente_email = 'taynahazevedo13@gmail.com';
    $req_disciplina = $aux[0];

    $req_avaliacao = $_POST['req_avaliacao'];
    $req_justificativa = $_POST['req_justificativa'];
    $req_data_avaliacao = $_POST['req_data_avaliacao'];
    
    $req_deferido = 0;


    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    if(!empty($extensao)){
      $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
      $diretorio = "../upload/"; //define o diretorio para onde enviaremos o arquivo
      move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
      $consulta = $MySQLi->query("INSERT INTO tb_requerimentos(req_dicente, req_dicente_email, req_docente, req_docente_email, req_disciplina, req_avaliacao, req_justificativa, req_data_avaliacao, req_anexo, req_deferido)
		  VALUES ('$req_dicente', '$req_dicente_email', '$req_docente', '$req_docente_email', '$req_disciplina', '$req_avaliacao', '$req_justificativa', '$req_data_avaliacao', '$novo_nome', '$req_deferido')");
      include('env_email.php');
    }
    else{
      $consulta = $MySQLi->query("INSERT INTO tb_requerimentos(req_dicente, req_dicente_email, req_docente, req_docente_email, req_disciplina, req_avaliacao, req_justificativa, req_data_avaliacao, req_deferido)
		  VALUES ('$req_dicente', '$req_dicente_email', '$req_docente', '$req_docente_email', '$req_disciplina', '$req_avaliacao', '$req_justificativa', '$req_data_avaliacao', '$req_deferido')");
      include('env_email.php');
    };

    
    header("Location: requerimentos.php");
    
?>