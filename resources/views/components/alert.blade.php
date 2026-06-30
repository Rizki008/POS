@if ($errors->any())
    <div class="alert alert-{{ $type }} d-flex flex-column">
        @foreach ($errors->all() as $error)
            <small class="text-white mb-2">{{ $error }}</small>
        @endforeach
    </div>
@endif
