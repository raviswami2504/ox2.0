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
    <link rel="canonical" href="https://oxmaint.com/cbm-roi-calculator">

    <link rel="shortcut icon" href="./assets/img/favicon.png" />
    <link rel="stylesheet" href="./assets/css/plugins.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/colors/purple.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-Y6M0T9NLP4");
    </script>

    <style>
        .btn-primary:hover {
            background-color: #fab758 !important;
            border-color: #fab758 !important;
        }

        footer a:hover {
            color: #fab758 !important;
        }

        #phone-content h1 {
            font-size: 18px;
            color: white;
        }
    </style>

</head>

<body>
    <div class="content-wrapper">
  <!-- /header -->
         <?php include "header100.php" ?>

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

          <?php include "footer200.php" ?>

    <script type="text/javascript"
        id="zsiqchat">var $zoho = $zoho || {}; $zoho.salesiq = $zoho.salesiq || { widgetcode: "siq673b563a79ba68de89182b1f70304139f817a2feee1d52c2758c7cb40118b52d", values: {}, ready: function () { } }; var d = document; s = d.createElement("script"); s.type = "text/javascript"; s.id = "zsiqscript"; s.defer = true; s.src = "https://salesiq.zohopublic.com/widget"; t = d.getElementsByTagName("script")[0]; t.parentNode.insertBefore(s, t);</script>

    <div class="progress-wrap" style="opacity: 1">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
    <script src="./assets/js/number_picker.js"></script>

    <script>
        // Function to parse input and return a valid value (if NaN, return default value)
        const parseInput = (inputId, defaultValue = 0) => {
            const value = document.getElementById(inputId).value;
            const parsedValue = parseFloat(value);
            return isNaN(parsedValue) ? defaultValue : parsedValue;
        };

        // Event listener for inputs that automatically updates results
        const inputs = [
            'currentDowntimeHours',
            'hourlyCostDowntime',
            'unplannedMaintenanceHours',
            'plannedMaintenanceHours',
            'cbmDowntimeReduction',
            'cbmUnplannedReduction',
            'cbmPlannedReduction',
            'cbmCost'
        ];

        // Listen for changes in input fields
        inputs.forEach(inputId => {
            document.getElementById(inputId).addEventListener('input', updateROI);
        });

        function updateROI() {
            // Get all input values
            const currentDowntimeHours = parseInput('currentDowntimeHours');
            const hourlyCostDowntime = parseInput('hourlyCostDowntime');
            const unplannedMaintenanceHours = parseInput('unplannedMaintenanceHours');
            const plannedMaintenanceHours = parseInput('plannedMaintenanceHours');
            const cbmDowntimeReduction = parseInput('cbmDowntimeReduction') / 100;
            const cbmUnplannedReduction = parseInput('cbmUnplannedReduction') / 100;
            const cbmPlannedReduction = parseInput('cbmPlannedReduction') / 100;
            const cbmCost = parseInput('cbmCost');

            // Calculate downtime savings
            const downtimeSaved = currentDowntimeHours * cbmDowntimeReduction;
            const unplannedSaved = unplannedMaintenanceHours * cbmUnplannedReduction;
            const plannedSaved = plannedMaintenanceHours * cbmPlannedReduction;

            // Calculate cost savings
            const downtimeCostSavings = downtimeSaved * hourlyCostDowntime;
            const maintenanceCostSavings = (unplannedSaved + plannedSaved) * hourlyCostDowntime;

            // Calculate total savings
            const totalCostSavings = downtimeCostSavings + maintenanceCostSavings;
            const totalSavings = totalCostSavings - cbmCost;

            // Calculate ROI ratio
            const roiRatio = totalSavings / cbmCost;
            const roiPercent = roiRatio * 100;

            // Display results
            document.getElementById('totalDowntimeSaved').textContent = downtimeSaved.toFixed(2);
            document.getElementById('totalUnplannedSaved').textContent = unplannedSaved.toFixed(2);
            document.getElementById('totalPlannedSaved').textContent = plannedSaved.toFixed(2);
            document.getElementById('totalCostSavings').textContent = totalCostSavings.toFixed(2);
            document.getElementById('roiPercent').textContent = roiPercent.toFixed(2) + '%';
            document.getElementById('roiRatio').textContent = roiRatio.toFixed(2);
        }

        // Initialize calculations on page load
        updateROI();
    </script>
</body>

</html>