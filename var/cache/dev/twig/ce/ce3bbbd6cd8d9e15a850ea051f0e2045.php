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

/* formation/listeformationsEmp.html.twig */
class __TwigTemplate_b785d83386d4539c41adecc9d1c03480 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/listeformationsEmp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/listeformationsEmp.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste des formations</title>
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
            overflow-x: auto; /* Pour gérer le débordement horizontal du tableau */
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse; /* Supprimer l'espace entre les bordures des cellules */
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd; /* Ajouter une bordure grise claire aux cellules */
        }

        th {
            background-color: #f8c451; /* Couleur de fond des en-têtes */
            color: #fff;
        }

        tr {
            background-color: rgb(0, 0, 0); /* Fond uniforme pour toutes les lignes */
        }

        /* Style des liens */
        a {
            color: #f8c451; /* Couleur des liens */
            text-decoration: none;
            padding: 5px;
        }

        a:hover {
            color: #fff; /* Couleur du lien au survol */
        }

        /* Boutons stylisés */
        .button {
            background-color: #f8c451; /* Couleur de fond du bouton */
            color: #fff; /* Couleur du texte */
            border: none;
            padding: 12px 24px;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button:hover {
            background-color: #ffb84d; /* Effet au survol */
            transform: scale(1.05); /* Agrandissement au survol */
        }

        /* Espacement pour les liens de déconnexion et autres */
        .links {
            margin-top: 20px;
            text-align: center;
        }

    </style>
</head>
<body>

<div class=\"content\">
    <h1>Vous êtes dans la liste des formations :</h1>

    ";
        // line 102
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 102, $this->source); })())) {
            // line 103
            yield "        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "</p>
    ";
        }
        // line 105
        yield "
    <!-- Tableau des formations -->
    <table>
        <thead>
            <tr>
                <th>Date de Formation</th>
                <th>Nombre d'Heures</th>
                <th>Département</th>
                <th>Sommaire</th>
                <th>Objectif de Formation</th>
                <th>Inscription</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ensFormations"]) || array_key_exists("ensFormations", $context) ? $context["ensFormations"] : (function () { throw new RuntimeError('Variable "ensFormations" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formations"]) {
            // line 120
            yield "                <tr>
                    <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "dateDebut", [], "any", false, false, false, 121), "m/d/Y"), "html", null, true);
            yield "</td>
                    <td>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "nbreHeures", [], "any", false, false, false, 122), "html", null, true);
            yield "</td>
                    <td>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "departement", [], "any", false, false, false, 123), "html", null, true);
            yield "</td>
                    <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "sommaire", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                    <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "leProduit", [], "any", false, false, false, 125), "libelle", [], "any", false, false, false, 125), "html", null, true);
            yield "</td>
                    <td><a href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attention", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\">
                        <button class=\"button\">S'inscrire</button>
                    </a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formations'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "        </tbody>
    </table>

    <div class=\"links\">
        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
            <button class=\"button\">Déconnexion</button>
        </a>
        <a href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aff_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["employe"]) || array_key_exists("employe", $context) ? $context["employe"] : (function () { throw new RuntimeError('Variable "employe" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
        yield "\">
        <button class=\"button\">Formation Valider</button>
    </a>
    </div>
</div>

</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "formation/listeformationsEmp.html.twig";
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
        return array (  225 => 138,  219 => 135,  213 => 131,  202 => 126,  198 => 125,  194 => 124,  190 => 123,  186 => 122,  182 => 121,  179 => 120,  175 => 119,  159 => 105,  153 => 103,  151 => 102,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Liste des formations</title>
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
            overflow-x: auto; /* Pour gérer le débordement horizontal du tableau */
        }

        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse; /* Supprimer l'espace entre les bordures des cellules */
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd; /* Ajouter une bordure grise claire aux cellules */
        }

        th {
            background-color: #f8c451; /* Couleur de fond des en-têtes */
            color: #fff;
        }

        tr {
            background-color: rgb(0, 0, 0); /* Fond uniforme pour toutes les lignes */
        }

        /* Style des liens */
        a {
            color: #f8c451; /* Couleur des liens */
            text-decoration: none;
            padding: 5px;
        }

        a:hover {
            color: #fff; /* Couleur du lien au survol */
        }

        /* Boutons stylisés */
        .button {
            background-color: #f8c451; /* Couleur de fond du bouton */
            color: #fff; /* Couleur du texte */
            border: none;
            padding: 12px 24px;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button:hover {
            background-color: #ffb84d; /* Effet au survol */
            transform: scale(1.05); /* Agrandissement au survol */
        }

        /* Espacement pour les liens de déconnexion et autres */
        .links {
            margin-top: 20px;
            text-align: center;
        }

    </style>
</head>
<body>

<div class=\"content\">
    <h1>Vous êtes dans la liste des formations :</h1>

    {% if message %}
        <p>{{ message }}</p>
    {% endif %}

    <!-- Tableau des formations -->
    <table>
        <thead>
            <tr>
                <th>Date de Formation</th>
                <th>Nombre d'Heures</th>
                <th>Département</th>
                <th>Sommaire</th>
                <th>Objectif de Formation</th>
                <th>Inscription</th>
            </tr>
        </thead>
        <tbody>
            {% for formations in ensFormations %}
                <tr>
                    <td>{{ formations.dateDebut|date(\"m/d/Y\") }}</td>
                    <td>{{ formations.nbreHeures }}</td>
                    <td>{{ formations.departement }}</td>
                    <td>{{ formations.sommaire }}</td>
                    <td>{{ formations.leProduit.libelle }}</td>
                    <td><a href=\"{{ path('app_attention', {'id':formations.id }) }}\">
                        <button class=\"button\">S'inscrire</button>
                    </a></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"links\">
        <a href=\"{{ path('app_login') }}\">
            <button class=\"button\">Déconnexion</button>
        </a>
        <a href=\"{{ path('app_aff_valider', {'id': employe.id}) }}\">
        <button class=\"button\">Formation Valider</button>
    </a>
    </div>
</div>

</body>
</html>

", "formation/listeformationsEmp.html.twig", "C:\\Users\\titi4\\Pictures\\Projet_symfony2\\templates\\formation\\listeformationsEmp.html.twig");
    }
}
