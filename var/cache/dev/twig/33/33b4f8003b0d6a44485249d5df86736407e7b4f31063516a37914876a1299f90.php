<?php

/* ::article.html.twig */
class __TwigTemplate_00b0637baebddf0ba99e360efc44aa3bd670034eab73272fbf6d66ecfbb7aa3f extends Twig_Template
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
        $__internal_081a32e7969828f0ca028a6701d221ce647fdf7ae7a71faabe29c0607840f014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081a32e7969828f0ca028a6701d221ce647fdf7ae7a71faabe29c0607840f014->enter($__internal_081a32e7969828f0ca028a6701d221ce647fdf7ae7a71faabe29c0607840f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::article.html.twig"));

        $__internal_bdb18c9f6c76c6cf1f4dba1cda114bdd9d0ed100bc39d804b325f908ba4da69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb18c9f6c76c6cf1f4dba1cda114bdd9d0ed100bc39d804b325f908ba4da69b->enter($__internal_bdb18c9f6c76c6cf1f4dba1cda114bdd9d0ed100bc39d804b325f908ba4da69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::article.html.twig"));

        // line 1
        echo "<div class=\"fix single_content floatleft\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/home_featured.png"), "html", null, true);
        echo "\" alt=\"\"/>
    <div class=\"fix single_content_info\">
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 4, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h1>
        <p class=\"author\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 5, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 6, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</p>
        <div class=\"fix post-meta\">
            <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 8, $this->getSourceContext()); })()), "createdAt", array()), "d M Y"), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>";
        
        $__internal_081a32e7969828f0ca028a6701d221ce647fdf7ae7a71faabe29c0607840f014->leave($__internal_081a32e7969828f0ca028a6701d221ce647fdf7ae7a71faabe29c0607840f014_prof);

        
        $__internal_bdb18c9f6c76c6cf1f4dba1cda114bdd9d0ed100bc39d804b325f908ba4da69b->leave($__internal_bdb18c9f6c76c6cf1f4dba1cda114bdd9d0ed100bc39d804b325f908ba4da69b_prof);

    }

    public function getTemplateName()
    {
        return "::article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  41 => 6,  37 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fix single_content floatleft\">
    <img src=\"{{ asset('images/home_featured.png') }}\" alt=\"\"/>
    <div class=\"fix single_content_info\">
        <h1>{{ article.title }}</h1>
        <p class=\"author\">{{ article.description }}</p>
        <p>{{ article.content }}</p>
        <div class=\"fix post-meta\">
            <p>{{ article.createdAt|date('d M Y')}}</p>
        </div>
    </div>
</div>", "::article.html.twig", "/var/www/html/freshblog/app/Resources/views/article.html.twig");
    }
}
