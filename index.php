<!DOCTYPE html>
<html>
    <head>
        <?php require("static/head.html")?>
        <title>Currency History</title>
    </head>
    <body>
        <main class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6" id="currencySettings">
                        <div class="row">
                            <div class="col-6">
                                <select id="currencyFrom" class="form-select m-3" aria-label="Select Source Currency">
                                    <option selected>Select source currency</option>
                                    <option>USD</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="currencyTo" class="form-select m-3" aria-label="Select Target Currency" onchange="$.chart.sendReq();">
                                    <option selected>Select target currency</option>
                                    
                                </select>
                            </div>
                        </div>                        
                    
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="col-12">
                        <div id="currencyHistoryChart"><div id="selectMessage" class="card m-3 text-center"><h2>Select currency to show graph</h2></div></div>
                    </div>
                    <div class="col-12" id="rangeSelect">
                        <div class="btn-group" role="group">
                            <input class="btn-check" type="radio" name="currencyRange" id="radioDay" value="1" onchange="$.chart.sendReq();" checked>
                            <label class="btn btn-outline-success" for="radioDay">1D</label>

                            <input class="btn-check" type="radio" name="currencyRange" id="radioWeek" value="7" onchange="$.chart.sendReq();">
                            <label class="btn btn-outline-success" for="radioWeek">1W</label>

                            <input class="btn-check" type="radio" name="currencyRange" id="radioMonth" value="30" onchange="$.chart.sendReq();">
                            <label class="btn btn-outline-success" for="radioMonth">1M</label>

                            <input class="btn-check" type="radio" name="currencyRange" id="radioYear" value="365" onchange="$.chart.sendReq();">
                            <label class="btn btn-outline-success" for="radioYear">1Y</label>
                        </div>
                    </div>
                    
                </div>
            </div>
        </main>
    </body>
</html>