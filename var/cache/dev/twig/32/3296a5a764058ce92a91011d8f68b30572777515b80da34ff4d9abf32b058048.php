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

/* user/Discover_Courses/Discover.html.twig */
class __TwigTemplate_decc66aaf6349e981967fe66d2adbfface457d84e5072b7482da2bcd135e1c9e extends Template
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
            'greetings' => [$this, 'block_greetings'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Courses/Discover.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Courses/Discover.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Discover_Courses/Discover.html.twig", 1);
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
            <span>So which course  </span>
            <span> do you want to take ?</span>
        </h1>

        <ul class=\"pagination pagination-lg first\" >
            <li ><a class=\"btn active\" href=\"\">Courses</a></li>
            <li ><a class=\"btn from-right\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_LP");
        echo "\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \">Programming Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) ;\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Courses_Languages");
        echo "\">Languages</a></li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \"  href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Courses_Music");
        echo "\">Music</a></li>
        </ul>
    </nav>

<div class=\"container\" id=\"Courses\">
    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">HTML</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> Le language pour creer des pages web</h6>
                <p class=\"card-text\"> Le HyperText Markup Language, généralement abrégé HTML
                    ou dans sa dernière version HTML5, est le langage de balisage
                    conçu pour représenter les pages web. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse");
        echo "\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 7]);
        echo "\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">CSS</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> Le language pour styler des pages web</h6>
                <p class=\"card-text\">  Dans ce module, on commence avec les bases du fonctionnement de CSS :
                    les sélecteurs, les propriétés, écrire des règles CSS, appliquer du CSS
                    à un document HTML, utiliser des longueurs, des couleurs et d'autres
                    unités. On voit également la cascade et l'héritage en CSS, les bases
                    du modèle de boîtes et comment déboguer du code CSS.</p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse");
        echo "\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 10]);
        echo "\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">JAVASCIPT</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> Le language pour programmer des pages web</h6>
                <p class=\"card-text\"> JavaScript est un langage de programmation de
                    scripts principalement employé dans les pages web interactives et
                    à ce titre est une partie essentielle des applications web. Avec
                    les technologies HTML et CSS, JavaScript est parfois considéré comme
                    l'une des technologies cœur du World Wide Web2. Une grande majorité
                    des sites web l'utilisent3, et la majorité des navigateurs web
                    disposent d'un moteur JavaScript4 dédié pour l'interpréter,
                    indépendamment des considérations
                    de sécurité qui peuvent se poser le cas échéant. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JAVASCIPTCourse");
        echo "\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JAVASCIPTCourse", ["num" => 11]);
        echo "\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">C++</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de programmation </h6>
                <p class=\"card-text\"> C ++ est un langage très populaire pour
                    les applications critiques en termes de performances qui
                    reposent sur une gestion rapide et efficace de la mémoire.
                    Il est utilisé dans un large éventail d'industries, notamment
                    le développement de logiciels et de jeux, la réalité virtuelle,
                    la robotique et l'informatique scientifique. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> SQL</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de base de donnees</h6>
                <p class=\"card-text\"> Le langage SQL (Structured Query Language)
                    est un langage informatique utilisé pour exploiter des bases
                    de données. Il permet de façon générale la définition,
                    la manipulation et le contrôle de sécurité de données. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">JAVA</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de programmation </h6>
                <p class=\"card-text\"> Java est un langage de programmation orienté
                    objet créé par James Gosling et Patrick Naughton, employés de
                    Sun Microsystems, avec le soutien de Bill Joy (cofondateur de
                    Sun Microsystems en 1982),
                    présenté officiellement le 23 mai 1995 au SunWorld. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">Python</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de programmation </h6>
                <p class=\"card-text\"> Python (prononcé en anglais /ˈpaɪ.θɑn/3) est un
                    langage de programmation interprété, multi-paradigme et
                    multiplateformes. Il favorise la programmation impérative structurée
                    , fonctionnelle et orientée objet. Il est doté d'un typage dynamique
                    fort, d'une gestion automatique de la mémoire par ramasse-miettes et
                    d'un système de gestion d'exceptions ;
                    il est ainsi similaire à Perl, Ruby, Scheme, Smalltalk et Tcl. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_greetings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        // line 72
        echo "        <div class=\"col Greeting \"> Welcome,";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "FirstName", [], "any", false, false, false, 72), "html", null, true);
        echo " </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/Discover_Courses/Discover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  247 => 92,  243 => 91,  220 => 71,  216 => 70,  198 => 55,  194 => 54,  177 => 40,  173 => 39,  164 => 33,  152 => 23,  142 => 22,  129 => 18,  123 => 15,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
