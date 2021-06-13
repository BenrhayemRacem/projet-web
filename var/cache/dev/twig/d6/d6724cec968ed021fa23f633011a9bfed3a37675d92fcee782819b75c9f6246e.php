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

/* home.html.twig */
class __TwigTemplate_02bc7646d2daf0d6e7694e0cf6a9f6ca7ea73c07cdfd3af28c51b5405a44d237 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'StyleSheet' => [$this, 'block_StyleSheet'],
            'Title' => [$this, 'block_Title'],
            'Body' => [$this, 'block_Body'],
            'Header' => [$this, 'block_Header'],
            'Scripts' => [$this, 'block_Scripts'],
            'Footer' => [$this, 'block_Footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head style=\"border-left-width: 0 ; border-left-style: solid;\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Logohead.png"), "html", null, true);
        echo "\">
    <script defer src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/brands.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/solid.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 13
        $this->displayBlock('StyleSheet', $context, $blocks);
        // line 20
        echo "    <title> ";
        $this->displayBlock('Title', $context, $blocks);
        echo "</title>
</head>

";
        // line 23
        $this->displayBlock('Body', $context, $blocks);
        // line 298
        echo "
";
        // line 299
        $this->displayBlock('Scripts', $context, $blocks);
        // line 306
        echo "

</body>


";
        // line 311
        $this->displayBlock('Footer', $context, $blocks);
        // line 367
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_StyleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/Style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/home/styleAboutUs.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/home/membersStories.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/home/learningPath.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_Title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        echo "LTC- Learn To Create";
        
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
        echo "<body>

<!-- The Nav bar -->
<!--Header -->
";
        // line 28
        $this->displayBlock('Header', $context, $blocks);
        // line 71
        echo "<!--/Header -->


<!--First section -->
<div id=\"firstSection\" class=\"container cover\">
    <h1 class=\"cover-heading\">Build Something big with us</h1>
    <p class=\"lead\">Want to start learning and creating your awesome projects ?</p>
    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-lg btn-secondary\">Take A Course Now</a>
</div>
<!--/First section -->

<!-- Increasing Numbers -->
<div id=\"Numbers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-user-graduate\"></i><br/></span>
                <div class=\"Number\">4356</div>
                <span class=\"Numbers-label\">students</span>
            </div>
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-book-open\"></i><br/></span>
                <div class=\"Number\">457</div>
                <span class=\"Numbers-label\">courses</span>
            </div>
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-chalkboard-teacher\"></i><br/></span>
                <div class=\"Number\">123</div>
                <span class=\"Numbers-label\">instructors</span>
            </div>
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-globe-africa\"></i><br/></span>
                <div class=\"Number\">24</div>
                <span class=\"Numbers-label\">countries</span>
            </div>
        </div>
    </div>
</div>
<!-- /Increasing Numbers -->


<!-- About us -->
<section id=\"about_us\" >
    <div class=\"container-fluid\" style=\"background-image: url(";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Background/WebHomeEdit.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-6\">
                    <div class=\"row \">

                        Our partners with more than 200 leading universities and companies to bring flexible, affordable, job-relevant online learning to individuals and organizations worldwide. We offer a range of learning opportunities—from hands-on projects and courses to job-ready certificates and degree programs.
                    </div>
                    <div class=\"row justify-content-center\">
                        <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn btn-lg btn-secondary\" style=\"font-weight: bold;\"> login for free </a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/students.webp"), "html", null, true);
        echo "\" class=\"img-student\" alt=\"student images\">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About us -->

<!-- collaborators -->
<section id=\"collaborators\" style=\"max-height: 1000px;\">
    <div class=\"container\" id=\"CollaboratorContainer\">
        <h1 style=\"font-size:50px;background-image: url(";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Background/Background.jpg"), "html", null, true);
        echo ");\"> Our main collaborators ...</h1>

        <div class=\"collaborators carousel\" >
            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"row\">
                            <div class=\"col\"> <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/icons/duke.webp"), "html", null, true);
        echo "\" alt=\"\" > </div>
                            <div class=\"col\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/icons/google.png"), "html", null, true);
        echo "\" alt=\"\" ></div>
                            <div class=\"col\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/icons/ibm.webp"), "html", null, true);
        echo "\" alt=\"\" ></div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"row\">
                            <div class=\"col\"><img  src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/icons/illinois.webp"), "html", null, true);
        echo "\" alt=\"\" ></div>
                            <div class=\"col\"> <img  src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/icons/stanford.webp"), "html", null, true);
        echo "\" alt=\"\" ></div>
                            <div class=\"col-carre\"> <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/icons/insat.jpg"), "html", null, true);
        echo "\" alt=\"carre\" ></div>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

