<section id="about" class="bg-white py-4">
    <div class="c-container">
        <img class="block mx-auto" src="{{ asset('images/check.png') }}" />
        <h2 class="py-4 text-primary" style="font-size: 25px">Confira nossas ofertas:</h2>
    </div>

    <!-- Ofertas -->
    <div class="row">

     <div class="col-sm">   
     <div class="card" style="width: 20rem;margin: auto;">
        <img src="./images/carro/carro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: 700;">COROLA GLI AUTOMÁTICO FLEX</h5>
            <h5 class="card-title card_oferta" >R$ 113.900,00</h5>
            <p class="card-text">ANO: 2020/2020</p>
            <p class="card-text">COR: VERMELHA</p>
            <p class="card-text">ITENS: COMPLETO</p>
            <p class="card-text" style="font-size: 18px;font-weight: 700;">Essa oferta expira em <span id="timer">03:00:00</span></p>
        </div>
        </div>
    </div>

     <div class="col-sm">   
     <div class="card" style="width: 20rem;margin: auto;">
        <img src="./images/carro/carro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: 700;">COROLA GLI AUTOMÁTICO FLEX</h5>
            <h5 class="card-title card_oferta" >R$ 113.900,00</h5>
            <p class="card-text">ANO: 2020/2020</p>
            <p class="card-text">COR: VERMELHA</p>
            <p class="card-text">ITENS: COMPLETO</p>
            <p class="card-text" style="font-size: 18px;font-weight: 700;">Essa oferta expira em <span id="timer1">03:00:00</span></p>
        </div>
        </div>
    </div>

     <div class="col-sm">   
     <div class="card" style="width: 20rem;margin: auto;">
        <img src="./images/carro/carro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-weight: 700;">COROLA GLI AUTOMÁTICO FLEX</h5>
            <h5 class="card-title card_oferta" >R$ 113.900,00</h5>
            <p class="card-text">ANO: 2020/2020</p>
            <p class="card-text">COR: VERMELHA</p>
            <p class="card-text">ITENS: COMPLETO</p>
            <p class="card-text" style="font-size: 18px;font-weight: 700;">Essa oferta expira em <span id="timer2">03:00:00</span></p>
        </div>
        </div>
    </div>

    <script>
        var hr = 3; 
        var min = 0; 
        var seg = 0; 
        function contagem(){
            if(hr == 0 && min == 0 && seg <= 0){
                clearTimeout(timerID);
                mostrarTempo(0, 0, 0);
                document.getElementById("timer").style.color="red";
                document.getElementById("timer1").style.color="red";
                document.getElementById("timer2").style.color="red";
            }else {
                seg--;
                if(seg < 0){
                    seg = 59;
                    min = min-1;
                }
                if(min <= 0){
                min = 59;
                hr = hr-1;
                }
                if(hr < 0){
                    hr = 0;
                    min = 0;
                }
                mostrarTempo(hr, min, seg);
                timerID = setTimeout("contagem()",1000);
            }
        }
        function mostrarTempo(hora, minuto, segundo){
                if(hora < 10){
                    hora = '0' + hora;
                }
                if(minuto < 10){
                    minuto = '0' + minuto;
                }
                if(segundo < 10){
                    segundo = '0' + segundo;
                }
                document.getElementById("timer").innerHTML = ""+hora+":"+minuto+":"+segundo+"";
                document.getElementById("timer1").innerHTML = ""+hora+":"+minuto+":"+segundo+"";
                document.getElementById("timer2").innerHTML = ""+hora+":"+minuto+":"+segundo+"";
            }
            contagem()
    </script>

    <!--carrossel -->

    <div class="glider-contain" style="margin-top: 27px;width: 80%;">
        <div class="glider">
            <div class="espaco"><img style="width: 300px;height: 300px;" src="./images/carrossel/img/1.png"/></div>
            <div class="espaco"><img style="width: 300px;height: 300px;" src="./images/carrossel/img/2.png"/></div>
            <div class="espaco"><img style="width: 300px;height: 300px;" src="./images/carrossel/img/3.png"/></div>
            <div class="espaco"><img style="width: 300px;height: 300px;" src="./images/carrossel/img/3.png"/></div>
            <div class="espaco"><img style="width: 300px;height: 300px;" src="./images/carrossel/img/3.png"/></div>
            <div class="espaco"><img style="width: 300px;height: 300px;" src="./images/carrossel/img/3.png"/></div>
            <div class="espaco"><img style="width: 300px;height: 300px;" src="./images/carrossel/img/3.png"/></div>
        </div>

        <button aria-label="Previous" class="glider-prev"><i class="fa fa-chevron-left"></i></button>
        <button aria-label="Next" class="glider-next"><i class="fa fa-chevron-right"></i></button>
        <div role="tablist" class="dots"></div>
    </div>
    <script>
      window.addEventListener('load',function(){
        document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
            var glider = Glider(this);
            console.log('Slide Visible %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
            console.log('Slide Hidden %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-refresh', function(event){
            console.log('Refresh')
        });
        document.querySelector('.glider').addEventListener('glider-loaded', function(event){
            console.log('Loaded')
        });

        window._ = new Glider(document.querySelector('.glider'), {
            slidesToShow: 1, //'auto',
            slidesToScroll: 1,
            itemWidth: 150,
            draggable: true,
            scrollLock: false,
            dots: '#dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        slidesToScroll: 'auto',
                        itemWidth: 300,
                        slidesToShow: 'auto',
                        exactWidth: true
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToScroll: 4,
                        slidesToShow: 4,
                        dots: false,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2,
                        dots: false,
                        arrows: false,
                        scrollLock: true
                    }
                }
            ]
        });
      });
    </script>
    </div>
</section>
