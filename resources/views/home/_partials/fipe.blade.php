<section class="check_fipe contact_check" id="checar">
   <div class="container">
       <div class="row">
           <div class="col-sm-4 logobranco_fipe">
              <img src="{{asset('images/content/logobranco.png')}}" />
           </div>
           <div class="col-sm-8">
               <form id="fipe" class="form_contact">
                   <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo de veículo</label>
                        <select class="form-control form-select" aria-label=".form-select-sm example" id="exampleFormControlSelect1" name="fipe_tipos" id="fipe_tipos">
                            <option selected id="nenhum" value="null">Selecione um tipo de veículo</option>
                            <option value="carros">Carros</option>
                            <option value="motos">Motos</option>
                            <option value="caminhoes">Caminhões</option>
                        </select>
                   </div>
                   <div class="form-group">
                      <label for="exampleFormControlSelect1">Selecione a marca</label>
                      <select class="form-control form-select" aria-label="Default select example" id="exampleFormControlSelect1" id="fipe_marcas" name="fipe_marcas" disabled>
                         <option>Marca</option>
                      </select>
                   </div>
                   <div class="form-group">
                        <label for="exampleFormControlSelect1">Selecione o modelo</label>
                        <select class="form-control form-select" aria-label="Default select example" id="exampleFormControlSelect1" id="fipe_modelos" name="fipe_modelos" disabled>
                            <option>Modelo</option>
                        </select>
                   </div>
                   <div class="form-group">
                        <label for="exampleFormControlSelect1">Selecione o ano</label>
                        <select class="form-control form-select" aria-label="Default select example" id="exampleFormControlSelect1" id="fipe_anos" name="fipe_anos" disabled>
                            <option>Ano</option>
                        </select>
                   </div>
                   <div class="alert">
                      <span class="error" style="display: none; ">Todos os campos são obrigatórios</span><br>
                      <div id="preco_form"></div>
                   </div>
               </form>
        </div>
       </div>
   </div>
</section>

