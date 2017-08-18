<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ecebb61ed8724833a1738720106c7188bc414164f59d4cf4a3448fd5c3a16c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ecebb61ed8724833a1738720106c7188bc414164f59d4cf4a3448fd5c3a16c6->enter($__internal_0ecebb61ed8724833a1738720106c7188bc414164f59d4cf4a3448fd5c3a16c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bd6f8e7fcf8d59b8a3df26e91c998e4507e23f3e098aadbce4d8c643a9d8652e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6f8e7fcf8d59b8a3df26e91c998e4507e23f3e098aadbce4d8c643a9d8652e->enter($__internal_bd6f8e7fcf8d59b8a3df26e91c998e4507e23f3e098aadbce4d8c643a9d8652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecebb61ed8724833a1738720106c7188bc414164f59d4cf4a3448fd5c3a16c6->leave($__internal_0ecebb61ed8724833a1738720106c7188bc414164f59d4cf4a3448fd5c3a16c6_prof);

        
        $__internal_bd6f8e7fcf8d59b8a3df26e91c998e4507e23f3e098aadbce4d8c643a9d8652e->leave($__internal_bd6f8e7fcf8d59b8a3df26e91c998e4507e23f3e098aadbce4d8c643a9d8652e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97267228ac4dea147c80906e5b85f07a469fa12ca1ca01c64fc2687701fd13d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97267228ac4dea147c80906e5b85f07a469fa12ca1ca01c64fc2687701fd13d1->enter($__internal_97267228ac4dea147c80906e5b85f07a469fa12ca1ca01c64fc2687701fd13d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f8f1014450765222567f7a93068ace99c3b1a23bff63dfbe59d5a36f7bc9171c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f1014450765222567f7a93068ace99c3b1a23bff63dfbe59d5a36f7bc9171c->enter($__internal_f8f1014450765222567f7a93068ace99c3b1a23bff63dfbe59d5a36f7bc9171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f8f1014450765222567f7a93068ace99c3b1a23bff63dfbe59d5a36f7bc9171c->leave($__internal_f8f1014450765222567f7a93068ace99c3b1a23bff63dfbe59d5a36f7bc9171c_prof);

        
        $__internal_97267228ac4dea147c80906e5b85f07a469fa12ca1ca01c64fc2687701fd13d1->leave($__internal_97267228ac4dea147c80906e5b85f07a469fa12ca1ca01c64fc2687701fd13d1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7ac0fd87460af50702d9059093e996ea778d32a495782404d3d7a68b15d85b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ac0fd87460af50702d9059093e996ea778d32a495782404d3d7a68b15d85b7->enter($__internal_b7ac0fd87460af50702d9059093e996ea778d32a495782404d3d7a68b15d85b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2fe1f6094a3305cbf34176f5aa160668281abd7a0795e43341c709bcf2a55fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe1f6094a3305cbf34176f5aa160668281abd7a0795e43341c709bcf2a55fc5->enter($__internal_2fe1f6094a3305cbf34176f5aa160668281abd7a0795e43341c709bcf2a55fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2fe1f6094a3305cbf34176f5aa160668281abd7a0795e43341c709bcf2a55fc5->leave($__internal_2fe1f6094a3305cbf34176f5aa160668281abd7a0795e43341c709bcf2a55fc5_prof);

        
        $__internal_b7ac0fd87460af50702d9059093e996ea778d32a495782404d3d7a68b15d85b7->leave($__internal_b7ac0fd87460af50702d9059093e996ea778d32a495782404d3d7a68b15d85b7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5af62b1b5f497a7ec8a326586673f6bf7979aab9bb462edacac9698216506f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af62b1b5f497a7ec8a326586673f6bf7979aab9bb462edacac9698216506f74->enter($__internal_5af62b1b5f497a7ec8a326586673f6bf7979aab9bb462edacac9698216506f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40797351cf7b5b980aa19092d7e7dd6cd847a3703c376b53cded369ee9ed0a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40797351cf7b5b980aa19092d7e7dd6cd847a3703c376b53cded369ee9ed0a0f->enter($__internal_40797351cf7b5b980aa19092d7e7dd6cd847a3703c376b53cded369ee9ed0a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_40797351cf7b5b980aa19092d7e7dd6cd847a3703c376b53cded369ee9ed0a0f->leave($__internal_40797351cf7b5b980aa19092d7e7dd6cd847a3703c376b53cded369ee9ed0a0f_prof);

        
        $__internal_5af62b1b5f497a7ec8a326586673f6bf7979aab9bb462edacac9698216506f74->leave($__internal_5af62b1b5f497a7ec8a326586673f6bf7979aab9bb462edacac9698216506f74_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/freshblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
