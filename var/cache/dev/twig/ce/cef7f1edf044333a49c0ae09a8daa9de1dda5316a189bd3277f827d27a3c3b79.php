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

/* Courses/ProgLanguage/JS/index4.html.twig */
class __TwigTemplate_7052c3f219cb55b5e714b1ef7786fd1cacb2da021c257f313ffaa246522afe47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'width' => [$this, 'block_width'],
            'Bar' => [$this, 'block_Bar'],
            'titleParagraphe' => [$this, 'block_titleParagraphe'],
            'NextTitle' => [$this, 'block_NextTitle'],
            'Course' => [$this, 'block_Course'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Courses/Course.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/JS/index4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/JS/index4.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/ProgLanguage/JS/index4.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        echo "JS Course";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "width"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "width"));

        echo "45%";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_Bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        // line 5
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse");
        echo "\" class=\"list-group-item list-group-item-action \">JS History</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action \">introduction </a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">Les identifiants</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">Dates et Times</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action active\">Les chaines</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">Les booleens</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">Les variables</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">les tableaux</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">Les objets</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 9]);
        echo "\" class=\"list-group-item list-group-item-action \">Les fonctions</a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 10]);
        echo "\" class=\"list-group-item list-group-item-action \">Le DOM</a>
    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 11]);
        echo "\" class=\"list-group-item list-group-item-action \">JS quiz</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo "Les chaines";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_NextTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 22
        echo "                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p> Les chaines en JS peuvent être mises entre ’ ou «
                                </p>
                                <p> Il y a deux types de chaines de caractère, le type primitif
                                    et les strings</p>
                                <p>Exemple: var primitifChaine = « bjr »; var varString = new
                                    String(« bjr »); </p>

                                <p>La concatenation se fait avec +
                                    <br> Pour avoir le nombre de caractère on utilise l’attribut
                                    length.</p>
                                <ul>
                                    <li>s.charAt(0) \"h\": premier caractère </li>
                                    <li>s.charAt(s.length-1) \"d\": le dernier caractère </li>
                                    <li>s.substring(1,4) \"ell\": les 2éme 3éme et 4éme caractère. </li>
                                    <li>s.slice(1,4) \"ell\": même résultat </li>
                                    <li>s.slice(-3) \"rld\": le deuxième paramètre peut être négatif ce qui indique
                                        qu’on commence par la fin </li>
                                    <li>s.indexOf(\"l\") 2: position de la première occurrence de l, -1 si la chaine ou le
                                        caractère n’existe pas. </li>
                                    <li>s.lastIndexOf(\"l\") 10: position du dernier caractère ou chaine. </li>
                                    <li>s.indexOf(\"l\", 3) 3: position of first \"l\" at or after 3</li>
                                    <li>s[0] \"h\"</li>
                                    <li>s[s.length-1] \"d\"</li>
                                    <li>s.trim() supprime les blanc à gauche et à droite </li>
                                </ul>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 3]);
        echo "\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 5]);
        echo "\">Next ></a></div>
                                </div>

                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Courses/ProgLanguage/JS/index4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 53,  251 => 52,  247 => 51,  216 => 22,  206 => 21,  188 => 20,  169 => 19,  156 => 16,  152 => 15,  148 => 14,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}JS Course{% endblock %}
{% block width %}45%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('JSCourse') }}\" class=\"list-group-item list-group-item-action \">JS History</a>
    <a href=\"{{ path('JSCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action \">introduction </a>
    <a href=\"{{ path('JSCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">Les identifiants</a>
    <a href=\"{{ path('JSCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">Dates et Times</a>
    <a href=\"{{ path('JSCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action active\">Les chaines</a>
    <a href=\"{{ path('JSCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">Les booleens</a>
    <a href=\"{{ path('JSCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Les variables</a>
    <a href=\"{{ path('JSCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">les tableaux</a>
    <a href=\"{{ path('JSCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">Les objets</a>
    <a href=\"{{ path('JSCourse',{num : 9 }) }}\" class=\"list-group-item list-group-item-action \">Les fonctions</a>
    <a href=\"{{ path('JSCourse',{num : 10 }) }}\" class=\"list-group-item list-group-item-action \">Le DOM</a>
    <a href=\"{{ path('JSCourse',{num : 11 }) }}\" class=\"list-group-item list-group-item-action \">JS quiz</a>

{% endblock %}
{% block titleParagraphe %}Les chaines{% endblock %}
{% block NextTitle %}{% endblock %}
                    {% block Course %}
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p> Les chaines en JS peuvent être mises entre ’ ou «
                                </p>
                                <p> Il y a deux types de chaines de caractère, le type primitif
                                    et les strings</p>
                                <p>Exemple: var primitifChaine = « bjr »; var varString = new
                                    String(« bjr »); </p>

                                <p>La concatenation se fait avec +
                                    <br> Pour avoir le nombre de caractère on utilise l’attribut
                                    length.</p>
                                <ul>
                                    <li>s.charAt(0) \"h\": premier caractère </li>
                                    <li>s.charAt(s.length-1) \"d\": le dernier caractère </li>
                                    <li>s.substring(1,4) \"ell\": les 2éme 3éme et 4éme caractère. </li>
                                    <li>s.slice(1,4) \"ell\": même résultat </li>
                                    <li>s.slice(-3) \"rld\": le deuxième paramètre peut être négatif ce qui indique
                                        qu’on commence par la fin </li>
                                    <li>s.indexOf(\"l\") 2: position de la première occurrence de l, -1 si la chaine ou le
                                        caractère n’existe pas. </li>
                                    <li>s.lastIndexOf(\"l\") 10: position du dernier caractère ou chaine. </li>
                                    <li>s.indexOf(\"l\", 3) 3: position of first \"l\" at or after 3</li>
                                    <li>s[0] \"h\"</li>
                                    <li>s[s.length-1] \"d\"</li>
                                    <li>s.trim() supprime les blanc à gauche et à droite </li>
                                </ul>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('JSCourse',{num : 3 }) }}\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('JSCourse',{num : 5 }) }}\">Next ></a></div>
                                </div>

                            </div>
                        </div>
                    {% endblock %}", "Courses/ProgLanguage/JS/index4.html.twig", "D:\\projetjdiiiid\\templates\\Courses\\ProgLanguage\\JS\\index4.html.twig");
    }
}
