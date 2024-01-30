<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* axel/SavoirPlus.html.twig */
class __TwigTemplate_398eddd1bef3bdd1a8b5164f3d78b2ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "axel/SavoirPlus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "axel/SavoirPlus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "axel/SavoirPlus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Mes passions :</h1>

    <div class=\"row mt-4\">
        <div class=\"col-md-4\">
            <h2>-Plongée sous-marine</h2>
            <p>C'est l'un de mes loisirs préférés que j'ai commencé à l'âge de 10 ans, et dans lequel je continue de m'épanouir. Par ailleurs, j'ai obtenu de nombreuses formations, telles que Open Water, Advanced et Nitrox. .</p>
            <img src=\"Plongée.jpg\" alt=\"Image Passion 1\" class=\"img-fluid\">
        </div>

        <div class=\"col-md-4\">
            <h2>-Rugby</h2>
            <p>Le rugby, est un sport que j’ai commencé il ya plus de 1 ans et que j’aime beaucoup pour  l'esprit d'équipe et la solidarité sur le terrain.Et plonger dans le monde rugueux du rugby est bien plus qu'une simple activité sportive, c'est une expérience qui sculpte le caractère et crée des liens indestructibles.</p>
            <img src=\"rugby.jpg\" alt=\"Image Passion 2\" class=\"img-fluid\">
        </div>

        <div class=\"col-md-4\">
            <h2>Les Technologie </h2>
            <p>La passion de la technologie mon toujour captivait par son rythme effréné d'innovations incessantes. Les Explorer les avancées technologiques, des gadgets futuristes aux logiciels révolutionnaires. Chaque nouvelle découverte réveille ma curiosité, transformant cette passion en une aventure intellectuelle constante. La technologie n'est pas seulement un intérêt, mais une source infinie d'inspiration .</p>
            <img src=\"tech.jpg\" alt=\"Image Passion 2\" class=\"img-fluid\">
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "axel/SavoirPlus.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block title %}Portfolio{% endblock %}

{% block body %}
    <h1>Mes passions :</h1>

    <div class=\"row mt-4\">
        <div class=\"col-md-4\">
            <h2>-Plongée sous-marine</h2>
            <p>C'est l'un de mes loisirs préférés que j'ai commencé à l'âge de 10 ans, et dans lequel je continue de m'épanouir. Par ailleurs, j'ai obtenu de nombreuses formations, telles que Open Water, Advanced et Nitrox. .</p>
            <img src=\"Plongée.jpg\" alt=\"Image Passion 1\" class=\"img-fluid\">
        </div>

        <div class=\"col-md-4\">
            <h2>-Rugby</h2>
            <p>Le rugby, est un sport que j’ai commencé il ya plus de 1 ans et que j’aime beaucoup pour  l'esprit d'équipe et la solidarité sur le terrain.Et plonger dans le monde rugueux du rugby est bien plus qu'une simple activité sportive, c'est une expérience qui sculpte le caractère et crée des liens indestructibles.</p>
            <img src=\"rugby.jpg\" alt=\"Image Passion 2\" class=\"img-fluid\">
        </div>

        <div class=\"col-md-4\">
            <h2>Les Technologie </h2>
            <p>La passion de la technologie mon toujour captivait par son rythme effréné d'innovations incessantes. Les Explorer les avancées technologiques, des gadgets futuristes aux logiciels révolutionnaires. Chaque nouvelle découverte réveille ma curiosité, transformant cette passion en une aventure intellectuelle constante. La technologie n'est pas seulement un intérêt, mais une source infinie d'inspiration .</p>
            <img src=\"tech.jpg\" alt=\"Image Passion 2\" class=\"img-fluid\">
        </div>
    </div>
{% endblock %}", "axel/SavoirPlus.html.twig", "C:\\Users\\axell\\SAE14\\templates\\axel\\SavoirPlus.html.twig");
    }
}
