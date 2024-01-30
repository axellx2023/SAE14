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
        echo "    <div style=\"margin-left: 10px;\"> <!-- Ajustez la marge selon vos préférences -->
        <h1 style=\"text-align: left; font-size: 2.5em; color: #ffffff; font-family: 'Arial', sans-serif;\">Portfolio</h1>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 10px;\">Bienvenue sur mon portfolio où je partage mes compétences et expériences :</p>
        
        <!-- Ajoutez ici vos compétences avec des barres de progression -->
        <ul style=\"list-style: none; padding: 0;\">
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)
</span>
                <div class=\"progress\" style=\"margin-top: 5px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%; background-color: #3498db;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Comprendre les principes et standards du codage de l’information</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%; background-color: #3498db;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Savoir identifier les dysfonctionnements du réseau local</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; background-color: #3498db;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; background-color: #3498db;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%; background-color: #3498db;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets
autour de la chaîne d’acquisition/traitement)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; background-color: #3498db;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%; background-color: #3498db;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%; background-color: #3498db;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                </div>
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
    <div style=\"margin-left: 10px;\"> <!-- Ajustez la marge selon vos préférences -->
        <h1 style=\"text-align: left; font-size: 2.5em; color: #ffffff; font-family: 'Arial', sans-serif;\">Portfolio</h1>
        <p style=\"text-align: left; font-size: 1.2em; color: #ffffff; margin-top: 10px;\">Bienvenue sur mon portfolio où je partage mes compétences et expériences :</p>
        
        <!-- Ajoutez ici vos compétences avec des barres de progression -->
        <ul style=\"list-style: none; padding: 0;\">
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Configurer les fonctions de base du réseau local (Ethernet, IPv4, intro IPv6, commutation, VLANs, routage statique)
</span>
                <div class=\"progress\" style=\"margin-top: 5px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Connaître l’architecture et les technologies d’un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%; background-color: #3498db;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Installer un poste client (et le sécuriser: antivirus, parefeu, comptes, ...)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Comprendre les principes et standards du codage de l’information</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%; background-color: #3498db;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Savoir identifier les dysfonctionnements du réseau local</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%; background-color: #3498db;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\">75%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements de réseaux et télécommunications (habilitation électrique)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; background-color: #3498db;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Lire, exécuter, corriger et modifier un programme (programmes simples type scripts, algorithme inclus)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%; background-color: #3498db;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Traduire un algorithme, dans un langage et pour un environnement donné (peut inclure plusieurs, y compris objet)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%; background-color: #3498db;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Mesurer et analyser les signaux (audio et vidéo, ordres de grandeurs, comprendre la dualité temps/fréquence et utiliser des équipements d’analyse spectrale, avec projets
autour de la chaîne d’acquisition/traitement)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%; background-color: #3498db;\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">60%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Déployer des supports de transmission (traitement au choix de la propagation, câblage LAN, fibre optique, ou une introduction à l’IoT)</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%; background-color: #3498db;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>
                </div>
            </li>
            <li style=\"margin-top: 10px;\">
                <span class=\"compétence\" style=\"font-size: 1.2em; color: #ffffff;\">• Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement</span>
                <div class=\"progress\" style=\"margin-top: 10px;\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%; background-color: #3498db;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>
                </div>
        </ul>
    </div>
{% endblock %}
", "axel/Portfolio.html.twig", "C:\\Users\\axell\\SAE14\\templates\\axel\\Portfolio.html.twig");
    }
}
