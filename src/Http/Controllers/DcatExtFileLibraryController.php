<?php

namespace Edwinhuish\DcatExt\FileLibrary\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class DcatExtFileLibraryController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('edwinhuish.dcat-ext-file-library::index'));
    }
}