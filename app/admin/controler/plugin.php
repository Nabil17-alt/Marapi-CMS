<?php

use classes\Plugin;

$html = "<ul class='list-item'>";

$plugins = Plugin::getListPlugin();

foreach ($plugins as $plugin) {

    //$plugin->setActive();

    $html .= "<li class='item'>

        <div class='item-body d-flex'>

            <div class='col'>

                <h4 class='item-title'>" . $plugin->meta['@name'] . "</h4>

                <div class='action-wrapper'>

                    <a class='action-btn'>Active</a>

                    <a class='action-btn text-danger'>Delete</a>

                    <a class='action-btn'>Edit</a>

                </div>

            </div>

            <div class='col'>

                <p>".$plugin->meta['@description']."</p>

                <div class='action-wrapper'>

                    <span>By <span class='text-primary'>".$plugin->meta['@author']."</span></span>

                </div>

            </div>
            
        </div>

    </li>";
}
$html .= "</ul>";


$this->body = str_replace("[{CONTENT}]", $html, $this->body);
