<div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

    <form class="card card-md" method="post" wire:submit.prevent="ForgotHandler">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Forgot password</h2>
            <p class="text-secondary mb-4">
                Enter your email address, and your password reset link will be sent to you.
            </p>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input
                    type="email"
                    class="form-control"
                    placeholder="Enter email"
                    wire:model="email">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24V24H0z" fill="none"></path>
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                        <path d="M3 7l9 6l9 -6"></path>
                    </svg>
                    Send me reset password link
                </button>
            </div>
        </div>
    </form>
</div>
