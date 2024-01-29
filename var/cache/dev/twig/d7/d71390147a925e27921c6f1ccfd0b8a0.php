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

/* axel/Accueil.html.twig */
class __TwigTemplate_2df4379598298ce72abf2271b0c8c96c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "axel/Accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "axel/Accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "axel/Accueil.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <div style=\"margin-left: 20px;\"> <!-- Ajustez la marge selon vos préférences -->
        <h1 style=\"text-align: left; font-size: 2.5em; color: #ffffff; font-family: 'Arial', sans-serif;\">Bienvenue sur mon E-Portfolio</h1>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 20px;\">Je me présente, Axel Helix, étudiant en réseaux et télécommunications à l'IUT de Roanne. Passionné par les technologies de réseau et de télécommunications, et doté d'une solide compréhension des infrastructures réseau ainsi que de compétences pratiques acquises au cours de mes études, je suis désireux de mettre en œuvre mes connaissances pour contribuer au succès d'une équipe et relever les défis stimulants du monde professionnel des technologies de l'informatique.</p>
        
        <h2 style=\"font-size: 2em; color: #ffffff; font-family: 'Arial', sans-serif; margin-top: 30px;\">Informations personnelles:</h2>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 20px;\">
            - Nom: Axel Helix<br>
            - Âge: 18 ans<br>
            - Numéro de téléphone: 0649615316<br>
            - Adresse postale: 42300<br>
            - E-mail: axel.helix@etu.univ-st-etienne.fr
        </p>
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
        return "axel/Accueil.html.twig";
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
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <div style=\"margin-left: 20px;\"> <!-- Ajustez la marge selon vos préférences -->
        <h1 style=\"text-align: left; font-size: 2.5em; color: #ffffff; font-family: 'Arial', sans-serif;\">Bienvenue sur mon E-Portfolio</h1>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 20px;\">Je me présente, Axel Helix, étudiant en réseaux et télécommunications à l'IUT de Roanne. Passionné par les technologies de réseau et de télécommunications, et doté d'une solide compréhension des infrastructures réseau ainsi que de compétences pratiques acquises au cours de mes études, je suis désireux de mettre en œuvre mes connaissances pour contribuer au succès d'une équipe et relever les défis stimulants du monde professionnel des technologies de l'informatique.</p>
        
        <h2 style=\"font-size: 2em; color: #ffffff; font-family: 'Arial', sans-serif; margin-top: 30px;\">Informations personnelles:</h2>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 20px;\">
            - Nom: Axel Helix<br>
            - Âge: 18 ans<br>
            - Numéro de téléphone: 0649615316<br>
            - Adresse postale: 42300<br>
            - E-mail: axel.helix@etu.univ-st-etienne.fr
        </p>
    </div>
{% endblock %}
", "axel/Accueil.html.twig", "C:\\Users\\axell\\SAE14\\templates\\axel\\Accueil.html.twig");
    }
}
