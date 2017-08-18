<?php

/* ::base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cc1bb523cf1851a4e13e0ac59ddbf0d5519fb264e4fd7acb4aae5befdeb867e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc1bb523cf1851a4e13e0ac59ddbf0d5519fb264e4fd7acb4aae5befdeb867e->enter($__internal_9cc1bb523cf1851a4e13e0ac59ddbf0d5519fb264e4fd7acb4aae5befdeb867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9b108fb04e55e4d10607d537eb2fe4491f42d49b359d775d925c708ae51a49dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b108fb04e55e4d10607d537eb2fe4491f42d49b359d775d925c708ae51a49dd->enter($__internal_9b108fb04e55e4d10607d537eb2fe4491f42d49b359d775d925c708ae51a49dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font/font.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
</head>
<body>

";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "

";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "

<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/placeholder_support_IE.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/selectnav.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    selectnav('nav-top', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });

    selectnav('nav-bottom', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
</script>
<script src=\"http://code.jquery.com/jquery.js\" type=\"text/javascript\"></script>

";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "
</body>
</html>
";
        
        $__internal_9cc1bb523cf1851a4e13e0ac59ddbf0d5519fb264e4fd7acb4aae5befdeb867e->leave($__internal_9cc1bb523cf1851a4e13e0ac59ddbf0d5519fb264e4fd7acb4aae5befdeb867e_prof);

        
        $__internal_9b108fb04e55e4d10607d537eb2fe4491f42d49b359d775d925c708ae51a49dd->leave($__internal_9b108fb04e55e4d10607d537eb2fe4491f42d49b359d775d925c708ae51a49dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d67abb05448bf94050ec1a364ce3d8d3963c0f4b362977862962776bba6dca31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67abb05448bf94050ec1a364ce3d8d3963c0f4b362977862962776bba6dca31->enter($__internal_d67abb05448bf94050ec1a364ce3d8d3963c0f4b362977862962776bba6dca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e31d50f1632155901e0515063c5482a7aeb1c80b3bfbd4decfe1f07a881f4014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31d50f1632155901e0515063c5482a7aeb1c80b3bfbd4decfe1f07a881f4014->enter($__internal_e31d50f1632155901e0515063c5482a7aeb1c80b3bfbd4decfe1f07a881f4014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Blog title ";
        
        $__internal_e31d50f1632155901e0515063c5482a7aeb1c80b3bfbd4decfe1f07a881f4014->leave($__internal_e31d50f1632155901e0515063c5482a7aeb1c80b3bfbd4decfe1f07a881f4014_prof);

        
        $__internal_d67abb05448bf94050ec1a364ce3d8d3963c0f4b362977862962776bba6dca31->leave($__internal_d67abb05448bf94050ec1a364ce3d8d3963c0f4b362977862962776bba6dca31_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed885e0d0c420fd4b8ec52e7033af808ee7eb6771c153917428f0d46520b61ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed885e0d0c420fd4b8ec52e7033af808ee7eb6771c153917428f0d46520b61ab->enter($__internal_ed885e0d0c420fd4b8ec52e7033af808ee7eb6771c153917428f0d46520b61ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b3e84dc698e8c3b857c9dbc9d0b014c28237d2631b2ec7bb4ee1fd06dc583197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e84dc698e8c3b857c9dbc9d0b014c28237d2631b2ec7bb4ee1fd06dc583197->enter($__internal_b3e84dc698e8c3b857c9dbc9d0b014c28237d2631b2ec7bb4ee1fd06dc583197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    ";
        
        $__internal_b3e84dc698e8c3b857c9dbc9d0b014c28237d2631b2ec7bb4ee1fd06dc583197->leave($__internal_b3e84dc698e8c3b857c9dbc9d0b014c28237d2631b2ec7bb4ee1fd06dc583197_prof);

        
        $__internal_ed885e0d0c420fd4b8ec52e7033af808ee7eb6771c153917428f0d46520b61ab->leave($__internal_ed885e0d0c420fd4b8ec52e7033af808ee7eb6771c153917428f0d46520b61ab_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_425f1cfa47d034f77b8781ccf1cb6afe3f7c2c52eaa0b0bda149860d35eb7f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425f1cfa47d034f77b8781ccf1cb6afe3f7c2c52eaa0b0bda149860d35eb7f40->enter($__internal_425f1cfa47d034f77b8781ccf1cb6afe3f7c2c52eaa0b0bda149860d35eb7f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8c6a36bb0a1a5dffb4b22cc5cb425ad95e93ff8ac53e3badb2f1438b25ad177f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6a36bb0a1a5dffb4b22cc5cb425ad95e93ff8ac53e3badb2f1438b25ad177f->enter($__internal_8c6a36bb0a1a5dffb4b22cc5cb425ad95e93ff8ac53e3badb2f1438b25ad177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_8c6a36bb0a1a5dffb4b22cc5cb425ad95e93ff8ac53e3badb2f1438b25ad177f->leave($__internal_8c6a36bb0a1a5dffb4b22cc5cb425ad95e93ff8ac53e3badb2f1438b25ad177f_prof);

        
        $__internal_425f1cfa47d034f77b8781ccf1cb6afe3f7c2c52eaa0b0bda149860d35eb7f40->leave($__internal_425f1cfa47d034f77b8781ccf1cb6afe3f7c2c52eaa0b0bda149860d35eb7f40_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a0c984f0b4f592a14766441ece43c996391ba6d2c501fdefcd9efdf9adef9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0c984f0b4f592a14766441ece43c996391ba6d2c501fdefcd9efdf9adef9e7->enter($__internal_9a0c984f0b4f592a14766441ece43c996391ba6d2c501fdefcd9efdf9adef9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d36152ab44cc48c62f9d31b69cb5ab4611219a13289679f9c0db943fd27c82b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36152ab44cc48c62f9d31b69cb5ab4611219a13289679f9c0db943fd27c82b5->enter($__internal_d36152ab44cc48c62f9d31b69cb5ab4611219a13289679f9c0db943fd27c82b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d36152ab44cc48c62f9d31b69cb5ab4611219a13289679f9c0db943fd27c82b5->leave($__internal_d36152ab44cc48c62f9d31b69cb5ab4611219a13289679f9c0db943fd27c82b5_prof);

        
        $__internal_9a0c984f0b4f592a14766441ece43c996391ba6d2c501fdefcd9efdf9adef9e7->leave($__internal_9a0c984f0b4f592a14766441ece43c996391ba6d2c501fdefcd9efdf9adef9e7_prof);

    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ef337a19f2e61309b2a98786bf22182ae04a23f7667828014bcb7d13eba51888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef337a19f2e61309b2a98786bf22182ae04a23f7667828014bcb7d13eba51888->enter($__internal_ef337a19f2e61309b2a98786bf22182ae04a23f7667828014bcb7d13eba51888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_142fd206b87b7c1d7cfb9e6b5a41288a9bd1f6785fc246b09e1b8071b81760d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142fd206b87b7c1d7cfb9e6b5a41288a9bd1f6785fc246b09e1b8071b81760d4->enter($__internal_142fd206b87b7c1d7cfb9e6b5a41288a9bd1f6785fc246b09e1b8071b81760d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_142fd206b87b7c1d7cfb9e6b5a41288a9bd1f6785fc246b09e1b8071b81760d4->leave($__internal_142fd206b87b7c1d7cfb9e6b5a41288a9bd1f6785fc246b09e1b8071b81760d4_prof);

        
        $__internal_ef337a19f2e61309b2a98786bf22182ae04a23f7667828014bcb7d13eba51888->leave($__internal_ef337a19f2e61309b2a98786bf22182ae04a23f7667828014bcb7d13eba51888_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_936f30ab056ee2d1db1e8a5f37743369c18a4f73b848d8c1ca9078c1dde07d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936f30ab056ee2d1db1e8a5f37743369c18a4f73b848d8c1ca9078c1dde07d05->enter($__internal_936f30ab056ee2d1db1e8a5f37743369c18a4f73b848d8c1ca9078c1dde07d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e8264cfcee0b73234c23f215b0fa79756bf4b2ebf2c9f4bc9b7a5c7fdfac5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8264cfcee0b73234c23f215b0fa79756bf4b2ebf2c9f4bc9b7a5c7fdfac5c9->enter($__internal_4e8264cfcee0b73234c23f215b0fa79756bf4b2ebf2c9f4bc9b7a5c7fdfac5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e8264cfcee0b73234c23f215b0fa79756bf4b2ebf2c9f4bc9b7a5c7fdfac5c9->leave($__internal_4e8264cfcee0b73234c23f215b0fa79756bf4b2ebf2c9f4bc9b7a5c7fdfac5c9_prof);

        
        $__internal_936f30ab056ee2d1db1e8a5f37743369c18a4f73b848d8c1ca9078c1dde07d05->leave($__internal_936f30ab056ee2d1db1e8a5f37743369c18a4f73b848d8c1ca9078c1dde07d05_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 48,  195 => 27,  178 => 23,  161 => 20,  151 => 15,  142 => 14,  124 => 5,  111 => 50,  109 => 48,  90 => 32,  86 => 31,  82 => 29,  80 => 27,  76 => 25,  74 => 23,  71 => 22,  69 => 20,  63 => 16,  61 => 14,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  37 => 5,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<head>
    <title>{% block title %} Blog title {% endblock %}</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('font/font.css') }}\">
    <link href=\"{{ asset('style.css') }}\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"{{ asset('responsive.css') }}\" rel=\"stylesheet\" media=\"screen\">

    {% block stylesheets %}
    {% endblock %}

</head>
<body>

{% block header %}
{% endblock %}

{% block body %}
{% endblock %}


{% block footer %}
{% endblock %}


<script type=\"text/javascript\" src=\"{{ asset('js/placeholder_support_IE.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/selectnav.min.js') }}\"></script>
<script type=\"text/javascript\">
    selectnav('nav-top', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });

    selectnav('nav-bottom', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
</script>
<script src=\"http://code.jquery.com/jquery.js\" type=\"text/javascript\"></script>

{% block javascripts %}
{% endblock %}

</body>
</html>
", "::base.html.twig", "/var/www/html/freshblog/app/Resources/views/base.html.twig");
    }
}
