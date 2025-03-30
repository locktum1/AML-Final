<<<<<<< HEAD:resources/views/components/payment-info.blade.php
<div class="w-full h-full flex items-center flex-col bg-gray-700 ">
=======
<div {{ $attributes->merge(['class' => "w-full h-full flex items-center flex-col bg-gray-700">
>>>>>>> 2614612 (added responsive media pages and made more progress on payment system):.history/resources/views/components/payment-info.blade_20241125160150.php
    <x-text-input for='card-num' type='text' label='Card number'></x-text-input>
    <x-text-input for='expiry' type='text' label='Expiry date'></x-text-input>
    <x-text-input for='cvv' type='text' label='CVV'></x-text-input>
</div>
