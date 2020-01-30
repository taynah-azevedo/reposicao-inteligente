<?php include('cabecalho.php') ?>
  <title>Deferimentos</title>
</head>
<?php include('menus.php') ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Reposições</div>
          </h1>
          
          <?php
          $docente = $_SESSION['matricula--p'];
          $requerimentos = $MySQLi->query("SELECT * FROM tb_requerimentos WHERE req_docente = $docente ");
          
          while ($resultado = $requerimentos -> fetch_assoc()){ 
            include('card-requerimento.php');
          }; 
          
          ?>
          
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
