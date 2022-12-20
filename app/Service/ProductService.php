<?php
namespace App\Service;


use Illuminate\Support\Arr;

class ProductService{

    /*
     * convert and prepare data
     */
    public function prepareData(): array
    {
        $products = xml_to_array(file_get_contents(public_path('google_sv.xml')));
        $productsCollection = collect($products['channel']['item'])->groupBy('g:item_group_id')->toArray();
        $mappedProducts=array();
        foreach($productsCollection as $productCollection){
            foreach ($productCollection as $value){
                $mappedProducts[$value['g:item_group_id']]['g:item_group_id']=$value['g:item_group_id'];
                $mappedProducts[$value['g:item_group_id']]['title']=$value['title'];
                $mappedProducts[$value['g:item_group_id']]['description']=$value['description'];
                $mappedProducts[$value['g:item_group_id']]['g:image_link']=$value['g:image_link'];
                $mappedProducts[$value['g:item_group_id']]['g:price']=$value['g:price'];
                $mappedProducts[$value['g:item_group_id']]['size'][]=$value['g:size'];
            }

        }
        return $mappedProducts;
    }



}
