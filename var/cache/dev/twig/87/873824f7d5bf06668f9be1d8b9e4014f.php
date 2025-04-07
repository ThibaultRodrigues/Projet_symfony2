<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* formation/DejaInscrit.html.twig */
class __TwigTemplate_dd06efc7046db012d41f1c563a475b6c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/DejaInscrit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/DejaInscrit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Validations des formations</title>
    <link rel=\"icon\" href=\"images/logo.png\" type=\"image/png\">
    <style>
        /* Appliquer l'image de fond à l'ensemble de la page */
        body {
            margin: 0;
            padding: 0;
            background-image: url('Images/backdrop.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            font-family: Arial, sans-serif;
            color: #fff; /* Couleur du texte */
        }

        /* Ajouter un arrière-plan semi-transparent pour améliorer la lisibilité du texte */
        .content {
            position: relative;
            z-index: 2;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Arrière-plan semi-transparent */
            border-radius: 10px; /* Optionnel : pour arrondir les coins */
            margin: 20px;
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        /* Style du texte pour l'améliorer */
        p {
            font-size: 1.1em;
        }

        a {
            color: #f8c451; /* Couleur des liens */
            text-decoration: none;
            padding: 5px;
        }

        a:hover {
            color: #fff; /* Couleur du lien au survol */
        }
    </style>
</head>
<body>
    <div class=\"content\">
        <h1>ATTENTION!!</h1>
        <h2>Vous êtes déjà inscrit à cette formation</h2>
        <p><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aff_formationemp");
        yield "\">retour</a> </p>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "formation/DejaInscrit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  107 => 58,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Validations des formations</title>
    <link rel=\"icon\" href=\"images/logo.png\" type=\"image/png\">
    <style>
        /* Appliquer l'image de fond à l'ensemble de la page */
        body {
            margin: 0;
            padding: 0;
            background-image: url('Images/backdrop.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            font-family: Arial, sans-serif;
            color: #fff; /* Couleur du texte */
        }

        /* Ajouter un arrière-plan semi-transparent pour améliorer la lisibilité du texte */
        .content {
            position: relative;
            z-index: 2;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Arrière-plan semi-transparent */
            border-radius: 10px; /* Optionnel : pour arrondir les coins */
            margin: 20px;
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        /* Style du texte pour l'améliorer */
        p {
            font-size: 1.1em;
        }

        a {
            color: #f8c451; /* Couleur des liens */
            text-decoration: none;
            padding: 5px;
        }

        a:hover {
            color: #fff; /* Couleur du lien au survol */
        }
    </style>
</head>
<body>
    <div class=\"content\">
        <h1>ATTENTION!!</h1>
        <h2>Vous êtes déjà inscrit à cette formation</h2>
        <p><a href=\"{{ path('app_aff_formationemp') }}\">retour</a> </p>
    </div>", "formation/DejaInscrit.html.twig", "C:\\Users\\Utilisateur\\symfony7\\Projet_symfony2\\templates\\formation\\DejaInscrit.html.twig");
    }
}
