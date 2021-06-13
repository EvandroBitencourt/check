<x-app-layout>
    
<div class="content-wrapper" style="min-height: 81px;">
      <div class="container-fluid">
      <p style="text-align: center;font-size: 30px;">Lembrando essa venda vai custar 1 clik!!</p>
      <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <div class="row">
        <form method="POST" action="{{ route('cadastroCarro') }}" style="display: contents;">
        @csrf
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
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite a Modelo">
                  </div>
                  <div class="form-group">
                    <label for="anomodelo">Ano do modelo</label>
                    <input type="number" class="form-control" id="anomodelo" name="anomodelo" placeholder="Digite o Ano do modelo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Versão</label>
                    <input type="text" class="form-control" id="versao" name="versao" placeholder="Digite a Versão">
                  </div>
                  <div class="form-group">
                    <label for="cambio">Câmbio</label>
                    <input type="text" class="form-control" id="cambio" name="cambio" placeholder="Manual, Automático, Automatizado e etc">
                  </div>
                  <div class="form-group">
                    <label for="combustivel">Combustível</label>
                    <select class="custom-select form-control-border" id="combustivel" name="combustivel">
                      <option value="Flex">Flex</option>
                      <option value="Etanol">Etanol</option>
                      <option value="Gasolina">Gasolina</option>
                      <option value="Diesel">Diesel</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="direcao">Tipo de Direção</label>
                    <select class="custom-select form-control-border" id="direcao" name="direcao">
                      <option value="Normal">Normal</option>
                      <option value="Direção hidráulica">Direção hidráulica</option>
                      <option value="Direção eletrica">Direção eletrica</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="motor">Motorização</label>
                    <input type="number" step="0.01" class="form-control" id="motor" name="motor" placeholder="Exempo 1.0, 2.0 e etc">
                  </div>
                  <div class="form-group">
                    <label for="tipoveiculo">Tipo do Veiculo</label>
                    <select class="custom-select form-control-border" id="tipoveiculo" name="tipoveiculo">
                      <option value="Passeio">Passeio</option>
                      <option value="Utilitario">Utilitario</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="km">Quilimetragem</label>
                    <input type="number" class="form-control" id="km" name="km" placeholder="Exempo 1000">
                  </div>
                  <div class="form-group">
                    <label for="portas">Quantidades de Portas</label>
                    <input type="number" class="form-control" id="portas" name="portas" placeholder="Exempo 1, 2, 3....">
                  </div>
                  <div class="form-group">
                    <label for="finalplaca">Final da Placa</label>
                    <input type="number" class="form-control" id="finalplaca" name="finalplaca" placeholder="Exempo 1, 2, 3....">
                  </div>
                  <div class="form-group">
                    <label for="cor">Cor</label>
                    <input type="text" class="form-control" id="cor" name="cor" placeholder="Digite a cor do veiculo">
                  </div>
                  <div class="form-group">
                    <label for="preco">Preço</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                      </div>
                    <input type="number" id="preco" name="preco" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text">,00</span>
                    </div>
                  </div>
                </div>
                 
                </div>
     
            </div>
        </div>

        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Acessórios e Informações do Veiculo</h3>
            </div>
            <div class="card-body">
            
            <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="airbag" name="airbag" value="true">
                          <label for="airbag" class="custom-control-label">Air Bag</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="arcondicionado" name="arcondicionado" value="true">
                          <label for="arcondicionado" class="custom-control-label">Ar Condicionado</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="vidroeletrico" name="vidroeletrico" value="true">
                          <label for="vidroeletrico" class="custom-control-label">Vidro Eletrico</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="sensorre" name="sensorre" value="true">
                          <label for="sensorre" class="custom-control-label">Sensor de ré</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="blindado" name="blindado" value="true">
                          <label for="blindado" class="custom-control-label">Blindado</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="financiado" name="financiado" value="true">
                          <label for="financiado" class="custom-control-label">Financiado</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="multas" name="multas" value="true">
                          <label for="multas" class="custom-control-label">Multas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="unicodono" name="unicodono" value="true">
                          <label for="unicodono" class="custom-control-label">Unico dono</label>
                        </div>
        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="alarme" name="alarme" value="true">
                          <label for="alarme" class="custom-control-label">Alarme</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="travaeletrica" name="travaeletrica" value="true">
                          <label for="travaeletrica" class="custom-control-label">Trava Eletrica</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="som" name="som" value="true">
                          <label for="som" class="custom-control-label">Som</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="camerare" name="camerare" value="true">
                          <label for="camerare" class="custom-control-label">Camera de ré</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="aceitatrocas" name="aceitatrocas" value="true">
                          <label for="aceitatrocas" class="custom-control-label">Aceita Trocas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="ipva" name="ipva" value="true">
                          <label for="ipva" class="custom-control-label">Ipva atraso</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="leilao" name="leilao" value="true">
                          <label for="leilao" class="custom-control-label">Leilão</label>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Informações Adicionais</label>
                    <textarea id="obs" name="obs" class="form-control" rows="4" placeholder="Informações sobre o estado do veiculo, se tiver multa o valor, se for financiado o valor, valor do ipva e etc."></textarea>
                  </div>
            </div>
          </div>

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Imagens do Veiculo</h3>
              </div>
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Principal</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="foto" name="foto" accept="image/*">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputFile">Foto Adicional 01</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="foto01" name="foto01" accept="image/*">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 02</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="foto02" name="foto02" accept="image/*">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 03</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="foto03" name="foto03" accept="image/*">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 04</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="foto04" name="foto04" accept="image/*">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto Adicional 05</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="foto05" name="foto05" accept="image/*">  
                      </div>
                    </div>
                  </div>
                  
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Vender já</button>
                </div>
              
            </div>
        </div>


      </div>
    </form>
    </div>
  </div>
</x-app-layout>
