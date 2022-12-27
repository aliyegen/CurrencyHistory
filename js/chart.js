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

        //pairing data request
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
                        var receivedData = JSON.parse(data);

                        //clear select message
                        $('#currencyHistoryChart').html('');

                        //create line graph
                        Morris.Line({
                            element: 'currencyHistoryChart',
                            data: receivedData,
                            xkey: "t",
                            ykeys: "p",
                            labels: "P",
                        });
                    }
                });
            }
        }
    }

    //when page loaded, currency list load to the 'select' objects
    $.chart.currencyList();
})