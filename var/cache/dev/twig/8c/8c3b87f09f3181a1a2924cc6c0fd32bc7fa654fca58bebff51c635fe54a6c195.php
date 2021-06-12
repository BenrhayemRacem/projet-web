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

/* user/Discover.html.twig */
class __TwigTemplate_97e04124890b2c139c007417cc8e04e6f142a0a656994e41e8c9c3fa1756f559 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Discover.html.twig", 1);
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
        <a class=\"nav-link\" href=\"#\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
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
        <ul class=\"pagination pagination-lg first\" >
            <li></li>
            <li></li>
            <li></li>
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\">Courses</span></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li></li>
            <li></li>
            <li></li>
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\">Programming Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Music</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Graphic design</a></li>
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
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse");
        echo "\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
        return "user/Discover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 55,  146 => 23,  136 => 22,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <a class=\"nav-link\" href=\"#\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
    </li>
{% endblock %}

{% block Body %}

    <nav aria-label=\"...\" class=\"Categories\">
        <ul class=\"pagination pagination-lg first\" >
            <li></li>
            <li></li>
            <li></li>
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\">Courses</span></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li></li>
            <li></li>
            <li></li>
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\">Programming Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Music</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">Graphic design</a></li>
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
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
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
                    <div class=\"col\"><a href=\"HTML/HTMLhistory.php\" class=\"btn-grad\">START NOW!</a></div>
                    <div class=\"col\"><a href=\"HTML/HTMLquiz.php\" class=\"btn-grad\">GO TO QUIZZ </a></div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "user/Discover.html.twig", "C:\\Users\\zayne\\projetWEB\\templates\\user\\Discover.html.twig");
    }
}
