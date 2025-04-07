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

/* inscription/ListeValiderEmp.html.twig */
class __TwigTemplate_de02ef1d438b285ff1947479b5ebd3c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/ListeValiderEmp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/ListeValiderEmp.html.twig"));

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
    <h1>Vous êtes dans la liste de vos formations validées ou refusées :</h1>

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
    ";
        // line 106
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["ensFormations"]) || array_key_exists("ensFormations", $context) ? $context["ensFormations"] : (function () { throw new RuntimeError('Variable "ensFormations" does not exist.', 106, $this->source); })()))) {
            // line 107
            yield "    <table>
        <thead>
            <tr>
                <th>Nom de la formation :</th>
                <th>Statut :</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ensFormations"]) || array_key_exists("ensFormations", $context) ? $context["ensFormations"] : (function () { throw new RuntimeError('Variable "ensFormations" does not exist.', 115, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
                // line 116
                yield "                <tr>
                    <td>";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "laFormation", [], "any", false, false, false, 117), "leproduit", [], "any", false, false, false, 117), "libelle", [], "any", false, false, false, 117), "html", null, true);
                yield "</td>
                    <td>";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inscription"], "statut", [], "any", false, false, false, 118), "html", null, true);
                yield "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['inscription'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "        </tbody>
    </table>
    ";
        } else {
            // line 124
            yield "        <p>Aucune formation validée ou refusée.</p>
    ";
        }
        // line 126
        yield "
    <div class=\"links\">
        <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aff_formationemp");
        yield "\">
            <button class=\"button\">Retour</button>
        </a>
    </div>
</div>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "inscription/ListeValiderEmp.html.twig";
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
        return array (  207 => 128,  203 => 126,  199 => 124,  194 => 121,  185 => 118,  181 => 117,  178 => 116,  174 => 115,  164 => 107,  162 => 106,  159 => 105,  153 => 103,  151 => 102,  48 => 1,);
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
    <h1>Vous êtes dans la liste de vos formations validées ou refusées :</h1>

    {% if message %}
        <p>{{ message }}</p>
    {% endif %}

    {% if ensFormations is not empty %}
    <table>
        <thead>
            <tr>
                <th>Nom de la formation :</th>
                <th>Statut :</th>
            </tr>
        </thead>
        <tbody>
            {% for inscription in ensFormations %}
                <tr>
                    <td>{{ inscription.laFormation.leproduit.libelle }}</td>
                    <td>{{ inscription.statut }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    {% else %}
        <p>Aucune formation validée ou refusée.</p>
    {% endif %}

    <div class=\"links\">
        <a href=\"{{ path('app_aff_formationemp') }}\">
            <button class=\"button\">Retour</button>
        </a>
    </div>
</div>


</body>
</html>", "inscription/ListeValiderEmp.html.twig", "C:\\Users\\Utilisateur\\symfony7\\Projet_symfony2\\templates\\inscription\\ListeValiderEmp.html.twig");
    }
}
