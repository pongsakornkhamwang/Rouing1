<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
    // เพิ่มรูปภาพนำเสนอสินค้าด้านบนสุด
    private $bannerImage = 'https://adaymagazine.com/wp-content/uploads/2020/03/Type-B_nike-eco-scaled.jpg';

    private $products = [
        [
            'id' => 1,
            'name' => 'Nike Dunk Low By You',
            'description' => 'High-performance laptop',
            'price' => 1500,
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/20547d52-3e1b-4c3d-b917-f0d7e0eb8bdf/custom-nike-air-force-1-low-by-you-shoes.png'
        ],
        [
            'id' => 2,
            'name' => 'Nike Dunk Low By You',
            'description' => 'Latest smartphone with great features',
            'price' => 800,
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/05856ac7-0129-4395-bd6e-2fe2669025fb/custom-nike-dunk-low-by-you-su24.png'
        ],
        [
            'id' => 3,
            'name' => 'Nike Dunk Low',
            'description' => 'Portable tablet for everyday use',
            'price' => 500,
            'image' => 'https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/52084f93-98d3-4d52-9b57-3f9a7061bb7f/NIKE+DUNK+LOW+NN.png'
        ],
        [
            'id' => 1,
            'name' => 'Nike Dunk Low By You',
            'description' => 'High-performance laptop',
            'price' => 1500,
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/20547d52-3e1b-4c3d-b917-f0d7e0eb8bdf/custom-nike-air-force-1-low-by-you-shoes.png'
        ],
        [
            'id' => 2,
            'name' => 'Nike Dunk Low By You',
            'description' => 'Latest smartphone with great features',
            'price' => 800,
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/05856ac7-0129-4395-bd6e-2fe2669025fb/custom-nike-dunk-low-by-you-su24.png'
        ],
        [
            'id' => 3,
            'name' => 'Nike Dunk Low',
            'description' => 'Portable tablet for everyday use',
            'price' => 500,
            'image' => 'https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/52084f93-98d3-4d52-9b57-3f9a7061bb7f/NIKE+DUNK+LOW+NN.png'
        ],
        [
            'id' => 1,
            'name' => 'Nike Dunk Low By You',
            'description' => 'High-performance laptop',
            'price' => 1500,
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/20547d52-3e1b-4c3d-b917-f0d7e0eb8bdf/custom-nike-air-force-1-low-by-you-shoes.png'
        ],
        [
            'id' => 2,
            'name' => 'Nike Dunk Low By You',
            'description' => 'Latest smartphone with great features',
            'price' => 800,
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/05856ac7-0129-4395-bd6e-2fe2669025fb/custom-nike-dunk-low-by-you-su24.png'
        ],
        [
            'id' => 3,
            'name' => 'Nike Dunk Low',
            'description' => 'Portable tablet for everyday use',
            'price' => 500,
            'image' => 'https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/52084f93-98d3-4d52-9b57-3f9a7061bb7f/NIKE+DUNK+LOW+NN.png'
        ],
    ];

    public function index(): Response
    {
        return Inertia::render('Products/Index', [
            'products' => $this->products,
            'bannerImage' => $this->bannerImage,  // ส่งรูปภาพนำเสนอไปยังหน้า index
        ]);
    }

    public function show($id): Response
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', [
            'product' => $product,
            'bannerImage' => $this->bannerImage,  // ส่งรูปภาพนำเสนอไปยังหน้า show
        ]);
    }
}
