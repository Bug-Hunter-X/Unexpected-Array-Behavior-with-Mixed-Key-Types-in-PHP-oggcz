```php
<?php
function increment_array_value(&$arr, $key) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

$my_array = [];
increment_array_value($my_array, 'a');
echo $my_array['a']; // Outputs 1
increment_array_value($my_array, 'a');
echo $my_array['a']; // Outputs 2

//Error Case
increment_array_value($my_array, 1);
echo $my_array[1]; // Outputs 1
increment_array_value($my_array, 1);
echo $my_array[1]; //Outputs 2
increment_array_value($my_array, '1');
echo $my_array['1']; //Outputs 1
//The above two outputs are different due to different key types
?>
```