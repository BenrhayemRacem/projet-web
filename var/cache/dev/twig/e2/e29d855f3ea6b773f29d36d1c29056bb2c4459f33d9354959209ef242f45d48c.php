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

/* Courses/writing/anglais/index0.html.twig */
class __TwigTemplate_637f7c1b810404a375df1278045abc69cabcc8c827eedfc9a2bbb20ade355ed5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/anglais/index0.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/anglais/index0.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/writing/anglais/index0.html.twig", 1);
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

        echo "english Course";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse");
        echo "\" class=\"list-group-item list-group-item-action active \">the numbers</a>
    <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action\">the days</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">the months</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">the seasons </a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">the family</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">verbal tenses</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">Personal pronouns</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">the articles</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">english quiz</a>

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

        echo " the number ";
        
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
                   <p> numbers between 0 and 10 </p>

                   <ul>
                       <li> 0: zero </li>
                       <li> 1: one </li>
                       <li> 2: two </li>
                       <li> 3: three </li>
                       <li> 4: four </li>
                       <li> 5: five </li>
                       <li> 6: six </li>
                       <li> 7: seven </li>
                       <li> 8: eight </li>
                       <li> 9: nine </li>

                   </ul>

                   <p> numbers multiple of 10 </p>
                   <ul>
                       <li> 10:ten </li>
                       <li> 20:twenty </li>
                       <li> 30:thirty </li>
                       <li> 40:forty </li>
                       <li> 50:fifty </li>
                       <li> 60: sixty </li>
                       <li> 70: seventy </li>
                       <li> 80: eighty </li>
                       <li> 90: ninety </li>
                       <li> 100: one hundred </li>

                   </ul>


                   <div class=\"container justify-items-end row\">
                       <div class=\"col\">    </div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 1]);
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
        return "Courses/writing/anglais/index0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 56,  223 => 55,  185 => 19,  175 => 18,  156 => 16,  137 => 15,  124 => 12,  120 => 11,  116 => 10,  112 => 9,  108 => 8,  104 => 7,  100 => 6,  96 => 5,  91 => 4,  81 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}english Course{% endblock %}
{% block Bar %}
    <a href=\"{{ path('anglaisCourse') }}\" class=\"list-group-item list-group-item-action active \">the numbers</a>
    <a href=\"{{ path('anglaisCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action\">the days</a>
    <a href=\"{{ path('anglaisCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">the months</a>
    <a href=\"{{ path('anglaisCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">the seasons </a>
    <a href=\"{{ path('anglaisCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">the family</a>
    <a href=\"{{ path('anglaisCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">verbal tenses</a>
    <a href=\"{{ path('anglaisCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Personal pronouns</a>
    <a href=\"{{ path('anglaisCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">the articles</a>
    <a href=\"{{ path('anglaisCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">english quiz</a>

{% endblock %}
{% block titleParagraphe %} the number {% endblock %}
{% block NextTitle %} {% endblock %}

       {% block Course %}
           <div class=\"card\" style=\"margin-top: 20px \">
               <div class=\"card-body\">
                   <p> numbers between 0 and 10 </p>

                   <ul>
                       <li> 0: zero </li>
                       <li> 1: one </li>
                       <li> 2: two </li>
                       <li> 3: three </li>
                       <li> 4: four </li>
                       <li> 5: five </li>
                       <li> 6: six </li>
                       <li> 7: seven </li>
                       <li> 8: eight </li>
                       <li> 9: nine </li>

                   </ul>

                   <p> numbers multiple of 10 </p>
                   <ul>
                       <li> 10:ten </li>
                       <li> 20:twenty </li>
                       <li> 30:thirty </li>
                       <li> 40:forty </li>
                       <li> 50:fifty </li>
                       <li> 60: sixty </li>
                       <li> 70: seventy </li>
                       <li> 80: eighty </li>
                       <li> 90: ninety </li>
                       <li> 100: one hundred </li>

                   </ul>


                   <div class=\"container justify-items-end row\">
                       <div class=\"col\">    </div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover') }}\">Home</a></div>
                       <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('anglaisCourse', {num : 1 }) }}\">Next ></a></div>
                   </div>

               </div>
           </div>
       {% endblock %}", "Courses/writing/anglais/index0.html.twig", "D:\\newalkheeeer\\projet-web\\templates\\Courses\\writing\\anglais\\index0.html.twig");
    }
}
