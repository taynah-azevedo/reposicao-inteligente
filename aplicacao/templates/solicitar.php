<?php 
  include('cabecalho.php'); 
  
?>
  <title>Solicitar</title>
</head>

<?php include('menus.php'); ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Requerimento</div>
          </h1>
          
          <div class="row purple-border">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <form method="POST" class="needs-validation" novalidate="" action="solicitar_requerimento.php" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Disciplina:</label>
                      <select type="text" name="req_disciplina" class="form-control" required>

                      <?php 
                        //Pega as disciplinas
                          for ($i = 1; $i <= $_SESSION['n_disciplinas']; $i++) {
                            $email = $_SESSION['emails'][$_SESSION['disciplinas'][$i-1]['id']];
                            $professor = $_SESSION['professores'][$_SESSION['disciplinas'][$i-1]['id']];
                        ?>
                        <option value="
                          <?php 
                            echo($_SESSION['disciplinas'][$i-1]['id']."; ".$email."; ".$professor);
                          ?>
                        ">
                        <?php echo($_SESSION['disciplinas'][$i-1]['descricao']) ?>
                        </option>
                        
                        
                        <?php
                          }
                      ?>
                      </select> 

                      <div class="invalid-feedback">
                        Digite algo para que possa ser validado!
                      </div>
                  
                    </div>
                    <div class="form-group">
                      <label>Avaliação:</label>
                      <input type="text" name="req_avaliacao" class="form-control" required>
                      <div class="invalid-feedback">
                        Digite algo para que possa ser validado!
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Data da avaliação:</label>
                      <input type="date" name="req_data_avaliacao" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Justificativa:</label>
                      <textarea class="summernote purple-border" name="req_justificativa"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Anexo:</label>
                      <input type="file" name="arquivo" class="form-control">
                    </div>
                  </div>
                      <input style="display:none" name="req_dicente" value="<?php echo($_SESSION['matricula']) ?>">
                      <input style="display:none" name="req_dicente_email" value="<?php echo($_SESSION['email_aluno']) ?>">
                      
                  <div class="card-footer">
                    <button class="btn btn-primary">Eviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://multinity.com/">Multinity</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="../dist/modules/jquery.min.js"></script>
  <script src="../dist/modules/popper.js"></script>
  <script src="../dist/modules/tooltip.js"></script>
  <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../dist/js/sa-functions.js"></script>
  
  <script src="../dist/modules/chart.min.js"></script>
  <script src="../dist/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script src="../dist/js/scripts.js"></script>
  <script src="../dist/js/custom.js"></script>
  <script src="../dist/js/demo.js"></script>
</body>
</html>