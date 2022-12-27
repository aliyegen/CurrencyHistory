<?php
    $apiKey = '8fee5cb9426f4a4d94b7f33569e05426';
    $dataSet = array();

    $request = $_POST['request'];

    if($request == "CurrencyList"){
        $url = "https://openexchangerates.org/api/currencies.json?app_id=$apiKey";

        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        //get and decode data
        $response = curl_exec($c);

        echo $response;
    }
    else{
        $base = $_POST['currencyFrom'];
        $targetCurrency = $_POST['currencyTo'];
        $range = intval($_POST['range']); //if selected range is 1D range is 1, else if selected day is 1W range is 7...

        for($i=1; $i<=5; $i++){  //I will show 5 values in the graph, so the loop will run 5 times
            //Subtract defined time range each loop from today's date 
            $date = date("Y-m-d", time() - ($i * $range) * (60 * 60 * 24));

            //get currency pairing each date
            $url = "https://openexchangerates.org/api/historical/$date.json?app_id=$apiKey";

            $c = curl_init($url);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
            //get and decode data
            $response = curl_exec($c);
            $result = json_decode($response);

            //get pairing data in decoding data
            $pair = $result->rates->$targetCurrency;
            
            //create dataset for morris chart
            $dataSet[] = array("t"=>$date, 
            "p"=>sprintf('%.3f',floatval($pair))); //the pair data is float. format string for 3 digits after point  
        }
        //send dataset
        echo json_encode($dataSet);
    }
    curl_close($c);
    
?>