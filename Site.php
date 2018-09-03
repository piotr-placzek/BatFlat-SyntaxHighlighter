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
        
        $lang_tags = array('css', 'javascript', 'arduino', 'autoit', 'bash',
        'c', 'cpp', 'csharp', 'aspnet', 'lua', 'makefile', 'markdown', 'less',
        'json', 'latex', 'java', 'ini', 'http', 'git', 'powershell', 'python',
        'sass', 'scss', 'sql', 'typescript', 'yaml', 'php', 'batch', 'visualbasic',
        'verilog', 'vhdl');

        $result['default'] = '<pre><code class="language-c">';
        foreach ($lang_tags as &$tag) {
            $result[$tag] = '<pre><code class="language-'.$tag.'">';
        }

        $assign['start'] = $result;
        $assign['end'] = '</code></pre>';
        $this->tpl->set('prismjs', $assign);
    }
}