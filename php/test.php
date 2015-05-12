<?php 
    include("helper.php");
    $base_url = getBaseUrl();
    $file = "../docs/test.csv";

    function newPanel($file, $name){      
        global $base_url;
        $row = 0;
        $headings = array();
        $products = array();
        $filters = array(
            "cut" => array( 
                "title" => "Cut Length",
                "options" => array()
            ),
            "finish" => array( 
                "title" => "Finish",
                "options" => array()
            ),
            "wall" => array( 
                "title" => "Wall Thickness",
                "options" => array()
            ),
            "leg-a" => array( 
                "title" => "Leg A",
                "options" => array()
            ),
            "leg-b" => array( 
                "title" => "Leg B",
                "options" => array()
            )
        );
        $wall_thickness = "";
        
        if (($handle = fopen($file, "r")) !== FALSE) {
            /***** CSV FILE STRUCTURE *******/
            /*
                 0  |  1  |    2   |   3   |   4  |   5   |   6   |    7    
                SKU | Cut | Finish | Alloy | Wall | Leg A | Leg B |  Price
            */
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $sku = $data[0];

                //add this heading title to the products array as an index
                if($row < 1){
                    for($i = 0; $i <= count($data); $i++){
                        $heading = isset($data[$i]) ? str_replace(" ", "-",strtolower($data[$i])) : null;
                        array_push($headings, $heading);
                    }
                    $row++;
                    continue;
                } 
                $i = 0;
                //add the values of this product for each corresponding category
                foreach($headings as $type){
                    if($type == "sku"){continue;}
                    $products[''.$sku.''][''.$type.''] = $data[$i];
                    $i++;
                }
            }

            fclose($handle);
        }
        $panel = '<div class="panel panel-default panel-fluid">
                    <div class="panel-heading">
                        <h3 class="panel-title">'.$name.'</h3>
                    </div>
                    <div class="panel-default container-fluid">
                    <div class="row"><table class="table table-hover" style="width:100%;margin-bottom:0;"><thead><tr>
                    <th>SKU</th>
                    <th>Leg A x Leg B</th>
                    <th class="hidden-xs hidden-sm text-center">Cut</th>
                    <th class="hidden-xs hidden-sm text-center">Price</th>
                    <th class="text-center"><span class="glyphicon glyphicon-plus"></span></th>
                </tr></thead><tbody>';
        foreach($products as $key => $value){
            $classes = "";
            $i = 0;
            foreach($value as $category){
                if($headings[$i] == "alloy"){
                    $classes .= $headings[$i]."-".$category." ";
                }
                else if($headings[$i] == "finish" || $headings[$i] == "group"){
                    $classes .= $headings[$i]."-".strtolower($category)." ";
                }
                else if($headings[$i] != "sku" && $headings[$i] != "price"&& $headings[$i] != "category"){
                    $classes .= $headings[$i]."-".num2text($category)." ";
                }
               // echo "<li>".$headings[$i].": ".$category."</li>";
                
                if($headings[$i] == "price"){
                    $price = floatval($category);
                }
                else if($headings[$i] == "leg-a"){
                    $leg_a = $category;
                }
                else if($headings[$i] == "leg-b"){
                    $leg_b = $category;
                }
                else if($headings[$i] == "cut"){
                    $cut = $category;
                }
                else if($headings[$i] == "wall"){
                    $wall = $category;
                }
                else if($headings[$i] == "category"){
                    $name = $category;
                }
                
                //add filters
                if(array_key_exists($headings[$i], $filters)){ //check if this is one of the desired filters
                    if(!in_array($category,$filters[$headings[$i]]["options"])){
                        array_push($filters[$headings[$i]]["options"],$category);
                    }
                }
                $i++;
            }
            if($wall != $wall_thickness){
                $panel .= '<tr class="filter-fixed filter-row"><td colspan="5"><b>'.$wall.' Wall Thickness</b></td></tr>';
                $wall_thickness = $wall;
            }
            $panel .= '<tr class="filter-row '.$classes.'">
                <td class="item-sku" data-name="'.$name.'"><a href="'.$base_url.'product.php">'.$key.'</a></td>
                <td class="item-dimensions">'.$leg_a.' x '.$leg_b.'</td>
                <td class="hidden-xs hidden-sm text-center">'.$cut.'</td>
                <td class="item-price hidden-xs hidden-sm text-center" data-price="'.$price.'">$'.number_format($price, 2, '.', '').'</td>
                <td class="cart-col"><span class="glyphicon glyphicon-shopping-cart"></span></td>
            </tr>';
        }
        $panel .= '</tbody></table></div></div></div>';
        
        //create Filters
        $filter_option = '';
        foreach($filters as $key => $value){
            $filter_option .= '<h4 class="filter-name active">'.$value["title"].'</h4><ul>';
            $options = $value["options"];
            $filter_count = count($options);            
            foreach($options as $filter){
                $lonely = $filter_count == 1 ? "checked" : "";
                $filter_option .= '<li class="visible">
                    <input id="'.$key."-".num2text($filter).'" name="'.$key.'" type="radio" value="'.$key."-".num2text($filter).'" '.$lonely.'>
                    <label for="'.$key."-".num2text($filter).'">'.$filter.'</label>
                </li>';
            }
            $filter_option .= "</ul>";
        }
        $filter = '<div class="filter collapse" id="filters"><h3 class="title">'.$name.' Filter</h3><img class="hidden-xs" src="'.$base_url.'img/products/bars/angle-diagram.png" alt="Diagram"/>'.$filter_option.'<div class="clearfix"></div><div id="reset-btn" class="text-center clearfix">Reset Filters</div></div>';
        //end creating filters 
        
        return [$panel, $filter];
    }
    $panels = newPanel($file, "Angles: Mill Finish");
    $panel_mill = $panels[0];
    $filters = $panels[1];
    echo $panel_mill;
    echo $filters;
?>