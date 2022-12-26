<?php
    $apiKey = '8fee5cb9426f4a4d94b7f33569e05426';
    $dataSet = array();
    $range = 1; //if selected range is 1D range is 1, else if selected day is 1W range is 7...

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

        //create new dataset from the result USDTRY for using graph
        $dataSet[$date] = $result->rates->TRY;
    }
    curl_close($c);
    print_r($dataSet);
    
    
?>