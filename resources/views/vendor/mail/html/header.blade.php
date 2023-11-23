@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Adam Indonesia')
<img src="{{ asset('master/html/theme/dist/assets/media/logos/adam-indonesia.png') }}" class="logo" alt="Adam Indonesia Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
