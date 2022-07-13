<?php 
/*
$previd=0;
$curr_subcat=null;
$curr_cat=null;
$grouped=[];
foreach($productos as $p){ 
{
    if($curr_cat!=$p["categoria_idcategoria"])
    {
        $curr_cat = $p["categoria_idcategoria"];
        $grouped[$curr_cat] = [];
    }
    if($curr_subcat!=$p["subcategoria_idsubcategoria"])
    {
        $curr_subcat = $p["subcategoria_idsubcategoria"];
        $grouped[$curr_cat][$curr_subcat] = [];
    }
    $grouped[$curr_cat][$curr_subcat][] = $p;

}

foreach($grouped as $prod_cat)//loop tru categories
{
    $groups=[];
    $max=-1;
    foreach($prod_cat as  $prod_subcat)//loop tru subcategories
    {
        //
        if(count($prod_subcat)>$max){
            $max = count($prod_subcat);
        }
    }

    
    foreach($prod_cat as  $prod_subcat)//loop tru subcategories
    {
        $group=-1;
        $i=0;
        for(;$i<count($groups);$i++)
        {
            if($max-$g>3)
            {
                break;
            }
        }
        if(count($groups)<1)
        {
            $groups[] =  count($groups);
        }
        else{
            $groups[$i] =  intval($groups[$i]) + count($groups);
        }

        $prod_subcat['group'] = $i;
    }
    $cont =true;
    while($cont)
    {
        $cont=false;
        for($i=0;$i<count($prod_subcat)-1;$i++)
        {
            if($prod_subcat[$i]['group']>$prod_subcat[$i+1]['group'])
            {
                $cont=true;
                $temp = $prod_subcat[$i];
                $prod_subcat[$i] = $prod_subcat[$i+1];
                $prod_subcat[$i+1] = $temp;
            }
        }
    }
    
}
$prevgroup = -1;
$prevsubcat = -1;
foreach($grouped as $prod_cat)//loop tru categories
{
    if($prevgroup != $prod_cat[""])
    {
        
    }
    if($prevsubcat != $prod_cat[""])
    {

    }
}
*/