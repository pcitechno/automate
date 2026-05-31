<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIR Commission Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600;700&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* ── CSS Variables ──────────────────────────────────── */
        :root {
            --pink:  #f20f79;
            --blue:  #1a6fff;
            --dark:  #0a0f1e;
            --mid:   #142040;
            --border: rgba(255,255,255,0.12);
        }

        /* ── Base ───────────────────────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            overflow-x: hidden;
            color: #fff;
            background: linear-gradient(315deg, rgb(100,1,94) 10%, rgba(0,123,255,1) 58%, rgba(242,15,121,1) 68%, rgba(15,32,39,1) 98%);
            background-size: 210% 210%;
            background-attachment: fixed;
            animation: bgShift 40s ease infinite;
            will-change: background-position;
        }
        @keyframes bgShift {
            0%   { background-position: 0% 0%; }
            50%  { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }

        /* ── Waves ──────────────────────────────────────────── */
        .wave {
            background: rgb(255 255 255 / 20%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%; height: 12em;
            animation: wave 10s -3s linear infinite;
            transform: translate3d(0,0,0);
            will-change: transform;
            opacity: 0.7;
            bottom: 0; left: 0; z-index: -1;
        }
        .wave:nth-of-type(2) { bottom:-1.25em; animation: wave 18s linear reverse infinite; }
        .wave:nth-of-type(3) { bottom:-2.5em;  animation: wave 20s -1s reverse infinite; opacity:0.85; }
        @keyframes wave {
            0%,100% { transform: translateX(0); }
            25%      { transform: translateX(-25%); }
            50%      { transform: translateX(-50%); }
            75%      { transform: translateX(-25%); }
        }

        /* ── Sidebar ────────────────────────────────────────── */
        .sidebar {
            height: 100vh; width: 250px;
            background: linear-gradient(145deg, #0f2027, #203a43, #f20f79);
            position: fixed; top:0; left:0;
            padding: 60px 20px; font-size: 17px;
            box-shadow: 2px 0 15px rgba(0,0,0,0.5);
            transition: width 0.3s ease-in-out;
            overflow: hidden;
        }
        .sidebar a {
            color: #ecf0f1; text-decoration: none;
            display: flex; align-items: center;
            margin: 10px 0; padding: 7px;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.3s ease;
            font-size: 18px; letter-spacing: 0.6px;
        }
        .sidebar a i { margin-right: 10px; font-size: 20px; transition: transform 0.3s; }
        .sidebar a:hover { background: rgba(255,255,255,0.1); box-shadow: 0 0 15px rgba(255,255,255,0.3); transform: translateX(10px); }
        .sidebar a:hover i { transform: rotate(360deg); }
        .control-center-heading {
            color: #8f8d8d; text-align: center; font-size: 18px; font-weight: 500;
            padding: 10px; margin: 30px 0 20px;
            background: linear-gradient(145deg, #0f2027, #203a43, #0f2027);
            border-radius: 8px; box-shadow: 0 4px 6px rgba(75,74,74,0.3);
            text-transform: uppercase; letter-spacing: 1.5px;
        }

        /* ── Main ───────────────────────────────────────────── */
        .main-content { margin-left: 260px; padding: 24px 28px; }

        /* ══════════════════════════════════════════════════════
           HERO HEADER
        ══════════════════════════════════════════════════════ */
        .hero-header {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            margin-bottom: 24px;
            background: linear-gradient(135deg, #0a0f1e 0%, #142040 50%, #1a0a2e 100%);
            box-shadow: 0 20px 60px rgba(0,0,0,0.5), 0 0 0 1px var(--border);
        }
        .hero-header::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse 60% 80% at 15% 50%, rgba(242,15,121,0.25) 0%, transparent 70%),
                radial-gradient(ellipse 50% 70% at 85% 50%, rgba(26,111,255,0.2) 0%, transparent 70%);
            animation: blobPulse 6s ease-in-out infinite alternate;
        }
        @keyframes blobPulse {
            0%   { opacity: 0.7; transform: scale(1); }
            100% { opacity: 1;   transform: scale(1.05); }
        }
        .hero-header::after {
            content: '';
            position: absolute;
            top: -40%; right: -5%;
            width: 45%; height: 200%;
            background: linear-gradient(180deg, rgba(242,15,121,0.08), rgba(26,111,255,0.06));
            transform: rotate(-12deg);
            pointer-events: none;
        }

        .hero-inner {
            position: relative; z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 28px 36px;
        }

        /* Left */
        .hero-left { display: flex; align-items: center; gap: 20px; }
        .hero-icon {
            width: 64px; height: 64px;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--pink), var(--blue));
            display: flex; align-items: center; justify-content: center;
            font-size: 26px; color: #fff;
            box-shadow: 0 8px 24px rgba(242,15,121,0.4);
            flex-shrink: 0;
            animation: iconFloat 3s ease-in-out infinite;
        }
        @keyframes iconFloat {
            0%,100% { transform: translateY(0); }
            50%      { transform: translateY(-5px); }
        }
        .hero-text { display: flex; flex-direction: column; gap: 4px; }
        .hero-eyebrow {
            font-size: 11px; font-weight: 500;
            letter-spacing: 3px; text-transform: uppercase;
            color: rgba(255,255,255,0.45);
        }
        .hero-title {
            font-family: 'Rajdhani', sans-serif;
            font-size: 2.6rem; font-weight: 700; line-height: 1;
            background: linear-gradient(90deg, #fff 30%, var(--pink) 65%, var(--blue) 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: titleShimmer 4s linear infinite;
        }
        @keyframes titleShimmer {
            0%   { background-position: 0% center; }
            100% { background-position: 200% center; }
        }
        .hero-subtitle { font-size: 13px; color: rgba(255,255,255,0.4); letter-spacing: 0.5px; }

        /* Right */
        .hero-right {
            display: flex; flex-direction: column;
            align-items: flex-end; gap: 12px;
            flex-shrink: 0; min-width: 340px;
        }
        .hero-search-form { width: 100%; }

        /* Search pill */
        .search-pill {
            display: flex; align-items: center;
            background: rgba(255,255,255,0.08);
            border: 1.5px solid rgba(255,255,255,0.18);
            border-radius: 50px; overflow: hidden;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .search-pill:focus-within {
            border-color: var(--pink);
            box-shadow: 0 0 0 3px rgba(242,15,121,0.18), 0 4px 20px rgba(0,0,0,0.2);
        }
        .search-pill .search-icon { padding: 0 14px; color: rgba(255,255,255,0.4); font-size: 14px; flex-shrink: 0; }
        .search-pill input {
            flex: 1; background: transparent; border: none; outline: none;
            color: #fff; font-family: 'DM Sans', sans-serif;
            font-size: 14px; padding: 11px 0;
        }
        .search-pill input::placeholder { color: rgba(255,255,255,0.35); }
        .search-pill .btn-go {
            background: linear-gradient(135deg, var(--pink), var(--blue));
            color: #fff; border: none; padding: 11px 22px;
            font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600;
            cursor: pointer; white-space: nowrap;
            transition: opacity 0.2s, transform 0.15s;
        }
        .search-pill .btn-go:hover { opacity: 0.88; transform: scale(1.03); }
        .search-pill .btn-clear-x {
            background: rgba(255,255,255,0.1); color: rgba(255,255,255,0.6);
            border: none; border-left: 1px solid rgba(255,255,255,0.1);
            padding: 11px 14px; font-size: 13px; cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .search-pill .btn-clear-x:hover { background: rgba(255,255,255,0.2); color: #fff; }

        /* Hints + Export row */
        .search-hints {
            display: flex; gap: 6px; align-items: center;
            font-size: 11px; color: rgba(255,255,255,0.3);
        }
        .search-hints .hint-tag {
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px; padding: 2px 9px;
            font-size: 10px; letter-spacing: 0.5px;
        }
        .btn-export {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,0.08);
            border: 1.5px solid rgba(255,255,255,0.2);
            color: #fff; border-radius: 50px;
            padding: 9px 20px; font-family: 'DM Sans', sans-serif;
            font-size: 13px; font-weight: 500; text-decoration: none;
            transition: background 0.2s, border-color 0.2s, transform 0.2s;
            white-space: nowrap;
        }
        .btn-export:hover { background: rgba(255,255,255,0.15); border-color: rgba(255,255,255,0.4); color: #fff; transform: translateY(-2px); }

        /* Active search badge */
        .result-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(242,15,121,0.12);
            border: 1px solid rgba(242,15,121,0.3);
            border-radius: 50px; padding: 5px 16px;
            font-size: 12px; color: rgba(255,255,255,0.8);
            margin-bottom: 14px;
        }
        .result-badge .dot {
            width: 7px; height: 7px; border-radius: 50%;
            background: var(--pink);
            animation: dotPulse 1.5s ease-in-out infinite;
        }
        @keyframes dotPulse {
            0%,100% { transform: scale(1); opacity:1; }
            50%      { transform: scale(1.5); opacity:0.6; }
        }

        /* ── Table ──────────────────────────────────────────── */
        .table-container {
            background: #ffffff;
            border-radius: 16px; overflow: hidden;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .table-scroll { max-height: 580px; overflow-y: auto; overflow-x: auto; }
        .table { width: 100%; table-layout: auto; margin: 0; border-collapse: collapse; }
        .table thead { position: sticky; top: 0; z-index: 10; }
        .table th {
            background: linear-gradient(135deg, #1a003a, #0d1f4a);
            color: #ffffff; text-transform: uppercase;
            font-family: 'DM Sans', sans-serif;
            font-size: 12px; font-weight: 700; letter-spacing: 0.6px;
            white-space: nowrap; padding: 13px 15px;
            border-bottom: 3px solid var(--pink);
            border-right: 1px solid rgba(255,255,255,0.08);
        }
        .table th:first-child { border-left: 4px solid var(--pink); }
        .table td {
            white-space: nowrap; padding: 10px 15px;
            font-size: 13.5px; color: #1a1a2e;
            border-bottom: 1px solid #f0f0f0;
            border-right: 1px solid #f5f5f5;
            background: #ffffff;
        }
        .table tbody tr:nth-child(even) td { background: #f8f9ff; }
        .table tbody tr:hover td { background: #fde8f3 !important; color: #1a1a2e !important; }

        /* Highlighted search columns */
        .table th.hl { background: linear-gradient(135deg, #7a003a, #1d1f6a) !important; }
        .table td.hl { background: #fff8e1 !important; font-weight: 600; color: #333 !important; }
        .table tbody tr:hover td.hl { background: #ffe082 !important; }

        /* ── Pagination ─────────────────────────────────────── */
        .pag-wrap {
            padding: 16px 20px;
            background: #ffffff;
            border-top: 2px solid #f0f0f0;
        }
        .pag-info {
            text-align: center; font-size: 13px; color: #666;
            margin-bottom: 10px; font-family: 'DM Sans', sans-serif;
        }
        .pag-info strong { color: #1a1a2e; }
        .pag-wrap .pagination { margin: 0; justify-content: center; gap: 4px; }
        .pag-wrap .page-item .page-link {
            background: #f4f6ff; border: 1.5px solid #d0d8ff;
            color: #1a6fff; border-radius: 8px !important;
            padding: 7px 14px; font-size: 14px; font-weight: 600;
            transition: all 0.2s; line-height: 1.4;
        }
        .pag-wrap .page-item.active .page-link {
            background: linear-gradient(135deg, var(--pink), var(--blue));
            border-color: transparent; color: #fff;
            box-shadow: 0 4px 12px rgba(242,15,121,0.35);
        }
        .pag-wrap .page-item .page-link:hover {
            background: linear-gradient(135deg, var(--pink), var(--blue));
            border-color: transparent; color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(26,111,255,0.3);
        }
        .pag-wrap .page-item.disabled .page-link {
            background: #f0f0f0; border-color: #e0e0e0; color: #aaa;
        }

        /* ── No results ─────────────────────────────────────── */
        .no-results {
            text-align: center; padding: 60px 20px;
            color: #999; background: #fff;
        }
        .no-results i { font-size: 3rem; display: block; margin-bottom: 14px; opacity: 0.3; color: #ccc; }
        .no-results strong { color: #555; }

        /* ── Responsive ─────────────────────────────────────── */
        @media (max-width: 1024px) {
            .hero-inner { flex-direction: column; align-items: flex-start; }
            .hero-right { min-width: 100%; align-items: stretch; }
        }
        @media (max-width: 768px) {
            .sidebar { width: 200px; }
            .main-content { margin-left: 210px; padding: 14px; }
            .hero-title { font-size: 1.9rem; }
        }
        @media (max-width: 576px) {
            .sidebar { display: none; }
            .main-content { margin-left: 0; padding: 10px; }
        }
    </style>
</head>
<body>

    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>

    {{-- ── Sidebar ──────────────────────────────────────────── --}}
    <div class="sidebar" style="background-color:#2c3e50; padding-left:20px; padding-top:2px;">
        <a style="padding-left:55px; padding-bottom:0;" class="navbar-brand" href="/">
            <img src="{{ asset('storage/images/newlogo.png') }}" alt="Logo" width="100">
        </a>
        <div style="color:#9f9f9f; text-align:center; font-size:15px;"><i>New Thinking New Way</i></div>
        <hr style="border-top:1px solid rgba(255,255,255,0.15); width:100%; margin:14px 0;">
        <h5 class="control-center-heading" style="margin-top:20px">Quick Access</h5>
        <a href="/search">        <i class="fas fa-search-dollar" style="color:#e67e22; margin-right:8px;"></i> BM + CM + CIR</a>
        <a href="/stop-payments"> <i class="fas fa-hand-paper"    style="color:#c0392b; margin-right:8px;"></i> Stop Payment</a>
        <a href="/recoveries">    <i class="fas fa-wallet"         style="color:#2ecc71; margin-right:8px;"></i> Recovery Report</a>
        <a href="/commission">    <i class="fas fa-chart-line"     style="color:#e74c3c; margin-right:8px;"></i> CM Commission</a>
        <a href="/import"><i class="fas fa-balance-scale" style="color:#f1c40f; margin-right:10px;"></i>CIR Commission</a>
        <a href="/import-export"> <i class="fas fa-user-tie"       style="color:#3498db; margin-right:8px;"></i> BM Commission</a>
        <a href="/google-index"><i class="fas fa-user-friends" style="color:#8e44ad; margin-right:10px;"></i>Broker Register</a>
        <a href="/coming1">       <i class="fas fa-sliders-h"      style="color:#f39c12; margin-right:8px;"></i> Control Panel</a>
        <a href="/login">         <i class="fas fa-sign-out-alt"   style="color:#16a085; margin-right:8px;"></i> Logout</a>
    </div>

    {{-- ── Main Content ─────────────────────────────────────── --}}
    <div class="main-content">

        {{-- ── Hero Header ──────────────────────────────────── --}}
        <div class="hero-header">
            <div class="hero-inner">

                {{-- Left: icon + title --}}
                <div class="hero-left">
                    <div class="hero-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="hero-text">
                        <span class="hero-eyebrow">Commission Management</span>
                        <h1 class="hero-title">CIR&nbsp;Commission&nbsp;Report</h1>
                        <span class="hero-subtitle">
                            @if(request('search'))
                                Filtered by &nbsp;<strong style="color:rgba(255,255,255,0.7)">"{{ request('search') }}"</strong>
                                &nbsp;·&nbsp; {{ $circularCommissions->total() }} record(s)
                            @else
                                {{ $circularCommissions->total() }} total records
                                &nbsp;·&nbsp; Page {{ $circularCommissions->currentPage() }} of {{ $circularCommissions->lastPage() }}
                            @endif
                        </span>
                    </div>
                </div>

                {{-- Right: search + export --}}
                <div class="hero-right">
                    <form method="GET" action="{{ url()->current() }}" id="searchForm" class="hero-search-form">
                        <div class="search-pill">
                            <span class="search-icon"><i class="fas fa-search"></i></span>
                            <input
                                type="text"
                                name="search"
                                id="searchInput"
                                value="{{ request('search') }}"
                                placeholder="Trainer ID, Reference ID or SO Code…"
                                autocomplete="off"
                            >
                            @if(request('search'))
                                <button type="button" class="btn-clear-x" onclick="window.location='{{ url()->current() }}'" title="Clear search">
                                    <i class="fas fa-times"></i>
                                </button>
                            @endif
                            <button type="submit" class="btn-go">
                                <i class="fas fa-search me-1"></i> Search
                            </button>
                        </div>
                    </form>

                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="search-hints">
                            <span>Search by:</span>
                            <span class="hint-tag">Trainer ID</span>
                            <span class="hint-tag">Reference ID</span>
                            <span class="hint-tag">SO Code</span>
                        </div>
                        <a href="{{ route('export') }}" class="btn-export">
                            <i class="fas fa-file-export"></i> Export
                        </a>
                    </div>
                </div>

            </div>
        </div>
        {{-- End Hero Header --}}

        {{-- Active search badge --}}
        @if(request('search'))
            <div class="mb-3">
                <span class="result-badge">
                    <span class="dot"></span>
                    Showing <strong>{{ $circularCommissions->total() }}</strong> result(s) for
                    <strong>"{{ request('search') }}"</strong> across all pages
                    &nbsp;·&nbsp;
                    <a href="{{ url()->current() }}" style="color:rgba(255,255,255,0.5); text-decoration:none; font-size:11px;">
                        <i class="fas fa-times me-1"></i>Clear
                    </a>
                </span>
            </div>
        @endif

        {{-- ── Table ────────────────────────────────────────── --}}
        <div class="table-container">
            <div class="table-scroll">
                @if($circularCommissions->count() > 0)
                    <table class="table table-bordered" id="brokerTable">
                        <thead>
                            <tr>
                                <th class="{{ request('search') ? 'hl' : '' }}">SO Code</th>
                                <th>DO</th>
                                <th>SO Name</th>
                                <th class="{{ request('search') ? 'hl' : '' }}">Trainer ID</th>
                                <th class="{{ request('search') ? 'hl' : '' }}">Reference ID</th>
                                <th>Name</th>
                                <th>Total Business</th>
                                <th>Prize Amount</th>
                                <th>Recovery</th>
                                <th>Net Payable Amount</th>
                                <th>TDS Deduction</th>
                                <th>Final Amount</th>
                                <th>Bank Name</th>
                                <th>IFSC Code</th>
                                <th>CIR No</th>
                                <th>Date</th>
                                <th>Remarks</th>
                                <th>CH No</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($circularCommissions as $commission)
                                <tr>
                                    <td class="{{ request('search') ? 'hl' : '' }}">{{ $commission->so_code }}</td>
                                    <td>{{ $commission->do }}</td>
                                    <td>{{ $commission->so_name }}</td>
                                    <td class="{{ request('search') ? 'hl' : '' }}">{{ $commission->trainer_id }}</td>
                                    <td class="{{ request('search') ? 'hl' : '' }}">{{ $commission->reference_id }}</td>
                                    <td>{{ $commission->name }}</td>
                                    <td>{{ $commission->total_business }}</td>
                                    <td>{{ $commission->one_day_cash_incentive }}</td>
                                    <td>{{ $commission->recovery }}</td>
                                    <td>{{ $commission->net_payable_amount }}</td>
                                    <td>{{ $commission->tds_deduction }}</td>
                                    <td>{{ $commission->final_amount }}</td>
                                    <td>{{ $commission->bank_name }}</td>
                                    <td>{{ $commission->ifsc_code }}</td>
                                    <td>{{ $commission->cir_no }}</td>
                                    <td>{{ $commission->date ? $commission->date->format('Y-m-d') : 'N/A' }}</td>
                                    <td>{{ $commission->remarks }}</td>
                                    <td>{{ $commission->ch_no }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="no-results">
                        <i class="fas fa-search-minus"></i>
                        No records found for <strong>"{{ request('search') }}"</strong><br>
                        <small style="font-size:13px;">Try a different Trainer ID, Reference ID, or SO Code.</small><br><br>
                        <a href="{{ url()->current() }}" style="color:#999; font-size:13px;">
                            <i class="fas fa-arrow-left me-1"></i> Back to all records
                        </a>
                    </div>
                @endif
            </div>

            {{-- Pagination --}}
            <div class="pag-wrap">
                <div class="pag-info">
                    Showing <strong>{{ $circularCommissions->firstItem() }}</strong>
                    to <strong>{{ $circularCommissions->lastItem() }}</strong>
                    of <strong>{{ $circularCommissions->total() }}</strong> results
                    @if(request('search'))
                        &nbsp;·&nbsp; filtered by <strong>"{{ request('search') }}"</strong>
                    @endif
                </div>
                {{ $circularCommissions->appends(request()->only('search'))->links('pagination::bootstrap-5') }}
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script>
        document.getElementById('searchInput').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') document.getElementById('searchForm').submit();
        });
    </script>

</body>
</html>

{{--
=====================================================================
  CONTROLLER UPDATE REQUIRED
  In CircularCommissionController, update the importView() method:
=====================================================================

    public function importView(Request $request)
    {
        $search = trim($request->input('search'));

        $query = CircularCommission::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('trainer_id',   'LIKE', "%{$search}%")
                  ->orWhere('reference_id','LIKE', "%{$search}%")
                  ->orWhere('so_code',     'LIKE', "%{$search}%");
            });
        }

        $circularCommissions = $query->paginate(12)->appends(['search' => $search]);

        return view('import', compact('circularCommissions'));
    }
=====================================================================
--}}
