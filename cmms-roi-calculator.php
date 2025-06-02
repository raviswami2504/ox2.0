<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calculate the total savings in man power hours and costs using Oxmaint CMMS. Estimate how much time and money you can save with our free ROI calculator.">
    <meta name="keywords" content="CMMS ROI, man power hour savings, time savings, labor savings, maintenance savings, Oxmaint CMMS">
    <meta name="author" content="oxmaint" />

    <title>Man Power Hour Savings Calculator</title>

    <!-- Meta OG tags for Facebook -->
<meta property="og:title" content="CMMS ROI Calculator - Oxmaint">
<meta property="og:description"
  content="Calculate your return on investment with Oxmaint’s CMMS ROI Calculator. Understand cost savings, efficiency gains, and the true value of implementing a maintenance management system.">
<meta property="og:url" content="https://oxmaint.com/cmms-roi-calculator.php">
<meta property="og:image" content="https://oxmaint.com/assets/img/photos/webp/status.webp">
<meta property="og:type" content="website">
<meta property="og:site_name" content="OXMaint">

<!-- Meta OG tags for Twitter -->
<meta name="twitter:title" content="Oxmaint: CMMS ROI Calculator">
<meta name="twitter:description"
  content="Estimate how much your business can save with Oxmaint's CMMS. Use our ROI calculator to project reduced downtime, lower maintenance costs, and improved productivity.">
<meta name="twitter:image" content="https://oxmaint.com/assets/img/photos/webp/status.webp">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@OXMaint">

<?php include "./include-2/style.php" ?>

</head>

