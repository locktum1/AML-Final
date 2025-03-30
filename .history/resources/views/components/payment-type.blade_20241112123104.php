<button class="mt-[10rem] shadow-lg rounded-[15px] bg-white" onclick='DisplayPaymentInfo()'>
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-[30vw] h-[25vh] object-contain rounded-[15px]" draggable="false">
</button>

<script>
    function DisplayPaymentInfo(){
        var paymentInfo = document.getElementById("payment-info");
        if(paymentInfo) {
            console.error("")
            paymentInfo.classList.remove("hidden");
        } else {
            console.error('payment-info element not found');
        }
    }
</script>
