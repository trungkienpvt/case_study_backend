<?php namespace Modules\Core\Http\Controllers\Admin;

use FloatingPoint\Stylist\Facades\ThemeFacade as Theme;
use Illuminate\Routing\Controller;
use Modules\Core\Foundation\Asset\Manager\AssetManager;
use Modules\Core\Foundation\Asset\Pipeline\AssetPipeline;
use Illuminate\Foundation\Application;
use Prettus\Repository\Contracts\RepositoryInterface;

class AdminBaseController extends Controller
{
    /**
     * @var AssetManager
     */
    protected $assetManager;
    protected $app;
    /**
     * @var AssetPipeline
     */
    protected $assetPipeline;

    public function __construct()
    {
        $this->app = Application::getInstance();
        $this->assetManager = app(AssetManager::class);
        $this->assetPipeline = app(AssetPipeline::class);

        $this->addAssets();
        $this->requireDefaultAssets();
    }

    /**
     * Add the assets from the config file on the asset manager
     */
    private function addAssets()
    {
        foreach (config('core.core.admin-assets') as $assetName => $path) {
            if (key($path) == 'theme') {
                $this->assetManager->addAsset($assetName, Theme::url($path['theme']));
            } else {
                $this->assetManager->addAsset($assetName, $this->asset($path['module']));
            }
        }
    }

    /**
     * Require the default assets from config file on the asset pipeline
     */
    private function requireDefaultAssets()
    {
        $this->assetPipeline->requireCss(config('core.core.admin-required-assets.css'));
        $this->assetPipeline->requireJs(config('core.core.admin-required-assets.js'));
    }

    public function asset($asset)
    {
        list($name, $url) = explode(':', $asset);

        $baseUrl = str_replace(public_path(), '', $this->getAssetsPath());

        $url = $this->app['url']->asset($baseUrl."/{$name}/".$url);

        return str_replace(['http://', 'https://'], '//', $url);
    }

    /**
     * Get module assets path.
     *
     * @return string
     */
    public function getAssetsPath()
    {

        return $this->config('paths.assets');
    }
    public function config($key)
    {
        return $this->app['config']->get('modules.'.$key);
    }
}
