<?php

namespace Fully\Http\Controllers;

use Fully\Repositories\Project\ProjectInterface;
use Fully\Repositories\Slider\SliderInterface;
use Fully\Repositories\Tag\TagInterface;
use Fully\Repositories\ClientsSay\ClientsSayInterface;
use LaravelLocalization;

/**
 * Class HomeController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class HomeController extends Controller
{
    protected $slider;
    protected $project;
    protected $tag;
    protected $clients_say;

    public function __construct(SliderInterface $slider, ProjectInterface $project, TagInterface $tag,ClientsSayInterface $clients_say)
    {
        $this->slider = $slider;
        $this->project = $project;
        $this->tag = $tag;
        $this->clients_say = $clients_say;
    }

    public function index()
    {
        $languages = LaravelLocalization::getSupportedLocales();

        $sliders = $this->slider->all();
        $projects = $this->project->all();
        $tags = $this->tag->all();
        $clients_say = $this->clients_say->all();

        return view('frontend/layout/dashboard', compact('sliders', 'projects', 'languages', 'tags', 'clients_say'));
    }
}
