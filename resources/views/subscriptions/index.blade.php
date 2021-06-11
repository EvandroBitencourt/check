<x-app-layout>
    <div class="content-wrapper" style="min-height: 81px;">
        <div class="content-header">
            <div class="container-fluid" style="width: 50%;">
                    <div>
                        <p style="font-size: 30px;text-align: center;">Plano escolhido é o {{ $plano }}</p>
                    </div>
                    <form action="{{ route('subscriptions.store') }}" method="post" id="form">
                        @csrf

                        <div class="">
                            <input type="text" name="card-holder-name" id="card-holder-name" placeholder="Nome no cartão" class="form-control" style="margin-bottom: 25px;">
                        </div>

                        <div class="">
                            <div id="card-element"></div>
                        </div>

                        <div style="margin-top: 30px;">
                            <button id="card-buttom" data-secret="{{ $intent->client_secret }}" type="submit" class="btn btn-primary">Assinar</button>
                        </div>

                    </form>
                </div>
            </div>    
    </div>           
</x-app-layout>

<script>
const stripe = Stripe("{{ config('cashier.key') }}");
const elements = stripe.elements();
const cardElement = elements.create('card');
cardElement.mount('#card-element');
// subscription payment
const form = document.getElementById('form')
const cardHolderName = document.getElementById('card-holder-name')
const cardButton = document.getElementById('card-buttom')
const clientSecret = cardButton.dataset.secret
form.addEventListener('submit', async (e) => {
    e.preventDefault()
    const { setupIntent, error } = await stripe.confirmCardSetup(
        clientSecret, {
            payment_method: {
                card: cardElement,
                billing_details: {
                    name: cardHolderName.value
                }
            }
        }
    );
    if (error) {
        alert(error.message);
        return;
    }
    let token = document.createElement('input')
    token.setAttribute('type', 'hidden')
    token.setAttribute('name', 'token')
    token.setAttribute('value', setupIntent.payment_method)
    form.appendChild(token)
    form.submit()
})
</script>