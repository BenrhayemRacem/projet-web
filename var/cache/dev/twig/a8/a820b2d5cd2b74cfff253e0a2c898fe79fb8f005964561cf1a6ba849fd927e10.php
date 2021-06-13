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

/* user/Discover_Courses/DiscoverCL.html.twig */
class __TwigTemplate_3485bbafdb9435a73bb67cf81ec2506cd46b88f3bfccace9acc67ec59ed96b87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Courses/DiscoverCL.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Courses/DiscoverCL.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Discover_Courses/DiscoverCL.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    // line 3
    public function block_Title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        echo "Discover with us";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 5
    public function block_StyleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("StyleSheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/User/Discover.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 10
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 11
        echo "    <li class=\"nav-item actived\">
        <a href=\"#\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyCourses");
        echo "\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyProjects");
        echo "\">MY PROJECTS</a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 22
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 23
        echo "
    <nav aria-label=\"...\" class=\"Categories\">

        <h1 class=\"title\">
            <span>So which course </span>
            <span> do you want to take ?</span>
        </h1>

        <ul class=\"pagination pagination-lg first\" >
            <li ><a class=\"btn active\" href=\"\">Courses</a></li>
            <li ><a class=\"btn from-right\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Projects_Languages");
        echo "\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Programming Languages</a></li>
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \" >Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Courses_Music");
        echo "\">Music</a></li>
        </ul>
    </nav>


    <div class=\"container\" id=\"Courses\">
        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Francais</h5></div>
                <p class=\"card-text\"> Le français est une langue indo-européenne de la famille des langues romanes
                    dont les locuteurs sont appelés francophones.
                    Le français est parlé, en 2018, sur tous les continents par environ 300 millions de personnes :
                    235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs.
                    Selon l'Organisation internationale de la francophonie, il pourrait y avoir 700 millions de francophones sur Terre en 20507.
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>


        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Anglais</h5></div>
                <p class=\"card-text\"> L'anglais est une langue indo-européenne germanique originaire d'Angleterre
                    qui tire ses racines de langues du nord de l'Europe (terre d'origine des Angles, des Saxons et des Frisons)
                    dont le vocabulaire a été enrichi et la syntaxe et la grammaire modifiées par le français anglo-normandNote
                    , apporté par les Normands, puis par le français avec les
                    Plantagenêt. La langue anglaise est ainsi composée d'environ 29 % de mots d'origine normande et
                    française et plus des deux tiers de son vocabulaire proviennent du français ou du latin.
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse");
        echo "\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 8]);
        echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Espagnol</h5></div>
                <p class=\"card-text\"> L’espagnol, ou le castillan est une
                    langue romane parlée en Espagne et dans de nombreux pays
                    d'Amérique et d'autres territoires dans le monde associés à un moment de leur histoire à l'Empire espagnol.
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Italien </h5></div>
                <p class=\"card-text\"> L'italien est une langue appartenant au groupe des langues romanes
                    de la famille indo-européenne. Il existe un très grand nombre de dialectes italo-romans.
                    Comme beaucoup de langues nationales, l'italien moderne est un dialecte qui a « réussi » en
                    s'imposant comme langue propre à une région beaucoup plus vaste que sa région dialectale originelle.
                     </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Allemand </h5></div>
                <p class=\"card-text\"> L’allemand est l'une des langues
                    indo-européennes appartenant à la branche occidentale des langues germaniques.
                    Du fait de ses nombreux dialectes,
                    l'allemand constitue dans une certaine mesure une langue-toit
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Russe </h5></div>
                <p class=\"card-text\"> Le russe est une langue appartenant au groupe des langues slaves orientales de
                    la famille des langues indo-européennes, auquel appartiennent aussi l'ukrainien et le biélorusse.
                    Il compte plus de 280 millions de locuteurs. Il est
                    la langue officielle de la Fédération de Russie et l'une des langues officielles des
                    républiques de Biélorussie, du Kazakhstan et du Kirghizistan, langue de communication
                    au sein de la Communauté des États indépendants, dominante dans certaines régions d'Ukraine
                    . Il est également une des langues officielles de l'ONU.</p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>


        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Portugais </h5></div>
                <p class=\"card-text\"> Le portugais est une langue appartenant à la
                    branche romane de la famille des langues indo-européennes. Les locuteurs du portugais
                    s'appellent les lusophones. </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
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
        return "user/Discover_Courses/DiscoverCL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  329 => 150,  325 => 149,  309 => 136,  305 => 135,  286 => 119,  282 => 118,  265 => 104,  261 => 103,  244 => 89,  240 => 88,  224 => 75,  220 => 74,  200 => 57,  196 => 56,  177 => 40,  170 => 36,  164 => 33,  152 => 23,  142 => 22,  129 => 18,  123 => 15,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig'%}

