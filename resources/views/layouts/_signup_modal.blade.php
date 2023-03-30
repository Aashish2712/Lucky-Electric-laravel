<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupmodalLabel">Signup to Lucky Electric</h1>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ url('/') }}/Register">
                    @csrf
                    <div class="mb-3">
                        <label for="s_name" class="form-label">Enter your name </label>
                        <input type="text" class="form-control" id="s_name" name="s_name" aria-describedby="">

                    </div>
                    <div class="mb-3">
                        <label for="semail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="s_email" name="s_email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="s_pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="s_password" name="s_password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Signup</button>

            </div>

            </form>
        </div>
    </div>
</div>