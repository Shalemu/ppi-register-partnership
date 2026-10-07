@extends('layouts.app')

@section('content')

<!DOCTYPE html>

<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PPI Membership & Child Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --ppi-navy: #102A43;
        --ppi-blue: #1769AA;
        --ppi-blue-dark: #0D4778;
        --ppi-gold: #D6A84F;
        --ppi-gold-light: #F6E8C5;

        --text: #172B4D;
        --muted: #6B7C93;
        --border: #E5EAF0;
        --surface: #FFFFFF;
        --background: #F5F7FA;
        --success: #16825D;
        --danger: #D64545;

        --shadow-sm: 0 4px 18px rgba(16, 42, 67, .06);
        --shadow-md: 0 12px 40px rgba(16, 42, 67, .09);
        --shadow-lg: 0 24px 70px rgba(16, 42, 67, .12);
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background: var(--background);
        color: var(--text);
        font-family: 'Inter', sans-serif;
    }

    /* =========================================
       PAGE
    ========================================= */

    .ppi-page {
        min-height: 100vh;
        padding: 40px 20px 70px;
    }

    .ppi-container {
        max-width: 1240px;
        margin: auto;
    }

    /* =========================================
       TOP BRAND HEADER
    ========================================= */

    .ppi-header {
        background: var(--ppi-navy);
        border-radius: 22px;
        padding: 26px 32px;
        color: white;
        margin-bottom: 22px;
        box-shadow: var(--shadow-lg);
        position: relative;
        overflow: hidden;
    }

    .ppi-header::after {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        border-radius: 50%;
        border: 1px solid rgba(255,255,255,.08);
        right: -100px;
        top: -140px;
    }

    .ppi-brand {
        display: flex;
        align-items: center;
        gap: 18px;
        position: relative;
        z-index: 2;
    }

    .ppi-logo {
        width: 62px;
        height: 62px;
        border-radius: 16px;
        background: white;
        color: var(--ppi-navy);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        font-weight: 800;
        letter-spacing: -1px;
        box-shadow: 0 8px 20px rgba(0,0,0,.15);
    }

    .ppi-brand h1 {
        font-family: 'Manrope', sans-serif;
        font-size: 23px;
        font-weight: 800;
        margin: 0;
        letter-spacing: -.5px;
    }

    .ppi-brand p {
        margin: 5px 0 0;
        font-size: 13px;
        color: rgba(255,255,255,.72);
    }

    .ppi-registration {
        margin-left: auto;
        text-align: right;
        font-size: 12px;
        color: rgba(255,255,255,.7);
        position: relative;
        z-index: 2;
    }

    .ppi-registration strong {
        display: block;
        color: white;
        font-size: 13px;
        margin-bottom: 3px;
    }

    /* =========================================
       INTRO CARD
    ========================================= */

    .intro-card {
        background: white;
        border: 1px solid var(--border);
        border-radius: 18px;
        padding: 24px 28px;
        margin-bottom: 22px;
        box-shadow: var(--shadow-sm);
    }

    .intro-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 25px;
    }

    .intro-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: #EEF6FD;
        color: var(--ppi-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }

    .intro-text {
        flex: 1;
    }

    .intro-text h2 {
        font-family: 'Manrope', sans-serif;
        font-size: 18px;
        font-weight: 800;
        margin: 0 0 5px;
    }

    .intro-text p {
        margin: 0;
        font-size: 13px;
        line-height: 1.7;
        color: var(--muted);
    }

    .instruction-buttons {
        display: flex;
        gap: 8px;
        flex-shrink: 0;
    }

    .instruction-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 11px 15px;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: all .2s ease;
    }

    .instruction-primary {
        background: var(--ppi-navy);
        color: white;
    }

    .instruction-primary:hover {
        background: var(--ppi-blue-dark);
        color: white;
        transform: translateY(-1px);
    }

    .instruction-secondary {
        background: #F4F6F8;
        color: var(--ppi-navy);
        border: 1px solid var(--border);
    }

    .instruction-secondary:hover {
        background: #E9EEF3;
        color: var(--ppi-navy);
    }

    /* =========================================
       MAIN CARD
    ========================================= */

    .form-card {
        background: white;
        border: 1px solid var(--border);
        border-radius: 22px;
        overflow: hidden;
        box-shadow: var(--shadow-md);
    }

    /* =========================================
       PROGRESS HEADER
    ========================================= */

    .form-header {
        padding: 28px 32px 24px;
        border-bottom: 1px solid var(--border);
    }

    .form-header-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .form-header h2 {
        font-family: 'Manrope', sans-serif;
        font-size: 21px;
        font-weight: 800;
        margin: 0 0 5px;
    }

    .form-header p {
        margin: 0;
        color: var(--muted);
        font-size: 13px;
    }

    .progress-label {
        font-size: 12px;
        font-weight: 700;
        color: var(--ppi-blue);
    }

    .progress-track {
        height: 5px;
        background: #EDF1F5;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 24px;
    }

    .progress-fill {
        height: 100%;
        width: 0%;
        background: var(--ppi-blue);
        border-radius: 20px;
        transition: width .35s ease;
    }

    /* =========================================
       STEPS
    ========================================= */

    .steps {
        display: flex;
        justify-content: space-between;
        position: relative;
        gap: 8px;
    }

    .steps::before {
        content: "";
        position: absolute;
        top: 18px;
        left: 9%;
        right: 9%;
        height: 1px;
        background: #DDE3EA;
        z-index: 0;
    }

    .step {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        background: white;
        min-width: 80px;
    }

    .step-number {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: white;
        border: 1px solid #D9E0E7;
        color: #8A99A8;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 800;
        transition: all .25s ease;
    }

    .step-title {
        font-size: 10px;
        font-weight: 700;
        color: #8997A6;
        text-align: center;
        white-space: nowrap;
    }

    .step.active .step-number {
        background: var(--ppi-blue);
        border-color: var(--ppi-blue);
        color: white;
        box-shadow: 0 5px 14px rgba(23,105,170,.25);
    }

    .step.active .step-title {
        color: var(--ppi-blue);
    }

    .step.completed .step-number {
        background: var(--ppi-navy);
        border-color: var(--ppi-navy);
        color: white;
    }

    /* =========================================
       FORM BODY
    ========================================= */

    .form-body {
        padding: 34px 36px 30px;
        min-height: 450px;
    }

    .step-content {
        display: none;
        animation: fadeIn .3s ease;
    }

    .step-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section-heading {
        display: flex;
        align-items: flex-start;
        gap: 13px;
        margin-bottom: 28px;
    }

    .section-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: #EEF6FD;
        color: var(--ppi-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .section-heading h3 {
        font-family: 'Manrope', sans-serif;
        font-size: 17px;
        font-weight: 800;
        margin: 0 0 4px;
    }

    .section-heading p {
        margin: 0;
        color: var(--muted);
        font-size: 12px;
    }

    /* =========================================
       INPUTS
    ========================================= */

    .form-label {
        font-size: 12px;
        font-weight: 700;
        color: #334E68;
        margin-bottom: 7px;
    }

    .required-star {
        color: var(--danger);
    }

    .form-control,
    .form-select {
        border: 1px solid #DCE3EA;
        border-radius: 10px;
        min-height: 46px;
        padding: 10px 13px;
        color: var(--text);
        font-size: 13px;
        background: white;
        transition: all .2s ease;
    }

    textarea.form-control {
        min-height: 100px;
        resize: vertical;
    }

    .form-control:hover,
    .form-select:hover {
        border-color: #B9C6D3;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--ppi-blue);
        box-shadow: 0 0 0 3px rgba(23,105,170,.08);
    }

    .form-hint {
        margin-top: 6px;
        color: #8A99A8;
        font-size: 11px;
    }

    /* =========================================
       MULTI SELECT
    ========================================= */

    select[multiple].form-select {
        min-height: 145px;
        padding: 7px;
    }

    select[multiple].form-select option {
        padding: 9px 10px;
        border-radius: 7px;
        margin: 2px 0;
    }

    select[multiple].form-select option:checked {
        background: var(--ppi-blue);
        color: white;
    }

    /* =========================================
       INFO BOX
    ========================================= */

    .payment-card {
        background: #FAF8F2;
        border: 1px solid #EAD9B4;
        border-radius: 15px;
        padding: 20px;
        margin: 20px 0;
    }

    .payment-header {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #806021;
        font-weight: 800;
        font-size: 13px;
        margin-bottom: 15px;
    }

    .payment-header i {
        font-size: 19px;
    }

    .payment-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    .payment-item {
        background: white;
        border: 1px solid #EDE3CC;
        border-radius: 10px;
        padding: 13px;
    }

    .payment-item small {
        display: block;
        color: #8C7B5B;
        font-size: 10px;
        margin-bottom: 3px;
    }

    .payment-item strong {
        font-size: 13px;
        color: #4E3A15;
    }

    /* =========================================
       CONSENT
    ========================================= */

    .consent-box {
        border: 1px solid var(--border);
        border-radius: 13px;
        padding: 16px;
        background: #FAFBFC;
    }

    .custom-check {
        display: flex;
        gap: 10px;
        align-items: flex-start;
        cursor: pointer;
    }

    .custom-check input {
        width: 18px;
        height: 18px;
        margin-top: 1px;
        accent-color: var(--ppi-blue);
        flex-shrink: 0;
    }

    .custom-check span {
        font-size: 12px;
        line-height: 1.6;
        color: #52667A;
    }

    /* =========================================
       REVIEW
    ========================================= */

    .review-card {
        border: 1px solid var(--border);
        border-radius: 15px;
        overflow: hidden;
    }

    .review-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        padding: 14px 17px;
        border-bottom: 1px solid #EDF0F3;
    }

    .review-row:last-child {
        border-bottom: 0;
    }

    .review-label {
        font-size: 11px;
        color: var(--muted);
    }

    .review-value {
        font-size: 12px;
        font-weight: 700;
        color: var(--text);
        text-align: right;
    }


    .action-buttons {
        display: flex;
        gap: 9px;
    }

    .btn-ppi {
        min-height: 43px;
        padding: 9px 18px;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 700;
        border: 0;
        transition: all .2s ease;
    }

    .btn-back {
        background: white;
        color: #52667A;
        border: 1px solid #DCE3EA;
    }

    .btn-back:hover {
        background: #F4F6F8;
    }

    .btn-next {
        background: var(--ppi-navy);
        color: white;
        box-shadow: 0 5px 15px rgba(16,42,67,.16);
    }

    .btn-next:hover {
        background: var(--ppi-blue-dark);
        color: white;
        transform: translateY(-1px);
    }

    .btn-submit {
        background: var(--success);
        color: white;
        box-shadow: 0 5px 15px rgba(22,130,93,.18);
    }

    .btn-submit:hover {
        background: #116C4D;
        color: white;
        transform: translateY(-1px);
    }

    /* =========================================
       DOWNLOAD AGREEMENT
    ========================================= */

    .instruction-check {
        background: #F8FAFC;
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 13px 15px;
        margin-top: 22px;
    }

    .instruction-check label {
        display: flex;
        align-items: center;
        gap: 9px;
        font-size: 11px;
        font-weight: 600;
        color: #52667A;
        cursor: pointer;
    }

    .instruction-check input {
        width: 17px;
        height: 17px;
        accent-color: var(--ppi-blue);
    }

    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 768px) {

        .ppi-page {
            padding: 15px 10px 40px;
        }

        .ppi-header {
            padding: 22px;
            border-radius: 17px;
        }

        .ppi-brand {
            align-items: flex-start;
        }

        .ppi-brand h1 {
            font-size: 17px;
        }

        .ppi-brand p {
            font-size: 11px;
        }

        .ppi-registration {
            display: none;
        }

        .ppi-logo {
            width: 50px;
            height: 50px;
            font-size: 16px;
        }

        .intro-card {
            padding: 18px;
        }

        .intro-inner {
            align-items: flex-start;
            flex-direction: column;
        }

        .instruction-buttons {
            width: 100%;
        }

        .instruction-btn {
            flex: 1;
            justify-content: center;
        }

        .form-header {
            padding: 22px 18px;
        }

        .form-body {
            padding: 26px 18px;
        }

        .form-footer {
            padding: 18px;
        }

        .steps {
            overflow-x: auto;
            justify-content: flex-start;
            padding-bottom: 4px;
        }

        .steps::before {
            display: none;
        }

        .step {
            min-width: 65px;
        }

        .step-title {
            font-size: 9px;
        }

        .payment-grid {
            grid-template-columns: 1fr;
        }

        .form-footer {
            flex-direction: column;
            gap: 15px;
            align-items: stretch;
        }

        .footer-note {
            text-align: center;
        }

        .action-buttons {
            width: 100%;
        }

        .action-buttons button {
            flex: 1;
        }
    }
