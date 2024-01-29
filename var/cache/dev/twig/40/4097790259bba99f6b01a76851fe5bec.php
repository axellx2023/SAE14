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

/* base.html.twig */
class __TwigTemplate_01eb40a8dcb49e3e040fea28489d1c02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'copyright' => [$this, 'block_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- templates/bas.html.twig -->

<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Inclure Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\">

    <!-- Inclure le thème Bootswatch Lux -->
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">

    <!-- Ajouter du style personnalisé -->
    <style>
        /* Votre style existant ici */
    </style>
</head>

<body>
    <div class=\"container mt-3\">
        <h1>E-Portfolio</h1>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Accueil");
        echo "\">E-Portfolio</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
                aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\">CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Portfolio");
        echo "\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SavoirPlus");
        echo "\">En savoir plus</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container mt-5\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>

    <!-- Pied de page -->
    <footer class=\"bg-dark text-white text-center py-3\">
        <p>&copy; ";
        // line 59
        $this->displayBlock('copyright', $context, $blocks);
        echo " E-Portfolio. Tous droits réservés.</p>
        <p>Adresse: 15 Bis rue Fontenille| Email: axellx@outlook.fr| Téléphone: 0649615316</p>
    </footer>

    <!-- Inclure Bootstrap JS et Popper.js -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\"
        integrity=\"sha384-eMNCO9jq2k4YJsJsXn1CqjSef6YbHvTbO9UnQbYEKr8RNE+mbYUAl66fwMlJe+mv\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "E-Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copyright"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copyright"));

        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  189 => 59,  171 => 54,  152 => 9,  124 => 59,  118 => 55,  116 => 54,  105 => 46,  99 => 43,  93 => 40,  82 => 32,  56 => 9,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/bas.html.twig -->

<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}E-Portfolio{% endblock %}</title>

    <!-- Inclure Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\">

    <!-- Inclure le thème Bootswatch Lux -->
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/darkly/bootstrap.min.css\">

    <!-- Ajouter du style personnalisé -->
    <style>
        /* Votre style existant ici */
    </style>
</head>

<body>
    <div class=\"container mt-3\">
        <h1>E-Portfolio</h1>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('Accueil') }}\">E-Portfolio</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
                aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('cv') }}\">CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('Portfolio') }}\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('SavoirPlus') }}\">En savoir plus</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container mt-5\">
        {% block body %}{% endblock %}
    </div>

    <!-- Pied de page -->
    <footer class=\"bg-dark text-white text-center py-3\">
        <p>&copy; {% block copyright %}{{ \"now\"|date(\"Y\") }}{% endblock %} E-Portfolio. Tous droits réservés.</p>
        <p>Adresse: 15 Bis rue Fontenille| Email: axellx@outlook.fr| Téléphone: 0649615316</p>
    </footer>

    <!-- Inclure Bootstrap JS et Popper.js -->
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js\"
        integrity=\"sha384-eMNCO9jq2k4YJsJsXn1CqjSef6YbHvTbO9UnQbYEKr8RNE+mbYUAl66fwMlJe+mv\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW8+Q6RQ9vJ7MOhdMhL8KpNjp8TfJw31W\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
", "base.html.twig", "C:\\Users\\axell\\SAE14\\templates\\base.html.twig");
    }
}
