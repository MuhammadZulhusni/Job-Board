<div class="space-y-2">
  <!-- Render "All" option if $allOption is true -->
  @if ($allOption)
    <label for="{{ $name }}" class="flex items-center cursor-pointer">
      <input type="radio" name="{{ $name }}" value=""
        @checked(!request($name)) class="mr-2 cursor-pointer">
      <span class="text-sm font-medium cursor-pointer">All</span>
    </label>
  @endif

  <!-- Render radio buttons for each option -->
  @foreach ($optionsWithLabels as $label => $option)
    <label for="{{ $name }}" class="flex items-center cursor-pointer">
      <input type="radio" name="{{ $name }}" value="{{ $option }}"
        @checked($option === ($value ?? request($name))) class="mr-2 cursor-pointer">
      <span class="text-sm font-medium cursor-pointer">{{ $label }}</span>
    </label>
  @endforeach

  <!-- Display validation error message -->
  @error($name)
    <div class="text-xs text-red-500">{{ $message }}</div>
  @enderror
</div>