=======
        return array (  271 => 72,  261 => 71,  250 => 68,  241 => 64,  235 => 62,  229 => 60,  227 => 59,  222 => 58,  220 => 57,  215 => 56,  213 => 55,  209 => 54,  204 => 52,  200 => 51,  196 => 50,  192 => 48,  188 => 47,  178 => 40,  174 => 39,  165 => 33,  153 => 23,  143 => 22,  130 => 18,  124 => 15,  118 => 11,  108 => 10,  96 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
>>>>>>> f8ba43ef024d074c2dd82002bad2eb2fdb6017d9
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
            <span>So which course  </span>
            <span> do you want to take ?</span>
        </h1>

        <ul class=\"pagination pagination-lg first\" >
            <li ><a class=\"btn active\" href=\"\">Courses</a></li>
            <li ><a class=\"btn from-right\" href=\"{{ path('Discover_LP') }}\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \">Programming Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) ;\" href=\"{{ path('Discover_Courses_Languages') }}\">Languages</a></li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \"  href=\"{{ path('Discover_Courses_Music') }}\">Music</a></li>
        </ul>
    </nav>

<div class=\"container\" id=\"Courses\">
    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">HTML</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> Le language pour creer des pages web</h6>
                <p class=\"card-text\"> Le HyperText Markup Language, généralement abrégé HTML
                    ou dans sa dernière version HTML5, est le langage de balisage
                    conçu pour représenter les pages web. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"{{ path('HTMLCourse') }}\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"{{ path('HTMLCourse' , {num : 7  })}}\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">CSS</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> Le language pour styler des pages web</h6>
                <p class=\"card-text\">  Dans ce module, on commence avec les bases du fonctionnement de CSS :
                    les sélecteurs, les propriétés, écrire des règles CSS, appliquer du CSS
                    à un document HTML, utiliser des longueurs, des couleurs et d'autres
                    unités. On voit également la cascade et l'héritage en CSS, les bases
                    du modèle de boîtes et comment déboguer du code CSS.</p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"{{ path('CSSCourse') }}\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"{{ path('CSSCourse' , {num: 10 })}}\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">JAVASCIPT</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> Le language pour programmer des pages web</h6>
                <p class=\"card-text\"> JavaScript est un langage de programmation de
                    scripts principalement employé dans les pages web interactives et
                    à ce titre est une partie essentielle des applications web. Avec
                    les technologies HTML et CSS, JavaScript est parfois considéré comme
                    l'une des technologies cœur du World Wide Web2. Une grande majorité
                    des sites web l'utilisent3, et la majorité des navigateurs web
                    disposent d'un moteur JavaScript4 dédié pour l'interpréter,
                    indépendamment des considérations
                    de sécurité qui peuvent se poser le cas échéant. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"{{ path('JAVASCIPTCourse') }}\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"{{ path('JAVASCIPTCourse' , {num : 11 })}}\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">C++</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de programmation </h6>
                <p class=\"card-text\"> C ++ est un langage très populaire pour
                    les applications critiques en termes de performances qui
                    reposent sur une gestion rapide et efficace de la mémoire.
                    Il est utilisé dans un large éventail d'industries, notamment
                    le développement de logiciels et de jeux, la réalité virtuelle,
                    la robotique et l'informatique scientifique. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\"> SQL</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de base de donnees</h6>
                <p class=\"card-text\"> Le langage SQL (Structured Query Language)
                    est un langage informatique utilisé pour exploiter des bases
                    de données. Il permet de façon générale la définition,
                    la manipulation et le contrôle de sécurité de données. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>

        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">JAVA</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de programmation </h6>
                <p class=\"card-text\"> Java est un langage de programmation orienté
                    objet créé par James Gosling et Patrick Naughton, employés de
                    Sun Microsystems, avec le soutien de Bill Joy (cofondateur de
                    Sun Microsystems en 1982),
                    présenté officiellement le 23 mai 1995 au SunWorld. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"card col\" style=\"width: 40rem;\">
            <div class=\"card-body\">
                <div class=\"row gradient-underline\"><h5 class=\"card-title\">Python</h5></div>
                <h6 class=\"card-subtitle mb-2 text-muted description\"> language de programmation </h6>
                <p class=\"card-text\"> Python (prononcé en anglais /ˈpaɪ.θɑn/3) est un
                    langage de programmation interprété, multi-paradigme et
                    multiplateformes. Il favorise la programmation impérative structurée
                    , fonctionnelle et orientée objet. Il est doté d'un typage dynamique
                    fort, d'une gestion automatique de la mémoire par ramasse-miettes et
                    d'un système de gestion d'exceptions ;
                    il est ainsi similaire à Perl, Ruby, Scheme, Smalltalk et Tcl. </p>
                <div class=\"row buttons\">
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"#\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

<<<<<<< HEAD
", "user/Discover_Courses/Discover.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\Web Project\\projet-web\\templates\\user\\Discover_Courses\\Discover.html.twig");
=======
    {% block greetings %}
        <div class=\"col Greeting \"> Welcome,{{ user.FirstName}} </div>
    {% endblock %}

", "user/Discover_Courses/Discover.html.twig", "D:\\XAMPP\\htdocs\\projetWeb\\templates\\user\\Discover_Courses\\Discover.html.twig");
>>>>>>> f8ba43ef024d074c2dd82002bad2eb2fdb6017d9
    }
}
