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

/* dashboard/renter/sidebarRenter.html.twig */
class __TwigTemplate_0578061c821ea7c63978a50bea6d16a560d8c0dae1427ece64bc8219ad2692e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/sidebarRenter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/renter/sidebarRenter.html.twig"));

        // line 1
        echo "<div class=\"navbar-brand\">
    Loueur
</div>
<ul class=\"navbar-nav\">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_owned_cars");
        echo "\">Mes voitures</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCar");
        echo "\">Ajouter un véhicule</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_all_client");
        echo "\">Factures</a>
    </li>
</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/renter/sidebarRenter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  62 => 12,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-brand\">
    Loueur
</div>
<ul class=\"navbar-nav\">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('dashboard') }}\">Dashboard</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('show_owned_cars') }}\">Mes voitures</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('addCar') }}\">Ajouter un véhicule</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('show_all_client') }}\">Factures</a>
    </li>
</ul>", "dashboard/renter/sidebarRenter.html.twig", "/home/lngeth/Bureau/projet_web/templates/dashboard/renter/sidebarRenter.html.twig");
    }
}
