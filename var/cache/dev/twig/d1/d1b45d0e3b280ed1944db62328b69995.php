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

/* axel/Portfolio.html.twig */
class __TwigTemplate_9690c42d074a62303e03df65ddf9cea4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "axel/Portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "axel/Portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "axel/Portfolio.html.twig", 1);
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
        echo "    <div style=\"margin-left: 20px;\"> <!-- Ajustez la marge selon vos préférences -->
        <h1 style=\"text-align: left; font-size: 2.5em; color: #ffffff; font-family: 'Arial', sans-serif;\">Portfolio</h1>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 20px;\">Bienvenue sur mon portfolio où je partage mes compétences et expériences :</p>
        
        <!-- Ajoutez ici vos compétences avec des barres de progression -->
        <ul style=\"list-style: none; padding: 0;\">
            <li style=\"margin-top: 20px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">CRM Saleforce</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 20px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">Suite Adobe</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 85%; background-color: #3498db;\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">85%</div>
                </div>
            </li>
            <li style=\"margin-top: 20px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">SAGE (facturation)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 95%; background-color: #3498db;\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\">95%</div>
                </div>
            </li>
            <!-- Ajoutez d'autres compétences ici -->
        </ul>
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
        return "axel/Portfolio.html.twig";
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

{% block title %}Portfolio{% endblock %}

{% block body %}
    <div style=\"margin-left: 20px;\"> <!-- Ajustez la marge selon vos préférences -->
        <h1 style=\"text-align: left; font-size: 2.5em; color: #ffffff; font-family: 'Arial', sans-serif;\">Portfolio</h1>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 20px;\">Bienvenue sur mon portfolio où je partage mes compétences et expériences :</p>
        
        <!-- Ajoutez ici vos compétences avec des barres de progression -->
        <ul style=\"list-style: none; padding: 0;\">
            <li style=\"margin-top: 20px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">CRM Saleforce</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 20px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">Suite Adobe</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 85%; background-color: #3498db;\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">85%</div>
                </div>
            </li>
            <li style=\"margin-top: 20px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">SAGE (facturation)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 95%; background-color: #3498db;\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\">95%</div>
                </div>
            </li>
            <!-- Ajoutez d'autres compétences ici -->
        </ul>
    </div>
{% endblock %}
", "axel/Portfolio.html.twig", "C:\\Users\\axell\\SAE14\\templates\\axel\\Portfolio.html.twig");
    }
}
