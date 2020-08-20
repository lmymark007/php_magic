<?php


namespace phpMagic\src;

/**
 * array_sort_2 二维数组排序
 * lmymark007
 * 8/20 0020-10:23
 * @param array $array 数组
 * @param string $column 二维数组的排序的一列
 * @param string $sort  排序方式 asc  desc
 * @return array
 */
function array_sort_2(array $array,$column,$sort='asc'): array
{
    $sort_array = array_column($array,$column);
    array_multisort( $sort_array ,$sort== 'asc' ? SORT_ASC : SORT_DESC,$array );
    return  $array;
}
