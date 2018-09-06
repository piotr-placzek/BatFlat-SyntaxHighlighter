<?php
/**
* @author       Piotr Płaczek <piotr@pplczek.pl>
* @copyright    2018 PłaceekDevelopment
* @link         https://pplaczek.pl
*/

namespace Inc\Modules\PrismJs;

use Inc\Core\AdminModule;

/**
 * Sample admin class
 */
class Admin extends AdminModule
{
    /**
     * Module navigation
     * Items of the returned array will be displayed in the administration sidebar
     *
     * @return array
     */
    public function navigation()
    {
        return [
            $this->lang('index') => 'index',
        ];
    }

    /**
     * Save selected style into db
     * @param string $name, string $path
     */
    public function setSelected($name,$path){
        $this->core->db('pdev_prismjs')->where('id', 0)->set('name', $name)->update();
        $this->core->db('pdev_prismjs')->where('id', 0)->set('path', $path)->update();
    }

     /**
     * Get selected style from db
     * @return Array([name],[path])
     */
    public function getSelected(){
        $row = $this->core->db('pdev_prismjs')->oneArray('id',0);
        $selected['name'] = $row['name'];
        $selected['path'] = $row['path'];
        return $selected;
    }

    /**
     * GET: /admin/sample/index
     * Subpage method of the module
     *
     * @return string
     */
    public function getIndex()
    {
        $text = 'Prism highlighter for BatFlat by pplaczek';
        $styles = [ 
            'Default' => url('inc/modules/prismjs/prismjs/style/Default.css'),
            'Dark' => url('inc/modules/prismjs/prismjs/style/Dark.css'),
            'Funky' => url('inc/modules/prismjs/prismjs/style/Funky.css'),
            'Okaidia' => url('inc/modules/prismjs/prismjs/style/Okaidia.css'),
            'Twilight' => url('inc/modules/prismjs/prismjs/style/Twilight.css'),
            'Coy' => url('inc/modules/prismjs/prismjs/style/Coy.css'),
            'Solarized_light' => url('inc/modules/prismjs/prismjs/style/Solarized_light.css'),
            'Tomorrow_night' => url('inc/modules/prismjs/prismjs/style/Tomorrow_night.css')
        ];

        $selected = $this->getSelected();
        
        return $this->draw('index.html', ['text' => $text, 'styles' => $styles, 'selected' => $selected]);
    }

    public function getSelect($arg = null){
            if($arg == 'select'){
                $this->core->setNotify('failure', '{$lang.prismjs.change_notify_fail}');    
            }
            else{
                $this->setSelected($arg, 'inc/modules/prismjs/prismjs/style/'.$arg.'.css');
                $this->core->setNotify('success', '{$lang.prismjs.change_notify} %s', $arg);
            }
            return $this->getIndex();
    }
}
