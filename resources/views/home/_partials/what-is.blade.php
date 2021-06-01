<section id="about" class="bg-white py-4">
    <div class="c-container">
        <img class="block mx-auto" src="{{ asset('images/check.png') }}" />
        <h2 class="py-4 text-primary" style="font-size: 25px">Confira nossas ofertas:</h2>


        




        <div class="row align-items-center text-center mt-8">
            <div class="col-sm">
                <button onclick="trocaImg(1)" type="button" class="btn btn-outline-primary btn-block">Categoria 01</button>
            </div>
            <div class="col-sm">
                <button onclick="trocaImg(2)" type="button" class="btn btn-outline-primary  btn-block">Categoria 02</button>
            </div>
            <div class="col-sm">
                <button onclick="trocaImg(3)" type="button" class="btn btn-outline-primary  btn-block">Categoria 03</button>
            </div>
            <div class="col-sm">
                <button onclick="trocaImg(4)" type="button" class="btn btn-outline-primary  btn-block">Categoria 04</button>
            </div>
        </div>

        <div class="row mt-4 justify-content-md-center">
            <div class="col-sm col-lg-3"><img id="img01" src="{{asset('images/banner/carro.jpg')}}" /> </div>
            <div class="col-sm col-lg-3"><img id="img02" src="{{asset('images/banner/carro.jpg')}}" /> </div>
            <div class="col-sm col-lg-3"><img id="img03" src="{{asset('images/banner/carro.jpg')}}" /> </div>
            <div class="col-sm col-lg-3"><img id="img04" src="{{asset('images/banner/carro.jpg')}}" /> </div>
        </div>

    </div>
</section>
