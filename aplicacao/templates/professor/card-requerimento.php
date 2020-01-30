<div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12 <?php if ($resultado['req_deferido'] == 0) {
              echo('d-none');
            } ?>">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped <?php if ($resultado['req_deferido']> 1 or 
                    $resultado['req_deferido']< -1){
                      echo'd-none';
                    } ?>">
                      <thead>
                        <tr>
                          <th>Titulo</th>
                          <th>Professor</th>
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
                            <?php echo $resultado['req_docente']; ?>
                            <div class="table-links">
                              <?php echo $resultado['req_docente_email']; ?>
                            </div>
                          </td>
                          <?php 
                            if ($resultado['req_deferido'] == 1) { ?>
                            <td>
                              <a style="pointer-events: none;" class="btn btn-success btn-action mr-1"><i class="ion-checkmark"></i></a>
                              <a style="pointer-events: none;" class="btn btn-secondary btn-action"><i class="ion-close"></i></a>
                            </td>
                          <?php } elseif ($resultado['req_deferido'] == -1) { ?>
                            <td>
                              <a style="pointer-events: none;" class="btn btn-secondary btn-action mr-1"><i class="ion-checkmark"></i></a>
                              <a style="pointer-events: none;" class="btn btn-danger btn-action"><i class="ion-close"></i></a>
                            </td>
                          <?php }?>
                        </tr>
                        
                      </tbody>
                    </table>
                    <?php if ($resultado['req_deferido']> 1 or 
                    $resultado['req_deferido']< -1){ ?>
                      <h6 class="text-danger text-center">ERROR(CODIGO DE DEFERIMENTO DESCONHECIDO)</h6>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>