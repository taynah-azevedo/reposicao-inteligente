          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12 <?php if ($resultado['req_deferido'] <> 0) {
              echo('d-none');
            } ?>">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Titulo</th>
                          <th>Aluno</th>
                          <th>Anexo</th>
                          <th>Deferimento</th>
                        </tr>
                      </thead>
                      <tbody>                         
                        <tr>
                          <td>
                            <?php echo $resultado['req_avaliacao']; ?>
                            <div class="table-links">
                              <?php echo $resultado['req_data_avaliacao']; ?>
                            </div>
                          </td>
                          <td>
                            <?php echo $resultado['req_dicente']; ?>
                            <div class="table-links">
                              <?php echo $resultado['req_dicente_email']; ?>
                            </div>
                          </td>
                          <td>
                            <a type="button" href="../../upload/<?php echo($resultado['req_anexo']);?> " target="_blank" class="btn btn-info btn-sm" >Ver anexo</a>
                          </td>
                            <td>
                              <a href="nd.php?req_id=<?php echo($resultado['req_id']);?>" type="button" class="btn btn-danger btn-sm text-white">Não Deferir</a>
                              <a href="d.php?req_id=<?php echo($resultado['req_id']);?>" type="button" class="btn btn-success btn-sm text-white">Deferir</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      