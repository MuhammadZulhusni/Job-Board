<label class="mb-2 block text-sm font-medium text-slate-900"
  for="{{ $for }}">
  <!-- Render content passed between the opening and closing tags -->
  {{ $slot }}
  <!-- Display asterisk (*) if required -->
  @if ($required)
    <span>*</span>
  @endif
</label>
