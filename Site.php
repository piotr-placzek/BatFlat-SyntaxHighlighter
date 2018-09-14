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
        $selected = $this->_getSelected();
        // $this->core->addCSS(url('inc/modules/prismjs/prismjs/style/coy.css'));
        $this->core->addCss(url($selected['path']));
        $this->core->addJS(url('inc/modules/prismjs/prismjs/prism.js'),'footer');
        
        $lang_tags = array('css', 'javascript', 'arduino', 'autoit', 'bash',
        'c', 'cpp', 'csharp', 'aspnet', 'lua', 'makefile', 'markdown', 'less',
        'json', 'latex', 'java', 'ini', 'http', 'git', 'powershell', 'python',
        'sass', 'scss', 'sql', 'typescript', 'yaml', 'php', 'batch', 'visualbasic',
        'verilog', 'vhdl', 'markup');

        $result['default'] = '<pre><code class="language-c">';
        foreach ($lang_tags as &$tag) {
            $result[$tag] = '<pre><code class="language-'.$tag.'">';
        }

        $assign['start'] = $result;
        $assign['end'] = '</code></pre>';
        $this->tpl->set('prismjs', $assign);
    }

    /**
     * Get selected style from db
     * @return Array([name],[path])
     */
    public function _getSelected(){
        $row = $this->core->db('pdev_prismjs')->oneArray('id',0);
        $selected['name'] = $row['name'];
        $selected['path'] = $row['path'];
        return $selected;
    }

    /**
     * Register module routes
     * Call the appropriate method/function based on URL
     *
     * @return void
     */
    public function routes()
    {
        // Simple:
        $this->route('select', 'getSelect');
        /*
            * Or:
            * $this->route('sample', function() {
            *  $this->getIndex();
            * });
            *
            * or:
            * $this->router->set('sample', $this->getIndex());
            *
            * or:
            * $this->router->set('sample', function() {
            *  $this->getIndex();
            * });
        */
    }
}