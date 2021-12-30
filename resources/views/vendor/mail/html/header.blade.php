<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<!--<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">-->
<div class="flex-shrink-0 flex items-center">
    <a href="{{ route('dashboard') }}">
        <img src="{{asset('/img/logo3.png')}}" style="height:85px;">
    </a>
</div>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
