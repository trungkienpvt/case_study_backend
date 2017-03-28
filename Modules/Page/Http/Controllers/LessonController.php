<?php
// app/Http/Controllers/LessonController.php
namespace Modules\Page\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use App\Lesson;
use App\LessonFilters;

class LessonController extends Controller
{
    public function index(LessonFilters $filters)
    {
        return Lesson::filter($filters)->get();
    }
}