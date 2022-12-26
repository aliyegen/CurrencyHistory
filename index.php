<!DOCTYPE html>
<html>
    <head>
        <?php require("static/head.html")?>
        <title>Currency History</title>
    </head>
    <body>
        <main class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6" id="currencySettings">
                        <div class="row">
                            <div class="col-6">
                                <select id="currencyFrom" class="form-select m-3" aria-label="Select Source Currency">
                                    <option>Select source currency</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="currencyTo" class="form-select m-3" aria-label="Select Target Currency">
                                    <option>Select target currency</option>
                                </select>
                            </div>
                        </div>                        
                    
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="col-12">
                        <div id="currencyHistoryChart"><div id="selectMessage">Select currency</div></div>
                    </div>
                    <div class="col-12">
                        <input class="btn-check" type="radio" name="currencyRange" id="radioDay" value="day">
                        <label class="btn btn-outline-success" for="radioDay">1D</label>

                        <input class="btn-check" type="radio" name="currencyRange" id="radioWeek" value="day">
                        <label class="btn btn-outline-success" for="radioWeek">1W</label>

                        <input class="btn-check" type="radio" name="currencyRange" id="radioMonth" value="day">
                        <label class="btn btn-outline-success" for="radioMonth">1M</label>
                    </div>
                    
                </div>
            </div>
            <script>
           
            </script>
        </main>
    </body>
</html>