<?php namespace Modules\Core\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Modules\Core\Contracts\Setting;
use Modules\Core\Foundation\Asset\Pipeline\AssetPipeline;

class MasterViewComposer
{
    /**
     * @var Setting
     */
    private $setting;
    /**
     * @var AssetPipeline
     */
    private $assetPipeline;

    public function __construct(AssetPipeline $assetPipeline)
    {
        $this->assetPipeline = $assetPipeline;
    }

    public function compose(View $view)
    {
        $view->with('cssFiles', $this->assetPipeline->allCss());
        $view->with('jsFiles', $this->assetPipeline->allJs());
    }
}
