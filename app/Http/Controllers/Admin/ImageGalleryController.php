<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\{Gallery, ImageGallery};
use Illuminate\Http\Request;

class ImageGalleryController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['img'] = Gallery::get();
        $response['count'] = ImageGallery::count();
        $this->Logger->log('info', 'Listou imagem de galeria');
        return view('admin.gallery.list.index', $response);
    }

    public function create()
    {
        $response['img'] = ImageGallery::get();
        return view('admin.ImageGallery.create.index', $response);
    }

}
