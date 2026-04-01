document.addEventListener("DOMContentLoaded", function(){

    let tickets = document.getElementById("tickets");
    let total = document.getElementById("total");

    if(tickets && total){

        let price = 1; // ₹1 per ticket

        function updateTotal(){
            let count = parseInt(tickets.value) || 1;

            if(count < 1){
                count = 1;
                tickets.value = 1;
            }

            total.value = count * price;
        }

        // Initial load
        updateTotal();

        // On change
        tickets.addEventListener("input", updateTotal);
    }

});