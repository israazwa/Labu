<?= $this->include('template/header'); ?>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form id="loginForm">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="loginPassword"
                                    placeholder="Enter your password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary"
                                    onclick="validateForm('loginForm')">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Don't have an account? <a href="#" data-bs-toggle="modal"
                                data-bs-target="#registerModal">Register here</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registerForm">
                        <div class="mb-3">
                            <label for="registerName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="registerName"
                                placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="registerEmail" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="registerPassword"
                                placeholder="Create a password">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success"
                                onclick="validateForm('registerForm')">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Modal -->
    <div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="warningModalLabel">Warning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Please fill in all required fields!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm(formId) {
            const form = document.getElementById(formId);
            const inputs = form.querySelectorAll('input');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                }
            });

            if (!isValid) {
                const warningModal = new bootstrap.Modal(document.getElementById('warningModal'));
                warningModal.show();
            } else {
                alert('Form submitted successfully!');
            }
        }
    </script>
    <br><br>
    <?= $this->include('template/footer'); ?>
</body>

</html>