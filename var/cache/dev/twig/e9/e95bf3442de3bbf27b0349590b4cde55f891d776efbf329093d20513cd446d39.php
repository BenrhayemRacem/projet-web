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

/* Projects/index1.html.twig */
class __TwigTemplate_369fa99d95db0db7fbc223851bc8640423eaa839c35cea9159add01e66befb64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'ProjectTitle' => [$this, 'block_ProjectTitle'],
            'ProjectField' => [$this, 'block_ProjectField'],
            'Description' => [$this, 'block_Description'],
            'Contents' => [$this, 'block_Contents'],
            'Galerie' => [$this, 'block_Galerie'],
            'Designer' => [$this, 'block_Designer'],
            'ProjectDescription' => [$this, 'block_ProjectDescription'],
            'JoinProject' => [$this, 'block_JoinProject'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Projects/ProjectBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index1.html.twig"));

        $this->parent = $this->loadTemplate("Projects/ProjectBase.html.twig", "Projects/index1.html.twig", 1);
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

        echo twig_escape_filter($this->env, (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_ProjectTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectTitle"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "session", [], "any", false, false, false, 5), "flashbag", [], "any", false, false, false, 5), "get", [0 => "success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <h1 id=\"Project-title\">";
        echo twig_escape_filter($this->env, (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_ProjectField($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectField"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectField"));

        echo twig_escape_filter($this->env, (isset($context["Field"]) || array_key_exists("Field", $context) ? $context["Field"] : (function () { throw new RuntimeError('Variable "Field" does not exist.', 11, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_Description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Description"));

        // line 14
        echo "    <div class=\"img-post\">
        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/C6jJg9Zan7w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        Pong is one of the most famous arcade games, simulating table tennis. Each player controls a paddle in the game by dragging it vertically across the screen’s left or right side. Players use their paddles to strike back and forth on the ball.

        Turtle is an inbuilt graphic module in Python. It uses a panel and pen to depict illustrations. </p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_Contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        // line 24
        echo "    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">Part I: Introduction and the basic window setup</a></li>
        <li><a href=\"#Second\">Part II: Add game objects to the screen (Paddles and Ball)</a></li>
        <li><a href=\"#Third\"> Part III: Moving the Paddles</a></li>
        <li><a href=\"#Fourth\">Part IV: Moving the ball</a></li>
        <li><a href=\"#fifth\" >Part V: Colliding with the Paddles</a></li>
        <li><a href=\"#sixth\"> Part VI: Scoring</a></li>
        <li><a href=\"seventh\"> Part VII: Adding Sound</a></li>


    </ol>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_Galerie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        // line 37
        echo "    <div class=\"card\">
        <div class=\"header\">
            <h2 class=\"SmallHeading\">Galerie</h2>
        </div>
        <div class=\"body widget popular-post\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_post\">
                        <p class=\"m-b-0\">output</p>

                        <div class=\"img-post\">
                            <img class=\"Galerie\" style=\"height: 180px\" src=\"https://media.geeksforgeeks.org/wp-content/uploads/20200905202236/pong1-300x185.JPG\" alt=\"Awesome Image\">
                        </div>
                    </div>
                    <div class=\"single_post\">
                        <p class=\"m-b-0\">Interface</p>

                        <div class=\"img-post\">
                            <img class=\"Galerie\" style=\"height: 180px\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPEMgwYkPTtbxpgIsRzD-1Af6mcZH_GjdRaw&usqp=CAU\" alt=\"Awesome Image\">
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

    // line 63
    public function block_Designer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        // line 64
        echo "    <div class=\"header\">
        <h2 class=\"SmallHeading\">A Word from the instructor</h2>
    </div>
    <div class=\"body\">
        <ul class=\"comment-reply list-unstyled\">
            <li class=\"row clearfix\">
                <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun5-1.fna.fbcdn.net/v/t1.15752-9/200222792_780855315953821_781791356910429292_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=ae9488&_nc_ohc=axrynqhd8PcAX9y7lhQ&_nc_ht=scontent.ftun5-1.fna&oh=f444dfe29d49e1d640dcc56ac944895c&oe=60CC322F\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                    <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                        comes out useful </p> <br>
                    <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Si Ghorbel Mehdi </span>
                </div>
            </li>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_ProjectDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        // line 80
        echo "     <h4>Step 1: Importing and initialising the Pygame library</h4>
     <p>
         Your Python code will need to start with the following two lines of code:  </p>
     <h4>Step 2: Defining the colours you will use in your game</h4>
     <p>
         You will have to declare a constant for each of the main colours used within your game. To help you identify colour codes you may use a </p>
     <h4>Step 3: Open a new window</h4>
     <p>
         Your game will run in its own window, for which you can decide of a title, a width and a height. </p>
     <h4>Step 4: The main program loop</h4>
     <p>
         The main program loop is the key wrapper for your game.</p>
     <h4>Next Step?</h4>
     <p>
         Your background is ready? Let’s add the first sprite to your project by completing this project.</p>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_JoinProject($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        // line 98
        echo "    <div><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddProject", ["num" => 1, "ProjectName" => (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 98, $this->source); })()), "Field" => (isset($context["Field"]) || array_key_exists("Field", $context) ? $context["Field"] : (function () { throw new RuntimeError('Variable "Field" does not exist.', 98, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn-grad\">Join the project</a></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Projects/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 98,  314 => 97,  289 => 80,  279 => 79,  255 => 64,  245 => 63,  210 => 37,  200 => 36,  179 => 24,  169 => 23,  151 => 14,  141 => 13,  122 => 11,  109 => 8,  100 => 6,  95 => 5,  85 => 4,  66 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Projects/ProjectBase.html.twig'%}
{% block Title %}{{ ProjectName }}{% endblock %}

{% block ProjectTitle %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\"> {{ flashMessage }}</div>
    {% endfor %}
    <h1 id=\"Project-title\">{{ ProjectName }}</h1>
{% endblock %}

{% block ProjectField %}{{ Field }}{% endblock %}

{% block Description %}
    <div class=\"img-post\">
        <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/C6jJg9Zan7w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        Pong is one of the most famous arcade games, simulating table tennis. Each player controls a paddle in the game by dragging it vertically across the screen’s left or right side. Players use their paddles to strike back and forth on the ball.

        Turtle is an inbuilt graphic module in Python. It uses a panel and pen to depict illustrations. </p>
{% endblock %}
{% block Contents %}
    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">Part I: Introduction and the basic window setup</a></li>
        <li><a href=\"#Second\">Part II: Add game objects to the screen (Paddles and Ball)</a></li>
        <li><a href=\"#Third\"> Part III: Moving the Paddles</a></li>
        <li><a href=\"#Fourth\">Part IV: Moving the ball</a></li>
        <li><a href=\"#fifth\" >Part V: Colliding with the Paddles</a></li>
        <li><a href=\"#sixth\"> Part VI: Scoring</a></li>
        <li><a href=\"seventh\"> Part VII: Adding Sound</a></li>


    </ol>
{% endblock %}
{% block Galerie %}
    <div class=\"card\">
        <div class=\"header\">
            <h2 class=\"SmallHeading\">Galerie</h2>
        </div>
        <div class=\"body widget popular-post\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_post\">
                        <p class=\"m-b-0\">output</p>

                        <div class=\"img-post\">
                            <img class=\"Galerie\" style=\"height: 180px\" src=\"https://media.geeksforgeeks.org/wp-content/uploads/20200905202236/pong1-300x185.JPG\" alt=\"Awesome Image\">
                        </div>
                    </div>
                    <div class=\"single_post\">
                        <p class=\"m-b-0\">Interface</p>

                        <div class=\"img-post\">
                            <img class=\"Galerie\" style=\"height: 180px\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPEMgwYkPTtbxpgIsRzD-1Af6mcZH_GjdRaw&usqp=CAU\" alt=\"Awesome Image\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block Designer %}
    <div class=\"header\">
        <h2 class=\"SmallHeading\">A Word from the instructor</h2>
    </div>
    <div class=\"body\">
        <ul class=\"comment-reply list-unstyled\">
            <li class=\"row clearfix\">
                <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun5-1.fna.fbcdn.net/v/t1.15752-9/200222792_780855315953821_781791356910429292_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=ae9488&_nc_ohc=axrynqhd8PcAX9y7lhQ&_nc_ht=scontent.ftun5-1.fna&oh=f444dfe29d49e1d640dcc56ac944895c&oe=60CC322F\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                    <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                        comes out useful </p> <br>
                    <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Si Ghorbel Mehdi </span>
                </div>
            </li>
    </div>
{% endblock %}
 {% block ProjectDescription %}
     <h4>Step 1: Importing and initialising the Pygame library</h4>
     <p>
         Your Python code will need to start with the following two lines of code:  </p>
     <h4>Step 2: Defining the colours you will use in your game</h4>
     <p>
         You will have to declare a constant for each of the main colours used within your game. To help you identify colour codes you may use a </p>
     <h4>Step 3: Open a new window</h4>
     <p>
         Your game will run in its own window, for which you can decide of a title, a width and a height. </p>
     <h4>Step 4: The main program loop</h4>
     <p>
         The main program loop is the key wrapper for your game.</p>
     <h4>Next Step?</h4>
     <p>
         Your background is ready? Let’s add the first sprite to your project by completing this project.</p>
 {% endblock %}

{% block JoinProject %}
    <div><a href=\"{{path('AddProject',{'num': 1 ,'ProjectName' : ProjectName , 'Field': Field})}}\" class=\"btn-grad\">Join the project</a></div>
{% endblock %}", "Projects/index1.html.twig", "D:\\XAMPP\\htdocs\\projetWeb\\templates\\Projects\\index1.html.twig");
    }
}
