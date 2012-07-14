<?

$file_a = fopen($argv[1], 'r');
$file_b = fopen($argv[2], 'r');

for ($i=1; true; $i++)
{
    $line_a = fgets($file_a);
    $line_b = fgets($file_b);

    // echo "$i: $line_a\n";
    // echo "$i: $line_b\n";

    $len_a = strlen($line_a);
    $len_b = strlen($line_b);

    $max = max($len_a, $len_b);
    // echo "max = $max\n";

    for ($column=30; $column < $max; $column++)
    {
        if ($line_a[$column] != $line_b[$column]) echo "$i : $column : {$line_a[$column]}{$line_b[$column]}\n";
    }

    if (!$line_a && !$line_b) break;

    // if ($i > 20) break;
}

