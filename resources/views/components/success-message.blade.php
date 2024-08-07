@if (session()->has('message'))
<div class="message">{{ session('message') }}</div>
   <script src="{{ asset('js/index.js') }}"></script>
@endif
