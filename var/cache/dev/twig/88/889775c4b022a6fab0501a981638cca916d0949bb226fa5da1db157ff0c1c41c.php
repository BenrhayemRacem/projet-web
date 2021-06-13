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

/* ProgLanguage/HTML/index1.html.twig */
class __TwigTemplate_9471f7ad9eca0989b7bf993c395eecd53e1a83538d92aad7cbcfa6b87bcecd61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'StyleSheet' => [$this, 'block_StyleSheet'],
            'Activated' => [$this, 'block_Activated'],
            'Body' => [$this, 'block_Body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "User.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProgLanguage/HTML/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProgLanguage/HTML/index1.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "ProgLanguage/HTML/index1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_StyleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("StyleSheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/Courses/Course.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 9
        echo "    <li class=\"nav-item actived\">
        <a href=\"#\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 21
        echo "    <div class=\"container\">
        <div class=\"progress\">
            <div class=\"progress-bar bg-info progress-bar-striped  progress-bar-animated \" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>

    <div class=\"container \">
    <div class=\"row  justify-content-between\">
        <div class=\"col-3 List \" style=\" margin: 20px ;\">
            <div class=\"list-group\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse");
        echo "\" class=\"list-group-item list-group-item-action \">HTML History</a>
                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action active\">HTML balises</a>
                <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML tableaux</a>

                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML input</a>
                <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML types input</a>
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML organisation</a>
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML media</a>
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML quiz</a>
            </div>
        </div>

            <div class=\"col-8\">
                        <div class=\"jumbotron\">
                            <div class=\"row gradient-underline\"><h5 class=\"titleParagraphe\">Les balises usuelles</h5></div>
                            <div class=\"card\" style=\" margin: 20px ;\">
                                <div class=\"card-body\">
                            <p> Chaque balise represente du contenu <br>
                                Exemple: < !-- ....--> represente un commentaire <br>
                                < h1>,< h2>,< h3> representent des titres </p>

                            <p> il existe 2 types de balise :</p>

                            <p> 1/ Les balises « block » : Elles englobent le contenu. Elles
                                contiennent des paragraphes, des titres, etc.</p>

                            <p> Exemple: < p > Ceci est un paragraphe < /p > </p>
                            <p> 2/ Les balises « inline » : Elles sont dans le texte. (mettre
                                en gras, souligner, etc…) <br>
                                Exemple:la balise strong </p>
                        </div>

                <div class=\"container justify-items-end row\">
                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse");
        echo "\">< Previous</a></div>
                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 2]);
        echo "\">Next ></a></div>
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
        return "ProgLanguage/HTML/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 66,  199 => 65,  195 => 64,  167 => 39,  163 => 38,  159 => 37,  155 => 36,  151 => 35,  146 => 33,  142 => 32,  138 => 31,  126 => 21,  116 => 20,  97 => 9,  87 => 8,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig' %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/Courses/Course.css') }}\">
{% endblock %}

{% block Activated %}
    <li class=\"nav-item actived\">
        <a href=\"#\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
    </li>
{% endblock %}

{% block Body %}
    <div class=\"container\">
        <div class=\"progress\">
            <div class=\"progress-bar bg-info progress-bar-striped  progress-bar-animated \" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>

    <div class=\"container \">
    <div class=\"row  justify-content-between\">
        <div class=\"col-3 List \" style=\" margin: 20px ;\">
            <div class=\"list-group\">
                <a href=\"{{ path('HTMLCourse') }}\" class=\"list-group-item list-group-item-action \">HTML History</a>
                <a href=\"{{ path('HTMLCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action active\">HTML balises</a>
                <a href=\"{{ path('HTMLCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">HTML tableaux</a>

                <a href=\"{{ path('HTMLCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">HTML input</a>
                <a href=\"{{ path('HTMLCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">HTML types input</a>
                <a href=\"{{ path('HTMLCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">HTML organisation</a>
                <a href=\"{{ path('HTMLCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">HTML media</a>
                <a href=\"{{ path('HTMLCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">HTML quiz</a>
            </div>
        </div>

            <div class=\"col-8\">
                        <div class=\"jumbotron\">
                            <div class=\"row gradient-underline\"><h5 class=\"titleParagraphe\">Les balises usuelles</h5></div>
                            <div class=\"card\" style=\" margin: 20px ;\">
                                <div class=\"card-body\">
                            <p> Chaque balise represente du contenu <br>
                                Exemple: < !-- ....--> represente un commentaire <br>
                                < h1>,< h2>,< h3> representent des titres </p>

                            <p> il existe 2 types de balise :</p>

                            <p> 1/ Les balises « block » : Elles englobent le contenu. Elles
                                contiennent des paragraphes, des titres, etc.</p>

                            <p> Exemple: < p > Ceci est un paragraphe < /p > </p>
                            <p> 2/ Les balises « inline » : Elles sont dans le texte. (mettre
                                en gras, souligner, etc…) <br>
                                Exemple:la balise strong </p>
                        </div>

                <div class=\"container justify-items-end row\">
                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('HTMLCourse') }}\">< Previous</a></div>
                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('HTMLCourse',{num : 2 }) }}\">Next ></a></div>
                </div>
                            </div>
                        </div>
            </div>
                </div>
            </div>
        </div>
{% endblock %}", "ProgLanguage/HTML/index1.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\Web Project\\WebProject\\templates\\ProgLanguage\\HTML\\index1.html.twig");
    }
}
