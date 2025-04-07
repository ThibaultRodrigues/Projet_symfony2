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

/* formation/listeformations.html.twig */
class __TwigTemplate_ed166ee5d68f22088d83d9f7a622b77a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/listeformations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/listeformations.html.twig"));

        // line 1
        yield "vous êtes dans la liste des formations : </br> </br>
";
        // line 2
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()), "html", null, true);
            yield "
";
        }
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ensFormations"]) || array_key_exists("ensFormations", $context) ? $context["ensFormations"] : (function () { throw new RuntimeError('Variable "ensFormations" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formations"]) {
            // line 6
            yield "    Date de formations : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "dateDebut", [], "any", false, false, false, 6), "m/d/Y"), "html", null, true);
            yield "
    Nombre d'heure de la formation : ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "nbreHeures", [], "any", false, false, false, 7), "html", null, true);
            yield "
    Département : ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "departement", [], "any", false, false, false, 8), "html", null, true);
            yield "
    Objectif de formation : ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "leProduit", [], "any", false, false, false, 9), "libelle", [], "any", false, false, false, 9), "html", null, true);
            yield "
    <a href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_sup", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formations"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\">Suppression</a></br> </br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formations'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "</br>
<a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajout_formation");
        yield "\">Ajouter une formation</a></br>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "formation/listeformations.html.twig";
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
        return array (  91 => 13,  88 => 12,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  63 => 6,  59 => 5,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("vous êtes dans la liste des formations : </br> </br>
{% if (message) %}
    {{ message }}
{% endif %}
{% for formations in ensFormations %}
    Date de formations : {{ formations.dateDebut|date(\"m/d/Y\") }}
    Nombre d'heure de la formation : {{ formations.nbreHeures }}
    Département : {{formations.departement}}
    Objectif de formation : {{formations.leProduit.libelle}}
    <a href=\"{{path('app_formation_sup',{'id': formations.id})}}\">Suppression</a></br> </br>
{% endfor %}
</br>
<a href=\"{{path('app_ajout_formation')}}\">Ajouter une formation</a></br>", "formation/listeformations.html.twig", "C:\\Users\\Utilisateur\\symfony7\\Projet_symfony2\\templates\\formation\\listeformations.html.twig");
    }
}
