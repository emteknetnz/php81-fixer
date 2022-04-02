<?php

// used to generate metadata about internal functions
// run this using php 8.1 (8.0 might also work). 7.4 won't work

function rewrite($param, $type) {
  if (!$type) {
    return false;
  }
  if ($param->allowsNull() || $param->isVariadic() || $param->isPassedByReference()) {
    return false;
  }
  foreach (explode('|', $type) as $t) {
    if (in_array($t, ['string', 'int', 'float', 'bool', 'array'])) {
      return true;
    }
  }
  return false;
}

function singleType($returnType) {
  if (!$returnType) {
    return false;
  }
  if ($returnType->allowsNull()) {
    return false;
  }
  return strpos((string) $returnType, '|') === false;
}

function whatType($type) {
  $types = explode('|', $type);
  if (count($types) == 1) {
    if (in_array($type, ['string', 'int', 'float', 'bool'])) {
      return "cast-$type";
    } elseif ($type == 'array') {
      return "ternary-$type";
    }
  } else {
    foreach ($types as $t) {
      if (in_array($t, ['string', 'int', 'float', 'bool', 'array'])) {
        return "ternary-$t";
      }
    }
  }
  return 'na';
}

$funcMap = [];

foreach (get_defined_functions()['internal'] as $func) {
  $refl = new ReflectionFunction($func);
  $returnType = $refl->getReturnType();
  $params = [];
  foreach ($refl->getParameters() as $param) {
    $type = $param->getType();
    $params[] = [
      'rewrite' => rewrite($param, (string) $type),
      'whatType' => whatType($type),
      'name' => $param->name,
      'type' => (string) $type,
    ];
  }
  $funcMap[$func] = [
    'return' => [
        'singleType' => singleType($returnType),
        'type' => (string) $returnType,
    ],
    'params' => $params
  ];
}

// alpha sort keys
ksort($funcMap);

$lines = [];
foreach ($funcMap as $func => $map) {
  $singleType = $map['return']['singleType'] ? 'true' : 'false';
  $returnType = $map['return']['type'];
  $params = [];
  foreach ($map['params'] as $param) {
    $rewrite = $param['rewrite'] ? 'true' : 'false';
    $whatType = $param['whatType'];
    $name = $param['name'];
    $type = $param['type'];
    $params[] = <<<EOT
                [
                    'rewrite' => $rewrite,
                    'whatType' => '$whatType',
                    'name' => '$name',
                    'type' => '$type',
                ],
    EOT;
  }
  $ps = implode("\n", $params);
  $lines[] = <<<EOT
      '$func' => [
          'return' => [
              'singleType' => $singleType,
              'type' => '$returnType',
          ],
          'params' => [
              $ps
          ],
      ],
  EOT;
}

// print_r($funcMap);

$out = implode("\n", $lines);
$out = str_replace("\n                        [\n", "\n            [\n", $out);
echo $out;

file_put_contents('out.txt', $out);
