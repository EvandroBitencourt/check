<x-app-layout>
    
<div class="content-wrapper" style="min-height: 81px;">
      <div class="container-fluid">
      <p style="text-align: center;font-size: 30px;">Lembrando essa venda vai custar 1 clik!!</p>
      <div class="row">
        <form style="display: contents;">
        <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informações do Veiculo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a Marca">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite a Modelo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ano do modelo</label>
                    <input type="number" class="form-control" id="ano" name="ano" placeholder="Digite o Ano do modelo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Versão</label>
                    <input type="text" class="form-control" id="versao" name="versao" placeholder="Digite a Versão">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Câmbio</label>
                    <input type="text" class="form-control" id="cambio" name="cambio" placeholder="Manual, Automático, Automatizado e etc">
                  </div>
                  
                  
                 
                </div>
     
            </div>
        </div>

        <div class="col-md-6">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Imagens do Veiculo</h3>
              </div>
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Principal</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="exampleInputFile">Procurar</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 01</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto01" name="foto01">
                        <label class="custom-file-label" for="exampleInputFile">Procurar</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 02</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto02" name="foto02">
                        <label class="custom-file-label" for="exampleInputFile">Procurar</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 03</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto03" name="foto03">
                        <label class="custom-file-label" for="exampleInputFile">Procurar</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 04</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto04" name="foto04">
                        <label class="custom-file-label" for="exampleInputFile">Procurar</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 05</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto05" name="foto05">
                        <label class="custom-file-label" for="exampleInputFile">Procurar</label>
                      </div>
                    </div>
                  </div>
                  
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Vender</button>
                </div>
              
            </div>
        </div>


      </div>
    </form>
    </div>
  </div>
</x-app-layout>
