<?php

namespace Application\Controllers;

use Miny\Controller\Controller;
use Miny\HTTP\Request;

class DocumentsController extends Controller
{
    /**
     * @template "documents/show"
     */
    public function indexAction(Request $request)
    {
        $path = dirname($request->get()->get('path', ''));
        if (!$this->showDocument($path . '/index.md')) {
            return false;
        }
    }

    /**
     * @template "documents/show"
     */
    public function showAction(Request $request)
    {
        if (!$this->showDocument($request->get()->get('path'))) {
            return false;
        }
    }

    private function showDocument($path)
    {
        $path = $this->getConfig('document_root') . $path;

        if (!is_file($path)) {
            $this->setCode(404);

            return false;
        }
        $this->assign('content', file_get_contents($path));

        return true;
    }
}
