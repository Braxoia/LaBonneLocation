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

/* dashboard/client/myRent.html.twig */
class __TwigTemplate_c49e7a76cc481fac526a4ec00a79cef7a0eaf8ce10d2221174463489a80599ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client/myRent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client/myRent.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/client/myRent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container mt-5\">
        <h1 class=\"text-center text-uppercase\">Liste de mes locations :</h1>
        ";
        // line 8
        if (array_key_exists("msgError", $context)) {
            // line 9
            echo "            <div class=\"text-danger text-center mt-5\">
                ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["msgError"]) || array_key_exists("msgError", $context) ? $context["msgError"] : (function () { throw new RuntimeError('Variable "msgError" does not exist.', 10, $this->source); })()), "html", null, true);
            echo " <br>
                <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_client");
            echo "\">Je veux valider mes locations</a> ou <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_my_rented_cars");
            echo "\">Retour à mes voitures</a>
            </div>
        ";
        } elseif (        // line 13
array_key_exists("msgSuccess", $context)) {
            // line 14
            echo "            <div class=\"text-success text-center mt-5\">
                ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["msgSuccess"]) || array_key_exists("msgSuccess", $context) ? $context["msgSuccess"] : (function () { throw new RuntimeError('Variable "msgSuccess" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "   <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_my_rented_cars");
            echo "\">Retour à mes voitures</a>
            </div>
        ";
        }
        // line 18
        echo "        ";
        if (array_key_exists("carsRented", $context)) {
            // line 19
            echo "            <div class=\"row mt-lg-4\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Type et modèle</th>
                        <th>Caractéristiques</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th>prix au jour</th>
                        <th>prix total</th>
                        <th>Cliquer + infos</th>
                        <th class=\"text-center\">Rendre la voiture</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["carsRented"]) || array_key_exists("carsRented", $context) ? $context["carsRented"] : (function () { throw new RuntimeError('Variable "carsRented" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["carRented"]) {
                // line 35
                echo "                        <tr ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["carRented"], "paid", [], "any", false, false, false, 35), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["carRented"], "returned", [], "any", false, false, false, 35), 1)))) {
                    echo " class=\"table-secondary\" ";
                }
                echo ">
                            <td class=\"\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 36), "type", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                            <td>
                                <div><span class=\"text-secondary\">Moteur : </span>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 38), "datasheet", [], "any", false, false, false, 38), "motor", [], "any", false, false, false, 38), "html", null, true);
                echo "</div>
                                <div><span class=\"text-secondary\">Boite de vitesse : </span>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 39), "datasheet", [], "any", false, false, false, 39), "vitesse", [], "any", false, false, false, 39), "html", null, true);
                echo "</div>
                                <div><span class=\"text-secondary\">Nombre de siège : </span>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 40), "datasheet", [], "any", false, false, false, 40), "nbSeat", [], "any", false, false, false, 40), "html", null, true);
                echo "</div>
                            </td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carRented"], "startDate", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carRented"], "endDate", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 44), "amount", [], "any", false, false, false, 44), "html", null, true);
                echo "€</td>
                            <td class=\"fw-bold\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carRented"], "price", [], "any", false, false, false, 45), "html", null, true);
                echo "€</td>
                            <td>
                                <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 48), "image", [], "any", false, false, false, 48))), "html", null, true);
                echo "\" width=\"100px\" class=\"img-fluid\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["carRented"], "idCar", [], "any", false, false, false, 48), "image", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
                                </a>
                            </td>
                            <td class=\"text-center\">
                                ";
                // line 52
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["carRented"], "paid", [], "any", false, false, false, 52), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["carRented"], "returned", [], "any", false, false, false, 52), 1)))) {
                    // line 53
                    echo "                                    <span class=\"text-uppercase\">Rendu</span>
                                ";
                } else {
                    // line 55
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_return_car", ["id" => twig_get_attribute($this->env, $this->source, $context["carRented"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-counterclockwise\" viewBox=\"0 0 16 16\">
                                            <path fill-rule=\"evenodd\" d=\"M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z\"/>
                                            <path d=\"M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z\"/>
                                        </svg>
                                    </a>
                                ";
                }
                // line 62
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carRented'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 69
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/client/myRent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 69,  225 => 65,  217 => 62,  206 => 55,  202 => 53,  200 => 52,  191 => 48,  187 => 47,  182 => 45,  178 => 44,  174 => 43,  170 => 42,  165 => 40,  161 => 39,  157 => 38,  152 => 36,  145 => 35,  141 => 34,  124 => 19,  121 => 18,  113 => 15,  110 => 14,  108 => 13,  101 => 11,  97 => 10,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('dashboard/index.html.twig') %}

{% block title %}Mes locations{% endblock %}

{% block content %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-uppercase\">Liste de mes locations :</h1>
        {% if msgError is defined %}
            <div class=\"text-danger text-center mt-5\">
                {{ msgError }} <br>
                <a href=\"{{ path('panier_client') }}\">Je veux valider mes locations</a> ou <a href=\"{{ path('show_my_rented_cars') }}\">Retour à mes voitures</a>
            </div>
        {% elseif msgSuccess is defined %}
            <div class=\"text-success text-center mt-5\">
                {{ msgSuccess }}   <a href=\"{{ path('show_my_rented_cars') }}\">Retour à mes voitures</a>
            </div>
        {% endif %}
        {% if carsRented is defined %}
            <div class=\"row mt-lg-4\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>Type et modèle</th>
                        <th>Caractéristiques</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th>prix au jour</th>
                        <th>prix total</th>
                        <th>Cliquer + infos</th>
                        <th class=\"text-center\">Rendre la voiture</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for carRented in carsRented %}
                        <tr {% if carRented.paid == 1 and carRented.returned == 1 %} class=\"table-secondary\" {% endif %}>
                            <td class=\"\">{{ carRented.idCar.type }}</td>
                            <td>
                                <div><span class=\"text-secondary\">Moteur : </span>{{ carRented.idCar.datasheet.motor }}</div>
                                <div><span class=\"text-secondary\">Boite de vitesse : </span>{{ carRented.idCar.datasheet.vitesse }}</div>
                                <div><span class=\"text-secondary\">Nombre de siège : </span>{{ carRented.idCar.datasheet.nbSeat }}</div>
                            </td>
                            <td>{{ carRented.startDate | date('d/m/Y') }}</td>
                            <td>{{ carRented.endDate | date('d/m/Y') }}</td>
                            <td>{{ carRented.idCar.amount }}€</td>
                            <td class=\"fw-bold\">{{ carRented.price }}€</td>
                            <td>
                                <a href=\"{{ path('car_show', {id : carRented.idCar.id }) }}\">
                                    <img src=\"{{ asset('assets/images/'~carRented.idCar.image) }}\" width=\"100px\" class=\"img-fluid\" alt=\"{{ carRented.idCar.image }}\">
                                </a>
                            </td>
                            <td class=\"text-center\">
                                {% if carRented.paid == 1 and carRented.returned == 1 %}
                                    <span class=\"text-uppercase\">Rendu</span>
                                {% else %}
                                    <a href=\"{{ path('dashboard_return_car', {id : carRented.id }) }}\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-counterclockwise\" viewBox=\"0 0 16 16\">
                                            <path fill-rule=\"evenodd\" d=\"M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z\"/>
                                            <path d=\"M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z\"/>
                                        </svg>
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
    </div>
{% endblock %}", "dashboard/client/myRent.html.twig", "/home/lngeth/Bureau/projet_web/templates/dashboard/client/myRent.html.twig");
    }
}