</style>


</head>

<body>

<div class="ppi-page">


<div class="ppi-container">

    {{-- ==========================================
         HEADER
    =========================================== --}}
    <div class="ppi-header">

        <div class="ppi-brand">

            <div class="ppi-logo">
                PPI
            </div>

            <div>
                <h1>POTENTIAL PIONEERS INITIATIVES</h1>

                <p>
                    Kufungua Uwezo. Kujenga Ujuzi.
                    Kujenga Maisha Yenye Kusudi.
                </p>
            </div>

            <div class="ppi-registration">
                <strong>Usajili wa Mtoto</strong>
                00NGO/R/8334
                <br>
                www.ppi.or.tz
            </div>

        </div>

    </div>


    {{-- ==========================================
         INTRODUCTION
    =========================================== --}}
    <div class="intro-card">

        <div class="intro-inner">

            <div class="intro-icon">
                <i class="bi bi-info-circle"></i>
            </div>

            <div class="intro-text">

                <h2>
                    Fomu ya Uanachama na Usajili wa Mtoto
                </h2>

                <p>
                    Jaza fomu hii kwa usahihi ili mtoto aweze
                    kusajiliwa katika programu zinazofaa za PPI.
                    Tafadhali soma maelekezo kabla ya kuanza.
                </p>

            </div>

            <div class="instruction-buttons">

                <a
                    href="{{ route('partnership.instructions', ['lang' => 'sw']) }}"
                    class="instruction-btn instruction-primary"
                >
                    <i class="bi bi-file-earmark-pdf"></i>
                    Maelekezo (SW)
                </a>

                <a
                    href="{{ route('partnership.instructions', ['lang' => 'en']) }}"
                    class="instruction-btn instruction-secondary"
                >
                    <i class="bi bi-download"></i>
                    English
                </a>

            </div>

        </div>

        <div class="instruction-check">

            <label>

                <input
                    type="checkbox"
                    id="agreePdf"
                >

                Nimesoma na nimeelewa maelekezo ya usajili
                kabla ya kuendelea.

            </label>

        </div>

    </div>


    {{-- ==========================================
         FORM
    =========================================== --}}
    <div class="form-card">

        {{-- HEADER --}}
        <div class="form-header">

            <div class="form-header-top">

                <div>

                    <h2>
                        Usajili wa Mtoto
                    </h2>

                    <p>
                        Tafadhali jaza taarifa zote zinazohitajika.
                    </p>

                </div>

                <div class="progress-label">
                    <span id="progressPct">0%</span>
                </div>

            </div>


            <div class="progress-track">
                <div
                    class="progress-fill"
                    id="progressBar"
                ></div>
            </div>


            <div class="steps">

                <div class="step active">

                    <div class="step-number">
                        1
                    </div>

                    <div class="step-title">
                        Mtoto
                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        2
                    </div>

                    <div class="step-title">
                        Mzazi/Mlezi
                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        3
                    </div>

                    <div class="step-title">
                        Uanachama
                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        4
                    </div>

                    <div class="step-title">
                        Dharura
                    </div>

                </div>


                <div class="step">

                    <div class="step-number">
                        5
                    </div>

                    <div class="step-title">
                        Ukaguzi
                    </div>

                </div>

            </div>

        </div>


        {{-- FORM BODY --}}
        <div class="form-body">

            <form
                method="POST"
                action="{{ route('partnership.store') }}"
                id="ppiForm"
            >

                @csrf
                <input type="hidden" name="type" value="membership">

                {{-- ==================================
                     STEP 1
                =================================== --}}
                <div
                    class="step-content active"
                    data-step="0"
                >

                    <div class="section-heading">

                        <div class="section-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>

                            <h3>
                                Sehemu A: Taarifa za Mtoto
                            </h3>

                            <p>
                                Taarifa za msingi za mtoto anayesajiliwa.
                            </p>

                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Jina kamili la mtoto
                            <span class="required-star">*</span>
                        </label>

                        <input
                            name="child_full_name"
                            class="form-control"
                            placeholder="Mfano: Amani Juma Hassan"
                            required
                        >

                    </div>


                    <div class="row">

                        <div class="col-md-5 mb-4">

                            <label class="form-label">
                                Tarehe ya kuzaliwa
                            </label>

                            <input
                                type="date"
                                name="dob"
                                class="form-control"
                            >

                        </div>


                        <div class="col-md-3 mb-4">

                            <label class="form-label">
                                Umri
                            </label>

                            <input
                                type="number"
                                name="age"
                                class="form-control"
                                placeholder="Miaka"
                            >

                        </div>


                        <div class="col-md-4 mb-4">

                            <label class="form-label">
                                Jinsia
                            </label>

                            <select
                                name="gender"
                                class="form-select"
                            >

                                <option value="">
                                    -- Chagua jinsia --
                                </option>

                                <option value="male">
                                    Mvulana
                                </option>

                                <option value="female">
                                    Msichana
                                </option>

                            </select>

                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Jina la shule
                        </label>

                        <input
                            name="school"
                            class="form-control"
                            placeholder="Jina la shule anayohudhuria"
                        >

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Maslahi / Maeneo anayopenda
                        </label>

                        <select
                            name="interests[]"
                            class="form-select"
                            multiple
                        >

                            <option value="Michezo">
                                Michezo
                            </option>

                            <option value="Muziki">
                                Muziki
                            </option>

                            <option value="Ngoma">
                                Ngoma
                            </option>

                            <option value="Uigizaji">
                                Uigizaji
                            </option>

                            <option value="Sanaa">
                                Sanaa na Ubunifu
                            </option>

                            <option value="Ujasiriamali">
                                Ujasiriamali
                            </option>

                            <option value="AI">
                                AI na Ujuzi wa Kidijitali
                            </option>

                        </select>

                        <div class="form-hint">
                            Shikilia CTRL/CMD kuchagua zaidi ya eneo moja.
                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Kipaji / Ujuzi
                        </label>

                        <textarea
                            name="talent"
                            class="form-control"
                            placeholder="Eleza kwa kifupi kipaji au ujuzi wa mtoto..."
                        ></textarea>

                    </div>


                    <div class="mb-2">

                        <label class="form-label">
                            Malengo ya ukuaji
                        </label>

                        <textarea
                            name="aspiration"
                            class="form-control"
                            placeholder="Mtoto angependa kujifunza au kufikia nini?"
                        ></textarea>

                    </div>

                </div>


                {{-- ==================================
                     STEP 2
                =================================== --}}
                <div
                    class="step-content"
                    data-step="1"
                >

                    <div class="section-heading">

                        <div class="section-icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <div>

                            <h3>
                                Sehemu B: Taarifa za Mzazi / Mlezi
                            </h3>

                            <p>
                                Taarifa za mtu anayehusika na mtoto.
                            </p>

                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Jina kamili la mzazi/mlezi
                            <span class="required-star">*</span>
                        </label>

                        <input
                            name="parent_full_name"
                            class="form-control"
                            placeholder="Jina kamili"
                            required
                        >

                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-4">

                            <label class="form-label">
                                Uhusiano na mtoto
                            </label>

                            <select
                                name="relationship"
                                class="form-select"
                            >

                                <option value="">
                                    -- Chagua --
                                </option>

                                <option value="father">
                                    Baba
                                </option>

                                <option value="mother">
                                    Mama
                                </option>

                                <option value="guardian">
                                    Mlezi
                                </option>

                                <option value="other">
                                    Mwingine
                                </option>

                            </select>

                        </div>


                        <div class="col-md-6 mb-4">

                            <label class="form-label">
                                Namba ya simu
                                <span class="required-star">*</span>
                            </label>

                            <input
                                name="parent_phone"
                                type="tel"
                                class="form-control"
                                placeholder="07XX XXX XXX"
                                required
                            >

                        </div>

                    </div>


                    <div class="mb-2">

                        <label class="form-label">
                            Anwani ya barua pepe
                        </label>

                        <input
                            name="parent_email"
                            type="email"
                            class="form-control"
                            placeholder="mfano@email.com"
                        >

                    </div>

                </div>


                {{-- ==================================
                     STEP 3
                =================================== --}}
                <div
                    class="step-content"
                    data-step="2"
                >

                    <div class="section-heading">

                        <div class="section-icon">
                            <i class="bi bi-card-checklist"></i>
                        </div>

                        <div>

                            <h3>
                                Sehemu C/D: Uanachama & Ada
                            </h3>

                            <p>
                                Tafadhali soma taarifa za uanachama na ada.
                            </p>

                        </div>

                    </div>


                    <div class="payment-card">

                        <div class="payment-header">

                            <i class="bi bi-wallet2"></i>

                            Taarifa za Malipo ya Uanachama

                        </div>


                        <div class="payment-grid">

                            <div class="payment-item">

                                <small>
                                    Ada ya mwezi
                                </small>

                                <strong>
                                    TZS 20,000
                                </strong>

                            </div>


                            <div class="payment-item">

                                <small>
                                    Benki
                                </small>

                                <strong>
                                    NMB
                                </strong>

                            </div>


                            <div class="payment-item">

                                <small>
                                    Namba ya akaunti
                                </small>

                                <strong>
                                    23710057443
                                </strong>

                            </div>

                        </div>

                    </div>


                    <div class="consent-box mb-4">

                        <label class="custom-check">

                            <input
                                type="checkbox"
                                name="agreement"
                                value="1"
                                required
                            >

                            <span>
                                Ninaelewa na ninakubali mtoto wangu
                                asajiliwe katika uanachama/programu
                                zinazofaa za PPI.
                            </span>

                        </label>

                    </div>


                    <div>

                        <label class="form-label">
                            Maelezo ya ziada kuhusu ridhaa
                        </label>

                        <textarea
                            name="consent"
                            class="form-control"
                            placeholder="Maelezo yoyote ya ziada..."
                        ></textarea>

                    </div>

                </div>


                {{-- ==================================
                     STEP 4
                =================================== --}}
                <div
                    class="step-content"
                    data-step="3"
                >

                    <div class="section-heading">

                        <div class="section-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>

                            <h3>
                                Sehemu H: Mtu wa Dharura
                            </h3>

                            <p>
                                Taarifa za mtu wa kuwasiliana naye wakati wa dharura.
                            </p>

                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Jina la mtu wa dharura
                        </label>

                        <input
                            name="emergency_name"
                            class="form-control"
                            placeholder="Jina kamili"
                        >

                    </div>


                    <div class="mb-2">

                        <label class="form-label">
                            Namba ya simu
                        </label>

                        <input
                            name="emergency_phone"
                            type="tel"
                            class="form-control"
                            placeholder="07XX XXX XXX"
                        >

                    </div>

                </div>


                {{-- ==================================
                     STEP 5
                =================================== --}}
                <div
                    class="step-content"
                    data-step="4"
                >

                    <div class="section-heading">

                        <div class="section-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>

                            <h3>
                                Ukaguzi wa Mwisho
                            </h3>

                            <p>
                                Hakikisha taarifa zako ni sahihi kabla ya kutuma.
                            </p>

                        </div>

                    </div>


                    <div class="review-card mb-4">

                        <div class="review-row">

                            <span class="review-label">
                                Hatua
                            </span>

                            <span class="review-value">
                                Taarifa za mtoto
                            </span>

                        </div>

                        <div class="review-row">

                            <span class="review-label">
                                Taarifa za mzazi/mlezi
                            </span>

                            <span class="review-value">
                                Zimejazwa
                            </span>

                        </div>

                        <div class="review-row">

                            <span class="review-label">
                                Uanachama
                            </span>

                            <span class="review-value">
                                TZS 20,000 / mwezi
                            </span>

                        </div>

                        <div class="review-row">

                            <span class="review-label">
                                Benki
                            </span>

                            <span class="review-value">
                                NMB
                            </span>

                        </div>

                    </div>


                    <div class="consent-box">

                        <label class="custom-check">

                            <input
                                type="checkbox"
                                name="final_check"
                                id="final_check"
                                required
                            >

                            <span>
                                Nimehakiki taarifa zote nilizoingiza,
                                na ninathibitisha kuwa taarifa hizo ni
                                sahihi kwa kadiri ya uelewa wangu.
                            </span>

                        </label>

                    </div>

                </div>

            </form>

        </div>


        {{-- ==========================================
             FOOTER
        =========================================== --}}
        <div class="form-footer">

            <div class="footer-note">

                <i class="bi bi-lock me-1"></i>

                Taarifa zako zitatumika kwa madhumuni ya usajili wa PPI.

            </div>

            <div class="action-buttons">

                <button
                    type="button"
                    id="prevBtn"
                    class="btn-ppi btn-back"
                >
                    <i class="bi bi-arrow-left me-1"></i>
                    Rudi
                </button>

                <button
                    type="button"
                    id="nextBtn"
                    class="btn-ppi btn-next"
                >
                    Endelea
                    <i class="bi bi-arrow-right ms-1"></i>
                </button>

                <button
                    type="submit"
                    form="ppiForm"
                    id="submitBtn"
                    class="btn-ppi btn-submit"
                    style="display:none;"
                >
                    <i class="bi bi-check2-circle me-1"></i>
                    Tuma Fomu
                </button>

            </div>

        </div>

    </div>

