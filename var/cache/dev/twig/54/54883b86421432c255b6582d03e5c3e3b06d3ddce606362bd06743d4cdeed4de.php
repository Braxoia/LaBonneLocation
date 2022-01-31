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

/* contact/index.html.twig */
class __TwigTemplate_1773a6573e0d75daab0f04e70dbbc1fa87edff6c839019fe332389be983851ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Page de Contact";
        
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
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <h1 class=\"text-center mt-5\">Nous contacter</h1>
        </div>
        <div class=\"row d-flex justify-content-center\">
            <div class=\"p-5 contact-form col-5\">
                <div class=\"form-group\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 14, $this->source); })()), "full_name", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Jean Dubois"]]);
        echo "
                </div>
                <div class=\"form-group mt-2\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control", "placeholder" => "labonnelocation@example.com"]]);
        echo "
                </div>
                <div class=\"form-group mt-2\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 20, $this->source); })()), "phone", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control", "placeholder" => "+33 0 00 00 00 00"]]);
        echo "
                </div>
                <div class=\"form-group mt-2\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 23, $this->source); })()), "message", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Tapez ici votre message"]]);
        echo "
                </div>
                <div class=\"form-group mt-3\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary py-3 px-5\">
                </div>
                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  119 => 23,  113 => 20,  107 => 17,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page de Contact{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <h1 class=\"text-center mt-5\">Nous contacter</h1>
        </div>
        <div class=\"row d-flex justify-content-center\">
            <div class=\"p-5 contact-form col-5\">
                <div class=\"form-group\">
                    {{ form_start(contact_form) }}
                    {{ form_row(contact_form.full_name, {'attr': {'class': 'form-control', 'placeholder': 'Jean Dubois'}}) }}
                </div>
                <div class=\"form-group mt-2\">
                    {{ form_row(contact_form.email, {'attr' : {'class': 'form-control', 'placeholder': 'labonnelocation@example.com'}}) }}
                </div>
                <div class=\"form-group mt-2\">
                    {{ form_row(contact_form.phone, {'attr' : {'class': 'form-control', 'placeholder': '+33 0 00 00 00 00'}}) }}
                </div>
                <div class=\"form-group mt-2\">
                    {{ form_row(contact_form.message, {'attr': {'class': 'form-control', 'placeholder': 'Tapez ici votre message'}}) }}
                </div>
                <div class=\"form-group mt-3\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary py-3 px-5\">
                </div>
                {{ form_end(contact_form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "contact/index.html.twig", "/home/lngeth/Bureau/projet_web/templates/contact/index.html.twig");
    }
}