{% block Title %}Discover with us{% endblock %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/User/Discover.css') }}\">
{% endblock %}

{% block Activated %}
    <li class=\"nav-item actived\">
        <a href=\"#\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"{{ path('MyCourses') }}\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"{{ path('MyProjects') }}\">MY PROJECTS</a>
    </li>
{% endblock %}

{% block Body %}

    <nav aria-label=\"...\" class=\"Categories\">

        <h1 class=\"title\">
            <span>So which course </span>
            <span> do you want to take ?</span>
        </h1>

        <ul class=\"pagination pagination-lg first\" >
            <li ><a class=\"btn active\" href=\"\">Courses</a></li>
            <li ><a class=\"btn from-right\" href=\"{{ path('Discover_Projects_Languages') }}\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{path('Discover')}}\">Programming Languages</a></li>
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \" >Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{ path('Discover_Courses_Music') }}\">Music</a></li>
        </ul>
    </nav>


    <div class=\"container\" id=\"Courses\">
        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Francais</h5></div>
                <p class=\"card-text\"> Le français est une langue indo-européenne de la famille des langues romanes
                    dont les locuteurs sont appelés francophones.
                    Le français est parlé, en 2018, sur tous les continents par environ 300 millions de personnes :
                    235 millions l'emploient quotidiennement, et 90 millions3 en sont des locuteurs natifs.
                    Selon l'Organisation internationale de la francophonie, il pourrait y avoir 700 millions de francophones sur Terre en 20507.
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"{{ path('francaisCourse') }}\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"{{ path('francaisCourse',{num : 8 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>


        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Anglais</h5></div>
                <p class=\"card-text\"> L'anglais est une langue indo-européenne germanique originaire d'Angleterre
                    qui tire ses racines de langues du nord de l'Europe (terre d'origine des Angles, des Saxons et des Frisons)
                    dont le vocabulaire a été enrichi et la syntaxe et la grammaire modifiées par le français anglo-normandNote
                    , apporté par les Normands, puis par le français avec les
                    Plantagenêt. La langue anglaise est ainsi composée d'environ 29 % de mots d'origine normande et
                    française et plus des deux tiers de son vocabulaire proviennent du français ou du latin.
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"{{ path('anglaisCourse') }}\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"{{ path('anglaisCourse',{num : 8 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Espagnol</h5></div>
                <p class=\"card-text\"> L’espagnol, ou le castillan est une
                    langue romane parlée en Espagne et dans de nombreux pays
                    d'Amérique et d'autres territoires dans le monde associés à un moment de leur histoire à l'Empire espagnol.
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"{{  path('francaisCourse') }}\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"{{  path('francaisCourse',{num : 8 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Italien </h5></div>
                <p class=\"card-text\"> L'italien est une langue appartenant au groupe des langues romanes
                    de la famille indo-européenne. Il existe un très grand nombre de dialectes italo-romans.
                    Comme beaucoup de langues nationales, l'italien moderne est un dialecte qui a « réussi » en
                    s'imposant comme langue propre à une région beaucoup plus vaste que sa région dialectale originelle.
                     </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"{{ path('francaisCourse')  }}\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"{{ path('francaisCourse',{num : 8 })  }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Allemand </h5></div>
                <p class=\"card-text\"> L’allemand est l'une des langues
                    indo-européennes appartenant à la branche occidentale des langues germaniques.
                    Du fait de ses nombreux dialectes,
                    l'allemand constitue dans une certaine mesure une langue-toit
                </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"{{ path('francaisCourse')  }}\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"{{ path('francaisCourse',{num : 8 })  }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Russe </h5></div>
                <p class=\"card-text\"> Le russe est une langue appartenant au groupe des langues slaves orientales de
                    la famille des langues indo-européennes, auquel appartiennent aussi l'ukrainien et le biélorusse.
                    Il compte plus de 280 millions de locuteurs. Il est
                    la langue officielle de la Fédération de Russie et l'une des langues officielles des
                    républiques de Biélorussie, du Kazakhstan et du Kirghizistan, langue de communication
                    au sein de la Communauté des États indépendants, dominante dans certaines régions d'Ukraine
                    . Il est également une des langues officielles de l'ONU.</p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"{{ path('francaisCourse')  }}\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"{{  path('francaisCourse',{num : 8 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>


        <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> Portugais </h5></div>
                <p class=\"card-text\"> Le portugais est une langue appartenant à la
                    branche romane de la famille des langues indo-européennes. Les locuteurs du portugais
                    s'appellent les lusophones. </p>
                <div class=\"row buttons\">
                    <div class=\"col\" ><a href=\"{{  path('francaisCourse') }}\" class=\"btn-grad \">START NOW!</a></div>
                    <div class=\"col\" ><a href=\"{{  path('francaisCourse',{num : 8 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

    </div>

{% endblock  %}", "user/Discover_Courses/DiscoverCL.html.twig", "D:\\projetnewnewnew\\templates\\user\\Discover_Courses\\DiscoverCL.html.twig");
    }
}
