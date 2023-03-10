<?php

namespace controllers;

class AbstractController
{
    /**
     * @param string $template
     * @param array $data
     * @return void
     */
    public function display(string $template, array $data = []): void
    {
        // Transforme les clés du tableau $data en variable
        extract($data);
        
        // On inclut le layout
        require 'src/views/layout.php';
    }
    public function redirect(string $path): void
    {
        header('Location: ' . url($path));
        exit();
    }
}