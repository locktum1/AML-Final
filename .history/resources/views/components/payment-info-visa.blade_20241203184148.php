@if (session('success'))
<div class="bg-green-500 text-white"></div>
@endif

<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px] flex"]) }}>
    <div class="w-full bg-gray-600 h-[8rem] rounded-[15px]">
        <h1 class="text-[40px] mt-[10px]">Visa</h1>
        <h3 class="text-[30px] mt-[10px]">Press fill in the information below and press "Subscribe" to begin subscription</h3>
    </div>

    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <form action="{{ route('subscribe') }}" method="POST" id="subscription-form" class="bg-gray-700 rounded-[15px]">
            @csrf
            <div class="mb-4 w-[30rem] h-[10rem]">
                <label for="card-element" class="text-[1.75rem]">Enter your card details below </label>
                <div id="card-element"></div>
            </div>

            <div id="card-errors" role="alert"></div>
            <button class="text-[1.75rem]" type="submit">Subscribe</button>
        </form>

        <script>
        var stripe = Stripe("{{ env('STRIPE_KEY') }}");
        var elements = stripe.elements();

        var style = {
            base: {
                color: '#ffffff',
                fontSize: '20px',
                padding: '16px',
                lineHeight: "24px"
            },
            invalid: {
                color: "#fa755a",
                iconColor: "#fa755a"
            }
        };

        var card = elements.create("card", {style: style});
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
