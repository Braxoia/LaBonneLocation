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

/* dashboard/client/index.html.twig */
class __TwigTemplate_5425bf39dd9da18d7385b2ea3f1eb17d8ad9a52209e77e1e384f9bbad3185ca9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/client/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div>
        <div class=\"container\">
            <div class=\"mt-3\">
                <h1>Bonjour ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
                <p>Mon bilan personnel :</p>
            </div>
            <div class=\"mt-4\">
                <div class=\"row my-4\">
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_my_rented_cars");
        echo "\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Nombre de voiture louées</h6>
                                        <h2 class=\"text-white text-bold\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nbCarsRented"]) || array_key_exists("nbCarsRented", $context) ? $context["nbCarsRented"] : (function () { throw new RuntimeError('Variable "nbCarsRented" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures retournées</h6>
                                    <h2 class=\"text-white text-bold\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["nbCarsRentedReturned"]) || array_key_exists("nbCarsRentedReturned", $context) ? $context["nbCarsRentedReturned"] : (function () { throw new RuntimeError('Variable "nbCarsRentedReturned" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-secondary\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures disponibles</h6>
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
                                    <h6 class=\"text-white \">Montant total des locations</h6>
                                    <h2 class=\"text-white text-bold\">";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["priceOfAllRent"]) || array_key_exists("priceOfAllRent", $context) ? $context["priceOfAllRent"] : (function () { throw new RuntimeError('Variable "priceOfAllRent" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "€</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de locations impayées</h6>
                                    <h2 class=\"text-white text-bold\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["unpaidBills"]) || array_key_exists("unpaidBills", $context) ? $context["unpaidBills"] : (function () { throw new RuntimeError('Variable "unpaidBills" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Montant des locations du mois</h6>
                                    <h2 class=\"text-white text-bold\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["priceOfThisMonthRent"]) || array_key_exists("priceOfThisMonthRent", $context) ? $context["priceOfThisMonthRent"] : (function () { throw new RuntimeError('Variable "priceOfThisMonthRent" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "€</h2>
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
        return "dashboard/client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 71,  142 => 61,  129 => 51,  104 => 29,  90 => 18,  84 => 15,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('dashboard/index.html.twig') %}

{% block content %}
    <div>
        <div class=\"container\">
            <div class=\"mt-3\">
                <h1>Bonjour {{ app.user.name }}</h1>
                <p>Mon bilan personnel :</p>
            </div>
            <div class=\"mt-4\">
                <div class=\"row my-4\">
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <a href=\"{{ path('show_my_rented_cars') }}\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Nombre de voiture louées</h6>
                                        <h2 class=\"text-white text-bold\">{{ nbCarsRented }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures retournées</h6>
                                    <h2 class=\"text-white text-bold\">{{ nbCarsRentedReturned }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-secondary\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de voitures disponibles</h6>
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
                                    <h6 class=\"text-white \">Montant total des locations</h6>
                                    <h2 class=\"text-white text-bold\">{{ priceOfAllRent }}€</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Nombre de locations impayées</h6>
                                    <h2 class=\"text-white text-bold\">{{ unpaidBills }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-lg-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Montant des locations du mois</h6>
                                    <h2 class=\"text-white text-bold\">{{ priceOfThisMonthRent }}€</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "dashboard/client/index.html.twig", "/home/lngeth/Bureau/projet_web/templates/dashboard/client/index.html.twig");
    }
}