<body>
    <div class="content-wrapper">
    <!-- /header -->
         <?php include "./include-2/header100.php" ?>

        <section class="wrapper">
            <div class="container py-4 py-md-6">
                <div class="row align-items-center">
                    <h2 class="display-2 mb-5">Maintenance Management Software ROI Calculator</h2>
                    <p class="lead">As equipment breakdowns and labor shortages become more prevalent, organizations are increasingly turning to preventive maintenance programs. But for even greater
                        efficiency, advanced strategies like predictive and condition-based maintenance are leading the way. With Oxmaint CMMS, you can estimate the significant time and cost savings
                        your organization could achieve by adopting a CMMS system.</p>

                    <p>By automating critical workflows, streamlining work order management, and providing powerful data insights, Oxmaint CMMS empowers you to transition from reactive to proactive
                        maintenance. Use this calculator to discover the potential value and savings that come with implementing a CMMS.</p>
                </div>
                <h1 class="display-4 my-5">CMMS ROI Calculator</h1>
                <div class="row gx-md-8 gy-10 gy-md-13">
                    <div class="col-lg-9 card p-4 border shadow-lg">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label>Hourly Cost per Employee ($)</label>
                                <input class="form-control" type="number" id="hourly-cost" placeholder="Enter Hourly Cost ($)" value="40" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Hours Saved Per Day Per User</label>
                                <input class="form-control" type="number" id="hours-saved" placeholder="Enter Hours Saved Per Day" value="4" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Number of Users</label>
                                <input class="form-control" type="number" id="users" placeholder="Enter Number of Users" value="8" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Working Days per Year</label>
                                <input class="form-control" type="number" id="working-days" placeholder="Enter Working Days per Year" value="265" />
                            </div>
                        </div>

                        <h4 class="mt-5">Downtime & Inventory</h4>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label>Hourly Cost of Downtime ($)</label>
                                <input type="number" class="form-control" id="downtime-cost" value="500">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Monthly Downtime Hours Reduced</label>
                                <input class="form-control" type="number" id="downtime-hours" placeholder="Enter Monthly Downtime Hours Reduced" value="10" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Monthly Inventory Spend ($)</label>
                                <input class="form-control" type="number" id="inventory-spend" placeholder="Enter Monthly Inventory Spend" value="10000" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Estimated Inventory Savings (%)</label>
                                <input class="form-control" type="number" id="inventory-savings" placeholder="Enter Inventory Savings Percentage" value="20" />
                            </div>
                        </div>

                        <h4 class="mt-5">Costs</h4>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label>CMMS Annual Subscription ($)</label>
                                <input class="form-control" type="number" id="cmms-annual" placeholder="Enter CMMS Annual Subscription" value="4000" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Onboarding Cost ($)</label>
                                <input class="form-control" type="number" id="onboarding-cost" placeholder="Enter Onboarding Cost" value="3000" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Implementation Cost ($)</label>
                                <input class="form-control" type="number" id="implementation-cost" placeholder="Enter Implementation Cost" value="2000" />
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Hardware Cost ($)</label>
                                <input class="form-control" type="number" id="hardware-cost" placeholder="Enter Hardware Cost" value="1000" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 roi-result">
                        <h3>Estimated ROI Results</h3>
                        <div class="result" id="result"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->

          <?php include "./include-2/footer200.php" ?>


    <script>
        function calculateROI() {
            // Get input values
            const hourlyCost = parseFloat(document.getElementById('hourly-cost').value) || 0;
            const hoursSaved = parseFloat(document.getElementById('hours-saved').value) || 0;
            const users = parseFloat(document.getElementById('users').value) || 0;
            const workingDays = parseFloat(document.getElementById('working-days').value) || 0;

            const downtimeCost = parseFloat(document.getElementById('downtime-cost').value) || 0; // Hourly cost of downtime
            const downtimeHours = parseFloat(document.getElementById('downtime-hours').value) || 0;
            const inventorySpend = parseFloat(document.getElementById('inventory-spend').value) || 0;
            const inventorySavingsPercentage = parseFloat(document.getElementById('inventory-savings').value) || 0;

            const cmmsAnnual = parseFloat(document.getElementById('cmms-annual').value) || 0;
            const onboardingCost = parseFloat(document.getElementById('onboarding-cost').value) || 0;
            const implementationCost = parseFloat(document.getElementById('implementation-cost').value) || 0;
            const hardwareCost = parseFloat(document.getElementById('hardware-cost').value) || 0;

            // Calculate total hours saved per year
            const totalHoursSaved = hoursSaved * users * workingDays;

            // Calculate labor savings from time saved
            const laborSavings = totalHoursSaved * hourlyCost;

            // Calculate downtime savings (using hourly cost of downtime)
            const downtimeSavings = downtimeHours * 12 * downtimeCost;  // Assuming monthly downtime hours

            // Calculate inventory savings
            const inventorySavings = (inventorySpend * 12) * (inventorySavingsPercentage / 100);

            // Calculate total savings
            const totalSavings = laborSavings + downtimeSavings + inventorySavings;

            // Calculate total costs
            const totalCosts = cmmsAnnual + onboardingCost + implementationCost + hardwareCost;

            // Calculate ROI
            const roi = totalCosts > 0 ? ((totalSavings - totalCosts) / totalCosts) * 100 : 0;

            // Manpower hours saved
            const totalManpowerHoursSaved = totalHoursSaved;

            // Return Ratio (total savings / total costs)
            const returnRatio = totalCosts > 0 ? totalSavings / totalCosts : 0;

            // Display results
            let resultText = `<p><strong>Total Savings:</strong> $${totalSavings.toFixed(2)}</p>`;
            resultText += `<p><strong>Total Costs:</strong> $${totalCosts.toFixed(2)}</p>`;
            resultText += `<p><strong>Total Manpower Hours Saved:</strong> ${totalManpowerHoursSaved} hours</p>`;
            resultText += `<p><strong>ROI:</strong> ${roi.toFixed(2)}%</p>`;
            resultText += `<p><strong>Return Ratio:</strong> ${returnRatio.toFixed(2)} times</p>`;

            document.getElementById('result').innerHTML = resultText;
        }

        // Calculate ROI on page load with default values
        window.onload = calculateROI;

        // Attach event listeners to all input fields
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('input', calculateROI);
        });
    </script>
<script src="app.js"></script>
</body>

</html>