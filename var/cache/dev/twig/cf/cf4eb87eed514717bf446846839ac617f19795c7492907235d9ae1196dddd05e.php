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

/* dashboard/renter/showOwnedCars.html.twig */
class __TwigTemplate_864b455d109058f46288819416b95559840231ee7d83936f8b033682198df258 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/showOwnedCars.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/showOwnedCars.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/renter/showOwnedCars.html.twig", 1);
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

        echo "Mes locations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <h1 class=\"text-uppercase text-center mt-5\">
        Mes voitures :
    </h1>
        <div class=\"container mt-lg-3\">
            <div class=\"row\">
                <div class=\"mt-3\">
                    <div class=\"d-flex justify-content-center\">
                        <nav aria-label=\"\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\"><a class=\"page-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_owned_cars");
        echo "\">Toutes mes voitures</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRentedCars");
        echo "\">Uniquement les louées</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            ";
        // line 20
        if (array_key_exists("errorMsg", $context)) {
            // line 21
            echo "                <div class=\"mt-3 text-center text-danger text-uppercase fw-bold\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["errorMsg"]) || array_key_exists("errorMsg", $context) ? $context["errorMsg"] : (function () { throw new RuntimeError('Variable "errorMsg" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "
                </div>
            ";
        } elseif (        // line 24
array_key_exists("successMsg", $context)) {
            // line 25
            echo "                <div class=\"mt-3 text-center text-success text-uppercase fw-bold\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["successMsg"]) || array_key_exists("successMsg", $context) ? $context["successMsg"] : (function () { throw new RuntimeError('Variable "successMsg" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 29
        echo "            ";
        if (array_key_exists("ownedCars", $context)) {
            // line 30
            echo "                ";
            if ( !twig_test_empty((isset($context["ownedCars"]) || array_key_exists("ownedCars", $context) ? $context["ownedCars"] : (function () { throw new RuntimeError('Variable "ownedCars" does not exist.', 30, $this->source); })()))) {
                // line 31
                echo "                    <div class=\"row mt-lg-4\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>Type et modèle</th>
                                <th>Caractéristiques</th>
                                <th>prix</th>
                                <th>Statut</th>
                                <th>Image</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ownedCars"]) || array_key_exists("ownedCars", $context) ? $context["ownedCars"] : (function () { throw new RuntimeError('Variable "ownedCars" does not exist.', 44, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["ownedCar"]) {
                    // line 45
                    echo "                                <tr>
                                    <td class=\"\">";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ownedCar"], "type", [], "any", false, false, false, 46), "html", null, true);
                    echo "</td>
                                    <td>
                                        <div><span class=\"text-secondary\">Moteur : </span>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ownedCar"], "datasheet", [], "any", false, false, false, 48), "motor", [], "any", false, false, false, 48), "html", null, true);
                    echo "</div>
                                        <div><span class=\"text-secondary\">Boite de vitesse : </span>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ownedCar"], "datasheet", [], "any", false, false, false, 49), "vitesse", [], "any", false, false, false, 49), "html", null, true);
                    echo "</div>
                                        <div><span class=\"text-secondary\">Nombre de siège : </span>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ownedCar"], "datasheet", [], "any", false, false, false, 50), "nbSeat", [], "any", false, false, false, 50), "html", null, true);
                    echo "</div>
                                    </td>
                                    <td>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ownedCar"], "amount", [], "any", false, false, false, 52), "html", null, true);
                    echo "€</td>
                                    <td>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ownedCar"], "rent", [], "any", false, false, false, 53), "html", null, true);
                    echo "</td>
                                    <td>
                                        <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ownedCar"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\">
                                            <img src=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["ownedCar"], "image", [], "any", false, false, false, 56))), "html", null, true);
                    echo "\" width=\"100px\" class=\"img-fluid\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ownedCar"], "image", [], "any", false, false, false, 56), "html", null, true);
                    echo "\">
                                        </a>
                                    </td>
                                    <td class=\"text-center\"><a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_car", ["idCar" => twig_get_attribute($this->env, $this->source, $context["ownedCar"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                    echo "\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                            </svg></a></td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ownedCar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                            </tbody>
                        </table>
                    </div>
                ";
            } else {
                // line 70
                echo "                    <div class=\"row mt-5\">
                        Vous n'avez aucune voiture.
                    </div>
                ";
            }
            // line 74
            echo "            ";
        } elseif (array_key_exists("rentedCars", $context)) {
            // line 75
            echo "                ";
            if ( !twig_test_empty((isset($context["rentedCars"]) || array_key_exists("rentedCars", $context) ? $context["rentedCars"] : (function () { throw new RuntimeError('Variable "rentedCars" does not exist.', 75, $this->source); })()))) {
                // line 76
                echo "                    <div class=\"row mt-lg-4\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>Type et modèle</th>
                                <th>Louée par</th>
                                <th>Début de location</th>
                                <th>Fin de location</th>
                                <th>Prix au jour</th>
                                <th>Prix total</th>
                                <th class=\"text-center\">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rentedCars"]) || array_key_exists("rentedCars", $context) ? $context["rentedCars"] : (function () { throw new RuntimeError('Variable "rentedCars" does not exist.', 90, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["rentedCar"]) {
                    // line 91
                    echo "                                <tr>
                                    <td class=\"\">";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "idCar", [], "any", false, false, false, 92), "type", [], "any", false, false, false, 92), "html", null, true);
                    echo "</td>
                                    <td class=\"fw-bold\">";
                    // line 93
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "idUser", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 94
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "startDate", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 95
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "endDate", [], "any", false, false, false, 95), "d/m/Y"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "idCar", [], "any", false, false, false, 96), "amount", [], "any", false, false, false, 96), "html", null, true);
                    echo "€</td>
                                    <td>";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "price", [], "any", false, false, false, 97), "html", null, true);
                    echo "€</td>
                                    <td class=\"text-center\">
                                        <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "idCar", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99)]), "html", null, true);
                    echo "\">
                                            <img src=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "idCar", [], "any", false, false, false, 100), "image", [], "any", false, false, false, 100))), "html", null, true);
                    echo "\" width=\"100px\" class=\"img-fluid\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rentedCar"], "idCar", [], "any", false, false, false, 100), "image", [], "any", false, false, false, 100), "html", null, true);
                    echo "\">
                                        </a>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rentedCar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                            </tbody>
                        </table>
                    </div>
                ";
            } else {
                // line 109
                echo "                    <div class=\"row mt-5\">
                        Vous n'avez aucune voiture louée.
                    </div>
                ";
            }
            // line 113
            echo "            ";
        }
        // line 114
        echo "        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/renter/showOwnedCars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 114,  308 => 113,  302 => 109,  296 => 105,  283 => 100,  279 => 99,  274 => 97,  270 => 96,  266 => 95,  262 => 94,  258 => 93,  254 => 92,  251 => 91,  247 => 90,  231 => 76,  228 => 75,  225 => 74,  219 => 70,  213 => 66,  200 => 59,  192 => 56,  188 => 55,  183 => 53,  179 => 52,  174 => 50,  170 => 49,  166 => 48,  161 => 46,  158 => 45,  154 => 44,  139 => 31,  136 => 30,  133 => 29,  127 => 26,  124 => 25,  122 => 24,  117 => 22,  114 => 21,  112 => 20,  103 => 14,  99 => 13,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('dashboard/index.html.twig') %}
{% block title %}Mes locations{% endblock %}
{% block content %}
    <h1 class=\"text-uppercase text-center mt-5\">
        Mes voitures :
    </h1>
        <div class=\"container mt-lg-3\">
            <div class=\"row\">
                <div class=\"mt-3\">
                    <div class=\"d-flex justify-content-center\">
                        <nav aria-label=\"\">
                            <ul class=\"pagination\">
                                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('show_owned_cars') }}\">Toutes mes voitures</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('showRentedCars') }}\">Uniquement les louées</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            {% if errorMsg is defined %}
                <div class=\"mt-3 text-center text-danger text-uppercase fw-bold\">
                    {{ errorMsg }}
                </div>
            {% elseif successMsg is defined %}
                <div class=\"mt-3 text-center text-success text-uppercase fw-bold\">
                    {{ successMsg }}
                </div>
            {% endif %}
            {% if ownedCars is defined %}
                {% if ownedCars is not empty %}
                    <div class=\"row mt-lg-4\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>Type et modèle</th>
                                <th>Caractéristiques</th>
                                <th>prix</th>
                                <th>Statut</th>
                                <th>Image</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for ownedCar in ownedCars %}
                                <tr>
                                    <td class=\"\">{{ ownedCar.type }}</td>
                                    <td>
                                        <div><span class=\"text-secondary\">Moteur : </span>{{ ownedCar.datasheet.motor }}</div>
                                        <div><span class=\"text-secondary\">Boite de vitesse : </span>{{ ownedCar.datasheet.vitesse }}</div>
                                        <div><span class=\"text-secondary\">Nombre de siège : </span>{{ ownedCar.datasheet.nbSeat }}</div>
                                    </td>
                                    <td>{{ ownedCar.amount }}€</td>
                                    <td>{{ ownedCar.rent }}</td>
                                    <td>
                                        <a href=\"{{ path('car_show', {id : ownedCar.id}) }}\">
                                            <img src=\"{{ asset('assets/images/'~ownedCar.image) }}\" width=\"100px\" class=\"img-fluid\" alt=\"{{ ownedCar.image }}\">
                                        </a>
                                    </td>
                                    <td class=\"text-center\"><a href=\"{{ path('delete_car', {idCar: ownedCar.id}) }}\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
                                                <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
                                            </svg></a></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <div class=\"row mt-5\">
                        Vous n'avez aucune voiture.
                    </div>
                {% endif %}
            {% elseif rentedCars is defined %}
                {% if rentedCars is not empty %}
                    <div class=\"row mt-lg-4\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>Type et modèle</th>
                                <th>Louée par</th>
                                <th>Début de location</th>
                                <th>Fin de location</th>
                                <th>Prix au jour</th>
                                <th>Prix total</th>
                                <th class=\"text-center\">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for rentedCar in rentedCars %}
                                <tr>
                                    <td class=\"\">{{ rentedCar.idCar.type }}</td>
                                    <td class=\"fw-bold\">{{ rentedCar.idUser.name }}</td>
                                    <td>{{ rentedCar.startDate | date('d/m/Y') }}</td>
                                    <td>{{ rentedCar.endDate | date('d/m/Y') }}</td>
                                    <td>{{ rentedCar.idCar.amount }}€</td>
                                    <td>{{ rentedCar.price }}€</td>
                                    <td class=\"text-center\">
                                        <a href=\"{{ path('car_show', {id : rentedCar.idCar.id}) }}\">
                                            <img src=\"{{ asset('assets/images/'~rentedCar.idCar.image) }}\" width=\"100px\" class=\"img-fluid\" alt=\"{{ rentedCar.idCar.image }}\">
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <div class=\"row mt-5\">
                        Vous n'avez aucune voiture louée.
                    </div>
                {% endif %}
            {% endif %}
        </div>
{% endblock %}
", "dashboard/renter/showOwnedCars.html.twig", "/home/lngeth/Bureau/projet_web/templates/dashboard/renter/showOwnedCars.html.twig");
    }
}
