<?php
/**
 * @author @ilhamb
 */
namespace classes;

class Main
{

    public THEME $theme;

    function __construct()
    {

        // INIT THEME
        $this->theme = THEME::getActiveTheme();
    
        // INIT PLUGIN
        $listPlugin = Plugin::getListPlugin();

        // INIT VIEW
        $this->view = new VIEW($this);
        $this->view->brand("TOKO MINYAK");

        foreach ($listPlugin as $plugin) {
            // CALL PLUGIN
            $plugin->callOnFront($this);
        }

        $this->view->render(); # RENDER
    }
}
