<x-app-layout>
    
<div class="content-wrapper" style="min-height: 81px;">
    <div class="content-header">
      <div class="container-fluid">
        
        <div class="text-center">
            <h3 class="display-4">Plano que melhor se adapta a você</h3>
            <p class="">
                Planos pensado de acordo com a sua necessidade, escolha o seu  <small class="text-danger">e tenha acesso as melhores oportunidades de negócio.</small>
            </p>
        </div>
        <div class="row mt-4 justify-content-md-center">
            <div class="col-sm col-lg-3"><a href="{{ route('plano.home', 'plano01') }}"><img src="{{asset('images/planos/plano1.png')}}"/> </a></div>
            <div class="col-sm col-lg-3"><a href="{{ route('plano.home', 'plano02') }}"><img src="{{asset('images/planos/plano2.png')}}"/> </a></div>
            <div class="col-sm col-lg-3"><a href="{{ route('plano.home', 'plano03') }}"><img src="{{asset('images/planos/plano3.png')}}"/> </a></div>
        </div>


      </div>
    </div>
  </div>

</x-app-layout>
