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
    <style>
        :root {
            --primary-color: #4a6bff;
            --primary-hover: #3a56d4;
            --secondary-color: #2D3142;
            --accent-color: #00c9a7;
            --accent-hover: #00b395;
            --text-color: #2D3142;
            --light-bg: #f8fafc;
            --border-color: #e2e8f0;
            --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --card-shadow-hover: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Header Section */
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 40px 20px;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1600x900?technology,education,code') center/cover;
            opacity: 0.1;
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }

        .header p {
            font-size: 1.1rem;
            font-weight: 400;
            opacity: 0.9;
        }

        /* Form Container */
        .form-container {
            background: white;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-container:hover {
            box-shadow: var(--card-shadow-hover);
            transform: translateY(-2px);
        }

        .form-section {
            padding: 20px 0;
        }

        .form-section h3 {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
            font-size: 1.4rem;
        }

        .form-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 3px;
        }

        /* Form Elements */
        .form-control, .form-select {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(74, 107, 255, 0.15);
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--secondary-color);
            font-size: 0.95rem;
        }

        /* Radio and Checkbox */
        .form-check {
            margin-bottom: 12px;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            margin-top: 2px;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-check-label {
            margin-left: 5px;
            font-size: 0.95rem;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(74, 107, 255, 0.2);
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(74, 107, 255, 0.2);
        }

        .btn-accent {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-accent:hover {
            background-color: var(--accent-hover);
            border-color: var(--accent-hover);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 201, 167, 0.2);
        }

        /* Summary Section */
        .summary-section {
            padding: 25px;
            border-radius: 12px;
            background-color: white;
            box-shadow: var(--card-shadow);
        }

        .summary-section h3 {
            font-weight: 600;
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border-color);
        }

        .summary-item:last-child {
            border-bottom: none;
        }

        .summary-item label {
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .summary-value {
            font-weight: 600;
            color: var(--primary-color);
            font-size: 0.95rem;
        }

        /* Voucher Container */
        .voucher-container {
            background: var(--light-bg);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .voucher-container .input-group {
            border-radius: 8px;
            overflow: hidden;
        }

        .voucher-container .form-control {
            border-right: none;
        }

        .voucher-container .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        /* Policy Text */
        .student-policy-text {
            font-size: 0.9rem;
            background: var(--light-bg);
            padding: 15px;
            border-radius: 10px;
        }

        .student-policy-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .student-policy-link:hover {
            text-decoration: underline;
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
            flex-wrap: wrap;
        }

        .progress-steps::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--border-color);
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            background: white;
            padding: 8px 16px;
            border-radius: 20px;
            color: var(--secondary-color);
            font-weight: 500;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
            font-size: 0.9rem;
            margin-bottom: 10px;
            text-align: center;
            flex: 1;
            min-width: 120px;
            max-width: calc(33% - 20px);
        }

        .step.active {
            border-color: var(--primary-color);
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 4px 8px rgba(74, 107, 255, 0.2);
        }

        .step i {
            margin-right: 5px;
        }

        /* Payment Summary Highlights */
        .highlight-item {
            background: var(--light-bg);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .highlight-item .label {
            font-size: 0.9rem;
            color: var(--secondary-color);
            opacity: 0.8;
        }

        .highlight-item .value {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .header p {
                font-size: 1rem;
            }
            
            .step {
                min-width: 100px;
                font-size: 0.8rem;
                padding: 6px 12px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 30px 20px;
                margin-bottom: 30px;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
            
            .form-container {
                padding: 20px;
            }
            
            .form-section h3 {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }
            
            .progress-steps::before {
                display: none;
            }
            
            .step {
                max-width: 100%;
                width: 100%;
                margin-bottom: 5px;
                border-radius: 8px;
            }
            
            .summary-section {
                margin-top: 20px;
            }
            
            .btn, .btn-outline-primary, .btn-primary {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .header {
                padding: 25px 15px;
            }
            
            .header h1 {
                font-size: 1.5rem;
            }
            
            .form-container {
                padding: 15px;
            }
            
            .form-control, .form-select {
                padding: 10px 12px;
            }
            
            .d-flex.gap-4 {
                gap: 15px !important;
                flex-direction: column;
            }
            
            .summary-item {
                flex-direction: column;
            }
            
            .summary-item label {
                margin-bottom: 5px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
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
                            <input type="text" class="form-control" id="fullName" placeholder="Enter full name" required>
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
                            <label for="cohort" class="form-label">Cohort (Start Month)</label>
                            <select class="form-select" id="cohort" required>
                                <option value="" selected disabled>Select your Cohort</option>
                                <option value="January 2025">January 2025</option>
                                <option value="April 2025">April 2025</option>
                                <option value="July 2025">July 2025</option>
                                <option value="October 2025">October 2025</option>
                            </select>
                        </div>
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
                    </div>

                    <div class="row">
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
                const selectedCohort = document.getElementById('cohort').value;
                const paymentPlan = document.querySelector('input[name="paymentPlan"]:checked').value;
                const currency = document.querySelector('input[name="currency"]:checked').value;

                let courseFee = calculateCourseFee(currency);
                let amountToPay = paymentPlan === 'Full Payment' ? courseFee : courseFee / 2;
                let balanceToPay = paymentPlan === 'Full Payment' ? 0 : courseFee / 2;
                let transactionFee = currency === 'USDT/USDC' ? 0 : courseFee * 0.015; // 1.5% fee for NGN/USD

                document.getElementById('courseFee').textContent = `${currentCurrency}${numberWithCommas(courseFee)}`;
                document.getElementById('amountToPay').textContent = `${currentCurrency}${numberWithCommas(amountToPay)}`;
                document.getElementById('balanceToPay').textContent = `${currentCurrency}${numberWithCommas(balanceToPay)}`;
                document.getElementById('amountPayableNow').textContent = `${currentCurrency}${numberWithCommas(amountToPay)}`;
                document.getElementById('transactionFee').textContent = `${currentCurrency}${numberWithCommas(transactionFee)}`;
                document.getElementById('totalAmountDue').textContent = `${currentCurrency}${numberWithCommas(amountToPay + transactionFee)}`;
                document.getElementById('payButton').innerHTML = `<i class="fas fa-lock me-2"></i> Pay ${currentCurrency}${numberWithCommas(amountToPay + transactionFee)}`;
            }

            function calculateCourseFee(currency) {
                const fees = {
                    'NGN': 350000,
                    'USD': 600,
                    'USDT/USDC': 600
                };
                return fees[currency];
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
                document.getElementById('summaryCohort').textContent = document.getElementById('cohort').value || 'Not selected';
                document.getElementById('summaryClassFormat').textContent = document.querySelector('input[name="classFormat"]:checked').value || 'Not selected';
                document.getElementById('summaryPaymentPlan').textContent = document.querySelector('input[name="paymentPlan"]:checked').value || 'Not selected';
                document.getElementById('summaryCurrency').textContent = document.querySelector('input[name="currency"]:checked').value || 'Not selected';
                document.getElementById('summaryVoucher').textContent = document.getElementById('voucher').value || 'Not applied';
                
                // Update payment summary as well
                updatePaymentSummary();
            }

            // Voucher redemption
            document.getElementById('redeemVoucherButton').addEventListener('click', function() {
                const voucherCode = document.getElementById('voucher').value;
                if (voucherCode) {
                    alert(`Voucher "${voucherCode}" applied successfully!`);
                    // Here you would typically make an API call to validate the voucher
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
                // Here you would typically redirect to a payment processor
            });
        });
    </script>
</body>

</html>