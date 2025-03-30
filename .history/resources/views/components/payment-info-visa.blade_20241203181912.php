<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-800 w-[60vw] h-[70vh] rounded-[15px] flex items-center justify-center flex-col"]) }}>
    <h3 class="text-[30px] mt-[10px]">Press the button below to begin the subscription payment</h3>
    <div>
        <form action="{{ route('subscribe') }}" method="POST" id="subscription-form">
            @csrf
            <div class="w-[100%]">
                <label for="card-element">Credit or debit card</label>
                <div id="card-element"></div>
            </div>

            <div id="card-errors" role="alert"></div>
            <button type="submit">Subscribe</button>
        </form>

        <script>
        var stripe = Stripe("{{ env('STRIPE_KEY') }}");
        var elements = stripe.elements();

        var style = {
            base: {
                color: '#ffffff',
                fontSize: '8px',
            },
            invalid: {
                color: "#fa755a",  // Red for invalid fields
                iconColor: "#fa755a"  // Red for the invalid icon
            }
        };

        var card = elements.create("card");
        card.mount("#card-element");

        var form = document.getElementById("subscription-form");
        form.addEventListener("submit", function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById("card-errors");
                    errorElement.textContent = result.error.message;
                } else {
                    var tokenInput = document.createElement("input");
                    tokenInput.setAttribute("type", "hidden");
                    tokenInput.setAttribute("name", "stripeToken");
                    tokenInput.setAttribute("value", result.token.id);
                    form.appendChild(tokenInput);
                    form.submit();
                }});});
        </script>
    </div>
</div>
