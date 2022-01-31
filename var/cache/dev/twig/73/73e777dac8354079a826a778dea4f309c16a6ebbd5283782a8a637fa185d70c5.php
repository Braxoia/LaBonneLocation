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

/* dashboard/renter/showBill.html.twig */
class __TwigTemplate_caf5b923b00ed04607f980aa1258cd9bc2c0ef3d746c05427eb2bdfaceae09f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/showBill.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/showBill.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/renter/showBill.html.twig", 1);
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

        echo "Factures";
        
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
        echo "    <h1 class=\"mt-lg-5 text-center\">Facturation</h1>
    ";
        // line 7
        if ( !twig_test_empty((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "    <div class=\"mt-5\">
        <div class=\"d-flex justify-content-center\">
            <nav aria-label=\"\">
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\">Par mois :</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_month_bill");
            echo "\">Pour le mois</a></li>
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\">Par client :</a></li>
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 16
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_bill", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "idUser", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "idUser", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </ul>
            </nav>
        </div>
    </div>
    ";
        } else {
            // line 23
            echo "        <div class=\"my-5\">
            Vous n'avez aucun client.
        </div>
    ";
        }
        // line 27
        echo "    ";
        if (array_key_exists("bills", $context)) {
            // line 28
            echo "    <div class=\"d-flex justify-content-center mt-3\">
        <div class=\"w-75\">
            <div class=\"border-dark border rounded-1\" style=\"padding: 5%;\">
                <div class=\"d-flex justify-content-center my-3\">
                    <span class=\"text-uppercase\">La bonne location</span>
                </div>
                <div class=\"container my-5\">
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-lg-4\">
                            <div class=\"fw-bold\">Vendeur :</div>
                            <div class=\"text-uppercase\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</div>
                            <div class=\"mt-2\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</div>
                        </div>
                        ";
            // line 41
            if (array_key_exists("clientFacture", $context)) {
                // line 42
                echo "                            <div class=\"col-lg-4\">
                                <div class=\"fw-bold\">Facturé à :</div>
                                <div class=\"text-uppercase\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientFacture"]) || array_key_exists("clientFacture", $context) ? $context["clientFacture"] : (function () { throw new RuntimeError('Variable "clientFacture" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</div>
                                <div class=\"mt-2\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientFacture"]) || array_key_exists("clientFacture", $context) ? $context["clientFacture"] : (function () { throw new RuntimeError('Variable "clientFacture" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), "html", null, true);
                echo "</div>
                            </div>
                        ";
            }
            // line 48
            echo "                    </div>
                    <div class=\"row mt-5\">
                        <div class=\"fw-bold\">Objet : Facture location de véhicule</div>
                    </div>
                    <div class=\"row mt-4\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th>n°</th>
                                <th>Désignation</th>
                                ";
            // line 58
            if ( !array_key_exists("clientFacture", $context)) {
                // line 59
                echo "                                    <th>Loué par</th>
                                ";
            }
            // line 61
            echo "                                <th>Nombre de jour loué</th>
                                <th>Prix au jour</th>
                                <th>Prix total</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 67
            $context["total"] = 0;
            // line 68
            echo "                            ";
            $context["id"] = 0;
            // line 69
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bills"]) || array_key_exists("bills", $context) ? $context["bills"] : (function () { throw new RuntimeError('Variable "bills" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bill"]) {
                // line 70
                echo "                                <tr>
                                    ";
                // line 71
                $context["id"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 71, $this->source); })()) + 1);
                // line 72
                echo "                                    <td>";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 72, $this->source); })()), "html", null, true);
                echo "</td>
                                    <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bill"], "idCar", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bill"], "idCar", [], "any", false, false, false, 73), "type", [], "any", false, false, false, 73), "html", null, true);
                echo "</a></td>
                                    ";
                // line 74
                if ( !array_key_exists("clientFacture", $context)) {
                    // line 75
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bill"], "idUser", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
                    echo "</td>
                                    ";
                }
                // line 77
                echo "                                    ";
                $context["difference"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "endDate", [], "any", false, false, false, 77)), "diff", [0 => twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "startDate", [], "any", false, false, false, 77))], "method", false, false, false, 77);
                // line 78
                echo "                                    <td>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 78, $this->source); })()), "days", [], "any", false, false, false, 78) + 2), "html", null, true);
                echo "</td>
                                    <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bill"], "idCar", [], "any", false, false, false, 79), "amount", [], "any", false, false, false, 79), "html", null, true);
                echo "€</td>
                                    <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "price", [], "any", false, false, false, 80), "html", null, true);
                echo "€</td>
                                    ";
                // line 81
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 81, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["bill"], "price", [], "any", false, false, false, 81));
                // line 82
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <td ";
            // line 87
            if (array_key_exists("clientFacture", $context)) {
                echo "colspan=\"4\" ";
            } else {
                echo " colspan=\"5\" ";
            }
            echo " class=\"text-end\">Total</td>
                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "€</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"row mt-5\">
                        <div>Fait à Paris le ";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo "</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/renter/showBill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 94,  271 => 88,  263 => 87,  258 => 84,  251 => 82,  249 => 81,  245 => 80,  241 => 79,  236 => 78,  233 => 77,  227 => 75,  225 => 74,  219 => 73,  214 => 72,  212 => 71,  209 => 70,  204 => 69,  201 => 68,  199 => 67,  191 => 61,  187 => 59,  185 => 58,  173 => 48,  167 => 45,  163 => 44,  159 => 42,  157 => 41,  152 => 39,  148 => 38,  136 => 28,  133 => 27,  127 => 23,  120 => 18,  109 => 16,  105 => 15,  100 => 13,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('dashboard/index.html.twig') %}

