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

/* footer.html.twig */
class __TwigTemplate_ee7ee0fb472a44cd0ce9217105226a268ed566bddc5603d23d3b4d59fe66bad4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"bg-dark text-center text-white\">
    <div class=\"container p-4\">
        <section class=\"mb-4\">
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://github.com/Braxoia/LaBonneLocation\" role=\"button\"
            style=\"border: none;\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/github_icon.png"), "html", null, true);
        echo "\" alt=\"icon github\" width=\"50\"></a>
        </section>
        <section class=\"mb-4\">
            <p>
                Site web réalisé dans le cadre du projet PWEB.
            </p>
        </section>
        <section class=\"\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Accès rapide</h5>
                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"text-white\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" class=\"text-white\">Connexion</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
        echo "\" class=\"text-white\">S'inscrire</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Moyens de paiement</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            Paypal
                        </li>
                        <li>
                            Carte Bleue (Visa, Electron, ...)
                        </li>
                        <li>
                            Chèque à partir de 200€
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Nous contacter</h5>
                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"#!\" class=\"text-white\">Nous écrire</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        Réalisé par :
        <a class=\"text-white\" target=\"_blank\" href=\"https://github.com/Braxoia\">AHBIB Ibrahime et Laurent Ngeht</a>
    </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  71 => 21,  65 => 18,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-dark text-center text-white\">
    <div class=\"container p-4\">
        <section class=\"mb-4\">
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"https://github.com/Braxoia/LaBonneLocation\" role=\"button\"
            style=\"border: none;\"><img src=\"{{ asset('assets/icons/github_icon.png') }}\" alt=\"icon github\" width=\"50\"></a>
        </section>
        <section class=\"mb-4\">
            <p>
                Site web réalisé dans le cadre du projet PWEB.
            </p>
        </section>
        <section class=\"\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Accès rapide</h5>
                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"{{ path('index') }}\" class=\"text-white\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"{{ path('security_login') }}\" class=\"text-white\">Connexion</a>
                        </li>
                        <li>
                            <a href=\"{{ path('security_registration') }}\" class=\"text-white\">S'inscrire</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Moyens de paiement</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            Paypal
                        </li>
                        <li>
                            Carte Bleue (Visa, Electron, ...)
                        </li>
                        <li>
                            Chèque à partir de 200€
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Nous contacter</h5>
                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"#!\" class=\"text-white\">Nous écrire</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        Réalisé par :
        <a class=\"text-white\" target=\"_blank\" href=\"https://github.com/Braxoia\">AHBIB Ibrahime et Laurent Ngeht</a>
    </div>
</footer>", "footer.html.twig", "/home/lngeth/Bureau/projet_web/templates/footer.html.twig");
    }
}
