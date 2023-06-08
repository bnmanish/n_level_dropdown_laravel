<?php

use App\Models\Category; 

function dropdownTree($parent=0,$prefix=""){
	$data = Category::where('parent_id',$parent)->orderBy('name')->get();
	foreach($data as $dataRow){
		echo "<option value='".$dataRow->id."'>".$prefix.$dataRow->name."</option>";
		dropdownTree($dataRow->id,$prefix.'&nbsp;&nbsp;&nbsp;');
	}
}