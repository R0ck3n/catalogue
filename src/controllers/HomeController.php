<?php
namespace controllers;
class HomeController extends AbstractController
{
    /** Affichage du corp de la homepage
     * @return void
     */
    public function index(): void
    {

        $this->display('homepage', [

        ]);
    }






}