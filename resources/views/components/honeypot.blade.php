@php
    $fieldName = config('honeypot.field_name');
    $timerName = config('honeypot.field_timer_name');    
@endphp

<div style="display:none;">
      <input type="text" name="{{ $timerName }}" id="{{ $timerName }}"  required value="{{ microtime(true) }}">
      <input type="text" name="{{ $fieldName }}" id="{{ $fieldName }}">
</div>