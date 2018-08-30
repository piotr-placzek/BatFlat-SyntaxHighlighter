<?php
/**
* @author       Piotr Płaczek <piotr@pplczek.pl>
* @copyright    2018 PłaceekDevelopment
* @link         https://pplaczek.pl
*/

namespace Inc\Modules\PrismJs;

use Inc\Core\SiteModule;

class Site extends SiteModule
{
    public function init()
    {
        $this->_importPrismJs();
    }

    private function _importPrismJs()
    {
        $this->core->addCSS(url('inc/modules/prismjs/prismjs/prism.css'));
        $this->core->addJS(url('inc/modules/prismjs/prismjs/prism.js'),'footer');

        $lang['css'] = '<pre><code class="language-css">';
        $lang['javascript'] = '<pre><code class="language-javascript">';
        $lang['arduino'] = '<pre><code class="language-arduino">';
        $lang['autoit'] = '<pre><code class="language-autoit">';
        $lang['bash'] = '<pre><code class="language-bash">';
        $lang['c'] = '<pre><code class="language-c">';
        $lang['cpp'] = '<pre><code class="language-cpp">';
        $lang['csharp'] = '<pre><code class="language-csharp">';
        $lang['aspnet'] = '<pre><code class="language-aspnet">';
        $lang['lua'] = '<pre><code class="language-lua">';
        $lang['makefile'] = '<pre><code class="language-makefile">';
        $lang['markdown'] = '<pre><code class="language-markdown">';
        $lang['less'] = '<pre><code class="language-less">';
        $lang['json'] = '<pre><code class="language-json">';
        $lang['latex'] = '<pre><code class="language-latex">';
        $lang['java'] = '<pre><code class="language-java">';
        $lang['ini'] = '<pre><code class="language-ini">';
        $lang['http'] = '<pre><code class="language-http">';
        $lang['git'] = '<pre><code class="language-git">';
        $lang['powershell'] = '<pre><code class="language-powershell">';
        $lang['python'] = '<pre><code class="language-python">';
        $lang['sass'] = '<pre><code class="language-sass">';
        $lang['scss'] = '<pre><code class="language-scss">';
        $lang['sql'] = '<pre><code class="language-sql">';
        $lang['typescript'] = '<pre><code class="language-typescript">';
        $lang['yaml'] = '<pre><code class="language-yaml">';
        $lang['php'] = '<pre><code class="language-php">';
        $lang['batch'] = '<pre><code class="language-batch">';
        $lang['visualbasic'] = '<pre><code class="language-visualbasic">';
        $lang['velilog'] = '<pre><code class="language-velilog">';
        $lang['vhdl'] = '<pre><code class="language-vhdl">';
        
        $assign['start'] = $lang;
        $assign['end'] = '</code></pre>';
        $this->tpl->set('prismjs', $assign);
    }
}