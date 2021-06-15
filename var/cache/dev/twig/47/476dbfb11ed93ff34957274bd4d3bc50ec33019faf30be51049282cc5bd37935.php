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

/* Projects/ProjectBase.html.twig */
class __TwigTemplate_c120eedb9ee90031d9da062615924bb832f4edbf18d831d75f74f936b9f6cb4f extends Template
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
            'ProjectTitle' => [$this, 'block_ProjectTitle'],
            'ProjectField' => [$this, 'block_ProjectField'],
            'Description' => [$this, 'block_Description'],
            'Designer' => [$this, 'block_Designer'],
            'ProjectDescription' => [$this, 'block_ProjectDescription'],
            'Contents' => [$this, 'block_Contents'],
            'Galerie' => [$this, 'block_Galerie'],
            'JoinProject' => [$this, 'block_JoinProject'],
            'Scripts' => [$this, 'block_Scripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/ProjectBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/ProjectBase.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "Projects/ProjectBase.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/Projects/ProjectView.css"), "html", null, true);
        echo "\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 12
        echo "    <li class=\"nav-item actived\">
        <a href=\"#\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyCourses");
        echo "\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyProjects");
        echo "\">MY PROJECTS</a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 24
        echo "
    <div id=\"Presentation-content\" >
        <div class=\"container-fluid\" id=\"Heading-container\">
            ";
        // line 27
        $this->displayBlock('ProjectTitle', $context, $blocks);
        // line 30
        echo "            <div class=\"headingField\">
                <h1 class=\"FieldName\">";
        // line 31
        $this->displayBlock('ProjectField', $context, $blocks);
        echo "</h1>
            </div>
        </div>
    </div>

    <div id=\"main-content\" class=\"blog-page\">
        <div class=\"container\">
            <div class=\"row clearfix\">
                <div class=\"col-lg-8 col-md-12 left-box\">
                    <!-- Description-->
                    <div class=\"card single_post\">
                        <div class=\"body\">
                            ";
        // line 43
        $this->displayBlock('Description', $context, $blocks);
        // line 51
        echo "                        </div>
                    </div>
                    <!--/Description-->

                    <!-- Designer -->
                    <div class=\"card\">
                        ";
        // line 57
        $this->displayBlock('Designer', $context, $blocks);
        // line 72
        echo "                    </div>

                    <!-- /designer -->

                    <!-- Project description -->
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2 class=\"SmallHeading\">Project description </h2>
                        </div>
                        <div class=\"body\" style=\"padding: 0 20px 20px 20px\">
                            ";
        // line 82
        $this->displayBlock('ProjectDescription', $context, $blocks);
        // line 84
        echo "                        </div>
                    </div>
                </div>


                <!-- Main Headings -->
                <div class=\"col-lg-4 col-md-12 right-box\">

                    <div class=\"card\">
                        <div class=\"header\">

                            <h2 class=\"SmallHeading\">Contents</h2>
                        </div>
                        <div class=\"body widget\" style=\"padding-top: 0\">
                            ";
        // line 98
        $this->displayBlock('Contents', $context, $blocks);
        // line 112
        echo "                        </div>

                    </div>
                    <!-- /Main Headings -->

                    <!-- Galerie -->
                    ";
        // line 118
        $this->displayBlock('Galerie', $context, $blocks);
        // line 145
        echo "                    <!-- /Galerie -->

                    <div class=\"card\" style=\"background-color: white ; box-shadow: none;\">
                        ";
        // line 148
        $this->displayBlock('JoinProject', $context, $blocks);
        // line 151
        echo "                       <div><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_LP");
        echo "\" class=\"btn-grad\">Go back</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_ProjectTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectTitle"));

        // line 28
        echo "                <h1 id=\"Project-title\">Project Title</h1>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_ProjectField($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectField"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectField"));

        echo "field Name";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_Description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Description"));

        // line 44
        echo "                            <div class=\"img-post\">
                                <img class=\"d-block img-fluid\" height=\"280px\" width=\"800px\" src=\"https://via.placeholder.com/800x280/87CEFA/000000\" alt=\"First slide\">
                            </div>
                            <h2 class=\"SmallHeading\">Quick discription</h2>
                            <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_Designer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        // line 58
        echo "                        <div class=\"header\">
                            <h2 class=\"SmallHeading\">A Word from the instructor</h2>
                        </div>
                        <div class=\"body\">
                            <ul class=\"comment-reply list-unstyled\">
                                <li class=\"row clearfix\">
                                    <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                                    <div class=\"text-box col-md-7 \" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                                        <p> Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p> <br>
                                        <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - the instructor's name </span>
                                    </div>
                                </li>
                        </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_ProjectDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        // line 83
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_Contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        // line 99
        echo "                            <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
                                <li><a href=\"#\">eCommerce</a></li>
                                <li><a href=\"#\">Microsoft Technologies</a></li>
                                <li><a href=\"#\">Creative UX</a></li>
                                <li><a href=\"#\">Wordpress</a></li>
                                <li><a href=\"#\">Angular JS</a></li>
                                <li><a href=\"#\">Enterprise Mobility</a></li>
                                <li><a href=\"#\">Website Design</a></li>
                                <li><a href=\"#\">HTML5</a></li>
                                <li><a href=\"#\">Infographics</a></li>
                                <li><a href=\"#\">Wordpress Development</a></li>
                            </ol>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_Galerie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        // line 119
        echo "                    <div class=\"card\">
                        <div class=\"header\">
                            <h2 class=\"SmallHeading\">Galerie</h2>
                        </div>
                        <div class=\"body widget popular-post\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"single_post\">
                                        <p class=\"m-b-0\">Apple Introduces Search Ads Basic</p>
                                        <span>jun 22, 2018</span>
                                        <div class=\"img-post\">
                                            <img class=\"Galerie\"  src=\"https://via.placeholder.com/280x280/87CEFA/000000\" alt=\"Awesome Image\">
                                        </div>
                                    </div>
                                    <div class=\"single_post\">
                                        <p class=\"m-b-0\">new rules, more cars, more races</p>
                                        <span>jun 8, 2018</span>
                                        <div class=\"img-post\">
                                            <img class=\"Galerie\" src=\"https://via.placeholder.com/280x280/87CEFA/000000\" alt=\"Awesome Image\">
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

    // line 148
    public function block_JoinProject($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        // line 149
        echo "                        <div><a href=\"#\" class=\"btn-grad\">Join the project</a></div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_Scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Scripts"));

        // line 161
        echo "    ";
        $this->displayParentBlock("Scripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/ProjectScripts/ImageDesignerScript.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Projects/ProjectBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 162,  493 => 161,  483 => 160,  472 => 149,  462 => 148,  427 => 119,  417 => 118,  395 => 99,  385 => 98,  375 => 83,  365 => 82,  342 => 58,  332 => 57,  316 => 44,  306 => 43,  287 => 31,  276 => 28,  266 => 27,  247 => 151,  245 => 148,  240 => 145,  238 => 118,  230 => 112,  228 => 98,  212 => 84,  210 => 82,  198 => 72,  196 => 57,  188 => 51,  186 => 43,  171 => 31,  168 => 30,  166 => 27,  161 => 24,  151 => 23,  138 => 19,  132 => 16,  126 => 12,  116 => 11,  103 => 7,  98 => 6,  88 => 5,  70 => 3,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig'%}

{% block Title %}{% endblock %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/Projects/ProjectView.css') }}\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
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

    <div id=\"Presentation-content\" >
        <div class=\"container-fluid\" id=\"Heading-container\">
            {% block ProjectTitle %}
                <h1 id=\"Project-title\">Project Title</h1>
            {% endblock %}
            <div class=\"headingField\">
                <h1 class=\"FieldName\">{% block ProjectField %}field Name{% endblock %}</h1>
            </div>
        </div>
    </div>

    <div id=\"main-content\" class=\"blog-page\">
        <div class=\"container\">
            <div class=\"row clearfix\">
                <div class=\"col-lg-8 col-md-12 left-box\">
                    <!-- Description-->
                    <div class=\"card single_post\">
                        <div class=\"body\">
                            {% block Description %}
                            <div class=\"img-post\">
                                <img class=\"d-block img-fluid\" height=\"280px\" width=\"800px\" src=\"https://via.placeholder.com/800x280/87CEFA/000000\" alt=\"First slide\">
                            </div>
                            <h2 class=\"SmallHeading\">Quick discription</h2>
                            <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            {% endblock %}
                        </div>
                    </div>
                    <!--/Description-->

                    <!-- Designer -->
                    <div class=\"card\">
                        {% block Designer %}
                        <div class=\"header\">
                            <h2 class=\"SmallHeading\">A Word from the instructor</h2>
                        </div>
                        <div class=\"body\">
                            <ul class=\"comment-reply list-unstyled\">
                                <li class=\"row clearfix\">
                                    <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                                    <div class=\"text-box col-md-7 \" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                                        <p> Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p> <br>
                                        <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - the instructor's name </span>
                                    </div>
                                </li>
                        </div>
                        {% endblock %}
                    </div>

                    <!-- /designer -->

                    <!-- Project description -->
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2 class=\"SmallHeading\">Project description </h2>
                        </div>
                        <div class=\"body\" style=\"padding: 0 20px 20px 20px\">
                            {% block ProjectDescription %}
                            {% endblock %}
                        </div>
                    </div>
                </div>


                <!-- Main Headings -->
                <div class=\"col-lg-4 col-md-12 right-box\">

                    <div class=\"card\">
                        <div class=\"header\">

                            <h2 class=\"SmallHeading\">Contents</h2>
                        </div>
                        <div class=\"body widget\" style=\"padding-top: 0\">
                            {% block Contents %}
                            <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
                                <li><a href=\"#\">eCommerce</a></li>
                                <li><a href=\"#\">Microsoft Technologies</a></li>
                                <li><a href=\"#\">Creative UX</a></li>
                                <li><a href=\"#\">Wordpress</a></li>
                                <li><a href=\"#\">Angular JS</a></li>
                                <li><a href=\"#\">Enterprise Mobility</a></li>
                                <li><a href=\"#\">Website Design</a></li>
                                <li><a href=\"#\">HTML5</a></li>
                                <li><a href=\"#\">Infographics</a></li>
                                <li><a href=\"#\">Wordpress Development</a></li>
                            </ol>
                            {% endblock %}
                        </div>

                    </div>
                    <!-- /Main Headings -->

                    <!-- Galerie -->
                    {% block Galerie %}
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2 class=\"SmallHeading\">Galerie</h2>
                        </div>
                        <div class=\"body widget popular-post\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"single_post\">
                                        <p class=\"m-b-0\">Apple Introduces Search Ads Basic</p>
                                        <span>jun 22, 2018</span>
                                        <div class=\"img-post\">
                                            <img class=\"Galerie\"  src=\"https://via.placeholder.com/280x280/87CEFA/000000\" alt=\"Awesome Image\">
                                        </div>
                                    </div>
                                    <div class=\"single_post\">
                                        <p class=\"m-b-0\">new rules, more cars, more races</p>
                                        <span>jun 8, 2018</span>
                                        <div class=\"img-post\">
                                            <img class=\"Galerie\" src=\"https://via.placeholder.com/280x280/87CEFA/000000\" alt=\"Awesome Image\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endblock %}
                    <!-- /Galerie -->

                    <div class=\"card\" style=\"background-color: white ; box-shadow: none;\">
                        {% block JoinProject %}
                        <div><a href=\"#\" class=\"btn-grad\">Join the project</a></div>
                        {% endblock %}
                       <div><a href=\"{{ path('Discover_LP') }}\" class=\"btn-grad\">Go back</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock  %}

{% block Scripts %}
    {{ parent() }}
    <script src=\"{{ asset('Scripts/ProjectScripts/ImageDesignerScript.js')}}\"></script>
{% endblock  %}", "Projects/ProjectBase.html.twig", "C:\\Users\\zayne\\projet-web\\templates\\Projects\\ProjectBase.html.twig");
    }
}
