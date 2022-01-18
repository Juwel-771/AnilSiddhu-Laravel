@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
@component('mail::panel')
Mail From Md. Juwel
@endcomponent
@component('mail::table')
|    Tech       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Larvel        | Beginner      | $10      |
| Vue.Js        | Advanced      | $20      |
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
