<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px]"]) }}>
    <h3 class="text-[30px] mt-[10px]">Enter your payment details</h3>
    <div class="flex flex-col items-center">
        <div id="paypal-button-container-P-6AT85741F21206136M5IKSOA"></div>
        <script src="https://www.paypal.com/sdk/js?client-id=ATdJF3Uei2EyREBsNnCYqoSBpe383IcAlFZCxT2luorArvrveeyHHh3ALpPM4KUBuGpmQ4G07csxzjLq&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
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
          plan_id: 'P-6AT85741F21206136M5IKSOA'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID); // You can add optional success message for the subscriber here
      }
  }).render('#paypal-button-container-P-6AT85741F21206136M5IKSOA'); // Renders the PayPal button
</script>
    </div>
</div>
