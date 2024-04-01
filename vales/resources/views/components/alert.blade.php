<div>
    @if (Session::has("message"))
        <div
            class="alert alert-{{ session('message')['alert'] }} fw-bold"
        >
            {{ session('message')['message'] }}
        </div>
    @endif
</div>

