<?php
  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  // Load Composer's autoloader
  require dirname(__DIR__).'/../vendor/autoload.php';

  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
      //Server settings                     
      $mail->isSMTP();                                           
      $mail->Host       = 'smtp.gmail.com';                    
      $mail->SMTPAuth   = true;                                   
      $mail->Username   = 'ReposicaoInteligente01@gmail.com';                     
      $mail->Password   = 'reposicaointeligente';                               
      $mail->SMTPSecure = "tls";         
      $mail->Port       = 587;             
      
      //Recipients
      $mail->setFrom('ReposicaoInteligente01@gmail.com', 'R.Inteligente');
      $mail->addAddress($req_docente_email, $req_docente);    

      // Content
      $assunto = 'Requerimento de reposicao efetuada pelo aluno '. $req_dicente;
      $corpo = 'O aluno '.$req_discente.' requeriu uma reposição relativa a avaliação: '.$req_avaliacao.' e que ocorreu no dia '.$req_data_avaliacao. 
      " sob a justificativa:".$req_justificativa;

      $mail->isHTML(true);                                  
      $mail->Subject = $assunto;
      $mail->Body    = $corpo;
      $mail->AltBody = $corpo;

      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
?>