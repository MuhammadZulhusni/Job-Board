<nav {{ $attributes }}>
  <!-- Navigation wrapper with custom attributes -->

  <!-- Unordered list for breadcrumb links -->
  <ul class="flex space-x-4 text-slate-500">
    <!-- Home breadcrumb link -->
    <li>
      <a href="/">Home</a>
    </li>

    <!-- Loop through each breadcrumb link -->
    @foreach ($links as $label => $link)
      <!-- Separator symbol between breadcrumbs -->
      <li>→</li>

      <!-- Breadcrumb link -->
      <li>
        <!-- Anchor tag representing the breadcrumb link -->
        <a href="{{ $link }}">
          <!-- Label for the breadcrumb -->
          {{ $label }}
        </a>
      </li>
    @endforeach
  </ul>
</nav>
