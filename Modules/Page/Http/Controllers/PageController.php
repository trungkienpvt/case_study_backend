<?php
namespace Modules\Page\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Modules\Page\Http\Requests\PageCreateRequest;
use Modules\Page\Http\Requests\PageUpdateRequest;
use Modules\Page\Repositories\PageRepository;
use Modules\Page\Validators\PageValidator;
use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Contracts\Foundation\Application;

class PageController extends Controller
{
    /**
     * @var PageRepository
     */
    protected $repository;

    /**
     * @var PageValidator
     */
    protected $validator;
    /**
     * @var Application
     */
    private $app;

    public function __construct(PageRepository $repository, PageValidator $validator, Application $app)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->app = $app;
    }



    /**
     * @return \Illuminate\View\View
     */
    public function homepage()
    {

//        $this->app->abort('404');
        return view('page::index');
    }
    public function index()
    {

        return view('page::index');
    }

    private function throw404IfNotFound($page)
    {
        if (is_null($page)) {
            $this->app->abort('404');
        }
    }


}
