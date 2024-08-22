<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Sided Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .hero {
            background-image: url('https://source.unsplash.com/random/1600x900?education,tech');
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            padding: 60px 20px;
            text-align: center;
            margin-bottom: 40px;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .form-section {
            border-right: 1px solid #e0e0e0;
            padding-right: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .summary-section {
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .summary-value {
            font-weight: bold;
        }

        .form-check-input:checked {
            background-color: orange;
            border-color: orange;
        }

        .form-check-label {
            margin-left: 5px;
        }

        .btn-warning {
            background-color: #ff9800;
            border-color: #ff9800;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e68900;
            border-color: #e68900;
        }

        .btn-outline-warning {
            border-color: #ff9800;
            color: #ff9800;
        }

        .btn-outline-warning:hover {
            background-color: #ff9800;
            color: white;
        }

        .student-policy-text {
            font-size: 0.85rem;
        }

        .student-policy-link {
            color: #ff9800;
            text-decoration: none;
        }

        .student-policy-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to PluralCode Academy</h1>
        <p>Acquire the skills you need for a bright future in tech. Join our next cohort and transform your career path.</p>
    </div>

    <div class="container my-5">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-7 form-section">
                <h3 class="mb-4">Fill the form below</h3>
                <form id="admissionForm">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number">
                    </div>
                    <div class="mb-3">
                        <label for="academicAchievement" class="form-label">Highest Academic Achievement</label>
                        <select class="form-select" id="academicAchievement">
                            <option selected>Select highest academic achievement</option>
                            <option value="High School">High School</option>
                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                            <option value="Master's Degree">Master's Degree</option>
                            <option value="PhD">PhD</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ageRange" class="form-label">Age Range</label>
                        <select class="form-select" id="ageRange">
                            <option selected>Select your age range</option>
                            <option value="18-25">18-25</option>
                            <option value="26-35">26-35</option>
                            <option value="36-45">36-45</option>
                            <option value="46+">46+</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country">
                            <option selected>Nigeria</option>
                            <option value="Ghana">Ghana</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Kenya">Kenya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state">
                            <option selected>Select your state</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Abuja">Abuja</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Kaduna">Kaduna</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cohort" class="form-label">Cohort (Start Month)</label>
                        <select class="form-select" id="cohort">
                            <option selected>Select your Cohort</option>
                            <option value="January">January</option>
                            <option value="April">April</option>
                            <option value="July">July</option>
                            <option value="October">October</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Class Format</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="classFormat" id="virtualClass"
                                value="Virtual Class" checked>
                            <label class="form-check-label" for="virtualClass">
                                Virtual Class
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Payment Plan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentPlan" id="fullPayment"
                                value="Full Payment" checked>
                            <label class="form-check-label" for="fullPayment">
                                Full Payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentPlan" id="partPayment"
                                value="Part Payment">
                            <label class="form-check-label" for="partPayment">
                                Part Payment (2-times)
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Currency</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="currency" id="usd" value="USD">
                            <label class="form-check-label" for="usd">
                                USD
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="currency" id="ngn" value="NGN" checked>
                            <label class="form-check-label" for="ngn">
                                NGN
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="currency" id="crypto" value="USDT/USDC">
                            <label class="form-check-label" for="crypto">
                                USDT/USDC (Cryptocurrencies)
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="advisorId" class="form-label">Advisor ID</label>
                        <input type="text" class="form-control" id="advisorId" placeholder="Enter Advisor ID">
                    </div>
                    <div class="mb-3">
                        <label for="voucher" class="form-label">Redeem Your Voucher</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="voucher" placeholder="Input Voucher Code">
                            <button class="btn btn-warning" type="button" id="redeemVoucherButton">Redeem now</button>
                        </div>
                    </div>
                    <div class="form-check student-policy-text mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="studentPolicyCheckbox">
                        <label class="form-check-label" for="studentPolicyCheckbox">
                            By checking this box, you have read and agreed with Pluralcode’s
                            <a href="#" class="student-policy-link">student policy</a>.
                        </label>
                    </div>
                </form>
            </div>

            <!-- Summary Section -->
            <div class="col-md-5 summary-section">
                <h3 class="mb-4">Course Details</h3>
                <p>Cohort: <span id="selectedCohort" class="summary-value"></span></p>
                <p>Course Fee: <span id="courseFee" class="summary-value">₦ 0</span></p>
                <p>Amount to Pay: <span id="amountToPay" class="summary-value">₦ 0</span></p>
                <p>Balance to Pay: <span id="balanceToPay" class="summary-value">₦ 0</span></p>
                <h6 class="mt-4 mb-3">Summary</h6>
                <p>Amt. Payable Now: <span id="amountPayableNow" class="summary-value" style="color: green;">₦ 0</span></p>
                <p>Transaction Fee: <span id="transactionFee" class="summary-value">₦ 0</span></p>
                <p>Total Amt Due: <span id="totalAmountDue" class="summary-value">₦ 0</span></p>
                <button class="btn btn-warning btn-lg w-100 mb-3" id="payButton">Pay ₦ 0</button>
                <button class="btn btn-outline-warning btn-lg w-100" id="contactSupportButton">Contact Support</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('admissionForm');

            form.addEventListener('input', function() {
                // Update the summary based on form input
                const selectedCohort = document.getElementById('cohort').value;
                const courseFee = calculateCourseFee(); // Placeholder function
                const paymentPlan = document.querySelector('input[name="paymentPlan"]:checked').value;

                // Placeholder values for demonstration purposes
                document.getElementById('selectedCohort').textContent = selectedCohort;
                document.getElementById('courseFee').textContent = `₦ ${courseFee}`;
                document.getElementById('amountToPay').textContent = paymentPlan === 'Full Payment' ? `₦ ${courseFee}` : `₦ ${courseFee / 2}`;
                document.getElementById('balanceToPay').textContent = paymentPlan === 'Full Payment' ? '₦ 0' : `₦ ${courseFee / 2}`;
                document.getElementById('amountPayableNow').textContent = paymentPlan === 'Full Payment' ? `₦ ${courseFee}` : `₦ ${courseFee / 2}`;
                document.getElementById('transactionFee').textContent = '₦ 0'; // Set your own logic for transaction fees
                document.getElementById('totalAmountDue').textContent = `₦ ${courseFee}`; // Set your own logic for total due
                document.getElementById('payButton').textContent = `Pay ₦ ${courseFee}`;
            });

            function calculateCourseFee() {
                // Placeholder function to calculate the course fee
                return 50000; // Example course fee
            }
        });
    </script>
</body>

</html>
