<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Calculate the ROI of Oxmaint's Condition-Based Maintenance (CBM) solution. Reduce downtime and unplanned maintenance costs with real-time data from PLCs, IoT sensors, and historians.">
    <meta name="keywords" content="CBM ROI, predictive maintenance, condition-based maintenance, Oxmaint, IoT sensors, downtime cost savings, maintenance optimization, PLC integration">
    <meta name="author" content="oxmaint" />

    <title>Condition-Based Maintenance (CBM) ROI Calculator</title>
    

</head>

<body>
    <div class="content-wrapper">
  <!-- /header -->
         <?php include "./include-2/header100.php" ?>
         <?php include "./include-2/style.php" ?>

        <section class="wrapper">
            <div class="container py-4 py-md-6">
                <div class="row align-items-center justify-content-center">
                    <h1 class="display-2 mb-5">Condition-Based Maintenance (CBM) ROI Calculator</h1>
                    <p class="lead">Condition-Based Maintenance (CBM), integrated with Oxmaint's real-time data from PLCs, IoT sensors, and historians, optimizes maintenance strategies by monitoring
                        asset
                        conditions and predicting failures before they happen. This helps reduce unplanned downtime, breakdowns, and emergency maintenance costs.</p>

                    <p>With Oxmaint's predictive and CBM-driven maintenance, businesses can save time, reduce operational costs, and improve equipment reliability. Use this ROI calculator to see the
                        savings
                        potential based on your own data.</p>

                    <h4 class="mt-5">Key Benefits of Oxmaint's CBM Integration:</h4>
                    <ul>
                        <li><strong>Real-Time Data Monitoring:</strong> Integration with PLCs, IoT sensors, and historian data allows for continuous monitoring of asset conditions.</li>
                        <li><strong>Predictive Maintenance:</strong> By analyzing real-time data, Oxmaint can predict failures and provide early alerts to prevent unplanned downtime.</li>
                        <li><strong>Reduced Downtime and Breakdowns:</strong> Condition-based maintenance ensures timely interventions, which reduces unplanned maintenance and asset failures.</li>
                        <li><strong>Cost Savings:</strong> With predictive maintenance, businesses save money on emergency repairs, spare parts, and labor by addressing issues before they escalate.
                        </li>
                        <li><strong>Improved Planning:</strong> Planned maintenance interventions are optimized based on real-time data, reducing unnecessary downtime and keeping assets running at
                            peak
                            performance.</li>
                    </ul>
                </div>

                <h4 class="display-4 mt-5">CBM ROI Calculator</h4>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 card p-4 border shadow-lg" id="cbm-roi-calculator-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Downtime Hours per Month (Current)</label>
                                <input type="number" class="form-control" id="currentDowntimeHours" value="120">
                            </div>
                            <div class="col-md-6">
                                <label>Hourly Cost of Downtime ($)</label>
                                <input type="number" class="form-control" id="hourlyCostDowntime" value="500">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Total Unplanned Maintenance Hours per Month (Current)</label>
                                <input type="number" class="form-control" id="unplannedMaintenanceHours" value="50">
                            </div>
                            <div class="col-md-6">
                                <label>Planned Maintenance Hours per Month (Current)</label>
                                <input type="number" class="form-control" id="plannedMaintenanceHours" value="70">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Oxmaint CBM Downtime Reduction (%)</label>
                                <input type="number" class="form-control" id="cbmDowntimeReduction" value="40">
                            </div>
                            <div class="col-md-6">
                                <label>Oxmaint CBM Unplanned Maintenance Reduction (%)</label>
                                <input type="number" class="form-control" id="cbmUnplannedReduction" value="30">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Oxmaint CBM Planned Maintenance Reduction (%)</label>
                                <input type="number" class="form-control" id="cbmPlannedReduction" value="20">
                            </div>
                            <div class="col-md-6">
                                <label>Oxmaint CBM Monthly Cost ($)</label>
                                <input type="number" class="form-control" id="cbmCost" value="5000">
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-4" id="cbm-roi-result">
                        <h3 class="mb-3">Estimated ROI Results</h3>
                        <p><strong>Total Downtime Hours Saved/Month:</strong><br> <span id="totalDowntimeSaved">0</span> hours</p>
                        <p><strong>Total Unplanned Maintenance Hours Saved/Month:</strong><br> <span id="totalUnplannedSaved">0</span> hours</p>
                        <p><strong>Total Planned Maintenance Hours Saved/Month:</strong><br> <span id="totalPlannedSaved">0</span> hours</p>
                        <p><strong>Total Cost Savings (Downtime + Maintenance):</strong><br> $<span id="totalCostSavings">0</span></p>
                        <p><strong>Overall ROI:</strong><br> <span id="roiPercent">0%</span></p>
                        <p><strong>Return on Investment (ROI Ratio):</strong><br> <span id="roiRatio">0</span> times</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- /.content-wrapper -->

    <!-- footer -->

          <?php include "./include-2/footer200.php" ?>

    
       <script src="app.js"></script>
</body>

</html>