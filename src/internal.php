<?php

CONST INTERNAL_FUNCS = [
    '_' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
        ],
    ],
    'abs' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-int',
                'name' => 'num',
                'type' => 'int|float',
            ],
        ],
    ],
    'acos' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'acosh' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'addcslashes' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
        ],
    ],
    'addslashes' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'array_change_key_case' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'case',
                'type' => 'int',
            ],
        ],
    ],
    'array_chunk' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'preserve_keys',
                'type' => 'bool',
            ],
        ],
    ],
    'array_column' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'column_key',
                'type' => 'string|int|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'index_key',
                'type' => 'string|int|null',
            ],
        ],
    ],
    'array_combine' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'keys',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'values',
                'type' => 'array',
            ],
        ],
    ],
    'array_count_values' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_diff' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_diff_assoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_diff_key' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_diff_uassoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_diff_ukey' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_fill' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'start_index',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'count',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_fill_keys' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'keys',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_filter' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => '?callable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'array_flip' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_intersect' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_intersect_assoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_intersect_key' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_intersect_uassoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_intersect_ukey' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_is_list' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_key_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_key_first' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_key_last' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_keys' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'filter_value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'strict',
                'type' => 'bool',
            ],
        ],
    ],
    'array_map' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => '?callable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_merge' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_merge_recursive' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'arrays',
                'type' => 'array',
            ],
        ],
    ],
    'array_multisort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'array',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_pad' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_pop' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_product' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_push' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_rand' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num',
                'type' => 'int',
            ],
        ],
    ],
    'array_reduce' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'initial',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_replace' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'replacements',
                'type' => 'array',
            ],
        ],
    ],
    'array_replace_recursive' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'replacements',
                'type' => 'array',
            ],
        ],
    ],
    'array_reverse' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'preserve_keys',
                'type' => 'bool',
            ],
        ],
    ],
    'array_search' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'needle',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'haystack',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'strict',
                'type' => 'bool',
            ],
        ],
    ],
    'array_shift' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_slice' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'preserve_keys',
                'type' => 'bool',
            ],
        ],
    ],
    'array_splice' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'replacement',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_sum' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_udiff' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_udiff_assoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_udiff_uassoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_uintersect' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_uintersect_assoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_uintersect_uassoc' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'array_unique' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'array_unshift' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_values' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'array_walk' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'arg',
                'type' => 'mixed',
            ],
        ],
    ],
    'array_walk_recursive' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'arg',
                'type' => 'mixed',
            ],
        ],
    ],
    'arsort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'asin' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'asinh' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'asort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'assert' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'assertion',
                'type' => 'mixed',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'description',
                'type' => 'Throwable|string|null',
            ],
        ],
    ],
    'assert_options' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'atan' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'atan2' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'y',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'x',
                'type' => 'float',
            ],
        ],
    ],
    'atanh' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'base64_decode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'strict',
                'type' => 'bool',
            ],
        ],
    ],
    'base64_encode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'base_convert' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'from_base',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'to_base',
                'type' => 'int',
            ],
        ],
    ],
    'basename' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'suffix',
                'type' => 'string',
            ],
        ],
    ],
    'bcadd' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bccomp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcdiv' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcmod' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcmul' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcpow' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'exponent',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcpowmod' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'exponent',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'modulus',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcscale' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcsqrt' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bcsub' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'num2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'scale',
                'type' => '?int',
            ],
        ],
    ],
    'bin2hex' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'bind_textdomain_codeset' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'codeset',
                'type' => '?string',
            ],
        ],
    ],
    'bindec' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'binary_string',
                'type' => 'string',
            ],
        ],
    ],
    'bindtextdomain' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'directory',
                'type' => '?string',
            ],
        ],
    ],
    'boolval' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'cal_days_in_month' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'calendar',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'cal_from_jd' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'calendar',
                'type' => 'int',
            ],
        ],
    ],
    'cal_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'calendar',
                'type' => 'int',
            ],
        ],
    ],
    'cal_to_jd' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'calendar',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'call_user_func' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'args',
                'type' => 'mixed',
            ],
        ],
    ],
    'call_user_func_array' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'args',
                'type' => 'array',
            ],
        ],
    ],
    'ceil' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-int',
                'name' => 'num',
                'type' => 'int|float',
            ],
        ],
    ],
    'chdir' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'checkdate' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'checkdnsrr' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'type',
                'type' => 'string',
            ],
        ],
    ],
    'chgrp' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'group',
                'type' => 'string|int',
            ],
        ],
    ],
    'chmod' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
        ],
    ],
    'chop' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
        ],
    ],
    'chown' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'user',
                'type' => 'string|int',
            ],
        ],
    ],
    'chr' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'codepoint',
                'type' => 'int',
            ],
        ],
    ],
    'chroot' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'chunk_split' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'separator',
                'type' => 'string',
            ],
        ],
    ],
    'class_alias' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'alias',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'class_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'class_implements' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object_or_class',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'class_parents' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object_or_class',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'class_uses' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object_or_class',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'clearstatcache' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'clear_realpath_cache',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'cli_get_process_title' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            
        ],
    ],
    'cli_set_process_title' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'title',
                'type' => 'string',
            ],
        ],
    ],
    'closedir' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dir_handle',
                'type' => '',
            ],
        ],
    ],
    'closelog' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'collator_asort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'collator_compare' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'collator_create' => [
        'return' => [
            'singleType' => false,
            'type' => '?Collator',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'collator_get_attribute' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
        ],
    ],
    'collator_get_error_code' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
        ],
    ],
    'collator_get_error_message' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
        ],
    ],
    'collator_get_locale' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
        ],
    ],
    'collator_get_sort_key' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'collator_get_strength' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
        ],
    ],
    'collator_set_attribute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'value',
                'type' => 'int',
            ],
        ],
    ],
    'collator_set_strength' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'strength',
                'type' => 'int',
            ],
        ],
    ],
    'collator_sort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'collator_sort_with_sort_keys' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'Collator',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'compact' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'var_name',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'var_names',
                'type' => '',
            ],
        ],
    ],
    'connection_aborted' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'connection_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'constant' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'convert_uudecode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'convert_uuencode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'copy' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'from',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'cos' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'cosh' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-Countable',
                'name' => 'value',
                'type' => 'Countable|array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'count_chars' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'crc32' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'crypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'salt',
                'type' => 'string',
            ],
        ],
    ],
    'ctype_alnum' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_alpha' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_cntrl' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_digit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_graph' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_lower' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_print' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_punct' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_space' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_upper' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'ctype_xdigit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'text',
                'type' => 'mixed',
            ],
        ],
    ],
    'curl_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_copy_handle' => [
        'return' => [
            'singleType' => false,
            'type' => 'CurlHandle|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_escape' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'curl_exec' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_file_create' => [
        'return' => [
            'singleType' => true,
            'type' => 'CURLFile',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mime_type',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'posted_filename',
                'type' => '?string',
            ],
        ],
    ],
    'curl_getinfo' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'option',
                'type' => '?int',
            ],
        ],
    ],
    'curl_init' => [
        'return' => [
            'singleType' => false,
            'type' => 'CurlHandle|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'url',
                'type' => '?string',
            ],
        ],
    ],
    'curl_multi_add_handle' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_multi_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
        ],
    ],
    'curl_multi_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
        ],
    ],
    'curl_multi_exec' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'still_running',
                'type' => '',
            ],
        ],
    ],
    'curl_multi_getcontent' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_multi_info_read' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'queued_messages',
                'type' => '',
            ],
        ],
    ],
    'curl_multi_init' => [
        'return' => [
            'singleType' => true,
            'type' => 'CurlMultiHandle',
        ],
        'params' => [
            
        ],
    ],
    'curl_multi_remove_handle' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_multi_select' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'timeout',
                'type' => 'float',
            ],
        ],
    ],
    'curl_multi_setopt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'multi_handle',
                'type' => 'CurlMultiHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'curl_multi_strerror' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_code',
                'type' => 'int',
            ],
        ],
    ],
    'curl_pause' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'curl_reset' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
        ],
    ],
    'curl_setopt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'curl_setopt_array' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'curl_share_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'share_handle',
                'type' => 'CurlShareHandle',
            ],
        ],
    ],
    'curl_share_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'share_handle',
                'type' => 'CurlShareHandle',
            ],
        ],
    ],
    'curl_share_init' => [
        'return' => [
            'singleType' => true,
            'type' => 'CurlShareHandle',
        ],
        'params' => [
            
        ],
    ],
    'curl_share_setopt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'share_handle',
                'type' => 'CurlShareHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'curl_share_strerror' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_code',
                'type' => 'int',
            ],
        ],
    ],
    'curl_strerror' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_code',
                'type' => 'int',
            ],
        ],
    ],
    'curl_unescape' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => 'CurlHandle',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'curl_version' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'current' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
        ],
    ],
    'date' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
        ],
    ],
    'date_add' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateTime',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'interval',
                'type' => 'DateInterval',
            ],
        ],
    ],
    'date_create' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTime|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '?DateTimeZone',
            ],
        ],
    ],
    'date_create_from_format' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTime|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '?DateTimeZone',
            ],
        ],
    ],
    'date_create_immutable' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTimeImmutable|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '?DateTimeZone',
            ],
        ],
    ],
    'date_create_immutable_from_format' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTimeImmutable|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '?DateTimeZone',
            ],
        ],
    ],
    'date_date_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateTime',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'day',
                'type' => 'int',
            ],
        ],
    ],
    'date_default_timezone_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'date_default_timezone_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
        ],
    ],
    'date_diff' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateInterval',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'baseObject',
                'type' => 'DateTimeInterface',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'targetObject',
                'type' => 'DateTimeInterface',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'absolute',
                'type' => 'bool',
            ],
        ],
    ],
    'date_format' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeInterface',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
        ],
    ],
    'date_get_last_errors' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'date_interval_create_from_date_string' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateInterval|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
        ],
    ],
    'date_interval_format' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateInterval',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
        ],
    ],
    'date_isodate_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateTime',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'week',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dayOfWeek',
                'type' => 'int',
            ],
        ],
    ],
    'date_modify' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTime|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'modifier',
                'type' => 'string',
            ],
        ],
    ],
    'date_offset_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeInterface',
            ],
        ],
    ],
    'date_parse' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
        ],
    ],
    'date_parse_from_format' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
        ],
    ],
    'date_sub' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateTime',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'interval',
                'type' => 'DateInterval',
            ],
        ],
    ],
    'date_sun_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timestamp',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'latitude',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'longitude',
                'type' => 'float',
            ],
        ],
    ],
    'date_sunrise' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|float|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timestamp',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'returnFormat',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'latitude',
                'type' => '?float',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'longitude',
                'type' => '?float',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zenith',
                'type' => '?float',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'utcOffset',
                'type' => '?float',
            ],
        ],
    ],
    'date_sunset' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|float|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timestamp',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'returnFormat',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'latitude',
                'type' => '?float',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'longitude',
                'type' => '?float',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zenith',
                'type' => '?float',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'utcOffset',
                'type' => '?float',
            ],
        ],
    ],
    'date_time_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateTime',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'hour',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'minute',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'second',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'microsecond',
                'type' => 'int',
            ],
        ],
    ],
    'date_timestamp_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeInterface',
            ],
        ],
    ],
    'date_timestamp_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateTime',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timestamp',
                'type' => 'int',
            ],
        ],
    ],
    'date_timezone_get' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTimeZone|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeInterface',
            ],
        ],
    ],
    'date_timezone_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'DateTime',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTime',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'DateTimeZone',
            ],
        ],
    ],
    'datefmt_create' => [
        'return' => [
            'singleType' => false,
            'type' => '?IntlDateFormatter',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'locale',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dateType',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timeType',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-IntlCalendar',
                'name' => 'calendar',
                'type' => 'IntlCalendar|int|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pattern',
                'type' => '?string',
            ],
        ],
    ],
    'datefmt_format' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'datetime',
                'type' => '',
            ],
        ],
    ],
    'datefmt_format_object' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'datetime',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'format',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'locale',
                'type' => '?string',
            ],
        ],
    ],
    'datefmt_get_calendar' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_calendar_object' => [
        'return' => [
            'singleType' => false,
            'type' => 'IntlCalendar|false|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_datetype' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_error_code' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_error_message' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_locale' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
        ],
    ],
    'datefmt_get_pattern' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_timetype' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_timezone' => [
        'return' => [
            'singleType' => false,
            'type' => 'IntlTimeZone|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_get_timezone_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_is_lenient' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
        ],
    ],
    'datefmt_localtime' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'offset',
                'type' => '',
            ],
        ],
    ],
    'datefmt_parse' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'offset',
                'type' => '',
            ],
        ],
    ],
    'datefmt_set_calendar' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-IntlCalendar',
                'name' => 'calendar',
                'type' => 'IntlCalendar|int|null',
            ],
        ],
    ],
    'datefmt_set_lenient' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'lenient',
                'type' => 'bool',
            ],
        ],
    ],
    'datefmt_set_pattern' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
        ],
    ],
    'datefmt_set_timezone' => [
        'return' => [
            'singleType' => false,
            'type' => '?bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'IntlDateFormatter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '',
            ],
        ],
    ],
    'dcgettext' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'category',
                'type' => 'int',
            ],
        ],
    ],
    'dcngettext' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'singular',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'plural',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'count',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'category',
                'type' => 'int',
            ],
        ],
    ],
    'debug_backtrace' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'options',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
        ],
    ],
    'debug_print_backtrace' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'options',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
        ],
    ],
    'debug_zval_dump' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'decbin' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num',
                'type' => 'int',
            ],
        ],
    ],
    'dechex' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num',
                'type' => 'int',
            ],
        ],
    ],
    'decoct' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num',
                'type' => 'int',
            ],
        ],
    ],
    'define' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'constant_name',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'case_insensitive',
                'type' => 'bool',
            ],
        ],
    ],
    'defined' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'constant_name',
                'type' => 'string',
            ],
        ],
    ],
    'deflate_add' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'DeflateContext',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flush_mode',
                'type' => 'int',
            ],
        ],
    ],
    'deflate_init' => [
        'return' => [
            'singleType' => false,
            'type' => 'DeflateContext|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'deg2rad' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'dgettext' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
        ],
    ],
    'dir' => [
        'return' => [
            'singleType' => false,
            'type' => 'Directory|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'dirname' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'levels',
                'type' => 'int',
            ],
        ],
    ],
    'disk_free_space' => [
        'return' => [
            'singleType' => false,
            'type' => 'float|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'disk_total_space' => [
        'return' => [
            'singleType' => false,
            'type' => 'float|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'diskfreespace' => [
        'return' => [
            'singleType' => false,
            'type' => 'float|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'dl' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'extension_filename',
                'type' => 'string',
            ],
        ],
    ],
    'dngettext' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'singular',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'plural',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'count',
                'type' => 'int',
            ],
        ],
    ],
    'dns_check_record' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'type',
                'type' => 'string',
            ],
        ],
    ],
    'dns_get_mx' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'hosts',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'weights',
                'type' => '',
            ],
        ],
    ],
    'dns_get_record' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'authoritative_name_servers',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'additional_records',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'raw',
                'type' => 'bool',
            ],
        ],
    ],
    'dom_import_simplexml' => [
        'return' => [
            'singleType' => true,
            'type' => 'DOMElement',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'node',
                'type' => 'object',
            ],
        ],
    ],
    'doubleval' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'easter_date' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'year',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'easter_days' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'year',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'end' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
        ],
    ],
    'enum_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'enum',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'error_clear_last' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'error_get_last' => [
        'return' => [
            'singleType' => false,
            'type' => '?array',
        ],
        'params' => [
            
        ],
    ],
    'error_log' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'message_type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'destination',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'additional_headers',
                'type' => '?string',
            ],
        ],
    ],
    'error_reporting' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_level',
                'type' => '?int',
            ],
        ],
    ],
    'escapeshellarg' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'arg',
                'type' => 'string',
            ],
        ],
    ],
    'escapeshellcmd' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
        ],
    ],
    'exec' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'output',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result_code',
                'type' => '',
            ],
        ],
    ],
    'exif_imagetype' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'exif_read_data' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'required_sections',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'as_arrays',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'read_thumbnail',
                'type' => 'bool',
            ],
        ],
    ],
    'exif_tagname' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'index',
                'type' => 'int',
            ],
        ],
    ],
    'exif_thumbnail' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'width',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'height',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image_type',
                'type' => '',
            ],
        ],
    ],
    'exp' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'explode' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'separator',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
        ],
    ],
    'expm1' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'extension_loaded' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'extension',
                'type' => 'string',
            ],
        ],
    ],
    'extract' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'prefix',
                'type' => 'string',
            ],
        ],
    ],
    'fclose' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'fdatasync' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'fdiv' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num1',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num2',
                'type' => 'float',
            ],
        ],
    ],
    'feof' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'fflush' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'fgetc' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'fgetcsv' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'separator',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'enclosure',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'escape',
                'type' => 'string',
            ],
        ],
    ],
    'fgets' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'file' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'file_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'file_get_contents' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'use_include_path',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'file_put_contents' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'data',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'fileatime' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'filectime' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'filegroup' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'fileinode' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'filemtime' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'fileowner' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'fileperms' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'filesize' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'filetype' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'filter_has_var' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'input_type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'var_name',
                'type' => 'string',
            ],
        ],
    ],
    'filter_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'filter_input' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'var_name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'filter',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array|int',
            ],
        ],
    ],
    'filter_input_array' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'add_empty',
                'type' => 'bool',
            ],
        ],
    ],
    'filter_list' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'filter_var' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'filter',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array|int',
            ],
        ],
    ],
    'filter_var_array' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'add_empty',
                'type' => 'bool',
            ],
        ],
    ],
    'finfo_buffer' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'finfo',
                'type' => 'finfo',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'finfo_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'finfo',
                'type' => 'finfo',
            ],
        ],
    ],
    'finfo_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'finfo',
                'type' => 'finfo',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'finfo_open' => [
        'return' => [
            'singleType' => false,
            'type' => 'finfo|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'magic_database',
                'type' => '?string',
            ],
        ],
    ],
    'finfo_set_flags' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'finfo',
                'type' => 'finfo',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'floatval' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'flock' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'operation',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'would_block',
                'type' => '',
            ],
        ],
    ],
    'floor' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-int',
                'name' => 'num',
                'type' => 'int|float',
            ],
        ],
    ],
    'flush' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'fmod' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num1',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num2',
                'type' => 'float',
            ],
        ],
    ],
    'fnmatch' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'fopen' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mode',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'use_include_path',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'forward_static_call' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'args',
                'type' => 'mixed',
            ],
        ],
    ],
    'forward_static_call_array' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'args',
                'type' => 'array',
            ],
        ],
    ],
    'fpassthru' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'fprintf' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'fputcsv' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'fields',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'separator',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'enclosure',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'escape',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'eol',
                'type' => 'string',
            ],
        ],
    ],
    'fputs' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'fread' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'frenchtojd' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'fscanf' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|int|false|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'vars',
                'type' => 'mixed',
            ],
        ],
    ],
    'fseek' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'whence',
                'type' => 'int',
            ],
        ],
    ],
    'fsockopen' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_code',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_message',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timeout',
                'type' => '?float',
            ],
        ],
    ],
    'fstat' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'fsync' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'ftell' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'ftok' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'project_id',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_alloc' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'response',
                'type' => '',
            ],
        ],
    ],
    'ftp_append' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'local_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_cdup' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
        ],
    ],
    'ftp_chdir' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_chmod' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
        ],
    ],
    'ftp_connect' => [
        'return' => [
            'singleType' => false,
            'type' => 'FTP\Connection|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timeout',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_delete' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_exec' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_fget' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_fput' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'local_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_get_option' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_login' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'username',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_mdtm' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_mkdir' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_mlsd' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_nb_continue' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
        ],
    ],
    'ftp_nb_fget' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_nb_fput' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_nb_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'local_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_nb_put' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'local_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_nlist' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_pasv' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'ftp_put' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'remote_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'local_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_pwd' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
        ],
    ],
    'ftp_quit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
        ],
    ],
    'ftp_raw' => [
        'return' => [
            'singleType' => false,
            'type' => '?array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_rawlist' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'recursive',
                'type' => 'bool',
            ],
        ],
    ],
    'ftp_rename' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'from',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_rmdir' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_set_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'ftp_site' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_size' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'ftp_ssl_connect' => [
        'return' => [
            'singleType' => false,
            'type' => 'FTP\Connection|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timeout',
                'type' => 'int',
            ],
        ],
    ],
    'ftp_systype' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ftp',
                'type' => 'FTP\Connection',
            ],
        ],
    ],
    'ftruncate' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
        ],
    ],
    'func_get_arg' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'position',
                'type' => 'int',
            ],
        ],
    ],
    'func_get_args' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'func_num_args' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'function_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'function',
                'type' => 'string',
            ],
        ],
    ],
    'fwrite' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'gc_collect_cycles' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'gc_disable' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'gc_enable' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'gc_enabled' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'gc_mem_caches' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'gc_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'gd_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'get_browser' => [
        'return' => [
            'singleType' => false,
            'type' => 'object|array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'user_agent',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'return_array',
                'type' => 'bool',
            ],
        ],
    ],
    'get_called_class' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'get_cfg_var' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'option',
                'type' => 'string',
            ],
        ],
    ],
    'get_class' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'object',
            ],
        ],
    ],
    'get_class_methods' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'object_or_class',
                'type' => 'object|string',
            ],
        ],
    ],
    'get_class_vars' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
        ],
    ],
    'get_current_user' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'get_debug_type' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'get_declared_classes' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'get_declared_interfaces' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'get_declared_traits' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'get_defined_constants' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'categorize',
                'type' => 'bool',
            ],
        ],
    ],
    'get_defined_functions' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'exclude_disabled',
                'type' => 'bool',
            ],
        ],
    ],
    'get_defined_vars' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'get_extension_funcs' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'extension',
                'type' => 'string',
            ],
        ],
    ],
    'get_headers' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'url',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'associative',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'get_html_translation_table' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'table',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'encoding',
                'type' => 'string',
            ],
        ],
    ],
    'get_include_path' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'get_included_files' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'get_loaded_extensions' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'zend_extensions',
                'type' => 'bool',
            ],
        ],
    ],
    'get_mangled_object_vars' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'object',
            ],
        ],
    ],
    'get_meta_tags' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'use_include_path',
                'type' => 'bool',
            ],
        ],
    ],
    'get_object_vars' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'object',
            ],
        ],
    ],
    'get_parent_class' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'object_or_class',
                'type' => 'object|string',
            ],
        ],
    ],
    'get_required_files' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'get_resource_id' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'resource',
                'type' => '',
            ],
        ],
    ],
    'get_resource_type' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'resource',
                'type' => '',
            ],
        ],
    ],
    'get_resources' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'type',
                'type' => '?string',
            ],
        ],
    ],
    'getcwd' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'getdate' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
        ],
    ],
    'getenv' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'name',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'local_only',
                'type' => 'bool',
            ],
        ],
    ],
    'gethostbyaddr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ip',
                'type' => 'string',
            ],
        ],
    ],
    'gethostbyname' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
        ],
    ],
    'gethostbynamel' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
        ],
    ],
    'gethostname' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'getimagesize' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image_info',
                'type' => '',
            ],
        ],
    ],
    'getimagesizefromstring' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image_info',
                'type' => '',
            ],
        ],
    ],
    'getlastmod' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            
        ],
    ],
    'getmxrr' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'hosts',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'weights',
                'type' => '',
            ],
        ],
    ],
    'getmygid' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            
        ],
    ],
    'getmyinode' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            
        ],
    ],
    'getmypid' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            
        ],
    ],
    'getmyuid' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            
        ],
    ],
    'getopt' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'short_options',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'long_options',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest_index',
                'type' => '',
            ],
        ],
    ],
    'getprotobyname' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'protocol',
                'type' => 'string',
            ],
        ],
    ],
    'getprotobynumber' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'protocol',
                'type' => 'int',
            ],
        ],
    ],
    'getrandmax' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'getrusage' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'getservbyname' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'service',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'protocol',
                'type' => 'string',
            ],
        ],
    ],
    'getservbyport' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'protocol',
                'type' => 'string',
            ],
        ],
    ],
    'gettext' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
        ],
    ],
    'gettimeofday' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'as_float',
                'type' => 'bool',
            ],
        ],
    ],
    'gettype' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'glob' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'gmdate' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
        ],
    ],
    'gmmktime' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'hour',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'minute',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'second',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'month',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'day',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'year',
                'type' => '?int',
            ],
        ],
    ],
    'gmstrftime' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
        ],
    ],
    'grapheme_extract' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'next',
                'type' => '',
            ],
        ],
    ],
    'grapheme_stripos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'grapheme_stristr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'beforeNeedle',
                'type' => 'bool',
            ],
        ],
    ],
    'grapheme_strlen' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'grapheme_strpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'grapheme_strripos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'grapheme_strrpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'grapheme_strstr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'beforeNeedle',
                'type' => 'bool',
            ],
        ],
    ],
    'grapheme_substr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'gregoriantojd' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'gzclose' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'gzcompress' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
        ],
    ],
    'gzdecode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_length',
                'type' => 'int',
            ],
        ],
    ],
    'gzdeflate' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
        ],
    ],
    'gzencode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
        ],
    ],
    'gzeof' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'gzfile' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'use_include_path',
                'type' => 'int',
            ],
        ],
    ],
    'gzgetc' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'gzgets' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'gzinflate' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_length',
                'type' => 'int',
            ],
        ],
    ],
    'gzopen' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mode',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'use_include_path',
                'type' => 'int',
            ],
        ],
    ],
    'gzpassthru' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'gzputs' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'gzread' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'gzrewind' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'gzseek' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'whence',
                'type' => 'int',
            ],
        ],
    ],
    'gztell' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'gzuncompress' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_length',
                'type' => 'int',
            ],
        ],
    ],
    'gzwrite' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'hash' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'hash_algos' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'hash_copy' => [
        'return' => [
            'singleType' => true,
            'type' => 'HashContext',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'HashContext',
            ],
        ],
    ],
    'hash_equals' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'known_string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'user_string',
                'type' => 'string',
            ],
        ],
    ],
    'hash_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'hash_final' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'HashContext',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'hash_hkdf' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'info',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'salt',
                'type' => 'string',
            ],
        ],
    ],
    'hash_hmac' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'hash_hmac_algos' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'hash_hmac_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'hash_init' => [
        'return' => [
            'singleType' => true,
            'type' => 'HashContext',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'hash_pbkdf2' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'salt',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'iterations',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'hash_update' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'HashContext',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
        ],
    ],
    'hash_update_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'HashContext',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream_context',
                'type' => '',
            ],
        ],
    ],
    'hash_update_stream' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'HashContext',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'header' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'header',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'replace',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'response_code',
                'type' => 'int',
            ],
        ],
    ],
    'header_register_callback' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'header_remove' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'name',
                'type' => '?string',
            ],
        ],
    ],
    'headers_list' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'headers_sent' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'filename',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'line',
                'type' => '',
            ],
        ],
    ],
    'hebrev' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_chars_per_line',
                'type' => 'int',
            ],
        ],
    ],
    'hex2bin' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'hexdec' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hex_string',
                'type' => 'string',
            ],
        ],
    ],
    'highlight_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'return',
                'type' => 'bool',
            ],
        ],
    ],
    'highlight_string' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'return',
                'type' => 'bool',
            ],
        ],
    ],
    'hrtime' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|int|float|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'as_number',
                'type' => 'bool',
            ],
        ],
    ],
    'html_entity_decode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'htmlentities' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'double_encode',
                'type' => 'bool',
            ],
        ],
    ],
    'htmlspecialchars' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'double_encode',
                'type' => 'bool',
            ],
        ],
    ],
    'htmlspecialchars_decode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'http_build_query' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'data',
                'type' => 'object|array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'numeric_prefix',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'arg_separator',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding_type',
                'type' => 'int',
            ],
        ],
    ],
    'http_response_code' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'response_code',
                'type' => 'int',
            ],
        ],
    ],
    'hypot' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'x',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'y',
                'type' => 'float',
            ],
        ],
    ],
    'iconv' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'from_encoding',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to_encoding',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'iconv_get_encoding' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'type',
                'type' => 'string',
            ],
        ],
    ],
    'iconv_mime_decode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'iconv_mime_decode_headers' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'headers',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'iconv_mime_encode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'field_name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'field_value',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'iconv_set_encoding' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'type',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'encoding',
                'type' => 'string',
            ],
        ],
    ],
    'iconv_strlen' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'iconv_strpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'iconv_strrpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'iconv_substr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'idate' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
        ],
    ],
    'idn_to_ascii' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'variant',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'idna_info',
                'type' => '',
            ],
        ],
    ],
    'idn_to_utf8' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'variant',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'idna_info',
                'type' => '',
            ],
        ],
    ],
    'ignore_user_abort' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'enable',
                'type' => '?bool',
            ],
        ],
    ],
    'image_type_to_extension' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'image_type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'include_dot',
                'type' => 'bool',
            ],
        ],
    ],
    'image_type_to_mime_type' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'image_type',
                'type' => 'int',
            ],
        ],
    ],
    'imageaffine' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'affine',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'clip',
                'type' => '?array',
            ],
        ],
    ],
    'imageaffinematrixconcat' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'matrix1',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'matrix2',
                'type' => 'array',
            ],
        ],
    ],
    'imageaffinematrixget' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '',
            ],
        ],
    ],
    'imagealphablending' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'imageantialias' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'imagearc' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'start_angle',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'end_angle',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagebmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'compressed',
                'type' => 'bool',
            ],
        ],
    ],
    'imagechar' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-GdFont',
                'name' => 'font',
                'type' => 'GdFont|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'char',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagecharup' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-GdFont',
                'name' => 'font',
                'type' => 'GdFont|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'char',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorallocate' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorallocatealpha' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'alpha',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorat' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorclosest' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorclosestalpha' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'alpha',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorclosesthwb' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolordeallocate' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorexact' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorexactalpha' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'alpha',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolormatch' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image1',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image2',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagecolorresolve' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorresolvealpha' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'alpha',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorset' => [
        'return' => [
            'singleType' => false,
            'type' => '?bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'red',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'green',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'blue',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'alpha',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorsforindex' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagecolorstotal' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagecolortransparent' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'color',
                'type' => '?int',
            ],
        ],
    ],
    'imageconvolution' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'matrix',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'divisor',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'offset',
                'type' => 'float',
            ],
        ],
    ],
    'imagecopy' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dst_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'src_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_height',
                'type' => 'int',
            ],
        ],
    ],
    'imagecopymerge' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dst_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'src_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'pct',
                'type' => 'int',
            ],
        ],
    ],
    'imagecopymergegray' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dst_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'src_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'pct',
                'type' => 'int',
            ],
        ],
    ],
    'imagecopyresampled' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dst_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'src_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_height',
                'type' => 'int',
            ],
        ],
    ],
    'imagecopyresized' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dst_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'src_image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dst_height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'src_height',
                'type' => 'int',
            ],
        ],
    ],
    'imagecreate' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
        ],
    ],
    'imagecreatefrombmp' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromgd' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromgd2' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromgd2part' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
        ],
    ],
    'imagecreatefromgif' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromjpeg' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefrompng' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromstring' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromtga' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromwbmp' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromwebp' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromxbm' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatefromxpm' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imagecreatetruecolor' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
        ],
    ],
    'imagecrop' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'rectangle',
                'type' => 'array',
            ],
        ],
    ],
    'imagecropauto' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'threshold',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagedashedline' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagedestroy' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imageellipse' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagefill' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagefilledarc' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'start_angle',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'end_angle',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'style',
                'type' => 'int',
            ],
        ],
    ],
    'imagefilledellipse' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'center_y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagefilledpolygon' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'points',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num_points_or_color',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'color',
                'type' => '?int',
            ],
        ],
    ],
    'imagefilledrectangle' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagefilltoborder' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'border_color',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagefilter' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'filter',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'args',
                'type' => '',
            ],
        ],
    ],
    'imageflip' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'imagefontheight' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-GdFont',
                'name' => 'font',
                'type' => 'GdFont|int',
            ],
        ],
    ],
    'imagefontwidth' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-GdFont',
                'name' => 'font',
                'type' => 'GdFont|int',
            ],
        ],
    ],
    'imageftbbox' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'size',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'angle',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'font_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'imagefttext' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'size',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'angle',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'font_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'text',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'imagegammacorrect' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'input_gamma',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'output_gamma',
                'type' => 'float',
            ],
        ],
    ],
    'imagegd' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '?string',
            ],
        ],
    ],
    'imagegd2' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'chunk_size',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'imagegetclip' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagegetinterpolation' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagegif' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
        ],
    ],
    'imageinterlace' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'enable',
                'type' => '?bool',
            ],
        ],
    ],
    'imageistruecolor' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagejpeg' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'quality',
                'type' => 'int',
            ],
        ],
    ],
    'imagelayereffect' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'effect',
                'type' => 'int',
            ],
        ],
    ],
    'imageline' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imageloadfont' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdFont|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'imageopenpolygon' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'points',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num_points_or_color',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'color',
                'type' => '?int',
            ],
        ],
    ],
    'imagepalettecopy' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dst',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'src',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagepalettetotruecolor' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagepng' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'quality',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'filters',
                'type' => 'int',
            ],
        ],
    ],
    'imagepolygon' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'points',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num_points_or_color',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'color',
                'type' => '?int',
            ],
        ],
    ],
    'imagerectangle' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imageresolution' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'resolution_x',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'resolution_y',
                'type' => '?int',
            ],
        ],
    ],
    'imagerotate' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'angle',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'background_color',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'ignore_transparent',
                'type' => 'bool',
            ],
        ],
    ],
    'imagesavealpha' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'imagescale' => [
        'return' => [
            'singleType' => false,
            'type' => 'GdImage|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'height',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'imagesetbrush' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'brush',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagesetclip' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x2',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y2',
                'type' => 'int',
            ],
        ],
    ],
    'imagesetinterpolation' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'method',
                'type' => 'int',
            ],
        ],
    ],
    'imagesetpixel' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagesetstyle' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'style',
                'type' => 'array',
            ],
        ],
    ],
    'imagesetthickness' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'thickness',
                'type' => 'int',
            ],
        ],
    ],
    'imagesettile' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tile',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagestring' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-GdFont',
                'name' => 'font',
                'type' => 'GdFont|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagestringup' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-GdFont',
                'name' => 'font',
                'type' => 'GdFont|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
        ],
    ],
    'imagesx' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagesy' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
        ],
    ],
    'imagetruecolortopalette' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'dither',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num_colors',
                'type' => 'int',
            ],
        ],
    ],
    'imagettfbbox' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'size',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'angle',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'font_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'imagettftext' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'size',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'angle',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'x',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'y',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'color',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'font_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'text',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'imagetypes' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'imagewbmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'foreground_color',
                'type' => '?int',
            ],
        ],
    ],
    'imagewebp' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'quality',
                'type' => 'int',
            ],
        ],
    ],
    'imagexbm' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'image',
                'type' => 'GdImage',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'filename',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'foreground_color',
                'type' => '?int',
            ],
        ],
    ],
    'implode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'separator',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'array',
                'type' => '?array',
            ],
        ],
    ],
    'in_array' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'needle',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'haystack',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'strict',
                'type' => 'bool',
            ],
        ],
    ],
    'inet_ntop' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ip',
                'type' => 'string',
            ],
        ],
    ],
    'inet_pton' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ip',
                'type' => 'string',
            ],
        ],
    ],
    'inflate_add' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'InflateContext',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flush_mode',
                'type' => 'int',
            ],
        ],
    ],
    'inflate_get_read_len' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'InflateContext',
            ],
        ],
    ],
    'inflate_get_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => 'InflateContext',
            ],
        ],
    ],
    'inflate_init' => [
        'return' => [
            'singleType' => false,
            'type' => 'InflateContext|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'ini_alter' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'option',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'value',
                'type' => 'string|int|float|bool|null',
            ],
        ],
    ],
    'ini_get' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'option',
                'type' => 'string',
            ],
        ],
    ],
    'ini_get_all' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'extension',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'details',
                'type' => 'bool',
            ],
        ],
    ],
    'ini_restore' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'option',
                'type' => 'string',
            ],
        ],
    ],
    'ini_set' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'option',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'value',
                'type' => 'string|int|float|bool|null',
            ],
        ],
    ],
    'intdiv' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num1',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num2',
                'type' => 'int',
            ],
        ],
    ],
    'interface_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'interface',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'intl_error_name' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'errorCode',
                'type' => 'int',
            ],
        ],
    ],
    'intl_get_error_code' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'intl_get_error_message' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'intl_is_failure' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'errorCode',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_add' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'value',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_after' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'other',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_before' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'other',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_clear' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'field',
                'type' => '?int',
            ],
        ],
    ],
    'intlcal_create_instance' => [
        'return' => [
            'singleType' => false,
            'type' => '?IntlCalendar',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'locale',
                'type' => '?string',
            ],
        ],
    ],
    'intlcal_equals' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'other',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_field_difference' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'timestamp',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_from_date_time' => [
        'return' => [
            'singleType' => false,
            'type' => '?IntlCalendar',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'datetime',
                'type' => 'DateTime|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'locale',
                'type' => '?string',
            ],
        ],
    ],
    'intlcal_get' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_actual_maximum' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_actual_minimum' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_available_locales' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'intlcal_get_day_of_week_type' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dayOfWeek',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_error_code' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_error_message' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_first_day_of_week' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_greatest_minimum' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_keyword_values_for_locale' => [
        'return' => [
            'singleType' => false,
            'type' => 'IntlIterator|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'keyword',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'onlyCommon',
                'type' => 'bool',
            ],
        ],
    ],
    'intlcal_get_least_maximum' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_locale' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_maximum' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_minimal_days_in_first_week' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_minimum' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_get_now' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            
        ],
    ],
    'intlcal_get_repeated_wall_time_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_skipped_wall_time_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_time' => [
        'return' => [
            'singleType' => false,
            'type' => 'float|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_time_zone' => [
        'return' => [
            'singleType' => false,
            'type' => 'IntlTimeZone|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_type' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_get_weekend_transition' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dayOfWeek',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_in_daylight_time' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_is_equivalent_to' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'other',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_is_lenient' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlcal_is_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_is_weekend' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?float',
            ],
        ],
    ],
    'intlcal_roll' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'field',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'intlcal_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dayOfMonth',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'hour',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'minute',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'second',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_set_first_day_of_week' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'dayOfWeek',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_set_lenient' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'lenient',
                'type' => 'bool',
            ],
        ],
    ],
    'intlcal_set_minimal_days_in_first_week' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'days',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_set_repeated_wall_time_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_set_skipped_wall_time_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
        ],
    ],
    'intlcal_set_time' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'timestamp',
                'type' => 'float',
            ],
        ],
    ],
    'intlcal_set_time_zone' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => '',
            ],
        ],
    ],
    'intlcal_to_date_time' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTime|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlCalendar',
            ],
        ],
    ],
    'intlgregcal_create_instance' => [
        'return' => [
            'singleType' => false,
            'type' => '?IntlGregorianCalendar',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezoneOrYear',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'localeOrMonth',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'day',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'hour',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'minute',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'second',
                'type' => '',
            ],
        ],
    ],
    'intlgregcal_get_gregorian_change' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlGregorianCalendar',
            ],
        ],
    ],
    'intlgregcal_is_leap_year' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlGregorianCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'intlgregcal_set_gregorian_change' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'calendar',
                'type' => 'IntlGregorianCalendar',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'timestamp',
                'type' => 'float',
            ],
        ],
    ],
    'intltz_count_equivalent_ids' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
        ],
    ],
    'intltz_create_default' => [
        'return' => [
            'singleType' => true,
            'type' => 'IntlTimeZone',
        ],
        'params' => [
            
        ],
    ],
    'intltz_create_enumeration' => [
        'return' => [
            'singleType' => false,
            'type' => 'IntlIterator|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'countryOrRawOffset',
                'type' => '',
            ],
        ],
    ],
    'intltz_create_time_zone' => [
        'return' => [
            'singleType' => false,
            'type' => '?IntlTimeZone',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
        ],
    ],
    'intltz_create_time_zone_id_enumeration' => [
        'return' => [
            'singleType' => false,
            'type' => 'IntlIterator|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'region',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rawOffset',
                'type' => '?int',
            ],
        ],
    ],
    'intltz_from_date_time_zone' => [
        'return' => [
            'singleType' => false,
            'type' => '?IntlTimeZone',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'DateTimeZone',
            ],
        ],
    ],
    'intltz_get_canonical_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'isSystemId',
                'type' => '',
            ],
        ],
    ],
    'intltz_get_display_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'dst',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'style',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'locale',
                'type' => '?string',
            ],
        ],
    ],
    'intltz_get_dst_savings' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intltz_get_equivalent_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'intltz_get_error_code' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intltz_get_error_message' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intltz_get_gmt' => [
        'return' => [
            'singleType' => true,
            'type' => 'IntlTimeZone',
        ],
        'params' => [
            
        ],
    ],
    'intltz_get_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intltz_get_id_for_windows_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'region',
                'type' => '?string',
            ],
        ],
    ],
    'intltz_get_offset' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'timestamp',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'local',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rawOffset',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dstOffset',
                'type' => '',
            ],
        ],
    ],
    'intltz_get_raw_offset' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intltz_get_region' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
        ],
    ],
    'intltz_get_tz_data_version' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'intltz_get_unknown' => [
        'return' => [
            'singleType' => true,
            'type' => 'IntlTimeZone',
        ],
        'params' => [
            
        ],
    ],
    'intltz_get_windows_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezoneId',
                'type' => 'string',
            ],
        ],
    ],
    'intltz_has_same_rules' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'other',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intltz_to_date_time_zone' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTimeZone|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intltz_use_daylight_time' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timezone',
                'type' => 'IntlTimeZone',
            ],
        ],
    ],
    'intval' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'base',
                'type' => 'int',
            ],
        ],
    ],
    'ip2long' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ip',
                'type' => 'string',
            ],
        ],
    ],
    'iptcembed' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'iptc_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'spool',
                'type' => 'int',
            ],
        ],
    ],
    'iptcparse' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'iptc_block',
                'type' => 'string',
            ],
        ],
    ],
    'is_a' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object_or_class',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'allow_string',
                'type' => 'bool',
            ],
        ],
    ],
    'is_array' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_bool' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_callable' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'syntax_only',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callable_name',
                'type' => '',
            ],
        ],
    ],
    'is_countable' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_dir' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'is_double' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_executable' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'is_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'is_finite' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'is_float' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_infinite' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'is_int' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_integer' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_iterable' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_link' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'is_long' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_nan' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'is_null' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_numeric' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_object' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_readable' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'is_resource' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_scalar' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_string' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'is_subclass_of' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object_or_class',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'allow_string',
                'type' => 'bool',
            ],
        ],
    ],
    'is_uploaded_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'is_writable' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'is_writeable' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'iterator_apply' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'iterator',
                'type' => 'Traversable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'args',
                'type' => '?array',
            ],
        ],
    ],
    'iterator_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'iterator',
                'type' => 'Traversable',
            ],
        ],
    ],
    'iterator_to_array' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'iterator',
                'type' => 'Traversable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'preserve_keys',
                'type' => 'bool',
            ],
        ],
    ],
    'jddayofweek' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'jdmonthname' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'jdtofrench' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
        ],
    ],
    'jdtogregorian' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
        ],
    ],
    'jdtojewish' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'hebrew',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'jdtojulian' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
        ],
    ],
    'jdtounix' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'julian_day',
                'type' => 'int',
            ],
        ],
    ],
    'jewishtojd' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'join' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'separator',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'array',
                'type' => '?array',
            ],
        ],
    ],
    'json_decode' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'json',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'associative',
                'type' => '?bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'depth',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'json_encode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'depth',
                'type' => 'int',
            ],
        ],
    ],
    'json_last_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'json_last_error_msg' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'juliantojd' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'month',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'day',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'year',
                'type' => 'int',
            ],
        ],
    ],
    'key' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
        ],
    ],
    'key_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'krsort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'ksort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'lcfirst' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'lcg_value' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            
        ],
    ],
    'lchgrp' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'group',
                'type' => 'string|int',
            ],
        ],
    ],
    'lchown' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'user',
                'type' => 'string|int',
            ],
        ],
    ],
    'ldap_add' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_add_ext' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_bind' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dn',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'password',
                'type' => '?string',
            ],
        ],
    ],
    'ldap_bind_ext' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dn',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'password',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
        ],
    ],
    'ldap_compare' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'attribute',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_connect' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Connection|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'uri',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
        ],
    ],
    'ldap_count_entries' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
        ],
    ],
    'ldap_count_references' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
        ],
    ],
    'ldap_delete' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_delete_ext' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_dn2ufn' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
        ],
    ],
    'ldap_err2str' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'errno',
                'type' => 'int',
            ],
        ],
    ],
    'ldap_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
        ],
    ],
    'ldap_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
        ],
    ],
    'ldap_escape' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ignore',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'ldap_exop' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'request_oid',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'request_data',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'response_data',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'response_oid',
                'type' => '',
            ],
        ],
    ],
    'ldap_exop_passwd' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'user',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'old_password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'new_password',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '',
            ],
        ],
    ],
    'ldap_exop_refresh' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'ttl',
                'type' => 'int',
            ],
        ],
    ],
    'ldap_exop_whoami' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
        ],
    ],
    'ldap_explode_dn' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'with_attrib',
                'type' => 'int',
            ],
        ],
    ],
    'ldap_first_attribute' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
        ],
    ],
    'ldap_first_entry' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\ResultEntry|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
        ],
    ],
    'ldap_first_reference' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\ResultEntry|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
        ],
    ],
    'ldap_free_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
        ],
    ],
    'ldap_get_attributes' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
        ],
    ],
    'ldap_get_dn' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
        ],
    ],
    'ldap_get_entries' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
        ],
    ],
    'ldap_get_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'ldap_get_values' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'attribute',
                'type' => 'string',
            ],
        ],
    ],
    'ldap_get_values_len' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'attribute',
                'type' => 'string',
            ],
        ],
    ],
    'ldap_list' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'base',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'filter',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'attributes',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attributes_only',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'sizelimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timelimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'deref',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_mod_add' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_mod_add_ext' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_mod_del' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_mod_del_ext' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_mod_replace' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_mod_replace_ext' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_modify' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'entry',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_modify_batch' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'modifications_info',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_next_attribute' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
        ],
    ],
    'ldap_next_entry' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\ResultEntry|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
        ],
    ],
    'ldap_next_reference' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\ResultEntry|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
        ],
    ],
    'ldap_parse_exop' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'response_data',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'response_oid',
                'type' => '',
            ],
        ],
    ],
    'ldap_parse_reference' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'entry',
                'type' => 'LDAP\ResultEntry',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'referrals',
                'type' => '',
            ],
        ],
    ],
    'ldap_parse_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'LDAP\Result',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_code',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'matched_dn',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_message',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'referrals',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '',
            ],
        ],
    ],
    'ldap_read' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'base',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'filter',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'attributes',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attributes_only',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'sizelimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timelimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'deref',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_rename' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'new_rdn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'new_parent',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'delete_old_rdn',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_rename_ext' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'dn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'new_rdn',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'new_parent',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'delete_old_rdn',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_sasl_bind' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dn',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'password',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mech',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'realm',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'authc_id',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'authz_id',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'props',
                'type' => '?string',
            ],
        ],
    ],
    'ldap_search' => [
        'return' => [
            'singleType' => false,
            'type' => 'LDAP\Result|array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'base',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'filter',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'attributes',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attributes_only',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'sizelimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timelimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'deref',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'controls',
                'type' => '?array',
            ],
        ],
    ],
    'ldap_set_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => '?LDAP\Connection',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'ldap_set_rebind_proc' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => '?callable',
            ],
        ],
    ],
    'ldap_start_tls' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
        ],
    ],
    'ldap_unbind' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ldap',
                'type' => 'LDAP\Connection',
            ],
        ],
    ],
    'levenshtein' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'insertion_cost',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'replacement_cost',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'deletion_cost',
                'type' => 'int',
            ],
        ],
    ],
    'libxml_clear_errors' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'libxml_disable_entity_loader' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'disable',
                'type' => 'bool',
            ],
        ],
    ],
    'libxml_get_errors' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'libxml_get_last_error' => [
        'return' => [
            'singleType' => false,
            'type' => 'LibXMLError|false',
        ],
        'params' => [
            
        ],
    ],
    'libxml_set_external_entity_loader' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'resolver_function',
                'type' => '?callable',
            ],
        ],
    ],
    'libxml_set_streams_context' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'libxml_use_internal_errors' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'use_errors',
                'type' => '?bool',
            ],
        ],
    ],
    'link' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'target',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'link',
                'type' => 'string',
            ],
        ],
    ],
    'linkinfo' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
        ],
    ],
    'locale_accept_from_http' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'header',
                'type' => 'string',
            ],
        ],
    ],
    'locale_canonicalize' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'locale_compose' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'subtags',
                'type' => 'array',
            ],
        ],
    ],
    'locale_filter_matches' => [
        'return' => [
            'singleType' => false,
            'type' => '?bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'languageTag',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'canonicalize',
                'type' => 'bool',
            ],
        ],
    ],
    'locale_get_all_variants' => [
        'return' => [
            'singleType' => false,
            'type' => '?array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'locale_get_default' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'locale_get_display_language' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'displayLocale',
                'type' => '?string',
            ],
        ],
    ],
    'locale_get_display_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'displayLocale',
                'type' => '?string',
            ],
        ],
    ],
    'locale_get_display_region' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'displayLocale',
                'type' => '?string',
            ],
        ],
    ],
    'locale_get_display_script' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'displayLocale',
                'type' => '?string',
            ],
        ],
    ],
    'locale_get_display_variant' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'displayLocale',
                'type' => '?string',
            ],
        ],
    ],
    'locale_get_keywords' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'locale_get_primary_language' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'locale_get_region' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'locale_get_script' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'locale_lookup' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'languageTag',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'canonicalize',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'defaultLocale',
                'type' => '?string',
            ],
        ],
    ],
    'locale_parse' => [
        'return' => [
            'singleType' => false,
            'type' => '?array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'locale_set_default' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
        ],
    ],
    'localeconv' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'localtime' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'associative',
                'type' => 'bool',
            ],
        ],
    ],
    'log' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'base',
                'type' => 'float',
            ],
        ],
    ],
    'log10' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'log1p' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'long2ip' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'ip',
                'type' => 'int',
            ],
        ],
    ],
    'lstat' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'ltrim' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
        ],
    ],
    'mail' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'subject',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'additional_headers',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_params',
                'type' => 'string',
            ],
        ],
    ],
    'max' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'mb_check_encoding' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'value',
                'type' => 'array|string|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_chr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'codepoint',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_convert_case' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_convert_encoding' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'string',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to_encoding',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'from_encoding',
                'type' => 'array|string|null',
            ],
        ],
    ],
    'mb_convert_kana' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mode',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_convert_variables' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to_encoding',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'from_encoding',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'var',
                'type' => 'mixed',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'vars',
                'type' => 'mixed',
            ],
        ],
    ],
    'mb_decode_mimeheader' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'mb_decode_numericentity' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'map',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_detect_encoding' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'encodings',
                'type' => 'array|string|null',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'strict',
                'type' => 'bool',
            ],
        ],
    ],
    'mb_detect_order' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'encoding',
                'type' => 'array|string|null',
            ],
        ],
    ],
    'mb_encode_mimeheader' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'charset',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'transfer_encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'newline',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'indent',
                'type' => 'int',
            ],
        ],
    ],
    'mb_encode_numericentity' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'map',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'hex',
                'type' => 'bool',
            ],
        ],
    ],
    'mb_encoding_aliases' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'encoding',
                'type' => 'string',
            ],
        ],
    ],
    'mb_ereg' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'matches',
                'type' => '',
            ],
        ],
    ],
    'mb_ereg_match' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_ereg_replace' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'replacement',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_ereg_replace_callback' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_ereg_search' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pattern',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_ereg_search_getpos' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'mb_ereg_search_getregs' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'mb_ereg_search_init' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pattern',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_ereg_search_pos' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pattern',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_ereg_search_regs' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pattern',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_ereg_search_setpos' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'mb_eregi' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'matches',
                'type' => '',
            ],
        ],
    ],
    'mb_eregi_replace' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'replacement',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_get_info' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'type',
                'type' => 'string',
            ],
        ],
    ],
    'mb_http_input' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'type',
                'type' => '?string',
            ],
        ],
    ],
    'mb_http_output' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_internal_encoding' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_language' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'language',
                'type' => '?string',
            ],
        ],
    ],
    'mb_list_encodings' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'mb_ord' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_output_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'mb_parse_str' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => '',
            ],
        ],
    ],
    'mb_preferred_mime_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'encoding',
                'type' => 'string',
            ],
        ],
    ],
    'mb_regex_encoding' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_regex_set_options' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?string',
            ],
        ],
    ],
    'mb_scrub' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_send_mail' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'subject',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'additional_headers',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'additional_params',
                'type' => '?string',
            ],
        ],
    ],
    'mb_split' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
        ],
    ],
    'mb_str_split' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strcut' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'start',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strimwidth' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'start',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'trim_marker',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_stripos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_stristr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'before_needle',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strlen' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strrchr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'before_needle',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strrichr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'before_needle',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strripos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strrpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strstr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'before_needle',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strtolower' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strtoupper' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_strwidth' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_substitute_character' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'substitute_character',
                'type' => 'string|int|null',
            ],
        ],
    ],
    'mb_substr' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'start',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'mb_substr_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'md5' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'md5_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'memory_get_peak_usage' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'real_usage',
                'type' => 'bool',
            ],
        ],
    ],
    'memory_get_usage' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'real_usage',
                'type' => 'bool',
            ],
        ],
    ],
    'metaphone' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_phonemes',
                'type' => 'int',
            ],
        ],
    ],
    'method_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object_or_class',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'method',
                'type' => 'string',
            ],
        ],
    ],
    'mhash' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'algo',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => '?string',
            ],
        ],
    ],
    'mhash_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'mhash_get_block_size' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'algo',
                'type' => 'int',
            ],
        ],
    ],
    'mhash_get_hash_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'algo',
                'type' => 'int',
            ],
        ],
    ],
    'mhash_keygen_s2k' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'algo',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'salt',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'microtime' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'as_float',
                'type' => 'bool',
            ],
        ],
    ],
    'mime_content_type' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'filename',
                'type' => '',
            ],
        ],
    ],
    'min' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'mkdir' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'recursive',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'mktime' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'hour',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'minute',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'second',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'month',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'day',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'year',
                'type' => '?int',
            ],
        ],
    ],
    'move_uploaded_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'from',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to',
                'type' => 'string',
            ],
        ],
    ],
    'msg_get_queue' => [
        'return' => [
            'singleType' => false,
            'type' => 'SysvMessageQueue|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
        ],
    ],
    'msg_queue_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
        ],
    ],
    'msg_receive' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'queue',
                'type' => 'SysvMessageQueue',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'desired_message_type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'received_message_type',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_message_size',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'message',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'unserialize',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_code',
                'type' => '',
            ],
        ],
    ],
    'msg_remove_queue' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'queue',
                'type' => 'SysvMessageQueue',
            ],
        ],
    ],
    'msg_send' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'queue',
                'type' => 'SysvMessageQueue',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'message_type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'message',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'serialize',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'blocking',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_code',
                'type' => '',
            ],
        ],
    ],
    'msg_set_queue' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'queue',
                'type' => 'SysvMessageQueue',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'data',
                'type' => 'array',
            ],
        ],
    ],
    'msg_stat_queue' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'queue',
                'type' => 'SysvMessageQueue',
            ],
        ],
    ],
    'msgfmt_create' => [
        'return' => [
            'singleType' => false,
            'type' => '?MessageFormatter',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
        ],
    ],
    'msgfmt_format' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'MessageFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'values',
                'type' => 'array',
            ],
        ],
    ],
    'msgfmt_format_message' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'values',
                'type' => 'array',
            ],
        ],
    ],
    'msgfmt_get_error_code' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'MessageFormatter',
            ],
        ],
    ],
    'msgfmt_get_error_message' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'MessageFormatter',
            ],
        ],
    ],
    'msgfmt_get_locale' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'MessageFormatter',
            ],
        ],
    ],
    'msgfmt_get_pattern' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'MessageFormatter',
            ],
        ],
    ],
    'msgfmt_parse' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'MessageFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'msgfmt_parse_message' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
        ],
    ],
    'msgfmt_set_pattern' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'MessageFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
        ],
    ],
    'mt_getrandmax' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'mt_rand' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'min',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max',
                'type' => 'int',
            ],
        ],
    ],
    'mt_srand' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seed',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_affected_rows' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_autocommit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'mysqli_begin_transaction' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'name',
                'type' => '?string',
            ],
        ],
    ],
    'mysqli_change_user' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'username',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'database',
                'type' => '?string',
            ],
        ],
    ],
    'mysqli_character_set_name' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_commit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'name',
                'type' => '?string',
            ],
        ],
    ],
    'mysqli_connect' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'hostname',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'username',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'password',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'database',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'port',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '?string',
            ],
        ],
    ],
    'mysqli_connect_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'mysqli_connect_error' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            
        ],
    ],
    'mysqli_data_seek' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_debug' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'options',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_dump_debug_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_error_list' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_escape_string' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_execute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'params',
                'type' => '?array',
            ],
        ],
    ],
    'mysqli_fetch_all' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_fetch_array' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_fetch_assoc' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_fetch_column' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|float|false|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'column',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_fetch_field' => [
        'return' => [
            'singleType' => false,
            'type' => 'object|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_fetch_field_direct' => [
        'return' => [
            'singleType' => false,
            'type' => 'object|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'index',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_fetch_fields' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_fetch_lengths' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_fetch_object' => [
        'return' => [
            'singleType' => false,
            'type' => 'object|false|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'constructor_args',
                'type' => 'array',
            ],
        ],
    ],
    'mysqli_fetch_row' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_field_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_field_seek' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'index',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_field_tell' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_free_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_get_charset' => [
        'return' => [
            'singleType' => false,
            'type' => '?object',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_get_client_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => '?mysqli',
            ],
        ],
    ],
    'mysqli_get_client_stats' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'mysqli_get_client_version' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'mysqli_get_connection_stats' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_get_host_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_get_links_stats' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'mysqli_get_proto_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_get_server_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_get_server_version' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_get_warnings' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_warning|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_info' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_init' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli|false',
        ],
        'params' => [
            
        ],
    ],
    'mysqli_insert_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_kill' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'process_id',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_more_results' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_multi_query' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'query',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_next_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_num_fields' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_num_rows' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => 'mysqli_result',
            ],
        ],
    ],
    'mysqli_options' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'mysqli_ping' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_poll' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'read',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'reject',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'microseconds',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_prepare' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_stmt|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'query',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_query' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_result|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'query',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'result_mode',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_real_connect' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'hostname',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'username',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'password',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'database',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'port',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_real_escape_string' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_real_query' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'query',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_reap_async_query' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_result|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_refresh' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_release_savepoint' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_report' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_rollback' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'name',
                'type' => '?string',
            ],
        ],
    ],
    'mysqli_savepoint' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_select_db' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'database',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_set_charset' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'charset',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_set_opt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'mysqli_sqlstate' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_ssl_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificate',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ca_certificate',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'ca_path',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'cipher_algos',
                'type' => '?string',
            ],
        ],
    ],
    'mysqli_stat' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_stmt_affected_rows' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_attr_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_stmt_attr_set' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'value',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_stmt_bind_param' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'types',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'vars',
                'type' => 'mixed',
            ],
        ],
    ],
    'mysqli_stmt_bind_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'vars',
                'type' => 'mixed',
            ],
        ],
    ],
    'mysqli_stmt_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_data_seek' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_stmt_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_error_list' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_execute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'params',
                'type' => '?array',
            ],
        ],
    ],
    'mysqli_stmt_fetch' => [
        'return' => [
            'singleType' => false,
            'type' => '?bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_field_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_free_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_get_result' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_get_warnings' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_warning|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_init' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_stmt|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_stmt_insert_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_more_results' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_next_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_num_rows' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_param_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_prepare' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'query',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_stmt_reset' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_result_metadata' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_send_long_data' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'param_num',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
        ],
    ],
    'mysqli_stmt_sqlstate' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_stmt_store_result' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'statement',
                'type' => 'mysqli_stmt',
            ],
        ],
    ],
    'mysqli_store_result' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'mysqli_thread_id' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_thread_safe' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'mysqli_use_result' => [
        'return' => [
            'singleType' => false,
            'type' => 'mysqli_result|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'mysqli_warning_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mysql',
                'type' => 'mysqli',
            ],
        ],
    ],
    'natcasesort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'natsort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'net_get_interfaces' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'next' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
        ],
    ],
    'ngettext' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'singular',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'plural',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'count',
                'type' => 'int',
            ],
        ],
    ],
    'nl2br' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'use_xhtml',
                'type' => 'bool',
            ],
        ],
    ],
    'nl_langinfo' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'item',
                'type' => 'int',
            ],
        ],
    ],
    'normalizer_get_raw_decomposition' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'form',
                'type' => 'int',
            ],
        ],
    ],
    'normalizer_is_normalized' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'form',
                'type' => 'int',
            ],
        ],
    ],
    'normalizer_normalize' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'form',
                'type' => 'int',
            ],
        ],
    ],
    'number_format' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'decimals',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'decimal_separator',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'thousands_separator',
                'type' => '?string',
            ],
        ],
    ],
    'numfmt_create' => [
        'return' => [
            'singleType' => false,
            'type' => '?NumberFormatter',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'locale',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'style',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pattern',
                'type' => '?string',
            ],
        ],
    ],
    'numfmt_format' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-int',
                'name' => 'num',
                'type' => 'int|float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
        ],
    ],
    'numfmt_format_currency' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'amount',
                'type' => 'float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'currency',
                'type' => 'string',
            ],
        ],
    ],
    'numfmt_get_attribute' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
        ],
    ],
    'numfmt_get_error_code' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
        ],
    ],
    'numfmt_get_error_message' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
        ],
    ],
    'numfmt_get_locale' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
        ],
    ],
    'numfmt_get_pattern' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
        ],
    ],
    'numfmt_get_symbol' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'symbol',
                'type' => 'int',
            ],
        ],
    ],
    'numfmt_get_text_attribute' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
        ],
    ],
    'numfmt_parse' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'offset',
                'type' => '',
            ],
        ],
    ],
    'numfmt_parse_currency' => [
        'return' => [
            'singleType' => false,
            'type' => 'float|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'currency',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'offset',
                'type' => '',
            ],
        ],
    ],
    'numfmt_set_attribute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-int',
                'name' => 'value',
                'type' => 'int|float',
            ],
        ],
    ],
    'numfmt_set_pattern' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
        ],
    ],
    'numfmt_set_symbol' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'symbol',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
        ],
    ],
    'numfmt_set_text_attribute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'formatter',
                'type' => 'NumberFormatter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'attribute',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
        ],
    ],
    'ob_clean' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'ob_end_clean' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'ob_end_flush' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'ob_flush' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'ob_get_clean' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'ob_get_contents' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'ob_get_flush' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'ob_get_length' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            
        ],
    ],
    'ob_get_level' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'ob_get_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'full_status',
                'type' => 'bool',
            ],
        ],
    ],
    'ob_gzhandler' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'ob_implicit_flush' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'ob_list_handlers' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'ob_start' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'chunk_size',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'octdec' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'octal_string',
                'type' => 'string',
            ],
        ],
    ],
    'opcache_compile_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'opcache_get_configuration' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'opcache_get_status' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'include_scripts',
                'type' => 'bool',
            ],
        ],
    ],
    'opcache_invalidate' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'force',
                'type' => 'bool',
            ],
        ],
    ],
    'opcache_is_script_cached' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'opcache_reset' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'opendir' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'openlog' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'prefix',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'facility',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_cipher_iv_length' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'cipher_algo',
                'type' => 'string',
            ],
        ],
    ],
    'openssl_cms_decrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificate',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_cms_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificate',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'headers',
                'type' => '?array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'cipher_algo',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_cms_read' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificates',
                'type' => '',
            ],
        ],
    ],
    'openssl_cms_sign' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'headers',
                'type' => '?array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'untrusted_certificates_filename',
                'type' => '?string',
            ],
        ],
    ],
    'openssl_cms_verify' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificates',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'ca_info',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'untrusted_certificates_filename',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'content',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pk7',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'sigfile',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_csr_export' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'csr',
                'type' => 'OpenSSLCertificateSigningRequest|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'output',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'no_text',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_csr_export_to_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'csr',
                'type' => 'OpenSSLCertificateSigningRequest|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'no_text',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_csr_get_public_key' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLAsymmetricKey|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'csr',
                'type' => 'OpenSSLCertificateSigningRequest|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'short_names',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_csr_get_subject' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'csr',
                'type' => 'OpenSSLCertificateSigningRequest|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'short_names',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_csr_new' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLCertificateSigningRequest|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'distinguished_names',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'extra_attributes',
                'type' => '?array',
            ],
        ],
    ],
    'openssl_csr_sign' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLCertificate|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'csr',
                'type' => 'OpenSSLCertificateSigningRequest|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'ca_certificate',
                'type' => 'OpenSSLCertificate|string|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'days',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'serial',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_decrypt' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'cipher_algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'passphrase',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'options',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'iv',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tag',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'aad',
                'type' => 'string',
            ],
        ],
    ],
    'openssl_dh_compute_key' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'public_key',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => 'OpenSSLAsymmetricKey',
            ],
        ],
    ],
    'openssl_digest' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'digest_algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_encrypt' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'cipher_algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'passphrase',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'options',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'iv',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tag',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'aad',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'tag_length',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_error_string' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'openssl_free_key' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => 'OpenSSLAsymmetricKey',
            ],
        ],
    ],
    'openssl_get_cert_locations' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'openssl_get_cipher_methods' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'aliases',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_get_curve_names' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'openssl_get_md_methods' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'aliases',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_get_privatekey' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLAsymmetricKey|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'passphrase',
                'type' => '?string',
            ],
        ],
    ],
    'openssl_get_publickey' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLAsymmetricKey|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'public_key',
                'type' => '',
            ],
        ],
    ],
    'openssl_open' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'output',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'encrypted_key',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'cipher_algo',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'iv',
                'type' => '?string',
            ],
        ],
    ],
    'openssl_pbkdf2' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'salt',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key_length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'iterations',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'digest_algo',
                'type' => 'string',
            ],
        ],
    ],
    'openssl_pkcs12_export' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'output',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'passphrase',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'openssl_pkcs12_export_to_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'passphrase',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'openssl_pkcs12_read' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pkcs12',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificates',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'passphrase',
                'type' => 'string',
            ],
        ],
    ],
    'openssl_pkcs7_decrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificate',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
        ],
    ],
    'openssl_pkcs7_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificate',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'headers',
                'type' => '?array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'cipher_algo',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_pkcs7_read' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificates',
                'type' => '',
            ],
        ],
    ],
    'openssl_pkcs7_sign' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'headers',
                'type' => '?array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'untrusted_certificates_filename',
                'type' => '?string',
            ],
        ],
    ],
    'openssl_pkcs7_verify' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'input_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'signers_certificates_filename',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'ca_info',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'untrusted_certificates_filename',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'content',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'output_filename',
                'type' => '?string',
            ],
        ],
    ],
    'openssl_pkey_derive' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'public_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key_length',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_pkey_export' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'output',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'passphrase',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
        ],
    ],
    'openssl_pkey_export_to_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'passphrase',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
        ],
    ],
    'openssl_pkey_free' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => 'OpenSSLAsymmetricKey',
            ],
        ],
    ],
    'openssl_pkey_get_details' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'key',
                'type' => 'OpenSSLAsymmetricKey',
            ],
        ],
    ],
    'openssl_pkey_get_private' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLAsymmetricKey|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'passphrase',
                'type' => '?string',
            ],
        ],
    ],
    'openssl_pkey_get_public' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLAsymmetricKey|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'public_key',
                'type' => '',
            ],
        ],
    ],
    'openssl_pkey_new' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLAsymmetricKey|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
        ],
    ],
    'openssl_private_decrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'decrypted_data',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'padding',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_private_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encrypted_data',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'padding',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_public_decrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'decrypted_data',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'public_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'padding',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_public_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encrypted_data',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'public_key',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'padding',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_random_pseudo_bytes' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'strong_result',
                'type' => '',
            ],
        ],
    ],
    'openssl_seal' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'sealed_data',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encrypted_keys',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'public_key',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'cipher_algo',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'iv',
                'type' => '',
            ],
        ],
    ],
    'openssl_sign' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'signature',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'algorithm',
                'type' => 'string|int',
            ],
        ],
    ],
    'openssl_spki_export' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'spki',
                'type' => 'string',
            ],
        ],
    ],
    'openssl_spki_export_challenge' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'spki',
                'type' => 'string',
            ],
        ],
    ],
    'openssl_spki_new' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => 'OpenSSLAsymmetricKey',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'challenge',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'digest_algo',
                'type' => 'int',
            ],
        ],
    ],
    'openssl_spki_verify' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'spki',
                'type' => 'string',
            ],
        ],
    ],
    'openssl_verify' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'signature',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'public_key',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'algorithm',
                'type' => 'string|int',
            ],
        ],
    ],
    'openssl_x509_check_private_key' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'private_key',
                'type' => '',
            ],
        ],
    ],
    'openssl_x509_checkpurpose' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'purpose',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'ca_info',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'untrusted_certificates_file',
                'type' => '?string',
            ],
        ],
    ],
    'openssl_x509_export' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'output',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'no_text',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_x509_export_to_file' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'output_filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'no_text',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_x509_fingerprint' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'digest_algo',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_x509_free' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate',
            ],
        ],
    ],
    'openssl_x509_parse' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'short_names',
                'type' => 'bool',
            ],
        ],
    ],
    'openssl_x509_read' => [
        'return' => [
            'singleType' => false,
            'type' => 'OpenSSLCertificate|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
        ],
    ],
    'openssl_x509_verify' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'certificate',
                'type' => 'OpenSSLCertificate|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'public_key',
                'type' => '',
            ],
        ],
    ],
    'ord' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'character',
                'type' => 'string',
            ],
        ],
    ],
    'output_add_rewrite_var' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
        ],
    ],
    'output_reset_rewrite_vars' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'pack' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'parse_ini_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'process_sections',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'scanner_mode',
                'type' => 'int',
            ],
        ],
    ],
    'parse_ini_string' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ini_string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'process_sections',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'scanner_mode',
                'type' => 'int',
            ],
        ],
    ],
    'parse_str' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result',
                'type' => '',
            ],
        ],
    ],
    'parse_url' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|int|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'url',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'component',
                'type' => 'int',
            ],
        ],
    ],
    'passthru' => [
        'return' => [
            'singleType' => false,
            'type' => '?bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result_code',
                'type' => '',
            ],
        ],
    ],
    'password_algos' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'password_get_info' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hash',
                'type' => 'string',
            ],
        ],
    ],
    'password_hash' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'algo',
                'type' => 'string|int|null',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'password_needs_rehash' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hash',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'algo',
                'type' => 'string|int|null',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'password_verify' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hash',
                'type' => 'string',
            ],
        ],
    ],
    'pathinfo' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'pclose' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handle',
                'type' => '',
            ],
        ],
    ],
    'pcntl_alarm' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_async_signals' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'enable',
                'type' => '?bool',
            ],
        ],
    ],
    'pcntl_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'pcntl_exec' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'args',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'env_vars',
                'type' => 'array',
            ],
        ],
    ],
    'pcntl_fork' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'pcntl_get_last_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'pcntl_getpriority' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'process_id',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_setpriority' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'priority',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'process_id',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_signal' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'signal',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'restart_syscalls',
                'type' => 'bool',
            ],
        ],
    ],
    'pcntl_signal_dispatch' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'pcntl_signal_get_handler' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'signal',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_sigprocmask' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'signals',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'old_signals',
                'type' => '',
            ],
        ],
    ],
    'pcntl_sigtimedwait' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'signals',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'info',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'nanoseconds',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_sigwaitinfo' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'signals',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'info',
                'type' => '',
            ],
        ],
    ],
    'pcntl_strerror' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_code',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_unshare' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_wait' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'status',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'resource_usage',
                'type' => '',
            ],
        ],
    ],
    'pcntl_waitpid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'process_id',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'status',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'resource_usage',
                'type' => '',
            ],
        ],
    ],
    'pcntl_wexitstatus' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_wifcontinued' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_wifexited' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_wifsignaled' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_wifstopped' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_wstopsig' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'pcntl_wtermsig' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'status',
                'type' => 'int',
            ],
        ],
    ],
    'pdo_drivers' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'pfsockopen' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hostname',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_code',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_message',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timeout',
                'type' => '?float',
            ],
        ],
    ],
    'php_ini_loaded_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'php_ini_scanned_files' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'php_sapi_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'php_strip_whitespace' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'php_uname' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mode',
                'type' => 'string',
            ],
        ],
    ],
    'phpcredits' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'phpinfo' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'phpversion' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'extension',
                'type' => '?string',
            ],
        ],
    ],
    'pi' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            
        ],
    ],
    'popen' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mode',
                'type' => 'string',
            ],
        ],
    ],
    'pos' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
        ],
    ],
    'posix_access' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'posix_ctermid' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'posix_errno' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_get_last_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_getcwd' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'posix_getegid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_geteuid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_getgid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_getgrgid' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'group_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_getgrnam' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'posix_getgroups' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'posix_getlogin' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'posix_getpgid' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'process_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_getpgrp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_getpid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_getppid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_getpwnam' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'username',
                'type' => 'string',
            ],
        ],
    ],
    'posix_getpwuid' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'user_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_getrlimit' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'posix_getsid' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'process_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_getuid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_initgroups' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'username',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'group_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_isatty' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file_descriptor',
                'type' => '',
            ],
        ],
    ],
    'posix_kill' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'process_id',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'signal',
                'type' => 'int',
            ],
        ],
    ],
    'posix_mkfifo' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
        ],
    ],
    'posix_mknod' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'major',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'minor',
                'type' => 'int',
            ],
        ],
    ],
    'posix_setegid' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'group_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_seteuid' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'user_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_setgid' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'group_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_setpgid' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'process_id',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'process_group_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_setrlimit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'resource',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'soft_limit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'hard_limit',
                'type' => 'int',
            ],
        ],
    ],
    'posix_setsid' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'posix_setuid' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'user_id',
                'type' => 'int',
            ],
        ],
    ],
    'posix_strerror' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_code',
                'type' => 'int',
            ],
        ],
    ],
    'posix_times' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'posix_ttyname' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file_descriptor',
                'type' => '',
            ],
        ],
    ],
    'posix_uname' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'pow' => [
        'return' => [
            'singleType' => false,
            'type' => 'object|int|float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'num',
                'type' => 'mixed',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'exponent',
                'type' => 'mixed',
            ],
        ],
    ],
    'preg_filter' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'pattern',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'replacement',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'subject',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'count',
                'type' => '',
            ],
        ],
    ],
    'preg_grep' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'preg_last_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'preg_last_error_msg' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'preg_match' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'subject',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'matches',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'preg_match_all' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'subject',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'matches',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'preg_quote' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'str',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'delimiter',
                'type' => '?string',
            ],
        ],
    ],
    'preg_replace' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'pattern',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'replacement',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'subject',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'count',
                'type' => '',
            ],
        ],
    ],
    'preg_replace_callback' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|null',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'pattern',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'subject',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'count',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'preg_replace_callback_array' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'pattern',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'subject',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'count',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'preg_split' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pattern',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'subject',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'limit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'prev' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
        ],
    ],
    'print_r' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'return',
                'type' => 'bool',
            ],
        ],
    ],
    'printf' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'proc_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'process',
                'type' => '',
            ],
        ],
    ],
    'proc_get_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'process',
                'type' => '',
            ],
        ],
    ],
    'proc_nice' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'priority',
                'type' => 'int',
            ],
        ],
    ],
    'proc_open' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'command',
                'type' => 'array|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'descriptor_spec',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pipes',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'cwd',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'env_vars',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
        ],
    ],
    'proc_terminate' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'process',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'signal',
                'type' => 'int',
            ],
        ],
    ],
    'property_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object_or_class',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'property',
                'type' => 'string',
            ],
        ],
    ],
    'putenv' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'assignment',
                'type' => 'string',
            ],
        ],
    ],
    'quoted_printable_decode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'quoted_printable_encode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'quotemeta' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'rad2deg' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'rand' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'min',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max',
                'type' => 'int',
            ],
        ],
    ],
    'random_bytes' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'random_int' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'min',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max',
                'type' => 'int',
            ],
        ],
    ],
    'range' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'start',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'end',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-int',
                'name' => 'step',
                'type' => 'int|float',
            ],
        ],
    ],
    'rawurldecode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'rawurlencode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'readdir' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dir_handle',
                'type' => '',
            ],
        ],
    ],
    'readfile' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'use_include_path',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'readgzfile' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'use_include_path',
                'type' => 'int',
            ],
        ],
    ],
    'readline' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'prompt',
                'type' => '?string',
            ],
        ],
    ],
    'readline_add_history' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'prompt',
                'type' => 'string',
            ],
        ],
    ],
    'readline_callback_handler_install' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'prompt',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'readline_callback_handler_remove' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'readline_callback_read_char' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'readline_clear_history' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'readline_completion_function' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'readline_info' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'var_name',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'readline_list_history' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'readline_on_new_line' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'readline_read_history' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'filename',
                'type' => '?string',
            ],
        ],
    ],
    'readline_redisplay' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'readline_write_history' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'filename',
                'type' => '?string',
            ],
        ],
    ],
    'readlink' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
        ],
    ],
    'realpath' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
        ],
    ],
    'realpath_cache_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'realpath_cache_size' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'register_shutdown_function' => [
        'return' => [
            'singleType' => false,
            'type' => '?bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'args',
                'type' => 'mixed',
            ],
        ],
    ],
    'register_tick_function' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'args',
                'type' => 'mixed',
            ],
        ],
    ],
    'rename' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'from',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'to',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'reset' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-object',
                'name' => 'array',
                'type' => 'object|array',
            ],
        ],
    ],
    'resourcebundle_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'bundle',
                'type' => 'ResourceBundle',
            ],
        ],
    ],
    'resourcebundle_create' => [
        'return' => [
            'singleType' => false,
            'type' => '?ResourceBundle',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'locale',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'bundle',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'fallback',
                'type' => 'bool',
            ],
        ],
    ],
    'resourcebundle_get' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'bundle',
                'type' => 'ResourceBundle',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'index',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'fallback',
                'type' => 'bool',
            ],
        ],
    ],
    'resourcebundle_get_error_code' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'bundle',
                'type' => 'ResourceBundle',
            ],
        ],
    ],
    'resourcebundle_get_error_message' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'bundle',
                'type' => 'ResourceBundle',
            ],
        ],
    ],
    'resourcebundle_locales' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'bundle',
                'type' => 'string',
            ],
        ],
    ],
    'restore_error_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'restore_exception_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'rewind' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'rewinddir' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'dir_handle',
                'type' => '',
            ],
        ],
    ],
    'rmdir' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'round' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-int',
                'name' => 'num',
                'type' => 'int|float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'precision',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'rsort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'rtrim' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
        ],
    ],
    'scandir' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'sorting_order',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'sem_acquire' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'semaphore',
                'type' => 'SysvSemaphore',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'non_blocking',
                'type' => 'bool',
            ],
        ],
    ],
    'sem_get' => [
        'return' => [
            'singleType' => false,
            'type' => 'SysvSemaphore|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_acquire',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'auto_release',
                'type' => 'bool',
            ],
        ],
    ],
    'sem_release' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'semaphore',
                'type' => 'SysvSemaphore',
            ],
        ],
    ],
    'sem_remove' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'semaphore',
                'type' => 'SysvSemaphore',
            ],
        ],
    ],
    'serialize' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'session_abort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'session_cache_expire' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '?int',
            ],
        ],
    ],
    'session_cache_limiter' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '?string',
            ],
        ],
    ],
    'session_commit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'session_create_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'prefix',
                'type' => 'string',
            ],
        ],
    ],
    'session_decode' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
        ],
    ],
    'session_destroy' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'session_encode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
    'session_gc' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            
        ],
    ],
    'session_get_cookie_params' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'session_id' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'id',
                'type' => '?string',
            ],
        ],
    ],
    'session_module_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'module',
                'type' => '?string',
            ],
        ],
    ],
    'session_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'name',
                'type' => '?string',
            ],
        ],
    ],
    'session_regenerate_id' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'delete_old_session',
                'type' => 'bool',
            ],
        ],
    ],
    'session_register_shutdown' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            
        ],
    ],
    'session_reset' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'session_save_path' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'path',
                'type' => '?string',
            ],
        ],
    ],
    'session_set_cookie_params' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'lifetime_or_options',
                'type' => 'array|int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'path',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'domain',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'secure',
                'type' => '?bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'httponly',
                'type' => '?bool',
            ],
        ],
    ],
    'session_set_save_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'open',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'close',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'read',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'write',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'destroy',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'gc',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'create_sid',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'validate_sid',
                'type' => 'callable',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'update_timestamp',
                'type' => 'callable',
            ],
        ],
    ],
    'session_start' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'session_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'session_unset' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'session_write_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'set_error_handler' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => '?callable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_levels',
                'type' => 'int',
            ],
        ],
    ],
    'set_exception_handler' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => '?callable',
            ],
        ],
    ],
    'set_file_buffer' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
        ],
    ],
    'set_include_path' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'include_path',
                'type' => 'string',
            ],
        ],
    ],
    'set_time_limit' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
        ],
    ],
    'setcookie' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'expires_or_options',
                'type' => 'array|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'secure',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'httponly',
                'type' => 'bool',
            ],
        ],
    ],
    'setlocale' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'category',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'locales',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'rest',
                'type' => '',
            ],
        ],
    ],
    'setrawcookie' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'expires_or_options',
                'type' => 'array|int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'path',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'domain',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'secure',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'httponly',
                'type' => 'bool',
            ],
        ],
    ],
    'settype' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'var',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'type',
                'type' => 'string',
            ],
        ],
    ],
    'sha1' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'sha1_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'binary',
                'type' => 'bool',
            ],
        ],
    ],
    'shell_exec' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
        ],
    ],
    'shm_attach' => [
        'return' => [
            'singleType' => false,
            'type' => 'SysvSharedMemory|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'size',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
        ],
    ],
    'shm_detach' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shm',
                'type' => 'SysvSharedMemory',
            ],
        ],
    ],
    'shm_get_var' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shm',
                'type' => 'SysvSharedMemory',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
        ],
    ],
    'shm_has_var' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shm',
                'type' => 'SysvSharedMemory',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
        ],
    ],
    'shm_put_var' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shm',
                'type' => 'SysvSharedMemory',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'shm_remove' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shm',
                'type' => 'SysvSharedMemory',
            ],
        ],
    ],
    'shm_remove_var' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shm',
                'type' => 'SysvSharedMemory',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
        ],
    ],
    'shmop_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shmop',
                'type' => 'Shmop',
            ],
        ],
    ],
    'shmop_delete' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shmop',
                'type' => 'Shmop',
            ],
        ],
    ],
    'shmop_open' => [
        'return' => [
            'singleType' => false,
            'type' => 'Shmop|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'key',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mode',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'permissions',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
        ],
    ],
    'shmop_read' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shmop',
                'type' => 'Shmop',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
        ],
    ],
    'shmop_size' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shmop',
                'type' => 'Shmop',
            ],
        ],
    ],
    'shmop_write' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'shmop',
                'type' => 'Shmop',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'show_source' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'return',
                'type' => 'bool',
            ],
        ],
    ],
    'shuffle' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
        ],
    ],
    'similar_text' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'percent',
                'type' => '',
            ],
        ],
    ],
    'simplexml_import_dom' => [
        'return' => [
            'singleType' => false,
            'type' => '?SimpleXMLElement',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-SimpleXMLElement',
                'name' => 'node',
                'type' => 'SimpleXMLElement|DOMNode',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'class_name',
                'type' => '?string',
            ],
        ],
    ],
    'simplexml_load_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'SimpleXMLElement|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'class_name',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'options',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'namespace_or_prefix',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'is_prefix',
                'type' => 'bool',
            ],
        ],
    ],
    'simplexml_load_string' => [
        'return' => [
            'singleType' => false,
            'type' => 'SimpleXMLElement|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'class_name',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'options',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'namespace_or_prefix',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'is_prefix',
                'type' => 'bool',
            ],
        ],
    ],
    'sin' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'sinh' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'sizeof' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-Countable',
                'name' => 'value',
                'type' => 'Countable|array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'sleep' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
        ],
    ],
    'socket_accept' => [
        'return' => [
            'singleType' => false,
            'type' => 'Socket|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
        ],
    ],
    'socket_addrinfo_bind' => [
        'return' => [
            'singleType' => false,
            'type' => 'Socket|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'address',
                'type' => 'AddressInfo',
            ],
        ],
    ],
    'socket_addrinfo_connect' => [
        'return' => [
            'singleType' => false,
            'type' => 'Socket|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'address',
                'type' => 'AddressInfo',
            ],
        ],
    ],
    'socket_addrinfo_explain' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'address',
                'type' => 'AddressInfo',
            ],
        ],
    ],
    'socket_addrinfo_lookup' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'host',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'service',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'hints',
                'type' => 'array',
            ],
        ],
    ],
    'socket_bind' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'address',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
        ],
    ],
    'socket_clear_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '?Socket',
            ],
        ],
    ],
    'socket_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
        ],
    ],
    'socket_cmsg_space' => [
        'return' => [
            'singleType' => false,
            'type' => '?int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'num',
                'type' => 'int',
            ],
        ],
    ],
    'socket_connect' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'address',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'port',
                'type' => '?int',
            ],
        ],
    ],
    'socket_create' => [
        'return' => [
            'singleType' => false,
            'type' => 'Socket|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'domain',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'protocol',
                'type' => 'int',
            ],
        ],
    ],
    'socket_create_listen' => [
        'return' => [
            'singleType' => false,
            'type' => 'Socket|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'port',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'backlog',
                'type' => 'int',
            ],
        ],
    ],
    'socket_create_pair' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'domain',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'protocol',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'pair',
                'type' => '',
            ],
        ],
    ],
    'socket_export_stream' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
        ],
    ],
    'socket_get_option' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
        ],
    ],
    'socket_get_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'socket_getopt' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
        ],
    ],
    'socket_getpeername' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'address',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'port',
                'type' => '',
            ],
        ],
    ],
    'socket_getsockname' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'address',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'port',
                'type' => '',
            ],
        ],
    ],
    'socket_import_stream' => [
        'return' => [
            'singleType' => false,
            'type' => 'Socket|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'socket_last_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '?Socket',
            ],
        ],
    ],
    'socket_listen' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'backlog',
                'type' => 'int',
            ],
        ],
    ],
    'socket_read' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'socket_recv' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'data',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'socket_recvfrom' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'data',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'address',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'port',
                'type' => '',
            ],
        ],
    ],
    'socket_recvmsg' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'message',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'socket_select' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'read',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'write',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'except',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'seconds',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'microseconds',
                'type' => 'int',
            ],
        ],
    ],
    'socket_send' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'socket_sendmsg' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'message',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'socket_sendto' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'address',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'port',
                'type' => '?int',
            ],
        ],
    ],
    'socket_set_block' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
        ],
    ],
    'socket_set_blocking' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'socket_set_nonblock' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
        ],
    ],
    'socket_set_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'socket_set_timeout' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'microseconds',
                'type' => 'int',
            ],
        ],
    ],
    'socket_setopt' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'socket_shutdown' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'socket_strerror' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_code',
                'type' => 'int',
            ],
        ],
    ],
    'socket_write' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => 'Socket',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'sodium_add' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_base642bin' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'id',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ignore',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_bin2base64' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'id',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_bin2hex' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_compare' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_aes256gcm_decrypt' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_aes256gcm_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_aes256gcm_is_available' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_aead_aes256gcm_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_aead_chacha20poly1305_decrypt' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_chacha20poly1305_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_chacha20poly1305_ietf_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_chacha20poly1305_ietf_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_aead_chacha20poly1305_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_aead_xchacha20poly1305_ietf_decrypt' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_xchacha20poly1305_ietf_encrypt' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_aead_xchacha20poly1305_ietf_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_auth' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_auth_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_auth_verify' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mac',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_keypair' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_box_keypair_from_secretkey_and_publickey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'public_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_open' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_publickey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_publickey_from_secretkey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_seal' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'public_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_seal_open' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_secretkey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_box_seed_keypair' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'seed',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_add' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'p',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'q',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_from_hash' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 's',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_is_valid_point' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 's',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_random' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_add' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'x',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'y',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_complement' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 's',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_invert' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 's',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_mul' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'x',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'y',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_negate' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 's',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_random' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_reduce' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 's',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_scalar_sub' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'x',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'y',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_core_ristretto255_sub' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'p',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'q',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_generichash' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_generichash_final' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'state',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_generichash_init' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_generichash_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_generichash_update' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'state',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_kdf_derive_from_key' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'subkey_length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'subkey_id',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'context',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_kdf_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_kx_client_session_keys' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'client_key_pair',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'server_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_kx_keypair' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_kx_publickey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_kx_secretkey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_kx_seed_keypair' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'seed',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_kx_server_session_keys' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'server_key_pair',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'client_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_pwhash' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'salt',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'opslimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'memlimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'algo',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_pwhash_scryptsalsa208sha256' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'salt',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'opslimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'memlimit',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_pwhash_scryptsalsa208sha256_str' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'opslimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'memlimit',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_pwhash_scryptsalsa208sha256_str_verify' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hash',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_pwhash_str' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'opslimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'memlimit',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_pwhash_str_needs_rehash' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'opslimit',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'memlimit',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_pwhash_str_verify' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'hash',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'password',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_scalarmult' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'n',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'p',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_scalarmult_base' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_scalarmult_ristretto255' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'n',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'p',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_scalarmult_ristretto255_base' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'n',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_secretbox' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_secretbox_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_secretbox_open' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_secretstream_xchacha20poly1305_init_pull' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'header',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_secretstream_xchacha20poly1305_init_push' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_secretstream_xchacha20poly1305_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_secretstream_xchacha20poly1305_pull' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'state',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ciphertext',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_secretstream_xchacha20poly1305_push' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'state',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'additional_data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'tag',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_crypto_secretstream_xchacha20poly1305_rekey' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'state',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_shorthash' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_shorthash_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_sign' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_detached' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_ed25519_pk_to_curve25519' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'public_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_ed25519_sk_to_curve25519' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_keypair' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_sign_keypair_from_secretkey_and_publickey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'public_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_open' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'signed_message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'public_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_publickey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_publickey_from_secretkey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'secret_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_secretkey' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key_pair',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_seed_keypair' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'seed',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_sign_verify_detached' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'signature',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'public_key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_stream' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_stream_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_stream_xchacha20' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_stream_xchacha20_keygen' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sodium_crypto_stream_xchacha20_xor' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_crypto_stream_xor' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'nonce',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'key',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_hex2bin' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ignore',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_increment' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_memcmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_memzero' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'sodium_pad' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'block_size',
                'type' => 'int',
            ],
        ],
    ],
    'sodium_unpad' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'block_size',
                'type' => 'int',
            ],
        ],
    ],
    'sort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'soundex' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'spl_autoload' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file_extensions',
                'type' => '?string',
            ],
        ],
    ],
    'spl_autoload_call' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
        ],
    ],
    'spl_autoload_extensions' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'file_extensions',
                'type' => '?string',
            ],
        ],
    ],
    'spl_autoload_functions' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'spl_autoload_register' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => '?callable',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'throw',
                'type' => 'bool',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'prepend',
                'type' => 'bool',
            ],
        ],
    ],
    'spl_autoload_unregister' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'spl_classes' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'spl_object_hash' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'object',
            ],
        ],
    ],
    'spl_object_id' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'object',
            ],
        ],
    ],
    'sprintf' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'sqrt' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'srand' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seed',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'sscanf' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|int|null',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'vars',
                'type' => 'mixed',
            ],
        ],
    ],
    'stat' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'str_contains' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
        ],
    ],
    'str_ends_with' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
        ],
    ],
    'str_getcsv' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'separator',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'enclosure',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'escape',
                'type' => 'string',
            ],
        ],
    ],
    'str_ireplace' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'search',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'replace',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'subject',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'count',
                'type' => '',
            ],
        ],
    ],
    'str_pad' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'pad_string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'pad_type',
                'type' => 'int',
            ],
        ],
    ],
    'str_repeat' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'times',
                'type' => 'int',
            ],
        ],
    ],
    'str_replace' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'search',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'replace',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'subject',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'count',
                'type' => '',
            ],
        ],
    ],
    'str_rot13' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'str_shuffle' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'str_split' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'str_starts_with' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
        ],
    ],
    'str_word_count' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'format',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'characters',
                'type' => '?string',
            ],
        ],
    ],
    'strcasecmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'strchr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'before_needle',
                'type' => 'bool',
            ],
        ],
    ],
    'strcmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'strcoll' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'strcspn' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'stream_bucket_append' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'brigade',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'bucket',
                'type' => 'object',
            ],
        ],
    ],
    'stream_bucket_make_writeable' => [
        'return' => [
            'singleType' => false,
            'type' => '?object',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'brigade',
                'type' => '',
            ],
        ],
    ],
    'stream_bucket_new' => [
        'return' => [
            'singleType' => true,
            'type' => 'object',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'buffer',
                'type' => 'string',
            ],
        ],
    ],
    'stream_bucket_prepend' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'brigade',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'bucket',
                'type' => 'object',
            ],
        ],
    ],
    'stream_context_create' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'params',
                'type' => '?array',
            ],
        ],
    ],
    'stream_context_get_default' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'options',
                'type' => '?array',
            ],
        ],
    ],
    'stream_context_get_options' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream_or_context',
                'type' => '',
            ],
        ],
    ],
    'stream_context_get_params' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'stream_context_set_default' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'stream_context_set_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'wrapper_or_options',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'option_name',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'stream_context_set_params' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'params',
                'type' => 'array',
            ],
        ],
    ],
    'stream_copy_to_stream' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'from',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'to',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'stream_filter_append' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filter_name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'params',
                'type' => 'mixed',
            ],
        ],
    ],
    'stream_filter_prepend' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filter_name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'params',
                'type' => 'mixed',
            ],
        ],
    ],
    'stream_filter_register' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filter_name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
        ],
    ],
    'stream_filter_remove' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream_filter',
                'type' => '',
            ],
        ],
    ],
    'stream_get_contents' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'stream_get_filters' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'stream_get_line' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'ending',
                'type' => 'string',
            ],
        ],
    ],
    'stream_get_meta_data' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'stream_get_transports' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'stream_get_wrappers' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'stream_is_local' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'stream_isatty' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'stream_register_wrapper' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'protocol',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'stream_resolve_include_path' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'stream_select' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'read',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'write',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'except',
                'type' => '?array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'seconds',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'microseconds',
                'type' => '?int',
            ],
        ],
    ],
    'stream_set_blocking' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'stream_set_chunk_size' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
        ],
    ],
    'stream_set_read_buffer' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
        ],
    ],
    'stream_set_timeout' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'microseconds',
                'type' => 'int',
            ],
        ],
    ],
    'stream_set_write_buffer' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'size',
                'type' => 'int',
            ],
        ],
    ],
    'stream_socket_accept' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timeout',
                'type' => '?float',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'peer_name',
                'type' => '',
            ],
        ],
    ],
    'stream_socket_client' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'address',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_code',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_message',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timeout',
                'type' => '?float',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'stream_socket_enable_crypto' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'crypto_method',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'session_stream',
                'type' => '',
            ],
        ],
    ],
    'stream_socket_get_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'remote',
                'type' => 'bool',
            ],
        ],
    ],
    'stream_socket_pair' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'domain',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'type',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'protocol',
                'type' => 'int',
            ],
        ],
    ],
    'stream_socket_recvfrom' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'address',
                'type' => '',
            ],
        ],
    ],
    'stream_socket_sendto' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'socket',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'address',
                'type' => 'string',
            ],
        ],
    ],
    'stream_socket_server' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'address',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_code',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'error_message',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'stream_socket_shutdown' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'mode',
                'type' => 'int',
            ],
        ],
    ],
    'stream_supports_lock' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
        ],
    ],
    'stream_wrapper_register' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'protocol',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'class',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'stream_wrapper_restore' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'protocol',
                'type' => 'string',
            ],
        ],
    ],
    'stream_wrapper_unregister' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'protocol',
                'type' => 'string',
            ],
        ],
    ],
    'strftime' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
        ],
    ],
    'strip_tags' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'allowed_tags',
                'type' => 'array|string|null',
            ],
        ],
    ],
    'stripcslashes' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'stripos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'stripslashes' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'stristr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'before_needle',
                'type' => 'bool',
            ],
        ],
    ],
    'strlen' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'strnatcasecmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'strnatcmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
        ],
    ],
    'strncasecmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'strncmp' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string2',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'length',
                'type' => 'int',
            ],
        ],
    ],
    'strpbrk' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
        ],
    ],
    'strpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'strptime' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timestamp',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
        ],
    ],
    'strrchr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
        ],
    ],
    'strrev' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'strripos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'strrpos' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'strspn' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'strstr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'before_needle',
                'type' => 'bool',
            ],
        ],
    ],
    'strtok' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'token',
                'type' => '?string',
            ],
        ],
    ],
    'strtolower' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'strtotime' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'datetime',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'baseTimestamp',
                'type' => '?int',
            ],
        ],
    ],
    'strtoupper' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'strtr' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'from',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'to',
                'type' => '?string',
            ],
        ],
    ],
    'strval' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
        ],
    ],
    'substr' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'substr_compare' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'case_insensitive',
                'type' => 'bool',
            ],
        ],
    ],
    'substr_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'haystack',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'needle',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'length',
                'type' => '?int',
            ],
        ],
    ],
    'substr_replace' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'string',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'replace',
                'type' => 'array|string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'offset',
                'type' => 'array|int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'length',
                'type' => 'array|int|null',
            ],
        ],
    ],
    'symlink' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'target',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'link',
                'type' => 'string',
            ],
        ],
    ],
    'sys_get_temp_dir' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'sys_getloadavg' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'syslog' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'priority',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
        ],
    ],
    'system' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'command',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'result_code',
                'type' => '',
            ],
        ],
    ],
    'tan' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'tanh' => [
        'return' => [
            'singleType' => true,
            'type' => 'float',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'num',
                'type' => 'float',
            ],
        ],
    ],
    'tempnam' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'directory',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'prefix',
                'type' => 'string',
            ],
        ],
    ],
    'textdomain' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'domain',
                'type' => '?string',
            ],
        ],
    ],
    'tidy_access_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_clean_repair' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_config_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_diagnose' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_error_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_body' => [
        'return' => [
            'singleType' => false,
            'type' => '?tidyNode',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_config' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_error_buffer' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_head' => [
        'return' => [
            'singleType' => false,
            'type' => '?tidyNode',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_html' => [
        'return' => [
            'singleType' => false,
            'type' => '?tidyNode',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_html_ver' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_opt_doc' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'option',
                'type' => 'string',
            ],
        ],
    ],
    'tidy_get_output' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_release' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'tidy_get_root' => [
        'return' => [
            'singleType' => false,
            'type' => '?tidyNode',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_get_status' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_getopt' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int|bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'option',
                'type' => 'string',
            ],
        ],
    ],
    'tidy_is_xhtml' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_is_xml' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'tidy_parse_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'tidy|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'config',
                'type' => 'array|string|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'useIncludePath',
                'type' => 'bool',
            ],
        ],
    ],
    'tidy_parse_string' => [
        'return' => [
            'singleType' => false,
            'type' => 'tidy|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'config',
                'type' => 'array|string|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'tidy_repair_file' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'config',
                'type' => 'array|string|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'useIncludePath',
                'type' => 'bool',
            ],
        ],
    ],
    'tidy_repair_string' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'config',
                'type' => 'array|string|null',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'tidy_warning_count' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'tidy',
                'type' => 'tidy',
            ],
        ],
    ],
    'time' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            
        ],
    ],
    'time_nanosleep' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'seconds',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'nanoseconds',
                'type' => 'int',
            ],
        ],
    ],
    'time_sleep_until' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-float',
                'name' => 'timestamp',
                'type' => 'float',
            ],
        ],
    ],
    'timezone_abbreviations_list' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            
        ],
    ],
    'timezone_identifiers_list' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timezoneGroup',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'countryCode',
                'type' => '?string',
            ],
        ],
    ],
    'timezone_location_get' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeZone',
            ],
        ],
    ],
    'timezone_name_from_abbr' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'abbr',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'utcOffset',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'isDST',
                'type' => 'int',
            ],
        ],
    ],
    'timezone_name_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeZone',
            ],
        ],
    ],
    'timezone_offset_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeZone',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'datetime',
                'type' => 'DateTimeInterface',
            ],
        ],
    ],
    'timezone_open' => [
        'return' => [
            'singleType' => false,
            'type' => 'DateTimeZone|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'timezone',
                'type' => 'string',
            ],
        ],
    ],
    'timezone_transitions_get' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'DateTimeZone',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timestampBegin',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'timestampEnd',
                'type' => 'int',
            ],
        ],
    ],
    'timezone_version_get' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'tmpfile' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            
        ],
    ],
    'token_get_all' => [
        'return' => [
            'singleType' => true,
            'type' => 'array',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'code',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'flags',
                'type' => 'int',
            ],
        ],
    ],
    'token_name' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'id',
                'type' => 'int',
            ],
        ],
    ],
    'touch' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mtime',
                'type' => '?int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'atime',
                'type' => '?int',
            ],
        ],
    ],
    'trait_exists' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'trait',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'autoload',
                'type' => 'bool',
            ],
        ],
    ],
    'transliterator_create' => [
        'return' => [
            'singleType' => false,
            'type' => '?Transliterator',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'id',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'direction',
                'type' => 'int',
            ],
        ],
    ],
    'transliterator_create_from_rules' => [
        'return' => [
            'singleType' => false,
            'type' => '?Transliterator',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'rules',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'direction',
                'type' => 'int',
            ],
        ],
    ],
    'transliterator_create_inverse' => [
        'return' => [
            'singleType' => false,
            'type' => '?Transliterator',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'transliterator',
                'type' => 'Transliterator',
            ],
        ],
    ],
    'transliterator_get_error_code' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'transliterator',
                'type' => 'Transliterator',
            ],
        ],
    ],
    'transliterator_get_error_message' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'transliterator',
                'type' => 'Transliterator',
            ],
        ],
    ],
    'transliterator_list_ids' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            
        ],
    ],
    'transliterator_transliterate' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-string',
                'name' => 'transliterator',
                'type' => 'Transliterator|string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'start',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'end',
                'type' => 'int',
            ],
        ],
    ],
    'trigger_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_level',
                'type' => 'int',
            ],
        ],
    ],
    'trim' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'characters',
                'type' => 'string',
            ],
        ],
    ],
    'uasort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'ucfirst' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'ucwords' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'separators',
                'type' => 'string',
            ],
        ],
    ],
    'uksort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'umask' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'mask',
                'type' => '?int',
            ],
        ],
    ],
    'uniqid' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'prefix',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'more_entropy',
                'type' => 'bool',
            ],
        ],
    ],
    'unixtojd' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'timestamp',
                'type' => '?int',
            ],
        ],
    ],
    'unlink' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'context',
                'type' => '',
            ],
        ],
    ],
    'unpack' => [
        'return' => [
            'singleType' => false,
            'type' => 'array|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'offset',
                'type' => 'int',
            ],
        ],
    ],
    'unregister_tick_function' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'unserialize' => [
        'return' => [
            'singleType' => false,
            'type' => 'mixed',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'options',
                'type' => 'array',
            ],
        ],
    ],
    'urldecode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'urlencode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'user_error' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'message',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_level',
                'type' => 'int',
            ],
        ],
    ],
    'usleep' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'microseconds',
                'type' => 'int',
            ],
        ],
    ],
    'usort' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'ternary-array',
                'name' => 'array',
                'type' => 'array',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'callback',
                'type' => 'callable',
            ],
        ],
    ],
    'utf8_decode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'utf8_encode' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
        ],
    ],
    'var_dump' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => 'mixed',
            ],
        ],
    ],
    'var_export' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => 'mixed',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'return',
                'type' => 'bool',
            ],
        ],
    ],
    'version_compare' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|bool',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'version1',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'version2',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'operator',
                'type' => '?string',
            ],
        ],
    ],
    'vfprintf' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'stream',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'values',
                'type' => 'array',
            ],
        ],
    ],
    'vprintf' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'values',
                'type' => 'array',
            ],
        ],
    ],
    'vsprintf' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'format',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'ternary-array',
                'name' => 'values',
                'type' => 'array',
            ],
        ],
    ],
    'wordwrap' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'string',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'width',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'break',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'cut_long_words',
                'type' => 'bool',
            ],
        ],
    ],
    'xml_error_string' => [
        'return' => [
            'singleType' => false,
            'type' => '?string',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'error_code',
                'type' => 'int',
            ],
        ],
    ],
    'xml_get_current_byte_index' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
        ],
    ],
    'xml_get_current_column_number' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
        ],
    ],
    'xml_get_current_line_number' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
        ],
    ],
    'xml_get_error_code' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
        ],
    ],
    'xml_parse' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'is_final',
                'type' => 'bool',
            ],
        ],
    ],
    'xml_parse_into_struct' => [
        'return' => [
            'singleType' => true,
            'type' => 'int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'values',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'index',
                'type' => '',
            ],
        ],
    ],
    'xml_parser_create' => [
        'return' => [
            'singleType' => true,
            'type' => 'XMLParser',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
        ],
    ],
    'xml_parser_create_ns' => [
        'return' => [
            'singleType' => true,
            'type' => 'XMLParser',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'separator',
                'type' => 'string',
            ],
        ],
    ],
    'xml_parser_free' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
        ],
    ],
    'xml_parser_get_option' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
        ],
    ],
    'xml_parser_set_option' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'option',
                'type' => 'int',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'value',
                'type' => '',
            ],
        ],
    ],
    'xml_set_character_data_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_default_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_element_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'start_handler',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'end_handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_end_namespace_decl_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_external_entity_ref_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_notation_decl_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_object' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'object',
                'type' => 'object',
            ],
        ],
    ],
    'xml_set_processing_instruction_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_start_namespace_decl_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xml_set_unparsed_entity_decl_handler' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'parser',
                'type' => 'XMLParser',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'handler',
                'type' => '',
            ],
        ],
    ],
    'xmlwriter_end_attribute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_cdata' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_comment' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_document' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_dtd' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_dtd_attlist' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_dtd_element' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_dtd_entity' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_element' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_end_pi' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_flush' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|int',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'empty',
                'type' => 'bool',
            ],
        ],
    ],
    'xmlwriter_full_end_element' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_open_memory' => [
        'return' => [
            'singleType' => false,
            'type' => 'XMLWriter|false',
        ],
        'params' => [
            
        ],
    ],
    'xmlwriter_open_uri' => [
        'return' => [
            'singleType' => false,
            'type' => 'XMLWriter|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'uri',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_output_memory' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'flush',
                'type' => 'bool',
            ],
        ],
    ],
    'xmlwriter_set_indent' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'enable',
                'type' => 'bool',
            ],
        ],
    ],
    'xmlwriter_set_indent_string' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'indentation',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_start_attribute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_start_attribute_ns' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'prefix',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'namespace',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_start_cdata' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_start_comment' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
        ],
    ],
    'xmlwriter_start_document' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'version',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'encoding',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'standalone',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_start_dtd' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'qualifiedName',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'publicId',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'systemId',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_start_dtd_attlist' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_start_dtd_element' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'qualifiedName',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_start_dtd_entity' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'isParam',
                'type' => 'bool',
            ],
        ],
    ],
    'xmlwriter_start_element' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_start_element_ns' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'prefix',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'namespace',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_start_pi' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'target',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_text' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_attribute' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_attribute_ns' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'prefix',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'namespace',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'value',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_cdata' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_comment' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_dtd' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'publicId',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'systemId',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'content',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_write_dtd_attlist' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_dtd_element' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_dtd_entity' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-bool',
                'name' => 'isParam',
                'type' => 'bool',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'publicId',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'systemId',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'notationData',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_write_element' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'content',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_write_element_ns' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'prefix',
                'type' => '?string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'name',
                'type' => 'string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'namespace',
                'type' => '?string',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'content',
                'type' => '?string',
            ],
        ],
    ],
    'xmlwriter_write_pi' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'target',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
        ],
    ],
    'xmlwriter_write_raw' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'writer',
                'type' => 'XMLWriter',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'content',
                'type' => 'string',
            ],
        ],
    ],
    'zend_version' => [
        'return' => [
            'singleType' => true,
            'type' => 'string',
        ],
        'params' => [
            
        ],
    ],
    'zip_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'void',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip',
                'type' => '',
            ],
        ],
    ],
    'zip_entry_close' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_entry',
                'type' => '',
            ],
        ],
    ],
    'zip_entry_compressedsize' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_entry',
                'type' => '',
            ],
        ],
    ],
    'zip_entry_compressionmethod' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_entry',
                'type' => '',
            ],
        ],
    ],
    'zip_entry_filesize' => [
        'return' => [
            'singleType' => false,
            'type' => 'int|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_entry',
                'type' => '',
            ],
        ],
    ],
    'zip_entry_name' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_entry',
                'type' => '',
            ],
        ],
    ],
    'zip_entry_open' => [
        'return' => [
            'singleType' => true,
            'type' => 'bool',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_dp',
                'type' => '',
            ],
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_entry',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'mode',
                'type' => 'string',
            ],
        ],
    ],
    'zip_entry_read' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip_entry',
                'type' => '',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'len',
                'type' => 'int',
            ],
        ],
    ],
    'zip_open' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'filename',
                'type' => 'string',
            ],
        ],
    ],
    'zip_read' => [
        'return' => [
            'singleType' => false,
            'type' => '',
        ],
        'params' => [
            [
                'rewrite' => false,
                'whatType' => 'na',
                'name' => 'zip',
                'type' => '',
            ],
        ],
    ],
    'zlib_decode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'max_length',
                'type' => 'int',
            ],
        ],
    ],
    'zlib_encode' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            [
                'rewrite' => true,
                'whatType' => 'cast-string',
                'name' => 'data',
                'type' => 'string',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'encoding',
                'type' => 'int',
            ],
            [
                'rewrite' => true,
                'whatType' => 'cast-int',
                'name' => 'level',
                'type' => 'int',
            ],
        ],
    ],
    'zlib_get_coding_type' => [
        'return' => [
            'singleType' => false,
            'type' => 'string|false',
        ],
        'params' => [
            
        ],
    ],
];