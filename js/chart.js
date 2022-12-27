$(document).ready(function() {
    $.chart = {
        currencyList: function() {
            $.ajax({
                type: "POST",
                url: "currency.php",
                data: { request: "CurrencyList" },

                success: function(data) {
                    var currencies = JSON.parse(data);
                    $.each(currencies, function(key, value) {
                        $('#currencyTo').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            })
        },

        sendReq: function() {
            if ($('#currencyFrom').val() != "Select source currency" && $('#currencyTo').val() != "Select target currency") {
                $.ajax({
                    type: "POST",
                    url: "currency.php",
                    data: {
                        request: "Pairing",
                        currencyFrom: $('#currencyFrom').val(),
                        currencyTo: $('#currencyTo').val(),
                        range: $('input[name=currencyRange]:checked').val(),
                    },

                    success: function(data) {
                        //alert(data);
                    }
                });
            }
        }
    }



    $.chart.currencyList();
})