</section>
<!--/collaborators-->


<!--membersStories-->
<section  id=\"membersStories\" style=\"background-image: url(";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Background/Background.jpg"), "html", null, true);
        echo ");\">

    <h1 class=\"heading\"> <strong> Our students talking about us </strong></h1>
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12 col-lg-4\">
                <span></span>
                <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/student1.png"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                <div>Your courses are simply awesome, the depth they go into and the breadth of coverage is so good that I don't have to refer to 10 different websites looking for interview topics and content.
                    <h4>Souvuk ,front-end developer</h4>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-4\">
                <span></span>
                <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/student2.png"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">

                <div>“LTC's class gave me a positive push to continue to work, . More classes later,
                    each instructor has inspired me in a different way to be the best version of myself.”
                    Now , i am establishing my own startup and i am looking forward for my future.
                    <h4>Mikalia ,data scientist</h4>
                </div>

            </div>

            <div class=\"col-md-12 col-lg-4\">
                <span></span>
                <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/HomeImages/student3.png"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                <div>You guys are the gold standard of crash-courses... Narrow enough that it doesn't need years of study or a full blown book to get the gist, but broad enough that an afternoon of Googling doesn't cut it.
                    <h4>Carlos ,Music Composer</h4>
                </div>
            </div>
            <div class=\"container\" id=\"LastTexte\">
                <!-- code here -->
                <div class=\"text-box\">
                    <div id=\"Texte1\" class=\"heading-LastTexte1\">If you join us you'll be the one</div>
                    <div id=\"Texte2\" class=\"heading-LastTexte2\">to share your success story</div>
                </div>
            </div>
            <div class=\"col\"><h1 style=\"margin-bottom: 50px ; color: white;\"></h1></div>
        </div>

    </div>

</section>
<!--/membersStories-->

<!-- Courses -->
<section id=\"courses\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <h1>It is such a unique and reader-friendly site, resources available for learners on <strong>LTC</strong> is well organized and deep</h1>
        </div>

        <div class=\"row\">
            <div class=\"col Option\">
                100+ Classes
            </div>
            <div class=\"col Option\">
                20 Lessons
                Average per class
            </div>
            <div class=\"col Option\">
                a friendly-reader courses
            </div>
        </div>
    </div>
</section>
<!-- Courses -->

<!-- Description Cours -->
<section id=\"descriptionCours\">
    <div class=\"container\">
        <div class=\"container bg\"></div>
        <div class=\"row\">
            <div class=\"col\" id =\"ClasseDescp1\">
                <div class=\"row\" style=\"text-align: center;\">
                <h3 style=\"text-align: center;  color:white\">Faster than videos</h3>

                Videos are holding you back. The average video tutorial is spoken at 150 words per minute, while you can read at 250. That's why our courses are text-based.
            </div>
            <br/>
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><i class=\"fas fa-check-circle\"></i>  Learn at your own pace</li>
                <li class=\"list-group-item\"><i class=\"fas fa-check-circle\"></i>  Highlight text</li>
                <li class=\"list-group-item\"><i class=\"fas fa-check-circle\"></i>  Practice as you learn</li>
            </ul>
        </div>

        <div class=\"col\" id =\"ClasseDescp2\">
            <h3 style=\"text-align: center ; color:white;\"> Classes Description</h3>
            <br/>
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   new classes added monthly</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   remunerated by first class universities</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   PDF workbooks for every class</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   Apply what you learn with  practical projects at your own pace</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   A very motivated community</li>
            </ul>
        </div>
    </div>


    <div class=\"row justify-content-center\">
        <h1>our class categories</h1>
    </div>
    <div class=\"row classCategories \">
        <div class=\"col-lg-3 col-md-12  offset-1\">computer science</div>
        <div class=\"col-lg-3 col-md-12 offset-1\">Business</div>
        <div class=\"col-lg-3 col-md-12 offset-1\"> mathematics and logic</div>


        <div class=\"col-lg-3 col-md-12 offset-1\">Arts & Entertainment</div>
        <div class=\"col-lg-3 col-md-12 offset-1\">Writing</div>
        <div class=\"col-lg-3 col-md-12 offset-1\">Wellness</div>
    </div>
    </div>

