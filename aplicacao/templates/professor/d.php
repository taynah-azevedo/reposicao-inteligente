<?php
  include('cabecalho.php');
  include('menus.php');
  $req_id = $_GET['req_id'];

  $dta = $_POST['dta'];
  $obs = $_POST['obs'];
?>
  <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Requerimento</div>
          </h1>
          
          <div class="row purple-border">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <form method="POST" class="needs-validation" novalidate="" action="#" enctype="multipart/form-data">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label>data da reposição:</label>
                      <input type="date" name="dta" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>observação:</label>
                      <textarea class="summernote purple-border" name="obs"></textarea>
                    </div>
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

  <script src="../../dist/modules/jquery.min.js"></script>
  <script src="../../dist/modules/popper.js"></script>
  <script src="../../dist/modules/tooltip.js"></script>
  <script src="../../dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../../dist/js/sa-functions.js"></script>
  
  <script src="../../dist/modules/chart.min.js"></script>
  <script src="../../dist/modules/summernote/summernote-lite.js"></script>

  
  <script src="../../dist/js/scripts.js"></script>
  <script src="../../dist/js/custom.js"></script>
  <script src="../../dist/js/demo.js"></script>
</body>
</html>

<?php
  if(!empty($dta)){
    $consulta = $MySQLi->query("update tb_requerimentos set req_deferido = 1 where req_id = $req_id");
    
    $consultaa = $MySQLi->query("INSERT INTO tb_deferidos (def_data_reposicao, def_observacao, def_req_id)
    VALUES ('$dta', '$obs', '$req_id')");
      
    echo "<script>location.href='deferir.php';</script>";
  }
?>