</div>


</div>

<script>

(() => {

    const steps = Array.from(
        document.querySelectorAll('.step')
    );

    const contents = Array.from(
        document.querySelectorAll('.step-content')
    );

    const prev = document.getElementById('prevBtn');
    const next = document.getElementById('nextBtn');
    const submit = document.getElementById('submitBtn');

    const form = document.getElementById('ppiForm');

    const progressBar =
        document.getElementById('progressBar');

    const progressPct =
        document.getElementById('progressPct');

    const agreePdf =
        document.getElementById('agreePdf');

    let idx = 0;


    function setActive(i) {

        steps.forEach((step, index) => {

            step.classList.toggle(
                'active',
                index === i
            );

            step.classList.toggle(
                'completed',
                index < i
            );

        });


        contents.forEach((content, index) => {

            content.classList.toggle(
                'active',
                index === i
            );

        });


        prev.style.display =
            i === 0
                ? 'none'
                : 'inline-block';


        next.style.display =
            i === steps.length - 1
                ? 'none'
                : 'inline-block';


        submit.style.display =
            i === steps.length - 1
                ? 'inline-block'
                : 'none';


        const pct =
            Math.round(
                (i / (steps.length - 1)) * 100
            );


        progressBar.style.width =
            pct + '%';

        progressPct.textContent =
            pct + '%';


        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }


    function validateCurrentStep() {

        const required =
            contents[idx].querySelectorAll('[required]');


        for (const field of required) {

            if (
                !field.checkValidity()
            ) {

                field.reportValidity();

                field.focus();

                return false;

            }

        }

        return true;

    }


    prev.addEventListener(
        'click',
        () => {

            if (idx > 0) {

                idx--;

                setActive(idx);

            }

        }
    );


    next.addEventListener(
        'click',
        () => {

            if (!validateCurrentStep()) {
                return;
            }

            if (
                idx <
                contents.length - 1
            ) {

                idx++;

                setActive(idx);

            }

        }
    );


    form.addEventListener(
        'submit',
        (event) => {

            const finalCheck =
                document.getElementById(
                    'final_check'
                );

            if (
                !finalCheck.checked
            ) {

                event.preventDefault();

                alert(
                    'Tafadhali thibitisha kuwa umehakiki taarifa zote kabla ya kutuma fomu.'
                );

                finalCheck.focus();

            }

        }
    );


    agreePdf.addEventListener(
        'change',
        () => {

            if (agreePdf.checked) {

                agreePdf.parentElement.style.color =
                    '#16825D';

            } else {

                agreePdf.parentElement.style.color =
                    '';

            }

        }
    );


    setActive(0);

})();

</script>

</body>
</html>
@endsection
