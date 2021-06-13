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

/* Courses/writing/francais/index0.html.twig */
class __TwigTemplate_63e3e82e5d9b2dcb2794005aad7b80ce285793fdfafda080fecd78010a10fec8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/francais/index0.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/francais/index0.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/writing/francais/index0.html.twig", 1);
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

        echo "Francais Course";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 3
    public function block_Bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        // line 4
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"list-group-item list-group-item-action active \">les nombres</a>
    <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action\">les jours</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">les mois</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">les saisons</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">la famille</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">les temps verbaux</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">Les Pronoms personnels</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">les articles</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">francais quiz</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 15
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo " les nombres ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 16
    public function block_NextTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 18
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 19
        echo "           <div class=\"card\" style=\"margin-top: 20px \">
               <div class=\"card-body\">
                   <p>les nombres entre 0 et 10   </p>

                   <ul>
                       <li> 0: zero</li>
                       <li> 1: un </li>
                       <li> 2:deux</li>
                       <li>3:trois </li>
                       <li> 4:quatre</li>
                       <li> 5:cinq</li>
                       <li> 6:six</li>
                       <li> 7:sept</li>
                       <li> 8:huit</li>
                       <li> 9:neuf </li>

                   </ul>

                   <p> les nombres multiples de 10 </p>
                   <ul>
                       <li> 10: dix </li>
                       <li> 20:vingt</li>
                       <li>30:trente </li>
                       <li> 40:quarante</li>
                       <li> 50:cinquante</li>
                       <li> 60:soixante</li>
                       <li> 70:soixante-dix</li>
                       <li> 80:quatre-vingts</li>
                       <li> 90:quatre-vingt-dix </li>
                       <li> 100:cent </li>

                   </ul>


                   <div class=\"container justify-items-end row\">
                       <div class=\"col\">    </div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 1]);
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
        return "Courses/writing/francais/index0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  227 => 56,  223 => 55,  185 => 19,  175 => 18,  156 => 16,  137 => 15,  124 => 12,  120 => 11,  116 => 10,  112 => 9,  108 => 8,  104 => 7,  100 => 6,  96 => 5,  91 => 4,  81 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}Francais Course{% endblock %}
{% block Bar %}
    <a href=\"{{ path('francaisCourse') }}\" class=\"list-group-item list-group-item-action active \">les nombres</a>
    <a href=\"{{ path('francaisCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action\">les jours</a>
    <a href=\"{{ path('francaisCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">les mois</a>
    <a href=\"{{ path('francaisCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">les saisons</a>
    <a href=\"{{ path('francaisCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">la famille</a>
    <a href=\"{{ path('francaisCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">les temps verbaux</a>
    <a href=\"{{ path('francaisCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Les Pronoms personnels</a>
    <a href=\"{{ path('francaisCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">les articles</a>
    <a href=\"{{ path('francaisCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">francais quiz</a>

{% endblock %}
{% block titleParagraphe %} les nombres {% endblock %}
{% block NextTitle %} {% endblock %}

       {% block Course %}
           <div class=\"card\" style=\"margin-top: 20px \">
               <div class=\"card-body\">
                   <p>les nombres entre 0 et 10   </p>

                   <ul>
                       <li> 0: zero</li>
                       <li> 1: un </li>
                       <li> 2:deux</li>
                       <li>3:trois </li>
                       <li> 4:quatre</li>
                       <li> 5:cinq</li>
                       <li> 6:six</li>
                       <li> 7:sept</li>
                       <li> 8:huit</li>
                       <li> 9:neuf </li>

                   </ul>

                   <p> les nombres multiples de 10 </p>
                   <ul>
                       <li> 10: dix </li>
                       <li> 20:vingt</li>
                       <li>30:trente </li>
                       <li> 40:quarante</li>
                       <li> 50:cinquante</li>
                       <li> 60:soixante</li>
                       <li> 70:soixante-dix</li>
                       <li> 80:quatre-vingts</li>
                       <li> 90:quatre-vingt-dix </li>
                       <li> 100:cent </li>

                   </ul>


                   <div class=\"container justify-items-end row\">
                       <div class=\"col\">    </div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover') }}\">Home</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('francaisCourse', {num : 1 }) }}\">Next ></a></div>
                   </div>

               </div>
           </div>
       {% endblock %}
", "Courses/writing/francais/index0.html.twig", "D:\\projetnewnewnew\\templates\\Courses\\writing\\francais\\index0.html.twig");
    }
}
