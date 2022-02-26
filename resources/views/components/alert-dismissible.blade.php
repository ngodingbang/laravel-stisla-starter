@php
    $type = $alert['type'] ?? 'alert-warning';
    $message = $alert['message'] ?? $alert;
@endphp

<div class="alert {{ $type }} alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>

        {{ $message }}
    </div>
</div>
