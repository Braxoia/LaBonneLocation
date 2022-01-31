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

/* car/showCar.html.twig */
class __TwigTemplate_d9f015239441cd173eb223430542fbc61062061142e1966693d77bab723adfbe extends Template
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
            'rentForm' => [$this, 'block_rentForm'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/showCar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "car/showCar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "car/showCar.html.twig", 1);
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

        echo "Détails";
        
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
        echo "    <div style=\"margin-top: 80px\" class=\"mb-5\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-5\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10))), "html", null, true);
        echo "\" class=\"img-fluid rounded-1\" alt=\"image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-lg-5\">
                    <h1 class=\"text-center\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                    <div>
                        <h2 class=\"bg-secondary py-1 ps-4\" style=\"--bs-bg-opacity: .2;\">Description</h2>
                        <div class=\"py-2 container\">
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Energie :</div>
                                <div class=\"col justify-content-center text-uppercase\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 19, $this->source); })()), "datasheet", [], "any", false, false, false, 19), "motor", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Boite de vitesse :</div>
                                <div class=\"col justify-content-center text-uppercase\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 23, $this->source); })()), "datasheet", [], "any", false, false, false, 23), "vitesse", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Nombre de place :</div>
                                <div class=\"col justify-content-center\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 27, $this->source); })()), "datasheet", [], "any", false, false, false, 27), "nbSeat", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                            </div>
                            <br>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Prix journalier :</div>
                                <div class=\"col justify-content-center\"><strong>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 32, $this->source); })()), "amount", [], "any", false, false, false, 32), "html", null, true);
        echo "€</strong>/jour</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Quantité disponible :</div>
                                <div class=\"col justify-content-center\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 36, $this->source); })()), "quantity", [], "any", false, false, false, 36), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"bg-secondary p-3\" style=\"--bs-bg-opacity: .2;\">
                        <h3 class=\"ms-2 d-flex\">Vendeur professionnel</h3>
                        <div class=\"ps-4\">
                            <span><i>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["renter"]) || array_key_exists("renter", $context) ? $context["renter"] : (function () { throw new RuntimeError('Variable "renter" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "</i></span><br>
                            <span>Contact : ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["renter"]) || array_key_exists("renter", $context) ? $context["renter"] : (function () { throw new RuntimeError('Variable "renter" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 49
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49))) {
            // line 50
            echo "                ";
            $this->displayBlock('rentForm', $context, $blocks);
            // line 51
            echo "            ";
        } else {
            // line 52
            echo "                <div class=\"d-flex justify-content-center mt-4\">
                    Intéresser ? <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">connectez-vous</a>
                </div>
            ";
        }
        // line 56
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_rentForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rentForm"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rentForm"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "car/showCar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 50,  180 => 56,  174 => 53,  171 => 52,  168 => 51,  165 => 50,  163 => 49,  155 => 44,  151 => 43,  141 => 36,  134 => 32,  126 => 27,  119 => 23,  112 => 19,  103 => 13,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails{% endblock %}

{% block body %}
    <div style=\"margin-top: 80px\" class=\"mb-5\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-5\">
                    <img src=\"{{ asset('assets/images/' ~ (car.image)) }}\" class=\"img-fluid rounded-1\" alt=\"image de {{ car.image }}\">
                </div>
                <div class=\"col-lg-5\">
                    <h1 class=\"text-center\">{{ car.type }}</h1>
                    <div>
                        <h2 class=\"bg-secondary py-1 ps-4\" style=\"--bs-bg-opacity: .2;\">Description</h2>
                        <div class=\"py-2 container\">
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Energie :</div>
                                <div class=\"col justify-content-center text-uppercase\">{{ car.datasheet.motor }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Boite de vitesse :</div>
                                <div class=\"col justify-content-center text-uppercase\">{{ car.datasheet.vitesse }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Nombre de place :</div>
                                <div class=\"col justify-content-center\">{{ car.datasheet.nbSeat }}</div>
                            </div>
                            <br>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Prix journalier :</div>
                                <div class=\"col justify-content-center\"><strong>{{ car.amount }}€</strong>/jour</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col text-secondary\">Quantité disponible :</div>
                                <div class=\"col justify-content-center\">{{ car.quantity }}</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"bg-secondary p-3\" style=\"--bs-bg-opacity: .2;\">
                        <h3 class=\"ms-2 d-flex\">Vendeur professionnel</h3>
                        <div class=\"ps-4\">
                            <span><i>{{ renter.name }}</i></span><br>
                            <span>Contact : {{ renter.email }}</span>
                        </div>
                    </div>
                </div>
            </div>
            {% if app.user is not empty %}
                {% block rentForm %}{% endblock %}
            {% else %}
                <div class=\"d-flex justify-content-center mt-4\">
                    Intéresser ? <a href=\"{{ path('security_login') }}\">connectez-vous</a>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "car/showCar.html.twig", "/home/lngeth/Bureau/projet_web/templates/car/showCar.html.twig");
    }
}
