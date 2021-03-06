<?php
// Write a function that returns an array of the cartesian product of two sets.

function cart_prod_2_sets($sets) {
  $result = [];
  for ($a = 0; $a < count($sets[0]); $a++) {
    for ($i = 0; $i < count($sets[1]); $i++) {
      $result[] = [$sets[0][$a], $sets[1][$i]];
    };
  };
  return $result;
}

// Alternative Solution:
// function cart_prod_2_sets($sets) {
//   $result = [];
//   $arr = [];
//   for ($s = 0; $s < count($sets[0]); $s++) {
//     $arr[] = $sets[0][$s];
//     for ($i = 0; $i < count($sets[1]); $i++) {
//       $result[] = array_merge($arr, [$sets[1][$i]]);
//     };
//     array_pop($arr);
//   };
//   return $result;
// }


// Write a function that returns an array of the cartesian product of three sets.
function cart_prod_3_sets($sets) {
  $result = [];
  $arr = [];
  for ($a = 0; $a < count($sets[0]); $a++) {
    $arr[] = $sets[0][$a];
    for ($b = 0; $b < count($sets[1]); $b++) {
      $arr[] = $sets[1][$b];
      for ($c = 0; $c < count($sets[2]); $c++) {
        $result[] = array_merge($arr, [$sets[2][$c]]);
      };
      array_pop($arr);
    };
    $arr = [];
  };
  return $result;
}

// Write a function that returns an array of the cartesian product of any number of sets passed to it.

function cart_prod($sets) {
	$combos = [[]];
	foreach($sets as $set) {
		$new_combos = [];
		foreach($combos as $combo) {
			foreach($set as $elm) {
				$new_combo = array_merge([$elm], $combo);
				$new_combos[] = $new_combo;
			}
		}
		$combos = $new_combos;
	}
	return $combos;
}

// Alternative Solution:
// function cart_prod($sets) {
// 	$combos = [[]];
// 	foreach($sets as $key => $val) {
// 		$new_combos = [];
// 		foreach($combos as $combo) {
// 			foreach($val as $item) {
// 				$combo[$key] = $item;
// 				$new_combos[] = $combo;
// 			}
// 		}
// 		$combos = $new_combos;
// 	}
// 	return $combos;
// }


// function cart_prod($sets) {
// 	$combos = [[]];
// 	for ($i = 0; $i < count($sets); $i++) {
// 		$cur_set = $sets[$i];
// 		$new_combos = [];
// 		for ($j = 0; $j < count($combos); $j++ ) {
// 			$curr_combo = $combos[$j];
// 			for ($k = 0; $k < count($cur_set); $k++) {
// 				$cur_elm = [$cur_set[$k]];
// 				$new_combo = array_merge($cur_elm, $curr_combo);
// 				$new_combos[] = $new_combo;
// 			}
// 		}
// 		$combos = $new_combos;
// 	}
// 	return $combos;
// }

 // test

 // print_r(cart_prod_2_sets([[1], [1]])) //  [[1, 1]]
 // print_r(cart_prod_2_sets([[1], ['a']])) // [[1, 'a']]
 // print_r(cart_prod_2_sets([['a'], [1]])) // [['a', 1]]
 // print_r(cart_prod_2_sets([[1, 2, 3], ['a']])) // [[1, 'a'], [2, 'a'], [3, 'a']]
 // print_r(cart_prod_2_sets([[1, 2], ['a', 'b']])) // [[1, 'a'], [1, 'b'], [2, 'a'], [2, 'b']]
 //print_r(cart_prod([[1], [1, 2], [1,2,3]])) // [[1, 1, 1], [1, 2, 1],
                                               // [1, 1, 2], [1, 2, 2],
                                               // [1, 1, 3], [1, 2, 3]]
 print_r(cart_prod([[1, 2], [1, 2], [1,2]])) // [[1, 1, 1], [1, 1, 2], [1, 2, 1],
                                               // [1, 2, 2], [2, 1, 1], [2, 1, 2],
                                               // [2, 2, 1], [2, 2, 2]]

?>
