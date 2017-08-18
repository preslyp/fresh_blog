<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_f7a30738b502d4d5be5b28647edf0b25e626c663d4f66bac810fbae2a29a3fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Default:index.html.twig", 1);
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
        $__internal_66f63ae581362068a4567dd49241d51399824bcb9b426da4d47808add8821893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f63ae581362068a4567dd49241d51399824bcb9b426da4d47808add8821893->enter($__internal_66f63ae581362068a4567dd49241d51399824bcb9b426da4d47808add8821893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $__internal_5d1939bfc0c70c638a44182a6d034eb8d6793cbcd8d9fb3a1089b83b9ff1abbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1939bfc0c70c638a44182a6d034eb8d6793cbcd8d9fb3a1089b83b9ff1abbc->enter($__internal_5d1939bfc0c70c638a44182a6d034eb8d6793cbcd8d9fb3a1089b83b9ff1abbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f63ae581362068a4567dd49241d51399824bcb9b426da4d47808add8821893->leave($__internal_66f63ae581362068a4567dd49241d51399824bcb9b426da4d47808add8821893_prof);

        
        $__internal_5d1939bfc0c70c638a44182a6d034eb8d6793cbcd8d9fb3a1089b83b9ff1abbc->leave($__internal_5d1939bfc0c70c638a44182a6d034eb8d6793cbcd8d9fb3a1089b83b9ff1abbc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87950b19757a4189c2bf2aabc46eb86f5d440446e720eb6be71306f385ce682b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87950b19757a4189c2bf2aabc46eb86f5d440446e720eb6be71306f385ce682b->enter($__internal_87950b19757a4189c2bf2aabc46eb86f5d440446e720eb6be71306f385ce682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8285ee51ed3152400a586cd32a933a9729dc2ffbbd6be99181422eb5f3b3ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8285ee51ed3152400a586cd32a933a9729dc2ffbbd6be99181422eb5f3b3ae3->enter($__internal_e8285ee51ed3152400a586cd32a933a9729dc2ffbbd6be99181422eb5f3b3ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Home - My Blog ";
        
        $__internal_e8285ee51ed3152400a586cd32a933a9729dc2ffbbd6be99181422eb5f3b3ae3->leave($__internal_e8285ee51ed3152400a586cd32a933a9729dc2ffbbd6be99181422eb5f3b3ae3_prof);

        
        $__internal_87950b19757a4189c2bf2aabc46eb86f5d440446e720eb6be71306f385ce682b->leave($__internal_87950b19757a4189c2bf2aabc46eb86f5d440446e720eb6be71306f385ce682b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc85756a418bd3c1e369dd29b090e7bcbca3c8dd3b2eb52b91f3177679f8d034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc85756a418bd3c1e369dd29b090e7bcbca3c8dd3b2eb52b91f3177679f8d034->enter($__internal_bc85756a418bd3c1e369dd29b090e7bcbca3c8dd3b2eb52b91f3177679f8d034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_96cf1bf89eb931dc8857ca0538a9df3748618fd7f140bd95017291472c4a8156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cf1bf89eb931dc8857ca0538a9df3748618fd7f140bd95017291472c4a8156->enter($__internal_96cf1bf89eb931dc8857ca0538a9df3748618fd7f140bd95017291472c4a8156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_96cf1bf89eb931dc8857ca0538a9df3748618fd7f140bd95017291472c4a8156->leave($__internal_96cf1bf89eb931dc8857ca0538a9df3748618fd7f140bd95017291472c4a8156_prof);

        
        $__internal_bc85756a418bd3c1e369dd29b090e7bcbca3c8dd3b2eb52b91f3177679f8d034->leave($__internal_bc85756a418bd3c1e369dd29b090e7bcbca3c8dd3b2eb52b91f3177679f8d034_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_49c0f0fe7920ee774d01dde3b9894b2643578ba13b7f9ca4ca229d9abc5c384d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c0f0fe7920ee774d01dde3b9894b2643578ba13b7f9ca4ca229d9abc5c384d->enter($__internal_49c0f0fe7920ee774d01dde3b9894b2643578ba13b7f9ca4ca229d9abc5c384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_59b45d202f198ecf41683ad07b48b477aab4c032d219316ddb415470a4b6ae91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b45d202f198ecf41683ad07b48b477aab4c032d219316ddb415470a4b6ae91->enter($__internal_59b45d202f198ecf41683ad07b48b477aab4c032d219316ddb415470a4b6ae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "::header.html.twig");
        echo "
";
        
        $__internal_59b45d202f198ecf41683ad07b48b477aab4c032d219316ddb415470a4b6ae91->leave($__internal_59b45d202f198ecf41683ad07b48b477aab4c032d219316ddb415470a4b6ae91_prof);

        
        $__internal_49c0f0fe7920ee774d01dde3b9894b2643578ba13b7f9ca4ca229d9abc5c384d->leave($__internal_49c0f0fe7920ee774d01dde3b9894b2643578ba13b7f9ca4ca229d9abc5c384d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab67ea2805f69fa03ee5537c62e898d077d13c701e5ef81f71b0ec4ac7a0e902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab67ea2805f69fa03ee5537c62e898d077d13c701e5ef81f71b0ec4ac7a0e902->enter($__internal_ab67ea2805f69fa03ee5537c62e898d077d13c701e5ef81f71b0ec4ac7a0e902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74331dd4c34d5433127eeb63aecd615c6e8cbb4a048ce0ed44939860842b6233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74331dd4c34d5433127eeb63aecd615c6e8cbb4a048ce0ed44939860842b6233->enter($__internal_74331dd4c34d5433127eeb63aecd615c6e8cbb4a048ce0ed44939860842b6233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"fix content_area\">

        ";
        // line 14
        echo twig_include($this->env, $context, "::submenu.html.twig");
        echo "

        <div class=\"fix wrap content_wrapper\">
            <div class=\"fix content\">
                <div class=\"fix main_content floatleft\">
                    <div class=\"fix single_content_wrapper\">

                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articleAll"]) || array_key_exists("articleAll", $context) ? $context["articleAll"] : (function () { throw new Twig_Error_Runtime('Variable "articleAll" does not exist.', 21, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 22
            echo "                            ";
            echo twig_include($this->env, $context, "::article.html.twig");
            echo "
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </div>

                    <div class=\"pagination fix\">
                        <a href=\"\">1</a>
                        <a href=\"\">2</a>
                        <a href=\"\">3</a>
                        <a href=\"\">4</a>
                        <a href=\"\">5</a>
                        <a href=\"\">6</a>
                    </div>
                </div>
                ";
        // line 35
        echo twig_include($this->env, $context, "::sidebar.html.twig");
        echo "
            </div>


        </div>

        <div class=\"fix bottom_add_bar\">
            <div class=\"addbar_leaderborard\"><img src=\"http://placehold.it/728x90\"/></div>
        </div>

    </div>
";
        
        $__internal_74331dd4c34d5433127eeb63aecd615c6e8cbb4a048ce0ed44939860842b6233->leave($__internal_74331dd4c34d5433127eeb63aecd615c6e8cbb4a048ce0ed44939860842b6233_prof);

        
        $__internal_ab67ea2805f69fa03ee5537c62e898d077d13c701e5ef81f71b0ec4ac7a0e902->leave($__internal_ab67ea2805f69fa03ee5537c62e898d077d13c701e5ef81f71b0ec4ac7a0e902_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1eca802b18fe193c2d7608c8a848d23e7a44e63c21477a26dec261603215498e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eca802b18fe193c2d7608c8a848d23e7a44e63c21477a26dec261603215498e->enter($__internal_1eca802b18fe193c2d7608c8a848d23e7a44e63c21477a26dec261603215498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_295ad73587f2c97bdd60c64f2a728d80169766db5791ef416c245658ef8625d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295ad73587f2c97bdd60c64f2a728d80169766db5791ef416c245658ef8625d0->enter($__internal_295ad73587f2c97bdd60c64f2a728d80169766db5791ef416c245658ef8625d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "    ";
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
";
        
        $__internal_295ad73587f2c97bdd60c64f2a728d80169766db5791ef416c245658ef8625d0->leave($__internal_295ad73587f2c97bdd60c64f2a728d80169766db5791ef416c245658ef8625d0_prof);

        
        $__internal_1eca802b18fe193c2d7608c8a848d23e7a44e63c21477a26dec261603215498e->leave($__internal_1eca802b18fe193c2d7608c8a848d23e7a44e63c21477a26dec261603215498e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92faaee7895d1de5668f5b0c55bd457967a19b05c38dfb3b48497c27b4df9d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92faaee7895d1de5668f5b0c55bd457967a19b05c38dfb3b48497c27b4df9d7f->enter($__internal_92faaee7895d1de5668f5b0c55bd457967a19b05c38dfb3b48497c27b4df9d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_19c2d68e84204a7895cd779b4c59309784285aaeae7ec38d1f35e6ae68025755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c2d68e84204a7895cd779b4c59309784285aaeae7ec38d1f35e6ae68025755->enter($__internal_19c2d68e84204a7895cd779b4c59309784285aaeae7ec38d1f35e6ae68025755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_19c2d68e84204a7895cd779b4c59309784285aaeae7ec38d1f35e6ae68025755->leave($__internal_19c2d68e84204a7895cd779b4c59309784285aaeae7ec38d1f35e6ae68025755_prof);

        
        $__internal_92faaee7895d1de5668f5b0c55bd457967a19b05c38dfb3b48497c27b4df9d7f->leave($__internal_92faaee7895d1de5668f5b0c55bd457967a19b05c38dfb3b48497c27b4df9d7f_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 52,  203 => 49,  194 => 48,  172 => 35,  159 => 24,  142 => 22,  125 => 21,  115 => 14,  111 => 12,  102 => 11,  89 => 8,  80 => 7,  63 => 5,  45 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig'%}

{% block title %} Home - My Blog {% endblock %}

{% block stylesheets %}{% endblock %}

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

                        {% for article in articleAll %}
                            {{ include('::article.html.twig') }}
                        {% endfor %}
                    </div>

                    <div class=\"pagination fix\">
                        <a href=\"\">1</a>
                        <a href=\"\">2</a>
                        <a href=\"\">3</a>
                        <a href=\"\">4</a>
                        <a href=\"\">5</a>
                        <a href=\"\">6</a>
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
{% endblock %}", "BlogBundle:Default:index.html.twig", "/var/www/html/freshblog/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
