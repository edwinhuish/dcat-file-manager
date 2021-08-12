<?php

namespace Edwin\DcatFileManager\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class FileManager extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('edwin-file-library::index'));
    }
}
