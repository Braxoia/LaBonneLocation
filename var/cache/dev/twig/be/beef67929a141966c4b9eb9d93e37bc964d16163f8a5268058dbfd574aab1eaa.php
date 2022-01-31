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

/* dashboard/renter/index.html.twig */
class __TwigTemplate_1f60064a170f97621a7856efc074040c5b6fddfd035fb91dd193d174faffcc5c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/renter/index.html.twig", 1);
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
        <div class=\"container mt-5\">
            <div class=\"mt-2\">
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRentedCars");
        echo "\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Nombre de voitures louées</h6>
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
                                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_owned_cars");
        echo "\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Toutes mes voitures</h6>
                                        <h2 class=\"text-white text-bold\">";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["nbCars"]) || array_key_exists("nbCars", $context) ? $context["nbCars"] : (function () { throw new RuntimeError('Variable "nbCars" does not exist.', 30, $this->source); })()), "html", null, true);
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
                                    <h6 class=\"text-white \">Mes voitures disponibles</h6>
                                    <h2 class=\"text-white text-bold\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["carsAvailable"]) || array_key_exists("carsAvailable", $context) ? $context["carsAvailable"] : (function () { throw new RuntimeError('Variable "carsAvailable" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</h2>
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
                                    <h6 class=\"text-white \">Montant totale des locations</h6>
                                    <h2 class=\"text-white text-bold\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["priceOfAllRent"]) || array_key_exists("priceOfAllRent", $context) ? $context["priceOfAllRent"] : (function () { throw new RuntimeError('Variable "priceOfAllRent" does not exist.', 53, $this->source); })()), "html", null, true);
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
        // line 63
        echo twig_escape_filter($this->env, (isset($context["unpaidBills"]) || array_key_exists("unpaidBills", $context) ? $context["unpaidBills"] : (function () { throw new RuntimeError('Variable "unpaidBills" does not exist.', 63, $this->source); })()), "html", null, true);
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
        // line 73
        echo twig_escape_filter($this->env, (isset($context["priceOfThisMonthRent"]) || array_key_exists("priceOfThisMonthRent", $context) ? $context["priceOfThisMonthRent"] : (function () { throw new RuntimeError('Variable "priceOfThisMonthRent" does not exist.', 73, $this->source); })()), "html", null, true);
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
        return "dashboard/renter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 73,  150 => 63,  137 => 53,  122 => 41,  108 => 30,  102 => 27,  90 => 18,  84 => 15,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('dashboard/index.html.twig') %}

{% block content %}
    <div>
        <div class=\"container mt-5\">
            <div class=\"mt-2\">
                <h1>Bonjour {{ app.user.name }}</h1>
                <p>Mon bilan personnel :</p>
            </div>
            <div class=\"mt-4\">
                <div class=\"row my-4\">
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <a href=\"{{ path('showRentedCars') }}\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Nombre de voitures louées</h6>
                                        <h2 class=\"text-white text-bold\">{{ nbCarsRented }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <a href=\"{{ path('show_owned_cars') }}\" class=\"text-decoration-none\">
                                    <div class=\"mx-auto\">
                                        <h6 class=\"text-white \">Toutes mes voitures</h6>
                                        <h2 class=\"text-white text-bold\">{{ nbCars }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card bg-dark\" style=\"max-width: 18rem;\">
                            <div class=\"card-body text-center\">
                                <div class=\"mx-auto\">
                                    <h6 class=\"text-white \">Mes voitures disponibles</h6>
                                    <h2 class=\"text-white text-bold\">{{ carsAvailable }}</h2>
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
                                    <h6 class=\"text-white \">Montant totale des locations</h6>
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
{% endblock %}", "dashboard/renter/index.html.twig", "/home/lngeth/Bureau/projet_web/templates/dashboard/renter/index.html.twig");
    }
}