</section>
<!-- Description Cours -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_Header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Header"));

        // line 29
        echo "<header>
    <nav class=\"navbar navbar-expand-md navbar-light bg-light scrolled sticky \">
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/SiteName.png"), "html", null, true);
        echo "\" alt=\"WebsiteLogo\" id=\"SiteName\" style=\"width:200px ; height:auto\"  />
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Logohead.png"), "html", null, true);
        echo "\" alt=\"WebsiteLogo\" id=\"Logo\" style=\"width:100px ; height:auto\" />
        </a>

        <button class=\"navbar-toggler collapsed border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavbar\"  aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            <div class=\"close-icon py-1\">✖</div>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
            <ul id=\"navMenu\" class=\"navbar-nav ml-auto\">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li class=\"nav-item actived\">
                    <a href=\"#\">HOME</a>
                </li>
                <li class=\"nav-item\" id = \"header\">
                    <a class=\"nav-link\" href=\"#about_us\" style=\"text-align: center;\">ABOUT US</a>
                </li>
                <li class=\"nav-item\" id = \"header\">
                    <a class=\"nav-link\" href=\"#courses\">COURSES</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
                <li><a class=\"btn-grad\" id=\"LoginIn\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a></li>
                <li><div class=\"wrapper\"><div class =\"SearchBox\"><input placeholder = \"Search\" type=\"text\" class=\"input\">
                            <div class=\"searchbtn\"> <i class=\"fa fa-search\"></i></div>
                        </div></div>
                </li>
            </ul>
        </div>

    </nav>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 299
    public function block_Scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Scripts"));

        // line 300
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!--<script src=\"/node_modules/jquery/dist/cdn/jquery-2.1.3.min.js\"></script>-->
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/HomeScripts/animatingFirstSection.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/HomeScripts/animatingMembersStories.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 311
    public function block_Footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Footer"));

        // line 312
        echo "<footer>
    <div id=\"footer\" class=\"container-fluid\">
        <div class=\"col-12\">
            <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Logohead.png"), "html", null, true);
        echo "\" alt=\"\">
            <div>
                Learn in-demand skills in half the time
            </div>
        </div>

        <div class=\"row offset-1\">
            <div class=\"col\">
                <div class=\"row\"><h3>Learn</h3></div>
                <div class=\"row\"><a href=\"#\"> Courses</a></div>
                <div class=\"row\"><a href=\"#\"> Forum</a></div>
                <div class=\"row\"><a href=\"#\"> Classes </a></div>
                <div class=\"row\"><a href=\"#\"> Tests </a></div>
            </div>
            <div class=\"col\">
                <div class=\"row\"><h3>Legal</h3></div>
                <div class=\"row\"><a href=\"#\"> Privacy Policy </a></div>
                <div class=\"row\"><a href=\"#\"> Terms of service </a></div>

            </div>
            <div class=\"col\">
                <div class=\"row\"><h3>More</h3></div>
                <div class=\"row\"><a href=\"#\"> Our team</a></div>
                <div class=\"row\"><a href=\"#\"> for bootcamps</a> </div>
                <div class=\"row\"><a href=\"#\"> FAQ </a></div>
                <div class=\"row\"><a href=\"#\"> Contact Us </a></div>
            </div>
        </div>
        <div class=\"row contactUsIcons justify-content-between\">
            <div class=\"col-4\">
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/envelope-fill.svg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/facebook.svg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/linkedin.svg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/instagram.svg"), "html", null, true);
        echo "\" alt=\"\">
                </a>

            </div>
            <div class=\"col-4\">
                Copyright ©2021 Educative, Inc. All rights reserved

            </div>
        </div>
    </div>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 355,  635 => 352,  629 => 349,  623 => 346,  589 => 315,  584 => 312,  574 => 311,  562 => 304,  558 => 303,  554 => 302,  548 => 300,  538 => 299,  517 => 60,  487 => 33,  483 => 32,  478 => 29,  468 => 28,  364 => 204,  349 => 192,  338 => 184,  327 => 176,  302 => 154,  298 => 153,  294 => 152,  286 => 147,  282 => 146,  278 => 145,  268 => 138,  254 => 127,  247 => 123,  235 => 114,  196 => 78,  187 => 71,  185 => 28,  179 => 24,  169 => 23,  150 => 20,  138 => 18,  134 => 17,  130 => 16,  126 => 15,  121 => 14,  111 => 13,  100 => 367,  98 => 311,  91 => 306,  89 => 299,  86 => 298,  84 => 23,  77 => 20,  75 => 13,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head style=\"border-left-width: 0 ; border-left-style: solid;\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"{{ asset('images/Commun/Logohead.png') }}\">
    <script defer src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/brands.js') }}\"></script>
    <script defer src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/solid.js') }}\"></script>
    <script defer src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/fontawesome.js') }}\"></script>

    {% block StyleSheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/Style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/home/styleAboutUs.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/home/membersStories.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/home/learningPath.css') }}\">
    {% endblock %}
    <title> {% block Title %}LTC- Learn To Create{% endblock %}</title>
</head>

{% block Body %}
<body>

<!-- The Nav bar -->
<!--Header -->
{% block Header %}
<header>
    <nav class=\"navbar navbar-expand-md navbar-light bg-light scrolled sticky \">
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"{{ asset('images/Commun/SiteName.png')}}\" alt=\"WebsiteLogo\" id=\"SiteName\" style=\"width:200px ; height:auto\"  />
            <img src=\"{{ asset('images/Commun/Logohead.png')}}\" alt=\"WebsiteLogo\" id=\"Logo\" style=\"width:100px ; height:auto\" />
        </a>

        <button class=\"navbar-toggler collapsed border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavbar\"  aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            <div class=\"close-icon py-1\">✖</div>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
            <ul id=\"navMenu\" class=\"navbar-nav ml-auto\">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li class=\"nav-item actived\">
                    <a href=\"#\">HOME</a>
                </li>
                <li class=\"nav-item\" id = \"header\">
                    <a class=\"nav-link\" href=\"#about_us\" style=\"text-align: center;\">ABOUT US</a>
                </li>
                <li class=\"nav-item\" id = \"header\">
                    <a class=\"nav-link\" href=\"#courses\">COURSES</a>
                </li>
                <li></li>
                <li></li>
                <li></li>
                <li><a class=\"btn-grad\" id=\"LoginIn\" href=\"{{ path('app_login') }}\">Login</a></li>
                <li><div class=\"wrapper\"><div class =\"SearchBox\"><input placeholder = \"Search\" type=\"text\" class=\"input\">
                            <div class=\"searchbtn\"> <i class=\"fa fa-search\"></i></div>
                        </div></div>
                </li>
            </ul>
        </div>

    </nav>
</header>
{% endblock %}
<!--/Header -->


<!--First section -->
<div id=\"firstSection\" class=\"container cover\">
    <h1 class=\"cover-heading\">Build Something big with us</h1>
    <p class=\"lead\">Want to start learning and creating your awesome projects ?</p>
    <a href=\"{{ path('app_login') }}\" class=\"btn btn-lg btn-secondary\">Take A Course Now</a>
</div>
<!--/First section -->

<!-- Increasing Numbers -->
<div id=\"Numbers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-user-graduate\"></i><br/></span>
                <div class=\"Number\">4356</div>
                <span class=\"Numbers-label\">students</span>
            </div>
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-book-open\"></i><br/></span>
                <div class=\"Number\">457</div>
                <span class=\"Numbers-label\">courses</span>
            </div>
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-chalkboard-teacher\"></i><br/></span>
                <div class=\"Number\">123</div>
                <span class=\"Numbers-label\">instructors</span>
            </div>
            <div class=\"col-md-3 text-center animate-box\">
                <span class=\"Numbericon\"><i class=\"fas fa-globe-africa\"></i><br/></span>
                <div class=\"Number\">24</div>
                <span class=\"Numbers-label\">countries</span>
            </div>
        </div>
    </div>
</div>
<!-- /Increasing Numbers -->


<!-- About us -->
<section id=\"about_us\" >
    <div class=\"container-fluid\" style=\"background-image: url({{ asset('images/Commun/Background/WebHomeEdit.jpg')}});\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-6\">
                    <div class=\"row \">

                        Our partners with more than 200 leading universities and companies to bring flexible, affordable, job-relevant online learning to individuals and organizations worldwide. We offer a range of learning opportunities—from hands-on projects and courses to job-ready certificates and degree programs.
                    </div>
                    <div class=\"row justify-content-center\">
                        <a href=\"{{path('app_login')}}\" class=\"btn btn-lg btn-secondary\" style=\"font-weight: bold;\"> login for free </a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <img src=\"{{ asset('images/HomeImages/students.webp')}}\" class=\"img-student\" alt=\"student images\">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About us -->

<!-- collaborators -->
<section id=\"collaborators\" style=\"max-height: 1000px;\">
    <div class=\"container\" id=\"CollaboratorContainer\">
        <h1 style=\"font-size:50px;background-image: url({{ asset('images/Commun/Background/Background.jpg')}});\"> Our main collaborators ...</h1>

        <div class=\"collaborators carousel\" >
            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"row\">
                            <div class=\"col\"> <img src=\"{{ asset('images/HomeImages/icons/duke.webp')}}\" alt=\"\" > </div>
                            <div class=\"col\"><img src=\"{{ asset('images/HomeImages/icons/google.png')}}\" alt=\"\" ></div>
                            <div class=\"col\"><img src=\"{{ asset('images/HomeImages/icons/ibm.webp')}}\" alt=\"\" ></div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"row\">
                            <div class=\"col\"><img  src=\"{{ asset('images/HomeImages/icons/illinois.webp')}}\" alt=\"\" ></div>
                            <div class=\"col\"> <img  src=\"{{ asset('images/HomeImages/icons/stanford.webp')}}\" alt=\"\" ></div>
                            <div class=\"col-carre\"> <img src=\"{{ asset('images/HomeImages/icons/insat.jpg')}}\" alt=\"carre\" ></div>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </div>

</section>
<!--/collaborators-->


<!--membersStories-->
<section  id=\"membersStories\" style=\"background-image: url({{ asset('images/Commun/Background/Background.jpg')}});\">

    <h1 class=\"heading\"> <strong> Our students talking about us </strong></h1>
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12 col-lg-4\">
                <span></span>
                <img src=\"{{ asset('images/HomeImages/student1.png')}}\" class=\"img-thumbnail\" alt=\"\">
                <div>Your courses are simply awesome, the depth they go into and the breadth of coverage is so good that I don't have to refer to 10 different websites looking for interview topics and content.
                    <h4>Souvuk ,front-end developer</h4>
                </div>
            </div>

            <div class=\"col-md-12 col-lg-4\">
                <span></span>
                <img src=\"{{ asset('images/HomeImages/student2.png')}}\" class=\"img-thumbnail\" alt=\"\">

                <div>“LTC's class gave me a positive push to continue to work, . More classes later,
                    each instructor has inspired me in a different way to be the best version of myself.”
                    Now , i am establishing my own startup and i am looking forward for my future.
                    <h4>Mikalia ,data scientist</h4>
                </div>

            </div>

            <div class=\"col-md-12 col-lg-4\">
                <span></span>
                <img src=\"{{ asset('images/HomeImages/student3.png')}}\" class=\"img-thumbnail\" alt=\"\">
                <div>You guys are the gold standard of crash-courses... Narrow enough that it doesn't need years of study or a full blown book to get the gist, but broad enough that an afternoon of Googling doesn't cut it.
                    <h4>Carlos ,Music Composer</h4>
                </div>
            </div>
            <div class=\"container\" id=\"LastTexte\">
                <!-- code here -->
                <div class=\"text-box\">
                    <div id=\"Texte1\" class=\"heading-LastTexte1\">If you join us you'll be the one</div>
                    <div id=\"Texte2\" class=\"heading-LastTexte2\">to share your success story</div>
                </div>
            </div>
            <div class=\"col\"><h1 style=\"margin-bottom: 50px ; color: white;\"></h1></div>
        </div>

    </div>

</section>
<!--/membersStories-->

<!-- Courses -->
<section id=\"courses\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <h1>It is such a unique and reader-friendly site, resources available for learners on <strong>LTC</strong> is well organized and deep</h1>
        </div>

        <div class=\"row\">
            <div class=\"col Option\">
                100+ Classes
            </div>
            <div class=\"col Option\">
                20 Lessons
                Average per class
            </div>
            <div class=\"col Option\">
                a friendly-reader courses
            </div>
        </div>
    </div>
</section>
<!-- Courses -->

<!-- Description Cours -->
<section id=\"descriptionCours\">
    <div class=\"container\">
        <div class=\"container bg\"></div>
        <div class=\"row\">
            <div class=\"col\" id =\"ClasseDescp1\">
                <div class=\"row\" style=\"text-align: center;\">
                <h3 style=\"text-align: center;  color:white\">Faster than videos</h3>

                Videos are holding you back. The average video tutorial is spoken at 150 words per minute, while you can read at 250. That's why our courses are text-based.
            </div>
            <br/>
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><i class=\"fas fa-check-circle\"></i>  Learn at your own pace</li>
                <li class=\"list-group-item\"><i class=\"fas fa-check-circle\"></i>  Highlight text</li>
                <li class=\"list-group-item\"><i class=\"fas fa-check-circle\"></i>  Practice as you learn</li>
            </ul>
        </div>

        <div class=\"col\" id =\"ClasseDescp2\">
            <h3 style=\"text-align: center ; color:white;\"> Classes Description</h3>
            <br/>
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   new classes added monthly</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   remunerated by first class universities</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   PDF workbooks for every class</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   Apply what you learn with  practical projects at your own pace</li>
                <li class=\"list-group-item\"><i class=\"fas fa-star\"></i>   A very motivated community</li>
            </ul>
        </div>
    </div>


    <div class=\"row justify-content-center\">
        <h1>our class categories</h1>
    </div>
    <div class=\"row classCategories \">
        <div class=\"col-lg-3 col-md-12  offset-1\">computer science</div>
        <div class=\"col-lg-3 col-md-12 offset-1\">Business</div>
        <div class=\"col-lg-3 col-md-12 offset-1\"> mathematics and logic</div>


        <div class=\"col-lg-3 col-md-12 offset-1\">Arts & Entertainment</div>
        <div class=\"col-lg-3 col-md-12 offset-1\">Writing</div>
        <div class=\"col-lg-3 col-md-12 offset-1\">Wellness</div>
    </div>
    </div>

</section>
<!-- Description Cours -->
{% endblock %}

{% block Scripts %}
<script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js')}}\"></script>
<!--<script src=\"/node_modules/jquery/dist/cdn/jquery-2.1.3.min.js\"></script>-->
<script src=\"{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('Scripts/HomeScripts/animatingFirstSection.js')}}\"></script>
<script src=\"{{ asset('Scripts/HomeScripts/animatingMembersStories.js')}}\"></script>
{% endblock %}


</body>


{% block Footer %}
<footer>
    <div id=\"footer\" class=\"container-fluid\">
        <div class=\"col-12\">
            <img src=\"{{ asset('images/Commun/Logohead.png')}}\" alt=\"\">
            <div>
                Learn in-demand skills in half the time
            </div>
        </div>

        <div class=\"row offset-1\">
            <div class=\"col\">
                <div class=\"row\"><h3>Learn</h3></div>
                <div class=\"row\"><a href=\"#\"> Courses</a></div>
                <div class=\"row\"><a href=\"#\"> Forum</a></div>
                <div class=\"row\"><a href=\"#\"> Classes </a></div>
                <div class=\"row\"><a href=\"#\"> Tests </a></div>
            </div>
            <div class=\"col\">
                <div class=\"row\"><h3>Legal</h3></div>
                <div class=\"row\"><a href=\"#\"> Privacy Policy </a></div>
                <div class=\"row\"><a href=\"#\"> Terms of service </a></div>

            </div>
            <div class=\"col\">
                <div class=\"row\"><h3>More</h3></div>
                <div class=\"row\"><a href=\"#\"> Our team</a></div>
                <div class=\"row\"><a href=\"#\"> for bootcamps</a> </div>
                <div class=\"row\"><a href=\"#\"> FAQ </a></div>
                <div class=\"row\"><a href=\"#\"> Contact Us </a></div>
            </div>
        </div>
        <div class=\"row contactUsIcons justify-content-between\">
            <div class=\"col-4\">
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/envelope-fill.svg')}}\" alt=\"\">
                </a>
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/facebook.svg')}}\" alt=\"\">
                </a>
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/linkedin.svg')}}\" alt=\"\">
                </a>
                <a href=\"\">
                    <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/instagram.svg')}}\" alt=\"\">
                </a>

            </div>
            <div class=\"col-4\">
                Copyright ©2021 Educative, Inc. All rights reserved

            </div>
        </div>
    </div>
</footer>
{% endblock %}
</html>
", "home.html.twig", "D:\\XAMPP\\htdocs\\projetWeb\\templates\\home.html.twig");
    }
}