{% block title %}Factures{% endblock %}

{% block content %}
    <h1 class=\"mt-lg-5 text-center\">Facturation</h1>
    {% if clients is not empty %}
    <div class=\"mt-5\">
        <div class=\"d-flex justify-content-center\">
            <nav aria-label=\"\">
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\">Par mois :</a></li>
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('show_month_bill') }}\">Pour le mois</a></li>
                    <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\">Par client :</a></li>
                    {% for client in clients %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('show_bill', {id:client.idUser.id}) }}\">{{ client.idUser.name }}</a></li>
                    {% endfor %}
                </ul>
            </nav>
        </div>
    </div>
    {% else %}
        <div class=\"my-5\">
            Vous n'avez aucun client.
        </div>
    {% endif %}
    {% if bills is defined %}
    <div class=\"d-flex justify-content-center mt-3\">
        <div class=\"w-75\">
            <div class=\"border-dark border rounded-1\" style=\"padding: 5%;\">
                <div class=\"d-flex justify-content-center my-3\">
                    <span class=\"text-uppercase\">La bonne location</span>
                </div>
                <div class=\"container my-5\">
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-lg-4\">
                            <div class=\"fw-bold\">Vendeur :</div>
                            <div class=\"text-uppercase\">{{ owner.name }}</div>
                            <div class=\"mt-2\">{{ owner.email }}</div>
                        </div>
                        {% if clientFacture is defined %}
                            <div class=\"col-lg-4\">
                                <div class=\"fw-bold\">Facturé à :</div>
                                <div class=\"text-uppercase\">{{ clientFacture.name }}</div>
                                <div class=\"mt-2\">{{ clientFacture.email }}</div>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"row mt-5\">
                        <div class=\"fw-bold\">Objet : Facture location de véhicule</div>
                    </div>
                    <div class=\"row mt-4\">
                        <table class=\"table table-bordered\">
                            <thead>
                            <tr>
                                <th>n°</th>
                                <th>Désignation</th>
                                {% if clientFacture is not defined %}
                                    <th>Loué par</th>
                                {% endif %}
                                <th>Nombre de jour loué</th>
                                <th>Prix au jour</th>
                                <th>Prix total</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set total = 0 %}
                            {% set id = 0 %}
                            {% for bill in bills %}
                                <tr>
                                    {% set id = id + 1 %}
                                    <td>{{ id }}</td>
                                    <td><a href=\"{{ path('car_show', {id : bill.idCar.id }) }}\">{{ bill.idCar.type }}</a></td>
                                    {% if clientFacture is not defined %}
                                        <td>{{ bill.idUser.name }}</td>
                                    {% endif %}
                                    {% set difference = date(bill.endDate).diff(date(bill.startDate)) %}
                                    <td>{{ difference.days+2 }}</td>
                                    <td>{{ bill.idCar.amount }}€</td>
                                    <td>{{ bill.price }}€</td>
                                    {% set total = total + bill.price %}
                                </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td {% if clientFacture is defined %}colspan=\"4\" {% else %} colspan=\"5\" {% endif%} class=\"text-end\">Total</td>
                                    <td>{{ total }}€</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"row mt-5\">
                        <div>Fait à Paris le {{ \"now\"|date(\"d/m/Y\") }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
{% endblock %}", "dashboard/renter/showBill.html.twig", "/home/lngeth/Bureau/projet_web/templates/dashboard/renter/showBill.html.twig");
    }
}
