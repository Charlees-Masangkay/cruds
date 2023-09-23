<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Publisher\Exceptions\PublisherException;

class ProductController extends BaseController
{
    public function product($product)
    {
        echo $product;
    }
    public function crud()
    {
        echo 'bebii ingat ikaw';
    }
    public function index()
    {
        //
    }
}
