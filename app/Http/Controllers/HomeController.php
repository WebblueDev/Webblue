<?php

namespace Webblue\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{
    public function index() {

        return view('home');
    }

    public function imprint() {
        SEO::setTitle('Impressum');
        SEO::setDescription('Impressum der Webseite von Webblue Media bei Andreas Scholten');
        return view('imprint');
    }

    public function agb() {
        SEO::setTitle('Allgemeine Geschäftsbedinungen');
        SEO::setDescription('Allgemeine Geschäftsbedingungen von Webblue Media bei Andreas Scholten');
        return view('agb');
    }

    public function legal() {
        SEO::setTitle('Datenschutzbestimmungen');
        SEO::setDescription('Datenschutzbestimmungen von Webblue Media bei Andreas Scholten');
        return view('legal');
    }

    public function projects() {
        SEO::setTitle('Projekte');
        SEO::setDescription('Schau dir eine Auswahl an Projekte an, die Andreas Scholten für Kunden von Webblue Media bereits angegangen ist.');
        return view('projects');
    }

    public function about() {
        SEO::setTitle('Über mich');
        SEO::setDescription('Andreas Scholten steckt hinter Webblue Media. Ich bin leidenschaftlicher Webentwickler und hier kannst du mehr über mich erfahren!');
        return view('about');
    }
}
