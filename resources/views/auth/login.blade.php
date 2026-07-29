<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Fleek BD</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Clean Enterprise Gradient */
        .bg-auth-brand {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #0f172a 100%);
        }

        .auth-card {
            border: 1px solid #e2e8f0;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
        }

        .feature-icon-box {
            width: 42px;
            height: 42px;
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .input-group-text {
            border-color: #dee2e6;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }
    </style>
</head>

<body class="bg-body-tertiary">

    <div class="container-fluid min-vh-100 p-0">
        <div class="row g-0 min-vh-100">

            <!-- Left Hero Panel -->
            <section
                class="col-lg-6 col-xl-7 d-none d-lg-flex flex-column justify-content-between p-5 text-white bg-auth-brand">

                <!-- Top Brand Header -->
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/" class="d-inline-flex align-items-center gap-3 text-white text-decoration-none">
                        <span
                            class="p-2 rounded-3 bg-primary text-white d-flex align-items-center justify-content-center shadow-sm">
                            <i class="bi bi-shield-check fs-4"></i>
                        </span>
                        <span class="fw-bold fs-4 tracking-tight">Fleek BD</span>
                    </a>
                    <span
                        class="badge bg-secondary bg-opacity-20 text-light border border-light border-opacity-10 px-3 py-2 fw-normal rounded-pill">
                        v2.4 Enterprise Release
                    </span>
                </div>

                <!-- Hero Body -->
                <div class="my-auto py-5" style="max-width: 520px;">
                    <span
                        class="badge bg-primary bg-opacity-25 text-info border border-info border-opacity-20 px-3 py-2 rounded-pill fw-medium mb-3">
                        Enterprise ERP System
                    </span>
                    <h1 class="display-6 fw-bold mb-3 text-white lh-base">
                        Complete control of your business, in one platform.
                    </h1>
                    <p class="text-white-50 lead fs-6 mb-4">
                        Accounts, inventory, HR, and sales — all modules seamlessly connected in real-time.
                    </p>

                    <!-- Feature List -->
                    <div class="vstack gap-3 mt-4">

                        <div
                            class="p-3 rounded-3 bg-white bg-opacity-10 border border-white border-opacity-10 d-flex align-items-start gap-3">
                            <span
                                class="feature-icon-box rounded-3 text-white d-flex align-items-center justify-content-center flex-shrink-0 mt-1">
                                <i class="bi bi-boxes fs-5"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 fw-semibold text-white">Inventory &amp; Sales</h6>
                                <p class="mb-0 small text-white-50">Stock, purchase, and invoice management in one
                                    central location.</p>
                            </div>
                        </div>

                        <div
                            class="p-3 rounded-3 bg-white bg-opacity-10 border border-white border-opacity-10 d-flex align-items-start gap-3">
                            <span
                                class="feature-icon-box rounded-3 text-white d-flex align-items-center justify-content-center flex-shrink-0 mt-1">
                                <i class="bi bi-diagram-3 fs-5"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 fw-semibold text-white">Automated Workflow</h6>
                                <p class="mb-0 small text-white-50">Multi-tier approval chains and automated task
                                    routing.</p>
                            </div>
                        </div>

                        <div
                            class="p-3 rounded-3 bg-white bg-opacity-10 border border-white border-opacity-10 d-flex align-items-start gap-3">
                            <span
                                class="feature-icon-box rounded-3 text-white d-flex align-items-center justify-content-center flex-shrink-0 mt-1">
                                <i class="bi bi-bar-chart-line fs-5"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 fw-semibold text-white">Live Reporting</h6>
                                <p class="mb-0 small text-white-50">Real-time dynamic dashboards and strategic
                                    analytics.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Copyright -->
                <div class="text-white-50 small d-flex justify-content-between align-items-center">
                    <span>© 2026 Fleek BD · Enterprise Resource Planning</span>
                </div>
            </section>

            <!-- Right Login Section -->
            <section
                class="col-lg-6 col-xl-5 d-flex align-items-center justify-content-center p-4 p-md-5 bg-body-tertiary">
                <div class="w-100" style="max-width: 420px;">

                    <!-- Mobile Header -->
                    <div class="mb-4 d-flex align-items-center gap-2 d-lg-none">
                        <span
                            class="p-2 rounded-3 bg-primary text-white d-flex align-items-center justify-content-center">
                            <i class="bi bi-shield-check fs-5"></i>
                        </span>
                        <span class="fw-bold fs-4 text-dark">Fleek BD</span>
                    </div>

                    <!-- Form Card Container -->
                    <div class="card auth-card rounded-4 bg-white p-2 p-sm-3">
                        <div class="card-body">

                            <div class="mb-4">
                                <span class="text-uppercase fw-bold text-primary small tracking-wider">Welcome
                                    back</span>
                                <h3 class="fw-bold text-dark mt-1 mb-1">Sign in to your workspace</h3>
                                <p class="text-muted small mb-0">Enter your official credentials to proceed.</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}" class="vstack gap-3">
                                @csrf

                                <!-- Work Email Input -->
                                <div>
                                    <label for="email" class="form-label small fw-semibold text-dark mb-1">Work
                                        Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light text-muted">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}"
                                            placeholder="you@company.com" required autofocus autocomplete="username">
                                    </div>
                                    @error('email')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password Input -->
                                <div>
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <label for="password"
                                            class="form-label small fw-semibold text-dark mb-0">Password</label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="text-decoration-none text-primary small fw-semibold">
                                                Forgot password?
                                            </a>
                                        @endif
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light text-muted">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        <input type="password"
                                            class="form-control border-end-0 @error('password') is-invalid @enderror"
                                            id="password" name="password" placeholder="••••••••" required
                                            autocomplete="current-password">
                                        <button type="button"
                                            class="btn btn-outline-secondary border-start-0 border-light-subtle bg-light text-muted"
                                            aria-label="Toggle password" onclick="togglePasswordVisibility()">
                                            <i class="bi bi-eye" id="toggleIcon"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Remember Checkbox -->
                                <div class="form-check my-1">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                    <label class="form-check-label small text-secondary" for="remember_me">
                                        Remember me for 30 days
                                    </label>
                                </div>

                                <!-- Submit Button -->
                                <button class="btn btn-primary w-100 py-2.5 fw-semibold shadow-sm" type="submit">
                                    Sign In <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </form>



                            <hr class="my-4 text-muted opacity-25">

                            <!-- Register Action -->
                            <div class="text-center small text-muted">
                                Don't have an enterprise account? <br class="d-sm-none">
                                <a href="/register" class="fw-semibold text-primary text-decoration-none">Create an
                                    account</a>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Password Hide/Show Script -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            }
        }
    </script>
</body>

</html>