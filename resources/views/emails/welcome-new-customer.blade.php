@component('mail::message')
# Introduction

{{$customer->name}}
{{$customer->email}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
