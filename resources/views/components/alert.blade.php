<style>
    .alert {
        background: #00801a3d;
        color: green;
        text-align: center;
        line-height: 40px;
    }
</style>

@if ($alert = session()->pull('alert'))
    <div class="alert">
        {{ $alert }}
    </div>
@endif
