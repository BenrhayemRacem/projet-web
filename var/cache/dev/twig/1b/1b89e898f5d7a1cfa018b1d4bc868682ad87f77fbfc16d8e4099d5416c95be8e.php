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

/* Courses/writing/anglais/index1.html.twig */
class __TwigTemplate_d6dd1dc685a820505ffd59776aeb70dc4a788ca46c7ccee491124b0f87c8b91b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/anglais/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/anglais/index1.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/writing/anglais/index1.html.twig", 1);
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
    public function block_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "width"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "width"));

        echo "12%";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_Bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"list-group-item list-group-item-action  \">les nombres</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action active\">les jours</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">les mois</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">les saisons</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">la famille</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">les temps verbaux</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">Les Pronoms personnels</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">les articles</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">francais quiz</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo " les jours ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_NextTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        echo " <h2 class=\"NextTitle\">les jours de la semaine</h2> ";
        
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
        echo "           <div class=\"card\" style=\"margin-top: 20px \">
               <div class=\"card-body\">

                   <ul>
                       <li> Monday </li>
                       <li> Tuesday </li>
                       <li> Wednesday </li>
                       <li> Thursday </li>
                       <li> Friday </li>
                       <li> Saturday </li>
                       <li> Sunday is the day of rest </li>
                       <li> a week contains 7 days </li>
                   </ul>

                   <div class=\"container justify-items-end row\">
                       <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 0]);
        echo "\">< Previous</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 2]);
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
        return "Courses/writing/anglais/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 39,  226 => 38,  222 => 37,  205 => 22,  195 => 21,  176 => 18,  157 => 17,  144 => 14,  140 => 13,  136 => 12,  132 => 11,  128 => 10,  124 => 9,  120 => 8,  116 => 7,  111 => 6,  101 => 5,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}Francais Course{% endblock %}
{% block width %}12%{% endblock %}

{% block Bar %}
    <a href=\"{{ path('francaisCourse') }}\" class=\"list-group-item list-group-item-action  \">les nombres</a>
    <a href=\"{{ path('francaisCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action active\">les jours</a>
    <a href=\"{{ path('francaisCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">les mois</a>
    <a href=\"{{ path('francaisCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">les saisons</a>
    <a href=\"{{ path('francaisCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">la famille</a>
    <a href=\"{{ path('francaisCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">les temps verbaux</a>
    <a href=\"{{ path('francaisCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Les Pronoms personnels</a>
    <a href=\"{{ path('francaisCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">les articles</a>
    <a href=\"{{ path('francaisCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">francais quiz</a>

{% endblock %}
{% block titleParagraphe %} les jours {% endblock %}
{% block NextTitle %} <h2 class=\"NextTitle\">les jours de la semaine</h2> {% endblock %}


       {% block Course %}
           <div class=\"card\" style=\"margin-top: 20px \">
               <div class=\"card-body\">

                   <ul>
                       <li> Monday </li>
                       <li> Tuesday </li>
                       <li> Wednesday </li>
                       <li> Thursday </li>
                       <li> Friday </li>
                       <li> Saturday </li>
                       <li> Sunday is the day of rest </li>
                       <li> a week contains 7 days </li>
                   </ul>

                   <div class=\"container justify-items-end row\">
                       <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('francaisCourse',{num : 0 }) }}\">< Previous</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('francaisCourse',{num : 2 }) }}\">Next ></a></div>
                   </div>

               </div>
           </div>
       {% endblock %}
", "Courses/writing/anglais/index1.html.twig", "D:\\XAMPP\\htdocs\\projetWeb\\templates\\Courses\\writing\\anglais\\index1.html.twig");
    }
}
