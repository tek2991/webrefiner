<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot))
<img src="{{ asset('images/static/logo.png') }}" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
