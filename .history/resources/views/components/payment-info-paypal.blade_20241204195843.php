<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px]"]) }}>
    <h3 class="text-[30px] mt-[10px]">Enter your payment details</h3>
    <div class="flex flex-col items-center">
        <div id="paypal-button-container-P-8KU75665SN930203SM5IK6NA"></div>
            <script src="https://www.paypal.com/sdk/js?client-id=AbxSsB67-lmsyUNGwvYzhf8q2HEOru0IFG3D1WvtDOibQlFkIvSwM7AzrAhM_0jNOSbcLf_zESCcWFLt&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
            <script>
                paypal.Buttons({
                    style: {
                        shape: 'pill', color: 'gold', layout: 'horizontal', label: 'subscribe'},
                    createSubscription: function(data, actions) {
                        return actions.subscription.create({
                        plan_id: 'P-8KU75665SN930203SM5IK6NA'
                        });
                    },
                    onApprove: function(data, actions) {
                        session()->flash('success','Subscription has begun! Redirecting you back to the catalogue');
                        return back();
                    }
                }).render('#paypal-button-container-P-8KU75665SN930203SM5IK6NA');
            </script>
    </div>
</div>
