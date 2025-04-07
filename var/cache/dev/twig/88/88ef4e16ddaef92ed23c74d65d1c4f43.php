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

/* login/formulaire.html.twig */
class __TwigTemplate_74d10ae80fe4f27b6108bc3985af3269 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/formulaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/formulaire.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexions</title>
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
    ";
        // line 56
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), ["form_table_layout.html.twig"], true);
        // line 57
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 61
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 58
        yield "        <h1>Connectez-vous</h1>
        ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form');
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/formulaire.html.twig";
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
        return array (  138 => 59,  135 => 58,  122 => 57,  111 => 61,  108 => 57,  106 => 56,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexions</title>
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
    {% form_theme form 'form_table_layout.html.twig' %}
    {% block body %}
        <h1>Connectez-vous</h1>
        {{ form (form)}}
    {% endblock %}
</div>", "login/formulaire.html.twig", "C:\\Users\\Utilisateur\\symfony7\\Projet_symfony2\\templates\\login\\formulaire.html.twig");
    }
}
