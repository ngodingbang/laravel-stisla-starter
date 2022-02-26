<div class="row">
    {{-- created_at --}}
    <div class="form-group col-12 col-lg-6">
        <label for="created_at">@lang('Created At')</label>

        <p class="form-control-plaintext">
            {{ $model->created_at->isoFormat('DD MMMM YYYY HH:mm:ss') }}
        </p>
    </div>
    {{-- /.created_at --}}

    {{-- updated_at --}}
    <div class="form-group col-12 col-lg-6">
        <label for="updated_at">@lang('Updated At')</label>

        <p class="form-control-plaintext">
            {{ $model->updated_at->isoFormat('DD MMMM YYYY HH:mm:ss') }}
        </p>
    </div>
    {{-- /.updated_at --}}
</div>
