<?php

/*
 * Base controller
 * Loads the models and views
 */
class Controller
{
    // Load model
    public function model($model)
    {
        // Require model file
        require_once APP_ROOT . '/models/' . $model . '.php';

        // Instatiate model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        if (file_exists(APP_ROOT . VIEW_HEADER_PATH)) {
            require_once APP_ROOT . VIEW_HEADER_PATH;
        }

        // Check for view file
        if (file_exists(APP_ROOT . '/views/' . $view . '.php')) {
            require_once APP_ROOT . '/views/' . $view . '.php';
        } else {
            // View does not exist
            die('View does not exist.');
        }

        if (file_exists(APP_ROOT . VIEW_FOOTER_PATH)) {
            require_once APP_ROOT . VIEW_FOOTER_PATH;
        }
    }
}
