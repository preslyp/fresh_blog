<?php

/* ::header.html.twig */
class __TwigTemplate_43c1530be0c99316cc2105652a9906cba326d49ab017362e85e8682458657714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c544691d4819007cab302b204b595e0f422670327f0967dd9bdf0d53827a746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c544691d4819007cab302b204b595e0f422670327f0967dd9bdf0d53827a746->enter($__internal_5c544691d4819007cab302b204b595e0f422670327f0967dd9bdf0d53827a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        $__internal_aa9b35cf7db8585f246f2b8f9b96ff40ce715a751837493b3a3e02d0945812aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9b35cf7db8585f246f2b8f9b96ff40ce715a751837493b3a3e02d0945812aa->enter($__internal_aa9b35cf7db8585f246f2b8f9b96ff40ce715a751837493b3a3e02d0945812aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "<div class=\"fix header_area\">
    <div class=\"fix wrap header\">
        <div class=\"logo floatleft\">
            <h1>Fresh Blog</h1>
        </div>
        <div class=\"manu floatright\">
            <ul id=\"nav-top\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"single.html\">single</a></li>
                <li><a href=\"about.html\">about</a></li>
                <li><a href=\"contact.html\">contact</a></li>
            </ul>
        </div>
    </div>
</div>";
        
        $__internal_5c544691d4819007cab302b204b595e0f422670327f0967dd9bdf0d53827a746->leave($__internal_5c544691d4819007cab302b204b595e0f422670327f0967dd9bdf0d53827a746_prof);

        
        $__internal_aa9b35cf7db8585f246f2b8f9b96ff40ce715a751837493b3a3e02d0945812aa->leave($__internal_aa9b35cf7db8585f246f2b8f9b96ff40ce715a751837493b3a3e02d0945812aa_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fix header_area\">
    <div class=\"fix wrap header\">
        <div class=\"logo floatleft\">
            <h1>Fresh Blog</h1>
        </div>
        <div class=\"manu floatright\">
            <ul id=\"nav-top\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"single.html\">single</a></li>
                <li><a href=\"about.html\">about</a></li>
                <li><a href=\"contact.html\">contact</a></li>
            </ul>
        </div>
    </div>
</div>", "::header.html.twig", "/var/www/html/freshblog/app/Resources/views/header.html.twig");
    }
}
