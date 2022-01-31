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

/* home/index.html.twig */
class __TwigTemplate_04dea29af0760ecc2b16da738101b23607468f354af1c6b14d6f4d354545a603 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <div class=\"d-flex justify-content-center\"
         style=\"
                 background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/deluxe.jpg"), "html", null, true);
        echo ");
                 background-size: cover;
                 background-repeat: no-repeat;
                 background-position: 0 100%;
                 width: 100%;
                 height: 700px;\">
        <h1 class=\"d-flex align-items-end text-white text-uppercase pb-lg-4\" style=\"margin-top: 150px;\">Louer une voiture n'a jamais été aussi simple</h1>
    </div>
    ";
        // line 16
        if ( !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "        <div class=\"text-danger\" style=\"font-size: 36px; text-align: center;\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "</div>
    ";
        }
        // line 19
        echo "    <div class=\"container mb-5 mt-5\">
        <h2 class=\"text-uppercase fw-bold mb-5\">Les voitures du moment</h2>
        <div class=\"row\">
            <div class=\"d-flex justify-content-around\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 24
            echo "                    <div class=\"card border-0\">
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["car"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" class=\"card-img-top w-75 img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "image", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"card-body p-0\">
                            <p class=\"card-text\">
                                <div class=\"fw-bold fs-2 text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "type", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-secondary\"><i>à partir de </i><strong>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "amount", [], "any", false, false, false, 31), "html", null, true);
            echo "</strong>€/jour</div>
                            </p>
                            <div class=\"d-flex justify-content-center\">
                                ";
            // line 34
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "role", [], "any", false, false, false, 34), "client")))) {
                // line 35
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("billing_rent", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"text-decoration-none\">Découvrir l'offre ></a>
                                ";
            } else {
                // line 37
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("car_show", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"text-decoration-none\">Découvrir l'offre ></a>
                                ";
            }
            // line 39
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
        <div class=\"d-flex justify-content-center mt-5\">
            <a class=\"btn btn-primary rounded-0 px-5\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_all_cars");
        echo "\">Voir toutes les offres</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  167 => 43,  158 => 39,  152 => 37,  146 => 35,  144 => 34,  138 => 31,  134 => 30,  125 => 26,  121 => 24,  117 => 23,  111 => 19,  105 => 17,  103 => 16,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-center\"
         style=\"
                 background-image: url({{ asset('assets/images/deluxe.jpg') }});
                 background-size: cover;
                 background-repeat: no-repeat;
                 background-position: 0 100%;
                 width: 100%;
                 height: 700px;\">
        <h1 class=\"d-flex align-items-end text-white text-uppercase pb-lg-4\" style=\"margin-top: 150px;\">Louer une voiture n'a jamais été aussi simple</h1>
    </div>
    {% if error is not null  %}
        <div class=\"text-danger\" style=\"font-size: 36px; text-align: center;\">{{ error }}</div>
    {% endif %}
    <div class=\"container mb-5 mt-5\">
        <h2 class=\"text-uppercase fw-bold mb-5\">Les voitures du moment</h2>
        <div class=\"row\">
            <div class=\"d-flex justify-content-around\">
                {% for car in cars %}
                    <div class=\"card border-0\">
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"{{ asset('assets/images/'~car.image) }}\" class=\"card-img-top w-75 img-fluid\" alt=\"{{ car.image }}\">
                        </div>
                        <div class=\"card-body p-0\">
                            <p class=\"card-text\">
                                <div class=\"fw-bold fs-2 text-center\">{{ car.type }}</div>
                                <div class=\"text-center text-secondary\"><i>à partir de </i><strong>{{ car.amount }}</strong>€/jour</div>
                            </p>
                            <div class=\"d-flex justify-content-center\">
                                {% if app.user is not empty and app.user.role == 'client' %}
                                    <a href=\"{{ path('billing_rent', {id: car.id}) }}\" class=\"text-decoration-none\">Découvrir l'offre ></a>
                                {% else %}
                                    <a href=\"{{ path('car_show', {id: car.id}) }}\" class=\"text-decoration-none\">Découvrir l'offre ></a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"d-flex justify-content-center mt-5\">
            <a class=\"btn btn-primary rounded-0 px-5\" href=\"{{ path('show_all_cars') }}\">Voir toutes les offres</a>
        </div>
    </div>
{% endblock %}
", "home/index.html.twig", "/home/lngeth/Bureau/projet_web/templates/home/index.html.twig");
    }
}
