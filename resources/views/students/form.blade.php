<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fredmind School - Admission Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('prod/cssFile.css') }}">
</head>

<body>
    <div class="container my-4">
        <!-- Header Section -->
        <div class="header rounded-3">
            <div class="header-content">
                <h1>Join Fredmind School</h1>
                <p>Complete your admission form to start your journey with us. It only takes a few minutes!</p>
            </div>
        </div>

        <!-- Progress Indicator -->
        <div class="progress-steps">
            <div class="step active">
                <i class="fas fa-user"></i> Personal Info
            </div>
            <div class="step">
                <i class="fas fa-book"></i> Course Selection
            </div>
            <div class="step">
                <i class="fas fa-file-invoice"></i> Summary
            </div>
        </div>

        <!-- 1. Personal Information Section -->
        <div class="form-container fade-in" id="personalInfoSection">
            <div class="form-section">
                <h3>
                    <i class="fas fa-user-edit me-2"></i>
                    Personal Information
                </h3>
                <form id="personalInfoForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholderresponsibility placeholder="Enter full name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="academicAchievement" class="form-label">Highest Academic Achievement</label>
                            <select class="form-select" id="academicAchievement" required>
                                <option value="" selected disabled>Select achievement</option>
                                <option value="High School">High School</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Master's Degree">Master's Degree</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="ageRange" class="form-label">Age Range</label>
                            <select class="form-select" id="ageRange" required>
                                <option value="" selected disabled>Select age range</option>
                                <option value="18-25">18-25</option>
                                <option value="26-35">26-35</option>
                                <option value="36-45">36-45</option>
                                <option value="46+">46+</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" required>
                                <option value="" selected disabled>Select country</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Ghana">Ghana</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" required>
                                <option value="" selected disabled>Select your state</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Abuja">Abuja</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="advisorId" class="form-label">Advisor ID (Optional)</label>
                            <input type="text" class="form-control" id="advisorId" placeholder="Enter Advisor ID">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-primary" id="nextToCourseSelection">
                            Next: Course Selection <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- 2. Course Selection and Payment Section -->
        <div class="form-container fade-in" id="courseSelectionSection" style="display: none;">
            <div class="form-section">
                <h3>
                    <i class="fas fa-book me-2"></i>
                    Course Selection
                </h3>
                <form id="courseSelectionForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="course" class="form-label">Choose Your Course</label>
                            <select class="form-select" id="course" required>
                                <option value="" selected disabled>Select course</option>
                                <option value="Frontend Engineering">Frontend Engineering</option>
                                <option value="Backend Engineering">Backend Engineering</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Data Analysis">Data Analysis</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cohort" class="form-label">Cohort (Start Month)</label>
                            <select class="form-select" id="cohort" required>
                                <option value="" selected disabled>Select your Cohort</option>
                                <option value="January 2025">January 2025</option>
                                <option value="April 2025">April 2025</option>
                                <option value="July 2025">July 2025</option>
                                <option value="October 2025">October 2025</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Class Format</label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="classFormat" id="virtualClass"
                                        value="Virtual Class" checked required>
                                    <label class="form-check-label" for="virtualClass">
                                        <i class="fas fa-laptop me-1"></i> Virtual Class
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="classFormat" id="physicalClass"
                                        value="Physical Class">
                                    <label class="form-check-label" for="physicalClass">
                                        <i class="fas fa-school me-1"></i> Physical Class
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Payment Plan</label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentPlan" id="fullPayment"
                                        value="Full Payment" checked required>
                                    <label class="form-check-label" for="fullPayment">
                                        <i class="fas fa-money-bill-wave me-1"></i> Full Payment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paymentPlan" id="partPayment"
                                        value="Part Payment">
                                    <label class="form-check-label" for="partPayment">
                                        <i class="fas fa-calendar-alt me-1"></i> Installments
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Payment Currency</label>
                            <div class="d-flex gap-4 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="currency" id="ngn" value="NGN" checked required>
                                    <label class="form-check-label" for="ngn">
                                        <i class="fas fa-naira-sign me-1"></i> NGN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="currency" id="usd" value="USD">
                                    <label class="form-check-label" for="usd">
                                        <i class="fas fa-dollar-sign me-1"></i> USD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="currency" id="crypto" value="USDT/USDC">
                                    <label class="form-check-label" for="crypto">
                                        <i class="fab fa-bitcoin me-1"></i> Crypto
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="voucher-container mb-3">
                        <label for="voucher" class="form-label">Have a discount voucher?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="voucher" placeholder="Enter voucher code">
                            <button class="btn btn-accent" type="button" id="redeemVoucherButton">
                                <i class="fas fa-ticket-alt me-1"></i> Apply
                            </button>
                        </div>
                    </div>
                    <div class="form-check student-policy-text mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="studentPolicyCheckbox" required>
                        <label class="form-check-label" for="studentPolicyCheckbox">
                            I agree to Fredmind School's <a href="#" class="student-policy-link">Terms of Service</a> and <a href="#" class="student-policy-link">Privacy Policy</a>.
                        </label>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button class="btn btn-outline-primary" id="backToPersonalInfo">
                            <i class="fas fa-arrow-left me-2"></i> Back
                        </button>
                        <button class="btn btn-primary" id="nextToSummary">
                            Continue to Summary <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- 3. Summary Section -->
        <div class="form-container fade-in" id="summarySection" style="display: none;">
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-section">
                        <h3>
                            <i class="fas fa-user me-2"></i>
                            Personal Information
                        </h3>
                        <div class="summary-item">
                            <label>Full Name:</label>
                            <span id="summaryFullName" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Email:</label>
                            <span id="summaryEmail" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Phone Number:</label>
                            <span id="summaryPhone" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Highest Education:</label>
                            <span id="summaryEducation" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Age Range:</label>
                            <span id="summaryAge" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Location:</label>
                            <span id="summaryLocation" class="summary-value">Not provided</span>
                        </div>
                        <div class="summary-item">
                            <label>Advisor ID:</label>
                            <span id="summaryAdvisor" class="summary-value">Not provided</span>
                        </div>
                        <h3 class="mt-4">
                            <i class="fas fa-book me-2"></i>
                            Course Selection
                        </h3>
                        <div class="summary-item">
                            <label>Course:</label>
                            <span id="summaryCourse" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Cohort:</label>
                            <span id="summaryCohort" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Class Format:</label>
                            <span id="summaryClassFormat" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Payment Plan:</label>
                            <span id="summaryPaymentPlan" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Currency:</label>
                            <span id="summaryCurrency" class="summary-value">Not selected</span>
                        </div>
                        <div class="summary-item">
                            <label>Voucher Code:</label>
                            <span id="summaryVoucher" class="summary-value">Not applied</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="summary-section">
                        <h3>
                            <i class="fas fa-file-invoice me-2"></i>
                            Payment Summary
                        </h3>
                        <div class="highlight-item">
                            <div class="label">Course Fee</div>
                            <div id="courseFee" class="value">₦ 0</div>
                        </div>
                        <div class="summary-item">
                            <label>Amount to Pay:</label>
                            <span id="amountToPay" class="summary-value">₦ 0</span>
                        </div>
                        <div class="summary-item">
                            <label>Balance to Pay:</label>
                            <span id="balanceToPay" class="summary-value">₦ 0</span>
                        </div>
                        <div class="highlight-item mt-4">
                            <div class="label">Amount Payable Now</div>
                            <div id="amountPayableNow" class="value" style="color: var(--accent-color);">₦ 0</div>
                        </div>
                        <div class="summary-item">
                            <label>Transaction Fee:</label>
                            <span id="transactionFee" class="summary-value">₦ 0</span>
                        </div>
                        <div class="highlight-item">
                            <div class="label">Total Amount Due</div>
                            <div id="totalAmountDue" class="value">₦ 0</div>
                        </div>
                        <button class="btn btn-primary w-100 mb-3 mt-3" id="payButton">
                            <i class="fas fa-lock me-2"></i>
                            Pay ₦ 0
                        </button>
                        <button class="btn btn-outline-primary w-100" id="contactSupportButton">
                            <i class="fas fa-headset me-2"></i>
                            Need Help?
                        </button>
                        <div class="d-flex justify-content-between mt-4 flex-wrap">
                            <button class="btn btn-outline-primary mb-2" id="backToCourseSelection">
                                <i class="fas fa-arrow-left me-2"></i> Back
                            </button>
                            <button class="btn btn-outline-primary mb-2" id="editPersonalInfo">
                                <i class="fas fa-edit me-2"></i> Edit Info
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation between sections
            document.getElementById('nextToCourseSelection').addEventListener('click', function(e) {
                e.preventDefault();
                const form = document.getElementById('personalInfoForm');
                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                    return;
                }
                document.getElementById('personalInfoSection').style.display = 'none';
                document.getElementById('courseSelectionSection').style.display = 'block';
                updateProgressSteps(2);
            });

            document.getElementById('backToPersonalInfo').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('courseSelectionSection').style.display = 'none';
                document.getElementById('personalInfoSection').style.display = 'block';
                updateProgressSteps(1);
            });

            document.getElementById('nextToSummary').addEventListener('click', function(e) {
                e.preventDefault();
                const form = document.getElementById('courseSelectionForm');
                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                    return;
                }
                document.getElementById('courseSelectionSection').style.display = 'none';
                document.getElementById('summarySection').style.display = 'block';
                updateSummaryDetails();
                updateProgressSteps(3);
            });

            document.getElementById('backToCourseSelection').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('summarySection').style.display = 'none';
                document.getElementById('courseSelectionSection').style.display = 'block';
                updateProgressSteps(2);
            });

            document.getElementById('editPersonalInfo').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('summarySection').style.display = 'none';
                document.getElementById('personalInfoSection').style.display = 'block';
                updateProgressSteps(1);
            });

            function updateProgressSteps(activeStep) {
                const steps = document.querySelectorAll('.step');
                steps.forEach((step, index) => {
                    if (index < activeStep) {
                        step.classList.add('active');
                    } else {
                        step.classList.remove('active');
                    }
                });
            }

            // Currency and payment calculations
            const currencyRadios = document.querySelectorAll('input[name="currency"]');
            let currentCurrency = '₦';

            // Currency symbols mapping
            const currencySymbols = {
                'NGN': '₦',
                'USD': '$',
                'USDT/USDC': 'USDT '
            };

            // Course fees in different currencies
            const courseFees = {
                'Frontend Engineering': {
                    'NGN': 400000,
                    'USD': 650,
                    'USDT/USDC': 650
                },
                'Backend Engineering': {
                    'NGN': 13000,
                    'USD': 700,
                    'USDT/USDC': 700
                },
                'Digital Marketing': {
                    'NGN': 100000,
                    'USD': 500,
                    'USDT/USDC': 500
                },
                'Data Analysis': {
                    'NGN': 100000,
                    'USD': 600,
                    'USDT/USDC': 600
                }
            };

            document.getElementById('courseSelectionForm').addEventListener('change', function() {
                updatePaymentSummary();
            });

            currencyRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    currentCurrency = currencySymbols[this.value];
                    updatePaymentSummary();
                });
            });

            function updatePaymentSummary() {
                const selectedCourse = document.getElementById('course').value;
                const selectedCohort = document.getElementById('cohort').value;
                const classFormat = document.querySelector('input[name="classFormat"]:checked').value;
                const paymentPlan = document.querySelector('input[name="paymentPlan"]:checked').value;
                const currency = document.querySelector('input[name="currency"]:checked').value;

                let courseFee = selectedCourse ? courseFees[selectedCourse][currency] : 0;
                // Adjust for class format: Virtual is 10% cheaper than Physical
                courseFee = classFormat === 'Virtual Class' ? courseFee * 0.9 : courseFee;
                let amountToPay = paymentPlan === 'Full Payment' ? courseFee : courseFee * 0.5;
                let balanceToPay = paymentPlan === 'Full Payment' ? 0 : courseFee * 0.5;
                let transactionFee = currency === 'USDT/USDC' ? 0 : courseFee * 0.015; // 1.5% fee for NGN/USD

                document.getElementById('courseFee').textContent = `${currentCurrency}${numberWithCommas(Math.round(courseFee))}`;
                document.getElementById('amountToPay').textContent = `${currentCurrency}${numberWithCommas(Math.round(amountToPay))}`;
                document.getElementById('balanceToPay').textContent = `${currentCurrency}${numberWithCommas(Math.round(balanceToPay))}`;
                document.getElementById('amountPayableNow').textContent = `${currentCurrency}${numberWithCommas(Math.round(amountToPay))}`;
                document.getElementById('transactionFee').textContent = `${currentCurrency}${numberWithCommas(Math.round(transactionFee))}`;
                document.getElementById('totalAmountDue').textContent = `${currentCurrency}${numberWithCommas(Math.round(amountToPay + transactionFee))}`;
                document.getElementById('payButton').innerHTML = `<i class="fas fa-lock me-2"></i> Pay ${currentCurrency}${numberWithCommas(Math.round(amountToPay + transactionFee))}`;
            }

            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            // Update summary details
            function updateSummaryDetails() {
                // Personal Information
                document.getElementById('summaryFullName').textContent = document.getElementById('fullName').value || 'Not provided';
                document.getElementById('summaryEmail').textContent = document.getElementById('email').value || 'Not provided';
                document.getElementById('summaryPhone').textContent = document.getElementById('phoneNumber').value || 'Not provided';
                document.getElementById('summaryEducation').textContent = document.getElementById('academicAchievement').value || 'Not provided';
                document.getElementById('summaryAge').textContent = document.getElementById('ageRange').value || 'Not provided';
                const country = document.getElementById('country').value;
                const state = document.getElementById('state').value;
                document.getElementById('summaryLocation').textContent = `${state ? state + ', ' : ''}${country || 'Not provided'}`;
                document.getElementById('summaryAdvisor').textContent = document.getElementById('advisorId').value || 'Not provided';
                // Course Selection
                document.getElementById('summaryCourse').textContent = document.getElementById('course').value || 'Not selected';
                document.getElementById('summaryCohort').textContent = document.getElementById('cohort').value || 'Not selected';
                document.getElementById('summaryClassFormat').textContent = document.querySelector('input[name="classFormat"]:checked').value || 'Not selected';
                document.getElementById('summaryPaymentPlan').textContent = document.querySelector('input[name="paymentPlan"]:checked').value || 'Not selected';
                document.getElementById('summaryCurrency').textContent = document.querySelector('input[name="currency"]:checked').value || 'Not selected';
                document.getElementById('summaryVoucher').textContent = document.getElementById('voucher').value || 'Not applied';
                // Update payment summary
                updatePaymentSummary();
            }

            // Voucher redemption
            document.getElementById('redeemVoucherButton').addEventListener('click', function() {
                const voucherCode = document.getElementById('voucher').value;
                if (voucherCode) {
                    alert(`Voucher "${voucherCode}" applied successfully!`);
                } else {
                    alert('Please enter a voucher code');
                }
            });

            // Contact support button
            document.getElementById('contactSupportButton').addEventListener('click', function() {
                alert('Our support team will contact you shortly. For immediate assistance, please call +234 123 456 7890');
            });

            // Pay button
            document.getElementById('payButton').addEventListener('click', function() {
                alert('Redirecting to secure payment gateway...');
            });
        });
    </script>
</body>

</html>