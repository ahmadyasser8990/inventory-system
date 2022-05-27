<?php

namespace App\Exports;

use App\Category;
use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection,WithHeadings
{



    public function headings():array{
        return [
            'المورد','الصنف','رقم الاضافي','رقم الصنف','نوع القطعه','وزن الذهب',
            'وزن الالماس 1','وزن الالماس 2','وزن الالماس 3','وزن الالماس 4','وزن الالماس 5',
            'وزن الباجيت','وزن الماركيز','وزن حجر كبير',
            'وزن برنسس','ملون','اللون','النقاء','الوصف',
            'سعر الشراء','سعر البيع',
            'الحاله','تاريخ الانشاء',
        ];
    }

    public function collection()
    {
        // return Product::all();
        // dd(collect(Product::getProduct()));
        return collect(Product::getProduct());
    }
}
