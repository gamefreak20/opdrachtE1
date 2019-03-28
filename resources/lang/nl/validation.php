<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'De `:attribute` moet geaccepteerd zijn.',
    'active_url' => 'De `:attribute` moet een url zijn.',
    'after' => 'De `:attribute` moet een datum zijn na :date.',
    'after_or_equal' => 'De `:attribute` moet een datum zijn na of gelijk aan :date.',
    'alpha' => 'De `:attribute` mag alleen letters bevatten.',
    'alpha_dash' => 'De `:attribute` mag alleen letters, cijfers, strepen en onderstrepen bevatten.',
    'alpha_num' => 'De `:attribute` mag alleen letters en cijfers bevatten.',
    'array' => 'De `:attribute` moet een array zijn.',
    'before' => 'De `:attribute` moet een datum zijn voor :date.',
    'before_or_equal' => 'De `:attribute` moet een datum zijn voor of gelijk aan :date.',
    'between' => [
        'numeric' => 'De `:attribute` moet tussen de :min en :max zijn.',
        'file' => 'De `:attribute` moet tussen de :min en :max kilobytes zijn.',
        'string' => 'De `:attribute` moet tussen de :min en :max characters zijn.',
        'array' => 'De `:attribute` tussen de :min en :max items zijn.',
    ],
    'boolean' => 'De `:attribute` moet true of false zijn.',
    'confirmed' => 'De `:attribute` bevestiging klopt niet.',
    'date' => 'De `:attribute` is niet een datum.',
    'date_equals' => 'De `:attribute` moet gelijk zijn aan :date.',
    'date_format' => 'De `:attribute` is niet gelijk aan :format.',
    'different' => 'De `:attribute` en de `:other` moeten anders zijn.',
    'digits' => 'De `:attribute` moet :digits characters zijn.',
    'digits_between' => 'De `:attribute` moet tussen de :min en :max characters zijn.',
    'dimensions' => 'De demensies van `:attribute` kloppen niet.',
    'distinct' => 'De `:attribute` heeft een dubbele value.',
    'email' => 'De :attribute moet een e-mail adress zijn.',
    'exists' => 'De `:attribute` klopt niet.',
    'file' => 'De `:attribute` moet een bestand zijn.',
    'filled' => 'De `:attribute` moet een value hebben.',
    'gt' => [
        'numeric' => 'De `:attribute` moet meer zijn dan :value.',
        'file' => 'De `:attribute` moet meer zijn dan :value kilobytes.',
        'string' => 'De `:attribute` moet meer zijn dan :value characters.',
        'array' => 'De `:attribute` moet meer zijn dan :value items.',
    ],
    'gte' => [
        'numeric' => 'De `:attribute` moet meer of gelijk aan :value zijn.',
        'file' => 'De `:attribute` moet meer of gelijk aan :value kilobytes zijn.',
        'string' => 'De `:attribute` moet meer of gelijk aan :value characters zijn.',
        'array' => 'De `:attribute` moet meer of gelijk aan :value items zijn.',
    ],
    'image' => 'De `:attribute` moet een image zijn.',
    'in' => 'De geselecteerde `:attribute` kloppen niet.',
    'in_array' => 'De `:attribute` velden hebben niet :other.',
    'integer' => 'De `:attribute` moet een getal zijn.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'De `:attribute` moet een IPv4 address zijn.',
    'ipv6' => 'De `:attribute` moet een IPv6 address zijn.',
    'json' => 'De `:attribute` moet een JSON string zijn.',
    'lt' => [
        'numeric' => 'De `:attribute` moet minder zijn dan :value.',
        'file' => 'De `:attribute` moet minder zijn dan :value kilobytes.',
        'string' => 'De `:attribute` moet minder zijn dan :value characters.',
        'array' => 'De `:attribute` moet minder zijn dan :value items.',
    ],
    'lte' => [
        'numeric' => 'De `:attribute` moet minder of gelijk aan zijn dan :value.',
        'file' => 'De `:attribute` moet minder of gelijk aan zijn dan :value kilobytes.',
        'string' => 'De `:attribute` moet minder of gelijk aan zijn dan :value characters.',
        'array' => 'De `:attribute` moet minder of gelijk aan zijn dan :value items.',
    ],
    'max' => [
        'numeric' => 'De `:attribute` mag niet meer zijn dan :max.',
        'file' => 'De `:attribute` mag niet meer zijn dan :max kilobytes.',
        'string' => 'De `:attribute` mag niet meer zijn dan :max characters.',
        'array' => 'De `:attribute` mag niet meer zijn dan :max items.',
    ],
    'mimes' => 'De `:attribute` moet een bestands type zijn van: :values.',
    'mimetypes' => 'De `:attribute` moet een bestands type zijn van: :values.',
    'min' => [
        'numeric' => 'De `:attribute` moet minimaal :min zijn.',
        'file' => 'De `:attribute` moet minimaal :min kilobytes zijn.',
        'string' => 'De `:attribute` moet minimaal :min characters zijn.',
        'array' => 'De `:attribute` moet minimaal :min items zijn.',
    ],
    'not_in' => 'De geselecteerde `:attribute` klop(pen) niet.',
    'not_regex' => 'De `:attribute` formaat klopt niet.',
    'numeric' => 'De `:attribute` moet een nummer zijn.',
    'present' => 'De `:attribute` moet aanwezig zijn.',
    'regex' => 'De `:attribute` formaat klopt niet.',
    'required' => 'De `:attribute` veld moet ingevuld zijn.',
    'required_if' => 'De `:attribute` moet ingevuld zijn als :other is :value.',
    'required_unless' => 'De `:attribute` moet ingevuld zijn tenzij :other is in :values.',
    'required_with' => 'De `:attribute` moet ingevuld zijn als :values is aanwezig.',
    'required_with_all' => 'De `:attribute` moet ingevuld zijn als de :values aanwezig zijn.',
    'required_without' => 'De `:attribute` moet ingevuld zijn als :values niet aanwezig is.',
    'required_without_all' => 'De `:attribute` moet ingevuld zijn als de :values aanwezig zijn.',
    'same' => 'De `:attribute` en `:other` moeten hetzelfde zijn.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'De `:attribute` niet starten met deze: :values',
    'string' => 'De `:attribute` moet een string zijn.',
    'timezone' => 'De `:attribute` moet een tijdzone zijn.',
    'unique' => 'De `:attribute` bestaat al.',
    'uploaded' => 'De `:attribute` is gefaald om te uploaden.',
    'url' => 'De `:attribute` is geen url.',
    'uuid' => 'De `:attribute` moet een UUID zijn.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
