<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px]"]) }}>
    <h3 class="text-[30px] mt-[10px]">Enter your payment details</h3>
    <div class="flex flex-col items-center">
        <div id="paypal-button-container-P-8KU75665SN930203SM5IK6NA"></div>
            <script src="https://www.paypal.com/sdk/js?client-id=AbxSsB67-lmsyUNGwvYzhf8q2HEOru0IFG3D1WvtDOibQlFkIvSwM7AzrAhM_0jNOSbcLf_zESCcWFLt&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
            <script>
                paypal.Buttons({
                    style: {
                        shape: 'pill',
                        color: 'gold',
                        layout: 'horizontal',
                        label: 'subscribe'
                    },
                    createSubscription: function(data, actions) {
                        return actions.subscription.create({
                        /* Creates the subscription */
                        plan_id: 'P-8KU75665SN930203SM5IK6NA'
                        });
                    },
                    onApprove: function(data, actions) {
                        .then(function (response) {
            console.log(response.data); // Handle success
            // Redirect to the catalog page
            window.location.href = '/catalogue'; // Change '/catalogue' to your actual catalog page URL
        }).then(function (response) {
            console.log(response.data); // Handle success
            // Redirect to the catalog page
            window.location.href = '/catalogue'; // Change '/catalogue' to your actual catalog page URL
        })
                    }
                }).render('#paypal-button-container-P-8KU75665SN930203SM5IK6NA'); // Renders the PayPal button
            </script>
    </div>
</div>
