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

/* admin/index.html.twig */
class __TwigTemplate_b3e261c2f082bfa68f472fd120dac6264f0d01246f2f61980dfc091bc6f24155 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard Administrateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <div class=\"container mt-5\">
            <div class=\"mt-3\">
                <h1>Bonjour ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
                <p>Bilan de votre site :</p>
            </div>

            <div class=\"mt-4\">
                <div class=\"row my-4\">
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <a href=\"#\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Nombre de voiture louées au total</h6>
                                        <h2 class=\"text-white text-bold\"></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures retournées au total</h6>
                                    <h2 class=\"text-white text-bold\"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures disponibles au total</h6>
                                    <h2 class=\"text-white text-bold\">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row my-4\">
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Montant total des locations au total</h6>
                                    <h2 class=\"text-white text-bold\">€</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Dashboard Administrateur{% endblock %}


{% block body %}
    <div>
        <div class=\"container mt-5\">
            <div class=\"mt-3\">
                <h1>Bonjour {{ app.user.name }}</h1>
                <p>Bilan de votre site :</p>
            </div>

            <div class=\"mt-4\">
                <div class=\"row my-4\">
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <a href=\"#\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Nombre de voiture louées au total</h6>
                                        <h2 class=\"text-white text-bold\"></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures retournées au total</h6>
                                    <h2 class=\"text-white text-bold\"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures disponibles au total</h6>
                                    <h2 class=\"text-white text-bold\">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row my-4\">
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Montant total des locations au total</h6>
                                    <h2 class=\"text-white text-bold\">€</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/index.html.twig", "/home/lngeth/Bureau/projet_web/templates/admin/index.html.twig");
    }
}
