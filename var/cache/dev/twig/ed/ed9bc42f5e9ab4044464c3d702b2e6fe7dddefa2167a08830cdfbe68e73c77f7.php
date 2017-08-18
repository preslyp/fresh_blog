<?php

/* BlogBundle:Default:article.html.twig */
class __TwigTemplate_29fc22367bb7481b2d748d83a178f72d69361942a11164e9ff89d479bb477ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Default:article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d059ef15441071e3c96f53cd716b3d4bccbadd5e59e6c3d8771cf3f9689c974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d059ef15441071e3c96f53cd716b3d4bccbadd5e59e6c3d8771cf3f9689c974->enter($__internal_9d059ef15441071e3c96f53cd716b3d4bccbadd5e59e6c3d8771cf3f9689c974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:article.html.twig"));

        $__internal_927136097eb7109d143d10d16688291f0e858dfeb4a0fdd9ccf24d7f739118a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927136097eb7109d143d10d16688291f0e858dfeb4a0fdd9ccf24d7f739118a7->enter($__internal_927136097eb7109d143d10d16688291f0e858dfeb4a0fdd9ccf24d7f739118a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d059ef15441071e3c96f53cd716b3d4bccbadd5e59e6c3d8771cf3f9689c974->leave($__internal_9d059ef15441071e3c96f53cd716b3d4bccbadd5e59e6c3d8771cf3f9689c974_prof);

        
        $__internal_927136097eb7109d143d10d16688291f0e858dfeb4a0fdd9ccf24d7f739118a7->leave($__internal_927136097eb7109d143d10d16688291f0e858dfeb4a0fdd9ccf24d7f739118a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccfcb692b5dc8435abc91415a6b33194d8f5b795db9b1afc67ee17baabefd100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfcb692b5dc8435abc91415a6b33194d8f5b795db9b1afc67ee17baabefd100->enter($__internal_ccfcb692b5dc8435abc91415a6b33194d8f5b795db9b1afc67ee17baabefd100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ed04f61ea412f8e6c7a08ad23f5d681fa0ba2b54dcf25add85bebbbfa505dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed04f61ea412f8e6c7a08ad23f5d681fa0ba2b54dcf25add85bebbbfa505dd0->enter($__internal_5ed04f61ea412f8e6c7a08ad23f5d681fa0ba2b54dcf25add85bebbbfa505dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo " ";
        
        $__internal_5ed04f61ea412f8e6c7a08ad23f5d681fa0ba2b54dcf25add85bebbbfa505dd0->leave($__internal_5ed04f61ea412f8e6c7a08ad23f5d681fa0ba2b54dcf25add85bebbbfa505dd0_prof);

        
        $__internal_ccfcb692b5dc8435abc91415a6b33194d8f5b795db9b1afc67ee17baabefd100->leave($__internal_ccfcb692b5dc8435abc91415a6b33194d8f5b795db9b1afc67ee17baabefd100_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5768957f5ea421aac3b7946300e2724c61e946f1abd803cde6afb76531858692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5768957f5ea421aac3b7946300e2724c61e946f1abd803cde6afb76531858692->enter($__internal_5768957f5ea421aac3b7946300e2724c61e946f1abd803cde6afb76531858692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_131a7258a7b5b74c6e8722a4c2e3bba917e9bc1ad1dada7ce74a3bcd476c28c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131a7258a7b5b74c6e8722a4c2e3bba917e9bc1ad1dada7ce74a3bcd476c28c8->enter($__internal_131a7258a7b5b74c6e8722a4c2e3bba917e9bc1ad1dada7ce74a3bcd476c28c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <style>
        .single_content_wrapper {
            padding:30px;
        }

        .single_content_wrapper h1 {
            margin-bottom:20px;
        }


    </style>

";
        
        $__internal_131a7258a7b5b74c6e8722a4c2e3bba917e9bc1ad1dada7ce74a3bcd476c28c8->leave($__internal_131a7258a7b5b74c6e8722a4c2e3bba917e9bc1ad1dada7ce74a3bcd476c28c8_prof);

        
        $__internal_5768957f5ea421aac3b7946300e2724c61e946f1abd803cde6afb76531858692->leave($__internal_5768957f5ea421aac3b7946300e2724c61e946f1abd803cde6afb76531858692_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_e67b65702339ec96c846213cf4e56bc17af2d24fceef5ff13169aad2338cd108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67b65702339ec96c846213cf4e56bc17af2d24fceef5ff13169aad2338cd108->enter($__internal_e67b65702339ec96c846213cf4e56bc17af2d24fceef5ff13169aad2338cd108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7bb1d9ee05b5cc2ac4015a08120a45e5243adb05eb8f63c8dffb094a5f5b89d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb1d9ee05b5cc2ac4015a08120a45e5243adb05eb8f63c8dffb094a5f5b89d9->enter($__internal_7bb1d9ee05b5cc2ac4015a08120a45e5243adb05eb8f63c8dffb094a5f5b89d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "
";
        
        $__internal_7bb1d9ee05b5cc2ac4015a08120a45e5243adb05eb8f63c8dffb094a5f5b89d9->leave($__internal_7bb1d9ee05b5cc2ac4015a08120a45e5243adb05eb8f63c8dffb094a5f5b89d9_prof);

        
        $__internal_e67b65702339ec96c846213cf4e56bc17af2d24fceef5ff13169aad2338cd108->leave($__internal_e67b65702339ec96c846213cf4e56bc17af2d24fceef5ff13169aad2338cd108_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff174d88cc206b0a6952994d0d7aaaf41e545ce1d2a13c6216d56525a48ed00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff174d88cc206b0a6952994d0d7aaaf41e545ce1d2a13c6216d56525a48ed00->enter($__internal_1ff174d88cc206b0a6952994d0d7aaaf41e545ce1d2a13c6216d56525a48ed00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ba5dcc964c11758c3ce005eb0729ac70e7cd2d061bf1452117bbf872d345d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba5dcc964c11758c3ce005eb0729ac70e7cd2d061bf1452117bbf872d345d2c->enter($__internal_3ba5dcc964c11758c3ce005eb0729ac70e7cd2d061bf1452117bbf872d345d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "    <div class=\"fix content_area\">

        ";
        // line 28
        echo twig_include($this->env, $context, "::submenu.html.twig");
        echo "

        <div class=\"fix wrap content_wrapper\">
            <div class=\"fix content\">
                <div class=\"fix main_content floatleft\">
                    <div class=\"fix single_content_wrapper\">

                        <h1>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 35, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 35, $this->getSourceContext()); })()), "createdAt", array()), "Y/m/d H:i:s"), "html", null, true);
        echo "</h1>

                        <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 37, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</p>

                        <p>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 39, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</p>

                    </div>
                </div>
                ";
        // line 43
        echo twig_include($this->env, $context, "::sidebar.html.twig");
        echo "
            </div>


        </div>

        <div class=\"fix bottom_add_bar\">
            <div class=\"addbar_leaderborard\"><img src=\"http://placehold.it/728x90\"/></div>
        </div>

    </div>
";
        
        $__internal_3ba5dcc964c11758c3ce005eb0729ac70e7cd2d061bf1452117bbf872d345d2c->leave($__internal_3ba5dcc964c11758c3ce005eb0729ac70e7cd2d061bf1452117bbf872d345d2c_prof);

        
        $__internal_1ff174d88cc206b0a6952994d0d7aaaf41e545ce1d2a13c6216d56525a48ed00->leave($__internal_1ff174d88cc206b0a6952994d0d7aaaf41e545ce1d2a13c6216d56525a48ed00_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9933252d9b5aadb0180ab008990b50b1476be3d25155b5e07aae3cdf6fccab78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9933252d9b5aadb0180ab008990b50b1476be3d25155b5e07aae3cdf6fccab78->enter($__internal_9933252d9b5aadb0180ab008990b50b1476be3d25155b5e07aae3cdf6fccab78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_75c1dfb2c3c9ffa6cb39cef9884fce4e4c82b9beb43e4194a85353a760fb534e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c1dfb2c3c9ffa6cb39cef9884fce4e4c82b9beb43e4194a85353a760fb534e->enter($__internal_75c1dfb2c3c9ffa6cb39cef9884fce4e4c82b9beb43e4194a85353a760fb534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "    ";
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
";
        
        $__internal_75c1dfb2c3c9ffa6cb39cef9884fce4e4c82b9beb43e4194a85353a760fb534e->leave($__internal_75c1dfb2c3c9ffa6cb39cef9884fce4e4c82b9beb43e4194a85353a760fb534e_prof);

        
        $__internal_9933252d9b5aadb0180ab008990b50b1476be3d25155b5e07aae3cdf6fccab78->leave($__internal_9933252d9b5aadb0180ab008990b50b1476be3d25155b5e07aae3cdf6fccab78_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b027b987d68b9a9ba39fe18d6805bc2904c4de97dad49fbb0a5abc5c7ef6caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b027b987d68b9a9ba39fe18d6805bc2904c4de97dad49fbb0a5abc5c7ef6caf->enter($__internal_1b027b987d68b9a9ba39fe18d6805bc2904c4de97dad49fbb0a5abc5c7ef6caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ea4d008fb12bd6dc3dcba53be4696a2f22ead9475b4ffc8abc17585221afe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea4d008fb12bd6dc3dcba53be4696a2f22ead9475b4ffc8abc17585221afe59->enter($__internal_9ea4d008fb12bd6dc3dcba53be4696a2f22ead9475b4ffc8abc17585221afe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ea4d008fb12bd6dc3dcba53be4696a2f22ead9475b4ffc8abc17585221afe59->leave($__internal_9ea4d008fb12bd6dc3dcba53be4696a2f22ead9475b4ffc8abc17585221afe59_prof);

        
        $__internal_1b027b987d68b9a9ba39fe18d6805bc2904c4de97dad49fbb0a5abc5c7ef6caf->leave($__internal_1b027b987d68b9a9ba39fe18d6805bc2904c4de97dad49fbb0a5abc5c7ef6caf_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 60,  192 => 57,  183 => 56,  161 => 43,  154 => 39,  149 => 37,  142 => 35,  132 => 28,  128 => 26,  119 => 25,  106 => 22,  97 => 21,  74 => 6,  65 => 5,  45 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig'%}

{% block title %} {{ article.title }} {% endblock %}

{% block stylesheets %}

    <style>
        .single_content_wrapper {
            padding:30px;
        }

        .single_content_wrapper h1 {
            margin-bottom:20px;
        }


    </style>

{% endblock %}

{% block header %}
    {{ include(\"::header.html.twig\") }}
{% endblock %}

{% block body %}
    <div class=\"fix content_area\">

        {{ include(\"::submenu.html.twig\") }}

        <div class=\"fix wrap content_wrapper\">
            <div class=\"fix content\">
                <div class=\"fix main_content floatleft\">
                    <div class=\"fix single_content_wrapper\">

                        <h1>{{ article.title }}, {{ article.createdAt | date('Y/m/d H:i:s') }}</h1>

                        <p>{{ article.description }}</p>

                        <p>{{ article.content }}</p>

                    </div>
                </div>
                {{ include(\"::sidebar.html.twig\") }}
            </div>


        </div>

        <div class=\"fix bottom_add_bar\">
            <div class=\"addbar_leaderborard\"><img src=\"http://placehold.it/728x90\"/></div>
        </div>

    </div>
{% endblock %}

{% block footer %}
    {{ include(\"::footer.html.twig\") }}
{% endblock %}

{% block javascripts %}
{% endblock %}", "BlogBundle:Default:article.html.twig", "/var/www/html/freshblog/src/BlogBundle/Resources/views/Default/article.html.twig");
    }
}
